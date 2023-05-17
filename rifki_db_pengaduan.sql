-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 05:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rifki_db_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `rifki_masyarakat`
--

CREATE TABLE `rifki_masyarakat` (
  `rifki_nik` char(16) NOT NULL,
  `rifki_nama` varchar(35) NOT NULL,
  `rifki_username` varchar(25) NOT NULL,
  `rifki_password` varchar(32) NOT NULL,
  `rifki_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rifki_masyarakat`
--

INSERT INTO `rifki_masyarakat` (`rifki_nik`, `rifki_nama`, `rifki_username`, `rifki_password`, `rifki_telp`) VALUES
('10101', 'Rifki Fauzan Suandii', 'RFS', '202cb962ac59075b964b07152d234b70', '022832'),
('1234567899006757', 'Iman', 'Iman', '5be9a68073f66a56554e25614e9f1c9a', '0832632671627');

-- --------------------------------------------------------

--
-- Table structure for table `rifki_pengaduan`
--

CREATE TABLE `rifki_pengaduan` (
  `rifki_id_pengaduan` int(11) NOT NULL,
  `rifki_tgl_pengaduan` date NOT NULL,
  `rifki_nik` char(16) NOT NULL,
  `rifki_petugasdinas` varchar(30) NOT NULL,
  `rifki_daerah` varchar(32) NOT NULL,
  `rifki_isi_laporan` text NOT NULL,
  `rifki_foto` varchar(255) NOT NULL,
  `rifki_status` enum('Belum','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rifki_pengaduan`
--

INSERT INTO `rifki_pengaduan` (`rifki_id_pengaduan`, `rifki_tgl_pengaduan`, `rifki_nik`, `rifki_petugasdinas`, `rifki_daerah`, `rifki_isi_laporan`, `rifki_foto`, `rifki_status`) VALUES
(301, '2021-03-17', '10101', 'Dinas Kebersihan', 'Cimahi Utara', 'Assalamualaikum', '122.jpg', 'selesai'),
(302, '2021-03-18', '10101', 'Dinas Perhubungan', 'Cimahi Tengah', 'Assalamualaikum', '122.jpg', 'selesai'),
(303, '2021-03-18', '10101', 'Dinas Sosial', 'Cimahi Tengah', 'ada masalah bentrok', '12333.JPG', 'selesai'),
(304, '2021-03-23', '10101', 'Dinas Sosial', 'Cimahi Tengah', 'ada bentrok antar warga ', 'AcademyOracle3.JPG', 'selesai'),
(305, '2021-03-27', '10101', 'Dinas Perhutanan', 'Cimahi Selatan', 'Ada Kebakaran hutan', '122.jpg', 'proses'),
(306, '2021-03-28', '10101', 'Dinas Perlindungan Anak', 'Cimahi Selatan', 'pelantaran anak', '122.jpg', 'proses'),
(307, '2021-04-09', '10101', 'Dinas Sosial', 'Cimahi Tengah', 'as', 'tercemar.jpg', 'proses'),
(308, '2021-04-09', '10101', 'Dinas Kebersihan', 'Cimahi Utara', 'sungai tercemar', 'tercemar.jpg', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `rifki_petugas`
--

CREATE TABLE `rifki_petugas` (
  `rifki_id_petugas` int(11) NOT NULL,
  `rifki_nama_petugas` varchar(35) NOT NULL,
  `rifki_username` varchar(25) NOT NULL,
  `rifki_password` varchar(32) NOT NULL,
  `rifki_telp` varchar(13) NOT NULL,
  `rifki_level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rifki_petugas`
--

INSERT INTO `rifki_petugas` (`rifki_id_petugas`, `rifki_nama_petugas`, `rifki_username`, `rifki_password`, `rifki_telp`, `rifki_level`) VALUES
(1, 'admin', 'admin', '35ea010f517c4e6834944d8810201d8e', '022832', 'admin'),
(2, 'petugas', 'petugas', '0d49da5b6fa74fb0c3adab320a778537', '022832', 'petugas'),
(3, 'Ahmad Yani', 'ahmad', '1c104b9c0accfca52ef21728eaf01453', '022832', 'admin'),
(4, 'Ikhwan', 'Ikhwan', 'd10906c3dac1172d4f60bd41f224ae75', '022832', 'petugas'),
(5, 'Ridwan', 'Ridwann', '827ccb0eea8a706c4c34a16891f84e7b', '022832', 'admin'),
(6, 'Muhammad Zainal', 'zainal', 'e10adc3949ba59abbe56e057f20f883e', '022832', 'petugas'),
(7, 'Dinas Perhubungan', 'dishub', '25d55ad283aa400af464c76d713c07ad', '022832', 'petugas'),
(8, 'Ikan', 'Ikan', 'f7cdd9f292ab97ad1cdebc2346cc38f4', '0838267672878', 'admin'),
(18, 'andi', 'ayam', '42d74a038852aaee074a9245c49e9c8d', '1121211121222', 'admin'),
(19, 'Ilham', 'ilham', 'b63d204bf086017e34d8bd27ab969f28', '1211212121212', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rifki_tanggapan`
--

CREATE TABLE `rifki_tanggapan` (
  `rifki_id_tanggapan` int(11) NOT NULL,
  `rifki_id_pengaduan` int(11) NOT NULL,
  `rifki_tgl_tanggapan` date NOT NULL,
  `rifki_tanggapan` text NOT NULL,
  `rifki_id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rifki_tanggapan`
--

INSERT INTO `rifki_tanggapan` (`rifki_id_tanggapan`, `rifki_id_pengaduan`, `rifki_tgl_tanggapan`, `rifki_tanggapan`, `rifki_id_petugas`) VALUES
(1, 301, '2021-03-21', '        Iya saya sudah tanggapi laporan Anda\r\n', 1),
(2, 304, '2021-03-23', '        saya sudah tanggapi laporan Anda', 1),
(3, 302, '2021-03-24', '        Iya saya sudah tanggapi\r\n', 1),
(4, 303, '2021-04-09', '        Iya saya tanggapi laporan anda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rifki_tanggapanptgs`
--

CREATE TABLE `rifki_tanggapanptgs` (
  `rifki_id_tgpan` int(11) NOT NULL,
  `rifki_id_pengaduan` int(11) NOT NULL,
  `rifki_tgl` date NOT NULL,
  `rifki_tanggapanptgs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rifki_tanggapanptgs`
--

INSERT INTO `rifki_tanggapanptgs` (`rifki_id_tgpan`, `rifki_id_pengaduan`, `rifki_tgl`, `rifki_tanggapanptgs`) VALUES
(1, 305, '2021-04-09', '        Ok saya terima'),
(2, 307, '2021-04-09', '        Saya lagi nanggapi proses laporan anda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rifki_masyarakat`
--
ALTER TABLE `rifki_masyarakat`
  ADD PRIMARY KEY (`rifki_nik`);

--
-- Indexes for table `rifki_pengaduan`
--
ALTER TABLE `rifki_pengaduan`
  ADD PRIMARY KEY (`rifki_id_pengaduan`),
  ADD KEY `rifki_nik` (`rifki_nik`);

--
-- Indexes for table `rifki_petugas`
--
ALTER TABLE `rifki_petugas`
  ADD PRIMARY KEY (`rifki_id_petugas`);

--
-- Indexes for table `rifki_tanggapan`
--
ALTER TABLE `rifki_tanggapan`
  ADD PRIMARY KEY (`rifki_id_tanggapan`),
  ADD KEY `rifki_id_pengaduan` (`rifki_id_pengaduan`,`rifki_id_petugas`),
  ADD KEY `rifki_id_petugas` (`rifki_id_petugas`);

--
-- Indexes for table `rifki_tanggapanptgs`
--
ALTER TABLE `rifki_tanggapanptgs`
  ADD PRIMARY KEY (`rifki_id_tgpan`),
  ADD KEY `rifki_id_pengaduan` (`rifki_id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rifki_pengaduan`
--
ALTER TABLE `rifki_pengaduan`
  MODIFY `rifki_id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `rifki_petugas`
--
ALTER TABLE `rifki_petugas`
  MODIFY `rifki_id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rifki_tanggapan`
--
ALTER TABLE `rifki_tanggapan`
  MODIFY `rifki_id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rifki_tanggapanptgs`
--
ALTER TABLE `rifki_tanggapanptgs`
  MODIFY `rifki_id_tgpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rifki_pengaduan`
--
ALTER TABLE `rifki_pengaduan`
  ADD CONSTRAINT `rifki_pengaduan_ibfk_1` FOREIGN KEY (`rifki_nik`) REFERENCES `rifki_masyarakat` (`rifki_nik`);

--
-- Constraints for table `rifki_tanggapan`
--
ALTER TABLE `rifki_tanggapan`
  ADD CONSTRAINT `rifki_tanggapan_ibfk_1` FOREIGN KEY (`rifki_id_pengaduan`) REFERENCES `rifki_pengaduan` (`rifki_id_pengaduan`),
  ADD CONSTRAINT `rifki_tanggapan_ibfk_2` FOREIGN KEY (`rifki_id_petugas`) REFERENCES `rifki_petugas` (`rifki_id_petugas`);

--
-- Constraints for table `rifki_tanggapanptgs`
--
ALTER TABLE `rifki_tanggapanptgs`
  ADD CONSTRAINT `rifki_tanggapanptgs_ibfk_1` FOREIGN KEY (`rifki_id_pengaduan`) REFERENCES `rifki_pengaduan` (`rifki_id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
