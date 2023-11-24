-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2023 lúc 10:21 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yummyfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_comment` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_pro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(255) NOT NULL,
  `name_blog` varchar(255) NOT NULL,
  `img_blog` varchar(255) NOT NULL,
  `mota_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `name_blog`, `img_blog`, `mota_blog`) VALUES
(11, 'Tương ớt thịt nướng Hàn Quốc, cơm trộn Hàn Quốc loại nào hấp dẫn?', 'egg.jpg', 'Ssamjang, Gochujang là 2 loại tương ớt ăn thịt nướng Hàn Quốc và cơm trộn Hàn Quốc được nhiều người ưa thích'),
(24, '2 Cách làm bánh donut nướng và chiên ngon, đơn giản tại nhà', 'lamdonut.jpg', 'Hãy cùng YummyFood khám phá ngay công thức làm donut bằng phương pháp chiên và nướng ngay nhé'),
(25, 'Gợi ý cách thực hiện chế độ ăn tập gym giảm cân cho người mới bắt đầu', 'che do giam can.jpg', 'Bạn bắt đầu tập gym giảm cân và cần một chế độ ăn thật hợp lý? Xem qua lưu ý và cách thực hiện chế độ ăn hợp lý trong quá trình tập trong bài viết dưới đây.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `name`) VALUES
(1, 'Tôm'),
(2, 'Mực'),
(3, 'Cá nước ngọt'),
(4, 'Cá nước mặn'),
(47, 'Các loại khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_bill` int(11) NOT NULL,
  `bill_code` varchar(20) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `tel_user` varchar(10) NOT NULL,
  `adress_user` varchar(255) NOT NULL,
  `name_pr` varchar(50) NOT NULL,
  `amount_pr` varchar(50) NOT NULL,
  `size_pr` varchar(50) NOT NULL,
  `total_bill` varchar(50) NOT NULL,
  `status_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_bill`, `bill_code`, `name_user`, `tel_user`, `adress_user`, `name_pr`, `amount_pr`, `size_pr`, `total_bill`, `status_order`) VALUES
(14, 'XIZ5H0KZBM', 'Nguyen dang duc tai', '0368600129', '555', 'Nước cam', '3', 'L', '334000', 1),
(15, 'XIZ5H0KZBM', 'Nguyen dang duc tai', '0368600129', '555', 'Coca cola', '5', 'XL', '334000', 1),
(16, 'XIZ5H0KZBM', 'Nguyen dang duc tai', '0368600129', '555', 'Bánh cam', '6', 'XL', '334000', 1),
(21, '9NYL24U2JR', 'Nguyen dang duc tai', '0368600129', '435', 'Nước tăng lực Redbull', '1', 'M', '13000', 1),
(22, 'HU2M587BAR', 'Hồng Quân Đỗ', '0338976647', 'Bằng Luân Đoan Hùng Phú Thọ', 'Bánh mì nướng muối ớt', '2', 'M', '60000', 1),
(23, 'EGSRX1L35E', 'Hồng Quân Đỗ', '0338976647', 'Bằng Luân Đoan Hùng Phú Thọ', 'Bánh mì nướng muối ớt', '2', 'M', '95000', 1),
(24, 'EGSRX1L35E', 'Hồng Quân Đỗ', '0338976647', 'Bằng Luân Đoan Hùng Phú Thọ', 'Bánh donut', '1', 'XL', '95000', 1),
(25, 'N2TUN445RH', 'Hồng Quân Đỗ', '0338976647', 'Bằng Luân Đoan Hùng Phú Thọ', 'Nước cam', '1', 'M', '12000', 1),
(26, 'DETB27EVG3', '', '', '', 'Nước cam', '1', 'M', '47000', 1),
(27, 'DETB27EVG3', '', '', '', 'Bánh donut', '1', 'M', '47000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pro` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,3) NOT NULL DEFAULT 0.000,
  `amount` int(255) DEFAULT NULL,
  `size` int(50) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pro`, `name`, `price`, `amount`, `size`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(146, 'Mực Lá', 320000.000, 100, 1, 'mực lá.jpg', 'Mực lá tươi sống giá 320k/kg.', 100, 2),
(149, 'Cá Chép', 80000.000, 100, 1, 'cá chép.jpg', 'Cá chép tươi sống giá 80k/kg.', 100, 3),
(152, 'Cá Mè Hoa', 100000.000, 100, 1, 'cá mè.jpg', 'Cá mè hoa tươi sống giá 100k/kg. ', 0, 3),
(154, 'Mực Ống', 380000.000, 100, 1, 'mực ống.jpg', 'Mực ống tươi sống giá 380k/kg.', 0, 2),
(155, 'Tôm Hùm Alaska', 1350000.000, 100, 1, 'tôm hùm.jpg', 'Tôm hùm Alaska nhập khẩu tươi sống giá 1350k/kg.', 100, 1),
(156, 'Tôm Càng Xanh', 350000.000, 100, 1, 'tôm càng xanh.jpg', 'Tôm càng xanh tươi sống giá 350k/kg.', 100, 1),
(158, 'Mực Trứng', 360000.000, 1, 1, 'mực trứng.jpg', 'Mực trứng tươi sống giá 360k/kg.', 0, 2),
(159, 'Ốc Hương', 300000.000, 1000, 1, 'ốc hương.jpg', 'Ốc hương tươi sống giá 300k/kg.', 100, 47),
(160, 'Hàu', 180000.000, 1000, 1, 'hàu.jpg', 'Hàu tươi sống giá 180k/kg. ', 0, 47),
(161, 'Cá Cam Nhật Bản', 390000.000, 100, 1, 'cá cam.png', 'Cá cam Nhật Bản nhập khẩu giá 390k/kg.', 0, 4),
(164, 'Cá Hồi', 500000.000, 100, 1, 'cá hồi.png', 'Cá hồi đông lạnh giá 500k/kg.', 0, 4),
(165, 'Cá Hồng', 400000.000, 100, 1, 'cá hồng.png', 'Cá hồng tươi sống giá 400k/kg.', 0, 4),
(166, 'Tôm He', 600000.000, 100, 1, 'tôm he.jpg', 'Tôm he loại tươi sống giá 600k/kg.', 0, 1),
(167, 'Tôm Sú', 200000.000, 100, 1, 'tôm sú.jpg', 'Tôm sú tươi sống giá 200k/kg.', 100, 1),
(168, 'Sò Huyết', 360000.000, 100, 1, 'sò huyết.jpg', 'Sò huyết tươi sống giá 360k/kg.', 100, 47),
(169, 'Cá Tra ', 350000.000, 100, 1, 'cá tra.jpg', 'Cá tra tươi sống giá 350k/kg', 0, 3),
(170, 'Cá Trắm Cỏ', 99000.000, 100, 1, 'cá trắm cỏ.jpg', 'Cá trắm cỏ tươi sống giá 99k/kg', 0, 3),
(171, 'Bào Ngư', 900000.000, 1000, 1, 'bào ngư.jpg', 'Bào ngư loại to 900k/kg, loại nhỏ giá 600k/kg.', 0, 47),
(172, 'Cá Ngừ Vây Vàng', 890000.000, 100, 1, 'cá ngừ vây vàng.png', 'Cá Ngừ Vây Vàng nhập khẩu tươi sống giá 890k/kg.', 100, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(255) NOT NULL,
  `name_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `name_size`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id_status`, `status_order`) VALUES
(1, 'Đang xử lí'),
(2, 'Đang vận chuyển'),
(3, 'Đã thanh toán'),
(4, 'Hủy hóa đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(34, 'admin', '0000000', 'ductai0201@gmail.com', NULL, NULL, 0),
(36, 'vanthieu', '123456', 'thieu2004@gmailcom', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2022-10-23', 50, '15500000', 25),
(2, '2022-10-22', 55, '25500000', 25),
(3, '2022-11-21', 50, '15600000', 30),
(14, '2021-10-30', 3, '1500000', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `FK_user` (`id_user`),
  ADD KEY `FK_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `lk_status` (`status_order`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`),
  ADD KEY `lk_szie` (`size`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_pro` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_status` FOREIGN KEY (`status_order`) REFERENCES `status` (`id_status`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id_danhmuc`),
  ADD CONSTRAINT `lk_szie` FOREIGN KEY (`size`) REFERENCES `size` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
