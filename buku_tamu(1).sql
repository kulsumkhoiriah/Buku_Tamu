-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 10.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_tamu`
--

CREATE TABLE `form_tamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_visitor` varchar(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nomor_telepon` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `pendamping` varchar(30) NOT NULL,
  `tujuan` text NOT NULL,
  `signed` text DEFAULT NULL,
  `keterangan` text NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `status` int(1) DEFAULT 0,
  `status_kasek` int(1) DEFAULT 0,
  `foto` text NOT NULL,
  `alasan` text NOT NULL,
  `time_in_aktual` time DEFAULT NULL,
  `time_out_aktual` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_log`
--

CREATE TABLE `tabel_log` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` varchar(30) DEFAULT NULL,
  `log_tipe` int(11) DEFAULT NULL,
  `log_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_log`
--

INSERT INTO `tabel_log` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(8, '2022-05-09 03:46:41', '3', 0, 'berhasil login'),
(9, '2022-05-09 03:53:55', '3', 4, 'menghapus data'),
(10, '2022-05-09 03:54:18', NULL, 1, 'user logout'),
(11, '2022-05-09 03:54:41', '4', 0, 'berhasil login'),
(12, '2022-05-09 03:55:05', '4', 4, 'menghapus data'),
(13, '2022-05-09 03:55:29', NULL, 1, 'user logout'),
(14, '2022-05-09 03:56:13', '3', 0, 'berhasil login'),
(15, '2022-05-09 03:56:51', '3', 2, 'menambahkan user'),
(16, '2022-05-09 03:57:16', '3', 3, 'Edit User'),
(17, '2022-05-09 04:43:16', NULL, 1, 'user logout'),
(18, '2022-05-09 04:43:31', '4', 0, 'berhasil login'),
(19, '2022-05-12 02:36:20', '3', 0, 'berhasil login'),
(20, '2022-05-13 01:04:03', '3', 0, 'berhasil login'),
(21, '2022-05-18 00:42:38', '3', 0, 'berhasil login'),
(22, '2022-05-18 00:43:00', NULL, 1, 'user logout'),
(23, '2022-05-18 00:43:12', '4', 0, 'berhasil login'),
(24, '2022-05-18 00:44:08', NULL, 1, 'user logout'),
(25, '2022-05-18 00:44:28', '3', 0, 'berhasil login'),
(26, '2022-05-18 00:48:47', NULL, 1, 'user logout'),
(27, '2022-05-18 00:48:58', '4', 0, 'berhasil login'),
(28, '2022-05-18 00:49:36', NULL, 1, 'user logout'),
(29, '2022-05-18 00:49:51', '3', 0, 'berhasil login'),
(30, '2022-05-18 01:57:39', NULL, 1, 'user logout'),
(31, '2022-05-18 01:58:05', '3', 0, 'berhasil login'),
(32, '2022-05-18 01:59:39', '3', 2, 'menambahkan user'),
(33, '2022-05-23 03:55:39', '4', 0, 'berhasil login'),
(34, '2022-05-23 03:59:45', '3', 0, 'berhasil login'),
(35, '2022-05-24 01:28:51', '4', 0, 'berhasil login'),
(36, '2022-05-24 01:33:57', NULL, 1, 'user logout'),
(37, '2022-05-24 01:34:08', '3', 0, 'berhasil login'),
(38, '2022-06-10 02:33:05', '4', 0, 'berhasil login'),
(39, '2022-06-10 06:41:19', '3', 0, 'berhasil login'),
(40, '2022-06-10 06:42:56', '4', 0, 'berhasil login'),
(41, '2022-06-10 06:47:31', '4', 0, 'berhasil login'),
(42, '2022-06-10 06:48:01', '4', 0, 'berhasil login'),
(43, '2022-06-10 06:49:42', '3', 0, 'berhasil login'),
(44, '2022-06-10 06:50:40', '4', 0, 'berhasil login'),
(45, '2022-06-10 06:53:02', '3', 0, 'berhasil login'),
(46, '2022-06-10 07:30:47', '8', 0, 'berhasil login'),
(47, '2022-06-10 08:15:21', '4', 0, 'berhasil login'),
(48, '2022-06-10 08:15:50', '3', 0, 'berhasil login'),
(49, '2022-06-10 08:40:06', '4', 0, 'berhasil login'),
(50, '2022-06-10 08:40:35', '3', 0, 'berhasil login'),
(51, '2022-06-14 02:46:50', '4', 0, 'berhasil login'),
(52, '2022-06-14 06:35:16', '8', 0, 'berhasil login'),
(53, '2022-06-15 01:07:02', '8', 0, 'berhasil login'),
(54, '2022-06-15 01:54:20', '8', 0, 'berhasil login'),
(55, '2022-06-15 01:54:40', '4', 0, 'berhasil login'),
(56, '2022-06-15 01:55:11', '3', 0, 'berhasil login'),
(57, '2022-06-15 01:56:09', '8', 0, 'berhasil login'),
(58, '2022-06-16 04:04:15', '4', 0, 'berhasil login'),
(59, '2022-06-16 04:05:29', '3', 0, 'berhasil login'),
(60, '2022-06-16 04:06:30', '4', 0, 'berhasil login'),
(61, '2022-06-16 04:07:54', '3', 0, 'berhasil login'),
(62, '2022-06-16 04:08:46', '4', 0, 'berhasil login'),
(63, '2022-06-16 04:09:47', '3', 0, 'berhasil login'),
(64, '2022-06-16 04:13:47', '4', 0, 'berhasil login'),
(65, '2022-06-17 00:57:24', '3', 0, 'berhasil login'),
(66, '2022-06-17 00:58:00', '4', 0, 'berhasil login'),
(67, '2022-06-17 00:58:42', '8', 0, 'berhasil login'),
(68, '2022-06-17 02:05:48', '8', 0, 'berhasil login'),
(69, '2022-06-17 07:48:02', '4', 0, 'berhasil login'),
(70, '2022-06-17 07:57:49', '3', 0, 'berhasil login'),
(71, '2022-06-17 07:58:24', '3', 0, 'berhasil login'),
(72, '2022-06-17 07:58:38', '4', 0, 'berhasil login'),
(73, '2022-06-17 08:26:47', '4', 1, 'berhasil menghapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1:kadiv,2:kasek'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `departemen`, `level`) VALUES
(3, 'kadep', '829da23ceeac07b7fe6a17fbaa9c79c1', 'kadep', 'OPERASIONAL', 1),
(4, 'kasek', '038b617b2008aa13661198a078e7791b', 'kasek', 'operasional', 2),
(8, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Kulsum Khoiriah', 'ti', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_tamu`
--
ALTER TABLE `form_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_tamu`
--
ALTER TABLE `form_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
