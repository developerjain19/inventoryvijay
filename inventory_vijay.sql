-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_vijay`
--

-- --------------------------------------------------------

--
-- Table structure for table `webangel_admin`
--

CREATE TABLE `webangel_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_designation` varchar(100) NOT NULL,
  `admin_pic` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `admin_contact` varchar(12) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_type` enum('0','1') NOT NULL COMMENT '0 = employer , 1 = superadmin',
  `admin_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `admin-status` enum('0','1','2') NOT NULL COMMENT '0 = new , 1 = enabled , 2 = disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_admin`
--

INSERT INTO `webangel_admin` (`admin_id`, `admin_name`, `admin_username`, `admin_designation`, `admin_pic`, `admin_contact`, `admin_email`, `admin_address`, `admin_password`, `admin_type`, `admin_created_date`, `admin-status`) VALUES
(1, 'Super-admin', '', '', 'default.jpg', '9516354018', 'admin@gmail.com', 'bhopal', '1234', '1', '2021-08-13 22:55:23', '1'),
(8, 'harsha', 'harsha', '', 'default.jpg', '9516354018', 'harshamaravi@gmail.com', 'bhopal', '1234', '0', '2022-01-24 12:56:04', '1'),
(9, 'Chalo chale  gym', 'chalo', '', 'default.jpg', '9876543210', 'chalo@gym.com', 'bhopal', '12345', '0', '2022-02-02 16:10:32', '0');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_billing`
--

CREATE TABLE `webangel_billing` (
  `jid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp(),
  `veh_no` int(11) NOT NULL,
  `driver_nm` varchar(100) NOT NULL,
  `driver_no` varchar(50) NOT NULL,
  `service_type` int(11) NOT NULL,
  `service_name` int(11) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_billing`
--

INSERT INTO `webangel_billing` (`jid`, `create_date`, `date`, `veh_no`, `driver_nm`, `driver_no`, `service_type`, `service_name`, `total_amount`, `summary`) VALUES
(1, '2022-04-08 09:33:50', '2022-04-08', 1, '0', '2147483647', 2, 3, '0', 'asd'),
(2, '2022-04-08 09:34:48', '2022-04-08', 1, 'harsha m', '9516354018', 2, 3, '0', 'asd'),
(3, '2022-04-08 09:35:53', '2022-04-08', 1, 'harsha m', '9516354018', 2, 3, '0', 'asd'),
(4, '2022-04-08 09:37:05', '2022-04-08', 1, 'harsha m', '9516354018', 2, 3, '0', 'asd'),
(5, '2022-04-11 14:15:35', '2022-04-11', 1, 'harsha m', '9516354018', 2, 3, '0', 'lkkkklk'),
(6, '2022-05-22 15:36:02', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(7, '2022-05-22 15:39:16', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(8, '2022-05-22 15:39:51', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(9, '2022-05-22 15:39:54', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(10, '2022-05-22 15:40:30', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(11, '2022-05-22 15:41:15', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(12, '2022-05-22 15:41:30', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(13, '2022-05-22 15:41:33', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(14, '2022-05-22 15:41:37', '2022-05-22', 0, 'Sunil Vish', '9516354018', 0, 0, '0', 'rw'),
(15, '2022-05-22 15:42:00', '2022-05-22', 0, 'harsha m', '9516354018', 0, 0, '0', 'asd'),
(16, '2022-05-22 15:45:09', '2022-05-22', 0, 'harsha m', '', 0, 0, '0', 'asd'),
(17, '2022-05-22 15:46:22', '2022-05-22', 0, 'harsha m', '', 0, 0, '0', 'asd'),
(18, '2022-05-22 15:54:47', '2022-05-22', 0, 'Sunil Vish', '', 0, 0, '0', 'sd'),
(19, '2022-05-22 15:57:11', '2022-05-22', 0, 'Sunil Vish', '', 0, 0, '0', 'asds'),
(20, '2022-05-22 15:57:31', '2022-05-22', 0, 'Sunil Vish', '', 0, 0, '0', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_billing_product`
--

CREATE TABLE `webangel_billing_product` (
  `jpid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `product_nm` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_billing_product`
--

INSERT INTO `webangel_billing_product` (`jpid`, `jid`, `product`, `price`, `total`, `product_nm`, `quantity`) VALUES
(1, 1, 9, 40, 600, 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', 15),
(2, 1, 10, 15, 75, 'Golden Small Budget Lock Automotive Door Lock', 5),
(3, 1, 0, 0, 0, '', 0),
(4, 2, 9, 40, 600, 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', 15),
(5, 2, 10, 15, 75, 'Golden Small Budget Lock Automotive Door Lock', 5),
(6, 2, 0, 0, 0, '', 0),
(7, 3, 9, 45, 675, 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', 15),
(8, 3, 10, 15, 75, 'Golden Small Budget Lock Automotive Door Lock', 5),
(9, 4, 9, 45, 675, 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', 15),
(10, 4, 10, 15, 75, 'Golden Small Budget Lock Automotive Door Lock', 5),
(11, 5, 9, 200000, 2400000, 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', 12),
(12, 5, 10, 15, 150, 'Golden Small Budget Lock Automotive Door Lock', 10),
(13, 18, 9, 20000, 20000, '', 1),
(14, 19, 9, 500, 500, '', 1),
(15, 19, 10, 500, 3000, '', 6),
(16, 20, 9, 200000, 200000, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `webangel_category`
--

CREATE TABLE `webangel_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_category`
--

INSERT INTO `webangel_category` (`cat_id`, `cat_name`, `create_date`) VALUES
(5, 'Truch body part ', '2022-02-02 16:11:54'),
(6, 'Truck Nut and Bolt', '2022-02-02 16:12:03'),
(7, 'Spring Pin', '2022-02-02 16:12:10'),
(8, 'Truck Leaf Spring', '2022-02-02 16:12:18'),
(9, 'King Pin Set', '2022-02-02 16:12:25'),
(10, 'Truck Accessories', '2022-02-02 16:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_product`
--

CREATE TABLE `webangel_product` (
  `product_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `product_hsncode` varchar(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_mrp` varchar(100) NOT NULL,
  `product_item_code` varchar(100) NOT NULL,
  `quantity_type` varchar(100) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_barcode_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_product`
--

INSERT INTO `webangel_product` (`product_id`, `category`, `product_hsncode`, `product_name`, `product_mrp`, `product_item_code`, `quantity_type`, `product_quantity`, `product_barcode_no`) VALUES
(9, 5, '2356', 'G/B Bs3/Bs4 Eicher Pro 3015 Truck Cabin', '200000', '2356_tr', '2', 15, ''),
(10, 6, '23563', 'Golden Small Budget Lock Automotive Door Lock', '15', '23563', '5', 5, ''),
(11, 6, '345345', 'SAINI Commercial Truck Wheel Rim', '4500', '4500', '2', 5, ''),
(12, 0, '', 'sd', '', '', '', 0, ''),
(13, 0, '', 'dasd', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_product_option`
--

CREATE TABLE `webangel_product_option` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_product_option`
--

INSERT INTO `webangel_product_option` (`id`, `name`, `create_date`) VALUES
(3, 'TYRE 3 s', '2022-02-02 17:15:01'),
(4, 'DOOR', '2022-02-02 17:15:18'),
(5, 'SOME GROUP', '2022-02-02 17:15:40'),
(6, 'test', '2022-02-08 10:37:49'),
(7, 'tyre 5', '2022-02-10 11:30:30'),
(8, 'test1', '2022-02-14 14:28:42'),
(9, 'alfa', '2022-05-15 16:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_quantity_type`
--

CREATE TABLE `webangel_quantity_type` (
  `qty_id` int(11) NOT NULL,
  `qty_name` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_quantity_type`
--

INSERT INTO `webangel_quantity_type` (`qty_id`, `qty_name`, `create_date`) VALUES
(1, 'Liters', '2022-01-24 17:48:22'),
(2, 'KG', '2022-01-24 17:48:33'),
(4, 'MM', '2022-01-24 18:19:03'),
(5, 'CM', '2022-01-24 18:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_service_list`
--

CREATE TABLE `webangel_service_list` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_service_list`
--

INSERT INTO `webangel_service_list` (`id`, `code`, `name`, `create_date`) VALUES
(3, '  8708', 'Part and accessories of the motor vehicles of headings 8701 to 8705', '2022-02-02 16:15:38'),
(4, ' 8431', 'Parts suitable for use solely or principally with the machinery of headings 8425 to 8430', '2022-02-02 16:15:51'),
(5, '  8483', 'Transmission shafts (including cam shafts and crank shafts) and cranks; bearings housings and plain shaft bearings; gears and gearing; ball or roller screws; gear boxes and other speed changers, including torque converters; flywheels and pulleys, including pulley blocks; clutches and shaft couplings (including universal joints)', '2022-02-02 16:16:09'),
(6, '  84834000', 'Gears and gearing other than toothed wheels chain sprockets and other transmission elements presented separately; ball or roller screws; gear boxes and other speed changers including torque converters', '2022-02-02 16:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_service_type`
--

CREATE TABLE `webangel_service_type` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_service_type`
--

INSERT INTO `webangel_service_type` (`id`, `name`, `create_date`) VALUES
(2, 'Accidental', '2022-02-02 16:14:29'),
(3, 'Regular', '2022-02-02 16:14:35'),
(4, 'Other', '2022-02-02 16:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_stock_log`
--

CREATE TABLE `webangel_stock_log` (
  `id` int(11) NOT NULL,
  `vpo_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `per_price` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_stock_log`
--

INSERT INTO `webangel_stock_log` (`id`, `vpo_id`, `vendor_id`, `product_id`, `product_size_id`, `quantity`, `create_date`, `per_price`, `total_price`) VALUES
(1, 78, 1, 9, 5, 10, '0000-00-00 00:00:00', 67, 670),
(2, 80, 1, 10, 3, 20, '0000-00-00 00:00:00', 200, 4000),
(3, 85, 1, 10, 5, 30, '0000-00-00 00:00:00', 34, 1020),
(4, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0),
(5, 78, 1, 9, 5, 10, '2022-05-17 15:43:40', 67, 670),
(6, 80, 1, 10, 3, 20, '2022-05-17 15:43:40', 200, 4000),
(7, 85, 1, 10, 5, 30, '2022-05-17 15:43:40', 34, 1020),
(8, 78, 1, 9, 5, 6, '2022-05-17 15:45:13', 67, 402),
(9, 80, 1, 10, 3, 6, '2022-05-17 15:45:14', 200, 1200),
(10, 85, 1, 10, 5, 6, '2022-05-17 15:45:14', 34, 204);

-- --------------------------------------------------------

--
-- Table structure for table `webangel_vehicle`
--

CREATE TABLE `webangel_vehicle` (
  `vid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `veh_no` varchar(20) NOT NULL,
  `veh_driver_nm` varchar(100) NOT NULL,
  `veh_driver_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_vehicle`
--

INSERT INTO `webangel_vehicle` (`vid`, `create_date`, `veh_no`, `veh_driver_nm`, `veh_driver_no`) VALUES
(1, '2022-04-03 00:02:19', 'mp04st4957', 'harsha m', '9516354018'),
(3, '2022-04-03 00:02:19', 'mp04st5636', 'Sunil Vish', '9039005753');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_vendor`
--

CREATE TABLE `webangel_vendor` (
  `id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_vendor`
--

INSERT INTO `webangel_vendor` (`id`, `create_date`, `name`) VALUES
(1, '2022-05-15 16:00:10', 'doll');

-- --------------------------------------------------------

--
-- Table structure for table `webangel_vendor_product_option`
--

CREATE TABLE `webangel_vendor_product_option` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `v_price` double NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `is_delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webangel_vendor_product_option`
--

INSERT INTO `webangel_vendor_product_option` (`id`, `v_id`, `product_id`, `product_option_id`, `v_price`, `quantity`, `is_delete`) VALUES
(78, 1, 9, 5, 67, 16, '0'),
(80, 1, 10, 3, 200, 0, '0'),
(81, 1, 11, 3, 600, 0, '1'),
(84, 1, 0, 0, 0, 0, '1'),
(85, 1, 10, 5, 34, 36, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webangel_admin`
--
ALTER TABLE `webangel_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `webangel_billing`
--
ALTER TABLE `webangel_billing`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `webangel_billing_product`
--
ALTER TABLE `webangel_billing_product`
  ADD PRIMARY KEY (`jpid`);

--
-- Indexes for table `webangel_category`
--
ALTER TABLE `webangel_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `webangel_product`
--
ALTER TABLE `webangel_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `webangel_product_option`
--
ALTER TABLE `webangel_product_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webangel_quantity_type`
--
ALTER TABLE `webangel_quantity_type`
  ADD PRIMARY KEY (`qty_id`);

--
-- Indexes for table `webangel_service_list`
--
ALTER TABLE `webangel_service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webangel_service_type`
--
ALTER TABLE `webangel_service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webangel_stock_log`
--
ALTER TABLE `webangel_stock_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webangel_vehicle`
--
ALTER TABLE `webangel_vehicle`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `webangel_vendor`
--
ALTER TABLE `webangel_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webangel_vendor_product_option`
--
ALTER TABLE `webangel_vendor_product_option`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webangel_admin`
--
ALTER TABLE `webangel_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `webangel_billing`
--
ALTER TABLE `webangel_billing`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `webangel_billing_product`
--
ALTER TABLE `webangel_billing_product`
  MODIFY `jpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `webangel_category`
--
ALTER TABLE `webangel_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webangel_product`
--
ALTER TABLE `webangel_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `webangel_product_option`
--
ALTER TABLE `webangel_product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `webangel_quantity_type`
--
ALTER TABLE `webangel_quantity_type`
  MODIFY `qty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `webangel_service_list`
--
ALTER TABLE `webangel_service_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `webangel_service_type`
--
ALTER TABLE `webangel_service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webangel_stock_log`
--
ALTER TABLE `webangel_stock_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webangel_vehicle`
--
ALTER TABLE `webangel_vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webangel_vendor`
--
ALTER TABLE `webangel_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webangel_vendor_product_option`
--
ALTER TABLE `webangel_vendor_product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
