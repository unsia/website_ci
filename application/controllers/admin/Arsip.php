<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function blog()
    {
        $data['title'] = 'Blog';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['blog'] = $this->db->get('blog')->result_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/blog/index', $data);
        $this->load->view('admin/templates/footer');
    }
    
    public function addblog()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'Content', 'required|trim');
        $this->form_validation->set_rules('isi1', 'Content', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/blog/add-blog', $data);
        $this->load->view('admin/templates/footer');
        } else {
            $user = $this->input->post('user');
            $judul = $this->input->post('judul');
            $content = $this->input->post('isi');
            $short_content = $this->input->post('isi1');

            //cek gambar 
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['allowed_types']    = 'jpg|jpeg|png';
                $config['max_size']         = '2048';
                $config['upload_path']      = './assets/images/arsip/blog/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/blog/addblog');
                }
            }

            $data = [
                'user' => $user,
                'judul'  => $judul,
                'image' => $new_image,
                'content'    => $content,
                'short_content'    => $short_content,
                'date_created'  => time()
            ];
            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";
            // die();
            $this->db->insert('blog', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>your file is being processed</strong> wait for our email reply.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('admin/blog');
        }
    }
}
