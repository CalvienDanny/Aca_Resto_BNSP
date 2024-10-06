-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 04:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` varchar(150) NOT NULL,
  `id_admin` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `display` varchar(150) NOT NULL,
  `hardware` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model`, `id_admin`, `title`, `price`, `display`, `hardware`, `camera`, `battery`, `qty`, `images`, `created_at`) VALUES
(15, 'Paket Keluarga', 0, 'Ruangan Lesehan', 10000, '4-5 Orang', 'Ayam Bakar, Gurame Bakar, Bebek Bakar', 'Jus Jeruk, Jus Alpukat, Jus Pandan', '25 Oktober 2023', 1, 'lesehan.jpg', '2023-11-13 03:02:58'),
(17, 'Ruang VIP', 0, 'Ruang VIP', 200000, '8-20 Orang', 'Pizza, Truffle Dish, Aneka Seafood', 'Beraneka Ragam Jus dan Minuman Pilihan', '30 Oktober 2023', 1, 'vip room.jpg', '2023-11-16 06:54:43'),
(19, 'Ruang Gazebo', 0, 'Ruang Gazebo', 50000, '4-8 Orang', 'Ayam Bakar, Ikan Bakar, Kepiting Asam Manis', 'Jus Jambu, Jus Apel, Es/Hangat teh, Es/hangat Jeruk', '30 Oktober 2023', 1, 'gazebo.jpg', '2023-11-16 07:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `license_date` varchar(255) DEFAULT NULL,
  `active_status` varchar(255) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '0',
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `online` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `create_date`, `license_date`, `active_status`, `status`, `role`, `online`) VALUES
(37, 'Egzon', 'Muratii', 'egzon.murati@live.com', '$2y$10$h6sdxOGG/.WnXJBkXSfVH.q.jxO3r8CydQKm4CGMtOcEE5TBgWyBK', '2020-12-08 14:47:00', '2021-12-08', 'verified', 0, 'user', 0),
(38, 'Egzon', 'Muratii', 'egzoni@live.com', '$2y$10$4.5GwhdC8r0Wj.QEgAwZnuCFlZ6w.g19Kj93yip2tBBWAT.nafcjW', '2020-12-13 19:01:33', '2021-12-13', 'verified', 0, 'user', 0),
(39, 'Egzon', 'Muratii', 'egzoni2@live.com', '$2y$10$0YGV1xI7fG.Xwj/3VBr7oe19h.n1XZW91RArKfJPIOEbPqBiTqHkK', '2020-12-23 14:56:34', '2021-12-23', 'verified', 0, 'user', 1),
(40, 'calvien', 'danny', 'calviendannynariyana@gmail.com', '$2y$10$FxjApdQ4ws1DoJ/5EQk1q.BKZMqaVxWu9zGu6G.qiiUAxLzpjg156', '2023-11-10 01:43:48', '2024-11-10', 'verified', 0, 'user', 1),
(42, 'admin', 'admin', 'admin@gmail.com', '$2y$10$3uxgUCB563eQTbB7TPpZJ.moyW3WaQjEjXppoaSlktYE2GFqnMsv6', '2023-11-13 02:48:07', '2024-11-13', 'verified', 0, 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
