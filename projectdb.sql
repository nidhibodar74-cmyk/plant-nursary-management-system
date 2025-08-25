-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2025 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `wateringneed` varchar(200) NOT NULL,
  `sunlight` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `productname`, `category`, `price`, `quantity`, `wateringneed`, `sunlight`, `status`, `image`) VALUES
(1, 'rose', 'flower', '200', '50', 'daily', 'partial sun', 'Available', '1748362472_354b70a4662b48e207fe.jpg'),
(3, 'lotus', 'flower', '250', '7', 'weekly', 'full sun', 'out of stock', '1748362491_a3a52347459cd63b69a4.jpg'),
(4, 'sunflower', 'flower', '300', '25', 'daily', 'full sun', 'out of stock', '1748362506_217709b7d2e169b05b18.jpg'),
(5, 'tulasi', 'medicinal plant', '350', '30', 'daily', 'partial sun', 'Available', '1748362523_c9a34add52578e2c9a05.jpg'),
(6, 'alovera', 'medicinal plant', '250', '50', 'daily', 'partial sun', 'Available', '1748362560_c6604c6e7908cdbd25f4.jpg'),
(7, 'Tulip', 'flower', '300', '28', 'weekly', 'partial sun', 'out of stock', '1748416231_1237e4cd1337bca3af88.jpg'),
(9, 'Cactus', 'Decorative plant', '250', '10', 'daily', 'partial sun', 'Dormant', '1748496959_4eb0674f602822702fc7.jpg'),
(10, 'Money Plant', 'Indoor plat', '100', '30', 'weekly', 'partial sun', 'Available', '1748519464_2d8db2cf79fc23927f4f.jpg'),
(11, 'snake plant', 'Indoor plat', '100', '9', 'weekly', 'partial sun', 'Dormant', '1748519511_8514a6faf8e06da8d222.jpg'),
(12, 'zz plant', 'Indoor plat', '250', '12', 'weekly', 'partial sun', 'Dormant', '1748519670_29d21e13cef41bfa9983.png'),
(13, 'Meri gold', 'Outdor plant', '300', '10', 'daily', 'full sun', 'Available', '1748519893_e095093009094ed7dc6c.jpg'),
(14, 'Jasmine', 'outdor plant', '100', '23', 'daily', 'partial sun', 'Available', '1748519952_fb92bcb84a9acf0e36a7.jpg'),
(15, 'Neem', 'medicinal plant', '140', '25', 'daily', 'full sun', 'Available', '1748520203_5746f12bace9d2f98bf2.jpg'),
(16, 'Ashvgandha', 'medicinal plant', '200', '12', 'weekly', 'partial sun', 'Available', '1748520245_a1bbd823b38638d055de.jpeg'),
(17, 'Mint', 'herb', '100', '10', 'daily', 'full sun', 'Available', '1748520425_beea34badfce257c99d3.jpg'),
(18, 'coriender', 'herb', '120', '23', 'daily', 'full sun', 'Available', '1748520493_5b8bc7dee20a2a520c38.jpeg'),
(19, 'tometo plant', 'vegetable plant', '100', '15', 'daily', 'partial sun', 'Available', '1748996168_c7860ca0a38056cc00f5.jpg'),
(21, 'chili plant', 'vegetable plant', '150', '20', 'daily', 'partial sun', 'Available', '1748996374_ce9f4319995589a9fede.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(4, 'parth bodar', 'parth@gmaiil.com', '$2y$10$ZdPUcqgkkIZLxfNNPGIbU.GKnbkwbvpYnApUr062J65HOOgw3VqyO'),
(5, 'navya patel', 'navya1@gmail.com', '$2y$10$R3V6/0SwejXNYfO1YhjYWuoi7YYymXspXS0ZEsuaq5ahkTLmxdOme'),
(6, 'nita bodar', 'nita@gmail.com', '$2y$10$EFdAiqA6QhzjoRCaxcsaxetBmxDW4o.fBYB0rmo5A4pMYTdk7dBGC'),
(7, 'dhalu ptel', 'dhalu@gmail.com', '$2y$10$Q7MFxENXAMQpWP3kbtONjextvb9iI3q6k.DM4KdtXEa3aC4X2mtQm'),
(8, 'shivay patel', 'shivay@gmail.com', '$2y$10$ypAUBz3p7XLdk9mNATcee.GkgO1ZWJbmn911Rwuft2d7YdY08ti/2'),
(9, 'krishna patel', 'k@gmail.com', '$2y$10$FW2/KbsaLrTzlITxLbNBSu8T907ZssZy2Ww39KLoUuSn7FN492lA.'),
(10, 'nidhi bodar', 'nidhi@gmail.com', '$2y$10$AIthbg2qbZ4Ujc563b3UiOYiTjWpFtt4aRLBf4mkAaKX0hSB/XG7m'),
(11, 'nidhi bodar', 'n@gmail.com', '$2y$10$rQJSBZcgxsvHhpMiM4mWiuld9L66G.vRai7FQSwQNuzHzRLQHUKFW'),
(12, 'nita bodar', 'nita2@gmail.com', '$2y$10$EzyFmCGoDqxEPqIO5Gf4iutaB.AM6emEVuKieEJpej2y/dGR12bj2'),
(13, 'nidhi bodar', 'n@gmail.com', '$2y$10$U1mNt2P2PBu.TyOBwYIyIOSmyqYAjSUIMeL8SVHrHW1Fu6YvwkZJm'),
(14, 'jayesh bodar', 'j@gmail.com', '$2y$10$wNe8.jePi5tbKtySLJcDxeBiZQRq.Q4kB.psM1h628pru4TxoMgZu'),
(15, 'nidhi bodar', 'nidhi15@gmail.com', '$2y$10$ZrtGZUe85eHJmzSCoFjAV.jbTUFy.91wwjsPPHgO.B7PGzn.kK1qK'),
(16, 'asd', 'as@gmail.com', '$2y$10$fixkN2Hj5kJcijuAsYHDs.NeoHS0GEZ9YPV2VmuGEYz7cODVd0sei'),
(17, 'krishna patel', 'krishna@gmail.com', '$2y$10$CHXyyW0Nwiz3k94yOPfADuHcLDPwTKvPdGQg32jlSM/enD9.C53Jq'),
(18, 'khushi patel', 'khushali@gmail.com', '$2y$10$Z1A3e4ouazftJJ1c1x5vt.cNCdZqfdwhTDH3k3NURp8egjgWhIsIu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
