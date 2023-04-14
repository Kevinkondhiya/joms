-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.unaux.com
-- Generation Time: Oct 21, 2022 at 02:54 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_30232281_madhuvankr`
--

-- --------------------------------------------------------

--
-- Table structure for table `custoname`
--

CREATE TABLE `custoname` (
  `id` int(11) NOT NULL,
  `custonm` varchar(50) NOT NULL,
  `custonum` bigint(20) NOT NULL,
  `custocity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custoname`
--

INSERT INTO `custoname` (`id`, `custonm`, `custonum`, `custocity`) VALUES
(1, 'NEEL', 919106709653, 'Amreli'),
(2, 'KEVIN', 919409410893, 'Amreli'),
(3, 'PB', 919979740360, 'Amreli'),
(4, 'VAJUBHAI DESAI', 919909522503, 'Jithudi'),
(5, 'YASHIFBHAI DESAI', 919426101013, 'Amreli'),
(6, 'RAGVENDRABHAI JOSHI ', 919429138990, 'AMRELI'),
(7, 'MAHEBUBBHAI NIJAAMBHAI KHURESHI', 919586701150, 'Amreli'),
(8, 'BHARGAVBHAI ADHIYARU', 919898839544, 'Amreli'),
(9, 'DILIPBHAI METHA', 919978914171, 'Amreli'),
(10, 'JIGISHABEN SOLANKI', 918141137996, 'Amreli'),
(11, 'NARANDRABHAI MUGALPARA', 918200575778, 'Amreli'),
(12, 'ANANYABEN BLOCH', 919824298420, 'Amreli'),
(13, 'KANCHANBEN KABARIYA', 919104681226, 'Amreli'),
(14, 'AMITBHAI UNDHAVIYA', 919429685075, 'Amreli'),
(15, 'SHIVAM CHAIN', 917567807474, 'Rajkot'),
(16, 'AHADBHAI PARMAR', 917990816685, 'Amreli'),
(17, 'DEVEBHAI MAKVANA', 919979717725, 'Amreli'),
(18, 'KRISHANBHAI KATARIYA', 919712545693, 'Amreli'),
(19, 'SAILESHBHAI RAMESHBHAI HARSORA', 919428795696, 'Damnagar'),
(20, 'RAJUBHAI AKBARI', 919426744802, 'Amreli'),
(21, 'VIPULBHAI VINUBHAI RAMANI', 919925331861, 'Saldi'),
(22, 'PRAFULBHAI PANDYA', 919377712224, 'Amreli'),
(23, 'FORAMBEN PANDYA', 919377712224, 'Amreli'),
(24, 'BHAVESHBHAI', 919890918876, 'Jalgaon(Maharashtra)'),
(25, 'VANDNABEN AGRAWAT', 919427556179, 'Amreli'),
(26, 'ALTAFBHAI ARIFBHAI NAGANI', 919924631344, 'Amreli'),
(27, 'SUNITABEN JAGDISHBHAI KALARIYA', 918888187270, 'Nasik'),
(28, 'URMIBEN SHUBHAMBHAI JALAVADIYA', 919875143600, 'Amreli'),
(29, 'JIGNESHBHAI VAKOTER', 919904145501, 'Amreli'),
(30, 'BHAVNABEN DILIPBHAI ROKAD', 919714701164, 'Amreli'),
(68, 'PRITAM', 919409410893, 'Amreli'),
(32, 'INDUBEN ARVINDBHAI SOLANKI', 919898561249, 'Amreli'),
(33, 'SURESHBHAI CHATTURBHAI RADADIYA', 919825538131, 'Vakiya'),
(34, 'NASIMBEN AGWAN', 0, 'Amreli'),
(35, 'KAUSHA R MUNJAPARA', 918485996085, 'AMRELI'),
(36, 'DHARTI BAVCHANDBHAI PATHER', 917202813055, 'AMRELI'),
(37, 'KOKILABEN ROKAD', 918306326936, 'AMRELI'),
(38, 'MUKESHBHAI SAVALIYA', 919879807445, 'Amreli'),
(39, 'BIMALBHAI POKAR', 919033334661, 'Amreli'),
(40, 'DILIPBHAI NANUBHAI VORA', 919979872711, 'Amreli'),
(41, 'GANSHYAMBHAI GOGANBHAI SUHAGIYA', 919913263336, 'Amreli'),
(42, 'MAGANBHAI VALJIBHAI VALA', 919913396200, 'Lilya'),
(43, 'MUKESHBHAI FURJIBHAI VIRADIYA', 919429779829, 'Amreli'),
(44, 'RUPABHAI LABUBHAI GOHIL', 918200345517, 'Savar Kundla'),
(45, 'DEVUBHAI LATHI', 918849387987, 'Lathi'),
(46, 'DR. DIPAKBHAI KYADA', 919426554412, 'Amreli'),
(47, 'JAYBHAI BOGHRA', 918866993231, 'Amreli'),
(48, 'SACHINBHAI GONDALIYA', 919979977327, 'Amreli'),
(49, 'GAURANGBHAI PRAVINBHAI POKAL', 917016094964, 'Amreli'),
(50, 'MAHESHBHAI J THAKKAR', 919426288037, 'Amreli'),
(51, 'VISHALBHAI KANTIBHAI BHUVA', 917984590457, 'Amreli'),
(52, 'JURUFBHAI GAFARBHAI BOGDA', 917486050855, 'Babra'),
(53, 'ASMITABEN DOBARIYA', 919974492893, 'Amreli'),
(54, 'KAUSHALBHAI SAVALIYA', 919427272951, 'Amreli'),
(55, 'RINABEN PRAKESHBHAI DAVE', 919374824663, 'Amreli'),
(56, 'HASINABEN PATHAN', 0, 'Amreli'),
(57, 'GANSHYAMBHAI KURJIBHAI BORAD', 917567014210, 'Ramgadh'),
(58, 'YOGITABEN VAIDA', 918320757750, 'Amreli'),
(59, 'NILESHBHAI VYAS', 919824900060, 'Amreli'),
(60, 'STOCK', 0, '0'),
(61, 'RUSHITABEN BHARATBHAI RANPARIYA', 919725306984, 'Visavadar'),
(62, 'SURESHBHAI SASHTRIJI', 919429078850, 'Amreli'),
(63, 'DR. PRAFULBHAI ROSHANIA', 919426280717, 'Amreli'),
(64, 'HITESHBHAI POKAL', 919998721669, 'Amreli'),
(65, 'SHARADBHAI PATEL', 919426830243, 'Amreli'),
(67, 'ROHITBHAI Â MUNGALPARA', 917878565678, 'Amreli'),
(69, 'JULUFBHAI AMRUTBHAI MANJARIYA', 919979187338, 'Amreli'),
(70, 'BHARATBHAI DHANANI', 919624398503, 'Amreli'),
(71, 'ABHISHEKBHAI GADHVI', 919726457439, 'Amreli'),
(72, 'MAYANKBHAI DHIRUBHAI PETHANI', 919913582854, 'Amreli');

-- --------------------------------------------------------

--
-- Table structure for table `karigarname`
--

CREATE TABLE `karigarname` (
  `id` int(10) NOT NULL,
  `krname` varchar(50) NOT NULL,
  `krnumber` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karigarname`
--

INSERT INTO `karigarname` (`id`, `krname`, `krnumber`) VALUES
(36, 'BADSHAH', 918200462305),
(35, 'KARTIK', 918320601927),
(33, 'MIRAJ', 918306637071),
(34, 'KHOKAN', 919904061563),
(39, 'OMKAR VIPULBHAI', 919099126999),
(38, 'OMKAR PARESHBHAI', 919879177332),
(37, 'BL', 919427746395),
(32, 'RINKU, KRUNAL', 918849586578),
(31, 'GOPAL, NILESH', 919426650469),
(40, 'HITESHBHAI RANINGA', 919924080187),
(107, 'BHARATBHAI KATRODIYA', 919428712693),
(115, 'KEVIN', 919409410893),
(116, 'CJ', 919879823006),
(117, 'JAMNAGAR', 0),
(118, 'KENVI', 917778883139),
(119, 'SHIVANM CHAIN', 917567807474),
(120, 'RAMANI ORNAMENTS', 917096012612),
(121, 'JIJA BANGALI', 917878567834),
(122, 'STOCK', 0),
(123, 'TAJIBUL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `krissue`
--

CREATE TABLE `krissue` (
  `id` int(11) NOT NULL,
  `krvrno` int(10) NOT NULL,
  `ovrno` int(10) NOT NULL,
  `krname` varchar(50) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `proweight` varchar(20) NOT NULL,
  `prosize` varchar(10) NOT NULL,
  `prodetail` varchar(100) NOT NULL,
  `krgdate` date NOT NULL,
  `krdisdate` date NOT NULL,
  `prodisdate` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krissue`
--

INSERT INTO `krissue` (`id`, `krvrno`, `ovrno`, `krname`, `proname`, `proweight`, `prosize`, `prodetail`, `krgdate`, `krdisdate`, `prodisdate`, `status`) VALUES
(15, 1, 1, 'BADSHAH', 'dokiyu buti', '30.000', '0', 'dokiyu buti english pech', '2022-06-20', '2022-06-23', '2022-06-24', 'recive'),
(16, 2, 2, 'BADSHAH', 'Dokiyu Buti', '30.000', '0', 'english pech', '2022-06-20', '2022-06-23', '2022-06-24', 'recive'),
(17, 3, 3, 'GOPAL, NILESH', 'Har, Panbuti, Kansar', '65.000', '0', 'Bungali Vali(50.000), Kansar Joint(15.000)', '2022-06-20', '2022-06-29', '2022-06-30', 'recive'),
(18, 4, 4, 'GOPAL, NILESH', 'Har Buti', '50.000', '0', 'English Pech', '2022-06-20', '2022-06-29', '2022-06-30', 'recive'),
(19, 5, 5, 'GOPAL, NILESH', 'Mangalsutra pendal', '12.000', '0', 'V - 1 pgno - 81  Design no. - B ', '2022-06-20', '2022-06-25', '2022-06-26', 'recive'),
(20, 6, 6, 'RINKU, KRUNAL', 'Bangli - 4', '60.000', '2.8 inch', 'Madhuvan  Design no 18', '2022-06-20', '2022-06-26', '2022-06-27', 'recive'),
(21, 7, 7, 'GOPAL, NILESH', 'Rajwadi Viti', '10.000', '32', 'as per whatsapp', '2022-06-20', '2022-06-27', '2022-06-28', 'recive'),
(23, 8, 8, 'GOPAL, NILESH', 'Dokiyu', '40.000', '0', 'as per zerox', '2022-06-20', '2022-06-25', '2022-06-26', 'recive'),
(24, 9, 9, 'RINKU, KRUNAL', 'kadli', '20.000 to 22.000', '2.6', 'govindji catlog pg-26 Design no - 1545 ', '2022-06-20', '2022-06-26', '2022-06-27', 'recive'),
(25, 10, 10, 'GOPAL, NILESH', 'Panbuti', '12.000', '0', 'Folding Bhungli', '2022-06-22', '2022-06-24', '2022-06-25', 'recive'),
(26, 11, 11, 'GOPAL, NILESH', 'Buti,Kansar', '10.000', '0', 'Bhungli Vali(5.500 to 6.000)Kansar(4.000)', '2022-06-22', '2022-06-27', '2022-06-28', 'recive'),
(28, 12, 12, 'GOPAL, NILESH', 'rajvadi viti', '10.000', '27,29', '5,5gm 2 viti', '2022-06-23', '2022-06-26', '2022-06-27', 'recive'),
(29, 13, 13, 'GOPAL, NILESH', 'buti', '5.000', '0', 'wp mujab bhungali vali', '2022-06-23', '2022-06-26', '2022-06-27', 'recive'),
(30, 14, 14, 'GOPAL, NILESH', 'Mangalsutra pendal', '6.000', '0', 'Goldkhajana V-1 Pgno-83, Design-F', '2022-06-23', '2022-06-25', '2022-06-26', 'recive'),
(31, 15, 15, 'RINKU, KRUNAL', 'Kadli', '18.000', '2.85', 'As Per Sample', '2022-06-24', '2022-07-12', '2022-07-10', 'recive'),
(32, 16, 16, 'OMKAR VIPULBHAI', 'Gents viti', '5-6.000', '16', 'sakdo ghat, dandlo jado', '2022-06-24', '2022-07-02', '2022-07-04', 'recive'),
(33, 17, 17, 'OMKAR VIPULBHAI', 'ladies Viti', '3.000', '12', 'dandlo jado', '2022-06-24', '2022-07-02', '2022-07-04', 'recive'),
(34, 18, 18, 'BL', 'Chain', '15.000', '18', '3 sar, as per sample', '2022-06-24', '2022-07-06', '2022-07-15', 'recive'),
(35, 19, 19, 'GOPAL,NILESH', 'Kardo', '2.600', '13', '0', '2022-06-25', '2022-06-25', '2022-06-25', 'recive'),
(38, 20, 20, 'GOPAL,NILESH', 'PENDANT', '1.800', '0', 'PENDANT', '2022-06-26', '2022-06-28', '2022-06-29', 'recive'),
(39, 21, 21, 'OMKAR PARESHBHAI', 'Kardo', '8.000', '22.5', '0', '2022-06-27', '2022-07-04', '2022-07-01', 'recive'),
(40, 22, 22, 'HITESHBHAI RANINGA', 'ladies Ring', '2.000', '22', '18k', '2022-06-27', '2022-07-09', '2022-07-10', 'recive'),
(43, 23, 23, 'OMKAR PARESHBHAI', 'ladies Ring', '2.000', '8', 'rose gold', '2022-06-28', '2022-07-07', '2022-07-07', 'recive'),
(44, 24, 25, 'OMKAR PARESHBHAI', 'Gents Viti', '5.500', '28', '1.840dm , 5.430fgm jama', '2022-06-28', '2022-07-12', '2022-07-10', 'recive'),
(45, 25, 26, 'MIRAJ', 'Chain', '22.000', '19 inch', 'xerox mujab', '2022-06-28', '2022-07-03', '2022-07-04', 'recive'),
(46, 26, 27, 'RINKU, KRUNAL', 'kadli', '17.000', '2.6 ich', '0', '2022-06-28', '2022-07-04', '2022-07-04', 'recive'),
(47, 27, 28, 'MIRAJ', 'Mangalsutra', '17.000', '18 inch', 'Itallian hook', '2022-06-30', '2022-07-04', '2022-07-04', 'recive'),
(48, 28, 29, 'BHARATBHAI KATRODIYA', 'Kadi', '7.000', '0', 'As Per Sample', '2022-06-30', '2022-07-07', '2022-07-07', 'recive'),
(49, 29, 30, 'RINKU, KRUNAL', 'Ladies Kadu', '15.000', '2.55 inch', 'knv k pg no-187 - 4193', '2022-07-01', '2022-07-08', '2022-07-07', 'recive'),
(50, 30, 24, 'GOPAL, NILESH', 'Pocha-2', '80', '0', 'pocha (40+40)', '2022-07-02', '2022-07-15', '2022-07-15', 'recive'),
(51, 31, 32, 'GOPAL, NILESH', 'Buti', '3.000', '0', 'English Pech', '2022-07-03', '2022-07-05', '2022-07-08', 'recive'),
(52, 32, 33, 'OMKAR PARESHBHAI', 'Ladies Ring', '4.000', '18', '0.530 diamond weight', '2022-07-03', '2022-07-07', '2022-07-12', 'recive'),
(53, 33, 34, 'OMKAR PARESHBHAI', 'Ladies Ring', '4.000', '15', '0', '2022-07-03', '2022-07-07', '2022-07-12', 'recive'),
(58, 34, 37, 'OMKAR VIPULBHAI', 'Kandu', '20.000', '8 inch', '0', '2022-07-09', '2022-07-25', '2022-07-25', 'recive'),
(60, 35, 38, 'RINKU, KRUNAL', 'Kadli', '17.000', '2.4', 'Namuna Mujab', '2022-07-09', '2022-07-18', '2022-07-18', 'recive'),
(62, 36, 39, 'KHOKAN', 'Chain', '20.000', '24', 'As Per Whatsapp', '2022-07-09', '2022-07-14', '2022-07-15', 'recive'),
(63, 37, 31, 'OMKAR PARESHBHAI', 'Gents Ring', '8.000', '22', '0.810mg diamond', '2022-07-09', '2022-07-18', '2022-07-22', 'recive'),
(69, 38, 40, 'RINKU, KRUNAL', 'Kadli ', '18.000', '2.4', 'Ruchit V-2 PG 7 - 143', '2022-07-12', '2022-07-23', '2022-07-22', 'recive'),
(74, 39, 36, 'KARTIK', 'Pendant', '9.000', '0', 'As per Zerox Gatrad ma photo', '2022-07-15', '2022-07-21', '2022-07-22', 'recive'),
(75, 40, 35, 'KARTIK', 'Mangalsutra Pendant', '15.000', '0', 'As per zerox', '2022-07-15', '2022-07-21', '2022-07-22', 'recive'),
(76, 41, 41, 'KARTIK', 'Har', '55.000', '0', 'As Per Zerox', '2022-07-18', '2022-07-30', '2022-07-30', 'recive'),
(77, 42, 42, 'KARTIK', 'Har', '55.000', '0', 'Antique Century pg 63 - b', '2022-07-18', '2022-07-30', '2022-07-30', 'recive'),
(78, 43, 43, 'KARTIK', 'Monogram (SH) Pendant', '2.500', '0', '0', '2022-07-18', '2022-07-21', '2022-07-20', 'recive'),
(79, 44, 44, 'RINKU, KRUNAL', 'Kadi', '3.500', '50G ni Dha', 'As Per Sample', '2022-07-19', '2022-07-21', '2022-07-23', 'recive'),
(80, 45, 45, 'RINKU, KRUNAL', 'Kadli', '17.000', '2.6', 'A-95 govind catlog pg-38', '2022-07-19', '2022-07-29', '2022-07-28', 'recive'),
(84, 46, 46, 'KARTIK', 'Panbuti', '8.000', '0', 'gold art v 4 pg 160 - D3', '2022-07-23', '2022-08-01', '2022-08-01', 'recive'),
(85, 47, 47, 'RINKU, KRUNAL', 'Kadli', '17.000', '2.55', 'Zerox mujab', '2022-07-25', '2022-08-24', '2022-08-25', 'recive'),
(86, 48, 48, 'KARTIK', 'Har, buti, chandlo', '55.000', '0', 'Zerox mujab', '2022-07-25', '2022-08-24', '2022-08-25', 'recive'),
(87, 49, 49, 'KARTIK', 'Pocha', '31.660', '0', 'Zerox mujab', '2022-07-25', '2022-08-29', '2022-08-25', 'recive'),
(88, 50, 50, 'KARTIK', 'Har Buti', '48.000', '0', 'Antique Culture pg 15 - A', '2022-07-25', '2022-08-31', '2022-08-25', 'recive'),
(89, 51, 51, 'KARTIK', 'Har Matching Pocha', '25.000', '0', 'Zerox mujab', '2022-07-25', '2022-08-31', '2022-08-25', 'recive'),
(90, 52, 52, 'KARTIK', 'Har Buti', '90.000', '0', 'Zerox mujab', '2022-07-25', '2022-08-24', '2022-08-25', 'recive'),
(92, 54, 54, 'KARTIK', 'Mangalsutra', '28.000', '24 Inch', 'Zerox mujab', '2022-07-25', '2022-08-24', '2022-08-25', 'recive'),
(93, 55, 55, 'KARTIK', 'Karda - 2', '6.000', '15 - 15', '3 - 3 GM na Lashiya na Karda', '2022-07-25', '2022-07-30', '2022-08-25', 'recive'),
(96, 56, 56, 'MIRAJ', 'Mala', '30.000', '25 inch', 'Zerox mujab', '2022-07-26', '2022-07-30', '2022-08-03', 'recive'),
(99, 57, 57, 'MIRAJ', 'Buti jodi -1', '5.500', '0', 'Folding Buti', '2022-07-26', '2022-08-07', '2022-08-05', 'recive'),
(101, 58, 58, 'KARTIK', 'Tanmanyu ', '6.000', '16 inch', 'Xerox mujab', '2022-07-29', '2022-08-03', '2022-08-05', 'recive'),
(102, 59, 60, 'OMKAR VIPULBHAI', 'Gents Ring', '5.000', '17', 'Gents Ring', '2022-07-29', '2022-08-06', '2022-08-08', 'recive'),
(103, 60, 59, 'KARTIK', 'Buti', '3.000', '0', 'bhungli vadi', '2022-07-29', '2022-08-01', '2022-08-03', 'recive'),
(104, 61, 61, 'RINKU, KRUNAL', 'Kadli', '18.000', '2.6', 'Zerox mujab', '2022-07-29', '2022-08-12', '2022-08-10', 'recive'),
(105, 62, 64, 'CJ', 'Chain', '21.750', '21.000', 'D - HMC', '2022-07-29', '2022-08-16', '2022-08-15', 'recive'),
(106, 63, 66, 'RINKU, KRUNAL', 'Bangdi -2', '30.000', '2.5 inch', 'Madhuvan c - 3', '2022-07-30', '2022-08-07', '2022-08-10', 'recive'),
(107, 64, 67, 'KARTIK', 'Buti jodi -2', '12.000', '0', 'royal - 12 - 85 - i (6.000 + 6.000)', '2022-07-30', '2022-08-01', '2022-08-03', 'recive'),
(108, 65, 53, 'RINKU, KRUNAL', 'Kadli', '23.000', '2.5', 'govindji catlog pg-14 - 908', '2022-07-30', '2022-09-03', '2022-08-25', 'recive'),
(110, 66, 62, 'OMKAR PARESHBHAI', 'Pendant - 2 ', '2.000', '0', 'pendant - 2 (1.000 + 1.000)', '2022-08-01', '2022-08-06', '2022-08-07', 'recive'),
(111, 67, 68, 'OMKAR VIPULBHAI', 'Mangalsutra, Buti', '7.000', '0', 'English pech as per drawing', '2022-08-01', '2022-08-09', '2022-08-10', 'recive'),
(112, 68, 71, 'OMKAR VIPULBHAI', 'Ladies Ring', '5.000', '18', 'ladies ring - 1', '2022-08-01', '2022-08-06', '2022-08-08', 'recive'),
(113, 69, 69, 'KANVI', 'Gents Ring', '18.000', '21', '0', '2022-08-04', '2022-08-14', '2022-08-20', 'recive'),
(114, 70, 70, 'JAMNAGAR', 'Gents Ring', '3.500', '21', 'Gents Ring - 1', '2022-08-03', '2022-08-07', '2022-08-07', 'recive'),
(115, 71, 72, 'KARTIK', 'Karda Lashiya - 4', '32.000', '25, 25, 23', 'Karda 4 (8, 8, 8, 8) weight', '2022-08-03', '2022-08-04', '2022-08-06', 'recive'),
(116, 72, 73, 'RINKU, KRUNAL', 'Bangli - 2', '25.000', '2.6', 'madhuvan D - 10', '2022-08-03', '2022-08-06', '2022-08-06', 'recive'),
(117, 73, 74, 'KHOKAN', 'Chain - 1', '20.000', '25 inch', 'As per whatsapp', '2022-08-03', '2022-08-07', '2022-08-07', 'recive'),
(118, 74, 75, 'GOPAL, NILESH', 'Rajwadi Viti - 1', '10.000', '26', '0', '2022-08-03', '2022-08-08', '2022-08-08', 'recive'),
(119, 75, 76, 'CJ', 'Kadli - 1', '19.000', '2.5', 'Design CJ, 78', '2022-08-03', '2022-08-16', '2022-08-10', 'recive'),
(121, 76, 77, 'MIRAJ', 'Kada - 2', '12.000', '6.5 inch', '0', '2022-08-05', '2022-08-08', '2022-08-09', 'recive'),
(122, 77, 63, 'KARTIK', 'Dokiyu, PanButi, Folding Viti', '40.000', '0', 'dokiyu, pan buti english pech, folding viti', '2022-08-05', '2022-08-15', '2022-08-15', 'recive'),
(123, 78, 78, 'SHIVAN CHAIN', 'Chain - 1', '12.000', '18 inch', 'Zerox mujab', '2022-08-05', '2022-08-16', '2022-04-12', 'recive'),
(124, 79, 79, 'OMKAR VIPULBHAI', 'Pendant set', '8.000', '0', 'sample mujab', '2022-08-05', '2022-08-15', '2022-08-12', 'recive'),
(125, 80, 80, 'OMKAR VIPULBHAI', 'Ladies Ring', '4.000', '18', 'om ladies ring', '2022-08-05', '2022-08-15', '2022-08-12', 'recive'),
(126, 81, 81, 'MIRAJ', 'Buti jodi -1', '3.000', '0', '0', '2022-08-05', '2022-08-15', '2022-08-12', 'recive'),
(127, 82, 82, 'KARTIK', 'Antique Dokiyu, Buti', '28.000', '0', 'Antique Culture', '2022-08-05', '2022-08-24', '2022-08-20', 'recive'),
(129, 83, 65, 'KHOKAN', 'Chain', '23.000', '24.5 inch', 'AST - 516 (24.5 inch akda sathe)', '2022-08-06', '2022-08-16', '2022-08-15', 'recive'),
(132, 84, 83, 'MIRAJ', 'Mala - 1', '30.000', '19 inch', 'As Per Whatsapp', '2022-08-09', '2022-08-13', '2022-08-14', 'recive'),
(134, 85, 85, 'KARTIK', 'Karda - 1', '3.000', '14', 'whatsapp mujab', '2022-08-09', '2022-08-09', '2022-08-15', 'recive'),
(135, 86, 86, 'KARTIK', 'Pendant set', '8.000', '0', 'Royal Bar pg no 85 - I', '2022-08-09', '2022-08-14', '2022-08-15', 'recive'),
(136, 87, 87, 'RINKU, KRUNAL', 'Patla jodi - 1', '45.000', '0', 'Gold Khajana v- 1 pgno 107 - B', '2022-08-09', '2022-08-16', '2022-08-16', 'recive'),
(138, 88, 89, 'KARTIK', 'Lasiya Kardo - 1', '4.000', '21', 'Emergency Order', '2022-08-09', '2022-08-10', '2022-08-10', 'recive'),
(139, 89, 91, 'MIRAJ', 'Rudraksh Kandu - 1', '13.000', '8 inch', '0', '2022-08-13', '2022-08-13', '2022-08-14', 'recive'),
(140, 90, 90, 'OMKAR VIPULBHAI', 'Viti - 1', '3.500', '23', '0', '2022-08-13', '2022-08-24', '2022-12-20', 'recive'),
(141, 91, 88, 'KARTIK', 'Jumar Buti', '10.000', '0', 'whatsapp mujab', '2022-08-13', '2022-08-24', '2022-08-20', 'recive'),
(143, 92, 95, 'KARTIK', 'Kardo', '5.000', '18', 'Bangdi type', '2022-08-15', '2022-08-16', '2022-08-17', 'recive'),
(144, 93, 92, 'OMKAR VIPULBHAI', 'Gents Ring', '10.000', '16', 'Gents Ring(Guru Nang)', '2022-08-16', '2022-08-24', '2022-08-25', 'recive'),
(145, 94, 94, 'OMKAR VIPULBHAI', 'Ladies Ring', '2.000', '15', '0', '2022-08-16', '2022-08-25', '2022-08-25', 'recive'),
(146, 95, 93, 'CJ', 'Chain - 1', '25.000', '24 Inch', '0', '2022-08-16', '2022-08-25', '2022-08-25', 'recive'),
(147, 96, 96, 'KARTIK', 'Kadi - 1', '4.000', '0', '0', '2022-08-16', '2022-08-24', '2022-08-20', 'recive'),
(148, 97, 98, 'CJ', 'Kadli jodi - 1 ', '20.000', '2.5 inch', 'As Pre Sample', '2022-08-24', '2022-08-31', '2022-09-01', 'recive'),
(149, 98, 99, 'OMKAR VIPULBHAI', 'Rosegold Ring', '5.000', '0', 'As Per Sample', '2022-08-24', '2022-08-25', '2022-08-31', 'recive'),
(150, 99, 100, 'OMKAR VIPULBHAI', 'Buti Jodi - 1', '3.000', '0', 'whatsapp mujab', '2022-08-24', '2022-09-03', '2022-08-30', 'recive'),
(151, 100, 101, 'CJ', 'Kadi - 1', '18.000', '2.4', '0', '2022-08-24', '2022-08-31', '2022-08-31', 'recive'),
(152, 101, 103, 'BL', 'Chain - 1', '22.000', '24 Inch', '0', '2022-08-24', '2022-09-05', '2022-09-05', 'recive'),
(154, 102, 104, 'BL', 'Chain - 1', '17.260', '18 inch', 'mlg0012', '2022-08-24', '2022-09-06', '2022-09-05', 'recive'),
(155, 103, 97, 'GOPAL, NILESH', 'Mangalsutra Pendant', '15.000', '0', 'Gold Khajana v- 1 pgno 81 - D', '2022-08-24', '2022-08-29', '2022-08-28', 'recive'),
(156, 104, 105, 'GOPAL, NILESH', 'Panbuti', '8.000', '0', 'as per zerox', '2022-08-24', '2022-08-29', '2022-09-04', 'recive'),
(157, 105, 102, 'KARTIK', 'Mangalsutra Buti', '40.000', '25 inch ', '0', '2022-08-25', '2022-09-02', '2022-08-30', 'recive'),
(158, 106, 106, 'MIRAJ', 'Mala - 1', '12.000', '26 inch', '0', '2022-08-26', '2022-09-06', '2022-09-06', 'recive'),
(159, 107, 107, 'RAMANI ORNAMENTS', 'Kada Bracelet', '12.500', '2.4', 'Yellow gold kadu', '2022-08-29', '2022-09-10', '2022-09-10', 'recive'),
(160, 108, 110, 'KARTIK', 'Mangalsutra - 1', '17.000', '21 inch', 'WhatsApp mujab', '2022-09-02', '2022-09-06', '2022-09-06', 'recive'),
(163, 109, 111, 'KARTIK', 'kansar', '6.000', '5', 'tika matching', '2022-09-03', '2022-09-03', '2022-09-04', 'recive'),
(164, 110, 112, 'KARTIK', 'Pendant', '4.500', '0', 'Zerox mujab', '2022-09-05', '2022-09-05', '2022-09-06', 'recive'),
(165, 111, 115, 'KARTIK', 'Chandlo ', '7.000', '0', 'Zerox mujab', '2022-09-06', '2022-09-10', '2022-09-11', 'recive'),
(166, 112, 116, 'KARTIK', 'Mangalsutra pendal', '6.000', '0', '0', '2022-09-06', '2022-09-09', '2022-09-15', 'recive'),
(167, 113, 117, 'KARTIK', 'Rudraksh Mala - 1', '24.000', '24 Inch', '54 para', '2022-09-06', '2022-09-14', '2022-09-15', 'recive'),
(168, 114, 118, 'KARTIK', 'Ladies Ring', '3.500', '17', '0', '2022-09-06', '2022-09-14', '2022-09-15', 'recive'),
(169, 115, 119, 'KARTIK', 'Ladies Ring', '3.500', '19', '0', '2022-09-06', '2022-09-14', '2022-09-15', 'recive'),
(170, 116, 120, 'KARTIK', 'Lashiya na karda - 2', '4.000', '16, 16', 'karda (2 + 2)gram', '2022-09-06', '2022-09-06', '2022-09-06', 'recive'),
(171, 117, 108, 'KARTIK', 'vel', '1.400', '0', '0', '2022-09-06', '2022-09-06', '2022-09-03', 'recive'),
(172, 118, 128, 'MIRAJ', 'Mangalsutra - 1', '22.500', '24 Inch', '0', '2022-09-04', '2022-09-10', '2022-09-09', 'recive'),
(173, 119, 123, 'KANVI', 'Pendant - 1', '6.000', '0', 'pnd4575', '2022-09-08', '2022-09-26', '2022-09-26', 'recive'),
(174, 120, 132, 'GOPAL, NILESH', 'VITI - 2', '7.000', '16, 23', 'VITI- 2 (3.500 + 3.500)GM', '2022-09-09', '2022-12-30', '2022-12-31', 'pending'),
(175, 121, 136, 'KARTIK', 'Har PanButi', '39.000', '0', 'Gautam k pg no 6 - 3', '2022-09-13', '2022-09-23', '2022-09-23', 'recive'),
(176, 122, 138, 'KARTIK', 'Har Buti', '33.000', '0', 'Zerox mujab', '2022-09-14', '2022-09-23', '2022-09-25', 'recive'),
(177, 123, 139, 'KARTIK', 'Panbuti jodi - 1', '10.000', '0', 'Gautam k pg no 44 - 13', '2022-09-14', '2022-09-21', '2022-09-21', 'recive'),
(178, 124, 121, 'JIJA BANGALI', 'Bracelet - 1', '20.000', '0', 'Namuna Mujab', '2022-09-14', '2022-09-24', '2022-09-25', 'recive'),
(179, 125, 137, 'GOPAL, NILESH', 'Buti jodi -2', '16.000', '0', 'Pan buti 2 (8.000 + 8.000)gm', '2022-09-14', '2022-09-19', '2022-09-20', 'recive'),
(180, 126, 122, 'MIRAJ', 'Chain - 1', '22.000', '19 inch', 'Pati Chain', '2022-09-14', '2022-09-28', '2022-09-26', 'recive'),
(181, 127, 125, 'RAMANI ORNAMENTS', 'Ladies Bracelet', '11.000', '2.4', '18k', '2022-09-14', '2022-09-14', '2022-09-26', 'recive'),
(182, 128, 135, 'KARTIK', 'Mangalsutra Buti', '19.000', '20 inch', 'whatsapp mujab', '2022-09-14', '2022-09-24', '2022-09-22', 'recive'),
(183, 129, 140, 'KARTIK', 'saar - 1', '3.500', '0', 'whatsapp mujab', '2022-09-15', '2022-09-18', '2022-09-18', 'recive'),
(184, 130, 142, 'KARTIK', 'Pendant', '3.000', '0', 'Zerox mujab', '2022-09-16', '2022-09-21', '2022-09-22', 'recive'),
(185, 131, 143, 'MIRAJ', 'Rudraksh Mala', '18.000', '0', '54 Para ni Rudrax Mala', '2022-09-16', '2022-09-28', '2022-09-30', 'recive'),
(186, 132, 144, 'RINKU, KRUNAL', 'Kadli jodi - 1 ', '16.000', '2.7', 'madhuvan D - 4', '2022-09-16', '2022-09-24', '2022-09-23', 'recive'),
(187, 133, 141, 'KARTIK', 'Ladies Ring', '3.500', '12', 'Royal Bar pg no 132 - O', '2022-09-17', '2022-09-24', '2022-09-25', 'recive'),
(188, 134, 133, 'OMKAR PARESHBHAI', 'Buti jodi -1', '1.500', '0', '0', '2022-09-17', '2022-09-26', '2022-10-01', 'recive'),
(189, 135, 145, 'GOPAL, NILESH', 'Har PanButi', '40.000', '0', 'Zerox mujab', '2022-09-18', '2022-09-24', '2022-09-25', 'recive'),
(190, 136, 146, 'GOPAL, NILESH', 'buti matching Pendant', '3.000', '0', 'Zerox mujab', '2022-09-18', '2022-09-24', '2022-09-25', 'recive'),
(191, 137, 147, 'KARTIK', 'Buti jodi -1', '5.500', '0', 'Royal Bar pg no 85 - I', '2022-09-18', '2022-09-21', '2022-09-25', 'recive'),
(192, 138, 148, 'KARTIK', 'Har', '100.000', '0', 'Zerox mujab', '2022-09-18', '2022-10-14', '2022-10-02', 'recive'),
(193, 139, 149, 'KARTIK', 'Har', '45.000', '0', 'Zerox mujab', '2022-09-18', '2022-10-14', '2022-10-02', 'recive'),
(194, 140, 150, 'OMKAR PARESHBHAI', 'Pendant', '3.000', '0', '18 k Yellow Gold', '2022-09-19', '2022-10-01', '2022-09-27', 'recive'),
(195, 141, 151, 'OMKAR PARESHBHAI', 'Pendant', '2.000', '0', '0', '2022-09-19', '2022-10-01', '2022-09-26', 'recive'),
(196, 142, 152, 'KARTIK', 'Buti jodi -1', '5.000', '0', 'Royal Bar pg no 106 - N', '2022-09-19', '2022-09-26', '2022-09-26', 'recive'),
(197, 143, 154, 'KARTIK', 'Pendant set', '12.000', '0', 'Gold Khajana v- 1 pgno 84 - C', '2022-09-20', '2022-09-28', '2022-09-30', 'recive'),
(198, 144, 155, 'RINKU, KRUNAL', 'Kadli', '17.000', '2.7', 'Namuna Mujab', '2022-09-20', '2022-09-28', '2022-09-27', 'recive'),
(199, 145, 156, 'GOPAL, NILESH', 'Panbuti', '12.000', '0', '0', '2022-09-20', '2022-09-28', '2022-09-30', 'recive'),
(200, 146, 153, 'OMKAR VIPULBHAI', 'Gents Bracelet', '50.000', '8 inch', 'Nakoda 115 - nbr - 453', '2022-09-20', '2022-09-28', '2022-09-29', 'pending'),
(201, 147, 162, 'RINKU, KRUNAL', 'Bangdi - 2', '30.000', '2.45', 'madhuvan C - 19', '2022-09-21', '2022-09-26', '2022-09-26', 'recive'),
(202, 148, 163, 'KARTIK', 'Har', '38.000', '0', 'Zerox mujab chhediya vagar', '2022-09-23', '2022-09-28', '2022-10-01', 'recive'),
(203, 149, 164, 'MIRAJ', 'Rudraksh Mala', '38.000', '0', '54 para', '2022-09-23', '2022-09-29', '2022-10-02', 'recive'),
(204, 150, 165, 'KARTIK', 'Kardo - 1', '3.500', '15', 'whatsapp mujab Nakor dandlo', '2022-09-23', '2022-09-28', '2022-09-29', 'recive'),
(206, 151, 166, 'GOPAL, NILESH', 'dokiyu', '22.000', '0', 'preet gold pg no 55 - c', '2022-09-24', '2022-10-06', '2022-10-05', 'recive'),
(207, 152, 167, 'RINKU, KRUNAL', 'kadli', '18.000', '2.55', 'govindji C. v - 2 pg no 1 - 1567', '2022-09-24', '2022-09-26', '2022-10-05', 'recive'),
(208, 153, 168, 'KARTIK', 'karda - 2', '12.000', '25, 26', 'karda - 2(6.000 + 6.000)gm', '2022-09-24', '2022-10-02', '2022-10-03', 'recive'),
(210, 155, 170, 'GOPAL, NILESH', 'viti', '3.000', '17', 'namuna mujab', '2022-09-24', '2022-09-28', '2022-10-01', 'recive'),
(211, 156, 171, 'MIRAJ', 'Rudraksh Mala', '13', '0', 'àª¸àª³àª‚àª—  àª®àª¾àª²àª¾', '2022-09-24', '2022-09-28', '2022-10-01', 'recive'),
(212, 157, 181, 'KARTIK', 'Ladies Kaido', '3.000', '23', 'Namuna Mujab', '2022-09-26', '2022-09-26', '2022-09-30', 'recive'),
(213, 158, 173, 'select', 'viti', '2.750', '15', 'whatsapp mujab', '2022-09-27', '2022-09-27', '2022-09-28', 'recive'),
(214, 159, 188, 'MIRAJ', 'Mangalsutra', '14.000', '18 inch', '0', '2022-09-28', '2022-10-04', '2022-10-03', 'recive'),
(215, 160, 189, 'KARTIK', 'buti', '6.000', '0', 'Royal Bar pg no 111 - M', '2022-09-28', '2022-09-29', '2022-10-01', 'recive'),
(216, 161, 190, 'RINKU, KRUNAL', 'Kadli', '22.000', '2.45', 'madhuvan A - 4', '2022-09-28', '2022-10-02', '2022-10-02', 'recive'),
(217, 162, 191, 'KARTIK', 'Har PanButi', '33.000', '0', 'Chediya Vagar Zerox mujab', '2022-09-29', '2022-10-04', '2022-10-07', 'recive'),
(218, 163, 174, 'KARTIK', 'dokiyu buti', '23.000', '0', 'Zerox mujab', '2022-09-29', '2022-10-04', '2022-10-03', 'recive'),
(219, 164, 194, 'KARTIK', 'VITI', '2.500', '14', '0', '2022-10-01', '2022-10-04', '2022-10-04', 'recive'),
(220, 165, 195, 'RINKU, KRUNAL', 'Bacha Kadli', '6.000', 'Folding', '0', '2022-10-01', '2022-10-05', '2022-10-12', 'recive'),
(222, 167, 109, 'KARTIK', 'Mangalsutra - 1', '45.000', '24 Inch', 'Zerox mujab', '2022-10-01', '2022-10-19', '2022-10-20', 'pending'),
(223, 168, 183, 'OMKAR PARESHBHAI', 'Ring', '3.000', '18', '0', '2022-10-01', '2022-10-06', '2022-10-07', 'pending'),
(224, 169, 184, 'OMKAR PARESHBHAI', 'VITI', '3.500', '18', '0', '2022-10-01', '2022-10-06', '2022-10-07', 'pending'),
(225, 170, 185, 'OMKAR PARESHBHAI', 'VITI', '3.000', '13', '0', '2022-10-01', '2022-10-06', '2022-10-07', 'pending'),
(226, 171, 113, 'KARTIK', 'Kalkati set - 1', '60.000', '0', 'Gold Khajana v- 2 pgno 25 - B', '2022-10-01', '2022-11-22', '2022-11-23', 'pending'),
(227, 172, 114, 'STOCK', 'Mangalsutra Buti', '19.000', '0', 'msg0059', '2022-10-01', '0001-01-01', '2022-11-23', 'pending'),
(228, 173, 193, 'RINKU, KRUNAL', 'Kadli', '22.000', '2.2', 'govindji catlog v2 pg-11 - 877', '2022-10-03', '2022-10-12', '2022-10-12', 'recive'),
(231, 176, 192, 'MIRAJ', 'Mala', '22.000', '0', '54 Para ni Mala', '2022-10-03', '2022-10-12', '2022-10-08', 'recive'),
(234, 177, 187, 'GOPAL, NILESH', 'Mangalsutra', '39.000', '24 Inch', 'Zerox mujab', '2022-10-03', '2022-10-14', '2022-10-15', 'pending'),
(235, 178, 134, 'KARTIK', 'Har Buti', '45.000', '0', 'Gold Khajana v- 2 pgno 43 - B', '2022-10-03', '2022-11-22', '2022-11-23', 'pending'),
(236, 179, 182, 'OMKAR VIPULBHAI', 'Couple ring', '8.000', '20, 13', 'Rose gold', '2022-10-03', '2022-10-05', '2022-10-04', 'recive'),
(237, 180, 179, 'OMKAR VIPULBHAI', 'Gents Ring', '7.000', '21', '0', '2022-10-03', '2022-10-03', '2022-09-30', 'recive'),
(239, 182, 197, 'CJ', 'Kadli', '19.000', '2.5', '0', '2022-10-04', '2022-10-14', '2022-10-10', 'recive'),
(240, 183, 198, 'OMKAR VIPULBHAI', 'Mangalsutra', '7.000', '20 inch', '0', '2022-10-04', '2022-10-16', '2022-10-18', 'recive'),
(241, 184, 172, 'JIJA BANGALI', 'lucky - 2', '12', '0', 'Gents Lucky - 2(6 + 6)GM', '2022-10-03', '2022-10-05', '2022-10-05', 'recive'),
(242, 185, 157, 'OMKAR PARESHBHAI', 'Kardo', '6.000', '24', '0', '2022-10-05', '2022-10-16', '2022-10-22', 'recive'),
(243, 186, 161, 'OMKAR PARESHBHAI', 'Ladies Ring', '4.000', '19', '0', '2022-10-05', '2022-10-16', '2022-10-22', 'recive'),
(244, 187, 186, 'STOCK', 'Chudli ', '6.500', '0', '0', '2022-10-05', '2022-10-05', '2022-10-05', 'pending'),
(245, 188, 200, 'KENVI', 'Couple ring', '8.000', '12 , 18', 'CR - 4132', '2022-10-05', '2022-10-16', '2022-10-17', 'pending'),
(246, 189, 201, 'OMKAR VIPULBHAI', 'Nosepin', '0', '0', 'Realdiamond Nosepin', '2022-10-05', '2022-10-09', '2022-10-10', 'pending'),
(247, 190, 158, 'JAMNAGAR', ' ', '3.000', '23', 'à¥ viti', '2022-10-07', '2022-10-16', '2022-10-22', 'recive'),
(248, 191, 159, 'JAMNAGAR', 'VITI', '3.000', '19', 'M - Viti', '2022-10-07', '2022-10-16', '2022-10-22', 'recive'),
(249, 192, 160, 'JAMNAGAR', 'VITI', '3.000', '11', 'flower viti', '2022-10-07', '2022-10-16', '2022-10-22', 'recive'),
(251, 193, 202, 'OMKAR VIPULBHAI', 'Gents Ring', '10.000', '35', 'Yellow gold', '2022-10-07', '2022-10-16', '2022-10-17', 'pending'),
(252, 194, 203, 'OMKAR PARESHBHAI', 'VITI', '10.000.', '42', '0', '2022-10-07', '2022-10-14', '2022-10-15', 'pending'),
(253, 195, 204, 'RINKU, KRUNAL', 'Kadli', '17.000', '2.6', '0', '2022-10-07', '2022-10-14', '2022-10-14', 'recive'),
(254, 196, 205, 'MIRAJ', 'Mangalsutra buti', '18.000', '17 inch', '0', '2022-10-07', '2022-10-14', '2022-10-15', 'recive'),
(255, 197, 206, 'KARTIK', 'buti', '4.500', '0', 'Bhungli vali', '2022-10-07', '2022-10-14', '2022-10-12', 'recive'),
(256, 198, 210, 'RINKU, KRUNAL', 'Kadli', '16.000', '2.7', 'govindji catlog v - 2 pg-14 - A56', '2022-10-12', '2022-10-24', '2022-10-25', 'pending'),
(257, 199, 207, 'KARTIK', 'Har Buti', '35.000', '0', 'Zerox mujab', '2022-10-12', '2022-10-24', '2022-10-25', 'pending'),
(258, 200, 208, 'KARTIK', 'Buti jodi -1', '7.250', '0', 'Royal Bar pg no 85 - i ', '2022-10-12', '2022-10-16', '2022-10-25', 'recive'),
(259, 201, 209, 'KARTIK', 'dokiyu buti', '40.000', '0', 'English Pech', '2022-10-12', '2022-10-31', '2022-11-01', 'pending'),
(262, 203, 212, 'MIRAJ', 'Mangalsutra', '28.000', '0', 'Gold Khajana v- 2 pgno 90 - C', '2022-10-14', '2022-10-15', '2022-10-17', 'recive'),
(263, 204, 213, 'KARTIK', 'buti', '6.000', '0', 'Gold Khajana v- 2 pgno 95 - B', '2022-10-14', '2022-10-16', '2022-10-21', 'recive'),
(264, 205, 214, 'KARTIK', 'Kardo', '4.000', '20', 'whatsapp mujab', '2022-10-14', '2022-10-16', '2022-10-17', 'recive'),
(265, 206, 215, 'MIRAJ', 'Mangalsutra', '15.000', '18 inch', 'Zerox mujab', '2022-10-14', '2022-10-19', '2022-10-20', 'pending'),
(266, 207, 216, 'RINKU, KRUNAL', 'Kadli', '13.000', '0', 'madhuvan D - 1', '2022-10-14', '2022-10-19', '2022-10-20', 'pending'),
(267, 208, 217, 'KARTIK', 'Pendant', '3.000', '0', 'Pan buti matching pendent', '2022-10-14', '2022-10-17', '2022-10-18', 'recive'),
(268, 209, 218, 'OMKAR VIPULBHAI', 'Pendant', '6.000', '0', '18 k Rose Gold', '2022-10-14', '2022-10-16', '2022-10-17', 'pending'),
(269, 210, 219, 'KARTIK', 'Mangalsutra', '30.000', '0', 'Zerox mujab', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(270, 211, 220, 'RAMANI ORNAMENTS', 'Ladies Bracelet', '12.000', '0', '18 k Yellow Gold', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(271, 212, 221, 'RAMANI ORNAMENTS', 'Gents Bracelet', '9.000', '0', 'Rose gold', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(272, 213, 222, 'GOPAL, NILESH', 'rajvadi viti', '12.000', '17', '0', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(273, 214, 223, 'OMKAR PARESHBHAI', 'VITI', '9.000', '18', '0', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(274, 215, 196, 'MIRAJ', 'Mangalsutra Chain', '6.000', '19 inch', 'Namuna Mujab', '2022-10-14', '2022-10-21', '2022-10-22', 'pending'),
(275, 216, 211, 'MIRAJ', 'Chain', '11.500', '22 inch', '0', '2022-10-13', '2022-10-16', '2022-10-20', 'recive'),
(276, 217, 224, 'MIRAJ', 'Mangalsutra', '18.000', '18 inch', '0', '2022-10-16', '2022-10-21', '2022-10-22', 'pending'),
(277, 218, 225, 'MIRAJ', 'Kandu', '9.000', '8 inch', '8 inch akda sathe', '2022-10-18', '2022-10-19', '2022-10-20', 'recive'),
(278, 219, 228, 'KARTIK', 'pocha - 3', '75', '0', 'pocha - 3 (25+25+25)', '2022-10-18', '2022-10-20', '2022-10-20', 'recive'),
(280, 220, 227, 'KARTIK', 'Bracelet', '20.000', '0', 'gold art v 5 pg 5 - B', '2022-10-18', '2022-10-21', '2022-10-27', 'recive'),
(281, 221, 226, 'KARTIK', 'Jumar Kadi', '2.500', '0', '0', '2022-10-18', '2022-10-18', '2022-10-20', 'recive'),
(282, 222, 231, 'RINKU, KRUNAL', 'kadli', '6.000', '2', '0', '2022-10-19', '2022-10-21', '2022-10-22', 'pending'),
(283, 223, 229, 'KARTIK', 'tops', '5.000', '0', 'Emergency Order', '2022-10-19', '2022-10-21', '2022-10-20', 'recive'),
(284, 224, 230, 'KARTIK', 'Latkan', '2.500', '0', '0', '2022-10-19', '2022-10-21', '2022-10-28', 'recive'),
(285, 225, 232, 'GOPAL, NILESH', 'buti', '6.000', '0', 'bhungli vadi', '2022-10-20', '2022-10-21', '2022-10-21', 'recive');

-- --------------------------------------------------------

--
-- Table structure for table `orderpro`
--

CREATE TABLE `orderpro` (
  `id` int(11) NOT NULL,
  `vrno` int(11) NOT NULL DEFAULT 1,
  `partyname` varchar(40) NOT NULL,
  `proname` varchar(40) NOT NULL,
  `pweight` varchar(20) NOT NULL,
  `psize` varchar(10) NOT NULL,
  `prodetail` varchar(100) NOT NULL,
  `orderno` int(10) NOT NULL,
  `orderdt` date NOT NULL,
  `disdate` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderpro`
--

INSERT INTO `orderpro` (`id`, `vrno`, `partyname`, `proname`, `pweight`, `psize`, `prodetail`, `orderno`, `orderdt`, `disdate`, `status`) VALUES
(24, 1, 'PB', 'dokiyu buti', '30.000', '0', 'dokiyu buti english pech', 239, '2022-06-20', '2022-06-24', 'complete'),
(25, 2, 'PB ', 'Dokiyu Buti', '30.000', '0', 'english pech', 239, '2022-06-20', '2022-06-24', 'complete'),
(26, 3, 'PB ', 'Har, Panbuti, Kansar', '65.000', '0', 'Bungali Vali(50.000), Kansar Joint(15.000)', 235, '2022-06-20', '2022-06-30', 'complete'),
(27, 4, 'PB', 'Har Buti', '50.000', '0', 'English Pech', 33, '2022-06-20', '2022-06-30', 'complete'),
(28, 5, 'PB ', 'Mangalsutra pendal', '12.000', '0', 'V - 1 pgno - 81  Design no. - B ', 274, '2022-06-20', '2022-06-26', 'complete'),
(29, 6, 'PB ', 'Bangli - 4', '60.000', '2.8 inch', 'Madhuvan  Design no 18', 250, '2022-06-20', '2022-06-27', 'complete'),
(30, 7, 'PB ', 'Rajwadi Viti', '10.000', '32', 'as per whatsapp', 251, '2022-06-20', '2022-06-28', 'complete'),
(31, 8, 'PB ', 'Dokiyu', '40.000', '0', 'as per zerox', 254, '2022-06-20', '2022-06-26', 'complete'),
(32, 9, 'PB ', 'kadli', '20.000 to 22.000', '2.6', 'govindji catlog pg-26 Design no - 1545 ', 256, '2022-06-20', '2022-06-27', 'complete'),
(33, 10, 'PB', 'Panbuti', '12.000', '0', 'Folding Bhungli', 245, '2022-06-22', '2022-06-25', 'complete'),
(34, 11, 'PB', 'Buti,Kansar', '10.000', '0', 'Bhungli Vali(5.500 to 6.000)Kansar(4.000)', 259, '2022-06-22', '2022-06-28', 'complete'),
(36, 12, 'DM', 'rajvadi viti', '10.000', '27,29', '5,5gm 2 viti', 0, '2022-06-23', '2022-06-27', 'complete'),
(37, 13, 'DM', 'buti', '5.000', '0', 'wp mujab bhungali vali', 0, '2022-06-23', '2022-06-27', 'complete'),
(38, 14, 'PB', 'Mangalsutra pendal', '6.000', '0', 'Goldkhajana V-1 Pgno-83, Design-F', 261, '2022-06-23', '2022-06-26', 'complete'),
(39, 15, 'Yagnarajbhai Manjariya', 'Kadli', '18.000', '2.85', 'As Per Sample', 218, '2022-06-24', '2022-07-15', 'complete'),
(40, 16, 'Deepakbhai V. Pathak', 'Gents viti', '5-6.000', '16', 'sakdo ghat, dandlo jado', 217, '2022-06-24', '2022-07-02', 'complete'),
(41, 17, 'Deepakbhai V. Pathak', 'ladies Viti', '3.000', '12', 'dandlo jado', 217, '2022-06-24', '2022-07-02', 'complete'),
(42, 18, 'Sajidbhai Dabbawala', 'Chain', '15.000', '18', '3 sar, as per sample', 216, '2022-06-24', '2022-07-08', 'complete'),
(43, 19, 'PB', 'Kardo', '2.600', '13', '0', 0, '2022-06-25', '2022-06-25', 'complete'),
(44, 20, 'PB', 'PENDANT', '1.800', '0', 'PENDANT', 264, '2022-06-25', '2022-06-29', 'complete'),
(45, 21, 'Bhavikbhai Ribadiya', 'Kardo', '8.000', '22.5', '0', 219, '2022-06-27', '2022-07-04', 'complete'),
(46, 22, 'Akrambhai Jamalbhai Agwan', 'ladies Ring', '2.000', '22', '18k', 220, '2022-06-27', '2022-07-06', 'complete'),
(47, 23, 'hardikbhai Vyas', 'ladies Ring', '2.000', '8', 'rose gold', 221, '2022-06-27', '2022-07-08', 'complete'),
(48, 24, 'PB ', 'Pocha-2', '80', '0', 'pocha (40+40)', 268, '2022-06-28', '2022-07-15', 'complete'),
(49, 25, 'Rajeshbhai Vaghasiya', 'Gents Viti', '5.500', '28', '1.840dm , 5.430fgm jama', 223, '2022-06-28', '2022-07-12', 'complete'),
(50, 26, 'bharatbhai vanpariya', 'Chain', '22.000', '19 inch', 'Zerox mujab', 224, '2022-06-28', '2022-07-06', 'complete'),
(51, 27, 'bharatbhai vanpariya', 'kadli', '17.000', '2.6 ich', '0', 224, '2022-06-28', '2022-07-06', 'complete'),
(53, 28, 'Jayeshbhai Savaliya', 'Mangalsutra', '17.000', '18 inch', 'Itallian hook', 225, '2022-06-30', '2022-07-06', 'complete'),
(54, 29, 'PB', 'Kadi', '7.000', '0', 'As Per Sample', 272, '2022-06-30', '2022-07-07', 'complete'),
(55, 30, 'PB', 'Ladies Kadu', '15.000', '2.55 inch', 'knv k pg no-187 - 4193', 271, '2022-07-01', '2022-07-08', 'complete'),
(56, 31, 'VANDNABEN AGRAWAT', 'Gents Ring', '8.000', '22', '0.810mg diamond', 226, '2022-07-01', '2022-08-26', 'complete'),
(57, 32, 'PB', 'Buti', '3.000', '0', 'English Pech', 275, '2022-07-01', '2022-07-07', 'complete'),
(58, 33, 'Ketanbhai Hemani', 'Ladies Ring', '4.000', '18', '0.530mg diamond weight', 227, '2022-07-02', '2022-07-08', 'complete'),
(59, 34, 'Ketanbhai Hemani', 'Ladies Ring', '4.000', '15', '0', 227, '2022-07-02', '2022-07-08', 'complete'),
(60, 35, 'PB', 'Mangalsutra Pendant', '15.000', '0', 'As per zerox', 276, '2022-07-03', '2022-07-23', 'complete'),
(61, 36, 'PB', 'Pendant', '9.000', '0', 'As per Zerox Gatrad ma photo', 0, '2022-07-15', '2022-07-22', 'complete'),
(62, 37, 'Mukeshbhai Kakrecha', 'Kandu', '20.000', '8 inch', '0', 230, '2022-07-07', '2022-08-03', 'complete'),
(90, 38, 'Jigneshbhai Vakoter', 'Kadli', '17.000', '2.4', 'Namuna Mujab', 228, '2022-07-09', '2022-07-22', 'complete'),
(95, 39, 'PB', 'Chain', '20.000', '24', 'As Per Whatsapp', 280, '2022-07-09', '2022-07-15', 'complete'),
(98, 40, 'PB', 'Kadli ', '18.000', '2.4', 'Ruchit V-2 PG 7 - 143', 270, '2022-07-12', '2022-07-23', 'complete'),
(102, 41, 'PB', 'Har', '55.000', '0', 'As Per Zerox', 281, '2022-07-17', '2022-08-01', 'complete'),
(103, 42, 'PB', 'Har', '55.000', '0', 'Antique Century pg 63 - b', 281, '2022-07-17', '2022-08-01', 'complete'),
(104, 43, 'PB', 'Monogram (SH) Pendant', '2.500', '0', '0', 290, '2022-07-18', '2022-07-21', 'complete'),
(107, 44, 'PB', 'Kadi', '3.500', '50G ni Dha', 'As Per Sample', 291, '2022-07-19', '2022-07-23', 'complete'),
(110, 45, 'PB', 'Kadli', '17.000', '2.6', 'A-95 govind catlog pg-38', 289, '2022-07-19', '2022-07-29', 'complete'),
(112, 46, 'Rajubhai Ravji Vala', 'Panbuti', '8.000', '0', 'gold art v 4 pg 160 - D3', 237, '2022-07-21', '2022-08-07', 'complete'),
(113, 47, 'PB', 'Kadli', '17.000', '2.55', 'Zerox mujab', 296, '2022-07-25', '2022-08-24', 'complete'),
(114, 48, 'PB', 'Har, buti, chandlo', '55.000', '0', 'Zerox mujab', 296, '2022-07-25', '2022-08-24', 'complete'),
(115, 49, 'PB', 'Pocha', '31.660', '0', 'Zerox mujab', 296, '2022-07-25', '2022-08-29', 'complete'),
(116, 50, 'PB', 'Har Buti', '48.000', '0', 'Antique Culture pg 15 - A', 274, '2022-07-25', '2022-08-31', 'complete'),
(117, 51, 'PB', 'Har Matching Pocha', '25.000', '0', 'Zerox mujab', 274, '2022-07-25', '2022-08-31', 'complete'),
(118, 52, 'PB', 'Har Buti', '90.000', '0', 'Zerox mujab', 266, '2022-07-25', '2022-08-24', 'complete'),
(119, 53, 'PB', 'Kadli', '23.000', '2.5', 'govindji catlog pg-14 - 908', 266, '2022-07-25', '2022-09-03', 'complete'),
(120, 54, 'PB', 'Mangalsutra', '28.000', '24 Inch', 'Zerox mujab', 266, '2022-07-25', '2022-08-24', 'complete'),
(121, 55, 'PB', 'Karda - 2', '6.000', '15 - 15', '3 - 3 GM na Lashiya na Karda', 266, '2022-07-25', '2022-07-30', 'complete'),
(133, 56, 'PB', 'Mala', '30.000', '25 inch', 'Zerox mujab', 298, '2022-07-26', '2022-08-03', 'complete'),
(134, 57, 'VAJUBHAI DESAI', 'Buti jodi -1', '5.500', '0', 'Folding Buti', 239, '2022-07-25', '2022-08-26', 'complete'),
(137, 58, 'PB', 'Tanmanyu ', '6.000', '16 inch', 'Xerox mujab', 299, '2022-07-26', '2022-08-03', 'complete'),
(139, 59, 'YASHIFBHAI DESAI', 'Buti', '3.000', '0', 'bhungli vadi', 240, '2022-07-27', '2022-08-04', 'complete'),
(140, 60, 'RAGVENDRABHAI JOSHI', 'Gents Ring', '5.000', '17', 'Gents Ring', 241, '2022-07-27', '2022-08-07', 'complete'),
(143, 61, 'PB', 'Kadli', '18.000', '2.6', 'Zerox mujab', 274, '2022-07-29', '2022-08-13', 'complete'),
(144, 62, 'BHARGAVBHAI ADHIYARU', 'Pendant - 2 ', '2.000', '0', 'pendant - 2 (1.000 + 1.000)', 245, '2022-07-29', '2022-08-07', 'complete'),
(145, 63, 'MAHEBUBBHAI NIJAAMBHAI KHURESHI', 'Dokiyu, PanButi, Folding Viti', '40.000', '0', 'dokiyu, pan buti english pech, folding viti', 242, '2022-07-29', '2022-08-16', 'complete'),
(146, 64, 'MAHEBUBBHAI NIJAAMBHAI KHURESHI', 'Chain', '21.750', '21 inch', 'D - HMC', 242, '2022-07-29', '2022-08-16', 'complete'),
(147, 65, 'MAHEBUBBHAI NIJAAMBHAI KHURESHI', 'Chain', '23.000', '24.5 inch', 'AST - 516 (24.5 inch akda sathe)', 242, '2022-07-29', '2022-08-16', 'complete'),
(148, 66, 'PB', 'Bangdi -2', '30.000', '2.5 inch', 'Madhuvan c - 3', 300, '2022-07-30', '2022-08-07', 'complete'),
(149, 67, 'PB', 'Buti jodi -2', '12.000', '0', 'royal - 12 - 85 - i (6.000 + 6.000)', 302, '2022-07-30', '2022-08-03', 'complete'),
(153, 68, 'DILIPBHAI METHA', 'Mangalsutra, Buti', '7.000', '0', 'English pech as per drawing', 246, '2022-08-01', '2022-08-09', 'complete'),
(154, 69, 'NARANDRABHAI MUGALPARA', 'Gents Ring', '18.000', '21', '0', 247, '2022-08-01', '2022-08-24', 'complete'),
(155, 70, 'JIGISHABEN SOLANKI', 'Gents Ring', '3.500', '21', 'Gents Ring - 1', 248, '2022-08-01', '2022-08-07', 'complete'),
(156, 71, 'RAGVENDRABHAI JOSHI', 'Ladies Ring', '5.000', '18', 'ladies ring - 1', 249, '2022-08-01', '2022-08-07', 'complete'),
(157, 72, 'PB', 'Karda Lashiya - 4', '32.000', '25, 25, 23', 'Karda 4 (8, 8, 8, 8) weight', 284, '2022-08-03', '2022-08-04', 'complete'),
(158, 73, 'PB', 'Bangli - 2', '25.000', '2.6', 'madhuvan D - 10', 284, '2022-08-03', '2022-08-06', 'complete'),
(159, 74, 'PB', 'Chain - 1', '20.000', '25 inch', 'As per whatsapp', 284, '2022-08-03', '2022-08-07', 'complete'),
(160, 75, 'PB', 'Rajwadi Viti - 1', '10.000', '26', '0', 305, '2022-08-03', '2022-08-08', 'complete'),
(161, 76, 'ANANYABEN BLOCH', 'Kadli - 1', '19.000', '2.5', 'Design CJ, 78', 250, '2022-08-03', '2022-08-18', 'complete'),
(162, 77, 'PB', 'Kada - 2', '12.000', '6.5 inch', '0', 310, '2022-08-04', '2022-08-08', 'complete'),
(163, 78, 'KANCHANBEN KABARIYA', 'Chain - 1', '12.000', '18 inch', 'Zerox mujab', 251, '2022-08-04', '2022-08-18', 'complete'),
(164, 79, 'KANCHANBEN KABARIYA', 'Pendant set', '8.000', '0', 'sample mujab', 251, '2022-08-04', '2022-08-18', 'complete'),
(165, 80, 'KANCHANBEN KABARIYA', 'Ladies Ring', '4.000', '18', 'om ladies ring', 252, '2022-08-04', '2022-08-31', 'complete'),
(166, 81, 'KANCHANBEN KABARIYA', 'Buti jodi -1', '3.000', '0', '0', 252, '2022-08-04', '2022-08-18', 'complete'),
(167, 82, 'AMITBHAI UNDHAVIYA', 'Antique Dokiyu, Buti', '28.000', '0', 'Antique Culture', 0, '2022-08-04', '2022-08-24', 'complete'),
(171, 83, 'PB', 'Mala - 1', '30.000', '19 inch', 'As Per Whatsapp', 318, '2022-08-07', '2022-08-14', 'complete'),
(173, 85, 'PB', 'Karda - 1', '3.000', '14', 'whatsapp mujab', 320, '2022-08-09', '2022-08-09', 'complete'),
(174, 86, 'PB', 'Pendant set', '8.000', '0', 'Royal Bar pg no 85 - I', 320, '2022-08-09', '2022-08-14', 'complete'),
(175, 87, 'PB', 'Patla jodi - 1', '45.000', '0', 'Gold Khajana v- 1 pgno 107 - B', 321, '2022-08-09', '2022-08-16', 'complete'),
(176, 88, 'AHADBHAI PARMAR', 'Jumar Buti', '10.000', '0', 'whatsapp mujab', 253, '2022-08-09', '2022-08-24', 'complete'),
(178, 89, 'PB', 'Lasiya Kardo - 1', '4.000', '21', 'Emergency Order', 323, '2022-08-09', '2022-08-10', 'complete'),
(183, 90, 'KRISHANBHAI KATARIYA', 'Viti - 1', '3.500', '23', '0', 255, '2022-08-09', '2022-08-24', 'complete'),
(184, 91, 'RAJUBHAI AKBARI', 'Rudraksh Kandu - 1', '13.000', '8 inch', '0', 257, '2022-08-11', '2022-08-16', 'complete'),
(186, 92, 'VIPULBHAI VINUBHAI RAMANI', 'Gents Ring', '10.000', '16', 'Gents Ring(Guru Nang)', 258, '2022-08-13', '2022-08-25', 'complete'),
(187, 93, 'PRAFULBHAI PANDYA', 'Chain - 1', '25.000', '24 Inch', '0', 259, '2022-08-13', '2022-09-08', 'complete'),
(188, 94, 'FORAMBEN PANDYA', 'Ladies Ring', '2.000', '15', '0', 260, '2022-08-13', '2022-08-29', 'complete'),
(189, 95, 'PB', 'Kardo', '5.000', '18', 'Bangdi type', 327, '2022-08-13', '2022-08-16', 'complete'),
(191, 96, 'PB', 'Kadi - 1', '4.000', '0', '0', 329, '2022-08-16', '2022-08-24', 'complete'),
(192, 97, 'PB', 'Mangalsutra Pendant', '15.000', '0', 'Gold Khajana v- 1 pgno 81 - D', 334, '2022-08-24', '2022-08-29', 'complete'),
(193, 98, 'ALTAFBHAI ARIFBHAI NAGANI', 'Kadli jodi - 1 ', '20.000', '2.5 inch', 'As Pre Sample', 262, '2022-08-24', '2022-09-08', 'complete'),
(194, 99, 'ROHITBHAI MUGALPARA', 'Rosegold Ring', '5.000', '0', 'As Per Sample', 263, '2022-08-24', '2022-08-25', 'complete'),
(195, 100, 'URMIBEN SHUBHAMBHAI JALAVADIYA', 'Buti Jodi - 1', '3.000', '0', 'whatsapp mujab', 264, '2022-08-24', '2022-09-06', 'complete'),
(196, 101, 'JIGNESHBHAI VAKOTER', 'Kadi - 1', '18.000', '2.4', '0', 265, '2022-08-24', '2022-09-03', 'complete'),
(197, 102, 'SUNITABEN JAGDISHBHAI KALARIYA', 'Mangalsutra Buti', '40.000', '25 inch ', '0', 266, '2022-08-24', '2022-09-02', 'complete'),
(198, 103, 'BHAVNABEN DILIPBHAI ROKAD', 'Chain - 1', '22.000', '24 Inch', '0', 267, '2022-08-24', '2022-09-26', 'complete'),
(199, 104, 'BHAVNABEN DILIPBHAI ROKAD', 'Chain - 1', '17.260', '18 inch', 'mlg0012', 267, '2022-08-24', '2022-09-26', 'complete'),
(200, 105, 'PB', 'Panbuti', '8.000', '0', 'as per zerox', 340, '2022-08-24', '2022-08-29', 'complete'),
(201, 106, 'INDUBEN ARVINDBHAI SOLANKI', 'Mala - 1', '12.000', '26 inch', '0', 268, '2022-08-26', '2022-09-08', 'complete'),
(202, 107, 'SURESHBHAI CHATTURBHAI RADADIYA', 'Kada Bracelet', '12.500', '2.4', 'Yellow gold kadu', 271, '2022-08-27', '2022-09-26', 'complete'),
(203, 108, 'NASIMBEN AGWAN', 'vel', '1.400', '0', '0', 272, '2022-08-27', '2022-09-24', 'complete'),
(204, 109, 'NARANDRABHAI MUGALPARA', 'Mangalsutra Buti', '51.000', '24 Inch', 'Zerox mujab', 273, '2022-08-29', '2022-10-20', 'KARTIK'),
(205, 110, 'PB', 'Mangalsutra - 1', '17.000', '21 inch', 'WhatsApp mujab', 346, '2022-08-31', '2022-09-09', 'complete'),
(207, 111, 'PB', 'kansar', '6.000', '5', 'tika matching', 344, '2022-08-31', '2022-09-05', 'complete'),
(211, 112, 'BIMALBHAI POKAR', 'Pendant', '4.500', '0', 'Zerox mujab', 275, '2022-08-31', '2022-09-09', 'complete'),
(212, 113, 'MUKESHBHAI SAVALIYA', 'Kalkati set - 1', '60.000', '0', 'Gold Khajana v- 2 pgno 25 - B', 276, '2022-09-02', '2022-11-23', 'KARTIK'),
(213, 114, 'MUKESHBHAI SAVALIYA', 'Mangalsutra Buti', '19.000', '0', 'msg0059', 276, '2022-09-02', '2022-11-23', 'STOCK'),
(214, 115, 'PB', 'Chandlo ', '7.000', '0', 'Zerox mujab', 354, '2022-09-06', '2022-09-12', 'complete'),
(215, 116, 'PB', 'Mangalsutra pendal', '6.000', '0', '0', 353, '2022-09-06', '2022-09-09', 'complete'),
(216, 117, 'PB', 'Rudraksh Mala - 1', '24.000', '24 Inch', '54 para', 352, '2022-09-06', '2022-09-14', 'complete'),
(217, 118, 'PB', 'Ladies Ring', '3.500', '17', '0', 352, '2022-09-06', '2022-09-14', 'complete'),
(218, 119, 'PB', 'Ladies Ring', '3.500', '19', '0', 352, '2022-09-06', '2022-09-14', 'complete'),
(219, 120, 'PB', 'Lashiya na karda - 2', '4.000', '16, 16', 'karda (2 + 2)gram', 350, '2022-09-06', '2022-09-08', 'complete'),
(220, 121, 'DILIPBHAI NANUBHAI VORA', 'Bracelet - 1', '20.000', '0', 'Namuna Mujab', 280, '2022-09-06', '2022-10-03', 'complete'),
(221, 122, 'GANSHYAMBHAI GOGANBHAI SUHAGIYA', 'Chain - 1', '22.000', '19 inch', 'Pati Chain', 269, '2022-08-16', '2022-09-26', 'recived from MIRAJ'),
(222, 123, 'GANSHYAMBHAI GOGANBHAI SUHAGIYA', 'Pendant - 1', '6.000', '0', 'pnd4575', 269, '2022-08-16', '2022-09-26', 'recived from KANVI'),
(223, 124, 'GANSHYAMBHAI GOGANBHAI SUHAGIYA', 'Gents Bracelet', '15.900', '0', '0', 269, '2022-08-16', '2022-09-26', 'Stock'),
(224, 125, 'GANSHYAMBHAI GOGANBHAI SUHAGIYA', 'Ladies Bracelet', '11.000', '2.4', '18k', 269, '2022-08-16', '2022-09-26', 'recived from RAMANI ORNAMENTS'),
(226, 127, 'MAGANBHAI VALJIBHAI VALA', 'Dokiyu Buti', '19.960', '0', '0', 282, '2022-09-07', '2022-11-10', 'pending'),
(227, 128, 'MUKESHBHAI FURJIBHAI VIRADIYA', 'Mangalsutra - 1', '22.500', '24 Inch', '0', 283, '2022-09-06', '2022-09-10', 'complete'),
(231, 129, 'RUPABHAI LABUBHAI GOHIL', 'Har, Buti Kansar, Chandlo', '68.000', '0', '0', 284, '2022-09-08', '2022-12-31', 'pending'),
(232, 130, 'RUPABHAI LABUBHAI GOHIL', 'Karda - 4', '12.000', '16, 16, 12', '0', 284, '2022-09-08', '2022-12-31', 'pending'),
(233, 131, 'RUPABHAI LABUBHAI GOHIL', 'VITI', '3.000', '16', '0', 284, '2022-09-08', '2022-12-31', 'pending'),
(234, 132, 'RUPABHAI LABUBHAI GOHIL', 'VITI - 2', '7.000', '16, 23', 'VITI- 2 (3.500 + 3.500)GM', 284, '2022-09-08', '2022-12-31', 'GOPAL, NILESH'),
(236, 134, 'MUKESHBHAI SAVALIYA', 'Har Buti', '45.000', '0', 'Gold Khajana v- 2 pgno 43 - B', 286, '2022-09-12', '2022-11-23', 'KARTIK'),
(237, 135, 'PB', 'Mangalsutra Buti', '19.000', '20 inch', 'whatsapp mujab', 361, '2022-09-13', '2022-09-24', 'complete'),
(238, 136, 'PB', 'Har PanButi', '39.000', '0', 'Gautam k pg no 6 - 3', 362, '2022-09-13', '2022-09-23', 'complete'),
(239, 137, 'DEVUBHAI LATHI', 'Buti jodi -2', '16.000', '0', 'Pan buti 2 (8.000 + 8.000)gm', 0, '2022-09-13', '2022-10-03', 'complete'),
(240, 138, 'PB', 'Har Buti', '33.000', '0', 'Zerox mujab', 341, '2022-09-14', '2022-09-23', 'complete'),
(241, 139, 'PB', 'Panbuti jodi - 1', '10.000', '0', 'Gautam k pg no 44 - 13', 366, '2022-09-14', '2022-09-21', 'complete'),
(242, 140, 'PB', 'saar - 1', '3.500', '0', 'whatsapp mujab', 0, '2022-09-15', '2022-09-19', 'complete'),
(243, 141, 'MAHEBUBBHAI NIJAAMBHAI KHURESHI', 'Ladies Ring', '3.500', '12', 'Royal Bar pg no 132 - O', 288, '2022-09-15', '2022-09-26', 'complete'),
(244, 142, 'PB', 'Pendant', '3.000', '0', 'Zerox mujab', 369, '2022-09-16', '2022-09-22', 'complete'),
(245, 143, 'PB', 'Rudraksh Mala', '18.000', '0', '54 Para ni Rudrax Mala', 367, '2022-09-16', '2022-09-28', 'complete'),
(246, 144, 'PB', 'Kadli jodi - 1 ', '16.000', '2.7', 'madhuvan D - 4', 371, '2022-09-16', '2022-09-24', 'complete'),
(247, 145, 'PB', 'Har PanButi', '40.000', '0', 'Zerox mujab', 370, '2022-09-18', '2022-09-26', 'complete'),
(248, 146, 'PB', 'buti matching Pendant', '3.000', '0', 'Zerox mujab', 370, '2022-09-18', '2022-09-24', 'complete'),
(249, 147, 'PB', 'Buti jodi -1', '5.500', '0', 'Royal Bar pg no 85 - I', 374, '2022-09-18', '2022-09-26', 'complete'),
(250, 148, 'PB', 'Har', '100.000', '0', 'Zerox mujab', 377, '2022-09-18', '2022-10-14', 'complete'),
(251, 149, 'PB', 'Har', '45.000', '0', 'Zerox mujab', 377, '2022-09-18', '2022-10-14', 'complete'),
(253, 150, 'DR. DIPAKBHAI KYADA', 'Pendant', '3.000', '0', '18 k Yellow Gold', 293, '2022-09-19', '2022-10-01', 'complete'),
(254, 151, 'JAYBHAI BOGHRA', 'Pendant', '2.000', '0', '0', 294, '2022-09-19', '2022-10-01', 'complete'),
(255, 152, 'SACHINBHAI GONDALIYA', 'Buti jodi -1', '5.000', '0', 'Royal Bar pg no 106 - N', 298, '2022-09-19', '2022-10-03', 'complete'),
(256, 153, 'GAURANGBHAI PRAVINBHAI POKAL', 'Gents Bracelet', '50.000', '8 inch', 'Nakoda 115 - nbr - 453', 295, '2022-09-19', '2022-09-29', 'OMKAR VIPULBHAI'),
(257, 154, 'PB', 'Pendant set', '12.000', '0', 'Gold Khajana v- 1 pgno 84 - C', 379, '2022-09-19', '2022-09-28', 'complete'),
(258, 155, 'PB', 'Kadli', '17.000', '2.7', 'Namuna Mujab', 373, '2022-09-19', '2022-09-28', 'complete'),
(259, 156, 'PB', 'Panbuti', '12.000', '0', '0', 384, '2022-09-19', '2022-09-28', 'complete'),
(260, 157, 'MAHESHBHAI J THAKKAR', 'Kardo', '6.000', '24', '0', 301, '2022-09-20', '2022-10-22', 'recived from OMKAR PARESHBHAI'),
(261, 158, 'MAHESHBHAI J THAKKAR', 'VITI', '3.000', '23', 'à¥ viti', 301, '2022-09-20', '2022-10-22', 'recived from JAMNAGAR'),
(262, 159, 'MAHESHBHAI J THAKKAR', 'VITI', '3.000', '19', 'M - Viti', 301, '2022-09-20', '2022-10-22', 'recived from JAMNAGAR'),
(263, 160, 'MAHESHBHAI J THAKKAR', 'VITI', '3.000', '11', 'flower viti', 301, '2022-09-20', '2022-10-22', 'recived from JAMNAGAR'),
(264, 161, 'MAHESHBHAI J THAKKAR', 'Ladies Ring', '4.000', '19', '0', 301, '2022-09-20', '2022-10-22', 'recived from OMKAR PARESHBHAI'),
(265, 162, 'PB', 'Bangdi - 2', '30.000', '2.45', 'madhuvan C - 19', 386, '2022-09-21', '2022-09-26', 'complete'),
(266, 163, 'PB', 'Har', '38.000', '0', 'Zerox mujab chhediya vagar', 391, '2022-09-23', '2022-09-28', 'complete'),
(267, 164, 'PB', 'Rudraksh Mala', '38.000', '0', '54 para', 388, '2022-09-23', '2022-10-01', 'complete'),
(268, 165, 'PB', 'Kardo - 1', '3.500', '15', 'whatsapp mujab Nakor dandlo', 394, '2022-09-23', '2022-09-28', 'complete'),
(269, 166, 'PB', 'dokiyu', '22.000', '0', 'preet gold pg no 55 - c', 395, '2022-09-24', '2022-10-06', 'complete'),
(270, 167, 'PB', 'kadli', '18.000', '2.55', 'govindji C. v - 2 pg no 1 - 1567', 395, '2022-09-24', '2022-09-26', 'complete'),
(271, 168, 'PB', 'karda - 2', '12.000', '25, 26', 'karda - 2(6.000 + 6.000)gm', 396, '2022-09-24', '2022-10-03', 'complete'),
(273, 170, 'PB', 'viti', '3.000', '17', 'namuna mujab', 394, '2022-09-24', '2022-09-28', 'complete'),
(274, 171, 'PB', 'Rudraksh Mala', '13', '0', 'àª¸àª³àª‚àª—  àª®àª¾àª²àª¾', 394, '2022-09-24', '2022-09-28', 'complete'),
(275, 172, 'PB', 'lucky - 2', '12', '0', 'Gents Lucky - 2(6 + 6)GM', 382, '2022-09-25', '2022-10-06', 'complete'),
(276, 173, 'PB', 'viti', '2.750', '15', 'whatsapp mujab', 397, '2022-09-25', '2022-09-28', 'complete'),
(277, 174, 'PB', 'dokiyu buti', '23.000', '0', 'Zerox mujab', 398, '2022-09-25', '2022-10-04', 'complete'),
(279, 176, 'KOKILABEN ROKAD', 'Antique Set', '70.000', '0', 'WhatsApp mujab', 278, '2022-09-26', '2022-12-01', 'pending'),
(280, 177, 'KOKILABEN ROKAD', 'Mangalsutra', '35.000', '24 inch', '3 sar', 278, '2022-09-26', '2022-12-01', 'pending'),
(281, 178, 'KOKILABEN ROKAD', 'bracelet', '15.000', '2.4', '0', 278, '2022-09-26', '2022-12-01', 'pending'),
(282, 179, 'VISHALBHAI KANTIBHAI BHUVA', 'Gents Ring', '7.000', '21', '0', 303, '2022-09-26', '2022-10-03', 'complete'),
(283, 180, 'JURUFBHAI GAFARBHAI BOGDA', 'Pendant set - 2', '16.000', '0', '(8 .000+ 8 .000)gm', 305, '2022-09-26', '2022-02-15', 'pending'),
(284, 181, 'ASMITABEN DOBARIYA', 'Ladies Kaido', '3.000', '23', 'Namuna Mujab', 307, '2022-09-26', '2022-09-30', 'recived from KARTIK'),
(285, 182, 'KAUSHALBHAI SAVALIYA', 'Couple ring', '8.000', '20, 13', 'Rose gold', 308, '2022-09-26', '2022-10-06', 'complete'),
(286, 183, 'RINABEN PRAKESHBHAI DAVE', 'Ring', '3.000', '18', '0', 309, '2022-09-27', '2022-10-07', 'OMKAR PARESHBHAI'),
(287, 184, 'RINABEN PRAKESHBHAI DAVE', 'VITI', '3.500', '18', '0', 309, '2022-09-27', '2022-10-07', 'OMKAR PARESHBHAI'),
(288, 185, 'RINABEN PRAKESHBHAI DAVE', 'VITI', '3.000', '13', '0', 309, '2022-09-27', '2022-10-07', 'OMKAR PARESHBHAI'),
(289, 186, 'HASINABEN PATHAN', 'Chudli ', '6.500', '0', '0', 310, '2022-09-27', '2022-10-05', 'STOCK'),
(290, 187, 'GANSHYAMBHAI KURJIBHAI BORAD', 'Mangalsutra', '39.000', '24 Inch', 'Zerox mujab', 312, '2022-09-27', '2022-10-15', 'GOPAL, NILESH'),
(291, 188, 'PB', 'Mangalsutra', '14.000', '18 inch', '0', 400, '2022-09-28', '2022-10-04', 'complete'),
(292, 189, 'PB', 'buti', '6.000', '0', 'Royal Bar pg no 111 - M', 402, '2022-09-28', '2022-10-01', 'complete'),
(293, 190, 'PB', 'Kadli', '22.000', '2.45', 'madhuvan A - 4', 404, '2022-09-28', '2022-10-02', 'complete'),
(294, 191, 'PB', 'Har PanButi', '33.000', '0', 'Chediya Vagar Zerox mujab', 385, '2022-09-29', '2022-10-04', 'complete'),
(295, 192, 'PB', 'Mala', '22.000', '0', '54 Para ni Mala', 410, '2022-10-01', '2022-10-12', 'complete'),
(296, 193, 'PB', 'Kadli', '22.000', '2.2', 'govindji catlog v2 pg-11 - 877', 399, '2022-10-01', '2022-10-14', 'complete'),
(297, 194, 'YOGITABEN VAIGA', 'VITI', '2.500', '14', '0', 318, '2022-10-01', '2022-10-04', 'recived from KARTIK'),
(298, 195, 'NILESHBHAI VYAS', 'Bacha Kadli', '6.000', 'Folding', '0', 319, '2022-10-01', '2022-10-05', 'complete'),
(300, 196, 'DR. DIPAKBHAI KYADA', 'Mangalsutra Chain', '6.000', '19 inch', 'Namuna Mujab', 320, '2022-10-03', '2022-10-22', 'MIRAJ'),
(301, 197, 'RUSHITABEN BHARATBHAI RANPARIYA', 'Kadli', '19.000', '2.5', '0', 317, '2022-10-04', '2022-10-10', 'recived from CJ'),
(302, 198, 'SURESHBHAI SASHTRIJI', 'Mangalsutra', '7.000', '20 inch', '0', 316, '2022-10-04', '2022-10-18', 'recived from OMKAR VIPULBHAI'),
(304, 200, 'HITESHBHAI POKAL', 'Couple ring', '8.000', '12 , 18', 'CR - 4132', 323, '2022-10-05', '2022-10-17', 'KENVI'),
(305, 201, 'SHARADBHAI PATEL', 'Nosepin', '0', '0', 'Realdiamond Nosepin', 321, '2022-10-01', '2022-10-10', 'OMKAR VIPULBHAI'),
(308, 202, 'ROHITBHAI Â MUNGALPARA', 'Gents Ring', '10.000', '35', 'Yellow gold', 325, '2022-10-07', '2022-10-17', 'OMKAR VIPULBHAI'),
(309, 203, 'GANSHYAMBHAI KURJIBHAI BORAD', 'VITI', '10.000.', '42', '0', 312, '2022-10-07', '2022-10-15', 'OMKAR PARESHBHAI'),
(310, 204, 'PB', 'Kadli', '17.000', '2.6', '0', 416, '2022-10-07', '2022-10-14', 'complete'),
(311, 205, 'PB', 'Mangalsutra buti', '18.000', '17 inch', '0', 417, '2022-10-07', '2022-10-14', 'complete'),
(312, 206, 'PB', 'buti', '4.500', '0', 'Bhungli vali', 419, '2022-10-07', '2022-10-14', 'complete'),
(313, 207, 'PB', 'Har Buti', '35.000', '0', 'Zerox mujab', 422, '2022-10-12', '2022-10-25', 'KARTIK'),
(314, 208, 'PB', 'Buti jodi -1', '7.250', '0', 'Royal Bar pg no 85 - i ', 422, '2022-10-12', '2022-10-16', 'complete'),
(315, 209, 'PB', 'dokiyu buti', '40.000', '0', 'English Pech', 390, '2022-10-12', '2022-11-01', 'KARTIK'),
(316, 210, 'PB', 'Kadli', '16.000', '2.7', 'govindji catlog v - 2 pg-14 - A56', 421, '2022-10-12', '2022-10-25', 'RINKU, KRUNAL'),
(317, 211, 'PB', 'Chain', '11.500', '22 inch', '0', 423, '2022-10-12', '2022-10-16', 'complete'),
(318, 212, 'PB', 'Mangalsutra', '28.000', '0', 'Gold Khajana v- 2 pgno 90 - C', 427, '2022-10-12', '2022-10-18', 'complete'),
(319, 213, 'PB', 'buti', '6.000', '0', 'Gold Khajana v- 2 pgno 95 - B', 426, '2022-10-12', '2022-10-19', 'complete'),
(320, 214, 'PB', 'Kardo', '4.000', '20', 'whatsapp mujab', 424, '2022-10-12', '2022-10-17', 'complete'),
(321, 215, 'PB', 'Mangalsutra', '15.000', '18 inch', 'Zerox mujab', 428, '2022-10-14', '2022-10-20', 'MIRAJ'),
(322, 216, 'PB', 'Kadli', '13.000', '0', 'madhuvan D - 1', 431, '2022-10-14', '2022-10-20', 'RINKU, KRUNAL'),
(324, 217, 'PB', 'Pendant', '3.000', '0', 'Pan buti matching pendent', 429, '2022-10-14', '2022-10-18', 'complete'),
(325, 218, 'ROHITBHAI Â MUNGALPARA', 'Pendant', '6.000', '0', '18 k Rose Gold', 325, '2022-10-14', '2022-10-17', 'OMKAR VIPULBHAI'),
(326, 219, 'JULUFBHAI AMRUTBHAI MANJARIYA', 'Mangalsutra', '30.000', '0', 'Zerox mujab', 326, '2022-10-14', '2022-10-22', 'KARTIK'),
(327, 220, 'BHARATBHAI DHANANI', 'Ladies Bracelet', '12.000', '0', '18 k Yellow Gold', 327, '2022-10-14', '2022-10-22', 'RAMANI ORNAMENTS'),
(328, 221, 'BHARATBHAI DHANANI', 'Gents Bracelet', '9.000', '0', 'Rose gold', 327, '2022-10-14', '2022-10-22', 'RAMANI ORNAMENTS'),
(329, 222, 'ABHISHEKBHAI GADHVI', 'rajvadi viti', '12.000', '17', '0', 329, '2022-10-14', '2022-10-22', 'GOPAL, NILESH'),
(330, 223, 'ABHISHEKBHAI GADHVI', 'VITI', '9.000', '18', '0', 329, '2022-10-14', '2022-10-22', 'OMKAR PARESHBHAI'),
(331, 224, 'MAYANKBHAI DHIRUBHAI PETHANI', 'Mangalsutra', '18.000', '18 inch', '0', 330, '2022-10-14', '2022-10-22', 'MIRAJ'),
(332, 225, 'PB', 'Kandu', '9.000', '8 inch', '8 inch akda sathe', 433, '2022-10-18', '2022-10-19', 'complete'),
(333, 226, 'PB', 'Jumar Kadi', '2.500', '0', '0', 434, '2022-10-18', '2022-10-18', 'complete'),
(334, 227, 'PB', 'Bracelet', '20.000', '0', 'gold art v 5 pg 5 - B', 443, '2022-10-18', '2022-10-21', 'complete'),
(335, 228, 'PB', 'pocha - 3', '75', '0', 'pocha - 3 (25+25+25)', 425, '2022-10-18', '2022-10-20', 'recived from KARTIK'),
(336, 229, 'PB', 'tops', '5.000', '0', '0', 445, '2022-10-19', '2022-10-20', 'recived from KARTIK'),
(337, 230, 'PB', 'Latkan', '2.500', '0', '0', 449, '2022-10-19', '2022-10-28', 'recived from KARTIK'),
(338, 231, 'PB', 'kadli', '6.000', '2', '0', 453, '2022-10-19', '2022-10-22', 'RINKU, KRUNAL'),
(339, 232, 'PB', 'buti', '6.000', '0', 'bhungli vadi', 338, '2022-10-20', '2022-10-21', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'mga', 'madhuvangold916@gmail.com', 'madhuvan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custoname`
--
ALTER TABLE `custoname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karigarname`
--
ALTER TABLE `karigarname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krissue`
--
ALTER TABLE `krissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderpro`
--
ALTER TABLE `orderpro`
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
-- AUTO_INCREMENT for table `custoname`
--
ALTER TABLE `custoname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `karigarname`
--
ALTER TABLE `karigarname`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `krissue`
--
ALTER TABLE `krissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `orderpro`
--
ALTER TABLE `orderpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
