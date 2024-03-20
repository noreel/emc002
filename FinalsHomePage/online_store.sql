-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:49 PM
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
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `itemname`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'Chop Suey', 'Chop suey generally consists of meat and eggs, cooked quickly with vegetables such as bean sprouts, cabbage, and celery, and bound in a starch-thickened sauce.', 599, 5, 'chopsuey.jpg'),
(2, 'Salpicao', 'Beef Salpicao is a  dish made of tender beef coated with a savory-buttery sauce that is full of rich, garlicky flavor.', 699, 10, 'salpicao.jpg'),
(3, 'Beef Broccoli', 'The dish is prepared by stir frying sliced steak and broccoli florets with oyster or soy sauce and aromatics such as garlic and ginger. ', 699, 10, 'beefbroccoli.jpg'),
(4, 'Roast Beef', 'Roast beef is a dish of beef that is roasted, generally served as the main dish partnered with pan gravy.', 699, 10, 'roastbeef.jpg'),
(5, 'Cordon Bleu', 'A cordon bleu or schnitzel cordon bleu is a dish of meat wrapped around cheese, then breaded and pan-fried or deep-fried. partnered with sour cream.', 699, 10, 'cordonbleu.jpg'),
(6, 'Caldereta', 'Caldereta is a type of beef stew cooked with tomato sauce and liver spread. Ingredients such as potato, carrots, bell peppers, and olives are also utilized when cooking this dish.', 599, 10, 'caldereta.jpg'),
(7, 'Kare Kare', 'Kare kare is generally made from a base of stewed oxtail, beef tripe, pork hocks, calves\' feet, pig\'s feet or trotters, various cuts of pork, and beef stew meat.', 599, 10, 'karekare.jpg'),
(8, 'Pork Hamonado', 'Pork Hamonado is braised in pineapple juice and soy sauce. Melt-in-your-mouth tender with a sweet, tangy sauce, it\'s a sure dinner hit!', 599, 10, 'porkhamonado.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES
(1, 'janedoe', 'password!', 'Jane', 'Doe', '09123456789', 'Kamuning, Quezon City', 'janedoe@gmail.com'),
(2, 'lois', 'Password@', 'Lois', 'Lane', '01234123412', 'Bacoor, Cavite Province', 'loislane@gmail.com'),
(3, 'Johnny', 'urBrethtaking!', 'Johnny', 'Silverhand', '01382442546', 'Bonifacio Global City, Taguig ', 'silverhand@gmail.com'),
(5, 'dads', 'weewee!', 'dads', 'dids', '0931234123', 'bacoor, cavite', 'dads@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `profile` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`item_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
