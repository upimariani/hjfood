<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_profil');
    }

    // List all your items
    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'pelanggan' => $this->m_profil->pelanggan(),
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vprofil', $data);
        $this->load->view('pelanggan/footer');
    }
    public function update_profil($id_pelanggan)
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jk'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('pelanggan', $data);

        redirect('pelanggan/c_profil', 'refresh');
    }
}

/* End of file c_profil.php */
