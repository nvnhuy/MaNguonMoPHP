-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 23, 2023 lúc 12:17 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `productt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int NOT NULL,
  `Name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `Descc` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `Price` int NOT NULL,
  `img` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Descc`, `Price`, `img`) VALUES
(9, 'NIKON D750 BODY', '- 2 khe cắm SD/ - Vỏ thiết kế chống nước, bụi bặm- Màn hình RGB 3.2-inch, 1.2 triệu điểm ảnh hỗ trợ lật xoay nghiêng- Mới, hệ thống gương mới toanh, cơ cấu màn trập cũng mới- 51 điểm lấy nét / - Tốc độ chụp 6.5 frames/s', 1, '1.jpg'),
(10, 'Canon EOS 5D Mark IV (Body)', '+ Cảm biến: 30MP Full-Frame (30.4 triệu điểm ảnh hữu dụng)+ Chip xử lý hình ảnh: DIGIC 6++ Số điểm nét AF: 61 điểm với điểm lấy nét 41 cross-points+ Dual Pixel RAW', 1232, '2.jpg'),
(11, 'CANON EOS 6D MARK II BODY', '- Cảm biến: 26.2 MP, full-frame, 6.240 x 4.160 pixel\r\n- Bộ xử lý hình ảnh: DIGIC 7\r\n- Màn hình: LCD 3\" cảm ứng, Clear View II, xoay và lật nhiều hướng\r\n- ISO: 100 - 40.000\r\n- Tốc độ màn trập: 1/4.000 giây', 7800000, '3.jpg'),
(12, 'CANON EOS 5D MARK III KIT', '- Bộ cảm biến 22.3MP CMOS Full-Frame\r\n- ISO mở rộng(50-102400)\r\n- Bộ xử lý DiGiC 5\r\n- Chụp liên tiếp 6 hình/giây\r\n- Màn hình 3,2 inch, 1,04 triệu điểm ảnh\r\n- Khe cắm thẻ CF, SDXC', 4700000, '4.jpg'),
(13, 'CANON EOS 5D MARK IV BODY', '+ Cảm biến: 30MP Full-Frame (30.4 triệu điểm ảnh hữu dụng)\r\n+ Chip xử lý hình ảnh: DIGIC 6+\r\n+ Số điểm nét AF: 61 điểm với điểm lấy nét 41 cross-points\r\n+ Dual Pixel RAW', 2100000, '5.jpg'),
(14, 'CANON EOS C300 MARK II (BODY) MỚI (100%) BẢO HÀNH CHÍNH HÃNG 24', '- Cảm biến: CMOS 8.85MP Super 35mm\r\n- Total Pixels: 4206 x 2340\r\n- Effective Pixels: 4096 x 2160\r\n- Độ lớn màn hình LCD: 4 inch\r\n- Định dạng Video: XF-AVC H.264\r\n- Thiết bị lưu trữ: Hỗ trợ thẻ CFast2.0™ và SD\r\n- Cổng kết nối: Microphone, HDMI, USB,Wifi\r\n- Kích thước: 190 x 307 x 362mm', 5500000, '6.jpg'),
(15, 'SONY PXW-Z150 4K', 'Máy quay 4K kiểu cầm tay                        \r\n Cảm biến lớn loại 1 inch Exmor RS CMOS.\r\n- Ống kính góc rộng 29mm, Zoom optical 12x,\r\ncông nghệ Clear Image Zoom 18x (4K) và 24x(HD)                \r\n-  Hỗ trợ 50p(PAL) và 60p(NTSC).\r\n', 7100000, '7.jpg'),
(16, 'MÁY QUAY 4K HDR FDR-AX700 - HÀNG CHÍNH HÃNG BẢO HÀNH TOÀN QUỐC', '- Quay chuyên nghiệp và đa dạng\r\n- Phạm vi lấy nét tự động rộng\r\n- Phản hồi lấy nét tự động nhanh\r\n- Ghi video 4K HDR\r\n- Tự động lấy nét theo pha 273 điểm', 2300000, '8.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
