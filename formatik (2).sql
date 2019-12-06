-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2019 pada 19.22
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `email`, `password`) VALUES
(1, 'fathur rohman', 'aezakmi', 'rahmanboy987@gmail.com', 'a67e565b11cd18f7a922b58f5476b569');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL,
  `comment` varchar(5120) NOT NULL,
  `date_create` datetime NOT NULL,
  `img_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `date_event`
--

CREATE TABLE `date_event` (
  `id` int(11) NOT NULL,
  `date_event` int(11) NOT NULL,
  `id_komunitas` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `user_admin`, `kategori`) VALUES
(1, 'aezakmi', 'skripsi'),
(2, 'aezakmi', 'kkn'),
(3, 'aezakmi', 'pkl'),
(4, 'aezakmi', 'shitpost'),
(5, 'aezakmi', 'tutorial'),
(6, 'aezakmi', 'karya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komunitas`
--

CREATE TABLE `komunitas` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id_ketua` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_cover` varchar(255) NOT NULL,
  `img_profile` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `action` varchar(16) NOT NULL,
  `isi` int(255) NOT NULL,
  `dari` varchar(16) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `username` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`username`, `msg`, `posted`) VALUES
('sunu', 'asd', '2019-11-30 04:02:08'),
('fathur', 'HELLO', '2019-11-30 04:02:27'),
('sunu', 'lu lagi ngapa bujank', '2019-11-30 04:02:34'),
('fathur', 'nothing', '2019-11-30 04:02:45'),
('sunu', '4 jam ho', '2019-11-30 04:03:30'),
('fathur', 'i know that feel bruh', '2019-11-30 04:03:39'),
('fathur', 'yeah', '2019-11-30 04:06:18'),
('sunu', 'ahhh', '2019-11-30 04:06:24'),
('fathur', 'ea', '2019-11-30 04:06:28'),
('sunu', 'asd', '2019-11-30 04:06:31'),
('fathur', 'asd', '2019-11-30 04:06:48'),
('sunu', 'ds', '2019-11-30 04:06:52'),
('fathur', 'hihihihihih', '2019-11-30 04:06:58'),
('sunu', 'asd', '2019-11-30 04:07:00'),
('fathur', 'adsds', '2019-11-30 04:07:02'),
('sunu', 'dsds', '2019-11-30 04:07:05'),
('fathur', 'fok', '2019-11-30 04:07:07'),
('sunu', 'aaaa', '2019-11-30 04:07:10'),
('fathur', 'capek gua', '2019-11-30 04:07:13'),
('kiki', 'asd', '2019-11-30 04:12:58'),
('kiki', 'capek guaaaa', '2019-11-30 04:13:34'),
('rahmanboy987', 'wasdasd', '2019-12-05 10:14:26'),
('rahmanboy987', 'asdasd', '2019-12-05 10:14:27'),
('rahmanboy987', 'asdasd', '2019-12-05 10:14:29'),
('rahmanboy987', 'asuuuu', '2019-12-05 10:25:23'),
('rahmanboy987', 'laskdjalskdj', '2019-12-05 16:24:18'),
('rahmanboy987', 'asdasdas', '2019-12-05 16:41:38'),
('rahmanboy987', 'asdasd', '2019-12-05 23:51:35'),
('rahmanboy987', 'fathur', '2019-12-07 01:22:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `post` varchar(5120) NOT NULL,
  `img_post` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `id_komunitas` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `judul`, `post`, `img_post`, `nama_user`, `id_komunitas`, `date_created`) VALUES
(1, 'saya gabuuuut', 'saya gabut srius', '', 'rahmanboy987', 0, '0000-00-00 00:00:00'),
(2, 'saaaayaaa gabut', 'saya jenuh', '', 'fathur', 0, 'tastasta'),
(3, 'asdasdasdasd', 'asdasdasdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:16:16pm'),
(4, 'asdasdasdasd', 'asdasdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:16:19pm'),
(5, 'asdasdas', 'sa', '', 'rahmanboy987', 0, '2019-12-04 10:17:10pm'),
(6, 'asdasdasdasd', 'asdasda', '5de7ce32f0e3d.jpg', 'rahmanboy987', 0, '2019-12-04 10:18:10pm'),
(7, 'asdasdasdasd', 'asdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:18:49pm'),
(8, 'asdasdasdasd', 'asdasda', '5de7d29d9fffd.jpg', 'rahmanboy987', 0, '2019-12-04 10:37:01pm'),
(9, 'asdasdasdasd', 'asdasda', '5de7d2a551888.jpg', 'rahmanboy987', 0, '2019-12-04 10:37:09pm'),
(10, 'asdasdasdasd', 'asdasda', '5de7d37a86f20.jpg', 'rahmanboy987', 0, '2019-12-04 10:40:42pm'),
(11, 'asdasdasdasd', 'asdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:46:11pm'),
(12, 'asdasdasdasd', 'asdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:46:48pm'),
(13, 'asdasdasdasd', 'asdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:47:44pm'),
(14, 'asdasdasdasd', 'asdasdasd', '', 'rahmanboy987', 0, '2019-12-04 10:49:09pm'),
(15, 'asdasdasdasd', 'asdasda', '5de7d5ecb9b37.jpg', 'rahmanboy987', 0, '2019-12-04 10:51:08pm'),
(16, 'saya gabut lur', '', '', 'rahmanboy987', 0, '2019-12-05 09:51:24am'),
(17, 'saya gabut lur', '', '', 'rahmanboy987', 0, '2019-12-05 09:54:55am'),
(18, 'saya gabut lur', '', '', 'rahmanboy987', 0, '2019-12-05 09:54:55am'),
(19, 'saya gabut slur', '', '', 'rahmanboy987', 0, '2019-12-05 09:55:04am'),
(20, 'saya gabut slur', '', '', 'rahmanboy987', 0, '2019-12-05 09:55:04am'),
(21, 'haloooo', '', '', 'rahmanboy987', 0, '2019-12-05 04:25:07pm'),
(22, 'haloooo', '', '', 'rahmanboy987', 0, '2019-12-05 04:41:34pm'),
(23, 'haloooo', '', '', 'rahmanboy987', 0, '2019-12-05 04:51:49pm'),
(24, 'haloooo', '', '', 'rahmanboy987', 0, '2019-12-05 04:52:06pm'),
(25, 'haloooo', '', '', 'rahmanboy987', 0, '2019-12-05 04:55:59pm'),
(26, 'haiii', '', '', 'rahmanboy987', 0, '2019-12-06 12:01:26am'),
(27, 'haiii', '', '', 'rahmanboy987', 0, '2019-12-06 12:04:07am');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `toogle_maintainance` tinyint(1) NOT NULL,
  `text_maintainance` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `toogle_maintainance`, `text_maintainance`, `datetime`) VALUES
(1, 0, 'test', '2019-12-05 19:03:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `username` varchar(16) NOT NULL,
  `npm` int(11) NOT NULL,
  `komunitas` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `img_profile` varchar(255) NOT NULL,
  `img_verification` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `npm`, `komunitas`, `email`, `password`, `img_profile`, `img_verification`, `status`) VALUES
(1, '', 'rahmanboy987', 0, '', 'rahmanboy987@gmail.com', '95eef42b904a343d9459b33679a31afe', 'profile.jpg', 'profile.jpg', 0),
(21, '', 'sunu', 0, '', 'sunu@a', '97b54dd3af9daefa37ce9ebd5912f1bb', 'Sunu_Almet.jpg', 'Sunu Almet.jpg', 0),
(22, '', 'fathur', 0, '', 'fathur@a.com', '5e48745e9f08a449a9f2be33097a4c39', '', 'ic_collections_white_18dp.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `date_event`
--
ALTER TABLE `date_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `date_event`
--
ALTER TABLE `date_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
