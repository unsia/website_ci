<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Berita List';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/index');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}

	public function peresmian_unsia()
	{
		$data['title'] = 'Berita';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/peresmian-unsia');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}

	public function transformation_of_digital_communication()
	{
		$data['title'] = 'Berita';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/transformation-of-digital-communication');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}

	public function jambore_nasional_komunikasi()
	{
		$data['title'] = 'Berita';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/jambore-nasional-komunikasi');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}
	
	public function forum_diskusi_dosen()
	{
		$data['title'] = 'Berita';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/forum-diskusi-dosen');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}

	public function mou_dekopin()
	{
		$data['title'] = 'Penandatanganan MoU UNSIA x DEKOPIN';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/berita/mou-dekopin');
		$this->load->view('home/arsip/berita/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}
}
