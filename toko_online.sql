-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 09:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_price`, `product_image`, `product_description`) VALUES
(1, 'Tas Kekinian', 410000, 'product-1.jpg', 'Tas yang paling dicari wanita saat ini'),
(2, 'Kemeja Batik', 360000, 'product-2.jpg', 'kemeja ganteng buat para cowok upgrade ketampanan'),
(4, 'Rok Casual', 290000, 'product-4.jpg', 'Rok kibas kibas cakep buat keseharian'),
(5, 'Dress Cantik', 540000, 'product-5.jpg', 'Buat anda yang memperhatikan kecantikan berpakaian'),
(6, 'Tas Modern', 680000, 'product-6.jpg', 'Tas terkini segala kebutuhan semua bidang'),
(7, 'Kalung Mood', 220000, 'product-7.jpg', 'Tingkatkan mood anda hari ini dengan kalung mood'),
(8, 'Full Fashion', 830000, 'product-8.jpg', 'Upgrade ganteng anda dengan style baju celana ini'),
(11, 'Baju Casual', 240000, 'product-3.jpg', 'Baju casual yang bisa dipakai kemana saja ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
