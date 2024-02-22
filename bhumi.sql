-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 08:41 AM
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
-- Database: `bhumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass'),
('username', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `kg` int(4) NOT NULL,
  `priceCent` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`fullname`, `username`, `password`, `number`, `email`, `dob`, `gender`) VALUES
('Naga Lakshmi Janyavula', 'naga', '$2y$10$u2hFNXs.', 6305360501, 'naga@gmail.com', '2024-02-08', 'female'),
('Naga Lakshmi Janyavula', 'naga', '$2y$10$EZBNNbnx', 6305360501, 'naga@gmail.com', '2024-02-28', 'female'),
('Naga Lakshmi Janyavula', 'janyavulanaga', '$2y$10$LQp9ABYa', 6305360501, 'janyavulanaga@gmail.', '2002-10-28', 'female'),
('fullname', 'username', '$2y$10$DE9HCJzk', 1234567890, 'email@123', '2024-02-10', 'female'),
('vamsi', 'vamsi', 'vamsi', 0, 'vamsi@123', '2024-02-09', 'male'),
('Naga Lakshmi Janyavula', 'janyavulanaga', '$2y$10$g7P2fwBF', 6305360501, 'janyavulanaga@gmail.', '2024-02-27', 'female'),
('Naga Lakshmi Janyavula', 'janyavulanaga', 'naga@1234', 6305360501, 'janyavulanaga@gmail.', '2002-10-28', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `number` bigint(10) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `address`, `email`, `area`, `pincode`, `number`, `dob`) VALUES
('vamsi', 'khadhi colony', 'janyavulanaga@gmail.com', 'tirupati', 0, 6305360501, '2024-02-15'),
('class', '18-3-53/16a, Khadhi colony', 'janyavulanaga@gmail.com', 'tirupati', 517501, 6305360501, '2024-02-04'),
('naga', 'khadhi colony', 'janyavulanaga@gmail.com', 'tirupati', 517501, 6305360501, '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_list`
--

CREATE TABLE `orders_list` (
  `ID` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Items` varchar(50) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_list`
--

INSERT INTO `orders_list` (`ID`, `name`, `number`, `Items`, `Address`, `price`, `Status`) VALUES
(2328, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'pending'),
(2335, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'pending'),
(2356, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'pending'),
(2367, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'completed'),
(2378, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'pending'),
(2389, '', 0, 'Apple, Fruit Basket, Onions', 'tirupati', 0, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `price` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `quantity`, `category`, `product_image`) VALUES
(22, 'Buttermilk', 60, 1, 'Dairy', 'uploads/buttermilk.png'),
(23, 'Chicken', 700, 1, 'Meat', 'uploads/chicken.png'),
(24, 'Butter', 1000, 1, 'Dairy', 'uploads/butter.png'),
(25, 'Blue Fin Big', 300, 1, 'Meat', 'uploads/Bluefin-big.png'),
(27, 'cardamn', 300, 1, 'Spices', 'uploads/cardamn.png'),
(28, 'Chicken Manure', 500, 1, 'Fertilizers', 'uploads/chicken-manure.png'),
(29, 'Cinnaman', 300, 1, 'Spices', 'uploads/Cinnaman.png'),
(30, 'Cloves', 350, 1, 'Spices', 'uploads/cloves.png'),
(31, 'Cottonseed Meal', 400, 5, 'Fertilizers', 'uploads/cottonseed-meal.png'),
(32, 'Cow Manure', 300, 5, 'Fertilizers', 'uploads/cow-manure.png'),
(33, 'Crab', 800, 1, 'Meat', 'uploads/crab.png'),
(34, 'Cumin', 300, 1, 'Spices', 'uploads/cumin.png'),
(35, 'Earthworm Castings', 3000, 10, 'Fertilizers', 'uploads/earthworm-castings.png'),
(36, 'Eggs', 70, 1, 'Meat', 'uploads/eggs.png'),
(37, 'Ghee', 1, 850, 'Dairy', 'uploads/ghee.png'),
(38, 'Green Tiger Prawns', 500, 1, 'Meat', 'uploads/green-tiger-prawns.png'),
(39, 'Kova', 1000, 1, 'Dairy', 'uploads/kova.png'),
(40, 'Milk', 70, 1, 'Dairy', 'uploads/milk.png'),
(41, 'Mozarilla', 1, 1900, 'Dairy', 'uploads/mozarilla.png'),
(42, 'Pepper', 300, 1, 'Spices', 'uploads/pepper.png'),
(43, 'Red Chilli', 500, 1, 'FruitVeg', 'uploads/redchilli.png'),
(44, 'Rock Phosphate', 345, 3, 'Fertilizers', 'uploads/rock-phosphate-removebg-preview.png'),
(45, 'Sheep', 800, 1, 'Meat', 'uploads/sheep.png'),
(46, 'Turkey', 500, 1, 'Meat', 'uploads/turkey.png'),
(47, 'Apple', 220, 1, 'FruitVeg', 'uploads/apple.png'),
(48, 'Chilli', 250, 1, 'FruitVeg', 'uploads/chili.png'),
(49, 'Garlic', 700, 1, 'FruitVeg', 'uploads/garlic.png'),
(50, 'Onion', 50, 1, 'FruitVeg', 'uploads/onion.png'),
(51, 'Oranges', 250, 1, 'FruitVeg', 'uploads/Oranges.jpg'),
(52, 'Tamato', 30, 1, 'FruitVeg', 'uploads/tamato.png'),
(53, 'Apple', 220, 1, 'FruitVeg', 'uploads/apple.png'),
(54, 'Onion', 50, 1, 'FruitVeg', 'uploads/onion.png'),
(55, 'Oranges', 220, 1, 'FruitVeg', 'uploads/Oranges.jpg'),
(56, 'Chilli', 200, 1, 'FruitVeg', 'uploads/chili.png'),
(57, 'Potato', 30, 1, 'FruitVeg', 'uploads/patato.png'),
(58, 'Apple', 220, 1, 'FruitVeg', 'uploads/apple.png'),
(59, 'Garlic', 400, 1, 'FruitVeg', 'uploads/garlic.png'),
(60, 'Apple', 200, 1, 'FruitVeg', 'uploads/apple.png'),
(61, 'Potato', 30, 1, 'FruitVeg', 'uploads/patato.png'),
(62, 'Oranges', 250, 1, 'FruitVeg', 'uploads/Oranges.jpg'),
(63, 'Onion', 50, 1, 'FruitVeg', 'uploads/onion.png'),
(64, 'Chilli', 200, 1, 'FruitVeg', 'uploads/chili.png'),
(65, 'Alfalfa Seeds', 400, 1, 'Seeds', 'uploads/alfalfaSeeds.jpg'),
(66, 'Chilli Long Green Seeds', 200, 1, 'Seeds', 'uploads/Chilli-Long-Green-Seeds.jpg'),
(67, 'Fennel Seed', 300, 1, 'Spices', 'uploads/fennelSeed.jpg'),
(68, 'Custard Apple Seed', 100, 1, 'Seeds', 'uploads/custard-apple-seed.jpeg'),
(69, 'Paddy Seeds', 170, 1, 'Seeds', 'uploads/paddySeeds.jpg'),
(70, 'Pumpkin Seeds', 230, 1, 'Seeds', 'uploads/pumpkinSeeds.jpg'),
(71, 'junnu', 300, 1, 'Dairy', 'uploads/junnu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `name`, `number`, `email`) VALUES
(4, 'jaya', 'jaya', 'jaya lakshmi', 6305360501, 'jaya@gmail.com'),
(5, 'vamsi', 'vamsi', 'Vamsinath', 8985429152, 'vnrias@gmail.com'),
(6, 'lakshmi', 'nagajaya', 'Venkata Lakshmi', 8985429152, 'lakshmi@1973'),
(7, 'janyavulanaga', 'naga@1280', 'Janyavula Naga Lakshmi', 6305360501, 'janyavulanaga@gmail.com'),
(8, 'naga', 'naga', 'Naga Lakshmi Janyavula', 9843487345, 'naga@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_list`
--
ALTER TABLE `orders_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
