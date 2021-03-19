<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Htc_model');
    }

    public function htc()
    {
        $data['title'] = 'HTC';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['htc'] = $this->Htc_model->getDataHtc()->result_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/event/htc/index', $data);
        $this->load->view('admin/templates/footer');
    }

    function export_htc()
    {
        $data['title'] = "Form Kehadiran HTC 2021";
        $data['htc'] = $this->Htc_model->getDataHtc()->result_array();
        $this->load->view('admin/event/htc/excel', $data);
    }
}
