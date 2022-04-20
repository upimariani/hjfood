<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_katalog extends CI_Model
{

    public function katalog()
    {
        if ($this->session->userdata('id_pelanggan') == '') {
            $this->db->select('*');
            $this->db->from('produk');
            $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
            $this->db->where('produk.tipe=1');
            $this->db->where('potongan !=0');
            return $this->db->get()->result();
        } else {
            $this->db->select('*');
            $this->db->from('produk');
            $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
            $this->db->where('produk.tipe=1');
            return $this->db->get()->result();
        }
    }
    public function upselling()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('produk.tipe=2');
        return $this->db->get()->result();
    }
    public function bundling()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('produk.tipe=3');
        return $this->db->get()->result();
    }
    public function cart()
    {
        $this->db->select('sum(qty) as tot, stok, gambar, keranjang.id_pelanggan, keranjang.id_produk, produk.nama, produk.harga, produk.deskripsi, keranjang.id_keranjang, keranjang.qty, potongan');
        $this->db->from('keranjang');
        $this->db->join('produk', 'keranjang.id_produk = produk.id_produk', 'left');
        $this->db->join('promo', 'produk.id_promo = promo.id_promo', 'left');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->group_by('keranjang.id_produk');
        $data['cart'] = $this->db->get()->result();
        $data['jml'] = $this->db->query("SELECT count(id_pelanggan) as jumlah FROM keranjang where id_pelanggan='" . $this->session->userdata('id_pelanggan') . "' GROUP BY id_pelanggan ")->result();
        $data['total'] = $this->db->query("SELECT SUM(harga*qty) as total FROM keranjang JOIN produk ON keranjang.id_produk=produk.id_produk where id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->result();
        return $data;
    }
}

/* End of file ModelName.php */
