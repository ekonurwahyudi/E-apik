-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 01:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti_pengadilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nip`, `username`, `password`, `jenis_kelamin`, `hp`, `alamat`) VALUES
(3, 'Samsuar', '1231231234', 'admin1', 'admin', 'Pria', '08662625344', 'Jl. waru no.1 desa kepala kambing');

-- --------------------------------------------------------

--
-- Table structure for table `ijin`
--

CREATE TABLE `ijin` (
  `ijin_id` int(11) NOT NULL,
  `ijin_pegawai` varchar(255) DEFAULT NULL,
  `ijin_tanggal` date DEFAULT NULL,
  `ijin_jam_dari` time DEFAULT NULL,
  `ijin_jam_sampai` time DEFAULT NULL,
  `ijin_alasan` varchar(255) DEFAULT NULL,
  `ijin_pengaju` varchar(255) NOT NULL,
  `ijin_status` int(11) DEFAULT NULL,
  `ijin_admin` varchar(255) DEFAULT NULL,
  `ijin_ketua` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ijin`
--

INSERT INTO `ijin` (`ijin_id`, `ijin_pegawai`, `ijin_tanggal`, `ijin_jam_dari`, `ijin_jam_sampai`, `ijin_alasan`, `ijin_pengaju`, `ijin_status`, `ijin_admin`, `ijin_ketua`) VALUES
(1, '5', '2019-04-22', '05:08:00', '23:20:00', 'dfsdfsdf', 'pegawai', 3, 'xxxxx', NULL),
(2, '5', '2019-04-22', '03:00:00', '04:00:00', 'sdfsdf', 'pegawai', 3, NULL, 'belum saatnya'),
(4, '5', '2019-04-22', '09:30:00', '14:00:00', 'pergi ke undangan mantan', 'pegawai', 3, 'xxxxxx', 'wwwwww'),
(5, '8', '2019-04-22', '10:00:00', '03:00:00', 'sakit mantan', 'ketua pn', 3, 'kasih aja', 'asasasas');

-- --------------------------------------------------------

--
-- Table structure for table `ketua`
--

CREATE TABLE `ketua` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `organisasi` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_ketua` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketua`
--

INSERT INTO `ketua` (`id`, `nama`, `nip`, `jk`, `pangkat`, `golongan`, `jabatan`, `alamat`, `organisasi`, `username`, `password`, `jenis_ketua`) VALUES
(8, 'Muzani', '2232435353342', 'Pria', 'Pembina', 'III/d', 'Ketua', 'jl kenari no 298', 'Pengadilan negeri banjarmasin', 'ketua1', 'ketua', 'PN'),
(9, 'Reza Yuzanna', '2312123123', 'Pria', 'Penata Muda', 'III/d', 'Ketua', 'sdasd', 'Pengadilan tes', 'ketua2', 'ketua', 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `no_surat`
--

CREATE TABLE `no_surat` (
  `permohonan` int(11) NOT NULL,
  `nomor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_surat`
--

INSERT INTO `no_surat` (`permohonan`, `nomor`) VALUES
(11, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `organisasi` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `jk`, `pangkat`, `golongan`, `jabatan`, `alamat`, `organisasi`, `username`, `password`) VALUES
(5, 'Rizal Fahmi', '1231233523', 'Pria', 'Penata', 'III/d', 'Kepala Sub Bagian Perencanaan TI dan Pelaporan', 'jl.panglateh', 'asddas dtessss sdsdsdds', 'pegawai1', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `permohonan_id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `pegawai` int(11) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `status` int(11) NOT NULL,
  `pengaju` varchar(100) NOT NULL,
  `cat_admin` text NOT NULL,
  `cat_sisa_cuti` text NOT NULL,
  `cat_pertimbangan` text NOT NULL,
  `cat_ketua` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`permohonan_id`, `tgl`, `pegawai`, `jenis`, `alasan`, `dari`, `sampai`, `status`, `pengaju`, `cat_admin`, `cat_sisa_cuti`, `cat_pertimbangan`, `cat_ketua`) VALUES
(10, '2018-01-14', 5, 'Cuti Sakit', 'Sakit', '2018-01-01', '2018-01-03', 3, 'pegawai', 'asdasd', 'asdsadas', 'asdasd', 'tess'),
(11, '2018-01-14', 8, 'Cuti karena alasan penting', 'Umrah', '2018-01-01', '2018-01-17', 3, 'ketua pn', 'oke tes', 'asd', 'asdadasdas', ''),
(12, '2018-01-14', 5, 'Cuti karena alasan penting', 'Naik haji', '2018-01-01', '2018-01-11', 4, 'pegawai', 'asdasd', 'asd', 'asdasdsad', 'asdasd'),
(13, '2018-01-14', 8, 'Cuti Sakit', 'Melahirkan', '2018-01-01', '2018-01-04', 4, 'ketua pn', 'oke tes awkwkw', 'sisa cuti wkwkwk hari', 'asdalnsdklans asdklnasd tes', 'asdas'),
(14, '2019-04-21', 5, 'Cuti Tahunan', 'asdasda', '2019-04-22', '2019-04-24', 3, 'pegawai', 'sdfsdfsdfsdfsdfsd', 'sdfsdfsd', 'fsdfsdfsdffsdf', 'xxxxxxxxxxxxxxxxxxx'),
(15, '2019-04-21', 5, 'Cuti Sakit', 'fgrtgrtgrgrtg', '2019-04-29', '2019-04-30', 3, 'pegawai', 'sfsdfsdfsd', '14', 'sdfsdfs', '');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Super Admin', 'superadmin', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijin`
--
ALTER TABLE `ijin`
  ADD PRIMARY KEY (`ijin_id`);

--
-- Indexes for table `ketua`
--
ALTER TABLE `ketua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`permohonan_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ijin`
--
ALTER TABLE `ijin`
  MODIFY `ijin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ketua`
--
ALTER TABLE `ketua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `permohonan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
