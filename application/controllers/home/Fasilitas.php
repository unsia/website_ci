<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function learning_community()
	{
		$data['title'] = 'Learning Community';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/fasilitas/learning-community');
		$this->load->view('home/partial/home_footer');
	}

	public function laboratorium_virtual()
	{
		$data['title'] = 'Laboratorium Virtual';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/fasilitas/lab-virtual');
		$this->load->view('home/partial/home_footer');
	}

	public function studio_multimedia()
	{
		$data['title'] = 'Studio Multimedia';
		$data['menu'] = 'Fasilitas';
		$data['submenu'] = '';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/fasilitas/studio-multimedia');
		$this->load->view('home/partial/home_footer');
	}
}
