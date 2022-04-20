<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_reward extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_reward');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'reward' => $this->m_reward->reward()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vreward', $data);
        $this->load->view('admin/footer');
    }
    public function validasi($id_reward)
    {
        $data = array(
            'validasi' => '2'
        );
        $this->db->where('id_reward', $id_reward);
        $this->db->update('reward', $data);
        $this->session->set_flashdata('pesan', 'Reward Berhasil Divalidasi');
        redirect('admin/c_reward', 'refresh');
    }
}

/* End of file c_reward.php */
