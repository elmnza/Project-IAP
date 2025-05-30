<?php 

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'My Project';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}