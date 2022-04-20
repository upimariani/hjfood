<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_chatting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chatting');
    }

    // List all your items
    public function index($offset = 0)
    {
        $data = array(
            'list_chat' => $this->m_chatting->list_chat()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vchatting', $data);
        $this->load->view('admin/footer');
    }
    public function chat($id_pelanggan)
    {
        $data = array(
            'chat' => $this->m_chatting->chatting($id_pelanggan)
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vlist_chatting', $data);
        $this->load->view('admin/footer');
    }
    public function send($id_pelanggan)
    {
        $data = array(
            'id_pelanggan' => $id_pelanggan,
            'admin_send' => $this->input->post('msg'),
            'pelanggan_send' => '0'
        );
        $this->db->insert('chatting', $data);
        redirect('admin/c_chatting/chat/' . $id_pelanggan, 'refresh');
    }
}

/* End of file c_chatting.php */
