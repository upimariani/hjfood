<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }

    // List all your items
    public function index()
    {

        $data = array(
            'status' => $this->m_transaksi->transaksi(),
            'kurir' => $this->m_transaksi->kurir()
        );
        $this->admin_login->cek_halaman();
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vtransaksi', $data);
        $this->load->view('admin/footer');
    }
    public function detail_pemesanan($id_transaksi)
    {
        $data = array(
            'detail' => $this->m_transaksi->detail_pesanan($id_transaksi)
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vdetail_pemesanan', $data);
        $this->load->view('admin/footer');
    }
    public function konfirmasi($id_transaksi)
    {
        $data = array(
            'validasi_pembayaran' => 'Valid'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('pembayaran', $data);

        redirect('admin/c_transaksi', 'refresh');
    }
    public function kirim($id_transaksi)
    {
        $data = array(
            'status_pengemasan' => 'Valid'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('pengemasan', $data);

        $kurir = array(
            'id_kurir' => $this->input->post('kurir')
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('pengiriman', $kurir);
        redirect('admin/c_transaksi', 'refresh');
    }
    public function selesai($id_transaksi)
    {
        $qty = 0;
        $detail_pesanan = $this->m_transaksi->pesanan($id_transaksi);
        foreach ($detail_pesanan as $key => $value) {
            $qty = $qty + $value->qty;
        }
        $total = 0;
        $pelanggan = $this->m_transaksi->pelanggan($id_transaksi);
        foreach ($pelanggan as $key => $value) {
            $email = $value->email;
            $id = $value->id_pelanggan;
            $reward = $value->reward;
        }
        $total = $reward + $qty;
        $reward = array(
            'reward' => $total
        );
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $reward);


        if ($total >= 100) {
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
            $this->email->subject('Reward');
            $this->email->message('Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian');
            $this->email->send();
            $gift = array(
                'isi' => 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian',
                'id_pelanggan' => $id,
                'validasi' => '1'
            );
            $this->db->insert('reward', $gift);

            //pengurangan point reward
            $sisa = 0;
            $sisa = $total - 100;
            $upgrade = array(
                'reward' => $sisa
            );
            $this->db->where('id_pelanggan', $id);
            $this->db->update('pelanggan', $upgrade);
        }
        $data = array(
            'status_pengiriman' => 'Valid'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('pengiriman', $data);
        redirect('admin/c_transaksi', 'refresh');
    }


    //coba
    public function send()
    {
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
        $this->email->to('20170910027@uniku.ac.id');
        $this->email->subject('tes');
        $this->email->message('tes');


        if ($this->email->send()) {
            echo 'sukses!!';
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}

/* End of file c_transaksi.php */
