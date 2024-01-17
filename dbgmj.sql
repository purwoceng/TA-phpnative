-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 05:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgmj`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbrg` varchar(7) NOT NULL,
  `namabrg` varchar(20) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbrg`, `namabrg`, `satuan`, `jumlah`, `jenis`) VALUES
('BRG-001', 'Tangga Dorong Alumun', 'Buah', 50, 'Tidak Habi'),
('BRG-002', 'Obeng', 'Buah', 50, 'Tidak Habi'),
('BRG-003', 'Tang', 'Buah', 50, ''),
('BRG-004', 'Crimping', 'Buah', 40, 'Tidak Habi'),
('BRG-005', 'Kaos Tangan', 'Buah', 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `idbrgkel` varchar(7) NOT NULL,
  `tglkel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`idbrgkel`, `tglkel`) VALUES
('BK-0001', '0000-00-00'),
('BK-0002', '0000-00-00'),
('BK-0003', '2020-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `idbrgmas` varchar(7) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`idbrgmas`, `tglmasuk`) VALUES
('BK-0001', '0000-00-00'),
('BM-0002', '0000-00-00'),
('BM-0003', '2020-07-31'),
('BM-0004', '2020-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `detbrgkel`
--

CREATE TABLE `detbrgkel` (
  `iddetbkel` varchar(7) NOT NULL,
  `idbrg` varchar(7) NOT NULL,
  `idpro` varchar(7) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `idbrgkel` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detbrgkel`
--

INSERT INTO `detbrgkel` (`iddetbkel`, `idbrg`, `idpro`, `satuan`, `idbrgkel`) VALUES
('DBK0001', 'BRG-005', 'PRO002', '5', 'BK-00'),
('DBK0002', 'BRG-005', 'PRO002', '', 'BK-00'),
('DBK0003', 'BRG-005', 'PRO002', '5', 'BK-00'),
('DBK0004', 'BRG-005', 'PRO002', '7', 'BK-00'),
('DBK0005', 'BRG-005', 'PRO002', '5', 'BK-0002'),
('DBK0006', 'BRG-005', 'PRO002', '5', 'BK-0002'),
('DBK0007', 'BRG-005', 'PRO002', '5', 'BK-0002'),
('DBK0008', 'BRG-002', 'PRO002', '5', 'BK-0003'),
('DBK0009', 'BRG-003', 'PRO002', '6', 'BK-0003');

-- --------------------------------------------------------

--
-- Table structure for table `detbrgmas`
--

CREATE TABLE `detbrgmas` (
  `iddetbmas` varchar(7) NOT NULL,
  `idbrg` varchar(7) NOT NULL,
  `idpro` varchar(7) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `idbrgmas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detbrgmas`
--

INSERT INTO `detbrgmas` (`iddetbmas`, `idbrg`, `idpro`, `satuan`, `idbrgmas`) VALUES
('DBM0001', 'BRG-005', 'PRO002', '5', 'BM-0001'),
('DBM0002', 'BRG-005', 'PRO002', '5', 'BM-0001'),
('DBM0003', 'BRG-004', 'PRO002', '', 'BM-0001'),
('DBM0004', 'BRG-005', 'PRO002', '5', 'BM-0001'),
('DBM0005', 'BRG-005', 'PRO001', '5', 'BM-0001'),
('DBM0006', 'BRG-005', 'PRO002', '5', 'BM-0002'),
('DBM0007', 'BRG-005', 'PRO002', '5', 'BM-0003'),
('DBM0008', 'BRG-004', 'PRO002', '5', 'BM-0004'),
('DBM0009', 'BRG-004', 'PRO002', '5', 'BM-0004');

-- --------------------------------------------------------

--
-- Table structure for table `detpinjam`
--

CREATE TABLE `detpinjam` (
  `iddetpinjam` varchar(7) NOT NULL,
  `idbrg` varchar(7) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `idpinjam` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detpinjam`
--

INSERT INTO `detpinjam` (`iddetpinjam`, `idbrg`, `satuan`, `idpinjam`) VALUES
('DPM001', '', '5', 'PIN001'),
('DPM003', '', '', 'PIN003'),
('DPM004', 'BRG-005', '5', 'PIN004'),
('DPM005', 'BRG-005', '', 'PIN004');

-- --------------------------------------------------------

--
-- Table structure for table `detproyek`
--

CREATE TABLE `detproyek` (
  `iddetpro` varchar(7) NOT NULL,
  `idbrg` varchar(7) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `idpro` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detproyek`
--

INSERT INTO `detproyek` (`iddetpro`, `idbrg`, `satuan`, `idpro`) VALUES
('DPRO001', '', '', 'PRO002'),
('DPRO002', '', '', 'PRO001');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpel` varchar(7) NOT NULL,
  `namapel` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpel`, `namapel`, `alamat`, `email`, `telp`) VALUES
('PEL0000', 'wew', 'wew', '42', 'wewe'),
('PL00001', 'ww', 'ww', 'we', 'ww'),
('PL00003', 'ss', 'ss', 'ss', 'ss'),
('PL00004', 'aa', 'aa', 'aa', 'aa'),
('PL00005', 'aa', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idpinjam` varchar(7) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  `idpet` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`idpinjam`, `tglpinjam`, `tglkembali`, `idpet`) VALUES
('', '0000-00-00', '0000-00-00', ''),
('PIN001', '0000-00-00', '0000-00-00', 'PET015'),
('PIN002', '0000-00-00', '0000-00-00', 'PET015'),
('PIN003', '0000-00-00', '0000-00-00', 'PET015');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpet` varchar(7) NOT NULL,
  `namapet` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpet`, `namapet`, `jk`, `alamat`, `telp`, `email`, `level`, `username`, `password`) VALUES
('1', 'pomo', 'l', 'dda', '3423', 'dsfs', 'Administrator', 'pomo', 'df66801ad38f0fd2994608d9b3be80c9'),
('PET005', 'asas', 'P', 'wew', 'we', 'wewe', 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500'),
('PET006', 'zain', 'L', 'Madura Sate', '', '', 'Bag.Operasional', 'zain', '3ed9b95e4b6f2c345836def81e570ef1'),
('PET009', 'purwo', 'L', 'qw', 'qw', 'qw', 'Bag.Inventaris', 'purwo', '27b288e070d7029531dc05dedb22aa78'),
('PET010', 'erda', 'P', 'Klaaten', '088', 'erda@gmial.com', 'Administrator', 'erda', 'b1914affeb0d5e3530a9f6a990c7ab4d'),
('PET011', 'we', '', '', '', '', 'Bag.Operasional', 'we', 'ff1ccf57e98c817df1efcd9fe44a8aeb'),
('PET013', 'fdgdf', 'P', 'rte', '534', 'fgfsg', 'Bag.Inventaris', 'rtgdf', '59dd4f03cca501efca86d816488a4650'),
('PET014', 'Zainullah', 'L', 'madura', '0908', 'zain@gmail.com', 'Direktur', 'zain', '3ed9b95e4b6f2c345836def81e570ef1');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `idpro` varchar(7) NOT NULL,
  `jpro` varchar(20) NOT NULL,
  `tglpro` date NOT NULL,
  `tglselesai` date NOT NULL,
  `idpet` varchar(7) NOT NULL,
  `idpel` varchar(7) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`idpro`, `jpro`, `tglpro`, `tglselesai`, `idpet`, `idpel`, `status`) VALUES
('PRO001', 'Maintence', '2020-07-30', '2020-07-30', 'PET014', 'aa', ''),
('PRO002', 'PSB', '0000-00-00', '0000-00-00', 'PET014', 'aa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbrg`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`idbrgkel`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`idbrgmas`);

--
-- Indexes for table `detbrgkel`
--
ALTER TABLE `detbrgkel`
  ADD PRIMARY KEY (`iddetbkel`);

--
-- Indexes for table `detbrgmas`
--
ALTER TABLE `detbrgmas`
  ADD PRIMARY KEY (`iddetbmas`);

--
-- Indexes for table `detpinjam`
--
ALTER TABLE `detpinjam`
  ADD PRIMARY KEY (`iddetpinjam`);

--
-- Indexes for table `detproyek`
--
ALTER TABLE `detproyek`
  ADD PRIMARY KEY (`iddetpro`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpet`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`idpro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
