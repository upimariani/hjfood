-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2022 pada 03.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 1,
  `admin_send` text NOT NULL,
  `pelanggan_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `id_user`, `admin_send`, `pelanggan_send`, `time`) VALUES
(1, 1, 1, 'ada yang ditanyakan', '0', '2021-12-19 22:08:48'),
(2, 1, 1, 'ada yang ditanyakan', '0', '2021-12-19 22:13:23'),
(3, 1, 1, 'p', '0', '2021-12-20 00:05:30'),
(4, 2, 1, '0', 'daging dada apakah ready?', '2021-12-20 00:05:56'),
(5, 1, 1, 'ready', '0', '2021-12-20 00:11:31'),
(6, 10, 1, '0', 'hallo kaka', '2022-01-15 14:41:05'),
(7, 10, 1, 'halo', '0', '2022-01-15 14:41:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `nama_desa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `kode`, `nama_desa`) VALUES
(1, 1, 'ciawigebang'),
(2, 1, 'Ciawilor'),
(3, 1, 'Cigarukgak'),
(4, 1, 'cihaur'),
(5, 1, 'cihirup'),
(6, 1, 'cijagamulya'),
(7, 1, 'cikubangmulya'),
(8, 1, 'ciomas'),
(9, 1, 'ciputat'),
(10, 1, 'dukuhdalem'),
(11, 1, 'geresik'),
(12, 1, 'kadurama'),
(13, 1, 'kapandayan'),
(14, 1, 'karangkamulyan'),
(15, 1, 'kramatmulya'),
(16, 2, 'cibeureum'),
(17, 2, 'cimara'),
(18, 2, 'kawungsari'),
(19, 2, 'randusari'),
(20, 2, 'sukadana'),
(21, 3, 'bantarpanjang'),
(22, 3, 'ciangir'),
(23, 3, 'cibingbin'),
(24, 3, 'cipindok'),
(25, 3, 'cisaat'),
(26, 3, 'sitenjo'),
(27, 3, 'dukuhbadag'),
(28, 4, 'bunder'),
(29, 4, 'cibulan'),
(30, 4, 'cidahu'),
(31, 4, 'cieurih'),
(32, 4, 'cihidenggirang'),
(33, 4, 'cikesik'),
(34, 4, 'jatimulya'),
(35, 5, 'Babakanjati'),
(36, 5, 'Bunigeulis'),
(37, 5, 'Cibuntu'),
(38, 5, 'Indapatra'),
(39, 5, 'Jambugeulis'),
(40, 5, 'Karangmuncang'),
(41, 5, 'Koreak'),
(42, 5, 'Panawuanÿ'),
(43, 5, 'Sangkanmulya'),
(44, 5, 'Sangkanurip'),
(45, 5, 'Timbang'),
(46, 6, 'Babakanmulya'),
(47, 6, 'Cigadung'),
(48, 6, 'Cigugur'),
(49, 6, 'Cileuleuy'),
(50, 6, 'Cipari'),
(51, 6, 'Cisantana'),
(52, 6, 'Gunungkeling'),
(53, 6, 'Puncak'),
(54, 6, 'Sukamulya'),
(55, 6, 'Winduherang'),
(56, 7, 'Bungurberes'),
(57, 7, 'Cilebak'),
(58, 7, 'Cilimusari'),
(59, 7, 'Jalatrang'),
(60, 7, 'Legokherang'),
(61, 7, 'Mandapajayaÿ'),
(62, 7, 'Patala'),
(63, 8, 'Bandorasa Kulon'),
(64, 8, 'Bandorasa Wetan'),
(65, 8, 'Bojongÿ'),
(66, 8, 'Caracasÿ'),
(67, 8, 'Cibeureum'),
(68, 9, 'Sukajaya'),
(69, 9, 'Mulyajaya'),
(70, 9, 'Mekarjayaÿ'),
(71, 9, 'Margamukti'),
(72, 10, 'Cijemit'),
(73, 10, 'Ciniru'),
(74, 10, 'Cipedes'),
(75, 11, 'Mekarsari'),
(76, 11, 'Cimaranten'),
(77, 11, 'Cipicung'),
(78, 11, 'Karoya'),
(79, 12, 'Babakanmulya'),
(80, 12, 'Ciniru'),
(81, 12, 'Jalaksana'),
(82, 12, 'Maniskidulÿ'),
(83, 13, 'Awirarangan'),
(84, 13, 'Cibinuang'),
(85, 11, 'Kuningan'),
(86, 13, 'Purwawinangun'),
(87, 13, 'Cijoho'),
(88, 13, 'Ancaran'),
(89, 13, 'Karangtawang'),
(90, 13, 'Citangtuÿ'),
(91, 14, 'Arjawinangun'),
(92, 14, 'ÿBulak'),
(93, 14, 'Geyongan'),
(94, 14, 'Jungjang'),
(95, 14, 'Jungjang Wetan'),
(96, 14, 'Karangsambung'),
(97, 15, 'Astanajapura'),
(98, 15, 'Kanci Kulon'),
(99, 15, 'Kendal'),
(100, 15, 'Mertapada Kulon'),
(101, 15, 'Mertapada Wetan'),
(102, 16, 'Gembonganmekar'),
(103, 16, 'Karangwangun'),
(104, 16, 'Kudukeras'),
(105, 16, 'Kudumulya'),
(106, 16, 'Pakusamben'),
(107, 16, 'Serang Kulon'),
(108, 17, 'Kondangsari'),
(109, 17, 'Patapan'),
(110, 17, 'Sindanghayu'),
(111, 17, 'Sindangkasih'),
(112, 17, 'Wanayasaÿ'),
(113, 18, ' Damarguna'),
(114, 18, 'Jatiseeng'),
(115, 18, 'Jatiseeng Kidulÿ'),
(116, 18, 'Leuweunggajah'),
(117, 18, 'Tenjomaya'),
(118, 19, 'Babakanÿ'),
(119, 19, 'Bringin'),
(120, 19, 'Budur'),
(121, 19, 'Ciwaringinÿ'),
(122, 19, 'Galagamba'),
(123, 19, 'Gintung Kidul'),
(124, 19, 'Gintung Tengah'),
(125, 19, 'Gintungranjeng'),
(126, 20, 'Cikeduk'),
(127, 20, 'Depok'),
(128, 20, 'Getasan'),
(129, 20, 'Karangwangi '),
(130, 20, 'Kasugengan Kidulÿ'),
(131, 20, 'Kasugengan Lorÿ'),
(132, 20, 'Keduananÿ'),
(133, 21, 'Baladÿ'),
(134, 21, 'Bobosÿ'),
(135, 21, 'Cangkoakÿ'),
(136, 21, 'Cikalahangÿ'),
(137, 21, 'Cipanasÿ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kec` int(11) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kode_kec`, `nama_kecamatan`, `ongkir`) VALUES
(1, 1, 'ciawigebang', 1000),
(2, 1, 'cibeureum', 2000),
(3, 1, 'cibingbin', 15000),
(4, 1, 'cidahu', 3000),
(5, 1, 'cigandamekar', 4000),
(6, 1, 'cigugur', 5000),
(7, 1, 'cilebak', 6000),
(8, 1, 'cilimus', 7000),
(9, 1, 'cimahi', 8000),
(10, 1, 'ciniru', 9000),
(11, 1, 'cipicung', 10000),
(12, 1, 'jalaksana', 11000),
(13, 1, 'kuningan', 12000),
(14, 2, 'arjawinangun', 13000),
(15, 2, 'astanajapura', 14000),
(16, 2, 'babakan', 15000),
(17, 2, 'beber', 16000),
(18, 2, 'ciledug', 17000),
(19, 2, 'ciwaringin', 18000),
(20, 2, 'depok', 19000),
(21, 2, 'dukupuntang', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `id_pelanggan`, `qty`) VALUES
(2, 21, 1, 3),
(4, 19, 4, 1),
(5, 16, 7, 3),
(6, 19, 7, 1),
(9, 20, 8, 1),
(10, 20, 9, 5),
(11, 28, 9, 3),
(16, 24, 10, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reward` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_desa`, `nama_pelanggan`, `alamat`, `jenis_kelamin`, `username`, `email`, `no_hp`, `password`, `reward`) VALUES
(1, 8, 'hana', 'kuningan', 'Perempuan', 'hana', '', '089129391281', '123456789', '30'),
(2, 23, 'Upi Mariani', 'Winduherang', 'Perempuan', 'dahlan@gmail.com', '', '085156727368', 'ahmas', '0'),
(3, 14, 'Maman', 'Winduherang', 'Laki-Laki', 'lusy@gmail.com', '', '085156727368', 'lusydwie', '0'),
(4, 50, 'Rizki', 'asss', 'Laki-Laki', 'dahlan@gmail.com', '', '085156727368', 'tiki', '1'),
(5, 29, 'Rizki', 'cidahu', 'Perempuan', 'rizkihasbiallah06@gmail.com', '', '085156727368', 'intan', '0'),
(6, 66, 'Intan', 'kng', 'Perempuan', 'dahlan@gmail.com1', '', '085156727368', 'dah1l', '0'),
(7, 110, 'coba', 'beber', 'Perempuan', 'coba@gmail.com', '', '085156727368', 'coba', '4'),
(8, 58, 'Rama', 'rt 07 rw 8', 'Laki-Laki', 'rama', '', '085156727368', 'rama', '0'),
(9, 24, 'hana123', 'rt.07 rw.08', 'Perempuan', 'hana123', 'upimariani.uniku17@gmail.com', '085156727368', 'hana123', '3'),
(10, 87, 'Hana Hanjani Putri', 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', 'Perempuan', 'hanahanjaniputri', '20170910067@uniku.ac.id', '089625822494', 'hanahanjaniputri', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `bukti_bayar` varchar(50) NOT NULL,
  `validasi_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `bukti_bayar`, `validasi_pembayaran`) VALUES
(1, '20211219ROMMN', 'img1111.jpg', 'Valid'),
(2, '20211219P8DJJ', 'img114.jpg', 'Valid'),
(3, '20211219FEDIO', 'img109.jpg', 'Valid'),
(4, '20211219BBKQN', 'powerdesigner.png', 'Valid'),
(5, '20211219GXUI9', '0', 'Menunggu'),
(6, '20211219USWSD', 'new-php-logo.png', 'Valid'),
(7, '20211219JFK0X', '0', 'Menunggu'),
(8, '20211219IW8ZN', 'img1101.jpg', 'Valid'),
(9, '20211219UWQFY', 'img1091.jpg', 'Valid'),
(10, '20211219UWBKN', 'baca.jpg', 'Valid'),
(11, '202112191WBVB', 'img1132.jpg', 'Valid'),
(12, '20211219AQIIM', '0', 'Menunggu'),
(13, '20211220GWMHZ', '0', 'Menunggu'),
(14, '20211220MC8VF', '0', 'Menunggu'),
(15, '20211220PFRNU', '0', 'Menunggu'),
(16, '20211220YTJVL', 'Untitled.png', 'Valid'),
(17, '20211220JHC4P', 'img1112.jpg', 'Valid'),
(18, '20211221FBWOM', 'img1102.jpg', 'Valid'),
(19, '20211227RP0IL', 'img1103.jpg', 'Valid'),
(20, '202112276OADJ', 'js.jpg', 'Valid'),
(21, '202112293SNGQ', '0', 'Menunggu'),
(22, '20220101MZDBH', '0', 'Menunggu'),
(23, '202201015PPXL', '0', 'Menunggu'),
(24, '20220101BSYZ7', '0', 'Menunggu'),
(25, '20220101K8NOA', 'img1104.jpg', 'Valid'),
(26, '20220109CO6HL', 'bca.jpg', 'Valid'),
(27, '20220109SBOKL', '0', 'Menunggu'),
(28, '20220114ML24T', '0', 'Menunggu'),
(29, '20220114QACPR', '0', 'Menunggu'),
(30, '20220115UFY3Q', 'h-1-Ati+Ampela1.jpg', 'Valid'),
(31, '20220115KZAGX', '0', 'Menunggu'),
(32, '20220115AQ4KB', 'h-6-Fillet_Paha+Tulang.jpg', 'Valid'),
(33, '20220116VMC0V', 'h-1-Ati+Ampela2.jpg', 'Valid'),
(34, '20220116CRX0S', 'new-php-logo1.png', 'Valid'),
(35, '20220116YHRVX', 'link.jpg', 'Valid'),
(36, '20220116O7ILF', 'WhatsApp_Image_2022-01-15_at_19_10_54.jpeg', 'Valid'),
(37, '202201164K1GI', 'WhatsApp_Image_2022-01-15_at_19_10_541.jpeg', 'Valid'),
(38, '20220116EXP7W', '2kg-a-Karkas.jpg', 'Valid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengemasan`
--

CREATE TABLE `pengemasan` (
  `id_pengemasan` int(10) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `status_pengemasan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengemasan`
--

INSERT INTO `pengemasan` (`id_pengemasan`, `id_transaksi`, `status_pengemasan`) VALUES
(1, '20211219ROMMN', 'Valid'),
(2, '20211219P8DJJ', 'Valid'),
(3, '20211219FEDIO', 'Valid'),
(4, '20211219BBKQN', 'Valid'),
(5, '20211219GXUI9', 'Belum'),
(6, '20211219USWSD', 'Valid'),
(7, '20211219JFK0X', 'Belum'),
(8, '20211219IW8ZN', 'Valid'),
(9, '20211219UWQFY', 'Valid'),
(10, '20211219UWBKN', 'Valid'),
(11, '202112191WBVB', 'Valid'),
(12, '20211219AQIIM', 'Belum'),
(13, '20211220GWMHZ', 'Belum'),
(14, '20211220MC8VF', 'Belum'),
(15, '20211220PFRNU', 'Belum'),
(16, '20211220YTJVL', 'Valid'),
(17, '20211220JHC4P', 'Valid'),
(18, '20211221FBWOM', 'Valid'),
(19, '20211227RP0IL', 'Valid'),
(20, '202112276OADJ', 'Valid'),
(21, '202112293SNGQ', 'Belum'),
(22, '20220101MZDBH', 'Belum'),
(23, '202201015PPXL', 'Belum'),
(24, '20220101BSYZ7', 'Belum'),
(25, '20220101K8NOA', 'Valid'),
(26, '20220109CO6HL', 'Valid'),
(27, '20220109SBOKL', 'Belum'),
(28, '20220114ML24T', 'Belum'),
(29, '20220114QACPR', 'Belum'),
(30, '20220115UFY3Q', 'Valid'),
(31, '20220115KZAGX', 'Belum'),
(32, '20220115AQ4KB', 'Valid'),
(33, '20220116VMC0V', 'Valid'),
(34, '20220116CRX0S', 'Valid'),
(35, '20220116YHRVX', 'Valid'),
(36, '20220116O7ILF', 'Valid'),
(37, '202201164K1GI', 'Valid'),
(38, '20220116EXP7W', 'Valid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(10) NOT NULL,
  `id_kurir` int(10) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `ongkir` varchar(30) NOT NULL,
  `status_pengiriman` varchar(30) NOT NULL,
  `bukti` varchar(60) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_kurir`, `id_transaksi`, `id_desa`, `alamat_pengiriman`, `ongkir`, `status_pengiriman`, `bukti`) VALUES
(1, 2, '20211219ROMMN', 21, '', '73000', 'Valid', ''),
(2, 2, '20211219P8DJJ', 37, '', '81000', 'Valid', ''),
(3, 2, '20211219FEDIO', 64, '', '80000', 'Valid', ''),
(4, 1, '20211219BBKQN', 73, '', '103000', 'Valid', ''),
(5, 0, '20211219GXUI9', 80, '', '80000', 'Belum Dikirim', '0'),
(6, 1, '20211219USWSD', 76, '', '76000', 'Valid', ''),
(7, 0, '20211219JFK0X', 76, '', '76000', 'Belum Dikirim', '0'),
(8, 2, '20211219IW8ZN', 86, '', '86000', 'Valid', ''),
(9, 2, '20211219UWQFY', 77, '', '77000', 'Valid', ''),
(10, 2, '20211219UWBKN', 76, '', '76000', 'Valid', ''),
(11, 2, '202112191WBVB', 77, '', '77000', 'Valid', ''),
(12, 0, '20211219AQIIM', 73, '', '73000', 'Belum Dikirim', '0'),
(13, 0, '20211220GWMHZ', 84, '', '84000', 'Belum Dikirim', '0'),
(14, 0, '20211220MC8VF', 76, '', '76000', 'Belum Dikirim', '0'),
(15, 0, '20211220PFRNU', 81, '', '81000', 'Belum Dikirim', '0'),
(16, 2, '20211220YTJVL', 80, '', '80000', 'Valid', 'img1131.jpg'),
(17, 1, '20211220JHC4P', 77, '', '77000', 'Valid', '0'),
(18, 7, '20211221FBWOM', 33, '', '33000', 'Valid', 'img111.jpg'),
(19, 7, '20211227RP0IL', 80, '', '80000', 'Valid', 'html.png'),
(20, 7, '202112276OADJ', 73, '', '73000', 'Valid', '0'),
(21, 0, '202112293SNGQ', 81, 'rt.07', '81000', 'Belum Dikirim', '0'),
(22, 0, '20220101MZDBH', 81, 'rt.07', '81000', 'Belum Dikirim', '0'),
(23, 0, '202201015PPXL', 8, 'kuningan', '8000', 'Belum Dikirim', '0'),
(24, 0, '20220101BSYZ7', 8, 'kuningan', '8000', 'Belum Dikirim', '0'),
(25, 7, '20220101K8NOA', 8, 'kuningan', '8000', 'Valid', 'img110.jpg'),
(26, 7, '20220109CO6HL', 24, 'rt.07 rw.08', '24000', 'Valid', 'img1132.jpg'),
(27, 0, '20220109SBOKL', 24, 'rt.07 rw.08', '24000', 'Belum Dikirim', '0'),
(28, 0, '20220114ML24T', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Belum Dikirim', '0'),
(29, 0, '20220114QACPR', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Belum Dikirim', '0'),
(30, 6, '20220115UFY3Q', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Valid', '0'),
(31, 0, '20220115KZAGX', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Belum Dikirim', '0'),
(32, 6, '20220115AQ4KB', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Valid', 'h-7-Dada+Paha_Atas.jpg'),
(33, 7, '20220116VMC0V', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Belum Dikirim', '0'),
(34, 12, '20220116CRX0S', 24, 'rt.07 rw.08', '24000', 'Valid', 'Untitled.png'),
(35, 12, '20220116YHRVX', 24, 'rt.07 rw.08', '24000', 'Valid', 'img117.jpg'),
(36, 12, '20220116O7ILF', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Valid', 'WhatsApp_Image_2022-01-15_at_1'),
(37, 12, '202201164K1GI', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Valid', 'WhatsApp_Image_2022-01-15_at_1'),
(38, 12, '20220116EXP7W', 87, 'jln Pejuang Rt 21 Rw 02 Lingkungan Manis ', '87000', 'Valid', '2kg-a-Karkas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `review` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_transaksi`, `id_produk`, `qty`, `review`) VALUES
(1, '20211219ROMMN', 17, 3, '0'),
(2, '20211219ROMMN', 19, 1, '0'),
(3, '20211219P8DJJ', 17, 3, 'suka banget'),
(4, '20211219P8DJJ', 19, 1, 'fresh banget'),
(5, '20211219FEDIO', 17, 3, '0'),
(6, '20211219FEDIO', 19, 1, '0'),
(7, '20211219BBKQN', 17, 3, '0'),
(8, '20211219BBKQN', 19, 2, '0'),
(9, '20211219GXUI9', 15, 3, '0'),
(10, '20211219GXUI9', 16, 1, '0'),
(11, '20211219USWSD', 15, 3, '0'),
(12, '20211219USWSD', 16, 1, '0'),
(13, '20211219JFK0X', 15, 3, '0'),
(14, '20211219JFK0X', 16, 2, '0'),
(15, '20211219IW8ZN', 15, 3, '0'),
(16, '20211219IW8ZN', 16, 2, '0'),
(17, '20211219UWQFY', 17, 3, '0'),
(18, '20211219UWQFY', 19, 2, '0'),
(19, '20211219UWBKN', 19, 4, '0'),
(20, '20211219UWBKN', 21, 1, '0'),
(21, '202112191WBVB', 19, 4, '0'),
(22, '202112191WBVB', 21, 1, '0'),
(23, '20211219AQIIM', 19, 4, '0'),
(24, '20211219AQIIM', 21, 1, '0'),
(25, '20211220GWMHZ', 19, 4, '0'),
(26, '20211220GWMHZ', 21, 1, '0'),
(27, '20211220MC8VF', 19, 4, '0'),
(28, '20211220MC8VF', 21, 1, '0'),
(29, '20211220PFRNU', 19, 4, '0'),
(30, '20211220PFRNU', 21, 1, '0'),
(31, '20211220YTJVL', 19, 4, '0'),
(32, '20211220YTJVL', 21, 3, '0'),
(33, '20211220JHC4P', 19, 4, '0'),
(34, '20211220JHC4P', 21, 3, '0'),
(35, '20211221FBWOM', 19, 1, '0'),
(36, '20211227RP0IL', 16, 3, 'suka banget'),
(37, '20211227RP0IL', 19, 1, 'fresh banget'),
(38, '202112276OADJ', 19, 4, 'recommed banget'),
(39, '202112276OADJ', 20, 1, '0'),
(40, '202112276OADJ', 21, 3, '0'),
(41, '202112293SNGQ', 19, 4, '0'),
(42, '202112293SNGQ', 20, 1, '0'),
(43, '202112293SNGQ', 21, 3, '0'),
(44, '20220101MZDBH', 19, 4, '0'),
(45, '20220101MZDBH', 20, 1, '0'),
(46, '20220101MZDBH', 21, 3, '0'),
(47, '202201015PPXL', 19, 4, '0'),
(48, '202201015PPXL', 20, 1, '0'),
(49, '202201015PPXL', 21, 3, '0'),
(50, '20220101BSYZ7', 20, 2, '0'),
(51, '20220101BSYZ7', 21, 3, '0'),
(52, '20220101K8NOA', 21, 3, '0'),
(53, '20220109CO6HL', 20, 5, '0'),
(54, '20220109SBOKL', 20, 5, '0'),
(55, '20220109SBOKL', 28, 1, '0'),
(56, '20220114ML24T', 21, 1, '0'),
(57, '20220114ML24T', 28, 1, '0'),
(58, '20220114QACPR', 20, 1, '0'),
(59, '20220114QACPR', 28, 10, '0'),
(60, '20220115UFY3Q', 20, 1, '0'),
(61, '20220115UFY3Q', 28, 10, '0'),
(62, '20220115KZAGX', 20, 1, '0'),
(63, '20220115KZAGX', 28, 10, '0'),
(64, '20220115AQ4KB', 20, 20, '0'),
(65, '20220115AQ4KB', 28, 80, '0'),
(66, '20220116VMC0V', 20, 2, '0'),
(67, '20220116VMC0V', 28, 1, '0'),
(68, '20220116CRX0S', 20, 5, '0'),
(69, '20220116CRX0S', 28, 3, '0'),
(70, '20220116YHRVX', 20, 5, '0'),
(71, '20220116YHRVX', 28, 3, '0'),
(72, '20220116O7ILF', 20, 55, '0'),
(73, '20220116O7ILF', 28, 50, '0'),
(74, '202201164K1GI', 24, 35, '0'),
(75, '202201164K1GI', 25, 35, '0'),
(76, '202201164K1GI', 29, 35, '0'),
(77, '20220116EXP7W', 24, 2, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_promo` varchar(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(30) NOT NULL,
  `stok` int(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_promo`, `nama`, `deskripsi`, `harga`, `stok`, `gambar`, `tipe`) VALUES
(17, 'RXIUB', 'Karkas', '1kg Karkas, bagian ayam utuh tanpa kepala dan ceker', 33000, 100, '1-Karkas.jpg', '1'),
(20, 'MOHKV', 'Berangkas', '1kg Berangkas, bagian ayam yang utuh tidak di potong - potong', 32000, 11, '3-Berangkas.jpg', '1'),
(21, '9ZBEV', 'Paha Utuh', '1kg Paha Utuh, bagian paha atas dan paha bawah yang tidak dipotong', 33000, 100, '4-Paha_Utuh.jpg', '1'),
(22, 'WU69W', 'Parting', '1kg Parting, seluruh bagian daging ayam utuh yang dipotong - potong', 33000, 100, '5-Parting.jpg', '1'),
(23, 'U5K8M', 'Paha Bawah', '1kg Paha Bawah', 35000, 100, '6-Paha_Bawah.jpg', '1'),
(24, 'MNRO6', 'Dada', '1kg Dada', 34000, 63, '7-Dada.jpg', '1'),
(25, 'H6XGP', 'Sayap', '1kg Sayap', 32000, 65, '8-Sayap.jpg', '1'),
(26, 'JEOZB', 'Fillet Dada', '1kg Fillet Dada, Daging bagian dada tanpa tulang', 43000, 100, '9-Fillet_dada.jpg', '1'),
(27, 'DKY6F', 'Fillet Paha', '1kg Fillet Paha, Daging bagian paha tanpa tulang', 42000, 100, '10-Fillet_Paha.jpg', '1'),
(28, '8QYLU', 'Kepala', '1kg Kepala', 8000, 43, '11-Kepala.jpg', '1'),
(29, 'WODMY', 'Ceker', '1kg Ceker', 24000, 65, '12-Ceker.jpg', '1'),
(30, 'INCU2', 'Hati', '1kg Hati', 25000, 100, '13-Hati.jpg', '1'),
(34, 'M6Q3U', 'Paha Atas', '1kg Paha Atas', 32000, 100, '2-Paha_Atas2.jpg', '1'),
(35, '5E3CV', 'Ampela', '1kg Ampela', 29000, 100, '14-Ampela2.jpg', '1'),
(36, 'K7ZVS', 'Kulit', '1kg Kulit', 22000, 100, '16-Kulit2.jpg', '1'),
(37, 'JHRNC', 'Tulang', '1kg Tulang Ayam ', 14000, 100, '17-Tulang4.jpg', '1'),
(38, 'GAR7Y', 'Usus', '1kg Usus', 14000, 100, '15-Usus3.jpg', '1'),
(40, 'LWYQK', 'Paha Atas 2kg', '2kg Paha Atas', 62000, 100, '2kg-b-Paha_Atas2.jpg', '2'),
(41, 'GOH62', 'Parting 2kg', '2kg Parting', 64000, 100, '2kg-e-Parting2.jpg', '2'),
(42, 'QNMKD', 'Paha Utuh 2kg', '2kg Paha Utuh', 64000, 100, '2kg-d-Paha_Utuh2.jpg', '2'),
(43, 'P6SBI', 'Paha Bawah 2kg', '2kg Paha Bawah', 68000, 100, '2kg-f-Paha_Bawah1.jpg', '2'),
(44, 'D6CH2', 'Dada 2kg', '2kg Dada', 66000, 100, '2kg-g-Dada1.jpg', '2'),
(45, '683HV', 'Sayap 2kg', '2kg Sayap', 62000, 100, '2kg-h-Sayap1.jpg', '2'),
(46, 'ZYJQW', 'Paha Atas 3kg', '3kg Paha Atas', 92000, 100, '3kg-b-Paha_Atas1.jpg', '2'),
(47, 'GNOPM', 'Parting 3Kg', '3kg Parting', 95000, 100, '3kg-e-Parting.jpg', '2'),
(48, 'YISLY', 'Paha Utuh 3kg', '3kg Paha Utuh', 95000, 100, '3kg-d-Paha_Utuh.jpg', '2'),
(49, 'ITF70', 'Paha Bawah 3kg', '3kg Paha Bawah', 101000, 100, '3kg-f-Paha_Bawah1.jpg', '2'),
(50, 'ZEHYG', 'Dada 3kg', '3kg Dada', 92000, 100, '3kg-g-Dada1.jpg', '2'),
(51, 'IVDC4', 'Sayap 3kg', '3kg Sayap', 92000, 100, '3kg-h-Sayap1.jpg', '2'),
(52, 'EMXKY', 'Ati dan Ampela', '1kg Ati dan 1kg Ampela', 52000, 100, 'h-1-Ati+Ampela2.jpg', '3'),
(53, 'YHF9T', 'Usus dan Kulit', '1kg Usus dan 1kg Kulit', 34000, 100, 'h-2-Usus+Kulit2.jpg', '3'),
(54, 'LYQAG', 'Tulang dan Ceker', '1kg Tulang dan 1kg Ceker', 36000, 100, 'h-3-Tulang+Ceker2.jpg', '3'),
(55, 'T9XPI', 'Paha Atas dan Paha Bawah', '1kg Paha Atas dan 1kg Paha Bawah', 65000, 100, 'h-4-Paha_Bawah+Paha_Atas2.jpg', '3'),
(56, 'D3FPL', 'Fillet Dada dan Kulit', '1kg Dada dan 1kg Kulit', 54000, 100, 'h-5-Fillet_Dada+Kulit2.jpg', '3'),
(57, 'QWYDK', 'Fillet Paha dan Tulang', '1kg Fillet Paha dan 1kg Tulang', 54000, 100, 'h-6-Fillet_Paha+Tulang5.jpg', '3'),
(58, 'O7YDG', 'Dada dan Paha Atas', '1kg Dada dan 1kg Paha Atas', 64000, 100, 'h-7-Dada+Paha_Atas3.jpg', '3'),
(59, 'QSKW9', 'Sayap dan Tulang', '1kg Sayap dan 1kg Tulang', 44000, 100, 'h-8-Sayap+Tulang2.jpg', '3'),
(60, 'O4SZ0', 'Sayap dan Ceker', '1kg Sayap dan 1kg Ceker', 64000, 100, 'h-9-Sayap+Ceker2.jpg', '3'),
(61, '1ESOA', 'Kepala dan Sayap', '1kg Kepala dan 1kg Sayap', 38000, 100, 'h-10-Kepala+Sayap1.jpg', '3'),
(62, 'EUNF5', 'Kepala dan Ceker', '1kg Kepala dan 1kg Ceker', 30000, 100, 'h-11-Kepala+Ceker1.jpg', '3'),
(63, '5RQFV', 'Paha Bawah dan Dada', '1kg Paha Bawah dan 1kg Dada', 67000, 100, 'h-12-Paha_Bawah+Dada2.jpg', '3'),
(64, '3HKDP', 'Dada dan Sayap', '1kg Dada dan 1kg Sayap', 64000, 100, 'h-13-Dada+Sayap2.jpg', '3'),
(65, 'QCKN6', 'Parting dan Usus', '1kg Parting dan 1kg Usus', 45000, 100, 'h-14-Parting+Usus1.jpg', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` varchar(10) NOT NULL,
  `potongan` int(15) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `potongan`, `mulai`, `selesai`) VALUES
('1ESOA', 0, '0000-00-00', '0000-00-00'),
('3HKDP', 0, '0000-00-00', '0000-00-00'),
('5E3CV', 0, '0000-00-00', '0000-00-00'),
('5RQFV', 0, '0000-00-00', '0000-00-00'),
('683HV', 0, '0000-00-00', '0000-00-00'),
('8QYLU', 5, '2021-12-29', '2022-01-21'),
('9ZBEV', 0, '0000-00-00', '0000-00-00'),
('D3FPL', 0, '0000-00-00', '0000-00-00'),
('D6CH2', 0, '0000-00-00', '0000-00-00'),
('DKY6F', 0, '0000-00-00', '0000-00-00'),
('EMXKY', 0, '0000-00-00', '0000-00-00'),
('EUNF5', 0, '0000-00-00', '0000-00-00'),
('GAR7Y', 0, '0000-00-00', '0000-00-00'),
('GNOPM', 0, '0000-00-00', '0000-00-00'),
('GOH62', 0, '0000-00-00', '0000-00-00'),
('H6XGP', 2, '2022-01-16', '2022-01-18'),
('INCU2', 0, '0000-00-00', '0000-00-00'),
('ITF70', 0, '0000-00-00', '0000-00-00'),
('IVDC4', 0, '0000-00-00', '0000-00-00'),
('JEOZB', 0, '0000-00-00', '0000-00-00'),
('JHRNC', 0, '0000-00-00', '0000-00-00'),
('K7ZVS', 0, '0000-00-00', '0000-00-00'),
('LWYQK', 0, '0000-00-00', '0000-00-00'),
('LYQAG', 0, '0000-00-00', '0000-00-00'),
('M6Q3U', 0, '0000-00-00', '0000-00-00'),
('MNRO6', 0, '0000-00-00', '0000-00-00'),
('MOHKV', 0, '0000-00-00', '0000-00-00'),
('O4SZ0', 0, '0000-00-00', '0000-00-00'),
('O7YDG', 0, '0000-00-00', '0000-00-00'),
('P6SBI', 0, '0000-00-00', '0000-00-00'),
('QCKN6', 0, '0000-00-00', '0000-00-00'),
('QNMKD', 0, '0000-00-00', '0000-00-00'),
('QSKW9', 0, '0000-00-00', '0000-00-00'),
('QWYDK', 0, '0000-00-00', '0000-00-00'),
('RXIUB', 0, '0000-00-00', '0000-00-00'),
('T9XPI', 0, '0000-00-00', '0000-00-00'),
('U5K8M', 0, '0000-00-00', '0000-00-00'),
('WODMY', 0, '0000-00-00', '0000-00-00'),
('WU69W', 0, '0000-00-00', '0000-00-00'),
('YHF9T', 0, '0000-00-00', '0000-00-00'),
('YISLY', 0, '0000-00-00', '0000-00-00'),
('ZEHYG', 0, '0000-00-00', '0000-00-00'),
('ZYJQW', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reward`
--

CREATE TABLE `reward` (
  `id_reward` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `validasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reward`
--

INSERT INTO `reward` (`id_reward`, `id_pelanggan`, `isi`, `time`, `validasi`) VALUES
(2, 1, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2021-12-19 09:14:19', 2),
(6, 9, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-09 13:32:26', 1),
(7, 10, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-15 14:34:04', 2),
(8, 9, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-16 06:00:57', 1),
(9, 9, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-16 06:02:57', 1),
(10, 10, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-16 14:53:46', 1),
(11, 10, 'Selamat Anda Mendapatkan Reward dari HJ FOOD karena berhasil mengumpulkan 100 kg pembelian', '2022-01-16 15:55:30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `total_belanja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `total_belanja`) VALUES
('202112191WBVB', 1, '2021-12-19', '107000'),
('20211219BBKQN', 1, '2021-12-19', '303000'),
('20211219FEDIO', 1, '2021-12-19', '255000'),
('20211219IW8ZN', 2, '2021-12-19', '245000'),
('20211219P8DJJ', 1, '2021-12-19', '81000'),
('20211219ROMMN', 1, '2021-12-19', '73000'),
('20211219USWSD', 2, '2021-12-19', '273500'),
('20211219UWBKN', 1, '2021-12-19', '107000'),
('20211219UWQFY', 1, '2021-12-19', '200000'),
('20211220JHC4P', 1, '2021-12-20', '131000'),
('20211220YTJVL', 1, '2021-12-20', '131000'),
('20211221FBWOM', 4, '2021-12-21', '23750'),
('202112276OADJ', 1, '2021-12-27', '231000'),
('20211227RP0IL', 7, '2021-12-27', '173750'),
('20220101K8NOA', 1, '2022-01-01', '36000'),
('20220109CO6HL', 9, '2022-01-09', '500000'),
('20220115AQ4KB', 10, '2022-01-15', '1248000'),
('20220115UFY3Q', 10, '2022-01-15', '108000'),
('202201164K1GI', 10, '2022-01-16', '3127600'),
('20220116CRX0S', 9, '2022-01-16', '182800'),
('20220116EXP7W', 10, '2022-01-16', '68000'),
('20220116O7ILF', 10, '2022-01-16', '2140000'),
('20220116VMC0V', 10, '2022-01-16', '71600'),
('20220116YHRVX', 9, '2022-01-16', '182800');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) DEFAULT NULL,
  `alamat` varchar(150) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `jk`, `no_hp`, `username`, `password`, `level`) VALUES
(1, 'Hesty Prahastini', 'jln H Sobari Rt 23 Rw 02 Lingkungan Manis Cijoho Kuningan', 'Perempuan', '089649761110', 'admin', 'admin', 1),
(3, 'Muammar Aris', 'jln H sobari Rt 23 Rw 02 Lingkungan Manis Cijoho Kuningan', 'Laki-Laki', '082117231113', 'pimpinan', 'pimpinan', 2),
(12, 'Taopiq Hidayat', 'jln H Sobari Rt 22 Rw 02 Lingkungan Manis Cijoho Kuningan', 'Laki-Laki', '081395882919', 'kurir', 'kurir', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pengemasan`
--
ALTER TABLE `pengemasan`
  ADD PRIMARY KEY (`id_pengemasan`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pengemasan`
--
ALTER TABLE `pengemasan`
  MODIFY `id_pengemasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `reward`
--
ALTER TABLE `reward`
  MODIFY `id_reward` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
