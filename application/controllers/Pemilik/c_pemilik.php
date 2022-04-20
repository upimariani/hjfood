<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_pemilik extends CI_Controller
{
    public function index()
    {
        $this->load->view('pemilik/head');
        $this->load->view('pemilik/nav');
        $this->load->view('pemilik/vpemilik');
        $this->load->view('pemilik/footer');
    }
}
