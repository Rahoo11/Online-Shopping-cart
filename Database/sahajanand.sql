-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 03:46 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahajanand`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `number`, `email`) VALUES
(3, 'Hello', 'Ravat', 2147483647, 'sindhav@gmail.com'),
(4, 'Call Me', 'Ajay', 0, 'r@sa.com'),
(5, 'I Want To contact You', 'bhavin', 1234567890, 'ba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pid` varchar(30) NOT NULL,
  `ptitle` varchar(200) NOT NULL,
  `ptype` text NOT NULL,
  `pbrand` text NOT NULL,
  `pprice` float NOT NULL,
  `psize` varchar(50) NOT NULL,
  `pdetail` varchar(1500) NOT NULL,
  `pimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pid`, `ptitle`, `ptype`, `pbrand`, `pprice`, `psize`, `pdetail`, `pimg`) VALUES
(11, 'Sd', 'Grevity Checked Casual Shirt ', 'Shirt', 'Grevity', 1560, 'M- XXL', 'Roadster Men Black,\r\nShadow Checks ,Casual Shirt', 'img/Roadster-Men-Black-Shadow-Checks-Casual-Shirt.jpg'),
(12, 'SHRF5', 'Glory Red Black Checked Casual Shirt', 'Shirt', 'Glory', 1385, 'M L XL', 'Glory Red Black, Checked Casual Shirt,', 'img/Men-Red--Black-Regular-Fit-Checked-Casual-Shirt-.jpg'),
(13, 'HOODY', 'Stride Black  Hoody', 'T Shirt', 'Stride', 1499, 'M L', 'Stride Black  Hoody,\r\nBlack Colour,\r\nStylish,', 'img/black hoody.jpg'),
(14, 'JEANS2', 'Tago Blue Shaded Side Red Sttri Jeans', 'Jeans Pant', 'Tago', 1699, '28-34', 'Men Blue ,Slim Fit,Mid Rise ,Shaded,Side Red Stri', 'img/Men-Blue-Slim-Fit-Mid-Rise-Shaded-Side-Red-Stri.jpg'),
(15, '12', 'ADIDAS ZIPPER', 'T Shirt', 'Tago', 750, 'M L XL XXL', 'adidas zipper  \r\n\r\n7a Quality ? Store Article ?\r\n\r\n* Half net  Fully  Strechable ?*\r\n\r\nSize-M L XL XXL\r\n\r\n2 POCKET Zipper ??\r\n\r\n@750/-\r\n\r\n\r\nQuality Fully Guaranteed*?\r\n\r\n???', 'img/Adidas Zipper.jpeg'),
(16, '13', 'NIKE HOODIES', 'T Shirt', 'Glory', 799, 'M-38  L-40   XL-42   &  XXL-44', 'Brand    :   NIKE. ?????\r\n\r\nColors :-     GREY. MUSTED &. NavY\r\n          \r\nMaterial :100% COTTON 3 THREAD FLEES\r\n\r\nStyle    : HOODIES WARM \r\nSize     :  M-38  L-40   XL-42   &  XXL-44\r\n\r\nPrice    : 799/- Shipping Free\r\n\r\n ORIGINAL FABRIC VERY SOFT FEEL QUALITY\r\n\r\n# Current article as per brand used chest printing \r\n# Comes with kangaroo pocket', 'img/Nike Hoodies.jpeg'),
(17, '14', 'ADIDAS UPPER', 'T Shirt', 'Grevity', 850, 'M L XL', 'ADIDAS UPPER\r\nImported dryfit fleece\r\n10a quality \r\nM l xl\r\n850/- fs\r\n\r\nWeight 450-500 gm', 'img/Adidas Upper.jpeg'),
(18, '15', 'GAP HOODIES', 'T Shirt', 'William Hazlite', 799, 'L XL XXL', 'GAP hoodie\r\n7a quality \r\n3 thread fleece\r\nL xl xxl\r\n6 colours \r\n799/- fs\r\n\r\nWeight 600-650 gm', 'img/gap hoddies.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `mobile`, `email`, `password`) VALUES
(2, 'Nucleya', 9265474985, 'nucleyas61@gmail.com', 'Nucleya@2020');

-- --------------------------------------------------------

--
-- Table structure for table `varniraj`
--

CREATE TABLE `varniraj` (
  `id` int(10) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `psw` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varniraj`
--

INSERT INTO `varniraj` (`id`, `uname`, `psw`, `email`) VALUES
(1, 'Hari', '9404', 'hari1008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `uid`, `pid`) VALUES
(21, 'nucleyas61@gmail.com', 'SHRF2'),
(22, 'nucleyas61@gmail.com', 'HOODY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varniraj`
--
ALTER TABLE `varniraj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `varniraj`
--
ALTER TABLE `varniraj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
