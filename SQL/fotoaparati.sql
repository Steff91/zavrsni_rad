-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 11:31 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotoaparati`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `naslov` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `naslov`, `opis`) VALUES
(10, 'About Us', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekst` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `naslov`, `tekst`) VALUES
(4, 'Where to find us', '      \r\nAdresa: Cara DuÅ¡ana 34, 11080 Zemun, Beograd, Srbija\r\n\r\nWeb: www.it-akademija.com\r\n\r\nTel: prijemna sluÅ¾ba: +381 (11) 7856 100\r\nstudentska sluÅ¾ba: +381 (11) 7856 140\r\ntehniÄka podrÅ¡ka: +381 (11) 7856 130\r\nfinansije: +381 (11) 7856 150\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `dostupnost`
--

CREATE TABLE `dostupnost` (
  `id` int(11) NOT NULL,
  `dostupnost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dostupnost`
--

INSERT INTO `dostupnost` (`id`, `dostupnost`) VALUES
(1, 'Na lageru'),
(2, 'Nema na lageru');

-- --------------------------------------------------------

--
-- Table structure for table `firma`
--

CREATE TABLE `firma` (
  `id_firme` int(11) NOT NULL,
  `ime` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firma`
--

INSERT INTO `firma` (`id_firme`, `ime`) VALUES
(2, 'Canon'),
(7, 'Kingston'),
(6, 'Manfroto'),
(1, 'Nikon'),
(4, 'Olympus'),
(5, 'SanDisk'),
(3, 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `slika` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `slika`) VALUES
(1, '50-percent-off.png');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime_korisnika` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime_korisnika`, `pass`, `status`) VALUES
(1, 'admin', '123', 3),
(2, 'janko', '234', 2),
(3, 'marko', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `porudzbine`
--

CREATE TABLE `porudzbine` (
  `id_porudzbine` int(11) NOT NULL,
  `ime` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresa` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proizvodi` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `porudzbine`
--

INSERT INTO `porudzbine` (`id_porudzbine`, `ime`, `adresa`, `proizvodi`) VALUES
(6, '', '', '{"2":"2"}'),
(7, 'ASDasd', 'ASD', '{"2":"2"}'),
(8, '', '', '{"2":"2","5":"2"}');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id_proizvoda` int(11) NOT NULL,
  `Firma` int(11) NOT NULL,
  `Model` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slika` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tip_proizvoda` int(11) NOT NULL,
  `tip_fotoaparata` int(11) NOT NULL,
  `dostupnost` tinyint(1) NOT NULL,
  `cena` int(11) NOT NULL,
  `opis` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id_proizvoda`, `Firma`, `Model`, `Slika`, `tip_proizvoda`, `tip_fotoaparata`, `dostupnost`, `cena`, `opis`) VALUES
(1, 1, 'D500', 'https://static.bhphoto.com/images/images500x500/1452034368000_1214161.jpg', 1, 1, 1, 1900, NULL),
(2, 2, 'EOS 5D Mark IV', 'https://static.bhphoto.com/images/images500x500/1499917814000_1348564.jpg', 1, 1, 1, 3400, ''),
(3, 1, 'D7500', 'https://static.bhphoto.com/images/images500x500/1492611670000_1333060.jpg', 1, 1, 1, 1300, NULL),
(5, 2, 'EOS 1D Mark II', 'https://static.bhphoto.com/images/images500x500/1454385064000_1220852.jpg', 1, 1, 1, 6000, NULL),
(6, 2, 'EOS 77D ', 'https://static.bhphoto.com/images/images500x500/1487130665000_1318281.jpg', 1, 1, 1, 900, NULL),
(7, 3, 'Alpha 7r II', 'https://static.bhphoto.com/images/images1000x1000/1433958442000_1159878.jpg', 1, 1, 1, 2700, NULL),
(11, 2, 'PowerShot SX 730', 'https://static.bhphoto.com/images/images500x500/1491485736000_1332304.jpg', 1, 3, 1, 400, NULL),
(16, 4, 'OM-D EM-1 Mark 2', 'https://static.bhphoto.com/images/images500x500/1478062327000_1283565.jpg', 1, 1, 1, 2000, NULL),
(17, 4, 'PEN-PL8', 'https://static.bhphoto.com/images/multiple_images/images500x500/1475012767000_IMG_691912.jpg', 1, 2, 1, 900, NULL),
(18, 4, 'TOUGH TG-5', 'https://static.bhphoto.com/images/multiple_images/images500x500/1495000853000_IMG_800076.jpg', 1, 3, 1, 450, NULL),
(19, 5, '64GB SDHC Class 10', 'https://www.sandisk.com/content/dam/sandisk-main/en_us/assets/product/retail/Ultra_SDXC_48MBs_64GB_Class10_Front.png', 3, 4, 1, 30, NULL),
(20, 7, '64GB Micro SDHC Class 10 ', 'http://gloimg.everbuying.net/E/2015/201507/goods-img/1437779879560-P-2875498.jpg', 3, 4, 1, 30, NULL),
(21, 6, 'Compact Light Aluminium Tripod', 'https://static.bhphoto.com/images/images500x500/1402609108000_1059024.jpg', 4, 4, 1, 70, NULL),
(22, 6, 'Carbon Fiber Tripod with 400 HD Geared Head', 'https://static.bhphoto.com/images/images500x500/1393822736000_1034141.jpg', 4, 4, 1, 1000, NULL),
(23, 1, 'AF-P NIKKOR 70-300mm f/4.5-5.6E ED VR ', 'http://imgsv.imaging.nikon.com/lineup/lens/zoom/telephotozoom/af-p_dx_70-300mmf_45-63g_ed_vr/img/product_01_01.png', 2, 4, 1, 750, NULL),
(24, 1, 'PC NIKKOR 19mm f/4E ED', 'https://telescopes.net/store/media/extendware/ewimageopt/media/inline/6a/0/nikon-pc-nikkor-19mm-f-4e-ed-lens-f73.png', 2, 4, 1, 3400, NULL),
(26, 2, 'EF 85mm f/1.8 USM Lens', 'https://static.bhphoto.com/images/images500x500/1266943629000_12182.jpg', 2, 4, 1, 350, NULL),
(27, 2, 'EF 100-400mm f/4.5-5.6L IS II USM Lens ', 'https://static.bhphoto.com/images/images500x500/1447194029000_1092632.jpg', 2, 4, 0, 2050, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tip_fotoaparata`
--

CREATE TABLE `tip_fotoaparata` (
  `id` int(11) NOT NULL,
  `Naziv` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tip_fotoaparata`
--

INSERT INTO `tip_fotoaparata` (`id`, `Naziv`) VALUES
(4, 'Nije fotoaparat'),
(2, 'Poluprofesionalni'),
(1, 'Profesionalni'),
(3, 'Prosumer');

-- --------------------------------------------------------

--
-- Table structure for table `tip_proizvoda`
--

CREATE TABLE `tip_proizvoda` (
  `id` int(11) NOT NULL,
  `Naziv` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tip_proizvoda`
--

INSERT INTO `tip_proizvoda` (`id`, `Naziv`) VALUES
(1, 'Fotoaparat'),
(3, 'Memorija'),
(2, 'Objektiv'),
(4, 'Stativ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dostupnost`
--
ALTER TABLE `dostupnost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`id_firme`),
  ADD KEY `ime` (`ime`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porudzbine`
--
ALTER TABLE `porudzbine`
  ADD PRIMARY KEY (`id_porudzbine`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id_proizvoda`),
  ADD KEY `tip_proizvoda` (`tip_proizvoda`),
  ADD KEY `tip_fotoaparata` (`tip_fotoaparata`),
  ADD KEY `id` (`id_proizvoda`),
  ADD KEY `Firma` (`Firma`);

--
-- Indexes for table `tip_fotoaparata`
--
ALTER TABLE `tip_fotoaparata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Naziv` (`Naziv`);

--
-- Indexes for table `tip_proizvoda`
--
ALTER TABLE `tip_proizvoda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Naziv` (`Naziv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dostupnost`
--
ALTER TABLE `dostupnost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `firma`
--
ALTER TABLE `firma`
  MODIFY `id_firme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `porudzbine`
--
ALTER TABLE `porudzbine`
  MODIFY `id_porudzbine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id_proizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tip_fotoaparata`
--
ALTER TABLE `tip_fotoaparata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tip_proizvoda`
--
ALTER TABLE `tip_proizvoda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD CONSTRAINT `firma` FOREIGN KEY (`Firma`) REFERENCES `firma` (`id_firme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipfotoaparata` FOREIGN KEY (`tip_fotoaparata`) REFERENCES `tip_fotoaparata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipproizvoda` FOREIGN KEY (`tip_proizvoda`) REFERENCES `tip_proizvoda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
