-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 07:20 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cvdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `houseno` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(1, 8, 0.00, '2017-05-09 00:00:00', '2017-05-16 00:00:00', 'pending'),
(2, 8, 0.00, '2017-05-09 00:00:00', '2017-05-18 00:00:00', 'processing'),
(3, 8, 0.00, '2017-05-16 00:00:00', '0000-00-00 00:00:00', 'delivered'),
(4, 8, 0.00, '2017-05-24 00:00:00', '0000-00-00 00:00:00', 'shipped');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `price` double NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `image1`, `image2`, `image3`, `image4`, `price`, `type`, `status`, `supplier`, `stock`, `date_added`) VALUES
(1, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/1.jpg', 'resources/menshirt/1.jpg', 'resources/menshirt/1.jpg', 'resources/menshirt/1.jpg', 'resources/menshirt/1.jpg', 1000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:31:46'),
(2, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/2.jpg', 'resources/menshirt/2.jpg', 'resources/menshirt/2.jpg', 'resources/menshirt/2.jpg', 'resources/menshirt/2.jpg', 2000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:31:38'),
(3, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/3.jpg', 'resources/menshirt/3.jpg', 'resources/menshirt/3.jpg', 'resources/menshirt/3.jpg', 'resources/menshirt/3.jpg', 3000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:31:33'),
(4, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/4.jpg', 'resources/menshirt/4.jpg', 'resources/menshirt/4.jpg', 'resources/menshirt/4.jpg', 'resources/menshirt/4.jpg', 1000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(5, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/5.jpg', 'resources/menshirt/5.jpg', 'resources/menshirt/5.jpg', 'resources/menshirt/5.jpg', 'resources/menshirt/5.jpg', 2000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(6, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/6.jpg', 'resources/menshirt/6.jpg', 'resources/menshirt/6.jpg', 'resources/menshirt/6.jpg', 'resources/menshirt/6.jpg', 3000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(7, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/7.jpg', 'resources/menshirt/7.jpg', 'resources/menshirt/7.jpg', 'resources/menshirt/7.jpg', 'resources/menshirt/7.jpg', 1000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(8, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/8.jpg', 'resources/menshirt/8.jpg', 'resources/menshirt/8.jpg', 'resources/menshirt/8.jpg', 'resources/menshirt/8.jpg', 3000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(9, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/9.jpg', 'resources/menshirt/9.jpg', 'resources/menshirt/9.jpg', 'resources/menshirt/9.jpg', 'resources/menshirt/9.jpg', 1000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(10, 'MENS SHIRT', 'MENS SHIRT', '../resources/menshirt/10.jpg', 'resources/menshirt/10.jpg', 'resources/menshirt/10.jpg', 'resources/menshirt/10.jpg', 'resources/menshirt/10.jpg', 2000, 'menshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:29:28'),
(11, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/1.jpg', 'resources/mentuxedo/1.jpg', 'resources/mentuxedo/1.jpg', 'resources/mentuxedo/1.jpg', 1000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(12, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/2.jpg', 'resources/mentuxedo/2.jpg', 'resources/mentuxedo/2.jpg', 'resources/mentuxedo/2.jpg', 2000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(13, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/3.jpg', 'resources/mentuxedo/3.jpg', 'resources/mentuxedo/3.jpg', 'resources/mentuxedo/3.jpg', 3000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(14, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/4.jpg', 'resources/mentuxedo/4.jpg', 'resources/mentuxedo/4.jpg', 'resources/mentuxedo/4.jpg', 4000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(15, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/5.jpg', 'resources/mentuxedo/5.jpg', 'resources/mentuxedo/5.jpg', 'resources/mentuxedo/5.jpg', 5000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(16, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/6.jpg', 'resources/mentuxedo/6.jpg', 'resources/mentuxedo/6.jpg', 'resources/mentuxedo/6.jpg', 5000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(17, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/7.jpg', 'resources/mentuxedo/7.jpg', 'resources/mentuxedo/7.jpg', 'resources/mentuxedo/7.jpg', 4000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(18, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/8.jpg', 'resources/mentuxedo/8.jpg', 'resources/mentuxedo/8.jpg', 'resources/mentuxedo/8.jpg', 3000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(19, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/9.jpg', 'resources/mentuxedo/9.jpg', 'resources/mentuxedo/9.jpg', 'resources/mentuxedo/9.jpg', 2000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(20, 'MENS TUXEDO', 'MENS TUXEDO', '', 'resources/mentuxedo/10.jpg', 'resources/mentuxedo/10.jpg', 'resources/mentuxedo/10.jpg', 'resources/mentuxedo/10.jpg', 1000, 'mentuxedo', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(21, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/1.jpg', 'resources/menwatch/1.jpg', 'resources/menwatch/1.jpg', 'resources/menwatch/1.jpg', 1000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(22, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/2.jpg', 'resources/menwatch/2.jpg', 'resources/menwatch/2.jpg', 'resources/menwatch/2.jpg', 2000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(23, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/3.jpg', 'resources/menwatch/3.jpg', 'resources/menwatch/3.jpg', 'resources/menwatch/3.jpg', 3000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(24, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/4.jpg', 'resources/menwatch/4.jpg', 'resources/menwatch/4.jpg', 'resources/menwatch/4.jpg', 4000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(25, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/5.jpg', 'resources/menwatch/5.jpg', 'resources/menwatch/5.jpg', 'resources/menwatch/5.jpg', 1000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(26, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/6.jpg', 'resources/menwatch/6.jpg', 'resources/menwatch/6.jpg', 'resources/menwatch/6.jpg', 2000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(27, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/7.jpg', 'resources/menwatch/7.jpg', 'resources/menwatch/7.jpg', 'resources/menwatch/7.jpg', 3000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(28, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/8.jpg', 'resources/menwatch/8.jpg', 'resources/menwatch/8.jpg', 'resources/menwatch/8.jpg', 4000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(29, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/9.jpg', 'resources/menwatch/9.jpg', 'resources/menwatch/9.jpg', 'resources/menwatch/9.jpg', 1000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(30, 'MENS WATCH', 'MENS WATCH', '', 'resources/menwatch/10.jpg', 'resources/menwatch/10.jpg', 'resources/menwatch/10.jpg', 'resources/menwatch/10.jpg', 4000, 'menwatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(31, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/1.jpg', 'resources/mensandals/1.jpg', 'resources/mensandals/1.jpg', 'resources/mensandals/1.jpg', 1000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(32, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/2.jpg', 'resources/mensandals/2.jpg', 'resources/mensandals/2.jpg', 'resources/mensandals/2.jpg', 1000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(33, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/3.jpg', 'resources/mensandals/3.jpg', 'resources/mensandals/3.jpg', 'resources/mensandals/3.jpg', 2000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(34, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/4.jpg', 'resources/mensandals/4.jpg', 'resources/mensandals/4.jpg', 'resources/mensandals/4.jpg', 2000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(35, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/5.jpg', 'resources/mensandals/5.jpg', 'resources/mensandals/5.jpg', 'resources/mensandals/5.jpg', 3000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(36, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/6.jpg', 'resources/mensandals/6.jpg', 'resources/mensandals/6.jpg', 'resources/mensandals/6.jpg', 3000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(37, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/7.jpg', 'resources/mensandals/7.jpg', 'resources/mensandals/7.jpg', 'resources/mensandals/7.jpg', 4000, 'mensandals', 'Out of stock', 'CV', 0, '2017-05-29 20:25:10'),
(38, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/8.jpg', 'resources/mensandals/8.jpg', 'resources/mensandals/8.jpg', 'resources/mensandals/8.jpg', 4000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(39, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/9.jpg', 'resources/mensandals/9.jpg', 'resources/mensandals/9.jpg', 'resources/mensandals/9.jpg', 5000, 'mensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(40, 'MENS SANDAL', 'MENS SANDAL', '', 'resources/mensandals/10.jpg', 'resources/mensandals/10.jpg', 'resources/mensandals/10.jpg', 'resources/mensandals/10.jpg', 5000, 'mensandals', 'Out of stock', 'CV', 0, '2017-05-29 20:25:10'),
(41, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/1.jpg', 'resources/womenshirt/1.jpg', 'resources/womenshirt/1.jpg', 'resources/womenshirt/1.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(42, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/2.jpg', 'resources/womenshirt/2.jpg', 'resources/womenshirt/2.jpg', 'resources/womenshirt/2.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(43, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/3.jpg', 'resources/womenshirt/3.jpg', 'resources/womenshirt/3.jpg', 'resources/womenshirt/3.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(44, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/4.jpg', 'resources/womenshirt/4.jpg', 'resources/womenshirt/4.jpg', 'resources/womenshirt/4.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(45, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/5.jpg', 'resources/womenshirt/5.jpg', 'resources/womenshirt/5.jpg', 'resources/womenshirt/5.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(46, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/6.jpg', 'resources/womenshirt/6.jpg', 'resources/womenshirt/6.jpg', 'resources/womenshirt/6.jpg', 2000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(47, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/7.jpg', 'resources/womenshirt/7.jpg', 'resources/womenshirt/7.jpg', 'resources/womenshirt/7.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(48, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/8.jpg', 'resources/womenshirt/8.jpg', 'resources/womenshirt/8.jpg', 'resources/womenshirt/8.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(49, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/9.jpg', 'resources/womenshirt/9.jpg', 'resources/womenshirt/9.jpg', 'resources/womenshirt/9.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 0, '2017-05-29 20:25:10'),
(50, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/10.jpg', 'resources/womenshirt/10.jpg', 'resources/womenshirt/10.jpg', 'resources/womenshirt/10.jpg', 4000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(51, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/11.jpg', 'resources/womenshirt/11.jpg', 'resources/womenshirt/11.jpg', 'resources/womenshirt/11.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(52, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/12.jpg', 'resources/womenshirt/12.jpg', 'resources/womenshirt/12.jpg', 'resources/womenshirt/12.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(53, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/13.jpg', 'resources/womenshirt/13.jpg', 'resources/womenshirt/13.jpg', 'resources/womenshirt/13.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(54, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/14.jpg', 'resources/womenshirt/14.jpg', 'resources/womenshirt/14.jpg', 'resources/womenshirt/14.jpg', 3000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(55, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/15.jpg', 'resources/womenshirt/15.jpg', 'resources/womenshirt/15.jpg', 'resources/womenshirt/15.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(56, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/16.jpg', 'resources/womenshirt/16.jpg', 'resources/womenshirt/16.jpg', 'resources/womenshirt/16.jpg', 2000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(57, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/17.jpg', 'resources/womenshirt/17.jpg', 'resources/womenshirt/17.jpg', 'resources/womenshirt/17.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(58, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/18.jpg', 'resources/womenshirt/18.jpg', 'resources/womenshirt/18.jpg', 'resources/womenshirt/18.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(59, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/19.jpg', 'resources/womenshirt/19.jpg', 'resources/womenshirt/19.jpg', 'resources/womenshirt/19.jpg', 1000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(60, 'WOMENS SHIRT', 'WOMENS SHIRT', '', 'resources/womenshirt/20.jpg', 'resources/womenshirt/20.jpg', 'resources/womenshirt/20.jpg', 'resources/womenshirt/20.jpg', 5000, 'womenshirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(61, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/1.jpg', 'resources/womenskirt/1.jpg', 'resources/womenskirt/1.jpg', 'resources/womenskirt/1.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(62, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/2.jpg', 'resources/womenskirt/2.jpg', 'resources/womenskirt/2.jpg', 'resources/womenskirt/2.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(63, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/3.jpg', 'resources/womenskirt/3.jpg', 'resources/womenskirt/3.jpg', 'resources/womenskirt/3.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(64, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/4.jpg', 'resources/womenskirt/4.jpg', 'resources/womenskirt/4.jpg', 'resources/womenskirt/4.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(65, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/5.jpg', 'resources/womenskirt/5.jpg', 'resources/womenskirt/5.jpg', 'resources/womenskirt/5.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(66, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/6.jpg', 'resources/womenskirt/6.jpg', 'resources/womenskirt/6.jpg', 'resources/womenskirt/6.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(67, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/7.jpg', 'resources/womenskirt/7.jpg', 'resources/womenskirt/7.jpg', 'resources/womenskirt/7.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(68, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/8.jpg', 'resources/womenskirt/8.jpg', 'resources/womenskirt/8.jpg', 'resources/womenskirt/8.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(69, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/9.jpg', 'resources/womenskirt/9.jpg', 'resources/womenskirt/9.jpg', 'resources/womenskirt/9.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(70, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/10.jpg', 'resources/womenskirt/10.jpg', 'resources/womenskirt/10.jpg', 'resources/womenskirt/10.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(71, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/11.jpg', 'resources/womenskirt/11.jpg', 'resources/womenskirt/11.jpg', 'resources/womenskirt/11.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(72, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/12.jpg', 'resources/womenskirt/12.jpg', 'resources/womenskirt/12.jpg', 'resources/womenskirt/12.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(73, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/13.jpg', 'resources/womenskirt/13.jpg', 'resources/womenskirt/13.jpg', 'resources/womenskirt/13.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(74, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/14.jpg', 'resources/womenskirt/14.jpg', 'resources/womenskirt/14.jpg', 'resources/womenskirt/14.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(75, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/15.jpg', 'resources/womenskirt/15.jpg', 'resources/womenskirt/15.jpg', 'resources/womenskirt/15.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(76, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/16.jpg', 'resources/womenskirt/16.jpg', 'resources/womenskirt/16.jpg', 'resources/womenskirt/16.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(77, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/17.jpg', 'resources/womenskirt/17.jpg', 'resources/womenskirt/17.jpg', 'resources/womenskirt/17.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(78, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/18.jpg', 'resources/womenskirt/18.jpg', 'resources/womenskirt/18.jpg', 'resources/womenskirt/18.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(79, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/19.jpg', 'resources/womenskirt/19.jpg', 'resources/womenskirt/19.jpg', 'resources/womenskirt/19.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(80, 'WOMENS SKIRT', 'WOMENS SKIRT', '', 'resources/womenskirt/20.jpg', 'resources/womenskirt/20.jpg', 'resources/womenskirt/20.jpg', 'resources/womenskirt/20.jpg', 800, 'womenskirt', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(81, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/1.jpg', 'resources/womenwatch/1.jpg', 'resources/womenwatch/1.jpg', 'resources/womenwatch/1.jpg', 6000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(82, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/2.jpg', 'resources/womenwatch/2.jpg', 'resources/womenwatch/2.jpg', 'resources/womenwatch/2.jpg', 5500, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(83, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/3.jpg', 'resources/womenwatch/3.jpg', 'resources/womenwatch/3.jpg', 'resources/womenwatch/3.jpg', 6500, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(84, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/4.jpg', 'resources/womenwatch/4.jpg', 'resources/womenwatch/4.jpg', 'resources/womenwatch/4.jpg', 5000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(85, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/5.jpg', 'resources/womenwatch/5.jpg', 'resources/womenwatch/5.jpg', 'resources/womenwatch/5.jpg', 7200, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(86, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/6.jpg', 'resources/womenwatch/6.jpg', 'resources/womenwatch/6.jpg', 'resources/womenwatch/6.jpg', 4500, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(87, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/7.jpg', 'resources/womenwatch/7.jpg', 'resources/womenwatch/7.jpg', 'resources/womenwatch/7.jpg', 5000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(88, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/8.jpg', 'resources/womenwatch/8.jpg', 'resources/womenwatch/8.jpg', 'resources/womenwatch/8.jpg', 8500, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(89, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/9.jpg', 'resources/womenwatch/9.jpg', 'resources/womenwatch/9.jpg', 'resources/womenwatch/9.jpg', 8000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(90, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/10.jpg', 'resources/womenwatch/10.jpg', 'resources/womenwatch/10.jpg', 'resources/womenwatch/10.jpg', 4850, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(91, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/11.jpg', 'resources/womenwatch/11.jpg', 'resources/womenwatch/11.jpg', 'resources/womenwatch/11.jpg', 5000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(92, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/12.jpg', 'resources/womenwatch/12.jpg', 'resources/womenwatch/12.jpg', 'resources/womenwatch/12.jpg', 7500, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(93, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/13.jpg', 'resources/womenwatch/13.jpg', 'resources/womenwatch/13.jpg', 'resources/womenwatch/13.jpg', 6000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(94, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/14.jpg', 'resources/womenwatch/14.jpg', 'resources/womenwatch/14.jpg', 'resources/womenwatch/14.jpg', 8000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(95, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/15.jpg', 'resources/womenwatch/15.jpg', 'resources/womenwatch/15.jpg', 'resources/womenwatch/15.jpg', 5000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(96, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/16.jpg', 'resources/womenwatch/16.jpg', 'resources/womenwatch/16.jpg', 'resources/womenwatch/16.jpg', 4559, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(97, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/17.jpg', 'resources/womenwatch/17.jpg', 'resources/womenwatch/17.jpg', 'resources/womenwatch/17.jpg', 4999, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(98, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/18.jpg', 'resources/womenwatch/18.jpg', 'resources/womenwatch/18.jpg', 'resources/womenwatch/18.jpg', 5999, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(99, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/19.jpg', 'resources/womenwatch/19.jpg', 'resources/womenwatch/19.jpg', 'resources/womenwatch/19.jpg', 5599, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(100, 'LADIES WATCH', 'LADIES WATCH', '', 'resources/womenwatch/20.jpg', 'resources/womenwatch/20.jpg', 'resources/womenwatch/20.jpg', 'resources/womenwatch/20.jpg', 9000, 'ladieswatch', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(101, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/1.jpg', 'resources/womensandals/1.jpg', 'resources/womensandals/1.jpg', 'resources/womensandals/1.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(102, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/2.jpg', 'resources/womensandals/2.jpg', 'resources/womensandals/2.jpg', 'resources/womensandals/2.jpg', 3999, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(103, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/3.jpg', 'resources/womensandals/3.jpg', 'resources/womensandals/3.jpg', 'resources/womensandals/3.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(104, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/4.jpg', 'resources/womensandals/4.jpg', 'resources/womensandals/4.jpg', 'resources/womensandals/4.jpg', 5500, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(105, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/5.jpg', 'resources/womensandals/5.jpg', 'resources/womensandals/5.jpg', 'resources/womensandals/5.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(106, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/6.jpg', 'resources/womensandals/6.jpg', 'resources/womensandals/6.jpg', 'resources/womensandals/6.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(107, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/7.jpg', 'resources/womensandals/7.jpg', 'resources/womensandals/7.jpg', 'resources/womensandals/7.jpg', 5500, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(108, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/8.jpg', 'resources/womensandals/8.jpg', 'resources/womensandals/8.jpg', 'resources/womensandals/8.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(109, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/9.jpg', 'resources/womensandals/9.jpg', 'resources/womensandals/9.jpg', 'resources/womensandals/9.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(110, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/10.jpg', 'resources/womensandals/10.jpg', 'resources/womensandals/10.jpg', 'resources/womensandals/10.jpg', 5500, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(111, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/11.jpg', 'resources/womensandals/11.jpg', 'resources/womensandals/11.jpg', 'resources/womensandals/11.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(112, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/12.jpg', 'resources/womensandals/12.jpg', 'resources/womensandals/12.jpg', 'resources/womensandals/12.jpg', 4000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(113, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/13.jpg', 'resources/womensandals/13.jpg', 'resources/womensandals/13.jpg', 'resources/womensandals/13.jpg', 5000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(114, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/14.jpg', 'resources/womensandals/14.jpg', 'resources/womensandals/14.jpg', 'resources/womensandals/14.jpg', 5000, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(115, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/15.jpg', 'resources/womensandals/15.jpg', 'resources/womensandals/15.jpg', 'resources/womensandals/15.jpg', 5500, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(116, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/16.jpg', 'resources/womensandals/16.jpg', 'resources/womensandals/16.jpg', 'resources/womensandals/16.jpg', 3999, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(117, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/17.jpg', 'resources/womensandals/17.jpg', 'resources/womensandals/17.jpg', 'resources/womensandals/17.jpg', 3999, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(118, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/18.jpg', 'resources/womensandals/18.jpg', 'resources/womensandals/18.jpg', 'resources/womensandals/18.jpg', 5600, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(119, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/19.jpg', 'resources/womensandals/19.jpg', 'resources/womensandals/19.jpg', 'resources/womensandals/19.jpg', 4900, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10'),
(120, 'WOMEN SANDALS', 'WOMEN SANDALS', '', 'resources/womensandals/20.jpg', 'resources/womensandals/20.jpg', 'resources/womensandals/20.jpg', 'resources/womensandals/20.jpg', 3999, 'womensandals', 'Out of stock', 'CV', 15, '2017-05-29 20:25:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
