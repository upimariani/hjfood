<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_chatting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_profil');
        $this->load->model('m_katalog');
        $this->load->model('m_chatting');
    }

    // List all your items
    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'reward' => $this->m_profil->reward(),
            'chat' => $this->m_chatting->select_chat()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vchatting', $data);
        $this->load->view('pelanggan/footer');
    }
    public function send()
    {
        $data = array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'pelanggan_send' => $this->input->post('message'),
            'admin_send' => '0'
        );
        $this->db->insert('chatting', $data);
        redirect('pelanggan/c_chatting', 'refresh');
    }
}

/* End of file c_chatting.php */
