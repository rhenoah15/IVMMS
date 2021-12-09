-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 01:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iv`
--

-- --------------------------------------------------------

--
-- Table structure for table `familymember`
--

CREATE TABLE IF NOT EXISTS `familymember` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `familymember`
--

INSERT INTO `familymember` (`id`, `name`, `username`, `mname`, `lname`, `relationship`) VALUES
(58, 'k', '123', '', '', ''),
(60, 'Meldy', '00001', 'Eleda', 'Maranan', 'Wife'),
(61, 'sa', 'sa', 's', 'sa', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `sitio` varchar(255) DEFAULT NULL,
  `psyco` varchar(255) DEFAULT NULL,
  `visual` varchar(255) DEFAULT NULL,
  `speech` varchar(255) DEFAULT NULL,
  `mobility` varchar(255) DEFAULT NULL,
  `develop` varchar(255) DEFAULT NULL,
  `cause` varchar(255) DEFAULT NULL,
  `assess` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bday` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `civil` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `employment` varchar(255) DEFAULT NULL,
  `temployment` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `municipal` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `flname` varchar(255) NOT NULL,
  `ffname` varchar(255) NOT NULL,
  `fmname` varchar(255) NOT NULL,
  `fage` varchar(255) NOT NULL,
  `foccu` varchar(255) NOT NULL,
  `fea` varchar(255) NOT NULL,
  `fcivil` varchar(255) NOT NULL,
  `mlname` varchar(255) NOT NULL,
  `mfname` varchar(255) NOT NULL,
  `mmname` varchar(255) NOT NULL,
  `mage` varchar(255) NOT NULL,
  `moccu` varchar(255) NOT NULL,
  `mea` varchar(255) NOT NULL,
  `mcivil` varchar(255) NOT NULL,
  `glname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `gmname` varchar(255) NOT NULL,
  `gage` varchar(25) NOT NULL,
  `goccu` varchar(255) NOT NULL,
  `gea` varchar(255) NOT NULL,
  `gcivil` varchar(255) NOT NULL,
  `lname1` varchar(255) NOT NULL,
  `fname1` varchar(255) NOT NULL,
  `mname1` varchar(255) NOT NULL,
  `age1` varchar(255) NOT NULL,
  `occu1` varchar(255) NOT NULL,
  `ea1` varchar(255) NOT NULL,
  `civil1` varchar(255) NOT NULL,
  `lname2` varchar(255) NOT NULL,
  `fname2` varchar(255) NOT NULL,
  `mname2` varchar(255) NOT NULL,
  `age2` varchar(255) NOT NULL,
  `occu2` varchar(255) NOT NULL,
  `ea2` varchar(255) NOT NULL,
  `civil2` varchar(255) NOT NULL,
  `lname3` varchar(255) NOT NULL,
  `fname3` varchar(255) NOT NULL,
  `mname3` varchar(255) NOT NULL,
  `age3` varchar(255) NOT NULL,
  `occu3` varchar(255) NOT NULL,
  `ea3` varchar(255) NOT NULL,
  `civil3` varchar(255) NOT NULL,
  `lname4` varchar(255) NOT NULL,
  `fname4` varchar(255) NOT NULL,
  `mname4` varchar(255) NOT NULL,
  `age4` varchar(255) NOT NULL,
  `occu4` varchar(255) NOT NULL,
  `ea4` varchar(255) NOT NULL,
  `civil4` varchar(255) NOT NULL,
  `lname5` varchar(255) NOT NULL,
  `fname5` varchar(255) NOT NULL,
  `mname5` varchar(255) NOT NULL,
  `age5` varchar(255) NOT NULL,
  `occu5` varchar(255) NOT NULL,
  `ea5` varchar(255) NOT NULL,
  `civil5` varchar(255) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `v1` varchar(255) NOT NULL,
  `v2` varchar(255) NOT NULL,
  `v3` varchar(255) NOT NULL,
  `color1` varchar(255) NOT NULL,
  `color2` varchar(255) NOT NULL,
  `color3` varchar(255) NOT NULL,
  `kind1` varchar(255) NOT NULL,
  `kind2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `kind3` varchar(255) NOT NULL,
  `plate1` varchar(255) NOT NULL,
  `plate2` varchar(255) NOT NULL,
  `plate3` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` text,
  `vaccine` text,
  `date` text,
  `time` text,
  `dose` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `idnumber`, `vaccine`, `date`, `time`, `dose`) VALUES
(1, '1', 'Hepatitis B', '2021-12-31', '12:59', 'First Dose');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` text,
  `date` text,
  `time` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `barangay`, `date`, `time`) VALUES
(1, 'Anilao Proper', '2021-12-31', '12:59'),
(2, 'Estrella', '2021-11-02', '12:59'),
(3, 'Anilao Proper', '2021-11-26', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `address` text,
  `contact` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=341 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `contact`, `gender`) VALUES
(256, ' REIN CASTILLO', 'PROPER SOLO', '2020-02-02', 'F'),
(257, 'COVIC JHAY SORIANO    ', 'BULACAN', '2020-04-02', 'M'),
(258, 'ROBERT JHAY FLORDELIZ          ', 'BULACAN', '2020-03-11', 'M'),
(259, 'JANSEN DAYOT', 'SOLO', '2020-03-31', 'M'),
(260, 'HAILEY DATINGUINOO    ', 'SAGUING', '2020-01-28', 'M'),
(261, 'SOFYAH SATSATIN', 'MAINIT', '2020-04-02', 'F'),
(262, 'SAVAHNAH RAINE        ', 'POBLACION', '2020-04-04', 'F'),
(263, 'MAC JAINO                     ', 'LAUREL', '2020-05-18', 'M'),
(264, 'CLARK ZAIMON VILLANUEVA  ', 'P,ANAHAO', '2020-02-10', 'M'),
(265, 'FLYN JOHAHN HERNANDEZ      ', 'ANILAO EAST', '2020-03-28', 'M'),
(266, 'JAN JERKY MEDRANO           ', 'TALAGA PROPER', '2020-01-29', 'M'),
(267, 'AYLA HEART SOPHIA JUSI  ', 'CALAMIAS ', '2020-02-24', 'F'),
(268, 'PRINCESS BRIANNA', 'SAN FRANCISCO', '2020-05-06', 'F'),
(269, 'REN MARK DE DIOS     ', 'MAINAGA', '2020-03-26', 'M'),
(270, 'SHANTELLE AMBER VENICE   ', 'MAINAGA', '2020-05-04', 'F'),
(271, 'SASY CASTILLO                   ', 'LIGAYA P,LUPA', '2020-02-24', 'F'),
(272, 'KIM GRAEL CEPILLO', 'PILAHAN', '2020-03-30', 'M'),
(273, 'MARK PRINCE CAADAN   ', ' SAN JOSE', '2020-03-13', 'M'),
(274, 'PRINCE KIAN MOTEN     ', 'POBLACION', '2020-01-08', 'M'),
(275, 'JEUS JELEM TABUCAO      ', 'PAYAPA EAST', '2020-05-11', 'M'),
(276, 'JOHN GABRIELLE BARTOLA    ', 'TALAGA EAST', '2020-03-20', 'M'),
(277, 'ALEXANDRIA LELN                   ', 'KABULUSAN T, EAST      ', '2020-03-31', 'F'),
(278, 'JADE ROPER CANTOS         ', 'STA MESA', '2020-02-21', 'M'),
(279, 'RICH LUCAS DE GANO       ', 'MAINAGA', '2020-01-01', 'M'),
(280, 'BABY JADHEN ROBLES         ', 'SAGUING', '2020-02-08', 'M'),
(281, 'ANGELLAH MAGTIBAY    ', ' GASANG ', '2020-05-06', 'F'),
(282, 'KATE CLOE PALITAD      ', 'TALAGA EAST', '2020-04-23', 'F'),
(283, 'MUNOZ JHANAH ANGELA   ', 'SAMPAGUITA ILAYA', '2020-01-26', 'F'),
(284, 'PRINCE MYRUS MENDOZA  ', 'TALAGA PROPER', '2020-02-16', 'M'),
(285, 'HANS ROME HUDO      ', 'SAGUING', '2020-03-20', 'M'),
(286, 'YUKI JOANNE ALOLOD    ', 'SAMPAGUITA                 ', '2020-01-05', 'F'),
(287, 'NATHANIAH GWAYNE NAPA     ', 'BAGONG SILANG SOLO     ', '2020-05-03', 'M'),
(288, 'AMIRA SAI ANDAL', 'BAGONG SILANG SOLO     ', '2020-05-09', 'F'),
(289, 'CHLOE RUSTLY CASTILLO    ', 'TALAGA PROPER ', '2020-03-24', 'F'),
(290, 'KURT BAIRON NASSER    ', 'POBLACION', '2020-05-06', 'M'),
(291, 'YSABELLE SALVACION    ', 'GASANG', '2020-03-28', 'F'),
(292, 'MARK ALBERT DALAWAMPU  ', 'SAN FRANCISCO', '2020-05-04', 'M'),
(293, 'ANGELLO ALLEGO      ', 'SAN JUAN ', '2020-05-03', 'M'),
(294, 'CARL VINCENT DAYLO    ', 'SAN FRANCISCO', '2020-04-02', 'M'),
(295, 'ELIJAH GABRIELLE EMICA   ', 'P.NIOGAN CROSSING  ', '2020-02-04', 'F'),
(296, 'NIKKO BAES                       ', 'POBLACION ', '2020-03-25', 'M'),
(297, 'RHAIDINE CLYDE DATINGUINOO ', 'PILAHAN', '2020-04-06', 'M'),
(298, 'GASPAR ELNATHAN LERO  ', 'PILAHAN', '2020-03-13', 'M'),
(299, 'MICHIZEDEK VILLABANDO   ', 'LAUREL', '2020-03-10', 'M'),
(300, 'BRYLE LUCAS MAGBOO       ', 'MAINAGA', '2020-05-19', 'M'),
(301, 'CHRIS ANTHONY ALBARQUEZ  ', 'P. BALIBAGUHAN', '2020-03-18', 'M'),
(302, 'YOMAR ALBUERA   ', 'MAINAGA', '2020-04-08', 'M'),
(303, 'KHALIL MATTHEW BANAAG ', 'CALAMIAS ', '2020-04-08', 'M'),
(304, 'FRANCE ACHILLES BELLO    ', 'BULACAN', '2020-05-15', 'M'),
(305, 'LYSLE CARINGAL                  ', 'BULACAN ', '2020-05-23', 'F'),
(306, 'JAYNILYN SUERTE        ', 'MAJUBEN', '2020-03-24', 'F'),
(307, 'AJ CARINGAL     ', 'POBLACION', '2020-05-22', 'M'),
(308, 'JAN RED PANDILLA   ', 'ANILAO EAST', '2020-05-28', 'M'),
(309, 'LUCAS ANDRAE ALMARIO   ', 'P. NIOGAN', '2020-05-20', 'M'),
(310, 'CYMON GABRIELL BONQUIN  ', 'SAMPAGUITA', '2020-03-10', 'M'),
(311, 'DIANNE GRACE DE GUZMAN  ', 'TULO LAUREL', '2020-01-27', 'F'),
(312, 'REYNIEL JAYCOB ABEJUELA      ', ' TALAGA EAST', '2020-05-23', 'M'),
(313, 'MARK IVAN HERNANDEZ    ', ' SAMPAGUITA LAUREL   ', '2020-05-10', 'M'),
(314, 'CHRIS PAUL MANALO     ', 'P. LUPA', '2020-05-06', 'M'),
(315, 'JEFFREY DALISAY ', 'P. ANAHAO', '2020-05-07', 'M'),
(316, 'ZAIREY MASHA DAMASCO', 'NAG-IBA', '2020-02-13', 'F'),
(317, 'GABRIELLA HAILEY DADOR', 'SAN FRANCISCO', '2020-03-25', 'F'),
(318, 'JIA THYLANE ALOLOD', 'NAG-IBA', '2020-05-11', 'F'),
(319, 'RHAIDLNE CLYDE DATINGUINOO   ', 'PILAHAN', '2020-04-06', 'M'),
(320, 'ELLYSE EVE MENDEZ', 'TALAGA EAST', '2020-05-09', 'F'),
(321, 'CAILLY JOY REYES', 'PILAHAN', '2020-02-17', 'F'),
(322, 'VAN RAFAEL MENDOZA', 'NAG-IBA', '2020-06-19', 'M'),
(323, 'ASHLEY FORTH ORTEGA', 'SAMPAGUITA', '2020-06-05', 'F'),
(324, 'JEAZ KYLE AMYAO', 'P. NIOGAN', '2020-01-04', 'M'),
(325, 'NEON ADRIEL UMALI', 'MAILAYEN P. NIOGAN', '2020-05-29', 'M'),
(326, 'LEXINE JAENNA MANALO', 'SAN TEODORO   ', '2020-05-04', 'F'),
(327, 'ARABELLA MAESTRADO', 'PARANG,BAGALANGIT', '2020-06-12', 'F'),
(328, 'CHRIS PAUL MANALO', 'LIGAYA P,LUPA', '2020-05-06', 'M'),
(329, 'LUCASS MATT YOO BUENADORA  ', 'SAN JUAN', '2020-06-02', 'M'),
(330, 'PAUL THERENZ DUATAY', 'SAMPAGUITA', '2020-05-08', 'M'),
(331, 'JAMI CHRIS MAEXY CANDAVA', 'ANILAO PROPER', '2020-03-10', 'M'),
(332, 'LHANCE NETHAN BRUCAL', 'SAIMSIM,MAINIT', '2020-04-07', 'M'),
(333, 'HANS ROME NUDO', 'SAGUING', '2020-03-28', 'M'),
(334, 'PRINCESS SOPHIA CASTILLO', 'SILANGAN,MAINAGA', '2020-04-15', 'F'),
(335, 'CALYX RODRIGUEZ', 'ANILAO EAST', '2020-04-20', 'M'),
(336, 'ALLYAH CASTILLO', 'STA MESA', '2020-04-12', 'F'),
(337, 'PRINCE JOSH MANIGBAS ', 'MALIMATOC 2', '2020-10-20', 'M'),
(338, 'JEYDAH BOONGALING', 'MAJUBEN', '2020-08-31', 'M'),
(339, 'sa', 'Saguing', '2018-12-31', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
