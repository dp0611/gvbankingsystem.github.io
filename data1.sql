-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 08:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `current_balance` int(11) NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `current_balance`, `customer_image`) VALUES
(1, 'Akash sharma', 'akashsharma@gmail.com', 7000, 'images.png'),
(2, 'Aman Dubey', 'amandubey@gmail.com', 2500, 'images.png'),
(3, 'Anmol kumar', 'anmolkumar@gmail.com', 4500, 'images.png'),
(4, 'Ananya Pandey', 'ananyapandey@gmail.com', 1200, 'images.png'),
(5, 'Anushka Shetty', 'anushkashetty@gmail.com', 2600, 'images.png'),
(6, 'Disha Sharma', 'dishasharma@gmail.com', 5200, 'images.png'),
(7, 'Ishita Verma', 'ishitaverma@gmail.com', 2500, 'images.png'),
(8, 'Sagar Tyagi', 'sagartyagi@gmail.com', 8200, 'images.png'),
(9, 'Mohit Verma', 'mohitvermas@gmail.com', 3600, 'images.png'),
(10, 'Deepak Chaubey', 'deepakchaubey@gmail.com', 1500, 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_date` text NOT NULL,
  `from_acc` int(11) NOT NULL,
  `from_acc_name` text NOT NULL,
  `to_acc` int(11) NOT NULL,
  `transfer_amt` int(11) NOT NULL,
  `transfer_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
