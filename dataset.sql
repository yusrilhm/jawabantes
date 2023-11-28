-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 04:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataset`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(5) NOT NULL,
  `nama_departemen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `nama_departemen`) VALUES
(1, 'IT'),
(2, 'Finance'),
(3, 'Logistic'),
(4, 'Purchasing'),
(5, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(100) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Departemen` int(5) DEFAULT NULL,
  `Level_grade` int(5) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `NIK`, `Nama`, `tempat_lahir`, `Alamat`, `tgl_lahir`, `Pendidikan`, `Status`, `Departemen`, `Level_grade`, `username`, `password`) VALUES
(1, '3333333333333333', 'Fajar', 'jombang', 'tambak beras', '2013-11-05', 'SLTA', 'Y', 5, 2, 'fajar', '6c3089a3ec0632dcb1133820410f78e8'),
(1701139147, '2222222222222222', 'andi', 'jombang', 'bwi', '2023-11-30', 'SLTP', 'Y', 2, 2, 'andi', '207058d21573c5d316e3b268619e598e');

-- --------------------------------------------------------

--
-- Table structure for table `level_grade`
--

CREATE TABLE `level_grade` (
  `id` int(5) NOT NULL,
  `nama_level` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_grade`
--

INSERT INTO `level_grade` (`id`, `nama_level`) VALUES
(1, 'level 1'),
(2, 'level 2'),
(3, 'level 3'),
(4, 'level 4'),
(5, 'level 5');

-- --------------------------------------------------------

--
-- Table structure for table `log_history`
--

CREATE TABLE `log_history` (
  `id` char(25) NOT NULL,
  `data` varchar(50) NOT NULL,
  `operasi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` char(25) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`id`, `data`, `operasi`, `keterangan`, `id_user`, `tgl`) VALUES
('1701090879', 'Akses', 'Logout', 'Logout Berhasil', 'fajar', '2023-11-27 20:14:39'),
('1701090890', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-27 20:14:50'),
('1701095002', 'Karyawan', 'Tambah', 'id: 1701095002,\nNik: 9999999999999999,\nNama: ojan,\nTempat: riau,\nTanggal: 2023-11-23,\nPendidikan: ,\nLevel: 1, \nDepartemen: 5, \nAlamat: riau,\nStatus: Y, \nUsername: ojan', 'fajar', '2023-11-27 21:23:22'),
('1701095088', 'Karyawan', 'Tambah', 'id: 1701095088,\nNik: ,\nNama: ,\nTempat: ,\nTanggal: ,\nPendidikan: ,\nLevel: , \nDepartemen: , \nAlamat: ,\nStatus: , \nUsername: ', 'fajar', '2023-11-27 21:24:48'),
('1701095229', 'Karyawan', 'Tambah', 'id: 1701095229,\nNik: 8888888888888888,\nNama: eko,\nTempat: jombang,\nTanggal: 2023-11-22,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 5, \nAlamat: jombang,\nStatus: Y, \nUsername: eko', 'fajar', '2023-11-27 21:27:09'),
('1701095354', 'Karyawan', 'Tambah', 'id: 1701095354,\nNik: 7777777777777777,\nNama: an,\nTempat: jambi,\nTanggal: 2023-11-22,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 5, \nAlamat: jambi,\nStatus: Y, \nUsername: an', 'fajar', '2023-11-27 21:29:14'),
('1701097278', 'Karyawan', 'Update', 'id: 1701095229,\nNik: 8888888888888888,\nNama: eko ju,\nTempat: malang,\nTanggal: 2023-11-22,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 5, \nAlamat: jombang,\nStatus: Y, \nUsername: eko', 'fajar', '2023-11-27 22:01:18'),
('1701097881', 'Karyawan', 'Hapus', 'id: 1701095354,\nNik: 7777777777777777,\nNama: an,\nTempat: jambi,\nTanggal: 2023-11-22,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 5, \nAlamat: jambi,\nStatus: Y, \nUsername: an', 'fajar', '2023-11-27 22:11:21'),
('1701097902', 'Karyawan', 'Hapus', 'id: 1701095229,\nNik: 8888888888888888,\nNama: eko ju,\nTempat: malang,\nTanggal: 2023-11-22,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 5, \nAlamat: jombang,\nStatus: Y, \nUsername: eko', 'fajar', '2023-11-27 22:11:42'),
('1701138958', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-28 09:35:58'),
('1701138986', 'Akses', 'Logout', 'Logout Berhasil', 'fajar', '2023-11-28 09:36:26'),
('1701139016', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-28 09:36:56'),
('1701139147', 'Karyawan', 'Tambah', 'id: 1701139147,\nNik: 2222222222222222,\nNama: andi,\nTempat: jombang,\nTanggal: 2023-11-30,\nPendidikan: SLTP,\nLevel: 2, \nDepartemen: 2, \nAlamat: bwi,\nStatus: Y, \nUsername: andi', 'fajar', '2023-11-28 09:39:07'),
('1701139408', 'Akses', 'Logout', 'Logout Berhasil', 'fajar', '2023-11-28 09:43:28'),
('1701139438', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-28 09:43:58'),
('1701139462', 'Akses', 'Logout', 'Logout Berhasil', 'fajar', '2023-11-28 09:44:22'),
('1701139468', 'Akses', 'Login', 'Login Berhasil', 'andi', '2023-11-28 09:44:28'),
('1701141227', 'Akses', 'Logout', 'Logout Berhasil', 'andi', '2023-11-28 10:13:47'),
('1701141410', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-28 10:16:50'),
('1701141432', 'Akses', 'Logout', 'Logout Berhasil', 'fajar', '2023-11-28 10:17:12'),
('1701141647', 'Akses', 'Login', 'Login Berhasil', 'fajar', '2023-11-28 10:20:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `level_grade`
--
ALTER TABLE `level_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_history`
--
ALTER TABLE `log_history`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
