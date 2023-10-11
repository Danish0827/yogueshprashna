-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2023 at 02:20 AM
-- Server version: 10.5.21-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagartec_prashna`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Vertical', 'image00001.jpg', NULL, NULL),
(2, 'Vertical', 'image00003.jpg', NULL, NULL),
(3, 'Vertical', 'image00004.jpg', NULL, NULL),
(4, 'Vertical', 'image00005.jpg', NULL, NULL),
(5, 'Vertical', 'image00006.jpg', NULL, NULL),
(6, 'Big', 'image00007.jpg', NULL, NULL),
(7, 'Big', 'image00008.jpg', NULL, NULL),
(8, 'Vertical', 'image00009.jpg', NULL, NULL),
(9, 'Vertical', 'image00010.jpg', NULL, NULL),
(10, 'Vertical', 'image00011.jpg', NULL, NULL),
(11, 'Vertical', 'image00012.jpg', NULL, NULL),
(12, 'Vertical', 'image00014.jpg', NULL, NULL),
(13, 'Vertical', 'image00015.jpg', NULL, NULL),
(14, 'Big', 'image00016.jpg', NULL, NULL),
(15, 'Square', 'image00017.jpg', NULL, NULL),
(16, 'Square', 'image00018.jpg', NULL, NULL),
(17, 'Vertical', 'image00019.jpg', NULL, NULL),
(18, 'Vertical', 'image00020.jpg', NULL, NULL),
(19, 'Vertical', 'image00021.jpg', NULL, NULL),
(20, 'Vertical', 'image00022.jpg', NULL, NULL),
(21, 'Square', 'image00023.jpg', NULL, NULL),
(22, 'Square', 'image00024.jpg', NULL, NULL),
(23, 'Vertical', 'image00025.jpg', NULL, NULL),
(24, 'Square', 'image00026.jpg', NULL, NULL),
(25, 'Vertical', 'image00002.jpg', NULL, NULL),
(26, 'Square', 'image00027.jpg', NULL, NULL),
(27, 'Vertical', 'image00035.jpg', NULL, NULL),
(28, 'Square', 'image00036.jpg', NULL, NULL),
(29, 'Vertical', 'image00029.jpg', NULL, NULL),
(30, 'Vertical', 'image00030.jpg', NULL, NULL),
(31, 'Vertical', 'image00031.jpg', NULL, NULL),
(32, 'Vertical', 'image00033.jpg', NULL, NULL),
(33, 'Vertical', 'image00034.jpg', NULL, NULL),
(36, 'Vertical', '1.jpg', NULL, NULL),
(37, 'Vertical', '2.jpg', NULL, NULL),
(38, 'Vertical', '6.jpg', NULL, NULL),
(39, 'Vertical', '7.jpg', NULL, NULL),
(40, 'Vertical', '9.jpg', NULL, NULL),
(41, 'Big', '4.jpg', NULL, NULL),
(42, 'Vertical', '8.jpg', NULL, NULL),
(43, 'Vertical', '3.jpg', NULL, NULL),
(47, 'Big', 'Capture dâ€™Ã©cran 2023-06-17 Ã  14.51.42.png', NULL, NULL),
(48, 'Big', 'Capture dâ€™Ã©cran 2023-06-17 Ã  14.53.26.png', NULL, NULL),
(49, 'Big', 'Capture dâ€™Ã©cran 2023-06-17 Ã  14.55.07.png', NULL, NULL),
(50, 'Big', 'Capture dâ€™Ã©cran 2023-06-17 Ã  17.59.59.png', NULL, NULL),
(51, 'Big', 'Capture dâ€™Ã©cran 2023-06-17 Ã  17.45.14.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(12, 'image00004.jpeg'),
(13, 'image00010.jpeg'),
(14, 'image00029.jpeg'),
(16, 'Capture dâ€™Ã©cran 2023-06-17 Ã  14.55.07.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `usertype` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `usertype`) VALUES
(1, 'Prashna', 'info@prashna.com', 'Prashna@yoguesh123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
