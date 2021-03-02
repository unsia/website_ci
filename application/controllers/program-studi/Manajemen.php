<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen extends CI_Controller
{
    public function index()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Dashboard';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/index');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function profil()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Profil';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/profil');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function dosen()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Dosen';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/dosen');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function keunggulan()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Keunggulan';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/keunggulan');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function capaian_Pembelajaran()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Capaian Pembelajaran';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/capaian-pembelajaran');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function kurikulum()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Kurikulum';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/kurikulum');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function profil_Lulusan()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Profil Lulusan';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/profil-lulusan');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}

	public function prospek_Karir()
	{
		$data['prodi'] = 'Manajemen';
		$data['title'] = 'Prospek Karir';
		$this->load->view('program-studi/partial/prodi_manajemen_header', $data);
		$this->load->view('program-studi/partial/prodi_manajemen_sidebar', $data);
		$this->load->view('program-studi/manajemen/prospek-karir');
		$this->load->view('program-studi/partial/prodi_manajemen_footer');
	}
}
