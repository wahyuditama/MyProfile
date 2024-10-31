-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 06:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `ability`
--

CREATE TABLE `ability` (
  `id` int(11) NOT NULL,
  `atk` varchar(100) NOT NULL,
  `base_hp` varchar(100) NOT NULL,
  `base_atk` varchar(100) NOT NULL,
  `base_deff` varchar(100) NOT NULL,
  `crit_rate` varchar(100) NOT NULL,
  `crit_dmg` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ability`
--

INSERT INTO `ability` (`id`, `atk`, `base_hp`, `base_atk`, `base_deff`, `crit_rate`, `crit_dmg`, `create_at`) VALUES
(1, '20', '13', '30', '30', '10', '5445', '2024-10-31 14:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `deskripsi_profesi` varchar(100) NOT NULL,
  `about_header` varchar(100) NOT NULL,
  `header_paragraf` varchar(100) NOT NULL,
  `detail_paragraf` varchar(100) NOT NULL,
  `kota` text NOT NULL,
  `umur` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `craete_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `deskripsi`, `profesi`, `deskripsi_profesi`, `about_header`, `header_paragraf`, `detail_paragraf`, `kota`, `umur`, `email`, `foto`, `tanggal`, `craete_at`) VALUES
(1, 'Head Shrine Maiden of the Grand Narukumi Shrine Owner of the Yae Publishing House', 'About Yae Miko', 'Lady Guuji of the Grand Narukami Shrine also serves as the editor-in-chief of Yae Publishing ', 'Secret Art: Tenko Kenshin,', 'Miko has long, muted pink hair that is tied at the bottom. She also has pink fox ears that po', 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omni', 'jogja', 34, 'firo@wulo.com', '1349794.png', '12-06-200', 0);

-- --------------------------------------------------------

--
-- Table structure for table `capabilitas`
--

CREATE TABLE `capabilitas` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `paragraf` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `capabilitas`
--

INSERT INTO `capabilitas` (`id`, `judul`, `paragraf`, `info`, `foto`, `created_at`) VALUES
(2, 'Framework Boostrap', 'lorem ipsum dolor site amet. amer123', 'baru dimulai', 'pngegg.png', '2024-10-30 08:05:09'),
(3, 'Framework Tailwind', 'lorem ipsum dolor site amet. amer123', 'baru dimulai', 'Tailwind CSS.png', '2024-10-30 07:59:41'),
(10, 'CSS', 'aliquid fuga consequatus meaning sint consectetur velite', 'lorem ipsum dolor site amet', 'css_logo.png', '2024-10-30 14:33:52'),
(11, 'PHP', 'aliquid fuga consequatus meaning sint consectetur velite', 'lorem ipsum dolor site amet', 'PHP.png', '2024-10-30 14:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`) VALUES
(1, 'tio nugraba', 'ucup@gmail.com', 'aassdsdesd', 'dfdfdffg', '2024-10-30 07:13:35'),
(5, 'yunus jambul ijo', 'firo@wulo.com', 'holaaa guestt', 'lorem123', '2024-10-30 14:46:17'),
(8, 'indra baja ringan', 'baja_ringan@gmail.com', 'holaaa guestt', '1222', '2024-10-30 14:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `deskripsi`, `twitter`, `telepon`, `ig`, `fb`, `linkedin`) VALUES
(0, 'ini lorem ipsum dolor ', 'http://localhost/angkatan1/', '223244334', 'http://localhost/angkatan2/', 'http://localhost/angkatan3', 'http://localhost/angkatan3/myperpusw');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `sub_judul` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `header`, `sub_judul`, `foto`, `created_at`) VALUES
(1, 'Lorem Website', 'lorem dolor', 'testimonials-4.jpg', '2024-10-30 07:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(12) NOT NULL,
  `judul_konten` text NOT NULL,
  `isi_konten` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul_konten`, `isi_konten`, `foto`, `keterangan`, `update_at`, `create_at`) VALUES
(4, '', '', '1351117.jpeg', '', '2024-10-31 14:41:31', '2024-10-31 14:41:31'),
(6, '', '', '1351756.jpeg', '', '2024-10-31 15:09:46', '2024-10-31 15:09:46'),
(7, '', '', '1353711.jpeg', '', '2024-10-31 15:09:59', '2024-10-31 15:09:59'),
(8, '', '', '1353824.jpeg', '', '2024-10-31 15:10:10', '2024-10-31 15:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id`, `username`, `email`, `password`, `update_at`, `created_at`) VALUES
(1, 'admin123', 'admin@gmail.com', '1234', '2024-10-28 03:41:46', '2024-10-28 03:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `deskripsi`, `profesi`, `foto`, `created_at`) VALUES
(2, 'rizki123', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 'chiken', 'testimonials-5.jpg', '2024-10-31 17:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `foto`, `update_at`, `create_at`) VALUES
(1, 'Yae Miko', 'Violet cherry blossoms on Mount Yougo', 'peakpx-yae.jpg', '2024-10-31 11:07:29', '2024-10-26 14:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ability`
--
ALTER TABLE `ability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capabilitas`
--
ALTER TABLE `capabilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ability`
--
ALTER TABLE `ability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `capabilitas`
--
ALTER TABLE `capabilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
