-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 09:20 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uji_ukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `spek_barang` varchar(50) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `id_dist` int(11) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis`, `gambar`, `spek_barang`, `kondisi`, `sumber_dana`, `harga`, `id_dist`, `tgl_beli`) VALUES
(42, 1, 'Proyektor Mini LCD 1080P 600 Lumens - YG310.jpg', 'Proyektor Mini LCD 1080P 600 Lumens - YG310	', 'Baik', 'Mandiri', 'Rp 6.000.000', 1, '2019-03-06'),
(43, 1, 'Proyektor Profesional.jpg', 'Proyektor Profesional', 'Baik', 'BOS', 'Rp 6.000.000', 1, '2019-03-20'),
(44, 1, 'epson300.png', 'Epson 310 Lumen 3000', 'Rusak', 'Mandiri', 'Rp 5.000.0000', 1, '2019-03-13'),
(45, 2, 'Stop Kontak 5 Lubang.jpg', 'Stop Kontak 5 Lubang', 'Baik', 'Mandiri', 'Rp 35.000', 2, '2019-03-20'),
(46, 2, 'Stop Kontak Uticon 3 Lubang.jpg', 'Stop Kontak Uticon 3 Lubang', 'Baik', 'BOS', 'Rp 15.000', 2, '2019-03-12'),
(47, 2, 'kabel rol 2.jpg', 'Stop kontak 2 lubang uticon', 'Rusak', 'Mandiri', 'Rp 10.000', 2, '2019-03-14'),
(48, 3, 'bolafutsalmolten.jpg', '	Molten Futsal Ball', 'Baik', 'Mandiri', 'Rp 109.000', 4, '2018-11-28'),
(49, 3, 'bola voli mva.jpg', 'Bola Voli Mikasa mva300', 'Baik', 'BOS', 'Rp 120.000', 4, '2019-03-13'),
(50, 3, '29-20181001161827-12039008219602979.jpg', 'Bola Kasti Proteam	', 'Baik', 'BOS', 'Rp 105.000', 4, '2019-03-20'),
(51, 3, 'BOLA BASKET SPALDING.jpg', 'BOLA BASKET SPALDING', 'Hilang', 'BOS', 'Rp 136.000', 4, '2019-03-14'),
(52, 4, 'VGA to AV Video Converter.jpg', 'VGA to AV Video Converter', 'Baik', 'Mandiri', 'Rp 120.000', 1, '2019-03-14'),
(53, 4, 'kabelvga5m.jpg', 'Kabel VGA 5m', 'Rusak', 'Mandiri', 'Rp 120.000', 1, '2019-03-06'),
(54, 6, 'Screen Projector Wall Mount 84.jpg', 'Screen Projector Wall Mount 84\"	', 'Baik', 'BOS', 'Rp 169.000', 1, '2019-03-14'),
(55, 6, 'projector screen-tripod screen.jpg', 'projector screen/tripod', 'Baik', 'Mandiri', 'Rp 156.000', 1, '2019-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id_dist` int(11) NOT NULL,
  `nm_dist` varchar(20) NOT NULL,
  `telp_dist` char(15) NOT NULL,
  `almt_dist` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id_dist`, `nm_dist`, `telp_dist`, `almt_dist`) VALUES
(1, 'Point Computer', '08965487', 'Depok'),
(2, 'Lily fotocopy', '0899479545', 'Pocis'),
(4, 'Azy Sport', '021548454', 'Viktor');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nm_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nm_jenis`) VALUES
(1, 'LCD Proyektor'),
(2, 'Kabel'),
(3, 'Bola'),
(4, 'Kabel VGA'),
(6, 'Screen Projector');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_pengguna`, `id_barang`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(4, 11, 48, '2019-04-02', '2019-04-02', '2'),
(5, 11, 43, '2019-04-02', '0000-00-00', '0'),
(6, 11, 46, '2019-04-02', '0000-00-00', '1'),
(7, 11, 49, '2019-04-04', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `nm_pengguna` varchar(50) NOT NULL,
  `kata_sandi` varchar(50) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_lengkap`, `nm_pengguna`, `kata_sandi`, `kelamin`, `no_telp`, `alamat`, `jabatan`) VALUES
(4, 'Triana Micku', 'trianamicku', '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', '0838548945', 'Pamulang', 'Admin'),
(10, 'Chory Aulia', 'choraul', '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', '0897357236482', 'Pamulang', 'Manajemen'),
(11, 'Ine Novia', 'inenovia', '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', '08974975349', 'Garuda', 'Peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_dist` (`id_dist`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_dist`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id_dist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_dist`) REFERENCES `distributor` (`id_dist`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
