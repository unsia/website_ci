<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function index()
	{

		$data['blog'] = $this->db->get('blog')->result_array();

		$data['title'] = 'Blog List';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/blog/index', $data);
		$this->load->view('home/arsip/blog/partial/recent-post', $data);
		$this->load->view('home/partial/home_footer');
	}
	
	public function detail_blog($id)
	{
		$datablog['blog'] = $this->db->get('blog')->result_array();

		$data['blog'] = $this->db->get_where('blog', ['id' =>
        $id])->row_array();

		$data['title'] = 'Detail Blog';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/blog/detail-blog', $data);
		$this->load->view('home/arsip/blog/partial/recent-post', $datablog);
		$this->load->view('home/partial/home_footer');
	}

	public function belajar_online()
	{
		$data['title'] = 'Blog - Belajar Online';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/blog/belajar-online');
		$this->load->view('home/arsip/blog/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}
	public function kelas_online()
	{
		$data['title'] = 'Blog - Kelas Online';
		$this->load->view('home/partial/home_header', $data);
		$this->load->view('home/partial/home_navbar', $data);
		$this->load->view('home/arsip/blog/kelas-online');
		$this->load->view('home/arsip/blog/partial/recent-post');
		$this->load->view('home/partial/home_footer');
	}
}
