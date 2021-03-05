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
<<<<<<< HEAD
		$this->load->view('home/error404');
=======
		$this->load->view('error404');
>>>>>>> 431d4eda4df64772618b76d92e3d12cb89577a30
	}
}
