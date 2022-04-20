<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
        // $this->load->model('m_admin');
    }

    public function index()
    {
        $this->load->view('pemilik/head');
        $this->load->view('pemilik/nav');
        $this->load->view('pemilik/vlaporan');
        $this->load->view('pemilik/footer');
    }

    public function lap_harian()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Harian',
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->m_laporan->lap_harian($tanggal, $bulan, $tahun),
            'isi' => 'layout/backend/laporan/v_lap_harian'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    public function lap_bulanan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Bulanan',
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->m_laporan->lap_bulanan($bulan, $tahun),
            'isi' => 'layout/backend/laporan/v_lap_bulanan'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    public function lap_tahunan()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Tahunan',
            'tahun' => $tahun,
            'laporan' => $this->m_laporan->lap_tahunan($tahun),
            'isi' => 'layout/backend/laporan/v_lap_tahunan'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }
}
