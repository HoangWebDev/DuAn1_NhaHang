-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `golden_spoon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `ID` int(10) NOT NULL,
  `ID_User` int(10) NOT NULL,
  `DateTime` varchar(200) NOT NULL,
  `Guests` int(10) NOT NULL DEFAULT 0 COMMENT 'Số lượng khách',
  `Deposit` double(10,3) NOT NULL DEFAULT 0.000 COMMENT 'Tiền cọc',
  `Status` varchar(10) NOT NULL,
  `Note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`ID`, `ID_User`, `DateTime`, `Guests`, `Deposit`, `Status`, `Note`) VALUES
(5, 5, '2023-11-22 02:58:34', 12, 56000.000, 'Thành công', ''),
(6, 4, '2023-11-22 15:26:20', 7, 350000.000, 'Thành công', ''),
(8, 5, '2023-11-23 19:32:23', 12, 12.000, 'Thành công', ''),
(18, 4, '0000-00-00 00:00:00', 9, 500.000, '', 'k,jmhgn'),
(19, 4, '0000-00-00 00:00:00', 10, 500.000, '', 'Hahahaaaa'),
(24, 5, '11/28/2023 9:22 PM', 15, 500.000, '', 'Ba bàn đi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailbooking`
--

CREATE TABLE `detailbooking` (
  `ID` int(10) NOT NULL,
  `ID_Booking` int(10) NOT NULL,
  `ID_Food` int(10) NOT NULL,
  `NumberDishes` int(10) NOT NULL DEFAULT 0 COMMENT 'Số lượng món ăn',
  `PriceDishes` double(10,3) NOT NULL DEFAULT 0.000 COMMENT 'Giá món ăn',
  `DateTime` varchar(200) NOT NULL,
  `Total` double(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `detailbooking`
--

INSERT INTO `detailbooking` (`ID`, `ID_Booking`, `ID_Food`, `NumberDishes`, `PriceDishes`, `DateTime`, `Total`) VALUES
(1, 5, 18, 3, 20000.000, '2023-11-21 21:02:48', 60000.00),
(2, 5, 8, 4, 25000.000, '2023-11-21 21:04:24', 100000.00),
(3, 5, 9, 2, 50000.000, '2023-11-21 21:04:56', 100000.00),
(4, 5, 19, 5, 20000.000, '2023-11-21 21:05:27', 10.00),
(5, 5, 14, 1, 1000000.000, '2023-11-21 21:06:00', 1000000.00),
(6, 6, 2, 5, 2000.000, '2023-11-22 09:26:40', 100000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `ID` int(10) NOT NULL,
  `ID_TypeFood` int(10) NOT NULL,
  `FoodName` varchar(100) NOT NULL,
  `FoodPrice` double(10,3) NOT NULL DEFAULT 0.000,
  `FoodImage` varchar(200) NOT NULL,
  `FoodDescribe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`ID`, `ID_TypeFood`, `FoodName`, `FoodPrice`, `FoodImage`, `FoodDescribe`) VALUES
(2, 1, 'Camus V.S.O.P', 2100000.000, 'drink2.jpg', 'Camus vsop - Món quà tặng độc đáo, sang trọng cho dịp lễ, tết\r\n\r\nChỉ còn vài tháng nữa các dịp Lễ Tết sẽ xuất hiện rất nhiều, vấn đề mua gì để biếu sếp, biếu bố mẹ và gia đình vợ luôn được nh'),
(3, 1, 'RÉMY MARTIN 1738 ', 2400000.000, 'drink3.jpg', 'Rémy Martin 1738 Limited Editon 2023 là một phiên bản kỉ niệm đặc biệt. Phiên bản này được trình làng năm 1738. Đây là thời điểm mà vua Louis ban cho nhà chưng nhất Remy đặc ân được mở rộng vườn nho c'),
(4, 1, 'Chabot Armagnac Gold Goose Extra', 6400000.000, 'drink4.jpg', 'Armagnac là loại Brandy cao tuổi nhất ở Pháp. Theo các tài liệu còn lưu lại thì Armagnac được chưng cất từ đầu thế kỷ 15, là sản phẩm của vùng Tây-Nam nước Pháp. Nó sở hữu xuất xứ khác nhau theo 3 vùn'),
(5, 1, 'Martell Red Barrel VSOP ', 2200000.000, 'drink5.jpg', 'Martell Red Barrel VSOP được ủ trong thùng màu đỏ lâu năm của Cognac\r\n\r\nKhi một cái thùng được gọi là Red, một liên quan đến màu đỏ của gỗ lâu năm, nó đã trưởng thành ít nhất hai năm và lên đến tám nă'),
(6, 1, 'Bisquit & Dubouche XO', 1200000.000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(7, 1, 'Courvoisier Extra Initiale', 4200000.000, 'drink7.jpg', 'Đây là một sự pha trộn đáng chú ý của eaux-de-vie cực kỳ lâu đời từ Grande Champagne và Borderies crus. Tinh thần trẻ nhất được sử dụng trong quá trình đóng chai này tối thiểu là 30 năm, với loại lâu '),
(8, 1, 'Baron Otard XO Cognac', 3200000.000, 'drink7.jpg', 'Bài giới thiệu trước đây về rượu cognac hàng đầu của Otard\'s Extra 1795, một sự pha trộn chủ yếu của rượu Grande Champagne có độ tuổi từ 30 đến 50 năm.'),
(9, 1, 'Bisquit & Dubouche XO', 2200000.000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(10, 2, 'Súp hải sản', 100000.000, 'khaivi1.jpg', 'Một hương vị đậm đà'),
(11, 2, 'Sushi hải sản', 200000.000, 'specials-1.png', 'Cá hồi tươi sống'),
(13, 2, 'Salad mấm cải', 200000.000, 'khaivi4.jpg', 'Hương vị chua ngọt lạ miệng'),
(14, 2, 'Mực ống', 300000.000, 'khaivi5.jpg', 'Hương vị chua ngọt lạ miệng'),
(15, 2, 'Đậu que chiên', 300000.000, 'khaivi6.jpg', 'Hương vị chua ngọt lạ miệng'),
(16, 2, 'Nộm sứa', 300000.000, 'khaivi7.jpg', 'Hương vị chua ngọt lạ miệng'),
(17, 2, 'Nộm củ quả', 300000.000, 'khaivi8.jpg', 'Hương vị chua ngọt lạ miệng'),
(18, 3, 'Ba chỉ bò Mỹ', 500000.000, 'food1.jpg', 'Hương vị chua ngọt lạ miệng'),
(19, 3, 'Bẹ sữa heo', 500000.000, 'food2.jpg', 'Hương vị chua ngọt lạ miệng'),
(20, 3, 'Cá lăng nướng muối ớt', 500000.000, 'food3.jpg', 'Hương vị chua ngọt lạ miệng'),
(21, 3, 'Gan ngỗng áp chão', 500000.000, 'food4.jpg', 'Hương vị chua ngọt lạ miệng'),
(22, 3, 'Cá tuyết áp chảo', 500000.000, 'food5.jpg', 'Hương vị chua ngọt lạ miệng'),
(23, 3, 'Mì Ý Đậu Hủ', 500000.000, 'food6.jpg', 'Hương vị chua ngọt lạ miệng'),
(24, 3, 'Hào nướng bơ tỏi', 500000.000, 'food7.jpg', 'Hương vị chua ngọt lạ miệng'),
(25, 3, 'Tôm hùm sốt bơ', 500000.000, 'food8.jpg', 'Hương vị chua ngọt lạ miệng'),
(26, 2, 'Salad Trộn', 2000000.000, 'caesar.jpg', 'Hương Vị Tuyệt Vời');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_food`
--

CREATE TABLE `type_food` (
  `ID` int(10) NOT NULL,
  `Name_TypeFood` varchar(100) NOT NULL,
  `Img_TypeFood` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type_food`
--

INSERT INTO `type_food` (`ID`, `Name_TypeFood`, `Img_TypeFood`) VALUES
(1, 'Đồ Uống', ''),
(2, 'Khai Vị', ''),
(3, 'Món Chính', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL DEFAULT 0,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Role` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1. Admin\r\n2. Khách Hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `FullName`, `Username`, `Password`, `PhoneNumber`, `Address`, `Email`, `Role`) VALUES
(4, 'Golden Spoon', 'admin', '123456', 911367894, 'CVPM.Quan Trung, Q.12, TP.Hồ Chí Minh', 'goldenspoon@gmail.com', 1),
(5, 'User1', 'user1', '123', 0, '', '', 0),
(6, 'HTCPT', 'user3', '789', 9097508, 'Huyện Cành Lá, Xã Cành Cây', 'thichvacham@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_booking_user` (`ID_User`);

--
-- Chỉ mục cho bảng `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_detailbooking_booking` (`ID_Booking`),
  ADD KEY `fk_detailbooking_food` (`ID_Food`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_monan_loaimonan` (`ID_TypeFood`);

--
-- Chỉ mục cho bảng `type_food`
--
ALTER TABLE `type_food`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `detailbooking`
--
ALTER TABLE `detailbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `type_food`
--
ALTER TABLE `type_food`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID`);

--
-- Các ràng buộc cho bảng `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD CONSTRAINT `fk_detailbooking_booking` FOREIGN KEY (`ID_Booking`) REFERENCES `booking` (`ID`),
  ADD CONSTRAINT `fk_detailbooking_food` FOREIGN KEY (`ID_Food`) REFERENCES `food` (`ID`);

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `fk_food_typefood` FOREIGN KEY (`ID_TypeFood`) REFERENCES `type_food` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
