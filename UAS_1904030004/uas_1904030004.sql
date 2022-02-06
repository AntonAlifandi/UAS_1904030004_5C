-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 00.45
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030004`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `id` int(5) NOT NULL,
  `kode_pengajar` int(5) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `mata_pelajaran` varchar(20) NOT NULL,
  `kelas1` int(1) NOT NULL,
  `kelas2` int(1) NOT NULL,
  `kelas3` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mk`
--

INSERT INTO `tbl_mk` (`id`, `kode_pengajar`, `nama_guru`, `mata_pelajaran`, `kelas1`, `kelas2`, `kelas3`) VALUES
(1, 83454, 'aditya ', 'matematika', 3, 3, 3),
(2, 11112, 'lilis diyanti', 'IPA', 2, 2, 2),
(3, 11113, 'agus saputra', 'PKN', 2, 2, 2),
(4, 45365, 'dinda aini', 'fisika', 4, 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajar`
--

CREATE TABLE `tbl_pengajar` (
  `id` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengajar`
--

INSERT INTO `tbl_pengajar` (`id`, `nidn`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `mata_pelajaran`) VALUES
(1, 34687, 'aditya', 'mozia f3', 'laki-laki', 'islam', 'matematika'),
(2, 98443, 'dinda aini', 'frecia g8', 'perempuan', 'islam', 'fisika'),
(3, 12343, 'sigit maulana', 'vivacia f10 nomor 3', 'laki-laki', 'kristen', 'kalkulus'),
(4, 23425, 'indra saputra', 'aurora f12', 'laki-laki', 'islam', 'sistem jaringan'),
(5, 56743, 'maura siska', 'ingenia e3', 'perempuan', 'islam', 'seni budaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengajar`
--
ALTER TABLE `tbl_pengajar`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
