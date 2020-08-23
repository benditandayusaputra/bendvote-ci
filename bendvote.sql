-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2020 pada 07.13
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bendvote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `ttl` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `avatar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `jk`, `ttl`, `alamat`, `avatar`) VALUES
(1, 'Bendi Tandayu Saputra', 'bend', '07e98548ca1a1212a4fdd2ba580c6ffd1a0caff8', 'Laki-Laki', 'Banjarnegara, 25 Oktober 2002', 'Bondolharjo, Rt 02/05', 'bend.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aspirasi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `id_user`, `aspirasi`, `created_at`) VALUES
(1, 1, 'Okelah', '2020-02-08 09:48:58'),
(2, 2, 'Sangat Buruk', '2020-02-08 10:30:18'),
(3, 3, 'Semoga OKAY', '2020-03-20 07:55:28'),
(4, 1, 'Ya', '2020-03-20 08:45:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `nama_calon` varchar(225) NOT NULL,
  `slug_calon` varchar(225) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `foto_calon` varchar(225) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `jenis_calon` char(1) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `slug_calon`, `id_kelas`, `foto_calon`, `visi`, `misi`, `jenis_calon`, `update_at`) VALUES
(1, 'Bend & Day', 'bend-day', 0, '20200206164502Bend_Day.png', '<p>Makan dan Minum</p>\r\n', '<ol>\r\n	<li>OK</li>\r\n	<li>OK</li>\r\n	<li>Ok</li>\r\n</ol>\r\n', '0', '2020-02-06 16:04:17'),
(2, 'Bend & Bend', 'bend-bend', 0, '20200208054733Bend_Bend.jpg', '<p>ok</p>\r\n', '<p>ok</p>\r\n', '1', '2020-02-08 04:47:34'),
(3, 'BENDI & DAYU', 'bendi-dayu', 0, '20200320092040BENDI_DAYU.jpg', '<p>......</p>\r\n', '<p>.........</p>\r\n', '0', '2020-03-20 08:20:40'),
(4, 'BENDI & BEND', 'bendi-bend', 0, '20200320092852BENDI_BEND.jpg', '<p>..............</p>\r\n', '<p>..................</p>\r\n', '0', '2020-03-20 08:28:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'XI RPL 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_pemilihan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilihan`
--

INSERT INTO `pemilihan` (`id_pemilihan`, `id_user`, `id_calon`, `created_at`) VALUES
(1, 1, 1, '2020-02-08 05:04:19'),
(2, 2, 1, '2020-02-08 10:29:00'),
(3, 3, 1, '2020-03-20 07:54:41'),
(4, 1, 4, '2020-03-20 08:45:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_user`, `id_calon`, `nilai`, `created_at`) VALUES
(1, 1, 2, 3, '2020-02-08 09:29:47'),
(2, 2, 2, 1, '2020-02-08 10:29:26'),
(3, 3, 2, 2, '2020-03-20 07:55:02'),
(4, 1, 2, 2, '2020-03-20 08:45:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `jk` int(1) NOT NULL,
  `jenis_user` int(1) NOT NULL,
  `token` char(4) NOT NULL,
  `status_pilih` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `id_kelas`, `nis`, `nama_user`, `jk`, `jenis_user`, `token`, `status_pilih`) VALUES
(1, 1, '15532', 'Bendi Tandayu Saputra', 1, 0, 'DFFS', 1),
(2, 1, '15540', 'Ibrahim', 1, 0, 'BEND', 1),
(3, 1, '15551', 'bila', 0, 0, 'BILA', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id_pemilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
