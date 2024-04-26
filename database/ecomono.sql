-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 07:35 PM
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
-- Database: `ecomono`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AdminID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `BloggerID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `BlogID` int(11) NOT NULL,
  `AuthorID` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `PublishDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) DEFAULT NULL,
  `ip_add` varchar(255) DEFAULT NULL,
  `Customer` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `ip_add`, `Customer`, `Quantity`) VALUES
(13, '::1', 10, 1),
(17, '::1', 3, 2),
(8, '::1', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Reusable Products'),
(2, 'Organic and Natural Skincare'),
(3, 'Sustainable Fashion'),
(4, 'Zero Waste Home Essentials');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `BlogID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `CommentDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `LikeID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `BlogID` int(11) DEFAULT NULL,
  `LikeDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderItemID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentkey`
--

CREATE TABLE `paymentkey` (
  `KeyID` int(11) NOT NULL,
  `Public_Key` varchar(255) DEFAULT NULL,
  `Shop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `PaymentDate` date DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PaymentMethod` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `BrandName` varchar(255) DEFAULT NULL,
  `Category` int(11) DEFAULT NULL,
  `shop` int(11) DEFAULT NULL,
  `productImage` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Material` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Keywords` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `BrandName`, `Category`, `shop`, `productImage`, `Quantity`, `Material`, `Description`, `Keywords`, `date_created`) VALUES
(7, 'Eco ', 44.00, 'EcoCutlery', 4, 13, '../images/products/ecomono.png', 3, '', 'Eco-friendly cups', 'Cups, Eco-friendly', '2024-04-05 21:17:43'),
(8, 'Organic T-shirt', 19.99, 'GreenWear', 2, 14, '../images/products/ecomono.png', 100, 'Organic Cotton', 'Stay comfortable ', 'organic, cotton, t-shirt, sustainable, comfortable', '2024-04-05 21:17:43'),
(9, 'Recycled Paper Notebook', 8.99, 'EcoNote', 3, 14, '../images/products/product1.jpg', 150, 'Recycled Paper', 'Jot down your thoughts', 'recycled paper, notebook, eco-friendly, stationery, writing', '2024-04-05 21:17:43'),
(10, 'Reusable Stainless Steel Straw Set', 15.99, 'EcoSip', 4, 14, '../images/products/greencup.jpeg', 300, 'Stainless Steel', 'Say goodbye', 'stainless steel, straw, reusable, eco-conscious, beverages', '2024-04-05 21:17:43'),
(13, 'Organic Bamboo Toothbrush Holder', 9.50, 'GreenHolder', 2, NULL, 'toothbrush_holder1.jpg', 150, 'Bamboo', 'Keep your bathroom', 'bamboo, toothbrush holder, organic, eco-friendly, bathroom', '2024-04-05 21:17:43'),
(17, 'Natural Cork Yoga Mat', 29.99, 'EcoYoga', 1, NULL, 'yoga_mat1.jpg', 150, 'Cork', 'Enhance your yoga ', 'cork, yoga mat, eco-friendly, exercise, wellness', '2024-04-05 21:17:43'),
(23, 'New Product', 23.00, 'Atona Food', 1, 13, '../images/products/ecomono.png', 23, 'Cotton', 'Good product', 'hae, key', '2024-04-07 14:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `ShopID` int(11) NOT NULL,
  `ShopName` varchar(255) NOT NULL,
  `ShopAddress` varchar(255) NOT NULL,
  `Seller` int(11) DEFAULT NULL,
  `DigitalAddress` varchar(50) NOT NULL,
  `GhanaCard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`ShopID`, `ShopName`, `ShopAddress`, `Seller`, `DigitalAddress`, `GhanaCard`) VALUES
(13, 'pass', 'dfdg', 9, 'df', 'dfdgf'),
(14, 'Jop', 'Ashesi', 10, 'GA-234-3566', 'GHA-23456788754');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`RoleID`, `RoleName`) VALUES
(1, 'Administrator '),
(4, 'Blogger'),
(3, 'Customer '),
(2, 'Seller');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(5) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_pass` varchar(255) DEFAULT NULL,
  `UserType` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `User_pass`, `UserType`) VALUES
(1, 'Henry Owusu', 'henryowusu023@gmail.com', '$2y$10$S7KLHILtwHUgIAB2mEtSOuPUyF3be4fA0e.VEKIJc3KmeqcKQasFq', 1),
(3, 'James', 'henryowusu023@gmail.com', '$2y$10$KCzE9dHDKVmiyCc1HDcXsOY6DRlhPeX7SAcEkf6aIExrZMMsvd8hG', 3),
(5, 'Customer', 'henry@gmail.com', '$2y$10$5GEjQCOhXt3w.7ioAcfz6epxpJth.H8jhM6mQlrjPXa2MAzipN8nK', 3),
(6, 'vendor', 'vendor@gmail.com', '$2y$10$tz8Ng7uauVBkzmeyASuah.GfH5hY4SXhOkjvYTDRgz4aLh4SjPi7u', 3),
(7, 'Vend', 'henryowusu023@gmail.com', '$2y$10$7dnT5HiqBbTE7e3LExJ.Du/OsqYvZcpV0x24kcTwbl9W9rE3DdGwS', 2),
(8, 'newvendor', 'newvendor@gmail.com', '$2y$10$vlamTNxDLZu.sVbVamd0sORdErKRURngmO3RFK2AdFzgeOkDpyFQa', 2),
(9, 'sdf', 'asdkns@gmail.com', '$2y$10$qyAQyrR5GqUwkmJQ5Wktz.YY9sXpN3P84mk.iLsrZcla/tt./kEtK', 2),
(10, 'joseph', 'joseph@gmail.com', '$2y$10$HtXTSZ/e4onLiHlrdLpHO.f4COjZNJZIKoRph8MKeFP7V0TyDcUT2', 2),
(11, 'Jack', 'jack@gmail.com', '$2y$10$hziPjJb5QrWUV.G6UNqiG.XDiSvwPncUm5FyjqJDQWnetHUJuqzr2', 3),
(12, 'Alo', 'henry@gmail.com', '$2y$10$hATK6LVg1sHAmVQdAQgKZO0J7ROUXifBLAvR90Jv6ye8mIswRjlXu', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD PRIMARY KEY (`BloggerID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `AuthorID` (`AuthorID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `productIdd` (`productID`),
  ADD KEY `Customer` (`Customer`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `BlogID` (`BlogID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BlogID` (`BlogID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderItemID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `paymentkey`
--
ALTER TABLE `paymentkey`
  ADD PRIMARY KEY (`KeyID`),
  ADD KEY `Shop` (`Shop`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `Category` (`Category`),
  ADD KEY `fk_seller` (`shop`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ShopID`),
  ADD UNIQUE KEY `UserID` (`Seller`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `fk_UserType` (`UserType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paymentkey`
--
ALTER TABLE `paymentkey`
  MODIFY `KeyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `ShopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD CONSTRAINT `bloggers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Customer`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`BlogID`) REFERENCES `blogs` (`BlogID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`BlogID`) REFERENCES `blogs` (`BlogID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `paymentkey`
--
ALTER TABLE `paymentkey`
  ADD CONSTRAINT `paymentkey_ibfk_1` FOREIGN KEY (`Shop`) REFERENCES `shop` (`ShopID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_seller` FOREIGN KEY (`shop`) REFERENCES `shop` (`ShopID`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`Seller`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_UserType` FOREIGN KEY (`UserType`) REFERENCES `userroles` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
