-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 01:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradise`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(21) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_account` varchar(255) NOT NULL,
  `debit` int(255) NOT NULL,
  `kredit` int(255) NOT NULL,
  `jenis_account` varchar(255) NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `ket_akun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `no_akun`, `nama_account`, `debit`, `kredit`, `jenis_account`, `id_jenis`, `ket_akun`) VALUES
(42, 3100, 'Modal', 0, 0, 'D', 8, 'kredit'),
(52, 4000, 'Pendapatan Usaha', 0, 0, 'D', 7, 'kredit'),
(53, 5100, 'Salary Expense', 0, 0, 'D', 11, 'debit'),
(57, 1000, 'Initial Capital', 0, 2500000, 'D', 3, 'kredit'),
(64, 1000, 'Liability Business', 0, 3500000, 'D', 2, 'kredit'),
(67, 2000, 'Other Assets', 0, 0, 'H', 1, 'debit'),
(69, 1200, 'Equipment', 800000, 0, 'D', 1, 'debit'),
(77, 1100, 'Cash', 12400000, 0, 'D', 1, 'debit'),
(79, 1000, 'Income Business', 0, 7400000, 'D', 4, 'debit'),
(80, 1000, 'Electric Expense', 100000, 0, 'D', 6, 'debit'),
(81, 2000, 'Telephone Expense', 100000, 0, 'D', 6, 'debit'),
(84, 1000, 'Discount Given', 0, 0, 'D', 5, 'debit'),
(86, 2100, 'Inventory', -7000000, 0, 'D', 1, ''),
(87, 2110, 'Foods', 0, 0, 'D', 1, ''),
(88, 2120, 'Drinks', 0, 0, 'D', 1, ''),
(89, 2000, 'Trade Creditors', 0, 0, 'D', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `nama`, `email`, `username`, `password`) VALUES
(8, 'Okta Ovelia Rezi', 'oktaoveliarezi@gmail.com', 'okta', '411d2f5092ce942f2163866113f28168'),
(9, 'aaa', 'chintya@gmail.com', 'chintya', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'Nanda Ayu Annisa', 'nanda@gmail.com', 'hgnisa', '3ad2866e2c27924c68ec53eb7735b4ed'),
(11, 'nanda', 'nanda@gmail.com', 'nanda', '859a37720c27b9f70e11b79bab9318fe');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` char(2) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(21) NOT NULL,
  `harga` int(21) NOT NULL,
  `jenis` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `harga`, `jenis`) VALUES
('CL', 'Coffee Latte', 0, 20000, 0),
('CR', 'Crab', 100, 50000, 0),
('sd', 'dsdse', 10, 5413, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(2) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `noTelp_customer` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `noTelp_customer`) VALUES
('CR', 'Clarissa', 85789);

-- --------------------------------------------------------

--
-- Table structure for table `detail_account`
--

CREATE TABLE `detail_account` (
  `id_detailacc` varchar(50) NOT NULL DEFAULT '',
  `debit` bigint(50) DEFAULT NULL,
  `kredit` bigint(50) DEFAULT NULL,
  `id_jurnal` varchar(50) DEFAULT NULL,
  `id_account` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` char(2) NOT NULL,
  `nama_employee` varchar(30) DEFAULT NULL,
  `noTelp_employee` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `nama_employee`, `noTelp_employee`) VALUES
('ND', 'Nanda Ayu Annisa', 85248963154);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `nama_jenis` varchar(200) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`nama_jenis`, `id_jenis`) VALUES
('Foods', 1),
('Drinks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(21) NOT NULL,
  `akun1` varchar(100) NOT NULL,
  `akun2` varchar(100) NOT NULL,
  `tgl_jurnal` date NOT NULL,
  `harga_debit` int(255) NOT NULL,
  `harga_kredit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `akun1`, `akun2`, `tgl_jurnal`, `harga_debit`, `harga_kredit`) VALUES
(42, 'Beban Listrik', 'Kas', '2015-02-27', 100000, 100000),
(46, 'Kas', 'Beban Telepon', '2016-01-12', 100000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `No_Transaksi` int(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `Harga` int(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Nama_Supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `No_Transaksi` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` int(18) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Nama_Customer` varchar(200) NOT NULL,
  `Nama_Employee` varchar(200) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `kredit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`No_Transaksi`, `Tanggal`, `Jumlah`, `Harga`, `Keterangan`, `Nama_Barang`, `Nama_Customer`, `Nama_Employee`, `debit`, `kredit`) VALUES
(11, '0000-00-00', 100, 2000000, 'eee', 'Coffee Latte', '', '', 'Cash', 'Income Business'),
(12, '2018-01-09', 100, 5000000, 'g', 'Crab', '', '', 'Cash', 'Income Business');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(244) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `email`, `no_hp`) VALUES
('NN', 'ppppp', 'Jl. Umban Sari', 'nanda@gmail.com', '082156245630');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(5) NOT NULL,
  `nama_type` varchar(20) DEFAULT NULL,
  `jenis` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nama_type`, `jenis`) VALUES
(1, 'Asset', 1),
(2, 'Bank', 1),
(3, 'Other Asset', 1),
(4, 'Accounts Receivable', 1),
(5, 'Liability', 2),
(6, 'Accounts Payable', 2),
(7, 'Other Liability', 2),
(8, 'Equity', 3),
(9, 'Income', 4),
(10, 'Cost of sales', 5),
(11, 'Expense', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_account`
--
ALTER TABLE `detail_account`
  ADD PRIMARY KEY (`id_detailacc`),
  ADD KEY `id_journal` (`id_jurnal`),
  ADD KEY `id_account` (`id_account`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`No_Transaksi`),
  ADD UNIQUE KEY `id_barang` (`Nama_Barang`),
  ADD UNIQUE KEY `id_supplier` (`Nama_Supplier`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`No_Transaksi`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
