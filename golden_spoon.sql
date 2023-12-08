-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 09:02 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

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
(19, 4, '0000-00-00 00:00:00', 10, 500.000, '', 'Hahahaaaa'),
(24, 5, '11/28/2023 9:22 PM', 15, 500.000, '', 'Ba bàn đi'),
(75, 12, '11/29/2023 2:27 AM', 10, 500.000, '', 'qua met'),
(76, 12, '12/02/2023 1:15 AM', 0, 500.000, '', 'ngon lannhf hết dum cai'),
(85, 5, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho'),
(87, 5, '11/29/2023 9:25 PM', 100, 500.000, '', 'hhhhhhh'),
(88, 21, '11/28/2023 9:22 PM', 9, 500.000, '', 'Cho'),
(89, 21, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho'),
(90, 22, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho 1 bàn'),
(91, 23, '', 0, 500.000, '', ''),
(92, 5, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho 1 ban'),
(93, 6, '', 10, 500.000, '', 'Cho 1 ban'),
(94, 6, '', 10, 500.000, '', 'Cho 1 ban'),
(95, 6, '', 10, 500.000, '', 'Cho 1 ban'),
(96, 6, '', 10, 500.000, '', 'Cho 1 ban'),
(97, 6, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho 1 ban'),
(98, 6, '11/28/2023 9:22 PM', 10, 500.000, '', 'HHHHHHH'),
(99, 6, '12/08/2023 2:05 PM', 10, 500.000, '', 'Cho 1ban'),
(100, 6, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho 1 ban'),
(101, 6, '11/28/2023 9:22 PM', 10, 500.000, '', 'HHHHHHH'),
(102, 6, '12/30/2023 2:11 PM', 10, 500.000, '', 'Cho 1 ban'),
(103, 6, '11/28/2023 9:22 PM', 100, 500.000, '', 'hhhhhhh'),
(104, 24, '11/28/2023 9:22 PM', 10, 500.000, '', 'HHHHHHH'),
(105, 24, '11/28/2023 9:22 PM', 10, 500.000, '', 'Cho 10 ban');

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
(6, 6, 2, 5, 2000.000, '2023-11-22 09:26:40', 100000.00),
(132, 75, 9, 1, 2200000.000, '', 0.00),
(133, 75, 26, 1, 2000000.000, '', 0.00),
(134, 76, 9, 1, 2200000.000, '', 0.00),
(135, 76, 26, 1, 2000000.000, '', 0.00),
(136, 76, 8, 1, 3200000.000, '', 0.00),
(143, 85, 7, 1, 4200000.000, '', 0.00),
(145, 87, 7, 1, 4200000.000, '', 0.00),
(146, 88, 7, 1, 4200000.000, '', 0.00),
(147, 89, 7, 1, 4200000.000, '', 0.00),
(148, 90, 9, 1, 2200000.000, '', 0.00),
(149, 91, 3, 1, 2400000.000, '', 0.00),
(150, 91, 9, 1, 2200000.000, '', 0.00),
(151, 91, 9, 1, 2200000.000, '', 0.00),
(152, 91, 8, 1, 3200000.000, '', 0.00),
(153, 98, 9, 1, 0.000, '', 0.00),
(154, 98, 26, 1, 0.000, '', 0.00),
(155, 98, 5, 1, 2200000.000, '', 0.00),
(157, 103, 25, 1, 500000.000, '', 0.00),
(158, 104, 25, 1, 500000.000, '', 0.00),
(159, 105, 25, 1, 500000.000, '', 0.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `ID` int(10) NOT NULL,
  `ID_TypeFood` int(10) NOT NULL,
  `FoodName` varchar(100) NOT NULL,
  `FoodPrice` int(10) NOT NULL DEFAULT 0,
  `FoodImage` varchar(200) NOT NULL,
  `FoodDescribe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`ID`, `ID_TypeFood`, `FoodName`, `FoodPrice`, `FoodImage`, `FoodDescribe`) VALUES
(2, 1, 'Camus V.S.O.P', 2100000, 'drink2.jpg', 'Camus vsop - Món quà tặng độc đáo, sang trọng cho dịp lễ, tết.\n\nChỉ còn vài tháng nữa các dịp Lễ Tết sẽ xuất hiện rất nhiều, vấn đề mua gì để biếu sếp, biếu bố mẹ và gia đình vợ luôn được nh'),
(3, 1, 'RÉMY MARTIN 1738 ', 2400000, 'drink3.jpg', 'Rémy Martin 1738 Limited Editon 2023 là một phiên bản kỉ niệm đặc biệt. Phiên bản này được trình làng năm 1738. Đây là thời điểm mà vua Louis ban cho nhà chưng nhất Remy đặc ân được mở rộng vườn nho c'),
(4, 1, 'Chabot Armagnac Gold Goose Extra', 6400000, 'drink4.jpg', 'Armagnac là loại Brandy cao tuổi nhất ở Pháp. Theo các tài liệu còn lưu lại thì Armagnac được chưng cất từ đầu thế kỷ 15, là sản phẩm của vùng Tây-Nam nước Pháp.\r\n'),
(5, 1, 'Martell Red Barrel VSOP ', 2200000, 'drink5.jpg', 'Martell Red Barrel VSOP được ủ trong thùng màu đỏ lâu năm của Cognac\n\nKhi một cái thùng được gọi là Red, một liên quan đến màu đỏ của gỗ lâu năm, nó đã trưởng thành ít nhất hai năm và lên đến tám nă'),
(6, 1, 'Bisquit & Dubouche XO', 1200000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(7, 1, 'Courvoisier Extra Initiale', 4200000, 'drink7.jpg', 'Đây là một sự pha trộn đáng chú ý của eaux-de-vie cực kỳ lâu đời từ Grande Champagne và Borderies crus. Tinh thần trẻ nhất được sử dụng trong quá trình đóng chai này tối thiểu là 30 năm, với loại lâu '),
(8, 1, 'Baron Otard XO Cognac', 3200000, 'drink7.jpg', 'Bài giới thiệu trước đây về rượu cognac hàng đầu của Otard\'s Extra 1795, một sự pha trộn chủ yếu của rượu Grande Champagne có độ tuổi từ 30 đến 50 năm.'),
(9, 1, 'Bisquit & Dubouche XO', 2200000, 'drink6.jpg', 'Một hương vị mượt mà và xa hoa dành cho những người yêu thích rượu cognac thực sự. Được chế tạo bằng cách sử dụng chủ yếu loại rượu eaux-de-vie tốt nhất từ nhà nghiền Grande và Petite Champagne. Tận h'),
(10, 2, 'Súp hải sản', 100000, 'khaivi1.jpg', 'Súp hải sản là một món ăn phổ biến trên khắp thế giới, đặc biệt được yêu thích trong các nền ẩm thực có biển lớn. Món súp này thường kết hợp giữa hương vị đậm đà của hải sản và sự tươi mới của các loạ'),
(11, 2, 'Sushi hải sản', 200000, 'specials-1.png', 'Món sushi, một biểu tượng của ẩm thực Nhật Bản, là một tuyệt tác nghệ thuật ẩm thực kết hợp giữa hương vị, màu sắc và sự tinh tế. Thành phần chính của sushi bao gồm cơm trái cây được pha chế với giấm '),
(13, 2, 'Salad mấm cải', 200000, 'khaivi4.jpg', 'Món salad là một biểu tượng của ẩm thực lành mạnh và sự sáng tạo. Salad không chỉ đơn giản là một bữa ăn nhẹ, mà còn là một tác phẩm nghệ thuật, nơi sự đa dạng của nguyên liệu và hương vị tạo nên một '),
(14, 2, 'Mực ống', 300000, 'khaivi5.jpg', 'Món mực ống là một món biểu tượng trong ẩm thực, nổi tiếng với hương vị đặc trưng và cách chế biến độc đáo. Món mực ống không chỉ là một món ngon miệng mà còn là một biểu tượng của sự sáng tạo và tinh'),
(15, 2, 'Đậu que chiên', 300000, 'khaivi6.jpg', 'Món đậu que chiên là một món ăn nhẹ phổ biến, thơm ngon và giòn rụm, thường được thưởng thức trong các buổi gặp gỡ bạn bè hoặc làm món nhẹ trước bữa chính. Món đậu que chiên không chỉ là một món ăn ng'),
(16, 2, 'Nộm sứa', 300000, 'khaivi7.jpg', 'Nộm sứa là một món ăn truyền thống phổ biến trong ẩm thực Việt Nam, nổi tiếng với hương vị tươi mới, ngon miệng và chất dinh dưỡng từ sứa biển. Nộm sứa không chỉ là một món ăn hấp dẫn về hương vị mà c'),
(17, 2, 'Nộm củ quả', 300000, 'khaivi8.jpg', 'Nộm củ quả là một món ăn truyền thống rất phổ biến trong ẩm thực nhiều quốc gia, nổi tiếng với sự tươi mới, ngon miệng, và đa dạng về nguyên liệu. Nộm củ quả không chỉ là một món ăn ngon miệng mà còn '),
(18, 3, 'Ba chỉ bò Mỹ', 500000, 'food1.jpg', 'Ba chỉ bò Mỹ là một loại thịt bò được lấy từ vùng cạnh bụng, giữa phần thăn và phần sườn của con bò Mỹ. Đây là một phần thịt nạc, mỡ vừa đủ và thường được ưa chuộng trong nhiều món ăn do hương vị thơm'),
(19, 3, 'Bẹ sữa heo', 500000, 'food2.jpg', 'Ba chỉ bò Mỹ là một loại thịt bò được lấy từ vùng cạnh bụng, giữa phần thăn và phần sườn của con bò Mỹ. Đây là một phần thịt nạc, mỡ vừa đủ và thường được ưa chuộng trong nhiều món ăn do hương vị thơm'),
(20, 3, 'Cá lăng nướng muối ớt', 500000, 'food3.jpg', 'Cá lăng nướng muối ớt là một món ăn biển phổ biến và ngon miệng, kết hợp hương vị tinh tế của cá lăng với hương thơm của muối và ớt. Món cá lăng nướng muối ớt thường mang đến hương vị biển mặn mặn, ng'),
(21, 3, 'Gan ngỗng áp chão', 500000, 'food4.jpg', 'Gan ngỗng áp chảo là một món ăn ngon miệng, thường được chế biến nhanh chóng trên chảo để giữ được độ mềm và hương vị tốt nhất.  Món gan ngỗng áp chảo thường mang lại hương vị ngon miệng, đậm đà và có'),
(22, 3, 'Cá tuyết áp chảo', 500000, 'food5.jpg', 'Cá tuyết áp chảo là một món ăn ngon miệng, thường được chế biến nhanh chóng trên chảo để giữ được độ mềm và hương vị tốt nhất.  Món cá tuyết áp chảo thường mang lại hương vị ngon miệng, đậm đà và có đ'),
(23, 3, 'Mì Ý Đậu Hủ', 500000, 'food6.jpg', 'Mỳ Ý là một loại mỳ truyền thống của người Ý, nổi tiếng với hình dáng đặc trưng và sự linh hoạt trong việc kết hợp với nhiều loại sốt và nhân khác nhau. Mỳ Ý không chỉ nổi tiếng với hương vị độc đáo m'),
(24, 3, 'Hào nướng bơ tỏi', 500000, 'food7.jpg', 'Hàu nướng là một món biển phổ biến và ngon miệng, thường được chế biến nhanh chóng để giữ độ tươi ngon và hương vị tinh tế của hàu. Hàu nướng thường mang lại hương vị thơm ngon, giòn giòn, và độ ngon '),
(25, 3, 'Tôm hùm sốt bơ', 500000, 'food8.jpg', 'Tôm hùm sốt bơ là một món biển hấp dẫn, thường được chế biến với sốt bơ thơm ngon.  Tôm hùm sốt bơ thường mang lại hương vị thơm ngon, béo ngậy và hấp dẫn, là một món biển hấp dẫn trong ẩm thực.'),
(26, 2, 'Salad Trộn', 2000000, 'caesar.jpg', 'Salad trộn là một món ăn nhẹ và dinh dưỡng, kết hợp giữa các loại rau sống, rau củ, có thể là thực phẩm động vật như thịt, cá, tôm hoặc thực phẩm chay, và được trộn với các loại sốt hoặc dressing.\r\nSa');

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
(6, 'HTCPT', 'user3', '789', 9097508, 'TP.Hồ Chí Minh', 'usercheck@gmail.com', 0),
(12, 'Lê Thanh Phú', 'Phu', '123', 123456, 'Long An', 'longan123@gmail.com', 0),
(21, 'KhachHang', 'goldenspoon83', '123456', 123456789, 'Huyện Cành Lá, Xã Cành Cây', 'h@gmail.vn', 0),
(22, 'KhachHang2', 'goldenspoon78', '123456', 9097508, 'Ở Đây', 'h@gmail.vn', 0),
(23, '', 'goldenspoon71', '123456', 0, '', '', 0),
(24, 'User4', 'user4', '123456789', 988789995, 'Q.12, TP.Hồ Chí Minh', 'user4@gmail.com', 0);

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `detailbooking`
--
ALTER TABLE `detailbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
