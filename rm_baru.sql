-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2023 at 07:37 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rm_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
('admin', 'admin'),
('marsha', 'marsha');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint NOT NULL,
  `p_id` bigint NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` bigint NOT NULL,
  `email` varchar(150) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `u_id`, `nama`, `hp`, `email`, `lokasi`) VALUES
(23, 11, 'admin', 'hello', 8978678909, 'h@yyy.com', 'jas skkslks kslda'),
(24, 16, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(25, 20, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(26, 8, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(27, 17, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(28, 16, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(29, 20, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(30, 8, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(31, 17, 'nanda', 'gsdshajdada', 834567654, 'kelompok6@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(32, 16, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(33, 20, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(34, 8, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(35, 17, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(36, 39, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(37, 44, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(38, 46, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(39, 44, 'nanda', 'asa', 1212121212, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(40, 16, 'nanda', 'nanda', 834567654, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(41, 20, 'nanda', 'nanda', 834567654, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(42, 8, 'nanda', 'nanda', 834567654, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(43, 17, 'nanda', 'nanda', 834567654, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(44, 45, 'nanda', 'nanda', 834567654, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(45, 16, 'nanda', 'dfghj', 3333333333, 'ozjibuwat009@gmail.com', 'Jl. Lubuk Durian,bengkulu'),
(46, 20, 'nanda', 'dfghj', 3333333333, 'ozjibuwat009@gmail.com', 'Jl. Lubuk Durian,bengkulu'),
(47, 8, 'nanda', 'dfghj', 3333333333, 'ozjibuwat009@gmail.com', 'Jl. Lubuk Durian,bengkulu'),
(48, 17, 'nanda', 'dfghj', 3333333333, 'ozjibuwat009@gmail.com', 'Jl. Lubuk Durian,bengkulu'),
(49, 46, 'nanda', 'dfghj', 3333333333, 'ozjibuwat009@gmail.com', 'Jl. Lubuk Durian,bengkulu'),
(50, 16, 'nanda', 'muhammad', 99909909, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(51, 20, 'nanda', 'muhammad', 99909909, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(52, 8, 'nanda', 'muhammad', 99909909, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(53, 17, 'nanda', 'muhammad', 99909909, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo'),
(54, 46, 'nanda', 'muhammad', 99909909, 'ozjibuwat@gmail.com', 'Jl. Lubuk Durian, Sumber Rejo');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`) VALUES
(3, 'img/5c7515fc03eded3e20e78a6f_1551177212604.jpg'),
(4, 'img/5e39236bc4b7bc0c2bb659c7_1580802923546.jpg'),
(5, 'img/the-gujarati-thali-served.jpg'),
(6, 'img/the-gujarati-thali-served.jpg'),
(7, 'img/images.jpg'),
(8, 'img/thali.jpg'),
(9, 'img/chines.jpg'),
(10, 'img/abc.jpg'),
(11, 'img/sateBali.jpeg'),
(12, 'img/sateBali.jpeg'),
(13, 'img/sateMad.jpeg'),
(14, 'img/satePad.jpg'),
(15, 'img/bakso kerikil.jpg'),
(16, 'img/BAKSO JELETOT.jpg'),
(17, 'img/bakso beranak.jpg'),
(18, 'img/Screenshot from 2023-04-13 09-35-52.png');

-- --------------------------------------------------------

--
-- Table structure for table `kat_makanan`
--

CREATE TABLE `kat_makanan` (
  `id` bigint NOT NULL,
  `nama_kat` varchar(100) NOT NULL,
  `sub_kat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kat_makanan`
--

INSERT INTO `kat_makanan` (`id`, `nama_kat`, `sub_kat`) VALUES
(57, 'bakso', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskr` text NOT NULL,
  `harga` bigint NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `kategori`, `judul`, `deskr`, `harga`, `image`) VALUES
(35, 'bakso', 'Bakso beranak', 'bakso beranak adalah bakso yang memiliki anak bakso didalamnya', 20000, 'mimg/bakso beranak.jpg'),
(37, 'bakso', 'Bakso beranak', 'bakso beranak adalah bakso yang memiliki anak bakso didalamnya', 20000, 'mimg/bakso beranak.jpg'),
(38, 'bakso', 'bakso jeletot', 'bakso jeletot adalah bakso yang pedas sekali', 25000, 'mimg/BAKSO JELETOT.jpg'),
(39, 'naspad', 'naspad paket A', 'merupakan campuran bebarapa jenis sayur padang', 13000, 'mimg/naspad1.jpeg'),
(40, 'naspad', 'naspad paket B', 'makanan padang yan kaya rasa dan juga tumbuh banyak rasa :0', 15000, 'mimg/naspad3.png'),
(41, 'minuman', 'es ijo ijo', 'minumin ini terasa sangat manis sekali', 5000, 'mimg/minum1.jpeg'),
(42, 'minuman', 'es coklat coklat :)', 'minumin ini terbuat dari jahe sepertinya', 5000, 'mimg/minum2.jpeg'),
(43, 'sate', 'sate bali', 'sate bali adalah sate yang dilit dan dibakar dengan batang serai', 27000, 'mimg/sateBali.jpeg'),
(44, 'sate', 'sate madura', 'sate yang dibuat dan asli dari madura', 30000, 'mimg/sateMad.jpeg'),
(45, 'sate', 'sate padang', 'merupakan sate yang berasal dari padang ', 15000, 'mimg/satePad.jpg'),
(46, 'sate', 'sate taichan', 'sate taichan adalah sate taichan', 30000, 'mimg/sateTaichan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` bigint NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` bigint NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `id_makanan` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` bigint NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `userid`, `password`, `email`) VALUES
(1, 'abcd', 'xyz', 'abc@yahoo.com'),
(2, 'aa', 'bb', 'cc@y.com'),
(3, 'nilkanth', 'nilkanth', 'aaabb@y.com'),
(4, 'abcd', 'ppp', 'abc@yahoo.com'),
(5, 'abcd', 'asdf', 'abc@yahoo.com'),
(6, 'nanda', 'nanda', 'nanda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint NOT NULL,
  `nama` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `deskr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `nama`, `review`, `deskr`) VALUES
(7, 'ferdinan', 'Luar Biasa', 'baguas'),
(8, 'nanda', 'Bagus', 'good job sih\r\n'),
(9, 'marsha', 'Luar Biasa', 'hebat yah');

-- --------------------------------------------------------

--
-- Table structure for table `tambah_keranjang`
--

CREATE TABLE `tambah_keranjang` (
  `id` bigint NOT NULL,
  `p_id` bigint NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `harga` bigint NOT NULL,
  `kuant` bigint NOT NULL,
  `total` bigint NOT NULL,
  `tanggal` varchar(2) DEFAULT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah_keranjang`
--

INSERT INTO `tambah_keranjang` (`id`, `p_id`, `u_id`, `harga`, `kuant`, `total`, `tanggal`, `bulan`, `tahun`) VALUES
(2, 1, 'abcd', 100, 4, 400, NULL, NULL, NULL),
(3, 8, 'abcd', 30, 1, 30, NULL, NULL, NULL),
(4, 2, 'abcd', 100, 3, 300, NULL, NULL, NULL),
(5, 6, 'abcd', 30, 3, 90, NULL, NULL, NULL),
(7, 16, 'nanda', 15, 1, 15, NULL, NULL, NULL),
(8, 20, 'nanda', 20, 1, 20, NULL, NULL, NULL),
(9, 8, 'nanda', 30, 1, 30, NULL, NULL, NULL),
(10, 17, 'nanda', 15, 7, 105, NULL, NULL, NULL),
(22, 46, 'nanda', 30000, 6, 180000, '4', '5', '2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_makanan`
--
ALTER TABLE `kat_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah_keranjang`
--
ALTER TABLE `tambah_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kat_makanan`
--
ALTER TABLE `kat_makanan`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tambah_keranjang`
--
ALTER TABLE `tambah_keranjang`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
