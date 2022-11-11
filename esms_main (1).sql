-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 05:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esms_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('rahil', 'r@1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `password`, `number`, `email`) VALUES
(2, 'rahil2', 'sk r', 'r@22', 0, 'r@gamil.com'),
(3, 'tat', 'sk res', 'e@12', 12345, 'rahil@gmail.com'),
(4, 'tat', 'gbfdg', 'a@12', 45698, 'rahilshaikhada424@gmail.com'),
(5, 'tayyaba', 'sk resi', 't@1', 1254545, 'tay@gmail.com'),
(6, 'rahil', 'sk  resss', 'r#1', 225858, 'rah@gmail.com'),
(7, 'kimmi', 'sk residency', '123', 23232, 'kimmi@gmail.com'),
(8, 'Rahil shaikh', 'sds', '123456', 121, 'rahilsh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ph_no` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `ph_no`, `email`, `address`) VALUES
(2, 'tayyaba2', 456789, ' rahil@gmail.com', 'sk res');

-- --------------------------------------------------------

--
-- Table structure for table `home_th`
--

CREATE TABLE `home_th` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(320) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_th`
--

INSERT INTO `home_th` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'f&d', 'https://images.philips.com/is/image/PhilipsConsumer/HTS3578W_98-IMS-en_IN?$jpglarge$&wid=1250', 'home theater', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `image`, `description`, `price`) VALUES
(1, 'https://www.digitaltrends.com/wp-content/uploads/2021/08/dell-xps-15-oled-2021-laptop.jpg?fit=720%2C720&p=1', 'laptop', 10000000),
(2, 'https://www.digitaltrends.com/wp-content/uploads/2021/08/dell-xps-15-oled-2021-laptop.jpg?fit=720%2C720&p=1', 'laptop22', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `image`, `description`, `price`) VALUES
(1, 'https://www.91-cdn.com/hub/wp-content/uploads/2021/11/samsung_galaxy_a33_10.jpg', 'samsung', 14000),
(2, 'https://www.reliancedigital.in/medias/Motorola-E32-Mobile-Phone-492849904-i-1-1200Wx1200H-300Wx300H?context=bWFzdGVyfGltYWdlc3wyNDU4OHxpbWFnZS9qcGVnfGltYWdlcy9oODAvaDI1Lzk4MzQxMDkyMDY1NTguanBnfGU1NGNkMTA3ODhiYTJhZGEyNDFhMGEzZDZhNjg5NzhmZWYzM2JkNDY4NjY3MzhiZTA3MzRmM2U4OGUzMmU4Y2Q', 'new', 122);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `image`, `description`, `price`) VALUES
(1, 'https://www.ikea.com/in/en/images/products/brimnes-tv-bench-black__0851278_pe725293_s5.jpg', 'tv', 23000);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart_details`
--

CREATE TABLE `user_cart_details` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart_details`
--

INSERT INTO `user_cart_details` (`id`, `name`, `number`, `address`, `description`, `price`, `Quantity`) VALUES
(5, 'tayyaba', 1254545, 'sk resi', 'samsung', 14000, 1),
(6, 'rahil', 225858, 'sk  resss', 'samsung', 14000, 1),
(3, 'tat', 12345, 'sk res', 'samsung', 14000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_th`
--
ALTER TABLE `home_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_th`
--
ALTER TABLE `home_th`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
