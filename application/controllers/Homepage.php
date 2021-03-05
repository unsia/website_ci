<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function index()
	{
		$this->load->view('home/index');
	}

	public function kontak()
	{
		$data['title'] = 'Kontak';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/contact');
		$this->load->view('home/partial/home_footer');
	}
	
	public function error()
	{
		$this->load->view('home/error404');
	}
}
