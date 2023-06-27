-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 01:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasarumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Makanan & Minuman'),
(2, 'Pakaian'),
(3, 'Tas'),
(4, 'Sepatu'),
(11, 'Kosmetik');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `contact_seller` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `contact_seller`, `date_created`) VALUES
(6, 1, 'Kue Bangkit/Rentak Sagu 250gram Rasa Original', 28000, '<p>&nbsp;</p>\r\n\r\n<p><strong>Detail Produk</strong></p>\r\n\r\n<p>- Kue Bangkit/Rentak Sagu rasa Original</p>\r\n\r\n<p>- Kemasan Tabung Ukuran 250 gram (Berat kue menyesuaikan tabung)</p>\r\n\r\n<p>- Diproduksi di kota Palembang</p>\r\n\r\n<p>- Komposisi : Tepung Tapioka, Tepung Terigu, Telur, Gula, Santan, Minyak, Wijen</p>\r\n\r\n<p>- Sudah tersertifikasi Halal</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Saran Penyimpanan</strong></p>\r\n\r\n<p>- Jauhkan dari panas matahari</p>\r\n\r\n<p>- Tutup rapat kembali jika belum dihabiskan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh : Ainun Cake (Ardizal)</strong></p>\r\n', 'produk1687473190.png', 1, '6281278313725', '2023-06-21 15:10:16'),
(7, 1, 'Kue Bangkit/Rentak Sagu 250gram Rasa Jahe', 28000, '<p><strong>Detail Produk</strong></p>\r\n\r\n<p>- Kue Bangkit/Rentak Sagu rasa Jahe</p>\r\n\r\n<p>- Kemasan Tabung Ukuran 250 gram (Berat kue menyesuaikan tabung)</p>\r\n\r\n<p>- Diproduksi di kota Palembang</p>\r\n\r\n<p>- Komposisi : Tepung Tapioka, Tepung Terigu, Telur, Gula, Santan, Minyak, Wijen</p>\r\n\r\n<p>- Sudah tersertifikasi Halal</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Saran Penyimpanan</strong></p>\r\n\r\n<p>- Jauhkan dari panas matahari</p>\r\n\r\n<p>- Tutup rapat kembali jika belum dihabiskan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh : Ainun Cake (Ardizal)</strong></p>\r\n', 'produk1687473174.png', 1, '6281278313725', '2023-06-21 15:13:06'),
(8, 1, 'Kue Bangkit/Rentak Sagu 250gram Rasa Durian', 28000, '<p><strong>Detail Produk</strong></p>\r\n\r\n<p>- Kue Bangkit/Rentak Sagu rasa Durian</p>\r\n\r\n<p>- Kemasan Tabung Ukuran 250 gram (Berat kue menyesuaikan tabung)</p>\r\n\r\n<p>- Diproduksi di kota Palembang</p>\r\n\r\n<p>- Komposisi : Tepung Tapioka, Tepung Terigu, Telur, Gula, Santan, Minyak, Wijen</p>\r\n\r\n<p>- Sudah tersertifikasi Halal</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Saran Penyimpanan</strong></p>\r\n\r\n<p>- Jauhkan dari panas matahari</p>\r\n\r\n<p>- Tutup rapat kembali jika belum dihabiskan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh : Ainun Cake (Ardizal)</strong></p>\r\n', 'produk1687473154.png', 1, '6281278313725', '2023-06-21 15:14:44'),
(9, 1, 'Kue Bangkit/Rentak Sagu 250gram Rasa Kacang', 28000, '<p><strong>Detail Produk</strong></p>\r\n\r\n<p>- Kue Bangkit/Rentak Sagu rasa Kacang</p>\r\n\r\n<p>- Kemasan Tabung Ukuran 250 gram (Berat kue menyesuaikan tabung)</p>\r\n\r\n<p>- Diproduksi di kota Palembang</p>\r\n\r\n<p>- Komposisi : Tepung Tapioka, Tepung Terigu, Telur, Gula, Santan, Minyak, Wijen</p>\r\n\r\n<p>- Sudah tersertifikasi Halal</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Saran Penyimpanan</strong></p>\r\n\r\n<p>- Jauhkan dari panas matahari</p>\r\n\r\n<p>- Tutup rapat kembali jika belum dihabiskan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh : Ainun Cake (Ardizal)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1687473125.png', 1, '6281278313725', '2023-06-21 15:17:03'),
(10, 3, 'Slingbag Rajut', 225000, '<p><strong>Material</strong></p>\r\n\r\n<p>Polyester</p>\r\n\r\n<p><br />\r\n<strong>Dimensi</strong></p>\r\n\r\n<p>Lebar 23 cm<br />\r\nTinggi 25 cm<br />\r\nAlas 5 cm<br />\r\nPanjang Tali 60 cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;Boscha (Maria Ulfa)</strong></p>\r\n', 'produk1687473046.png', 1, '628158286808', '2023-06-22 21:57:37'),
(11, 4, 'Sepatu Flat Rajut', 250000, '<p><strong>Material</strong></p>\r\n\r\n<p>Benang nilon kualitas bagus</p>\r\n\r\n<p>Sol anti selip dengan karet bawah dari bahan contesa dengan tali samping sehingga mudah dilepas pakai</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ready size 38 warna sesuai di gambar</strong></p>\r\n\r\n<p><strong>Panjang Kaki 24 cm Lebar Kaki 13,5 cm.</strong></p>\r\n\r\n<p><br />\r\n<br />\r\n<strong>Tips mengukur size biar pas :</strong></p>\r\n\r\n<p>Tapakkan kaki di lantai lalu ukur panjang kaki dari ujung jempol hingga tumit ditambah 0.5 cm untuk lingkar kaki diukur dibagian punggung kaki dari kanan ke kiri sampai menyentuh lantai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;Boscha (Maria Ulfa)</strong></p>\r\n', 'produk1687473517.png', 1, '628158286808', '2023-06-22 22:38:37'),
(12, 3, 'Hand Bag Rajut', 350000, '<p><strong>Material</strong></p>\r\n\r\n<p>Polyester</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;Boscha (Maria Ulfa)</strong></p>\r\n', 'produk1687473657.png', 1, '628158286808', '2023-06-22 22:40:57'),
(13, 2, 'Emilie Dress', 278000, '<p>Kisara merupakan sebuah brand hijab yang personality yaitu memperhatikan kebutuhan konsumen yang berbeda - beda, dibuat satu persatu berdasarkan request mulai dari :</p>\r\n\r\n<p>🌸Selera</p>\r\n\r\n<p>🌸Ukuran</p>\r\n\r\n<p>🌸Perpaduan warna</p>\r\n\r\n<p>🌸Design</p>\r\n\r\n<p>Oleh karena itu Kisara hadir sebagai solusi dari kebutuhan dan kepuasan konsumen</p>\r\n\r\n<p>Free custom ukuran, jadi ngk perlu rombak ke tukang jahit lg 😉</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;KISARA (DEA ADELIA)</strong></p>\r\n', 'produk1687474835.png', 1, '628995608983', '2023-06-22 23:00:35'),
(14, 2, 'Luxury Black Dress', 325000, '<p>Kisara merupakan sebuah brand hijab yang personality yaitu memperhatikan kebutuhan konsumen yang berbeda - beda, dibuat satu persatu berdasarkan request mulai dari :</p>\r\n\r\n<p>🌸Selera</p>\r\n\r\n<p>🌸Ukuran</p>\r\n\r\n<p>🌸Perpaduan warna</p>\r\n\r\n<p>🌸Design</p>\r\n\r\n<p>Oleh karena itu Kisara hadir sebagai solusi dari kebutuhan dan kepuasan konsumen</p>\r\n\r\n<p>Free custom ukuran, jadi ngk perlu rombak ke tukang jahit lg 😉</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;KISARA (DEA ADELIA)</strong></p>\r\n', 'produk1687474983.png', 1, '628995608983', '2023-06-22 23:03:03'),
(15, 11, 'Glowing Bright Moisturizing Package', 299000, '<p>&quot;Glowing Bright Moisturizing Package merupakan paket perawatan kulit utama dari CLA Beauty CLA Beauty yang terdiri dari 2 Produk, Yaitu Intensive Brightening Serum Cream dan Gentle Facial Wash.</p>\r\n\r\n<p>Paket perawatan ini merupakan bentuk kombinasi terbaik untuk mengatasi permasalah kulit sensitif, Darkspot / Flek dan kusam yang dibuat dengan formula bahan - bahan natural &amp; organik premium bersertifikat ECOCERT, HALAL &amp; BPOM.</p>\r\n\r\n<p>Paket perawatan ini berfungsi sangat lengkap untuk kulit, dengan cara memberikan efek lembab, kenyal dan cerah glowing.</p>\r\n\r\n<p>Intensive Brightening Serum cream memberikan manfaat yang sangat lengkap dengan hasil kulit lembab halus, cerah glowing dan selalu terhidrasi.</p>\r\n\r\n<p>Gentle Facial wash memberikan efek melembabkan kulit (moisturizing) dan menjaga kulit selalu terhidrasi (intense hydration).</p>\r\n\r\n<p>Produk telah tersertifikasi BPOM, HALAL dengan bahan premium tersertifikasi ECOCERT (Natural &amp; Organic) Formula multifungsi yang memudahkan pemakai mendapatkan manfaat maksimal untuk kesehatan dan kecantikan kulit dengan satu langkah saja, karena tidak perlu lagi menggunakan Day cream &amp; Night cream.</p>\r\n\r\n<p>Krim yang sangat lembut ( waterbase), cepat meresap, serta bebas bahan yang keras serta berbahaya. Produk CLA bebas Paraben, Alkohol, Parfum maupun bahan yang menyebabkan iritasi kulit.</p>\r\n\r\n<p>Spesial diciptakan untuk jenis kulit sensitif, kusam, mudah iritasi maupun yang mudah breakout. Manfaat maksimal mencerahkan dan melembabkan akan didapatkan dalam 1 minggu - 1 bulan pemakaian pertama, untuk efek glowing bisa 1 - 2 bulan.</p>\r\n\r\n<p>Terbukti Intensive Brightening Serum cream merupakan Skincare utama untuk kecantikan dan kesehatan kulit secara alami dan aman dipakai jangka panjang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bahan Aktif Utama Intensive Brightening Serum cream :</p>\r\n\r\n<p>Multifunctional Super Whitening Complex</p>\r\n\r\n<p>CLAIR BLANCHE II ( Botanical Active + Vitamins) Deep Moisturizing &amp; Restructuring Skin Barrier</p>\r\n\r\n<p>AQUAXYL ( Natural &amp; Organic) Extra Lightening Skin</p>\r\n\r\n<p>Niacinnamide 5 % ( Vitamin B3)</p>\r\n\r\n<p>POM NA 18221901718</p>\r\n\r\n<p>Halal ID 00310000468880822</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bahan aktif utama Gentle Facial Wash :</p>\r\n\r\n<p>Decyl glucoside ( Natural &amp; Organik)</p>\r\n\r\n<p>Mild Surfactant Aquaxyl ( Natural &amp; Organik)</p>\r\n\r\n<p>Moisturizing</p>\r\n\r\n<p>Formula lembut, pH Balance, NO SLES, NO PARABEN, NO PERFUME, NO ALCOHOL, NO other Harsh ingredients.</p>\r\n\r\n<p>POM NA 18221203598 HALAL ID 00310000468880822</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dijual Oleh :&nbsp;KOSMETIK ALAMI CLA (DIWI DAYANI)</strong></p>\r\n', 'produk1687475710.png', 1, '6281288329878', '2023-06-22 23:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Kelompok1', 'kel1@example.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
