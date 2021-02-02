<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('city', 'Nama Kota', 'required|trim');
		$this->form_validation->set_rules('prodi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('time', 'Waktu', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('phone', 'No HP', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('google-ads');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'phone' => $this->input->post('phone'),
				'city' => $this->input->post('city'),
				'prodi' => $this->input->post('prodi'),
				'time' => $this->input->post('time'),
				'sources' => $this->input->post('sources')
			];
			$connected = @fsockopen('www.google.com', 80);

			if ($connected) {
				fclose($connected);
				
				$this->db->insert('adsense', $data);
				$this->_sendEmail();
				redirect('google/success');
			} else {
				redirect('error404');
			}
		}
	}

	private function _sendEmail()
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


		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('unsia.bantuanpmb@gmail.com');

		$this->email->subject('Leads Google Ads');
		$this->email->message('<table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>' . $this->input->post('name') . '</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>' . $this->input->post('email') . '</td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td>' . $this->input->post('phone') . '</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td>' . $this->input->post('city') . '</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>' . $this->input->post('prodi') . '</td>
        </tr>
        <tr>
            <td>Waktu dihubungi</td>
            <td>:</td>
            <td>' . $this->input->post('time') . '</td>
        </tr>
        <tr>
            <td>Sources</td>
            <td>:</td>
            <td>' . $this->input->post('sources') . '</td>
        </tr>
    </table>');


		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function koneksi()
	{
		$this->load->view('error404');
	}

	public function success()
	{
		$this->load->view('google-success-form');
	}
}
