<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{
    public function program_kampus_merdeka()
	{
		$data['title'] = 'Program Kampus Merdeka';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/program-kampus-merdeka');
		$this->load->view('home/partial/home_footer');
	}

	public function panduan_pembelajaran_online()
	{
		$data['title'] = 'Panduan Pembelajaran Online';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/panduan-pembelajaran-online');
		$this->load->view('home/partial/home_footer');
	}

	//PROSES AKADEMIK
	public function keunggulan_lulusan_unsia()
	{
		$data['title'] = 'Keunggulan Lulusan UNSIA';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/proses-akademik/keunggulan-lulusan');
		$this->load->view('home/partial/home_footer');
	}

	public function panduan_akademik()
	{
		$data['title'] = 'Panduan Akademik';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/proses-akademik/panduan-akademik');
		$this->load->view('home/partial/home_footer');
	}

	public function teaching_profesor()
	{
		$data['title'] = 'Teaching Profesor';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/proses-akademik/teaching-professor');
		$this->load->view('home/partial/home_footer');
	}

	public function peraturan_akademik()
	{
		$data['title'] = 'Peraturan Akademik';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/proses-akademik/peraturan-akademik');
		$this->load->view('home/partial/home_footer');
	}

	public function kalender_akademik()
	{
		$data['title'] = 'Kalender Akademik';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/akademik/proses-akademik/kalender-akademik');
		$this->load->view('home/partial/home_footer');
	}
}
