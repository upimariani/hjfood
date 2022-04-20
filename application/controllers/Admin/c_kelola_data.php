<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_kelola_data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelola_data');
    }
    //---------------------------PRODUK-------------------
    //produk
    public function produk()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'produk' => $this->m_kelola_data->produk()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vproduk', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_produk()
    {
        $nama = $this->input->post('nama');
        $produk = $this->m_kelola_data->cek_produk($nama);

        if ($produk) {
            $this->session->set_flashdata('eror', 'Nama Produk Sudah Tersedia');
            redirect('admin/c_kelola_data/produk');
        } else {
            $config['upload_path']          = './asset/produk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '5000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'produk' => $this->m_kelola_data->produk(),
                    'error' => $this->upload->display_errors()
                );
                $this->load->view('admin/head');
                $this->load->view('admin/nav');
                $this->load->view('admin/vupselling', $data);
                $this->load->view('admin/footer');
            } else {
                $upload_data =  $this->upload->data();
                $data = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'tipe' => '1',
                    'gambar' => $upload_data['file_name']
                );
                $this->db->insert('produk', $data);

                $promo = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'potongan' => '0',
                    'mulai' => '0',
                    'selesai' => '0'
                );
                $this->db->insert('promo', $promo);
                $this->session->set_flashdata('pesan', 'Data Produk Berhasil Disimpan');
                redirect('admin/c_kelola_data/produk');
            }
        }
    }
    public function edit_produk($id_produk)
    {

        $config['upload_path']          = './asset/produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = array(
                'produk' => $this->m_kelola_data->produk()
            );
            $this->load->view('admin/head');
            $this->load->view('admin/nav');
            $this->load->view('admin/vproduk', $data);
            $this->load->view('admin/footer');
        } else {
            $produk = $this->m_kelola_data->produk();
            if ($produk->gambar !== "") {
                unlink('./asset/produk/' . $produk->gambar);
            }
            $upload_data =  $this->upload->data();
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'tipe' => '1',
                'gambar' => $upload_data['file_name']
            );
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
            redirect('admin/c_kelola_data/produk');
        } //tanpa ganti gambar
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'tipe' => '1'
        );
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $data);
        $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
        redirect('admin/c_kelola_data/produk');
    }

    public function hapus_produk($id_produk, $id_promo)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
        $this->db->where('id_promo', $id_promo);
        $this->db->delete('promo');
        $this->session->set_flashdata('pesan', 'Data Produk Berhasil Dihapus');
        redirect('admin/c_kelola_data/produk');
    }
    //produk upselling
    public function uppselling()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'upselling' => $this->m_kelola_data->upselling()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vupselling', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_upselling()
    {
        $nama = $this->input->post('nama');
        $produk = $this->m_kelola_data->cek_produk($nama);

        if ($produk) {
            $this->session->set_flashdata('eror', 'Nama Produk Sudah Tersedia');
            redirect('admin/c_kelola_data/uppselling');
        } else {
            $config['upload_path']          = './asset/produk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '5000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'upselling' => $this->m_kelola_data->upselling(),
                    'error' => $this->upload->display_errors()
                );
                $this->load->view('admin/head');
                $this->load->view('admin/nav');
                $this->load->view('admin/vupselling', $data);
                $this->load->view('admin/footer');
            } else {
                $upload_data =  $this->upload->data();
                $data = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'tipe' => '2',
                    'gambar' => $upload_data['file_name']
                );
                $this->db->insert('produk', $data);

                $promo = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'potongan' => '0',
                    'mulai' => '0',
                    'selesai' => '0'
                );
                $this->db->insert('promo', $promo);
                $this->session->set_flashdata('pesan', 'Data Produk Berhasil Disimpan');
                redirect('admin/c_kelola_data/uppselling');
            }
        }
    }
    public function edit_upselling($id_produk)
    {

        $config['upload_path']          = './asset/produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = array(
                'upselling' => $this->m_kelola_data->upselling()
            );
            $this->load->view('admin/head');
            $this->load->view('admin/nav');
            $this->load->view('admin/vupselling', $data);
            $this->load->view('admin/footer');
        } else {
            $produk = $this->m_kelola_data->upselling();
            if ($produk->gambar !== "") {
                unlink('./asset/produk/' . $produk->gambar);
            }
            $upload_data =  $this->upload->data();
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'tipe' => '2',
                'gambar' => $upload_data['file_name']
            );
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
            redirect('admin/c_kelola_data/uppselling');
        } //tanpa ganti gambar
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'tipe' => '2'
        );
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $data);
        $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
        redirect('admin/c_kelola_data/uppselling');
    }

    public function hapus_upselling($id_produk, $id_promo)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');

        $this->db->where('id_promo', $id_promo);
        $this->db->delete('promo');
        $this->session->set_flashdata('pesan', 'Data Barang Berhasil Dihapus!!!');
        redirect('admin/c_kelola_data/uppselling');
    }
    //data bundling
    public function bundling()
    {
        $data = array(
            'bundling' => $this->m_kelola_data->bundling()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vbundling', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_bundling()
    {
        $nama = $this->input->post('nama');
        $produk = $this->m_kelola_data->cek_produk($nama);

        if ($produk) {
            $this->session->set_flashdata('eror', 'Nama Produk Sudah Tersedia');
            redirect('admin/c_kelola_data/bundling');
        } else {
            $config['upload_path']          = './asset/produk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '5000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'upselling' => $this->m_kelola_data->upselling(),
                    'error' => $this->upload->display_errors()
                );
                $this->load->view('admin/head');
                $this->load->view('admin/nav');
                $this->load->view('admin/vupselling', $data);
                $this->load->view('admin/footer');
            } else {
                $upload_data =  $this->upload->data();
                $data = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'tipe' => '3',
                    'gambar' => $upload_data['file_name']
                );
                $this->db->insert('produk', $data);

                $promo = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'potongan' => '0',
                    'mulai' => '0',
                    'selesai' => '0'
                );
                $this->db->insert('promo', $promo);
                $this->session->set_flashdata('pesan', 'Data Produk Berhasil Disimpan');
                redirect('admin/c_kelola_data/bundling');
            }
        }
    }
    public function edit_bundling($id_produk)
    {

        $config['upload_path']          = './asset/produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = array(
                'bundling' => $this->m_kelola_data->bundling()
            );
            $this->load->view('admin/head');
            $this->load->view('admin/nav');
            $this->load->view('admin/vbundling', $data);
            $this->load->view('admin/footer');
        } else {
            $produk = $this->m_kelola_data->upselling();
            if ($produk->gambar !== "") {
                unlink('./asset/produk/' . $produk->gambar);
            }
            $upload_data =  $this->upload->data();
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'tipe' => '3',
                'gambar' => $upload_data['file_name']
            );
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
            redirect('admin/c_kelola_data/bundling');
        } //tanpa ganti gambar
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'tipe' => '3'
        );
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $data);
        $this->session->set_flashdata('pesan', 'Data Barang Berhasil Diperbaharui!!!');
        redirect('admin/c_kelola_data/bundling');
    }

    public function hapus_bundling($id_produk, $id_promo)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');

        $this->db->where('id_promo', $id_promo);
        $this->db->delete('promo');
        $this->session->set_flashdata('pesan', 'Data Barang Berhasil Dihapus!!!');
        redirect('admin/c_kelola_data/bundling');
    }




    //------------------------------------DATA LOGIN---------------------
    //admin
    public function admin()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'admin' => $this->m_kelola_data->admin()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vadmin', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_user()
    {

        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => '1'
        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('pesan', 'Data Admin Berhasil Disimpan');
        redirect('admin/c_kelola_data/admin');
    }
    public function edit_user($id_user)
    {

        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => '1'
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('pesan', 'Data Admin Berhasil Diperbaharui');
        redirect('admin/c_kelola_data/admin');
    }
    public function hapus_user($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
        $this->session->set_flashdata('pesan', 'Data Admin Berhasil Dihapus');
        redirect('admin/c_kelola_data/admin');
    }

    public function pemilik()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'pemilik' => $this->m_kelola_data->pemilik()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vpemilik', $data);
        $this->load->view('admin/footer');
    }

    public function simpan_pemilik()
    {

        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => '2'
        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('pesan', 'Data Pemilik Berhasil Disimpan');
        redirect('admin/c_kelola_data/pemilik');
    }
    public function edit_pemilik($id_user)
    {

        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => '2'
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('pesan', 'Data Pemilik Berhasil Diperbaharui');
        redirect('admin/c_kelola_data/pemilik');
    }

    public function hapus_pemilik($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
        $this->session->set_flashdata('pesan', 'Data Pemilik Berhasil Dihapus');
        redirect('admin/c_kelola_data/pemilik');
    }


    //promo
    public function promo()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'produk' => $this->m_kelola_data->all(),
            'promo' => $this->m_kelola_data->promo()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vpromo', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_promo()
    {
        $date = date('Y-m-d');
        $date1 = $this->input->post('tgl_selesai');
        if ($date1 < $date) {
            $this->session->set_flashdata('eror', 'Tanggal Tidak Sesuai. Tanggal yang dipiih tidak boleh tanggal yang sudah terlewat');
            redirect('admin/c_kelola_data/promo');
        } else {
            $id_promo = $this->input->post('id_promo');
            $cek = $this->m_kelola_data->cek_promo($id_promo);
            if ($cek) {
                $this->session->set_flashdata('eror', 'Data Promo Sudah Tersedia');
                redirect('admin/c_kelola_data/promo');
            } else {
                $data = array(
                    'id_promo' => $this->input->post('id_promo'),
                    'potongan' => $this->input->post('potongan'),
                    'mulai' => date('Y-m-d'),
                    'selesai' => $this->input->post('tgl_selesai')
                );
                $this->db->where('id_promo', $data['id_promo']);
                $this->db->update('promo', $data);
                $this->session->set_flashdata('pesan', 'Data Promo Berhasil Ditambahkan');
                redirect('admin/c_kelola_data/promo', 'refresh');
            }
        }
    }
    public function hapus_promo($id_promo)
    {
        $data = array(
            'potongan' => '0',
            'mulai' => '0',
            'selesai' => '0'
        );
        $this->db->where('id_promo', $id_promo);
        $this->db->update('promo', $data);
        redirect('admin/c_kelola_data/promo', 'refresh');
    }
    public function get_produk()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_kelola_data->get_produk($id);
        echo json_encode($data);
    }
    public function ongkir()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'kecamatan' => $this->m_kelola_data->kecamatan(),
            'desa' => $this->m_kelola_data->desa()

        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vongkir', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_kecamatan()
    {
        $nama = $this->input->post('kecamatan');
        $cek = $this->m_kelola_data->cek_kecamatan($nama);
        if ($cek) {
            $this->session->set_flashdata('eror', 'Data Kecamatan Sudah Tersedia');
            redirect('admin/c_kelola_data/ongkir');
        } else {
            $data = array(
                'kode_kec' => $this->input->post('kabupaten'),
                'nama_kecamatan' => $this->input->post('kecamatan'),
                'ongkir' => $this->input->post('ongkir')
            );
            $this->db->insert('kecamatan', $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('admin/c_kelola_data/ongkir');
        }
    }
    public function simpan_desa()
    {
        $nama = $this->input->post('desa');
        $cek = $this->m_kelola_data->cek_desa($nama);
        if ($cek) {
            $this->session->set_flashdata('eror', 'Data Desa Sudah Tersedia');
            redirect('admin/c_kelola_data/ongkir');
        } else {
            $data = array(
                'kode' => $this->input->post('kabupaten'),
                'nama_desa' => $this->input->post('desa')
            );
            $this->db->insert('desa', $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('admin/c_kelola_data/ongkir');
        }
    }
    public function edit_kecamatan($id_kecamatan)
    {
        $data = array(
            'kode_kec' => $this->input->post('kabupaten'),
            'nama_kecamatan' => $this->input->post('kecamatan'),
            'ongkir' => $this->input->post('ongkir')
        );
        $this->db->where('id_kecamatan', $id_kecamatan);
        $this->db->update('kecamatan', $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diperbaharui');
        redirect('admin/c_kelola_data/ongkir');
    }
    public function edit_desa($id_desa)
    {
        $data = array(
            'kode' => $this->input->post('kabupaten'),
            'nama_desa' => $this->input->post('desa')
        );
        $this->db->where('id_desa', $id_desa);
        $this->db->update('desa', $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diperbaharui');
        redirect('admin/c_kelola_data/ongkir');
    }

    public function hapus_kecamatan($id_kecamatan)
    {
        $this->db->where('id_kecamatan', $id_kecamatan);
        $this->db->delete('kecamatan');

        $this->db->where('kode', $id_kecamatan);
        $this->db->delete('desa');

        $this->session->set_flashdata('pesan', 'Data Kecamatan Berhasil Dihapus');
        redirect('admin/c_kelola_data/ongkir');
    }

    public function hapus_desa($id_desa)
    {
        $this->db->where('id_desa', $id_desa);
        $this->db->delete('desa');
        $this->session->set_flashdata('pesan', 'Data Desa Berhasil Dihapus');
        redirect('admin/c_kelola_data/ongkir');
    }

    public function kurir()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'kurir' => $this->m_kelola_data->kurir()
        );
        $this->load->view('admin/head');
        $this->load->view('admin/nav');
        $this->load->view('admin/vkurir', $data);
        $this->load->view('admin/footer');
    }
    public function simpan_kurir()
    {
        $username = $this->input->post('username');
        $cek = $this->m_kelola_data->cek_user($username);

        if ($cek) {
            $this->session->set_flashdata('eror', 'Nama Kurir Sudah Tersedia');
            redirect('admin/c_kelola_data/kurir');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => '3'
            );
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('admin/c_kelola_data/kurir');
        }
    }
    public function edit_kurir($id_user)
    {
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'no_hp' => $this->input->post('no_hp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => '3'
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diperbaharui');
        redirect('admin/c_kelola_data/kurir');
    }

    public function hapus_kurir($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
        $this->session->set_flashdata('pesan', 'Data Kurir Berhasil Dihapus');
        redirect('admin/c_kelola_data/kurir');
    }
}
