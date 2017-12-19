-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 08:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qlhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(10) NOT NULL,
  `Madh` varchar(255) NOT NULL,
  `Masp` varchar(255) DEFAULT NULL,
  `Soluong` int(10) DEFAULT NULL,
  `Mota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `Madh` varchar(255) NOT NULL,
  `Matv` varchar(255) NOT NULL,
  `Sdt` int(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Ngaytao` varchar(255) DEFAULT NULL,
  `Tennguoinhan` varchar(255) DEFAULT NULL,
  `Tongtien` double DEFAULT NULL,
  `Trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `Maloai` varchar(255) NOT NULL,
  `Tenloai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`Maloai`, `Tenloai`) VALUES
('choa', 'cong hoa'),
('hbinh', 'hoa binh'),
('hbo', 'hoa bo'),
('hcb', 'hoa chia buon'),
('hcm', 'hoa chuc mung'),
('hgio', 'hoa gio'),
('hkt', 'hoa khai truong'),
('hsk', 'hoa su kien'),
('hsn', 'hoa sinh nhat'),
('htt', 'hoa trang tri'),
('hty', 'hoa tinh yeu'),
('hvp', 'hoa van phong'),
('vhoa', 'vong hoa');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `Mancc` varchar(255) NOT NULL,
  `Tenncc` varchar(255) DEFAULT NULL,
  `Thongtin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`Mancc`, `Tenncc`, `Thongtin`) VALUES
('ncc1', 'HCM', 'than thien'),
('ncc2', 'HN', 'gia mem');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `Maquyen` varchar(255) NOT NULL,
  `Tenquyen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`Maquyen`, `Tenquyen`) VALUES
('admin', 'admin'),
('tv', 'thanh vien');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Masp` varchar(255) NOT NULL,
  `ID` int(10) NOT NULL,
  `Mancc` varchar(255) NOT NULL,
  `Maloai` varchar(255) NOT NULL,
  `Tensp` varchar(255) DEFAULT NULL,
  `Mota` text,
  `Hinhanh` varchar(255) DEFAULT NULL,
  `Soluong` int(100) DEFAULT NULL,
  `Dongia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Masp`, `ID`, `Mancc`, `Maloai`, `Tensp`, `Mota`, `Hinhanh`, `Soluong`, `Dongia`) VALUES
('spch1', 1, 'ncc1', 'choa', 'cong hoa', 'dep va doc', 'conghoa1', 10, 200000),
('spch2', 2, 'ncc1', 'choa', 'cong hoa 2', 'dep va la', 'conghoa2', 5, 300000),
('sphbinh7', 7, 'ncc1', 'hbinh', 'hoa binh 7', 'dep va sang trong', 'hoa7', 7, 1350000),
('sphbo10', 10, 'ncc2', 'hbo', 'hoa bo 10', 'don gian ma dep', 'hoa10', 4, 79000),
('sphcb27', 27, 'ncc1', 'hcb', 'hoa chia buon 27', 'trang trong va lich su', 'hoa27', 2, 1699000),
('sphcm6', 6, 'ncc2', 'hcm', 'hoa chuc mung 6', 'dep va sang trong', 'hoa6', 2, 599000),
('sphgio20', 20, 'ncc1', 'hgio', 'gio hoa 20', 'dep', 'hoa20', 3, 1500000),
('sphkt2', 2, 'ncc2', 'hkt', 'hoa khai truong 2', 'trang trong', 'hoa2', 6, 499000),
('sphsk1', 1, 'ncc2', 'hsk', 'hoa su kien 1', 'dep, trang trong', 'hoa1', 12, 1990000),
('sphsn1', 1, 'ncc2', 'hsn', 'hoa sinh nhat 1', 'dep', 'hoa1', 3, 99000),
('sphtt7', 7, 'ncc1', 'htt', 'hoa trang tri 7', 'dep va bat mat', 'hoa7', 10, 199000),
('sphty1', 1, 'ncc1', 'hty', 'hoa tinh yeu 1', 'lang mang', 'hoa1', 15, 1000000),
('sphvp2', 2, 'ncc1', 'hvp', 'hoa van phong 2', 'dep, trang trong', 'hoa2', 6, 299000),
('spvh1', 1, 'ncc2', 'vhoa', 'vong hoa 1', 'de thuong', 'vonghoa1', 3, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `Matv` varchar(255) NOT NULL,
  `Tentv` varchar(255) DEFAULT NULL,
  `Taikhoan` varchar(255) DEFAULT NULL,
  `Matkhau` varchar(255) DEFAULT NULL,
  `Sdt` int(10) DEFAULT NULL,
  `Diachi` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Maquyen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Masp` (`Masp`),
  ADD KEY `FKChiTietDon469125` (`Madh`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`Madh`),
  ADD KEY `FKDonHang741136` (`Matv`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`Maloai`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`Mancc`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`Maquyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`),
  ADD KEY `FKSanPham15214` (`Maloai`),
  ADD KEY `FKSanPham562565` (`Mancc`),
  ADD KEY `FKSanPham970221` (`ID`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`Matv`),
  ADD UNIQUE KEY `Maquyen` (`Maquyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FKChiTietDon469125` FOREIGN KEY (`Madh`) REFERENCES `donhang` (`Madh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`Masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FKDonHang741136` FOREIGN KEY (`Matv`) REFERENCES `thanhvien` (`Matv`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FKSanPham15214` FOREIGN KEY (`Maloai`) REFERENCES `loai` (`Maloai`),
  ADD CONSTRAINT `FKSanPham562565` FOREIGN KEY (`Mancc`) REFERENCES `nhacungcap` (`Mancc`);

--
-- Constraints for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`Maquyen`) REFERENCES `phanquyen` (`Maquyen`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
