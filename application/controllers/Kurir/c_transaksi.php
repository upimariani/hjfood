<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kurir');
    }

    // List all your items
    public function index()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'kurir' => $this->m_kurir->select()
        );
        $this->load->view('kurir/head');
        $this->load->view('kurir/nav');
        $this->load->view('kurir/vshipping', $data);
        $this->load->view('kurir/footer');
    }
    public function upload($id_transaksi)
    {
        $config['upload_path']          = './asset/bukti/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '5000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti')) {
            $this->admin_login->cek_halaman();
            $data = array(
                'kurir' => $this->m_kurir->select()
            );
            $this->load->view('kurir/head');
            $this->load->view('kurir/nav');
            $this->load->view('kurir/vshipping', $data);
            $this->load->view('kurir/footer');
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'bukti' => $upload_data['file_name']
            );
            $this->db->where('id_transaksi', $id_transaksi);
            $this->db->update('pengiriman', $data);
            redirect('kurir/c_transaksi');
        }
    }
}

/* End of file c_transaksi.php */
