<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->model('m_auth');
        $this->load->model('m_pelanggan');
        $this->load->model('m_profil');
        $this->load->model('m_pesanan_saya');
    }

    public function register_pelanggan()
    {
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('no_hp', 'Nomor Telpon', 'required|min_length[11]|max_length[13]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'min_length' => '%s Minimal 11 angka !!!',
            'max_length' => '%s Maksimal 13 angka !!!'
        ));
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('username', 'Username Pelanggan', 'required|is_unique[pelanggan.username]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'is_unique' => '%s Username Sudah Terdaptar'
        ));
        $this->form_validation->set_rules('email', 'Email Pelanggan', 'required|is_unique[pelanggan.email]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'is_unique' => '%s Email Sudah Terdaptar'
        ));
        $this->form_validation->set_rules('password', 'Password Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_desa' => $this->input->post('desa'),
                'nama_pelanggan' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jk'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'password' => $this->input->post('password'),
                'reward' => '0'
            );
            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('pesan', 'Register Berhasil, Silahkan Untuk Login!!!');
            redirect('pelanggan/c_login/login', 'refresh');
        } else {
            $this->load->view('pelanggan/vregister');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            //pesanan lebih dari 24 jam

            $pesanan = $this->m_pesanan_saya->belum_bayar();
            foreach ($pesanan as $key => $value) {
                // $date = $value->tgl_transaksi;
                // $tgl2 = date('Y-m-d', strtotime('+1 days', strtotime($date)));
                $datein = date('Y-m-d');
                if ($value->tgl_transaksi < $datein) {
                    $this->db->where('id_transaksi', $value->id_transaksi);
                    $this->db->delete('transaksi');
                    $this->db->delete('pembayaran');
                    $this->db->delete('pengemasan');
                    $this->db->delete('pengiriman');
                }
            }
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($username, $password);
        } else {
            $data = array(
                'reward' => $this->m_profil->reward()
            );
            $this->load->view('pelanggan/head');
            $this->load->view('pelanggan/header', $data);
            $this->load->view('pelanggan/vlogin');
            $this->load->view('pelanggan/footer');
        }
    }
    public function lupa_password()
    {
        $data = array(
            'reward' => $this->m_profil->reward()
        );
        $this->load->view('pelanggan/head');
        $this->load->view('pelanggan/header', $data);
        $this->load->view('pelanggan/vlupa_password');
        $this->load->view('pelanggan/footer');
    }
    public function verifikasi_akun()
    {
        $email = $this->input->post('email');
        $akun = $this->m_profil->lupa_password($email);
        if ($akun) {
            $pesan = 'Akun Username Anda adalah ' . $akun->username . ' dan Password Anda adalah <strong>' . $akun->password . '</strong>';
            $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => '20170910067@uniku.ac.id',
                'smtp_pass' => 'hanjani24',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            ];
            $this->load->library('email', $config);
            $this->email->from('20170910067@uniku.ac.id', 'HJ FOOD');
            $this->email->to($email);
            $this->email->subject('Verifikasi Akun');
            $this->email->message($pesan);


            if ($this->email->send()) {
                $this->session->set_flashdata('pesan', 'Silahkan cek email anda!!!');
                redirect('pelanggan/c_login/login');
                return true;
            } else {
                echo $this->email->print_debugger();
                die;
            }
        } else {
            $this->session->set_flashdata('pesan', 'Email Tidak Terdaftar!!!');
            redirect('pelanggan/c_login/lupa_password');
        }
    }

    public function logout()
    {
        $this->pelanggan_login->logout();
    }
}
