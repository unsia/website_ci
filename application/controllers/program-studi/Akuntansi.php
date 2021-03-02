<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akuntansi extends CI_Controller
{
    public function index()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Dashboard';
		$this->load->view('program-studi/partial/prodi_akuntansi_header', $data);
		$this->load->view('program-studi/partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('program-studi/akuntansi/index');
		$this->load->view('program-studi/partial/prodi_akuntansi_footer');
	}

	public function dosen()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Dosen';
		$this->load->view('program-studi/partial/prodi_akuntansi_header', $data);
		$this->load->view('program-studi/partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('program-studi/akuntansi/dosen');
		$this->load->view('program-studi/partial/prodi_akuntansi_footer');
	}

	public function keunggulan()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Keunggulan';
		$this->load->view('program-studi/partial/prodi_akuntansi_header', $data);
		$this->load->view('program-studi/partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('program-studi/akuntansi/keunggulan');
		$this->load->view('program-studi/partial/prodi_akuntansi_footer');
	}

	public function kurikulum()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Kurikulum';
		$this->load->view('program-studi/partial/prodi_akuntansi_header', $data);
		$this->load->view('program-studi/partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('program-studi/akuntansi/kurikulum');
		$this->load->view('program-studi/partial/prodi_akuntansi_footer');
	}

	public function prospek_Karir()
	{
		$data['prodi'] = 'Akuntansi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('program-studi/partial/prodi_akuntansi_header', $data);
		$this->load->view('program-studi/partial/prodi_akuntansi_sidebar', $data);
		$this->load->view('program-studi/akuntansi/prospek-karir');
		$this->load->view('program-studi/partial/prodi_akuntansi_footer');
	}

}
