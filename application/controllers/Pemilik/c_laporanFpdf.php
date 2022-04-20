<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_laporanFpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
        $this->load->model('m_laporan');
    }
    function hari()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN PENJUALAN', 0, 1, 'C');
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 7, 'Jl. Siliwangi Timur No.3 Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Tanggal Transaksi', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Nama Pelanggan', 1, 0, 'C');
        $pdf->Cell(80, 6, 'Total Harga', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pemesanan = $this->m_laporan->lap_harian();
        $no = 0;
        foreach ($pemesanan as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(70, 6, $data->tgl_transaksi, 1, 0);
            $pdf->Cell(70, 6, $data->nama_pelanggan, 1, 0);
            $pdf->Cell(80, 6, $data->total_belanja, 1, 1);
        }
        $pdf->Output();
    }

    function stock()
    {
        // $tanggal = $this->input->post('tanggal');
        // $bulan = $this->input->post('bulan');
        // $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN STOCK PRODUK', 0, 1, 'C');
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 7, 'Jl. Siliwangi Timur No.3 Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nama Produk', 1, 0, 'C');
        $pdf->Cell(120, 6, 'Deskripsi', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Harga', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Stock', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $produk = $this->m_laporan->lap_stock();
        $no = 0;
        foreach ($produk as $data) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(50, 6, $data->nama, 1, 0);
            $pdf->Cell(120, 6, $data->deskripsi, 1, 0);
            $pdf->Cell(30, 6, $data->harga, 1, 0);
            $pdf->Cell(30, 6, $data->stok, 1, 1);
        }
        $pdf->Output();
    }
}
