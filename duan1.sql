-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID_Booking` int(10) NOT NULL,
  `ID_User` int(10) NOT NULL,
  `TableNumber` int(10) NOT NULL DEFAULT 0,
  `Seats` int(10) NOT NULL DEFAULT 0,
  `Image` varchar(200) NOT NULL,
  `Guests` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailbooking`
--

CREATE TABLE `detailbooking` (
  `ID_DetailBooking` int(10) NOT NULL,
  `ID_Booking` int(10) NOT NULL,
  `ID_Food` int(10) NOT NULL,
  `NumberDishes` int(10) NOT NULL DEFAULT 0,
  `PriceDishes` double(10,3) NOT NULL DEFAULT 0.000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID_Food` int(10) NOT NULL,
  `ID_TypeFood` int(10) NOT NULL,
  `FoodName` varchar(100) NOT NULL,
  `FoodPrice` double(10,3) NOT NULL DEFAULT 0.000,
  `FoodImage` varchar(200) NOT NULL,
  `Describe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID_Food`, `ID_TypeFood`, `FoodName`, `FoodPrice`, `FoodImage`, `Describe`) VALUES
(1, 1, 'HENNESSY VSOP RED DRAGON ', 1800000.000, 'drink1.jpg', 'Kể từ năm 1765, Maison Hennessy đã hoàn thiện nghệ thuật làm rượu cognac, một truyền thống được duy trì qua tám thế hệ bậc thầy pha chế rượu cognac. Di sản của sự cởi mở về văn hóa đã giúp Maison Henn'),
(2, 1, 'Camus V.S.O.P', 2100000.000, 'drink2.jpg', 'Camus vsop - Món quà tặng độc đáo, sang trọng cho dịp lễ, tết\r\n\r\nChỉ còn vài tháng nữa các dịp Lễ Tết sẽ xuất hiện rất nhiều, vấn đề mua gì để biếu sếp, biếu bố mẹ và gia đình vợ luôn được nh'),
(3, 1, 'RÉMY MARTIN 1738 ', 2400000.000, 'drink3.jpg', 'Rémy Martin 1738 Limited Editon 2023 là một phiên bản kỉ niệm đặc biệt. Phiên bản này được trình làng năm 1738. Đây là thời điểm mà vua Louis ban cho nhà chưng nhất Remy đặc ân được mở rộng vườn nho c'),
(4, 1, 'Chabot Armagnac Gold Goose Extra', 6400000.000, 'drink4.jpg', 'Armagnac là loại Brandy cao tuổi nhất ở Pháp. Theo các tài liệu còn lưu lại thì Armagnac được chưng cất từ đầu thế kỷ 15, là sản phẩm của vùng Tây-Nam nước Pháp. Nó sở hữu xuất xứ khác nhau theo 3 vùn'),
(5, 1, 'Martell Red Barrel VSOP ', 2200000.000, 'drink5.jpg', 'Martell Red Barrel VSOP được ủ trong thùng màu đỏ lâu năm của Cognac\r\n\r\nKhi một cái thùng được gọi là Red, một liên quan đến màu đỏ của gỗ lâu năm, nó đã trưởng thành ít nhất hai năm và lên đến tám nă'),
(6, 1, 'Bisquit & Dubouche XO', 1200000.000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(7, 1, 'Courvoisier Extra Initiale', 4200000.000, 'drink7.jpg', 'Đây là một sự pha trộn đáng chú ý của eaux-de-vie cực kỳ lâu đời từ Grande Champagne và Borderies crus. Tinh thần trẻ nhất được sử dụng trong quá trình đóng chai này tối thiểu là 30 năm, với loại lâu '),
(8, 1, 'Baron Otard XO Cognac', 3200000.000, 'drink7.jpg', 'Bài giới thiệu trước đây về rượu cognac hàng đầu của Otard\'s Extra 1795, một sự pha trộn chủ yếu của rượu Grande Champagne có độ tuổi từ 30 đến 50 năm.'),
(9, 1, 'Bisquit & Dubouche XO', 2200000.000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(10, 2, 'Súp hải sản', 100000.000, 'khaivi1.jpg', 'Một hương vị đậm đà'),
(11, 2, 'Sushi hải sản', 200000.000, 'khaivi2.jpg', 'Cá hồi tươi sống'),
(12, 2, 'Salad trộn', 200000.000, 'khaivi3.jpg', 'Hương vị chua ngọt lạ miệng'),
(13, 2, 'Salad mấm cải', 200000.000, 'khaivi4.jpg', 'Hương vị chua ngọt lạ miệng'),
(14, 2, 'Mực ống', 300000.000, 'khaivi5.jpg', 'Hương vị chua ngọt lạ miệng'),
(15, 2, 'Đậu que chiên', 300000.000, 'khaivi6.jpg', 'Hương vị chua ngọt lạ miệng'),
(16, 2, 'Nộm sứa', 300000.000, 'khaivi7.jpg', 'Hương vị chua ngọt lạ miệng'),
(17, 2, 'Nộm củ quả', 300000.000, 'khaivi8.jpg', 'Hương vị chua ngọt lạ miệng'),
(18, 3, 'Ba chỉ bò Mỹ', 500000.000, 'mon1.jpg', 'Hương vị chua ngọt lạ miệng'),
(19, 3, 'Bẹ sữa heo', 500000.000, 'mon2.jpg', 'Hương vị chua ngọt lạ miệng'),
(20, 3, 'Cá lăng nướng muối ớt', 500000.000, 'mon3.jpg', 'Hương vị chua ngọt lạ miệng'),
(21, 3, 'Gan ngỗng áp chão', 500000.000, 'mon4.jpg', 'Hương vị chua ngọt lạ miệng'),
(22, 3, 'Cá tuyết áp chảo', 500000.000, 'mon5.jpg', 'Hương vị chua ngọt lạ miệng'),
(23, 3, 'Nem thịt cua', 500000.000, 'mon6.jpg', 'Hương vị chua ngọt lạ miệng'),
(24, 3, 'Hào nướng bơ tỏi', 500000.000, 'mon7.jpg', 'Hương vị chua ngọt lạ miệng'),
(25, 3, 'Tôm hùm sốt bơ', 500000.000, 'mon8.jpg', 'Hương vị chua ngọt lạ miệng');

-- --------------------------------------------------------

--
-- Table structure for table `type_food`
--

CREATE TABLE `type_food` (
  `ID_LoaiMonAn` int(10) NOT NULL,
  `TenLoai` varchar(100) NOT NULL,
  `HinhAnh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_food`
--

INSERT INTO `type_food` (`ID_LoaiMonAn`, `TenLoai`, `HinhAnh`) VALUES
(1, 'Đồ Uống', ''),
(2, 'Khai Vị', ''),
(3, 'Món Chính', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(10) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` int(10) NOT NULL DEFAULT 0,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID_Booking`),
  ADD KEY `fk_booking_user` (`ID_User`);

--
-- Indexes for table `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD PRIMARY KEY (`ID_DetailBooking`),
  ADD KEY `fk_detailbooking_booking` (`ID_Booking`),
  ADD KEY `fk_detailbooking_food` (`ID_Food`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID_Food`),
  ADD KEY `fk_monan_loaimonan` (`ID_TypeFood`);

--
-- Indexes for table `type_food`
--
ALTER TABLE `type_food`
  ADD PRIMARY KEY (`ID_LoaiMonAn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_Booking` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailbooking`
--
ALTER TABLE `detailbooking`
  MODIFY `ID_DetailBooking` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID_Food` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `type_food`
--
ALTER TABLE `type_food`
  MODIFY `ID_LoaiMonAn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD CONSTRAINT `fk_detailbooking_booking` FOREIGN KEY (`ID_Booking`) REFERENCES `booking` (`ID_Booking`),
  ADD CONSTRAINT `fk_detailbooking_food` FOREIGN KEY (`ID_Food`) REFERENCES `food` (`ID_Food`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `fk_monan_loaimonan` FOREIGN KEY (`ID_TypeFood`) REFERENCES `type_food` (`ID_LoaiMonAn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
