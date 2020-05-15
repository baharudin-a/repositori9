<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function handphone()
    {
        $data['handphone'] = $this->model_kategori->data_handphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('handphone', $data);
        $this->load->view('templates/footer');
    }

    public function permainan()
    {
        $data['permainan'] = $this->model_kategori->data_permainan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('permainan', $data);
        $this->load->view('templates/footer');
    }

    public function aksesoris()
    {
        $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('aksesoris', $data);
        $this->load->view('templates/footer');
    }
}
