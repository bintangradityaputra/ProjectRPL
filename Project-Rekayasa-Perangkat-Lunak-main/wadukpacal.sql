-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2022 pada 13.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadukpacal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_etiket`
--

CREATE TABLE `data_etiket` (
  `No_Tiket` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_berkunjung` date NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_etiket`
--

INSERT INTO `data_etiket` (`No_Tiket`, `nama`, `tanggal_berkunjung`, `metode_pembayaran`, `tanggal_pemesanan`) VALUES
(136, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:00:24'),
(135, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:00:24'),
(134, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:59:43'),
(133, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:59:43'),
(132, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:59:41'),
(131, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:59:41'),
(130, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:58:18'),
(129, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:58:18'),
(128, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:57:54'),
(127, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:57:54'),
(126, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:57:21'),
(125, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:57:21'),
(124, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:56:37'),
(122, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:55:37'),
(123, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:56:37'),
(121, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:55:37'),
(120, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 04:55:37'),
(119, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 04:55:30'),
(118, 'ari andi mustofa', '2021-12-14', 'Transfer Bank', '2021-12-12 04:49:01'),
(117, 'dika mahardika', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 04:38:46'),
(116, 'dika mahardika', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 04:37:29'),
(115, 'dika mahardika', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 04:36:29'),
(114, 'dika mahardika', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 04:35:15'),
(113, 'dika mahardika', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 04:33:41'),
(112, 'ari andi mustofa', '2021-12-13', 'Dana', '2021-12-12 04:30:53'),
(111, 'sukijan', '2021-12-13', 'Dana', '2021-12-12 04:16:40'),
(110, 'qila', '2021-12-13', 'Dana', '2021-12-12 04:16:33'),
(109, 'rumi', '2021-12-15', 'Transfer Bank', '2021-12-12 04:01:54'),
(108, 'qila', '2021-12-14', 'Transfer Bank', '2021-12-12 04:01:47'),
(107, 'ali', '2021-12-20', 'Transfer Bank', '2021-12-12 03:56:39'),
(106, 'ali', '2021-12-20', 'Transfer Bank', '2021-12-12 03:55:54'),
(105, 'andii', '2021-12-13', 'Transfer Bank', '2021-12-12 03:53:11'),
(104, 'santi', '2021-12-14', 'Ovo', '2021-12-12 03:22:07'),
(103, 'sinta', '2021-12-14', 'Ovo', '2021-12-12 03:22:00'),
(102, 'syifa', '2021-12-14', 'Dana', '2021-12-12 03:20:50'),
(101, 'rima', '2021-12-14', 'Dana', '2021-12-12 03:20:42'),
(100, 'rutik', '2021-12-14', 'Transfer Bank', '2021-12-12 03:20:13'),
(99, 'PUTRI', '2021-12-14', 'Transfer Bank', '2021-12-12 03:15:21'),
(98, 'sule', '2021-12-15', 'Transfer Bank', '2021-12-12 03:14:54'),
(97, 'sule', '2021-12-15', 'Transfer Bank', '2021-12-12 03:14:49'),
(96, 'ali', '2021-12-13', 'Dana', '2021-12-12 03:12:50'),
(95, 'ali', '2021-12-13', 'Dana', '2021-12-12 03:12:29'),
(137, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:00:39'),
(138, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:00:39'),
(139, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:00:52'),
(140, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:00:52'),
(141, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:01:17'),
(142, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:01:17'),
(143, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:01:39'),
(144, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:01:39'),
(145, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:01:40'),
(146, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:01:40'),
(147, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:01:58'),
(148, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:01:58'),
(149, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:02:00'),
(150, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:02:00'),
(151, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:03:32'),
(152, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:03:32'),
(153, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:03:34'),
(154, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:03:34'),
(155, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:04:35'),
(156, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:04:35'),
(157, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:05:03'),
(158, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:05:03'),
(159, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:05:22'),
(160, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:05:22'),
(161, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:13:02'),
(162, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:13:02'),
(163, 'asih', '2021-12-14', 'Link Aja', '2021-12-12 05:15:35'),
(164, 'murni', '2021-12-14', 'Link Aja', '2021-12-12 05:15:35'),
(165, 'ari andi mustofa', '2021-12-14', 'Dana', '2021-12-12 05:53:52'),
(166, 'ari andi mustofa', '2021-12-14', 'Dana', '2021-12-12 05:54:12'),
(167, 'ari andi mustofa', '2021-12-14', 'Dana', '2021-12-12 05:59:15'),
(168, 'ari andi mustofa', '2021-12-14', 'Dana', '2021-12-12 06:01:27'),
(169, 'ari andi mustofa', '2021-12-14', 'Dana', '2021-12-12 06:08:07'),
(170, 'ari andi mustofa', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 14:24:06'),
(171, 'ari andi mustofa', '2021-12-13', 'Indomart/Alfamart', '2021-12-12 14:25:16'),
(172, 'ari andi mustofa', '2021-12-15', 'Dana', '2021-12-13 00:21:31'),
(173, 'ari andi mustofa', '2021-12-15', 'Dana', '2021-12-13 00:21:53'),
(174, 'wddwdw', '2021-12-14', 'Transfer Bank', '2021-12-13 00:22:13'),
(175, 'Ari Andi Mustofa', '2021-12-07', 'Dana', '2021-12-13 00:49:26'),
(176, 'putra', '2021-12-16', 'Dana', '2021-12-13 00:49:35'),
(177, 'Ari Andi Mustofa', '2021-12-07', 'Dana', '2021-12-13 00:49:35'),
(178, 'putra', '2021-12-16', 'Dana', '2021-12-13 00:49:35'),
(179, 'Ari Andi Mustofa', '2021-12-14', 'Transfer Bank', '2021-12-13 01:15:13'),
(180, 'Nanda Putri Febri Antono', '2021-12-14', 'Transfer Bank', '2021-12-13 01:15:29'),
(181, 'Ari Andi Mustofa', '2021-12-14', 'Transfer Bank', '2021-12-13 01:15:29'),
(182, 'Nanda Putri Febri Antono', '2021-12-14', 'Transfer Bank', '2021-12-13 01:15:29'),
(183, 'ari andi mustofa', '2021-12-14', 'Link Aja', '2021-12-13 01:17:06'),
(184, 'Nur Asmaul', '2021-12-15', 'Link Aja', '2021-12-14 05:40:35'),
(185, 'Nur Asmaul', '2001-12-15', 'Link Aja', '2021-12-14 05:43:11'),
(186, 'sdgdf', '2021-12-15', 'Transfer Bank', '2021-12-14 05:50:55'),
(187, 'ari andi mustofa', '2021-12-15', 'Indomart/Alfamart', '2021-12-14 08:32:24'),
(188, 'Nur Asmaul', '2021-12-15', 'Link Aja', '2021-12-14 08:32:54'),
(189, 'Adila', '2021-12-15', 'Link Aja', '2021-12-14 08:33:14'),
(190, 'Nur Asmaul', '2021-12-15', 'Link Aja', '2021-12-14 08:33:14'),
(191, 'Adila', '2021-12-15', 'Link Aja', '2021-12-14 08:33:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_register`
--

CREATE TABLE `data_register` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `No_Tiket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_register`
--

INSERT INTO `data_register` (`ID`, `Nama`, `email`, `Alamat`, `Tanggal_Lahir`, `umur`, `jenis_kelamin`, `tanggal_daftar`, `username`, `password`, `No_Tiket`) VALUES
(46, 'Mustofa', 'ariandi1351@gmail.co', 'balongrejo', '2001-12-15', 20, 'Laki-laki', '2021-12-11 04:36:25', 'mustofa', '12345', 0),
(45, 'Nanda Putri', 'nanda@gmail.com', 'sugihwaras', '2002-12-12', 19, 'Perempuan', '2021-12-11 04:32:16', 'nanda123', '12345', 0),
(44, 'Ari Andi Mustofa', 'ariandi1351@gmail.com', 'jono', '2021-12-01', 1, 'Laki-laki', '2021-12-11 08:20:12', 'ariandi', 'qwerty', 0),
(48, 'putri', 'putri@gmail.com', 'sugihwaras', '2001-10-09', 20, 'Perempuan', '2021-12-13 03:12:33', 'putriiii', 'putri', 0),
(49, 'uswatun chasanah', 'uswa@gmail.com', 'Tuban', '2004-12-12', 15, 'Perempuan', '2021-12-13 08:24:15', 'us', '12345', 0),
(50, 'Nur Asmaul ', 'nur@gmail.com', 'Nganjuk', '2001-12-15', 20, 'Perempuan', '2021-12-14 05:38:46', 'nur123', '12345', 0),
(51, 'Ari Andi Mustofa', 'ariandi1351@gmail.com', 'Tuban', '2002-12-10', 19, 'Laki-laki', '2021-12-14 08:30:50', 'mustofa123', '12345', 0),
(52, 'sudra', 'sudra123@gmail.com', 'balongan', '1999-01-01', 23, 'Laki-laki', '2022-03-16 12:12:12', 'sudra', 'sudra12', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_etiket`
--
ALTER TABLE `data_etiket`
  ADD PRIMARY KEY (`No_Tiket`);

--
-- Indeks untuk tabel `data_register`
--
ALTER TABLE `data_register`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `No_Tiket` (`No_Tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_etiket`
--
ALTER TABLE `data_etiket`
  MODIFY `No_Tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT untuk tabel `data_register`
--
ALTER TABLE `data_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
