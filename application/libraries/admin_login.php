<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin_login
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login_admin');
    }
    public function login($username, $password)
    {
        $cek = $this->ci->m_login_admin->login_admin($username, $password);
        if ($cek) {
            $id_user = $cek->id_user;
            $username = $cek->username;
            $level = $cek->level;
            //session
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('level', $level);
            $this->ci->session->set_userdata('id_user', $id_user);
            if ($level == 1) {
                redirect('admin/c_kelola_data/produk');
            } elseif ($level == 2) {
                redirect('pemilik/c_laporan');
            } elseif ($level == 3) {
                redirect('kurir/c_transaksi');
            }
        } else {
            //jika salah
            $this->ci->session->set_flashdata('gagal', 'Username Atau Password Salah!!!');
            redirect('admin/c_login');
        }
    }
    public function cek_halaman()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('gagal', 'Anda Belum login!!!');
            redirect('admin/c_login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->unset_userdata('id_user');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout!!!');
        redirect('admin/c_login');
    }
}
