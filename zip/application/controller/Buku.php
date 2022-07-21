<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $data["books"] = $this->buku_m->get_data();
        $data["title"] = "Dashboard";
        $this->load->view('components/header', $data);
        $this->load->view('buku/buku');
        $this->load->view('components/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('pencipta', 'Pencipta', 'required');
        $this->form_validation->set_rules('tglterbit', 'tglterbit', 'required');
        $this->form_validation->set_rules('tglterbit', 'tglterbit', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data["title"] = "Tambah Buku";
            $this->load->view('components/header', $data);
            $this->load->view('buku/tambah');
            $this->load->view('components/footer');
        } else {
            $this->buku_m->tambah_data();
            $this->session->set_flashdata('flashdata', 'Tambahkan');
            redirect('buku');
        }
    }
    public function delete($id)
    {
        $this->buku_m->delete_data($id);
        $this->session->set_flashdata('flashdata', 'Hapus');
        redirect('buku');
    }
    public function update($id)
    {
        $data["buku"] = $this->buku_m->getDataById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('pencipta', 'Pencipta', 'required');
        $this->form_validation->set_rules('tglterbit', 'tglterbit', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data["title"] = "Update Buku";
            $this->load->view('components/header', $data);
            $this->load->view('buku/update', $data);
            $this->load->view('components/footer');
        } else {
            $this->buku_m->update_data();
            $this->session->set_flashdata('flashdata', 'Update');
            redirect('buku');
        }
    }
    public function upload()
    {
        $data["title"] = "Upload";
        $this->load->view('components/header', $data);
        $this->load->view('upload/upload', array('error' => ' '));
        $this->load->view('components/footer');
    }
    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload/upload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload/upload_success', $data);
        }
    }
}
