<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem_informasi extends CI_Controller
{
    public function index()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Dashboard';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/index');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function profil()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Profil';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/profil');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function dosen()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Dosen';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/dosen');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function keunggulan()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Keunggulan';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/keunggulan');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function capaian_Pembelajaran()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Capaian Pembelajaran';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/capaian-pembelajaran');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function kurikulum()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Kurikulum';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/kurikulum');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function profil_Lulusan()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Profil Lulusan';

		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/profil-lulusan');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}

	public function prospek_Karir()
	{
		$data['prodi'] = 'Sistem Informasi';
		$data['title'] = 'Prospek Karir';
		$this->load->view('program-studi/partial/prodi_si_header', $data);
		$this->load->view('program-studi/partial/prodi_si_sidebar', $data);
		$this->load->view('program-studi/sistem-informasi/prospek-karir');
		$this->load->view('program-studi/partial/prodi_si_footer');
	}
}
