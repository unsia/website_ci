<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_unsia extends CI_Controller {

	public function salam_rektor()
	{
		$data['title'] = 'Salam Rektor';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/salam-rektor');
		$this->load->view('home/partial/home_footer');
	}

	public function kenapa_unsia()
	{
		$data['title'] = 'Kenapa UNSIA ?';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/why-unsia');
		$this->load->view('home/partial/home_footer');
	}

	public function keunggulan_dan_manfaat()
	{
		$data['title'] = 'Keunggulan dan Manfaat';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/benefit');
		$this->load->view('home/partial/home_footer');
	}

	public function list_of_partner()
	{
		$data['title'] = 'List of Partner';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/list-of-partner');
		$this->load->view('home/partial/home_footer');
	}

	public function sejarah()
	{
		$data['title'] = 'Sejarah';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/sejarah');
		$this->load->view('home/partial/home_footer');
	}

	public function visi_misi()
	{
		$data['title'] = 'Visi Misi';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/visi-misi');
		$this->load->view('home/partial/home_footer');
	}

	public function struktur_organisasi()
	{
		$data['title'] = 'Struktur Organisasi';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/struktur-organisasi');
		$this->load->view('home/partial/home_footer');
	}

	public function faq()
	{
		$data['title'] = 'FAQ';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/tentang-unsia/faq');
		$this->load->view('home/partial/home_footer');
	}
}
