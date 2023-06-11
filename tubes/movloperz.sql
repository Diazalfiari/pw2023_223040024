-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 03:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movloperz`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'horror'),
(2, 'romance'),
(3, 'adventure'),
(4, 'action'),
(5, 'comedy'),
(6, 'drama'),
(7, 'mystery'),
(8, 'war');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `teks` text COLLATE utf8mb4_general_ci,
  `tahun` int DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `judul`, `teks`, `tahun`, `gambar`, `id_kategori`) VALUES
(1, 'Filosopi Kopi 2', 'Film yang menceritakan dua orang peracik kopi yang menemukan makna kehidupan sesungguhnya dari secangkir kopi, menjadi kisah inspiratif dalam balutan pencarian mereka membuat kopi terbaik. Adalah prestasi yang membanggakan jika sebuah film dinanti-nanti sekuelnya lantaran para penonton sangat jatuh hati kepada karakter yang ditampilkan.  Penonton ingin melihat lebih banyak dari karakter-karakter tersebut. Seperti yang terjadi pada Filosofi Kopi (2015), perjalanan persahabatan Ben dan Jody begitu hangat dan kental sehingga dibikinlah cangkir kedua, eh maksudnya film kedua ini. And keep in mind, bahwa tadinya Filosofi Kopi berangkat dari cerita pendek. Sekarang, berkembang menjadi kedai kopi beneran, brand bisnis beneran, tak pelak – ini sudah menginspirasi banyak orang, khususnya anak-anak muda, bahwa berbisnis itu keren. Bahkan aku juga sekarang udah membuka kafe eskrim di Bandung, di mana aku nyiapin dan served people myself. Meski memang backstory buka usahaku lebih mirip seperti Max Black’s ketimbang Ben dan Jody yang kekinian.\r\n\r\nDalam sekuel inipun diceritakan kesuksesan Filosofi Kopi milik Ben dan Jody membuat menjamurnya anak muda yang bikin kedai kopi serupa. Filosofi Kopi sudah menjadi semacam legenda, “Mitos,” kata Luna Maya. Jadi bahan obrolan di antara barista-barista yang terinspirasi, kopinya jadi tolak ukur standar tinggi. The Legend now wants to return home. Bisnis roadtrip mereka enggak jalan ke mana-mana, meski memang mereka udah keliling Indonesia memasyarakatkan kopi selama dua tahun belakangan. Jadi, Ben dan Jody kembali ke kedai di Melawai. Mereka harus kembali struggle nyari investor sebab beli properti enggak murah. Dan oleh karena ini adalah film sekuel, maka harus ada ide baru dan stake harus dipergede. Sehingga Filosofi Kopi, ultimately, mengekspansi gerai kedai mereka ke kota Jogja, mereka harus ngehire orang-orang baru, dan persahabatan Ben dan Jody teraduk-aduk karenanya.\r\n\r\nAda dua tokoh baru yang menambah cita rasa cerita Filosofi Kopi 2. To be honest tho, aku enggak begitu mengerti dinamika cinta segi kotak di antara Ben-Tarra-Jody-Brie-Ben sebab meski memang keempat ini punya karakter, relationship mereka tidak benar-benar terflesh out dengan baik. Ben dan Jody, they are funny, kita percaya persahabatan udah mengakar kuat pada mereka. Namun saat-saat mereka berantem, mereka berpisah, mereka reunite, terasa lebih seperti tuntunan sekuens naskah ketimbang terdevelop secara natural, you know, terbentuk dari interaksi actual dan genuine di antara mereka.', 2020, 'FilosopiKopi2.jpg', 6),
(2, 'mencuri raden saleh', 'Pencurian terbesar abad ini tinggal menghitung hari menjelang tanggal eksekusinya. Komplotan sudah lengkap dan siap menjalankan misi untuk mencuri lukisan sang maestro, Raden Saleh, yang berjudul Penangkapan Diponegoro. Pemalsuan, peretasan, pertarungan, dan manipulasi terjadi dalam pencurian berencana yang dijalankan oleh sekelompok anak muda amatiran.', 2020, 'mencuriradensaleh.jpg', 7),
(5, 'Dilan 1990', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.', 2018, '6485dbb260b74.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestId` int NOT NULL,
  `RequestUser` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `RequestTitle` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `RequestMessage` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RequestId`, `RequestUser`, `RequestTitle`, `RequestMessage`) VALUES
(2, 'codersgenius', 'Movie Name', 'I want this movie'),
(3, 'ahmad', 'A+', 'serial terbaru film indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `UserId` int NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`UserId`, `username`, `password`, `email`, `status`) VALUES
(28, 'aaa', '$2y$10$uivmXnTTKT2DfC7kwyWadOFdarjSoCLAhKQKGbkVaO3OPjoA3aMOW', 'aaa@gmail.com', 'user'),
(29, 'qwe', '$2y$10$pxFPD/AulW31hNFlF9ijA.M88rcnY5ESe008clY/w9Ha0PfkaX5SG', 'qwe@gmail.com', 'user'),
(30, 'diazalfiari', '$2y$10$F8Xu3Tyav86dU4K/h2cbQujWzmddEsQi31X6JWfwhSpJ3S5dSPNua', 'diazalfiari@gmail.com', 'admin'),
(31, 'asd', '$2y$10$EeLSV5VC7lkv446U0vFTou8LOQTpPHyFD3NEjX7y3DtOTBslNWsUK', 'asd@gmail.com', 'user'),
(32, 'zxc', '$2y$10$2Lfp9OXd5mF/GpC3zTWzLu75ySobBoeszBikjGlSauJkDFbTmvrsu', 'diazalfiari@gmail.com', 'user'),
(33, 'qqq', '$2y$10$pcSHQJMiHADq8T.wj3/8Ue9vIMYCaM0mII27yNcNs5LIUQmxfOVgC', 'qwe@gmail.com', 'user'),
(34, 'www', '$2y$10$QRHorf9ROerSfXislgMC2uRlYcWPWJmeqNSNi.KzDAM1qFcaxj.E2', 'diazalfiari@gmail.com', 'user'),
(35, 'sss', '$2y$10$9OXWNYk0P/kJOf4mReqRquT/WgyXWH8c555P.FuNcIdYnxycMRUV.', 'diazalfiari@gmail.com', 'user'),
(36, 'zzz', '$2y$10$bvscE9LtLXtYPbp6PSx01.hEnpfLpu47vf.dANpJCOrixYkS66gYK', 'diazalfiari@gmail.com', 'user'),
(37, 'ddd', '$2y$10$Fzv7uKfWARTfJ6tfOlnSduBWhT5DWVU3fxQGZv9IIqAaQKhCj0UcS', 'diazalfiari19@gmail.com', 'user'),
(38, 'xxx', '$2y$10$Wy58kUS5SdPpJvgVTn0D0exeB3JbBXwmqhSN2lOFpEtCiAnhAdOR.', 'diazalfiari@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RequestId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UserId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
