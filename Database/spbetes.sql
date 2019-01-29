-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 04:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi_fungsional`
--

CREATE TABLE `aplikasi_fungsional` (
  `id_aplikasi_fungsional` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `aplikasi_fungsional` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi_fungsional`
--

INSERT INTO `aplikasi_fungsional` (`id_aplikasi_fungsional`, `id_jenis`, `aplikasi_fungsional`) VALUES
(4, 1, 'Sistem Informasi Tenaga Kerja'),
(5, 1, 'Sistem Informasi Pendidikan'),
(6, 1, 'Sistem Informasi Kepemudaan'),
(7, 1, 'Sistem Informasi Kesehatan'),
(8, 1, 'Sistem Informasi Kemiskinan dan Penyandang Masalah Kemiskinan'),
(9, 1, 'Sistem Informasi Koperasi dan UMKM '),
(10, 1, 'Sistem Informasi Perinda'),
(11, 1, 'Sistem Informasi EXIM'),
(12, 1, 'Sistem Informasi Pertanian'),
(13, 1, 'Sistem Informasi Peternakan'),
(14, 1, 'Sistem Informasi Perkebunan '),
(15, 1, 'Sistem Informasi Perikanan'),
(16, 1, 'Sistem Informasi Kehutanan'),
(17, 1, 'Sistem Informasi Tanam Pangan'),
(18, 1, 'Sistem Informasi Wisata dan Budaya'),
(19, 1, 'Sistem Informasi Investasi'),
(20, 1, 'Sistem Informasi Pembangunan Daerah'),
(21, 1, 'Sistem Informasi Pendayagunaan Air'),
(22, 1, 'Sistem Informasi Infrastruktur Teknologi Informasi dan Komunikasi'),
(23, 1, 'Sistem Informasi Tata Ruang, Jalan dan Jembatan'),
(24, 1, 'Sistem Informasi Energi Terbarukan'),
(25, 1, 'Sistem Informasi Lingkungan Hidup'),
(26, 2, 'Sistem Informasi Aset dan Barang Daerah'),
(27, 2, 'Sistem Informasi Keuangan (E-Budgeting)'),
(28, 2, 'Sistem Informasi Pengadaan'),
(29, 2, 'Sistem Informasi Pembangunan'),
(30, 2, 'Sistem Informasi Legislasi'),
(31, 2, 'Sistem Informasi Kearsipan'),
(32, 2, 'Sistem Informasi Kebencanaan'),
(33, 2, 'Sistem Informasi Pengawasan'),
(34, 3, 'Sistem Informasi Jaringan dan Dokumentasi Hukum'),
(35, 3, 'Sistem Informasi Legislatif'),
(36, 4, 'Sistem Informasi Keuangan (E-Budgeting) '),
(37, 4, 'BPKAD, Bappeda, Biro AP, Biro Organisasi dan Dispenda'),
(38, 4, 'Sistem Informasi Keuangan (E-Budgeting)'),
(39, 6, 'Sistem Informasi Kepegawaian');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(1, 'LAYANAN PUBLIK'),
(2, 'Administrasi dan Manajemen Umum'),
(3, 'Administrasi Legislasi'),
(4, 'Manajemen Keuangan'),
(5, 'Sistem Informasi Keuangan Daerah '),
(6, 'Manajemen Kepegawaian');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pertanyaan_umum`
--

CREATE TABLE `jenis_pertanyaan_umum` (
  `id_jenis_pertanyaan_umum` int(11) NOT NULL,
  `jenis_pertanyaan_umum` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pertanyaan_umum`
--

INSERT INTO `jenis_pertanyaan_umum` (`id_jenis_pertanyaan_umum`, `jenis_pertanyaan_umum`) VALUES
(1, 'Pertanyaan khusus Pemerintah Daerah'),
(2, 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id_master` int(11) NOT NULL,
  `id_nama_aplikasi` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jawab` varchar(200) DEFAULT NULL,
  `nama_aplikasi` varchar(200) DEFAULT NULL,
  `unit_kerja` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_pertanyaan_umum`
--

CREATE TABLE `master_pertanyaan_umum` (
  `id_master_pertanyaan_umum` int(11) NOT NULL,
  `id_pertanyaan_umum` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jawab` varchar(200) DEFAULT NULL,
  `upload_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pertanyaan_umum`
--

INSERT INTO `master_pertanyaan_umum` (`id_master_pertanyaan_umum`, `id_pertanyaan_umum`, `id_user`, `jawab`, `upload_file`) VALUES
(2, 1, 2, 'adad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_umum`
--

CREATE TABLE `pertanyaan_umum` (
  `id_pertanyaan_umum` int(11) NOT NULL,
  `id_jenis_pertanyaan_umum` int(11) DEFAULT NULL,
  `pertanyaan_umum` varchar(500) DEFAULT NULL,
  `jenisinput` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_umum`
--

INSERT INTO `pertanyaan_umum` (`id_pertanyaan_umum`, `id_jenis_pertanyaan_umum`, `pertanyaan_umum`, `jenisinput`) VALUES
(1, 2, '1.	Jelaskan misi/sasaran pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah masing-masing?', ''),
(2, 1, 'a)	Sebutkan perguruan tinggi  negeri maupun swasta yang memiliki jurusan/program studi terkait komputer, teknologi informasi dan komunikasi, sistem informasi, atau sejenisnya di wilayah Pemerintah Daerah masing-masing?', ''),
(3, 1, 'b)	Berapakah persentase ketersediaan sumber daya listrik untuk pelaksanaan SPBE di Pemerintah Daerah masing-masing dalam satu bulan?', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namainstansipusat` varchar(200) DEFAULT NULL,
  `nama_penanggungjawab` varchar(200) DEFAULT NULL,
  `nip_pj` varchar(200) DEFAULT NULL,
  `jabatan_pj` varchar(200) DEFAULT NULL,
  `nama_operator` varchar(200) DEFAULT NULL,
  `nip_op` varchar(200) DEFAULT NULL,
  `jabatan_op` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `namainstansipusat`, `nama_penanggungjawab`, `nip_pj`, `jabatan_pj`, `nama_operator`, `nip_op`, `jabatan_op`, `password`, `role`) VALUES
(2, '123123123', '123123123', '123123123', '123123123', '123123123', '123123123', '123123123', '$2y$05$diQ4DlRLvERns6mJCXoQDezhVRuzs6nFN63ct7rUQMC1IeoYPkjuq', 'Admin'),
(8, 'Malang', 'Qhodir Z', '2016045', 'Malang', 'Malang', 'Malang', 'Malang', '$2y$05$fhRxPkDQRPSmWiYrmG3goevTQlS5Y/J5CSxDZBbG/I73dv83vf7KS', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi_fungsional`
--
ALTER TABLE `aplikasi_fungsional`
  ADD PRIMARY KEY (`id_aplikasi_fungsional`),
  ADD KEY `FK_REFERENCE_4` (`id_jenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_pertanyaan_umum`
--
ALTER TABLE `jenis_pertanyaan_umum`
  ADD PRIMARY KEY (`id_jenis_pertanyaan_umum`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`),
  ADD KEY `FK_REFERENCE_1` (`id_nama_aplikasi`),
  ADD KEY `FK_REFERENCE_2` (`id_user`);

--
-- Indexes for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  ADD PRIMARY KEY (`id_master_pertanyaan_umum`),
  ADD KEY `FK_REFERENCE_6` (`id_pertanyaan_umum`),
  ADD KEY `FK_REFERENCE_7` (`id_user`);

--
-- Indexes for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  ADD PRIMARY KEY (`id_pertanyaan_umum`),
  ADD KEY `FK_REFERENCE_8` (`id_jenis_pertanyaan_umum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasi_fungsional`
--
ALTER TABLE `aplikasi_fungsional`
  MODIFY `id_aplikasi_fungsional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_pertanyaan_umum`
--
ALTER TABLE `jenis_pertanyaan_umum`
  MODIFY `id_jenis_pertanyaan_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  MODIFY `id_master_pertanyaan_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  MODIFY `id_pertanyaan_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aplikasi_fungsional`
--
ALTER TABLE `aplikasi_fungsional`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);

--
-- Constraints for table `master`
--
ALTER TABLE `master`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`id_nama_aplikasi`) REFERENCES `aplikasi_fungsional` (`id_aplikasi_fungsional`),
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`id_pertanyaan_umum`) REFERENCES `pertanyaan_umum` (`id_pertanyaan_umum`),
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`id_jenis_pertanyaan_umum`) REFERENCES `jenis_pertanyaan_umum` (`id_jenis_pertanyaan_umum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
