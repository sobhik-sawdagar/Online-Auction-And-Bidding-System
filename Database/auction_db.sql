-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 12:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `Admin_ID` int(100) NOT NULL,
  `Admin_Name` text NOT NULL,
  `Admin_Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`Admin_ID`, `Admin_Name`, `Admin_Pass`) VALUES
(1, 'sobhik', 'sobhik');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid_id` int(200) NOT NULL,
  `bid_amount` text NOT NULL,
  `p_id` int(200) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `cust_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`bid_id`, `bid_amount`, `p_id`, `cust_id`, `cust_email`) VALUES
(26, '91000', 99, 14, 'sobhiksawdagar02@gmail.com'),
(28, '79000', 100, 12, 'mp@gmail.com'),
(29, '100000', 99, 12, 'mp@gmail.com'),
(30, '76000', 100, 14, 'sobhiksawdagar02@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Electronics'),
(2, 'Smartphones'),
(3, 'Desktops'),
(4, 'Laptops'),
(5, 'Tablets'),
(8, 'Graphic Cards');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(100) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_email` text NOT NULL,
  `cust_phone` text NOT NULL,
  `cust_pass` text NOT NULL,
  `flag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_pass`, `flag`) VALUES
(12, 'Manmohan Pandit', 'mp@gmail.com', '9999999999', 'man', 'Enable'),
(13, 'demo', 'demo@gmail.com', '1234567891', 'demo', 'Enable'),
(14, 'Sobhik Sawdagar', 'sobhiksawdagar02@gmail.com', '7002340812', '123', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_name` text NOT NULL,
  `product_cat` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `end_date` text NOT NULL,
  `auction_date` text NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cat`, `product_price`, `product_desc`, `end_date`, `auction_date`, `product_image`) VALUES
(1, 'SAMSUNG LED TV 32INCH', 'Electronics', 15000, 'This is a very good LED TV.', '03-12-2021', '2021-01-20', 'tv.jpg'),
(3, 'DELL DESKTOP COMPUTER', 'Desktops', 30000, 'This is a very good budget desktop computer by Dell. ', '01-14-2021', '2021-01-20', 'desktop.jpg'),
(4, 'HP Laptop', 'Laptops', 45000, 'Very Fast and powerful Laptop', '02-01-2021', '2021-01-20', 'laptop.jpg'),
(5, 'APPLE IPAD', 'Tablets', 28000, 'This is a very good powerful budget tablet by Apple.', '01-14-2021', '2021-01-20', 'ipad.png'),
(93, 'Washing Machine', 'Electronics', 25000, 'This a very good and powerful washing machine.', '02-05-2021', '2021-01-20', '60185a836e5e7.jpg'),
(94, 'HP Desktop PC', 'Desktops', 35000, 'This a very good and powerful desktop pc by Hp.', '02-05-2021', '2021-01-20', '60185adf949af.jpg'),
(95, 'SAMSUNG TABLET', 'Tablets', 45000, 'This a very good and powerful tablet device by Samsung.', '02-05-2021', '2021-01-20', '60185b24e00ed.jpg'),
(96, 'NVIDIA RTX 3080', 'Graphic Cards', 60000, 'This a very good and powerful Graphic Card by Nvidia.', '02-05-2021', '2021-01-20', '60185b70981db.jpg'),
(97, 'AMD Radeon Graphic Card', 'Graphic Cards', 55000, 'This a very good and powerful Graphic Card by AMD.', '02-05-2021', '2021-01-20', '60185ba87f15b.jpg'),
(98, 'Acer Laptop', 'Laptops', 50000, 'This a very good and powerful laptop by Acer.', '02-05-2021', '2021-01-20', '60185be6d3e5a.jpg'),
(99, 'IPhone 12 Pro Max', 'Smartphones', 90000, 'This a very good and powerful smartphone device by Apple', '02-10-2021', '2021-01-20', '60185c433cc82.jpg'),
(100, 'Google Pixel 5', 'Smartphones', 75000, 'This a very good and powerful smartphone device by Google', '02-10-2021', '2021-01-20', '60185c65c5082.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(100) NOT NULL,
  `pname` text NOT NULL,
  `pcategory` text NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pdesc` text NOT NULL,
  `penddate` text NOT NULL,
  `pimage` text NOT NULL,
  `cust_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `Admin_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `bid_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
