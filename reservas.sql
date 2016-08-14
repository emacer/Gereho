-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2016 at 03:55 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `cantPersonas` int(2) NOT NULL,
  `fdesde` varchar(10) NOT NULL,
  `fhasta` varchar(10) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `apellido`, `nombre`, `email`, `telefono`, `cantPersonas`, `fdesde`, `fhasta`, `comentario`) VALUES
(1, 'dominguez', 'emma', 'emma@gmail.com', '321345354354', 12, '05/01/2016', '26/01/2016', 'hola'),
(2, 'dominguez', 'cesar emmanuel', 'emma@gmail.com', '321345354354', 2, '29/01/2016', '01/02/2016', 'estaremos llegando el mismo dÃ­a tipo 18hs.'),
(3, 'perez', 'paula', '', '02641541236598', 3, '23/01/2016', '25/01/2016', 'la paula fiera se va de vacas'),
(4, 'perez', 'oscar', '', '0264154347512', 1, '26/01/2016', '31/01/2016', 'nose si llego pero esperenme');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
