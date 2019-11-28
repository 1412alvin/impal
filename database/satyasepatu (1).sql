-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 12:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satyasepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` char(5) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `merk`, `ukuran`, `jumlah`, `harga`) VALUES
('SHOE2', 'Iger', 41, 10, 300000),
('SHOE3', 'FIERRO', 42, 10, 300000),
('SHOE4', 'KIZARU', 40, 9, 310000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `nama`, `email`) VALUES
('alvinda', 'kaitokid', 'Alvinda Julian', 'utomo423@gmail.com'),
('kaitooo', 'kaitokid', 'kaito kid', 'kaito1412@gmail.com'),
('naruto', 'kaitokid1412', 'Alvinda Julian Trismadi', 'narutoninja@gmail.co'),
('utamibudi', 'kaitokid', 'Budi Utami', 'utami@yahoo.com'),
('utomobudi', 'kaitokid', 'Budi Utomo', 'utomobudi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `datapemesanan`
--

CREATE TABLE `datapemesanan` (
  `kodepesanan` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `metode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapemesanan`
--

INSERT INTO `datapemesanan` (`kodepesanan`, `kode`, `nama`, `nohp`, `alamat`, `metode`) VALUES
(1, 'SHOE1', 'kaito kuroba', '2147483647', 'Bandung', 'Cash on Delivery'),
(2, 'SHOE1', 'kaito kuroba', '082117896927', 'Cimahi', 'Cash on Delivery'),
(3, 'SHOE4', 'Alvinda Julian Trismadi', '099871213', 'Cianjur', 'Cash on Delivery'),
(4, 'SHOE1', 'kaito kuroba', '9998898', 'basajja', 'Cash on Delivery'),
(5, 'SHOE5', 'kaito kuroba', '1212241', 'Bekasi', 'Cash on Delivery'),
(6, 'SHOE4', 'kaito kuroba', '9832732134', 'Jakarta', 'Cash on Delivery'),
(7, 'SHOE6', 'budi utomo', '085759050799', 'Bekasi', 'Cash on Delivery'),
(8, 'SHOE6', 'utami budi', '08121389473', 'Bekasi, cikarang utara', 'Cash on Delivery'),
(9, 'SHOE2', 'asasaasas', '219819373', 'Bekasi', 'Cash on Delivery'),
(10, 'SHOE4', 'kaito kuroba', '76', 'Bandung sasas', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`, `nama`) VALUES
('admin', 'admin', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `datapemesanan`
--
ALTER TABLE `datapemesanan`
  ADD PRIMARY KEY (`kodepesanan`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapemesanan`
--
ALTER TABLE `datapemesanan`
  MODIFY `kodepesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
