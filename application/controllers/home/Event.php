<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

	public function __construct()
    {
		parent::__construct();
    }

	public function gempita()
	{
		$this->load->view('home/event/gempita');
	}

	private function _send($id)
	{
		$this->load->view('home/event/gempita');
	}
}
