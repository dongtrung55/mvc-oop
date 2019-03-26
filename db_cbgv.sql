-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2019 lúc 10:06 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_cbgv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblcbgv`
--

CREATE TABLE `tblcbgv` (
  `cbgv_id` int(11) NOT NULL,
  `cbgv_name` varchar(30) NOT NULL,
  `cbgv_birthday` date NOT NULL,
  `cbgv_address` varchar(300) NOT NULL,
  `cbgv_luongcung` double NOT NULL,
  `cbgv_luongthuong` double NOT NULL,
  `cbgv_luongphat` double NOT NULL,
  `cbgv_luonglinhthuc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblcbgv`
--

INSERT INTO `tblcbgv` (`cbgv_id`, `cbgv_name`, `cbgv_birthday`, `cbgv_address`, `cbgv_luongcung`, `cbgv_luongthuong`, `cbgv_luongphat`, `cbgv_luonglinhthuc`) VALUES
(1, 'Phạm Trung Đông', '1997-09-05', 'Tân Cương - Vĩnh Tường - Vĩnh Phúc', 6000000, 1000000, 100000, 6900000),
(2, 'Nguyễn Thị Lan', '1996-11-22', 'Lý Nhân - Hà Nam', 6000000, 1000000, 100000, 6900000),
(3, 'Vũ Thị Loan', '1995-08-16', 'Ninh Bình', 5000000, 1000000, 100000, 5900000),
(4, 'Bùi Trung Kiên', '1993-05-10', 'Hà Nội, Việt Nam', 10000000, 2000000, 500000, 11500000),
(5, 'Trần Trịnh Quỳnh Lâm', '1997-01-01', 'Hà Nội, Việt Nam', 5000000, 1000000, 500000, 5500000),
(6, 'Đào Văn Huy', '1995-01-01', 'Hà Nội, Việt Nam', 5000000, 500000, 200000, 5300000),
(7, 'Nguyễn Thị Thu Thảo', '1997-01-01', 'Đan Phượng, Hà Nội, Việt Nam', 5000000, 1000000, 700000, 5300000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblcbgv`
--
ALTER TABLE `tblcbgv`
  ADD PRIMARY KEY (`cbgv_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblcbgv`
--
ALTER TABLE `tblcbgv`
  MODIFY `cbgv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
