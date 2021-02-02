<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informatika extends CI_Controller
{
    public function index()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Dashboard';
		$this->load->view('program-studi/partial/prodi_informatika_header', $data);
		$this->load->view('program-studi/partial/prodi_informatika_sidebar', $data);
		$this->load->view('program-studi/informatika/index');
		$this->load->view('program-studi/partial/prodi_informatika_footer');
	}

	public function dosen()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Dosen';
		$this->load->view('program-studi/partial/prodi_informatika_header', $data);
		$this->load->view('program-studi/partial/prodi_informatika_sidebar', $data);
		$this->load->view('program-studi/informatika/dosen');
		$this->load->view('program-studi/partial/prodi_informatika_footer');
	}

	public function keunggulan()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Keunggulan';
		$this->load->view('program-studi/partial/prodi_informatika_header', $data);
		$this->load->view('program-studi/partial/prodi_informatika_sidebar', $data);
		$this->load->view('program-studi/informatika/keunggulan');
		$this->load->view('program-studi/partial/prodi_informatika_footer');
	}

	public function kurikulum()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Kurikulum';
		$this->load->view('program-studi/partial/prodi_informatika_header', $data);
		$this->load->view('program-studi/partial/prodi_informatika_sidebar', $data);
		$this->load->view('program-studi/informatika/kurikulum');
		$this->load->view('program-studi/partial/prodi_informatika_footer');
	}

	public function prospekKarir()
	{
		$data['prodi'] = 'Informatika';
		$data['title'] = 'Prospek Karir';
		$this->load->view('program-studi/partial/prodi_informatika_header', $data);
		$this->load->view('program-studi/partial/prodi_informatika_sidebar', $data);
		$this->load->view('program-studi/informatika/prospek-karir');
		$this->load->view('program-studi/partial/prodi_informatika_footer');
	}
}
