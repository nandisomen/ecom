-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 05:37 PM
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
-- Database: `e_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(97, 'Somen Nandi', 'somennandi99@gmail.com', '1234', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(100) NOT NULL,
  `box_icon` varchar(100) NOT NULL,
  `box_title` varchar(255) NOT NULL,
  `box_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_icon`, `box_title`, `box_desc`) VALUES
(4, 'fa fa-trash', 'BEST IN MARKET', 'offer'),
(6, 'fa fa-shipping-fast fa-5', 'FAST SERVICE', 'raw'),
(7, 'fa fa-user', 'EDIT YOURSELF', 'edit'),
(8, 'fa fa-trash', 'DELETE EVERYTHING', 'delete'),
(9, '555', '555', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(14, 'ART PAINTING', 'Roots Bright, Surreal Art, Surrealism');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `activation_code` varchar(32) DEFAULT NULL,
  `status` enum('inactive','active') DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `otp`, `activation_code`, `status`) VALUES
(4444, 'Somen Nandi', 'somennandi99@gmail.com', '123456', '', '', '', '', '', '', NULL, NULL, 'inactive'),
(4446, 'Ritik Shit', 'rittik@gmail.com', '1234', 'Pakistan', 'Panjab Provence', '+926358469745', 'Near Terriost Camp', '54vy3rQG5YgbQlEmwgNz_02_dcbc3c90.jpg', '::1', NULL, NULL, 'inactive'),
(4447, 'SOMEN NANDI', 'somennandi04.sn@gmail.com', '1111', 'India', 'Purulia', '09735840376', 'Near F.C.I. Main Gate', '1693170483237-01.jpeg', '::1', '894846', '8ad1c97a62d32b27b568fe9e18c271d6', 'active'),
(4448, 'Dolon Mondal', 'dolanmondal134@gamil.com', '1234', 'india', 'bankura', '123456789', 'near clg', '2354664 (1).jpg', '::1', '819949', 'f015b3895eb46cbb0d18a6c23a0b8ff8', 'inactive'),
(4449, 'Dolon Mondal', 'dolanmondal134@gmail.com', '1234', 'india', 'bankura', '123456789', 'near clg', '2354664 (1).jpg', '::1', '133155', 'eb6d237ddb79f3e66ecb14b70086e4db', 'active'),
(4450, 'Somen Nandi', 'evilboysn04@gmail.com', '1234', 'india', 'bankura', '123456', 'near clg', 'FireShot Capture 005 - User Login - localhost.png', '::1', '353307', 'f8d378371af48cfb3e4d008084af89d3', 'inactive'),
(4451, 'Subrata Mahata', 'mahatasubrata575@gamil.com', '1234', 'india', 'purulia', '123456', 'bjcscgsu', 'india-circus-by-krsnaa-mehta-tusker-prime-18-x-24-floating-framed-canvas-wall-art-60121013sd00700-7.jpg', '::1', '695460', '78dae7bb1cd838eb9d0a10314472b35e', 'active'),
(4452, 'Somen Nandi', 'Somen Nandi', '1234', 'india', 'bankura', '123456', 'near clg', 'india-circus-by-krsnaa-mehta-tusker-prime-18-x-24-floating-framed-canvas-wall-art-60121013sd00700-7.jpg', '::1', '472823', '7279540ff47cd26050626986a5595fc7', 'active'),
(4453, 'Ritwik Shit', 'ritwikshit15@gmail.com', '1234', 'India', 'Bankura', '78', 'bankura', 'Black-Mount-Henri-Rousseau-Paint (1).jpg', '127.0.0.1', '863512', '7c95c0972fa48f4e2e745f1ae6c4774f', 'active'),
(4454, 'MILTON', 'milton.it@buie.ac.in', '1234', 'india', 'dum dum', '9804187493', 'kolkata', 'Natural-Wood-Henri-Rousseau-Pain (1).jpg', '127.0.0.1', '988627', 'd7d95e94dbc452bcd8e249beb16c443c', 'active'),
(4455, 'SOMEN NANDI', 'somennandi04.sn@gmail.com', '1234', 'India', 'Purulia', '09735840376', 'Near F.C.I. Main Gate', 'Black-Mount-Henri-Rousseau-Paint (1).jpg', '::1', '660591', 'f32dc1c96b0dc62ddfe6bbce826e2f74', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(44, 4452, 41, 15000, 1857102965, 1, '', '2024-06-04 19:36:42', 'pending'),
(45, 4454, 55, 2730, 1556171552, 2, '', '2024-06-05 07:37:08', 'pending'),
(46, 4445, 53, 4566, 1486989377, 1, '', '2024-06-05 09:22:27', 'pending'),
(47, 4450, 54, 6354, 1478297527, 1, '', '2024-06-05 10:12:18', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `artist_name` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `artist_name`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_price`, `product_desc`, `product_keyword`) VALUES
(48, 50, 8, '2024-06-05 06:16:41', 'ddd', 'ddd', 'Black-with-Mount-Court-Lady-Pour (1).jpg', 'Black-with-Mount-Court-Lady-Pour (1).jpg', 'Black-with-Mount-Court-Lady-Pour (1).jpg', 'Black-with-Mount-Court-Lady-Pour (1).jpg', 'A-Black-Frame-Court-Lady-Pouring.jpg', 0, 'ddd', 'dd'),
(49, 38, 8, '2024-06-05 06:22:22', 'Court Lady Pouring Wine, Indian Miniature Paintings', 'IFA GALLERIE', 'A-Black-Frame-Court-Lady-Pouring.jpg', 'A-Poster-Mock-up-Court-Lady-Pour.jpg', 'Black-with-Mount-Court-Lady-Pour.jpg', 'Natural-Wood-Court-Lady-Pouring.jpg', 'White-with-Mount-Court-Lady-Pour.jpg', 675, 'Court Lady Pouring Wine, Indian Miniature Paintings from the Indian Miniature Paintings Collection is produced on Premium Museum Grade Canvas and Hahnemuhle Fin', 'Court Lady Pouring Wine, Indian Miniature Paintings from the Indian Miniature Paintings Collection is produced on Premium Museum Grade Canvas and Hahnemuhle Fin'),
(50, 65, 14, '2024-06-05 06:32:34', 'Roots Bright, Surreal Art, Surrealism', 'IFA GALLERIE', 'Image-1-Roots-Bright_540x.jpg', 'Image-2-Roots-Bright_540x.jpg', 'Image-3-Roots-Bright_540x.jpg', 'Image-4-Roots-Bright_540x.jpg', 'Image-6-Roots-Bright_180x.jpg', 2100, 'Roots Bright, Surreal Art, Surrealism from the Surrealist Paintings Print Collection by Frank Moth ', 'Roots Bright, Surreal Art, Surrealism from the Surrealist Paintings Print Collection by Frank Moth is produced on Premium Museum Grade Canvas and Hahnemuhle Fine Art Media. Thi'),
(51, 65, 14, '2024-06-05 06:34:22', 'Her Asymmetries, Surreal Art, Surrealism', 'Frank Moth', 'Image-1-Her-Asymmetries_540x.jpg', 'Image-2-Her-Asymmetries_540x.jpg', 'Image-2-Her-Asymmetries_540x.png', 'Image-5-Her-Asymmetries_540x.jpg', 'Image-5-Her-Asymmetries_540x.jpg', 2536, 'Frank Moth', 'Frank Moth'),
(52, 65, 14, '2024-06-05 06:35:32', 'Plate set', 'Jhlik ', 'p1 (3).jpeg', 'p1 (3).jpeg', 'p1 (5).jpeg', 'p1 (5).jpeg', 'p1 (5).jpeg', 455, 'cc', 'ccc'),
(53, 65, 14, '2024-06-05 06:36:18', 'Radha Kishna', 'Jhlik', 'product6.jpeg', 'p1 (1).jpeg', 'product6.jpeg', 'product6.jpeg', 'product6.jpeg', 4566, 'ddd', 'dd'),
(54, 65, 14, '2024-06-05 06:39:30', 'Pastoral landscape with stream, Henri Rousseau Painting', 'Master Art Hub', 'A-Black-Frame-Henri-Rousseau-Pai.jpg', 'Poster-Mock-up-Henri-Rousseau-Pa.jpg', 'Natural-Wood-Henri-Rousseau-Pain.jpg', 'A-White-Mount-Henri-Rousseau-Pai.jpg', 'Black-Mount-Henri-Rousseau-Paint.jpg', 6354, 'jkafsbjkae', 'kabjajgb'),
(55, 65, 14, '2024-06-05 06:41:25', 'Vue Des Environs De Paris, Henri Rousseau Painting', 'Master Art Hub', 'A-Black-Frame-Henri-Rousseau-Pai (1).jpg', 'Poster-Mock-up-Henri-Rousseau-Pa (1).jpg', 'Natural-Wood-Henri-Rousseau-Pain (1).jpg', 'A-White-Mount-Henri-Rousseau-Pai (1).jpg', 'Black-Mount-Henri-Rousseau-Paint (1).jpg', 1365, 'affadsafes', 'faaafs');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL,
  `p_cat_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`, `p_cat_img`) VALUES
(65, 'ART WORK', 'Roots Bright, Surreal Art, Surrealism', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `slider_name`, `slider_image`, `slider_url`) VALUES
(18, 'sale', 'banner2.jpg', 'http://localhost/ecom/details.php?pro_id=10'),
(23, '', 'banner5.png', ''),
(24, '', 'banner1.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4456;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
