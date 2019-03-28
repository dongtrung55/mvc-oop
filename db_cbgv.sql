-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2019 lúc 04:42 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

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
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `birthDay` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `luongCung` double NOT NULL,
  `luongThuong` double NOT NULL,
  `luongPhat` double NOT NULL,
  `luongLinhThuc` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblcbgv`
--

INSERT INTO `tblcbgv` (`id`, `name`, `birthDay`, `address`, `luongCung`, `luongThuong`, `luongPhat`, `luongLinhThuc`) VALUES
(1, 'Phạm Trung Đông', '1997-09-05', 'Tân Cương - Vĩnh Tường - Vĩnh Phúc', 6000000, 1000000, 100000, 6900000),
(2, 'Nguyễn Thị Lan', '1996-11-22', 'Lý Nhân - Hà Nam', 6000000, 1000000, 100000, 6900000),
(3, 'Vũ Thị Loan', '1995-08-16', 'Ninh Bình', 5000000, 1000000, 100000, 5900000),
(4, 'Bùi Trung Kiên', '1993-05-10', 'Hà Nội, Việt Nam', 10000000, 2000000, 500000, 11500000),
(5, 'Trần Trịnh Quỳnh Lâm', '1997-01-01', 'Hà Nội, Việt Nam', 5000000, 1000000, 500000, 5500000),
(7, 'Nguyễn Thị Thu Thảo', '2019-03-15', 'Đan Phượng, Hà Nội, Việt Nam', 5000000, 100000, 30000, 5070000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblcbgv`
--
ALTER TABLE `tblcbgv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblcbgv`
--
ALTER TABLE `tblcbgv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
