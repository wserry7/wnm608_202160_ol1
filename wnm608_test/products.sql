-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2021 at 11:10 PM
-- Server version: 5.7.33-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dessert_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `menu_category` varchar(50) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `discount_percentage` float DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `menu_category`, `thumbnail`, `discount_percentage`, `date_created`) VALUES
(1, 'Special Mango Juice Sago & Pomelo w.Mango Ice Crea', 7.45, 199, 'Classic Fre Fruit Dessert', 'img-1.jpg', 5.9, '2021-07-21 23:04:21'),
(2, 'Snow White Mango Juice w.Sago & Pomelo', 6.45, 216, 'Classic Fre Fruit Dessert', '1.png', 5.5, '2021-07-21 23:04:21'),
(3, 'Mango Juice w.Glutinous Rice Ball', 6.95, 146, 'Classic Fre Fruit Dessert', '2.png', 2.5, '2021-07-21 23:04:21'),
(4, 'Mango Juice w.Watermelon & Rice Ball', 6.95, 132, 'Classic Fre Fruit Dessert', '3.png', 9.5, '2021-07-21 23:04:21'),
(5, 'Snow white juice W. Durian and black rice', 8.45, 71, 'Black Glutinous Rice', '4.png', 7.3, '2021-07-21 23:04:21'),
(6, 'Snow White Juice w.Mango and Black Rice', 7.45, 89, 'Black Glutinous Rice', '5.png', 6.8, '2021-07-21 23:04:21'),
(7, 'Triple Ice Cream Delight', 6.45, 85, 'Ice Cream Sundae', '6.png', 8.5, '2021-07-21 23:04:21'),
(8, 'Mango Sundae', 6.95, 97, 'Ice Cream Sundae', '7.png', 15, '2021-07-21 23:04:21'),
(9, 'Snow White Juice w.Ice Cream', 6.95, 34, 'Fresh Fruit Sago Soup', '8.png', 10, '2021-07-21 23:04:21'),
(10, 'Mixed Fresh Fruit w.Basil Seed', 7.45, 345, 'Fresh Fruit Sago Soup', '9.png', 2.4, '2021-07-21 23:04:21'),
(11, 'Brown Suger Lemon Kumquat', 5.5, 69, 'Healthy Scented Tea', '10.png', 5.9, '2021-07-21 23:04:21'),
(12, 'Mango Agar', 5, 64, 'Healthy Scented Tea', '11.png', 1.1, '2021-07-21 23:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
