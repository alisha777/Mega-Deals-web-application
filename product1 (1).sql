-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 10:09 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `uname`, `upass`, `mail`, `name`) VALUES
(0, 'alishaa', '2345', 'alishatoma0@gmail.com', 'toma'),
(0, 'tanha', '5632', 'tanha@gmail.com', 'taskia'),
(0, 'tom', 'tom', 'tom@gmail.com', 'tom'),
(0, 'zain', 'zain', 'zain@gmail.com', 'maher');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(100) NOT NULL,
  `mail` varchar(60) DEFAULT NULL,
  `P_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(100) NOT NULL,
  `P_name` varchar(200) NOT NULL,
  `technology` varchar(70) NOT NULL,
  `dimensions` varchar(70) NOT NULL,
  `weight` varchar(70) NOT NULL,
  `sim` varchar(70) NOT NULL,
  `disp_type` varchar(70) NOT NULL,
  `disp_multitouch` varchar(70) NOT NULL,
  `os` varchar(70) NOT NULL,
  `chipset` varchar(70) NOT NULL,
  `cpu` varchar(70) NOT NULL,
  `gpu` varchar(70) NOT NULL,
  `card_slot` varchar(70) NOT NULL,
  `memory` varchar(70) NOT NULL,
  `wlan` varchar(70) NOT NULL,
  `bluetooth` varchar(70) NOT NULL,
  `usb` varchar(70) NOT NULL,
  `battery` varchar(70) NOT NULL,
  `colors` varchar(70) NOT NULL,
  `price` int(15) NOT NULL,
  `SDiscount` varchar(150) DEFAULT NULL,
  `FDiscount` varchar(150) DEFAULT NULL,
  `Processor` varchar(70) NOT NULL,
  `Graphics` varchar(200) NOT NULL,
  `Storage` varchar(200) NOT NULL,
  `warranty` varchar(90) DEFAULT NULL,
  `power` varchar(90) DEFAULT NULL,
  `functions` varchar(90) DEFAULT NULL,
  `delayStart` varchar(90) DEFAULT NULL,
  `cooling` varchar(90) DEFAULT NULL,
  `heating` varchar(90) DEFAULT NULL,
  `lense_Mount` varchar(90) DEFAULT NULL,
  `Total_pixel` varchar(90) DEFAULT NULL,
  `effective_pixl` varchar(90) DEFAULT NULL,
  `Aspect_ratio` varchar(90) DEFAULT NULL,
  `img_quality` varchar(90) DEFAULT NULL,
  `photo_4k` varchar(90) DEFAULT NULL,
  `whiteBalance` varchar(90) DEFAULT NULL,
  `focus` varchar(90) DEFAULT NULL,
  `frequency` varchar(150) DEFAULT NULL,
  `accessories` varchar(150) DEFAULT NULL,
  `audio` varchar(150) DEFAULT NULL,
  `Door` varchar(150) DEFAULT NULL,
  `volume` varchar(150) DEFAULT NULL,
  `Dispenser` varchar(150) DEFAULT NULL,
  `frost` varchar(150) DEFAULT NULL,
  `plumbing` varchar(150) DEFAULT NULL,
  `connectivity` varchar(150) DEFAULT NULL,
  `features` varchar(150) DEFAULT NULL,
  `speed` varchar(150) DEFAULT NULL,
  `Hdmiport` varchar(150) DEFAULT NULL,
  `AuxIn` varchar(150) DEFAULT NULL,
  `opticalAudio` varchar(150) DEFAULT NULL,
  `radio` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `P_name`, `technology`, `dimensions`, `weight`, `sim`, `disp_type`, `disp_multitouch`, `os`, `chipset`, `cpu`, `gpu`, `card_slot`, `memory`, `wlan`, `bluetooth`, `usb`, `battery`, `colors`, `price`, `SDiscount`, `FDiscount`, `Processor`, `Graphics`, `Storage`, `warranty`, `power`, `functions`, `delayStart`, `cooling`, `heating`, `lense_Mount`, `Total_pixel`, `effective_pixl`, `Aspect_ratio`, `img_quality`, `photo_4k`, `whiteBalance`, `focus`, `frequency`, `accessories`, `audio`, `Door`, `volume`, `Dispenser`, `frost`, `plumbing`, `connectivity`, `features`, `speed`, `Hdmiport`, `AuxIn`, `opticalAudio`, `radio`) VALUES
(2, 'Apple iPhone X', 'GSM / HSPA / LTE', '143.6 x 70.9 x 7.7 mm', '174 g', 'Nano-SIM', 'Super AMOLED capacitive touchscreen, 16M colors', 'yes', 'iOS 11.1.1, upgradable to', 'Apple A11 Bionic', 'Hexa-core 2.39 GHz', 'Adreno 512', 'no', '64/256 GB, 3 GB RAM', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', '2.0, proprietary reversible connector', 'Non-removable Li-Ion 2716 mAh battery', 'Space Gray, Silver', 13099, '13/8/18     30%', '17/8/18      30%', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Huawei P20', 'GSM / HSPA / LTE', '149.1 x 70.8 x 7.7 mm', '165 g', 'Dual SIM (Nano-SIM, dual stand-by)', 'LTPS IPS LCD capacitive touchscreen, 16M colors', 'yes', 'Android 8.1 (Oreo)', 'Hisilicon Kirin 970', 'Octa-core (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex', 'Mali-G72 MP12', 'no', '128 GB, 4 GB RAM', 'Wi-Fi 802.11 a/b/g/n/ac, hotspot', '4.2, A2DP, LE, EDR, aptX HD', '3.1,Type-C 1.0 reversible connector', 'Non-removable Li-Po 3400 mAh battery', 'Twilight, Black, Midnight Blue, Pink Gold', 8100, '13/8/18       30%', '18/8/18       30%', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 'OnePlus 6', 'GSM / CDMA / HSPA / LTE', '7.5 mm thickness', '175 g', 'Dual SIM (Nano-SIM, dual stand-by)', 'Optic AMOLED capacitive touchscreen, 16M colors', 'yes', 'Android 8.1 (Oreo)', 'Qualcomm SDM845 Snapdragon 845', 'Octa-core (4x2.7 GHz Kryo 385 Gold & 4x1.7 GHz Kry', 'Adreno 630', 'no', '256 GB, 8 GB RAM or 64/128 GB, 6 GB RAM', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, D', '5.0, A2DP, LE, aptX HD', 'No  2.0, Type-C 1.0 reversible connector', 'Non-removable Li-Po 3450 mAh battery', 'Midnight Black, Lava Red, Sandstone White', 16000, '13/08/18     30%', '17/08/18     30%', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Samsung Galaxy S9', 'GSM / CDMA / HSPA / EVDO / LTE', '147.7 x 68.7 x 8.5 mm', '163 g', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'Super AMOLED capacitive touchscreen, 16M colors', 'yes', 'Android 8.0 (Oreo)', 'Exynos 9810 Octa - EMEA', 'Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.7 GHz Kry', 'Adreno 630', 'microSD, up to 400 GB', '64/128/256 GB, 4 GB RAM', 'Wi-Fi 802.11 a/b/g/n/ac,hotspot', '5.0, A2DP, LE, aptX', '3.1, Type-C 1.0 reversible connector', 'Non-removable Li-Ion 3000 mAh battery (11.55 Wh)', 'Midnight Black,Coral Blue, Titanium Gray, Lilac P', 10000, '13/8/18     30%', '18/8/18     30%', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `mail` (`mail`),
  ADD KEY `P_name` (`P_name`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`P_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `customer` (`mail`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`P_name`) REFERENCES `product_info` (`P_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
