<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function info_pendaftaran()
	{
		$data['title'] = 'Info Pendaftaran'; 
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/pendaftaran/info-pendaftaran');
		$this->load->view('home/partial/home_footer');
	}

	public function biaya_perkuliahan()
	{
		$data['title'] = 'Biaya Perkuliahan';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/pendaftaran/biaya-perkuliahan');
		$this->load->view('home/partial/home_footer');
	}

	public function beasiswa()
	{
		$data['title'] = 'Beasiswa';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/pendaftaran/beasiswa');
		$this->load->view('home/partial/home_footer');
	}
	public function pembiayaan_soft_loan()
	{
		$data['title'] = 'Pembiayaan Soft Loan';
		$data['menu'] = 'Pendaftaran';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/pendaftaran/pembiayaan-soft-loan');
		$this->load->view('home/partial/home_footer');
	}
}
