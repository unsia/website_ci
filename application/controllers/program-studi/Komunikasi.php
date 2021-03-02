<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komunikasi extends CI_Controller
{
    public function index()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Dashboard';
		$this->load->view('program-studi/partial/prodi_komunikasi_header', $data);
		$this->load->view('program-studi/partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('program-studi/komunikasi/index');
		$this->load->view('program-studi/partial/prodi_komunikasi_footer');
	}

	public function dosen()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Dosen';
		$this->load->view('program-studi/partial/prodi_komunikasi_header', $data);
		$this->load->view('program-studi/partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('program-studi/komunikasi/dosen');
		$this->load->view('program-studi/partial/prodi_komunikasi_footer');
	}

	public function keunggulan()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Keunggulan';
		$this->load->view('program-studi/partial/prodi_komunikasi_header', $data);
		$this->load->view('program-studi/partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('program-studi/komunikasi/keunggulan');
		$this->load->view('program-studi/partial/prodi_komunikasi_footer');
	}

	public function kurikulum()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Kurikulum';
		$this->load->view('program-studi/partial/prodi_komunikasi_header', $data);
		$this->load->view('program-studi/partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('program-studi/komunikasi/kurikulum');
		$this->load->view('program-studi/partial/prodi_komunikasi_footer');
	}

	public function prospek_Karir()
	{
		$data['prodi'] = 'Komunikasi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('program-studi/partial/prodi_komunikasi_header', $data);
		$this->load->view('program-studi/partial/prodi_komunikasi_sidebar', $data);
		$this->load->view('program-studi/komunikasi/prospek-karir');
		$this->load->view('program-studi/partial/prodi_komunikasi_footer');
	}

}
