-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Mei 2016 pada 15.44
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_tic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `nim` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` char(1) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `nama`, `jk`, `prodi`) VALUES
(2008965462, 'L2', 'L', 'Teknik Desain'),
(2014081041, 'Hidayat Rudi', 'L', 'Teknik Informatika'),
(2014081101, 'Rudi Hidayat', 'L', 'IT'),
(2014081109, 'Eltwo Rdy', 'L', 'IT'),
(2017111101, 'Lois', 'P', 'Sistem Informasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
