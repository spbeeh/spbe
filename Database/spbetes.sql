-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 04:56 PM
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
(3, 1, 'Sistem Tenaga KerJa'),
(4, 1, 'Sistem Informasi Tenaga Kerja');

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
  `id_jenis` int(11) DEFAULT NULL,
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
  `id_jenis_pertanyaan_umum` int(11) DEFAULT NULL,
  `id_pertanyaan_umum` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jawab` varchar(200) DEFAULT NULL,
  `nama_aplikasi` varchar(200) DEFAULT NULL,
  `unit_kerja` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_umum`
--

CREATE TABLE `pertanyaan_umum` (
  `id_pertanyaan_umum` int(11) NOT NULL,
  `id_jenis_pertanyaan_umum` int(11) DEFAULT NULL,
  `pertanyaan_umum` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_umum`
--

INSERT INTO `pertanyaan_umum` (`id_pertanyaan_umum`, `id_jenis_pertanyaan_umum`, `pertanyaan_umum`) VALUES
(1, 2, '1.	Jelaskan misi/sasaran pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah masing-masing?');

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

INSERT INTO `user` (`id_user`, `namainstansipusat`, `nama_penanggungjawab`, `nip_pj`, `jabatan_pj`, `nama_operator`, `nip_op`, `jabatan_op`, `password`) VALUES
(1, 'lnlnsd', 'lknlkn', 'lkn', 'lknlk', 'nlkn', 'lkn', 'lkn', NULL);

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
  ADD KEY `FK_REFERENCE_2` (`id_user`),
  ADD KEY `FK_REFERENCE_3` (`id_jenis`);

--
-- Indexes for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  ADD PRIMARY KEY (`id_master_pertanyaan_umum`),
  ADD KEY `FK_REFERENCE_5` (`id_jenis_pertanyaan_umum`),
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
  MODIFY `id_aplikasi_fungsional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  MODIFY `id_master_pertanyaan_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan_umum`
--
ALTER TABLE `pertanyaan_umum`
  MODIFY `id_pertanyaan_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);

--
-- Constraints for table `master_pertanyaan_umum`
--
ALTER TABLE `master_pertanyaan_umum`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`id_jenis_pertanyaan_umum`) REFERENCES `jenis_pertanyaan_umum` (`id_jenis_pertanyaan_umum`),
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
