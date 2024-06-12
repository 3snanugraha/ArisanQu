-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2024 at 06:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_mrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2024-06-08 21:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `bom_id` int(11) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forecast`
--

CREATE TABLE `forecast` (
  `forecast_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `forecast_date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(100) DEFAULT NULL,
  `satuan_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mixing_material`
--

CREATE TABLE `mixing_material` (
  `mixing_id` int(11) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `satuan_id` int(11) NOT NULL,
  `satuan_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`bom_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `forecast`
--
ALTER TABLE `forecast`
  ADD PRIMARY KEY (`forecast_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`),
  ADD KEY `satuan_id` (`satuan_id`);

--
-- Indexes for table `mixing_material`
--
ALTER TABLE `mixing_material`
  ADD PRIMARY KEY (`mixing_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`satuan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `bom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forecast`
--
ALTER TABLE `forecast`
  MODIFY `forecast_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mixing_material`
--
ALTER TABLE `mixing_material`
  MODIFY `mixing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `satuan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bom`
--
ALTER TABLE `bom`
  ADD CONSTRAINT `bom_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`);

--
-- Constraints for table `forecast`
--
ALTER TABLE `forecast`
  ADD CONSTRAINT `forecast_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`satuan_id`) REFERENCES `satuan` (`satuan_id`);

--
-- Constraints for table `mixing_material`
--
ALTER TABLE `mixing_material`
  ADD CONSTRAINT `mixing_material_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
