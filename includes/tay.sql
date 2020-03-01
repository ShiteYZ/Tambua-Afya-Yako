-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 09:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `fname`, `mname`, `lname`, `username`, `password`) VALUES
('a1', 'yusuph', 'zacharia', 'shitenge', 'shite', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `cid` int(11) NOT NULL,
  `howfeel` text NOT NULL,
  `date` varchar(100) NOT NULL,
  `neworOld` text NOT NULL,
  `previousmedication` text NOT NULL,
  `medicationresult` text NOT NULL,
  `inheritagedisease` text NOT NULL,
  `alergy` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `pulse` varchar(50) NOT NULL,
  `clinic` varchar(50) NOT NULL,
  `did` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`cid`, `howfeel`, `date`, `neworOld`, `previousmedication`, `medicationresult`, `inheritagedisease`, `alergy`, `photo`, `temp`, `pulse`, `clinic`, `did`, `pid`) VALUES
(8, 'dan', 'ewwe', 'ttrt', 'rtrtt', 'rtttrt', 'trttrt', 'trtttt', '', 'Lipo juu', 'Yapo juu', 'pediatric', 'danny', 'danny'),
(9, 'fhgh', 'gghggh', 'ghhh', 'ghgghg', 'ghgh', 'ghgg', 'ghggh', '', 'Lipo juu', 'Yapo juu', 'orthopedic', 'happy', 'josiah');

-- --------------------------------------------------------

--
-- Table structure for table `consultationfeedback`
--

CREATE TABLE `consultationfeedback` (
  `id` int(11) NOT NULL,
  `problem` text NOT NULL,
  `laboratory` text NOT NULL,
  `pharmacy` text NOT NULL,
  `appointment` text NOT NULL,
  `appointmentdate` date NOT NULL,
  `did` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultationfeedback`
--

INSERT INTO `consultationfeedback` (`id`, `problem`, `laboratory`, `pharmacy`, `appointment`, `appointmentdate`, `did`, `pid`) VALUES
(7, 'utakuwa unasumbuliwa na homa', 'nenda kapime homa', 'tumia dawa ya kutuliza maumivu', 'hapana', '0000-00-00', 'danny', 'danny'),
(8, 'utakuwa unasumbuliwa na macho', 'nenda kapime macho', 'usitumie dawa yoyote mpaka upime', 'nenda hospitali ya benjamin mkapa kapime macho', '2019-06-14', 'happy', 'josiah');

-- --------------------------------------------------------

--
-- Table structure for table `controlnumbers`
--

CREATE TABLE `controlnumbers` (
  `id` int(11) NOT NULL,
  `controlno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `controlnumbers`
--

INSERT INTO `controlnumbers` (`id`, `controlno`) VALUES
(1, 'tay1020');

-- --------------------------------------------------------

--
-- Table structure for table `diseasepdf`
--

CREATE TABLE `diseasepdf` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `heading` text NOT NULL,
  `symptoms` varchar(10000) NOT NULL,
  `causes` varchar(10000) NOT NULL,
  `effects` varchar(10000) NOT NULL,
  `prevention` varchar(10000) NOT NULL,
  `treatment` varchar(10000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `aid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseasepdf`
--

INSERT INTO `diseasepdf` (`id`, `title`, `heading`, `symptoms`, `causes`, `effects`, `prevention`, `treatment`, `category`, `aid`) VALUES
(8, 'saratani ', 'ugonjwa wa saratani', 'DALILI SARATANI.pdf.pdf', 'VISABABISHI SARATANI.pdf.pdf', 'ATHARI SARATANI.pdf.pdf', 'KINGA SARATANI.pdf.pdf', 'TIBA SARATANI.pdf.pdf', 'noncommunicable', ''),
(9, 'malaria', 'ugonjwa wa malaria', 'DALILI MALARIA.pdf.pdf', 'VISABABISHI MALARIA.pdf.pdf', 'ATHARI1 MALARIA.pdf.pdf', 'KINGA MALARIA.pdf.pdf', 'TIBA MALARIA.pdf.pdf', 'communicable', ''),
(10, 'pressure', 'ugonjwa wa shinikizo la damu', 'DALILI SARATANI.pdf.pdf', 'VISABABISHI SARATANI.pdf.pdf', 'ATHARI SARATANI.pdf.pdf', 'NAMNA YA KUJIKINGA SARATANI.pdf.pdf', 'TIBA SARATANI.pdf.pdf', 'noncommunicable', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `indetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `fname`, `mname`, `lname`, `age`, `gender`, `location`, `specialization`, `username`, `password`, `contact`, `email`, `image`, `indetail`) VALUES
(3, 'danny', 'robert', 'pallangyo', 23, 'male', 'arusha', 'dakitari wa watoto', 'danny', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0752975091', 'robertpallangyo89@gmail.com', '', 'danny robert pallangyo ni dakitari wa watoto katika hopital ya mount meru'),
(4, 'happy', 'drake', 'pallangyo', 28, 'female', 'dodoma', 'dakitari wa mifupa', 'happy', '08f90c1a417155361a5c4b8d297e0d78', '0659521270', 'happy97@gmail.com', '', 'happy msafiri ni dakitari bingwa wa mifupa katika taasisi ya mifupa MOI'),
(7, 'mandeko', 'simon', 'kipala', 26, 'on', 'manyara', 'gp', 'kipala', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0685785319', 'shaibumwita97@gmail.com', '', 'ni dakitari katika hospitali ya general'),
(8, 'drake', 'josiah', 'samweli', 24, 'male', 'chikago', 'upasuaji', 'drake', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0767235850', 'drake.gmail.com', '', 'drake ni dakitari bigwa wa upasuaji katika hospitali ya BUGANDO');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `aid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `description`, `aid`) VALUES
(1, 'Hospitali ya Benjamin Mkapa wafanya upandikizaji wa figo', '2019-04-10', 'Hospitali ya Benjamin Mkapa wafanya upandikizaji wa figo kwa mara ya tatu sasa huku kukiwa na mafanikio makubwa katika upasuaji wote uliofanyika. Hosipital ya Benjamin Mkapa wakishirikiana na Chuo kikuu cha dodoma wafanikiwa kusogeza huduma hiyo nchini ambayo ilikuwa ikifanyika nje ya nchi', 'a1'),
(4, 'hospitali ya Benjamin Mkapa yaanza kutoa huduma ya kliniki ya Moyo', '2019-04-28', 'hospitali ya Benjamin Mkapa yaanza kutoa huduma ya kliniki ya Moyo', 'a1'),
(5, 'Mlipuko wa ugonjwa wa Homa ya Ndegue', '2019-04-29', 'homa ya degua yalipuka jijini Dar es salaam, watu 100 wafariki dunia', 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `nhiftable`
--

CREATE TABLE `nhiftable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `membershipNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhiftable`
--

INSERT INTO `nhiftable` (`id`, `name`, `membershipNo`) VALUES
(1, 'Daniel', '101501385972'),
(2, 'yusuph', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `location` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `fname`, `mname`, `lname`, `age`, `gender`, `location`, `occupation`, `username`, `password`, `contact`, `email`, `image`) VALUES
(2, 'danny', 'drake', 'pallangyo', 23, 'male', 'dodoma', 'mwalimu', 'danny', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0659521270', 'robertpallangyo89@gmail.com', ''),
(3, 'salome', 'drake', 'nkonoki', 24, 'on', 'dodoma', 'banker', 'salome', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0678800039', 'sallienkonok@gmail.com', ''),
(4, 'josiah', 'daudi', 'nkonoki', 25, 'male', 'mwanza', 'lecture', 'josiah', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0768520329', 'josiahd05@gmail.com', ''),
(5, 'mandeko', 'simon', 'kipala', 25, 'femal', 'dodoma', 'lecture', 'simon', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0768520329', 'kipalamandeko@gmail.com', ''),
(6, 'yohana', 'juma', 'lukas', 25, 'femal', 'bukoba', 'mwalimu', 'lukas', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0768520329', 'masudsalumy@gmail.com', ''),
(7, 'happy', 'simon', 'nkonoki', 24, 'femal', 'bukoba', 'lecture', 'happy', 'a9b7ba70783b617e9998dc4dd82eb3c5', '25', 'nassorozubery3@gmail.com', ''),
(8, 'josiah', 'daudi', 'kulwa', 30, 'male', 'dar es salaam', 'mkulima', 'josiah', 'a9b7ba70783b617e9998dc4dd82eb3c5', '0768520329', 'verourio7@gmail.com', ''),
(9, 'rashid', 'simon', 'nkonoki', 23, 'male', 'manyara', 'mwalimu', 'rashid', '14ee22eaba297944c96afdbe5b16c65b', '25', 'shaibumwita97@gmail.com', ''),
(10, 'drake', 'simon', 'riana', 25, 'male', 'geita', 'lecture', 'drake', '14ee22eaba297944c96afdbe5b16c65b', '067880003', 'kipalamandek@gmail.com', ''),
(11, 'mandeko', 'richard', 'marwa', 27, 'femal', 'mwanza', 'banker', 'danny', '14ee22eaba297944c96afdbe5b16c65b', '07685203299', 'shaibumwita97@gmail.com', ''),
(12, 'josiah', 'richard', 'lukas', 24, 'male', 'dodoma', 'mkulima', 'shite', '14ee22eaba297944c96afdbe5b16c65b', '07685203290', 'nassorozubery3@gmail.com', ''),
(13, 'josiah', 'simon', 'kipala', 23, 'male', 'mwanza', 'banker', 'josiah', '8155bc545f84d9652f1012ef2bdfb6eb', '+255748383838', 'lukashodeorge@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `consultationfeedback`
--
ALTER TABLE `consultationfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controlnumbers`
--
ALTER TABLE `controlnumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseasepdf`
--
ALTER TABLE `diseasepdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhiftable`
--
ALTER TABLE `nhiftable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `consultationfeedback`
--
ALTER TABLE `consultationfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `controlnumbers`
--
ALTER TABLE `controlnumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diseasepdf`
--
ALTER TABLE `diseasepdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nhiftable`
--
ALTER TABLE `nhiftable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
