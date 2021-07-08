-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2021 at 04:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_peneliti_dua`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_peneliti`
--

CREATE TABLE `tb_peneliti` (
  `id_peneliti` int(11) NOT NULL,
  `nama_peneliti` varchar(120) NOT NULL,
  `ktpnik` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `jenjangpeneliti` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamat_ins` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `pendidikan` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  `list_research` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peneliti`
--

INSERT INTO `tb_peneliti` (`id_peneliti`, `nama_peneliti`, `ktpnik`, `ttl`, `jenkel`, `alamat`, `kategori`, `jenjangpeneliti`, `instansi`, `alamat_ins`, `email`, `no_hp`, `pendidikan`, `gambar`, `list_research`) VALUES
(7, 'Sumantri Sri Nugroho, ST', '123180107', 'Klaten, 5 November 1981', 'Laki-laki', 'Griya Purwa Asri G 202, Purwomartani, Kalasan, Sleman', 'Eksternal BAPPEDA', 'Peneliti Pertama', 'BPPTG, Disperindag Pemda DIY', 'Jln. Kusumanegara, No. 168, Yogyakarta', 'soemantri1981@gmail.com', '0812226099', 'Teknik Mesin, Universitas Gadjah Mada', 'pasfoto4.jpg', 'Sentuhan Teknologi Tepat Guna Untuk Peningkatan Produksi Tusuk Sate'),
(8, 'Dr. Esti Setiawati, M. Pd.', '19650909 199512 2 001', 'Bantul, 9 September 1965', 'Laki-laki', 'Bantulkarang, RT. 04, Ringinharjo, Bantul', 'Eksternal BAPPEDA', 'Peneliti Pertama', 'Pascasarjana UPY', 'Jl. IKIP PGRI I Sonosewu No.117, Sonosewu, Ngestiharjo, Kec. Kasihan, Bantul, Daerah Istimewa Yogyakarta 55182', 'setiawatiesti@yahoo.co.id', '08122761252', '-', 'pasfoto2.jpeg', 'Studi Analisis Kebijakan Implementasi Standar Pelayanan Minimal (SPM) Pendidikan Dasar'),
(9, 'Yunus Aris Wibowo', '-', 'Klaten, 19 Maret 1989', 'Laki-laki', 'Griya Kanjen Indah, RT.02, Gandarum, Kanjen, Pekalongan, Jawa Tengah', 'Internal BAPPEDA', 'Peneliti Pertama', 'Universitas Gadjah Mada', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'yunusariswibowo@gmail.com', '085641147706', 'Master Perencanaan Pengelolaan Pesisir dan Daerah Aliran Sungai (MPPDAS), Program Double Degree Pascasarjana Fakultas Geografi UGM.', 'pasfoto3.jpeg', 'Studi Pemetaan Industri Batu Bata di Kabupaten Bantul'),
(10, 'Bunga Astria P.', '-', '-', 'Laki-laki', 'Jl. Ringroad Barat Daya No.1 Kasihan, Yogyakarta', 'Internal BAPPEDA', 'Peneliti Pertama', 'Universitas Alma Ata', 'Jl. Brawijaya No.99, Jadan, Tamantirto, Kec. Kasihan, Bantul, Daerah Istimewa Yogyakarta 55183', 'pshanti.bunga@gmail.com', '081222600897', 'MPH UGM, Master Exchange Human Nutrition Ghent University Belgia, Health Nutrition Universitas Brawijaya', 'pasfoto1.jpeg', 'Implementasi Kebijakan Peraturan Bupati Bantul Nomor 82 Tahun 2012 tentang ASI Eklusif di Kabupaten Bantul'),
(11, 'Arif Suharson, M.Sn.', '-', '-', 'Laki-laki', 'Jl. Parangtritis KM. 6.5 Sewon, Bantul, Yogyakarta', 'Internal BAPPEDA', 'Peneliti Pertama', 'Jurusan Kriya, Fakultas Seni Rupa Institut Seni Indonesia Yogyakarta', '-', 'arifsuharson318@gmail.com', '081392052811', '-', 'pasfoto41.jpg', 'Strategi UMKM Bantul Merespon Pandemi(Studi Kasus Bidang Kriya/Kerajinan)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `id_penelitian` int(20) NOT NULL,
  `nama_penelitian` varchar(256) NOT NULL,
  `nama_peneliti` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`id_penelitian`, `nama_penelitian`, `nama_peneliti`, `kategori`, `tahun`) VALUES
(1, 'Wedang Uwuh Imogiri \"Si Manis\" Yang Menyehatkan', 'Nanik Dara Senjawati, Siti Hamidah, Juarini', 'Kuliner', '2019'),
(2, 'Analisis Perkembangan Batik Bantul', 'Sri Suryaningrum, Raden hendri Gusaptono, Sri Luna Murdianingrum', 'Kriya', '2019'),
(5, 'Sentuhan Teknologi Tepat Guna untuk Peningkatan Produksi Tusuk Sate', 'Sumantri Sri Nugroho', 'Kuliner', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi_pesan` text NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`nama`, `email`, `judul`, `isi_pesan`, `alamat`, `id_pesan`) VALUES
('Aisya Puja Ray', 'aisyapr@gmail.com', 'Terkait JRD', 'Bagaimana jika ingin meneliti tetapi tidak ingin mengunggah di jrd?', 'Gontor, Jawa Timur', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_peneliti`
--
ALTER TABLE `tb_peneliti`
  ADD PRIMARY KEY (`id_peneliti`);

--
-- Indexes for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_peneliti`
--
ALTER TABLE `tb_peneliti`
  MODIFY `id_peneliti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
