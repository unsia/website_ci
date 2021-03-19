<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	public function __construct()
    {
		parent::__construct();
        $this->load->model('Htc_model');
    }

    public function htc()
	{
		$query = $this->Htc_model->getTotalOnline();
        $data['htc'] = $query->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|min_length[12]|is_unique[form_htc.nim]');
		$this->form_validation->set_rules('prodi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('kehadiran', 'Kehadiran', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[form_htc.email]');
		$this->form_validation->set_rules('phone', 'No HP', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('swab', 'Pernyataan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('home/event/htc', $data);
		} else {
			$email = $this->input->post('email', true);
			$nohp = $this->input->post('phone');

			// kadang ada penulisan no hp 0811 239 345
			$nohp = str_replace(" ","",$nohp);
			// kadang ada penulisan no hp (0274) 778787
			$nohp = str_replace("(","",$nohp);
			// kadang ada penulisan no hp (0274) 778787
			$nohp = str_replace(")","",$nohp);
			// kadang ada penulisan no hp 0811.239.345
			$nohp = str_replace(".","",$nohp);
		
			// cek apakah no hp mengandung karakter + dan 0-9
			if(!preg_match('/[^+0-9]/',trim($nohp))){
				// cek apakah no hp karakter 1-3 adalah +62
				if(substr(trim($nohp), 0, 3)=='+62'){
					$hp = trim($nohp);
				}
				// cek apakah no hp karakter 1 adalah 0
				elseif(substr(trim($nohp), 0, 1)=='0'){
					$hp = '+62'.substr(trim($nohp), 1);
				}
			}
			

			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'phone' => $hp,
				'nim' => $this->input->post('nim'),
				'prodi' => $this->input->post('prodi'),
				'kehadiran' => $this->input->post('kehadiran'),
				'alamat' => $this->input->post('alamat'),
				'swab' => $this->input->post('swab'),
				'date_created' => time()
			];
				$this->db->insert('form_htc', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('home/event/htc');
		}
	}
}
