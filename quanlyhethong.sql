-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 06:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyhethong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `caythuoc`
--

CREATE TABLE `caythuoc` (
  `id` int(11) NOT NULL,
  `Ten` text NOT NULL,
  `Loai` text NOT NULL,
  `MoTa` text NOT NULL,
  `hinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caythuoc`
--

INSERT INTO `caythuoc` (`id`, `Ten`, `Loai`, `MoTa`, `hinh`) VALUES
(2, 'Bán chi liên', 'vị thuốc', 'thanh nhiệt, thổ huyết, chảy máu mũi, đinh nhọt, vết thương rắn cắn, hỗ trợ điều trị ung thư.', 'https://tracuuduoclieu.vn/wp-content/uploads/2020/12/ban-chi-lien-3.png'),
(3, 'Bạch vi', 'vị thuốc', 'làm mát, ra mồ hôi trộn, viêm niệu đạo, tiểu đỏ sẻn, nóng sốt, tiểu tiện rít đau, đinh nhọt ung sưng, sưng đau họng, thanh quản.', 'https://tracuuduoclieu.vn/wp-content/uploads/2020/12/bach-vi.png'),
(4, 'Thiên danh tinh', 'dược liệu', 'Sưng tấy, giun đũa, giun kim, sán dây. Trẻ em cam tích; viêm cuống họng, mạng sườn, phế quản; thối gan bàn chân (quả, cả cây).', 'https://tracuuduoclieu.vn/wp-content/uploads/2022/10/anh-moi-02.jpg'),
(5, 'Hương thảo', 'dược liệu', 'Thân và hoa của nó được dùng để chữa đau đầu và cảm lạnh, làm thuốc giảm đau quặn thận, đau bụng kinh và như một loại thuốc chống co thắt.', 'https://tracuuduoclieu.vn/wp-content/uploads/2022/10/huong-thao2.jpg'),
(6, 'Chanh trường', 'dược liệu', 'Làm gia vị, chữa đau bụng trướng, phù thũng', 'https://tracuuduoclieu.vn/wp-content/uploads/2018/03/chanh-truong-4.jpg'),
(7, 'Lược vàng', 'dược liệu', 'viêm răng lợi, sâu răng, viêm họng, cảm cúm, viêm phế quản, hen, cầm máu vết thương, bỏng, táo bón, gút....', 'https://tracuuduoclieu.vn/wp-content/uploads/2021/10/luoc-vang-1-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `chucvu` varchar(20) NOT NULL,
  `trangcaythuoc` varchar(50) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `ngaybl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `ten`, `chucvu`, `trangcaythuoc`, `noidung`, `ngaybl`) VALUES
(2, 'trung123', 'Người dùng', 'Bạch vi', 'Cho mình hỏi về cây thuốc này', '2022-12-02 14:34:40'),
(3, 'admin', 'Quản lý', 'Bạch vi', 'Đây là cây thuốc dược liệu rất tốt để mọi người tham khảo, ngoài ra còn nhiều cây thuốc khác nữa', '2022-12-03 05:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `ho` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `name`, `description`, `ho`, `image`) VALUES
(1, 'Rourea oligophlebia Merr.', 'Giúp hỗ trợ sinh lý nam, an thần, cầm máu, giảm stress.', 'Connaraceae ( Dây Trường)', 'Rourea.jpg'),
(2, 'Schefflera alongensis R. Vig.', 'Dùng làm thuốc bổ, chữa cảm sốt, họng sưng đau, thấp khớp, đau sưng đau (rễ); sổ mũi, cảm cúm phát s', 'Nhân sâm – Araliaceae', 'Schefflera.jpg'),
(3, 'Sargentodoxa cuneata (Oliv.) Rehd. & Wil', 'Chữa thiếu máu, lưng gối đau mỏi, chân tay tê liệt, kinh nguyệt không đều, kinh bế, đau bụng, phong ', 'Huyết đằng – Sargentodoxaceae', 'Sargentodoxa.jpg'),
(4, 'Raphanus sativus L', 'Chữa chứng phong đờm, thở suyễn, lỵ, mụn nhọt, đại tiểu tiện không thông, trệ khí (hạt); trị khản ti', 'Cải – Brassicaceae', 'Raphanus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `sdt` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hoten`, `sdt`, `email`) VALUES
(12, 'TEST', '123456', 'TEST Roi', '0356702405', 'nhatdone2002@gmail.com'),
(13, 'nhatdo0511', '123456', 'Nguyễn Văn B', '0123456789', 'nhatdo@gmail.com'),
(14, 'trung123', '123456', 'Nguyễn Văn A', '123456789', 'A@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caythuoc`
--
ALTER TABLE `caythuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caythuoc`
--
ALTER TABLE `caythuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
