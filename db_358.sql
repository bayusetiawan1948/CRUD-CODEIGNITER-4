-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 09:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_358`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nik` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nik`, `nama`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
('327523594587', 'Garrison Carr', 'L', 'Che?m', '1982-09-25', 'Ap #689-5050 In Rd.'),
('327533156888', 'Dante Short', 'L', 'Rankweil', '2000-08-21', '567-901 Egestas Ave'),
('327534724792', 'Blythe Acosta', 'P', 'Córdoba', '1999-11-28', '3740 Cras St.'),
('327538869245', 'Noel Pollard', 'P', 'Villahermosa', '1992-08-02', 'Ap #201-1231 Molestie Rd.'),
('327551898158', 'Lance Holden', 'L', 'Gießen', '1998-09-02', '385-4657 Sed Rd.'),
('327555834637', 'Fiona Decker', 'L', 'Cáceres', '2001-02-26', 'P.O. Box 292, 722 Elit, Street'),
('327556344562', 'Veda Kirk', 'L', 'Meppel', '1985-08-05', '856-7983 Lectus Ave'),
('327556824979', 'Callum Sanchez', 'L', 'Boo', '1980-12-30', '625-5221 Tellus St.'),
('327573233186', 'Driscoll Mays', 'L', 'Maidenhead', '1999-12-25', 'P.O. Box 954, 6311 Dolor Av.'),
('327581757258', 'Kay Simon', 'P', 'Blind River', '1982-03-15', 'Ap #378-3751 Luctus Rd.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
