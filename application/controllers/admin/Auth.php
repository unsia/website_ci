<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('admin/user');
		}

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('admin/templates/auth_header', $data);
			$this->load->view('admin/auth/login');
			$this->load->view('admin/templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		//jika user ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin/administrator');
					} else {
						redirect('admin/user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
					redirect('admin/auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account has not activated</div>');
				redirect('admin/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account has not registered</div>');
			redirect('admin/auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('admin/user');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match',
			'min_length' => 'password too short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'UNSIA - Registration';
			$this->load->view('admin/templates/auth_header', $data);
			$this->load->view('admin/auth/registration');
			$this->load->view('admin/templates/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			$token = base64_encode(random_bytes(32));

			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$connected = @fsockopen('www.google.com', 80);

			if ($connected) {
				// $is_conn = true; //action when connected
				fclose($connected);
				// echo 'berhasil';
				$this->db->insert('user', $data);
				$this->db->insert('user_token', $user_token);

				$this->_sendEmail($token, 'verify');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulation! Please activate your account!</div>');
				redirect('admin/auth');
			} else {
				// $is_conn = false; //action in connection failure
				redirect('admin/auth/koneksi');
			}
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'      => 'smtp',
			'smtp_host'     => 'ssl://smtp.googlemail.com',
			'smtp_user'     => 'mypc804@gmail.com', //email untuk mengirim
			'smtp_pass'     => 'batunisan', //password untuk mengirim
			'smtp_port'     => 465,
			'smtp_timeout'  => 20,
			'mailtype'      => 'html',
			'charset'       => 'utf-8',
			'newline'       => "\r\n"
		];

		$this->email->initialize($config);


		$this->email->from('mypc804@gmail.com', 'Universitas Siber Asia');
		$this->email->to('andezapriansyah84@gmail.com');

		//untuk kirim email verifikasi
		if ($type == 'verify') {
			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify user account ('.$this->input->post('email').')! : <a href="' . base_url() . 'admin/auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
			//untuk kirim email forgot password
		} elseif ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Click this link to reset password! :
                    <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email  = $this->input->get('email');
		$token  = $this->input->get('token');

		$user   = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				// waktu validasi
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated. Please login!</div>');
					redirect('admin/auth');
				} else {
					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);;

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Account activation failed ! Token expired</div>');
					redirect('admin/auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed ! Wrong token</div>');
				redirect('admin/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Account activation failed ! Wrong email</div>');
			redirect('admin/auth');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
		redirect('admin/auth');
	}

	public function blocked()
	{
		$this->load->view('admin/auth/blocked');
	}

	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Forgot Password';
			$data['css']   = base_url('assets/css/forgot.css');
			$this->load->view('admin/templates/auth_header', $data);
			$this->load->view('admin/auth/forgot-password');
			$this->load->view('admin/templates/auth_footer');
		} else {
			$email  = $this->input->post('email');
			$user   = $this->db->get_where('user', [
				'email'     => $email,
				'is_active' => 1
			])->row_array();

			if ($user) {
				$token      = base64_encode(random_bytes(32));
				$user_token = [
					'email'         => $email,
					'token'         => $token,
					'date_created'  => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
                Please check your email to reset password</div>');
				redirect('admin/auth/forgotpassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered or activated</div>');
				redirect('admin/auth/forgotpassword');
			}
		}
	}

	public function resetPassword()
	{
		$email  = $this->input->get('email');
		$token  = $this->input->get('token');

		$user   = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$user_token     = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changepassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Reset password failed. Wrong token</div>');
				redirect('admin/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset password failed. Wrong email</div>');
			redirect('admin/auth');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('admin/auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Change Password';
			$data['css'] = base_url('assets/css/change.css');
			$this->load->view('admin/templates/auth_header', $data);
			$this->load->view('admin/auth/change-password');
			$this->load->view('admin/templates/auth_footer');
		} else {
			$password   = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email      = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');


			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password has been change, please login!</div>');
			redirect('admin/auth');
		}
	}

	public function koneksi()
	{
		$this->load->view('admin/auth/koneksi');
	}
}
