-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 06:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Nagesha', 'nags@gmail.com', 'Nagesha@2', '0'),
(8, 'nagi', 'n@g.com', '123456', '0');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'nestle'),
(7, 'allen solly'),
(8, 'hand made india '),
(9, 'small industries'),
(10, 'canon'),
(11, 'realme'),
(13, 'noise'),
(14, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` varchar(10) NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(4, 'Kids'),
(7, 'Electronics'),
(13, 'clothes'),
(14, 'cosmetics'),
(15, 'jewellary'),
(16, 'footwear'),
(17, 'bags'),
(18, 'shampoo'),
(19, 'men'),
(20, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `d_status` text NOT NULL DEFAULT 'Not Deliverd',
  `o_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `vendor_id` int(10) NOT NULL,
  `o_price` int(12) NOT NULL,
  `size` varchar(10) NOT NULL DEFAULT 'NA',
  `payment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `d_status`, `o_date`, `vendor_id`, `o_price`, `size`, `payment`) VALUES
(34, 4, 10, 1, 'Delivered', '2023-07-31 14:43:58', 3, 3000, 'NA', 'cash'),
(35, 4, 21, 1, 'Delivered', '2023-07-31 14:45:05', 3, 5599, '7', 'cash'),
(36, 4, 9, 1, 'Not Deliverd', '2023-07-31 14:45:05', 3, 1599, 'NA', 'cash'),
(37, 4, 19, 1, 'Not Deliverd', '2023-07-31 14:45:06', 3, 870, 'X', 'cash'),
(38, 8, 11, 1, 'Not Deliverd', '2023-07-31 15:07:44', 4, 125000, 'NA', 'cash'),
(39, 4, 10, 1, 'Not Deliverd', '2023-08-01 10:16:33', 3, 3000, 'NA', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `vendor_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`, `vendor_id`) VALUES
(7, 13, 9, 'beutiful black and gold ladies frock', 799, 1, 'Black with gold colour finishing frock ,\r\navailable in all sizes', '1689524917_ladies dress frock.jpg', 'dress, frock, girls fashion, clothes , women, beutiful, black, saree, tops', 3),
(8, 13, 9, 'Lovely girls pull over', 499, 1, 'pull over for women , for classy looks\r\n ', '1689525072_blue-hoodie-men-women.jpg', 'girls, pull over , pullover , dress, clothes, cloth, women, men , jacket, hoodie', 3),
(9, 15, 8, 'Handmade Necklace ', 1599, 1, 'necklace for girls , \r\nsuitable for all parties and weddings ,\r\nfeel awesome', '1689525303_jewellery-3 necklace.jpg', 'necklace, jewellary, rings , bracelet, gold, love, women, girl, girls, fashion, party wear', 3),
(10, 15, 8, 'Diamond earrings', 3000, 2, 'handmade earrings for women for vintage looks,\r\ngood qauality', '1689525477_jewellery-1 earrings blue diamond.jpg', 'jewellary, gold , earrings , gold , diamond, women fashion', 3),
(11, 7, 10, 'All new canon camera', 125000, 1, 'high definition pixel camera by canon,\r\ncamera is well performed in all scenarios, like night, day, and low light conditions, pictures are so awesome', '1689525942_camera3.jpg', 'camera, canon, digtal, nikon, realme, sony cameras, HD, pixels, px ', 4),
(12, 18, 14, 'Shampoo', 150, 1, 'Anti dandruf silky hair texture, this shampoo will promote hair density and it will maintain strength ', '1690276282_shampoo.jpg', 'shampoo , women , hair , anti dandruf, strength , mens, womens', 3),
(14, 19, 1, 'Belt', 500, 1, 'product from nike : leather belt ensures your fitness, \r\nlook formal at cultural and casual activities.\r\n', '1690276601_belt.jpg', 'belt , mens , casual , formal ', 3),
(15, 14, 7, 'Alen perfume', 750, 1, 'The perfume made by allen industries from palnt and species or synthetic aromatic compounds,\r\nit emits a pleasant odour.', '1690277518_perfume.jpg', 'perfume , men , womens , cosmetics , ', 3),
(19, 13, 7, 'Shirt kudtha', 870, 1, 'Typically clothes is made up of fabrics or textiles.\r\nClothes are stylish, elegant , fashionable.', '1690277896_shirt-1.jpg', 'clothes , mens , womens , childrens , shirt, casual , formal, shirts , dress', 3),
(20, 13, 2, 'jacket', 2250, 1, 'Jackets are an outer garment extending outside either to waist or the hips,having sleeves.\r\nit is used for layering purpose.', '1690278335_jacket-2.jpg', 'clothes, jacket , mens , womens , kids , shirts , shirt.', 3),
(21, 16, 2, 'shoes', 5599, 1, 'Shoes is an item of footwear intended to protect and comfort human foot.\r\nShoes are athletic, brethable, beautiful,cute,buckled.', '1690278661_shoe-4.jpg', 'shoes , mens , womens , men , women , kids .', 3),
(22, 7, 7, 'watch', 1200, 1, 'Watches are the portable time pieces intended to carried or worn by a person .\r\nIt is a time measuring machine . ', '1690279359_watch-1.jpg', 'watch , men , womens , men , women , kids , smartwatch , smart .', 3),
(24, 7, 13, 'Noise watch 2 pro', 1500, 1, 'good watch', '1690287217_watch-2.jpg', 'watch ,', 3),
(25, 19, 1, 'New Menon kids shoes', 500, 2, 'feathery soft shoes.\r\nmake your kid more comfortable with our product\r\n comes with pleasant softness and comfortness', '1690287795_1.jpg', 'kids, shoes, slipper, baby, soft feather', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'nagesha', 'Digital electronics', 'nags@gmail.com', 'Nagesha@52`1', '7483158421', 'tumkur', 'india'),
(4, 'Nagababu', 'N', 'nag2s@gmail.com', 'Nagesha@521', '7483158456', '#sharadamba nagara , tumkur', 'India'),
(7, 'Vishwas', 'Reddy G', 'reddy@gmail.com', '123456789', '7583158496', 'ghkdsgk', 'uyfgtiugyfo'),
(8, 'Vishwas', 'Dharwad styles', 'reddy1@gmail.com', '123456789', '7845962541', 'ghkdsgk', 'uyfgtiugyfo');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `vendor_id` int(10) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`vendor_id`, `vendor_name`, `store_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Nithish', 'Bridal store', 'nithish@gmail.com', '1234', '7483158421', '# 567 vamshi buliding, chikpet main road, tumkur, karnataka', 'india'),
(4, 'nagesha', 'Digital electronics', 'nags@g.com', 'Nagesha@521', '7483158421', 'tumkur', 'india'),
(5, 'Raaju', 'Raaju emporium', 'raj@gmail.com', 'raj@521', '7483158425', '#234 , 1st cross old town, Raayadurgam, Andrapradesh', 'india'),
(7, 'Pramod', 'Dharwad styles', 'pramod@gmail.com', '123456789', '7846128421', 'IIt dharwad', 'karnataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_p_id` (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`),
  ADD KEY `fk_vendor_id` (`vendor_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_info` (`vendor_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `fk_vendor_id` FOREIGN KEY (`vendor_id`) REFERENCES `vendor_info` (`vendor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
