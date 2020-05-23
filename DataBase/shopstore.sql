-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2020 lúc 08:11 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Telephone` text NOT NULL,
  `address` text NOT NULL,
  `indenityCard` text NOT NULL,
  `userName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `idProduct` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `rate` int(11) NOT NULL,
  `Date` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `idUserName` int(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`idUserName`, `userName`, `password`, `position`) VALUES
(1, 'vynguyen', '12345678', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `oderID` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `OrderDate` text NOT NULL,
  `OrderStatus` tinyint(1) NOT NULL,
  `ShipDate` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitem`
--

CREATE TABLE `orderitem` (
  `oderID` int(11) NOT NULL,
  `item_iD` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `NumberOfOrders` int(11) NOT NULL,
  `listprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `nameProduct` text NOT NULL,
  `brandName` text NOT NULL,
  `color` text NOT NULL,
  `Gender` text NOT NULL,
  `material` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `thuMucBoAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productid`, `nameProduct`, `brandName`, `color`, `Gender`, `material`, `category`, `price`, `rate`, `img`, `thuMucBoAnh`) VALUES
(193, 'F123', 'Sekio', 'Đen', 'Nam', 'Dây Da', 'Đồng Hồ Kim Loại', 2, 1, '../Image/men_watches/men.webp', 'men_watches'),
(195, 'F1234', 'Sapphire', 'Màu Xám', 'Nam', 'Dây Da', 'Đồng Hồ Kim Loại', 2, 1, '../Image/Smart_Watches/apple3.jpg', 'Smart_Watches'),
(199, 'F!123445', 'Sekio', 'Đen', 'Nam', 'Dây Da', 'Đồng Hồ Kim Loại', 2000000, 1, '../Image/men_watches/men.webp', 'men_watches'),
(200, 'F', 'Sekio', 'Đen', 'Nam', 'Dây Da', 'Đồng Hồ Kim Loại', 120000, 1, '../Image/Smart_Watches/apple4.jpg', 'Smart_Watches');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `id_Product` int(11) NOT NULL,
  `ammount` int(11) NOT NULL,
  `NumberSale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`),
  ADD UNIQUE KEY `indenityCard` (`indenityCard`) USING HASH,
  ADD KEY `userName` (`userName`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `idUserName` (`idUserName`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oderID`),
  ADD KEY `idCustomer` (`idCustomer`);

--
-- Chỉ mục cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`item_iD`),
  ADD KEY `oderID` (`oderID`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD KEY `id_Product` (`id_Product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `idUserName` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `oderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `item_iD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `login` (`userName`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idCustomer`) REFERENCES `customer` (`idCustomer`);

--
-- Các ràng buộc cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`oderID`) REFERENCES `order` (`oderID`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`productid`);

--
-- Các ràng buộc cho bảng `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`id_Product`) REFERENCES `product` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
