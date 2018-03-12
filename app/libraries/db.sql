-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 12:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsi_language`
--

CREATE TABLE `bsi_language` (
  `id` int(11) NOT NULL,
  `lang_title` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lang_code` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `lang_file` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lang_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `bsi_language`
--

INSERT INTO `bsi_language` (`id`, `lang_title`, `lang_code`, `lang_file`, `lang_default`) VALUES
(1, 'English', 'en', 'english.php', 0),
(5, 'Spanish', 'es', 'espanol.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbtablas`
--

CREATE TABLE `dbtablas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `dbtablas`
--

INSERT INTO `dbtablas` (`id`, `titulo`, `descripcion`, `fecha`, `contador`) VALUES
(1, 'Cabecera', 'Menu, Logo', '2018-01-26 06:04:43', 5),
(2, 'Backend Tareas', '', '2018-02-01 08:01:37', 9),
(3, 'Usuarios', '', '0000-00-00 00:00:00', 0),
(4, 'mas tours', '', '2017-12-24 10:28:36', 0),
(5, 'Contacto', '', '2018-01-27 08:35:17', 1),
(6, 'Paquetes', '', '0000-00-00 00:00:00', 0),
(7, 'Descripcion', '', '2018-01-26 05:55:04', 1),
(8, 'Twitter', '', '2017-12-24 10:53:52', 0),
(9, 'Facebook', '', '2017-12-23 14:27:37', 1),
(10, 'Portada', '', '2018-01-25 20:08:58', 2),
(11, 'Style', 'Estilo ', '2018-01-28 10:15:01', 3),
(12, 'Otro', '', '2017-12-24 12:04:09', 5),
(13, 'Informacion', 'Buscar info', '2018-01-26 15:54:16', 3),
(14, 'FAQ', 'Preguntas  Frecuentes', '2018-01-26 11:20:19', 1),
(15, 'Caminatas', 'Tour de Caminatas', '2018-01-27 18:23:37', 2),
(16, 'Template', 'estilos de la pagina', '2018-02-01 07:50:35', 1),
(17, 'Backend Tours', '', '2018-02-07 13:22:48', 5),
(18, 'Backend Slide', '', '2018-02-01 08:18:03', 5);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE `galeria` (
  `gid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `gtitulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `gruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `gfecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`gid`, `tid`, `gtitulo`, `gruta`, `gfecha`) VALUES
(1, 5, 'Koricancha', '/views/images/pictures/citytour_1.jpg', '2018-01-23 00:00:00'),
(2, 5, 'Sacsayhuaman', '/views/images/pictures/citytour_2.jpg', '2018-01-23 00:00:00'),
(3, 5, 'TamboMachay', '/views/images/pictures/citytour_3.jpg', '2018-01-23 00:00:00'),
(4, 7, 'Ingreso', '/views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(5, 7, 'Montana', '/views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(6, 7, 'Montana fin', '/views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(7, 9, 'Pisac', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(8, 9, 'Ollantaytambo', '/views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(9, 9, 'Chinchero', '/views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(10, 6, 'Koricancha', '/views/images/pictures/citytour_1.jpg', '2018-01-23 00:00:00'),
(11, 6, 'Sacsayhuaman', '/views/images/pictures/citytour_2.jpg', '2018-01-23 00:00:00'),
(12, 6, 'TamboMachay', '/views/images/pictures/citytour_3.jpg', '2018-01-23 00:00:00'),
(13, 10, 'Pisac', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(14, 10, 'Ollantaytambo', '/views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(15, 10, 'Chinchero', '/views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(16, 11, 'Moray', '/views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(17, 11, 'Salineras', '/views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(18, 11, 'Salineras', '/views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(19, 12, 'Moray', '/views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(20, 12, 'Salt Mines', '/views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(21, 12, 'Salt Mines', '/views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(22, 8, 'entrance', '/views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(23, 8, 'Mountain', '/views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(24, 8, 'Mountain 2', '/views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(25, 29, 'Tipon', '/views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(26, 29, 'Pikillacta', '/views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(27, 29, 'Iglesia de Andahuaylillas', '/views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(28, 30, 'Tipon', '/views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(29, 30, 'Pikillacta', '/views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(30, 30, 'Iglesia de Andahuaylillas', '/views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(31, 14, '...', '/views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(32, 14, 'Machu Picchu', '/views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(33, 14, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(34, 31, '...', '/views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(35, 31, 'Machu Picchu', '/views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(36, 31, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(37, 1009, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_1.jpg', '2018-01-23 00:00:00'),
(38, 1009, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_2.jpg', '2018-01-23 00:00:00'),
(39, 1009, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_3.jpg', '2018-01-23 00:00:00'),
(40, 1119, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_1.jpg', '2018-01-23 00:00:00'),
(41, 1119, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_2.jpg', '2018-01-23 00:00:00'),
(42, 1119, 'Huchuy Qosqo', '/views/images/pictures/huchuy_qosqo_570_320_3.jpg', '2018-01-23 00:00:00'),
(43, 108, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_1.jpg', '2018-01-23 00:00:00'),
(44, 108, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_2.jpg', '2018-01-23 00:00:00'),
(45, 810, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_3.jpg', '2018-01-23 00:00:00'),
(46, 109, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_1.jpg', '2018-01-23 00:00:00'),
(47, 109, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_2.jpg', '2018-01-23 00:00:00'),
(48, 109, 'Laguna humantay', '/views/images/pictures/humantay_lagoon_570_320_3.jpg', '2018-01-23 00:00:00'),
(49, 101, 'Mirador del Condor', '/views/images/pictures/Condor_570_320_1.jpg', '2018-01-23 00:00:00'),
(50, 101, ' Condor', '/views/images/pictures/Condor_570_320_2.jpg', '2018-01-23 00:00:00'),
(51, 101, 'Condor', '/views/images/pictures/Condor_570_320_3.jpg', '2018-01-23 00:00:00'),
(52, 107, 'Condor Watching', '/views/images/pictures/Condor_570_320_1.jpg', '2018-01-23 00:00:00'),
(53, 107, ' Condor', '/views/images/pictures/Condor_570_320_2.jpg', '2018-01-23 00:00:00'),
(54, 107, 'Condor', '/views/images/pictures/Condor_570_320_3.jpg', '2018-01-23 00:00:00'),
(55, 18, 'Inca Jungle', '/views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(56, 18, 'Inca Jungle', '/views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(57, 18, 'Aguas Termales - Santa Teresa', '/views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(58, 17, 'Jungle Trek', '/views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(59, 17, 'Jungle Trek', '/views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(60, 17, 'Aguas Termales - Santa Teresa', '/views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(61, 34, 'Inca Jungle', '/views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(62, 34, 'Inca Jungle', '/views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(63, 34, 'Aguas Termales - Santa Teresa', '/views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(64, 35, 'Jungle Trek', '/views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(65, 35, 'Jungle Trek', '/views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(66, 35, 'Aguas Termales - Santa Teresa', '/views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(67, 151, 'Salkantay', '/views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(68, 151, 'Salkantay', '/views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(69, 151, 'Salkantay', '/views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(70, 38, 'Salkantay', '/views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(71, 38, 'Salkantay', '/views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(72, 38, 'Salkantay', '/views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(73, 39, 'Salkantay', '/views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(74, 39, 'Salkantay', '/views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(75, 39, 'Salkantay', '/views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(76, 40, 'Salkantay', '/views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(77, 40, 'Salkantay', '/views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(78, 40, 'Salkantay', '/views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(79, 15, 'Camino Inka', '/views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(80, 15, 'Camino Inka', '/views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(81, 15, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(82, 16, 'Inka Trail', '/views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(83, 16, 'Inka Trail', '/views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(84, 16, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(85, 43, 'Camino Inka', '/views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(86, 43, 'Camino Inka', '/views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(87, 43, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(88, 44, 'Inka Trail', '/views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(89, 44, 'Inka Trail', '/views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(90, 44, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(91, 2, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(92, 2, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_2.jpg', '2018-01-24 00:00:00'),
(93, 2, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_3.jpg', '2018-01-24 00:00:00'),
(94, 3, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(95, 3, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_2.jpg', '2018-01-24 00:00:00'),
(96, 3, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_3.jpg', '2018-01-24 00:00:00'),
(97, 19, 'Sacsayhuaman', '/views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(98, 19, 'Sacred Valley', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(99, 19, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(100, 20, 'Sacsayhuaman', '/views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(101, 20, 'Valle Sagrado', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(102, 20, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(103, 21, 'Sacsayhuaman', '/views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-24 00:00:00'),
(104, 21, 'Sacred Valley', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(105, 21, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(106, 22, 'Sacsayhuaman', '/views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-24 00:00:00'),
(107, 22, 'Sacred Valley', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(108, 22, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(109, 23, 'Maras Moray', '/views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(110, 23, 'Sacred Valley', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(111, 23, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(112, 24, 'Maras Moray', '/views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(113, 24, 'Valle Sagrado', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(114, 24, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(115, 25, 'Sacred Valley', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(116, 25, 'City Tour', '/views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(117, 25, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(118, 26, 'Valle Sagrado', '/views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(119, 26, 'City Tour', '/views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(120, 26, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(121, 27, 'Koricancha', '/views/images/pictures/citytour_1.jpg', '2018-01-24 00:00:00'),
(122, 27, 'Sacsayhuaman', '/views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(123, 27, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(124, 28, 'Koricancha', '/views/images/pictures/citytour_1.jpg', '2018-01-24 00:00:00'),
(125, 28, 'Sacsayhuaman', '/views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(126, 28, 'Machu Picchu', '/views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `tid`, `titulo`, `ruta`, `fecha`) VALUES
(1, 5, 'Koricancha', '../../views/images/pictures/citytour_1.jpg', '2018-01-23 00:00:00'),
(2, 5, 'Sacsayhuaman', '../../views/images/pictures/citytour_2.jpg', '2018-01-23 00:00:00'),
(3, 5, 'TamboMachay', '../../views/images/pictures/citytour_3.jpg', '2018-01-23 00:00:00'),
(4, 7, 'Ingreso', '../../views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(5, 7, 'Montana', '../../views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(6, 7, 'Montana fin', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(7, 9, 'Pisac', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(8, 9, 'Ollantaytambo', '../../views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(9, 9, 'Chinchero', '../../views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(10, 6, 'Koricancha', '../../views/images/pictures/citytour_1.jpg', '2018-01-23 00:00:00'),
(11, 6, 'Sacsayhuaman', '../../views/images/pictures/citytour_2.jpg', '2018-01-23 00:00:00'),
(12, 6, 'TamboMachay', '../../views/images/pictures/citytour_3.jpg', '2018-01-23 00:00:00'),
(13, 10, 'Pisac', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(14, 10, 'Ollantaytambo', '../../views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(15, 10, 'Chinchero', '../../views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(16, 11, 'Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(17, 11, 'Salineras', '../../views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(18, 11, 'Salineras', '../../views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(19, 12, 'Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(20, 12, 'Salt Mines', '../../views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(21, 12, 'Salt Mines', '../../views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(22, 8, 'entrance', '../../views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(23, 8, 'Mountain', '../../views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(24, 8, 'Mountain 2', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(25, 29, 'Tipon', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(26, 29, 'Pikillacta', '../../views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(27, 29, 'Iglesia de Andahuaylillas', '../../views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(28, 30, 'Tipon', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(29, 30, 'Pikillacta', '../../views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(30, 30, 'Iglesia de Andahuaylillas', '../../views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(31, 14, '...', '../../views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(32, 14, 'Machu Picchu', '../../views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(33, 14, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(34, 31, '...', '../../views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(35, 31, 'Machu Picchu', '../../views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(36, 31, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(37, 1009, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_1.jpg', '2018-01-23 00:00:00'),
(38, 1009, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_2.jpg', '2018-01-23 00:00:00'),
(39, 1009, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_3.jpg', '2018-01-23 00:00:00'),
(40, 1119, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_1.jpg', '2018-01-23 00:00:00'),
(41, 1119, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_2.jpg', '2018-01-23 00:00:00'),
(42, 1119, 'Huchuy Qosqo', '../../views/images/pictures/huchuy_qosqo_570_320_3.jpg', '2018-01-23 00:00:00'),
(43, 108, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_1.jpg', '2018-01-23 00:00:00'),
(44, 108, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_2.jpg', '2018-01-23 00:00:00'),
(45, 810, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_3.jpg', '2018-01-23 00:00:00'),
(46, 109, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_1.jpg', '2018-01-23 00:00:00'),
(47, 109, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_2.jpg', '2018-01-23 00:00:00'),
(48, 109, 'Laguna humantay', '../../views/images/pictures/humantay_lagoon_570_320_3.jpg', '2018-01-23 00:00:00'),
(49, 101, 'Mirador del Condor', '../../views/images/pictures/Condor_570_320_1.jpg', '2018-01-23 00:00:00'),
(50, 101, ' Condor', '../../views/images/pictures/Condor_570_320_2.jpg', '2018-01-23 00:00:00'),
(51, 101, 'Condor', '../../views/images/pictures/Condor_570_320_3.jpg', '2018-01-23 00:00:00'),
(52, 107, 'Condor Watching', '../../views/images/pictures/Condor_570_320_1.jpg', '2018-01-23 00:00:00'),
(53, 107, ' Condor', '../../views/images/pictures/Condor_570_320_2.jpg', '2018-01-23 00:00:00'),
(54, 107, 'Condor', '../../views/images/pictures/Condor_570_320_3.jpg', '2018-01-23 00:00:00'),
(55, 18, 'Inca Jungle', '../../views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(56, 18, 'Inca Jungle', '../../views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(57, 18, 'Aguas Termales - Santa Teresa', '../../views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(58, 17, 'Jungle Trek', '../../views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(59, 17, 'Jungle Trek', '../../views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(60, 17, 'Aguas Termales - Santa Teresa', '../../views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(61, 34, 'Inca Jungle', '../../views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(62, 34, 'Inca Jungle', '../../views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(63, 34, 'Aguas Termales - Santa Teresa', '../../views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(64, 35, 'Jungle Trek', '../../views/images/pictures/jungle_trek_570_320_1.jpg', '2018-01-23 00:00:00'),
(65, 35, 'Jungle Trek', '../../views/images/pictures/jungle_trek_570_320_2.jpg', '2018-01-23 00:00:00'),
(66, 35, 'Aguas Termales - Santa Teresa', '../../views/images/pictures/jungle_trek_570_320_3.jpg', '2018-01-23 00:00:00'),
(67, 151, 'Salkantay', '../../views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(68, 151, 'Salkantay', '../../views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(69, 151, 'Salkantay', '../../views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(70, 38, 'Salkantay', '../../views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(71, 38, 'Salkantay', '../../views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(72, 38, 'Salkantay', '../../views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(73, 39, 'Salkantay', '../../views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(74, 39, 'Salkantay', '../../views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(75, 39, 'Salkantay', '../../views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(76, 40, 'Salkantay', '../../views/images/pictures/salkantay_570_320_1.jpg', '2018-01-24 00:00:00'),
(77, 40, 'Salkantay', '../../views/images/pictures/salkantay_570_320_2.jpg', '2018-01-24 00:00:00'),
(78, 40, 'Salkantay', '../../views/images/pictures/salkantay_570_320_3.jpg', '2018-01-24 00:00:00'),
(79, 15, 'Camino Inka', '../../views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(80, 15, 'Camino Inka', '../../views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(81, 15, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(82, 16, 'Inka Trail', '../../views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(83, 16, 'Inka Trail', '../../views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(84, 16, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(85, 43, 'Camino Inka', '../../views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(86, 43, 'Camino Inka', '../../views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(87, 43, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(88, 44, 'Inka Trail', '../../views/images/pictures/inka_trail_570_320_1.jpg', '2018-01-24 00:00:00'),
(89, 44, 'Inka Trail', '../../views/images/pictures/inka_trail_570_320_2.jpg', '2018-01-24 00:00:00'),
(90, 44, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(91, 2, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(92, 2, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_2.jpg', '2018-01-24 00:00:00'),
(93, 2, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_3.jpg', '2018-01-24 00:00:00'),
(94, 3, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(95, 3, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_2.jpg', '2018-01-24 00:00:00'),
(96, 3, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_3.jpg', '2018-01-24 00:00:00'),
(97, 19, 'Sacsayhuaman', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(98, 19, 'Sacred Valley', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(99, 19, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(100, 20, 'Sacsayhuaman', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(101, 20, 'Valle Sagrado', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(102, 20, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(103, 21, 'Sacsayhuaman', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-24 00:00:00'),
(104, 21, 'Sacred Valley', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(105, 21, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(106, 22, 'Sacsayhuaman', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-24 00:00:00'),
(107, 22, 'Sacred Valley', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(108, 22, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(109, 23, 'Maras Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(110, 23, 'Sacred Valley', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(111, 23, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(112, 24, 'Maras Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(113, 24, 'Valle Sagrado', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(114, 24, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(115, 25, 'Sacred Valley', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(116, 25, 'City Tour', '../../views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(117, 25, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(118, 26, 'Valle Sagrado', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(119, 26, 'City Tour', '../../views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(120, 26, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(121, 27, 'Koricancha', '../../views/images/pictures/citytour_1.jpg', '2018-01-24 00:00:00'),
(122, 27, 'Sacsayhuaman', '../../views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(123, 27, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(124, 28, 'Koricancha', '../../views/images/pictures/citytour_1.jpg', '2018-01-24 00:00:00'),
(125, 28, 'Sacsayhuaman', '../../views/images/pictures/citytour_2.jpg', '2018-01-24 00:00:00'),
(126, 28, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `portada`
--

CREATE TABLE `portada` (
  `pid` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `facha` int(11) NOT NULL,
  `duracion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `etiquetas` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `actualizacion` datetime NOT NULL,
  `enlace` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ramdon` text COLLATE utf8_spanish_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `portada`
--

INSERT INTO `portada` (`pid`, `titulo`, `facha`, `duracion`, `estado`, `ruta`, `etiquetas`, `fecha`, `actualizacion`, `enlace`, `ramdon`, `lang`, `orden`) VALUES
(2, 'Machupichu', 0, ' Full Day', 'editando', '../../views/images/pictures/citytour_570_320_1.jpg', '                                                                                                                                                                                                                                                  ETIQE', '2018-02-07 16:40:59', '2018-02-15 08:56:14', 'machupichu-full-day-es', '0', 'es', 102),
(3, 'Machupichu', 0, 'Full day', 'editando', '', '                                            El Mirador del Condor en Cusco', '2018-02-07 16:45:46', '2018-02-15 09:29:56', 'machupicchu-full-day-en', '0', 'en', 111),
(5, 'City Tour Cusco', 2, 'Medio Dia', 'publicado', '/img/popular/city_tour.jpeg', 'sds', '2018-02-07 17:04:01', '2018-02-08 17:00:34', 'city-tour-es', '', 'es', 104),
(6, 'City Tour Cusco', 0, 'Half Day', 'publicado', '/img/popular/city_tour.jpeg', 'city tour cusco', '2018-02-07 17:23:25', '2018-02-10 06:10:42', 'city-tour-en', '', 'en', 105),
(7, 'Montana 7 colores', 2, 'Full Day', 'editando', '/img/popular/colores.jpg', '  ', '2018-02-07 17:26:21', '2018-02-15 09:55:41', 'rainbown-mountain-es', '', 'es', 112),
(8, 'Rainbown Mountain', 0, 'Full Day', 'editando', '/img/popular/colores.jpg', '', '2018-02-07 17:29:24', '2018-02-07 17:29:24', 'rainbown-mountain-en', '', 'en', 107),
(9, 'Valle Sagrado', 2, 'Full Day', 'editando', '/img/popular/sacred_valley.jpg', 'Valle sagrado', '2018-02-08 13:57:09', '2018-02-15 08:48:40', 'sacred-valley-es', '', 'es', 101),
(10, 'Sacred Valley', 0, 'Full Day', 'editando', '/img/popular/sacred_valley.jpg', 'sacred valley', '2018-02-08 14:21:16', '2018-02-08 14:21:16', 'sacred-valley-en', '', 'en', 108),
(11, 'Maras, Moray y Salineras', 0, 'Medio dias creo', 'publicado', '', '                      Maras Moray Salineras', '2018-02-10 05:11:26', '2018-02-15 08:42:09', 'maras-moray-es', '', 'es', 109),
(12, 'Maras, Moray and Salt Mines', 0, 'Half Day', 'publicado', '', '', '2018-02-11 12:08:32', '2018-02-12 13:14:48', 'maras-moray-en', '6491518368912', 'en', 110),
(13, 'Machupicchu By Car', 0, '2 Days 1 Night', 'editando', '/img/popular/machupicchu.jpg', 'Machupicchu By Car, Machupicchu By Bus', '2018-02-21 12:56:29', '2018-02-21 12:56:29', 'machupicchu-by-car-en', '7151519235789', 'en', 0),
(14, 'Machu Picchu By Car', 2, '2 días 1 Noche', 'editando', '/img/popular/machupicchu.jpg', '                      Machupicchu By Car, Machupicchu By Bus', '2018-02-21 13:13:07', '2018-02-21 13:17:54', 'machupicchu-by-car-es', '9101519236787', 'es', 113),
(15, 'Inka Trail', 0, '2 Days 1 Night', 'editando', '/img/popular/inka_trail.jpg', 'Inka Trail 2 Days 1 Night', '2018-02-21 13:25:10', '2018-02-21 13:25:10', 'inka-trail-2days-1night-en', '7741519237510', 'en', 0),
(16, 'Camino Inka', 2, '2 días 1 Noche', 'editando', '/img/popular/inka_trail.jpg', 'Camino Inca, Camino Inka', '2018-02-21 13:47:08', '2018-02-21 13:47:08', 'inka-trail-2days-1night-es', '1871519238828', 'es', 0),
(17, 'Inka Jungle Trek', 0, '4 Days 3 Nights', 'editando', '/img/popular/inca_jungle.jpg', 'Inka Jungle Trek', '2018-02-21 13:50:16', '2018-02-21 13:50:16', 'jungle-trek-4days-3nights-en', '6591519239016', 'en', 0),
(18, 'Inka Jungle Trek', 2, '4 días 3 Noches', 'editando', '/img/popular/inca_jungle.jpg', 'Inka Jungle Trek', '2018-02-21 14:11:34', '2018-02-21 14:11:34', 'jungle-trek-4days-3nights-es', '5551519240294', 'es', 0),
(19, 'Cusco', 0, '7 Days 6 Nights', 'editando', '/img/packages/pkg1.jpg', 'Cusco 7 Days 6 Nights', '2018-02-21 16:19:41', '2018-02-21 16:19:41', 'cusco-package-7days-6nights-en', '7851519247981', 'en', 0),
(20, 'Cusco', 1, '7 Días 6 Noches', 'editando', '/img/packages/pkg1.jpg', 'Cusco 7 dias 6 Noches', '2018-02-21 16:21:48', '2018-02-21 16:21:48', 'cusco-package-7days-6nights-es', '8501519248108', 'es', 0),
(21, 'Cusco', 0, '6 Days 5 Nights', 'editando', '/img/packages/pkg2.jpg', 'Cusco 6 Days 5 Nights', '2018-02-21 16:50:23', '2018-02-21 16:50:23', 'cusco-package-6days-5nights-en', '8801519249823', 'en', 0),
(22, 'Cusco', 1, '6 días 5 Noches', 'editando', '/img/packages/pkg2.jpg', 'Cusco 6 dias 5 Noches', '2018-02-22 10:24:07', '2018-02-22 10:24:07', 'cusco-package-6days-5nights-es', '4841519313047', 'es', 0),
(23, 'Cusco', 0, '5 Days 4 Nights', 'editando', '/img/packages/pkg3.jpg', 'Cusco 5 Days 4 Nights', '2018-02-22 10:27:46', '2018-02-22 10:27:46', 'cusco-package-5days-4nights-en', '8041519313266', 'en', 0),
(24, 'Cusco', 1, '5 días 4 Noches', 'editando', '/img/packages/pkg3.jpg', 'Cusco 5 días 4 Noches', '2018-02-22 10:28:54', '2018-02-22 10:28:54', 'cusco-package-5days-4nights-es', '5811519313334', 'es', 0),
(25, 'Cusco', 0, '4 Days 3 Nights', 'editando', '/img/packages/pkg4.jpg', 'Cusco 4 Days 3 Nights', '2018-02-22 10:41:26', '2018-02-22 10:41:26', 'cusco-package-4days-3nights-en', '1091519314086', 'en', 0),
(26, 'Cusco', 1, '4 días 3 Noches', 'editando', '/img/packages/pkg4.jpg', 'Cusco 4 días 3 Noches', '2018-02-22 10:42:43', '2018-02-22 10:42:43', '4 Days 3 Nights-es', '9451519314163', 'es', 0),
(27, 'Cusco', 0, '3 Days 2 Nights', 'editando', '/img/packages/pkg5.jpg', 'Cusco 3 Days 2 Nights', '2018-02-22 11:14:26', '2018-02-22 11:14:26', 'cusco-package-3days-2nights-en', '9891519316066', 'en', 0),
(28, 'Cusco', 1, '3 días 2 Noches', 'editando', '/img/packages/pkg5.jpg', 'Cusco 3 días 2 Noches', '2018-02-22 11:16:22', '2018-02-22 11:16:22', 'cusco-package-3days-2nights-es', '6721519316182', 'es', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sleep_galeria`
--

CREATE TABLE `sleep_galeria` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sleep_galeria`
--

INSERT INTO `sleep_galeria` (`id`, `tour_id`, `titulo`, `ruta`, `fecha`) VALUES
(1, 17, 'Koricancha', '../../views/images/pictures/citytour_570_320_1.jpg', '2018-01-23 00:00:00'),
(2, 17, 'Sacsayhuaman', '../../views/images/pictures/citytour_570_320_2.jpg', '2018-01-23 00:00:00'),
(3, 17, 'TamboMachay', '../../views/images/pictures/citytour_570_320_3.jpg', '2018-01-23 00:00:00'),
(4, 16, 'Ingreso', '../../views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(5, 16, 'Montana', '../../views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(6, 16, 'Montana fin', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(7, 18, 'Ollantaytambo', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(8, 18, 'Pisac', '../../views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(9, 18, 'Chinchero', '../../views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(10, 26, 'Koricancha', '../../views/images/pictures/citytour_570_320_1.jpg', '2018-01-23 00:00:00'),
(11, 26, 'Sacsayhuaman', '../../views/images/pictures/citytour_570_320_2.jpg', '2018-01-23 00:00:00'),
(12, 26, 'TamboMachay', '../../views/images/pictures/citytour_570_320_3.jpg', '2018-01-23 00:00:00'),
(13, 27, 'Ollantaytambo', '../../views/images/pictures/VSagrado_570_320_1.jpg', '2018-01-24 00:00:00'),
(14, 27, 'Pisac', '../../views/images/pictures/VSagrado_570_320_2.jpg', '2018-01-24 00:00:00'),
(15, 27, 'Chinchero', '../../views/images/pictures/VSagrado_570_320_3.jpg', '2018-01-24 00:00:00'),
(16, 19, 'Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(17, 19, 'Salineras', '../../views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(18, 19, 'Salineras', '../../views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(19, 28, 'Moray', '../../views/images/pictures/maras_570_320_1.jpeg', '2018-01-24 00:00:00'),
(20, 28, 'Salineras', '../../views/images/pictures/maras_570_320_2.jpg', '2018-01-24 00:00:00'),
(21, 28, 'Salineras', '../../views/images/pictures/maras_570_320_3.jpg', '2018-01-24 00:00:00'),
(22, 32, 'entrance', '../../views/images/pictures/Colores_570_320_1.jpg', '2018-01-23 00:00:00'),
(23, 32, 'Mountain', '../../views/images/pictures/Colores_570_320_2.jpg', '2018-01-24 00:00:00'),
(24, 32, 'Mountain 2', '../../views/images/pictures/Colores_570_320_3.jpg', '2018-01-24 00:00:00'),
(25, 29, 'Tipon', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(26, 29, 'Pikillacta', '../../views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(27, 29, 'Iglesia de Andahuaylillas', '../../views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(28, 30, 'Tipon', '../../views/images/pictures/valle_sur_570_320_1.jpg', '2018-01-23 00:00:00'),
(29, 30, 'Pikillacta', '../../views/images/pictures/valle_sur_570_320_2.jpg', '2018-01-24 00:00:00'),
(30, 30, 'Iglesia de Andahuaylillas', '../../views/images/pictures/valle_sur_570_320_3.jpg', '2018-01-24 00:00:00'),
(31, 14, '...', '../../views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(32, 14, 'Machu Picchu', '../../views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(33, 14, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(34, 31, '...', '../../views/images/pictures/machu_picchu_by_car_570_320_1.png', '2018-01-23 00:00:00'),
(35, 31, 'Machu Picchu', '../../views/images/pictures/machu_picchu_by_car_570_320_2.jpg', '2018-01-24 00:00:00'),
(36, 31, 'Machu Picchu', '../../views/images/pictures/machupicchu_570_320_1.jpg', '2018-01-24 00:00:00'),
(37, 17, 'Koricancha', '../../views/images/galeria/citytour_570_320_1.jpg', '2018-01-23 00:00:00'),
(38, 17, 'Sacsayhuaman', '../../views/images/galeria/citytour_570_320_2.jpg', '2018-01-23 00:00:00'),
(39, 17, 'TamboMachay', '../../views/images/galeria/citytour_570_320_3.jpg', '2018-01-23 00:00:00'),
(40, 17, 'Koricancha', '../../views/images/galeria/citytour_570_320_4.jpg', '2018-01-23 00:00:00'),
(41, 17, 'Sacsayhuaman', '../../views/images/galeria/citytour_570_320_5.jpg', '2018-01-23 00:00:00'),
(42, 17, 'TamboMachay', '../../views/images/galeria/citytour_570_320_6.jpg', '2018-01-23 00:00:00'),
(43, 17, 'Koricancha', '../../views/images/galeria/citytour_570_320_7.jpg', '2018-01-23 00:00:00'),
(44, 17, 'Sacsayhuaman', '../../views/images/galeria/citytour_570_320_8.jpg', '2018-01-23 00:00:00'),
(45, 17, 'TamboMachay', '../../views/images/galeria/citytour_570_320_9.jpg', '2018-01-23 00:00:00'),
(46, 17, 'Koricancha', '../../views/images/galeria/citytour_570_320_10.jpg', '2018-01-23 00:00:00'),
(47, 17, 'Sacsayhuaman', '../../views/images/galeria/citytour_570_320_11.jpg', '2018-01-23 00:00:00'),
(48, 17, 'TamboMachay', '../../views/images/galeria/citytour_570_320_12.jpg', '2018-01-23 00:00:00'),
(49, 0, '', '../../views/images/galeria/galeria360.jpg', '0000-00-00 00:00:00'),
(50, 0, '', '../../views/images/galeria/galeria722.jpg', '0000-00-00 00:00:00'),
(51, 0, '', '../../views/images/galeria/galeria712.jpg', '0000-00-00 00:00:00'),
(52, 0, '', '../../views/images/galeria/galeria410.jpg', '0000-00-00 00:00:00'),
(53, 0, '', '../../views/images/galeria/galeria628.jpg', '0000-00-00 00:00:00'),
(54, 0, '', '../../views/images/galeria/galeria423.jpg', '0000-00-00 00:00:00'),
(55, 0, '', '../../views/images/galeria/galeria308.jpg', '0000-00-00 00:00:00'),
(56, 0, '', '../../views/images/galeria/galeria762.jpg', '0000-00-00 00:00:00'),
(57, 0, '', '../../views/images/galeria/galeria510.jpg', '0000-00-00 00:00:00'),
(58, 0, '', '../../views/images/galeria/galeria371.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `ruta`, `titulo`, `descripcion`, `orden`, `fecha`) VALUES
(4, '../../views/images/slide/slide816.jpg', 'titulo', 'desc', 0, '2018-02-02 10:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `detalles` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `modo` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'e',
  `done` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'e',
  `tiempoestimado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo_starts` datetime NOT NULL,
  `tiempo_ends` datetime NOT NULL,
  `cmtinicial` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cmtfinal` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`, `titulo`, `accion`, `detalles`, `modo`, `done`, `tiempoestimado`, `tiempo_starts`, `tiempo_ends`, `cmtinicial`, `cmtfinal`) VALUES
(1, 1, '', 'Agregar', 'Mostrar fecha actual', '1', '1', '', '2017-12-16 08:47:54', '2017-12-16 08:48:32', 'simple solo es copiar y pegar', 'fin'),
(2, 2, '', 'Agregar', 'pagina que te permita registrar las tareas que haces en la pagina', '1', '1', '', '2017-12-16 08:50:17', '2017-12-16 08:51:16', 'solo es copiar y pegar de nuestro trabajo anterior', 'solo tomo 20 mas o menos. '),
(3, 3, '', 'Agregar', 'Variables de sesion', '1', '1', '', '2017-12-16 09:36:04', '2017-12-16 09:50:31', 'no me debe tomar mucho tiempo. copiar y pegar', 'listo. '),
(4, 4, '', 'Agregar', 'Detalles Tours', '1', '1', '', '2017-12-16 10:35:20', '2017-12-21 07:30:07', 'no se ve tan dificil', 'ya los hice a la mayoria'),
(5, 5, '', 'Agregar', 'formulario de contacto de la empresa', '1', '1', '', '2017-12-21 07:33:42', '2017-12-21 09:10:05', 'no se ve tan dificil', 'listo o casi falta algunas ordenar y completar algunas cosas'),
(6, 2, '', 'Agregar', 'tiempo estimado', '1', '1', '', '2017-12-21 07:35:34', '2017-12-21 10:00:44', 'un nuevo campo, donde ingresas el tiempo que crees que te tomara realizar ese trabajo', 'no se si me sea de utilidad pero ahi esta'),
(7, 9, '', 'Agregar', 'Crear cuenta', '1', '1', '20:00', '2017-12-21 09:41:02', '2017-12-21 10:01:52', 'un rato', 'no tomaron el nombre de la agencia por suerte jeje'),
(8, 8, '', 'Agregar', 'Crear cuenta', '', '1', '10:00', '2017-12-21 09:49:29', '2017-12-21 10:03:08', 'simple', 'no tomaron tampoco el nombre jejjeje'),
(9, 1, '', 'Agregar', 'arreglar el header', '1', '1', '10:00', '2017-12-23 10:11:57', '2017-12-23 10:23:07', 'sencillo', 'listo.'),
(10, 10, '', 'Agregar', 'link una pagina para todos', '1', '1', '50:00', '2017-12-23 10:25:03', '2017-12-23 11:57:52', 'mmmm espero que resulte', 'wee se complico un poco. pero ya esta'),
(11, 4, '', 'Agregar', 'Subir  git', '1', '1', '20:00', '2017-12-23 13:03:28', '2017-12-23 13:03:45', 'listo', 'mmmm ya esta '),
(12, 2, '', 'Mejorar', 'contador de tareas', '1', '1', '20:00', '2017-12-23 14:00:41', '2017-12-23 14:12:33', 'copiar y pegar', 'jejej fin. listo'),
(28, 12, 'contador', 'Agregar', 'un contador que te permita saber cuantas veces una tarea fue creada', '1', '1', '', '2017-12-23 11:04:23', '2017-12-24 12:28:59', 'det 15', 'pucha que nos costo mucho realizarlo. despues me doy cuenta que solo necesitaba un +1 en la consulta buaaaaaaaaaaa'),
(34, 1, 'Menu Nav', 'Agregar', 'parece un poco complicado ya que luego tendre que modificar  mas cosas', '0', '1', '', '2018-01-25 20:06:13', '2018-01-25 20:08:01', 'maso', 'mmm listo. lo hice denates'),
(35, 10, 'Tab panel', 'Agregar', 'ocupaba mucho campo las demas cosas', '0', '1', '', '2018-01-25 20:07:41', '2018-01-25 20:09:28', 'facil', 'ahora falta ordenar'),
(36, 10, 'pagina bilingue', 'Agregar', 'huy me parecio complicado pero se pudo', '0', '1', '', '2018-01-25 20:08:58', '2018-01-25 20:09:39', 'casi dificil', 'por fin'),
(37, 7, 'MenuTabs', 'Agregar', 'Maquetarlos para que queden listo como plantilla', '0', '1', '', '2018-01-26 05:55:04', '2018-01-26 06:05:08', 'sencillo', 'listo..quedara asi por un tiempo'),
(38, 1, 'Agregar mas botones', 'Mejorar', 'agregare el boton tours y el link del idioma', '0', '1', '', '2018-01-26 06:04:43', '2018-01-26 06:18:28', 'el idioma nos va acambiar el contenido', 'listo. lo del idioma ya sera en otra oportunidad, no es tan sencillo ya que lo copie de otro del hotel'),
(39, 13, 'buscar info', 'Otro', 'para version en ingles', '0', '1', '', '2018-01-26 06:49:14', '2018-01-26 11:18:23', 'no debe ser dificil', 'listo, tenemos una cantidad razonable de informacion para que ayude en el desarrollo de la pagina en ingles'),
(40, 14, 'utilidades para la pagina', 'Agregar', 'un lista de de las cosas utiles que el pax necesita', '0', '1', '', '2018-01-26 11:20:19', '2018-01-26 14:56:40', 'copiar y pegar', 'hace rato'),
(41, 13, 'maquetar', 'Mejorar', 'avanzar la maquetacion de la informacion del tour.', '0', '1', '', '2018-01-26 15:06:50', '2018-01-26 15:38:53', 'seguimos', 'casi listo...'),
(42, 13, 'Fotos', 'Agregar', 'agregar 3 fotos para los tours tradicionales', '0', '1', '', '2018-01-26 15:54:16', '2018-01-26 18:27:30', 'copia y pega', 'se hizo maas que eso ... los tour tradicionales ya los tenemos claro sin el itinerario'),
(43, 5, 'bilingue', 'Agregar', 'convertirlo en bilingue', '0', '1', '', '2018-01-27 08:35:17', '2018-01-27 09:28:14', 'nada dificil', 'listo..'),
(44, 15, 'Agregar paginas ', 'Agregar', 'crear las paginas que estaran dentro de esta categoria con sus respectivas imagenes', '0', '1', '', '2018-01-27 10:04:57', '2018-01-27 13:27:56', 'no esta dificil solo nos tomara tiempo', 'pagina de trekking '),
(45, 11, 'ordenar carpetas', 'Mejorar', 'mezcle el codigo de varias paginas. asi que tengo que ordenarlos', '0', '1', '', '2018-01-27 13:30:29', '2018-01-27 16:28:42', 'maso menos facil', 'listo. tambien lo subi al github'),
(46, 15, 'efecto imagen', 'Mejorar', 'agregar un efecto a la imagen, al pasar el puntero por encima se le vuelva ligeramente blanco y la imagen se aleje un poco', '0', '1', '', '2018-01-27 18:23:37', '2018-01-27 18:33:21', 'facil, copiar pegar', 'listo. tuve alguno problemas con el git pero ya lo solucione'),
(47, 11, 'botones', 'Mejorar', 'cambiar el efecto hover', '0', '1', '', '2018-01-28 10:15:01', '2018-01-28 12:32:36', 'copiar y pegar', 'me tomo mucho tiemp agg'),
(48, 16, 'AdminLte', 'Mejorar', 'Cambiar la plantilla ya que no me gustaba mucho el anterior y tenia algunos errores', '0', '1', '', '2018-01-31 07:41:35', '2018-02-01 07:56:27', 'no tan simple como parece', 'se complico un poco, pq cambie dos veces la plantilla. la primera (metroking template) tenia errores o no podia buscar. pero en cambio el AdminLTE si se puede'),
(49, 2, 'Cambiar', 'Mejorar', 'cambiando por los nuevos estilos', '0', '1', '', '2018-02-01 06:01:37', '2018-02-01 07:02:25', 'simple', 'nada'),
(50, 18, 'Cambiar template', 'Mejorar', 'cambiar la vista y el agregar', '0', '1', '', '2018-02-01 08:18:03', '2018-02-02 10:07:15', 'si no me equivoco tendre que Volver a hacerlo desde cero', 'mmmm'),
(51, 17, 'editar tours', 'Agregar', 'una plantilla para que editemos todos los tours', '1', 'e', '', '2018-02-07 13:22:48', '0000-00-00 00:00:00', 'nos va tomar un rato', '');

-- --------------------------------------------------------

--
-- Table structure for table `tdetalles`
--

CREATE TABLE `tdetalles` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `ready` tinyint(4) NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `soles` decimal(10,2) NOT NULL,
  `dolares` decimal(10,2) NOT NULL,
  `incluye` text CHARACTER SET latin1 NOT NULL,
  `noincluye` text CHARACTER SET latin1 NOT NULL,
  `masinfo` text CHARACTER SET latin1 NOT NULL,
  `todoincluido` text COLLATE utf8_spanish_ci NOT NULL,
  `itinerario` text COLLATE utf8_spanish_ci NOT NULL,
  `quellevar` text CHARACTER SET latin1 NOT NULL,
  `nota` text COLLATE utf8_spanish_ci NOT NULL,
  `clima` text COLLATE utf8_spanish_ci NOT NULL,
  `mar_itinerario` text COLLATE utf8_spanish_ci NOT NULL,
  `full_itinerario` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tdetalles`
--

INSERT INTO `tdetalles` (`id`, `tid`, `ready`, `descripcion`, `soles`, `dolares`, `incluye`, `noincluye`, `masinfo`, `todoincluido`, `itinerario`, `quellevar`, `nota`, `clima`, `mar_itinerario`, `full_itinerario`) VALUES
(1, 2, 0, '                                                                                                                                                                                    Machu Picchu hermosa ciudadela Inca construida en el siglo XV por el Inca Pachacutec, este impresionante monumento  considerado como una obra maestra de la arquitectura  e ingeniería. Fue considerado una hacienda real destinada al culto de los dioses y un desafío a los dotes del constructor, está considerada como una de las 7 maravillas del mundo desde el año 2007 y está ubicada a 2430 metros de altitud en el valle del río Urubamba, visite este lugar será para usted una experiencia inolvidable.', '13.00', '1.00', '                                                                                                                                                                                                                                          <ul>\r\n<li>Transporte</li>\r\n<li>Guía bilingüe.</li>\r\n<li>Ticket de bus de subida y bajada al santuario (Aguas Calientes – Machu Picchu).</li>\r\n<li>Ticket de tren (Ollantaytambo – Aguas Calientes – Ollantaytambo, .</li>\r\n<li>Ingreso al santuario de Machu Picchu.</li>\r\n</ul>', '                                                                                                                                                                                                                                          <ul>\r\n<li>Alojamiento.</li>\r\n<li>Alimentación.</li>\r\n<li>Bebidas.</li>\r\n<li>Extras</li>\r\n</ul>', '', '', 'okoko', '                                                                                                                                                                                                                                                                                              LLEVAR', '                                                                                                                                                                                                                                                  ', '', '', 'El tour empieza con el recojo del hotel  a las 03:00 AM. Muy temprano por la mañana nos trasladaremos a la estación de tren en Ollantaytambo. A las 05:30 AM abordaremos el tren elegido con destino al majestuoso santuario de “Machu Picchu”. Durante el recorrido apreciaremos la hermosura de los Valles Interandinos y los pueblos indígenas de la zona, hasta llegar a Machu Picchu pueblo, o más conocido como Aguas calientes. Luego tomaremos los buses que  nos llevaran al santuario. Después del chequeo en la caseta de ingreso, comienza nuestra experiencia .Nuestro guía inicia la visita en el complejo Incaico; en el Templo del Sol, donde se observara sus principales recintos, luego el Intihuatana, grupo de la Roca Sagrada, Templo de las Tres Ventanas, el mausoleo, entre otros lugares de interés  el  guiado es aproximadamente 2 horas  pasado esta hora se le dará un tiempo libre para que pueda recorrer  por las zonas que usted desee y tomar fotos por su cuenta de algún lugar de su interés, entre otras cosas. En Machu Picchu pueblo se puede pasear, recorrer lugares de venta de artesanía, Plaza de Armas entre otros, hasta esperar la hora para abordar el tren de retorno a Cusco. A las 08:00 PM. Aproximadamente. Tomaremos el tren de retorno con destino a Ollantaytambo en donde nuestro transporte  nos espera para embarcarnos a la ciudad imperial del Cusco. Fin de nuestros servicios.'),
(2, 3, 0, '                                        dfsf', '80.00', '100.00', '                                                    fsds', '                                                    sdsa', '', '', 'gsssfsd       ', '                                                    ', '                      primeta nota', '', '', ''),
(3, 5, 0, 'mmmmmmmmmmm', '500.00', '10.00', '<ul>\r\n<li>Private tourist transport</li>\r\n<li>van for 12 person or bus for 20 person</li>\r\n<li>Excellent English speaking tour guide</li>\r\n<li>Visit to main Cathedral and Qorikancha</li>\r\n<li>and the Four Archeological Sites</li>\r\n<li>(approximate duration of visits):</li>\r\n<li>*SAQSAYHUAMAN 40 minutes</li>\r\n<li>*QENQO 30 minutes</li>\r\n<li>*PUCAPUCARA 20 minutes</li>\r\n<li>*TAMBOMACHAY 20 minutes</li>\r\n</ul>', '<ul>\r\n<li>Entrance fees to the sites</li>\r\n<li>(Cusco Tourist Ticket 130 soles approx US$45)</li>\r\n<li>Same ticket can be used for Sacred Valley Tour</li>\r\n<li>Half price for students with ISIC card.</li>\r\n<li>*Entrance to Koricancha (or Qorikancha) 10 soles</li>\r\n<li>*Entrance to Cathedral 25 soles (the visit of the Cathedral is optional as many people prefer not to visit now that it is more expensive so there is the option to have afternoon tea in a restored Colonial house / hotel if you prefer during this part of the tour)</li>\r\n<li>Alternatively you can purchase a partial ticket which allows a one day visit of just the 4 Archeological sites if you are not planning to visit any of the Sacred Valley sites such as Pisac, Ollantaytambo, Chincheros</li>\r\n<li>Cusco Tourist Ticket it cost 130 soles approx US$45* includes the admition to Cusco folk dances and music at Cusco Art Center in the 3rd block of Sol Avenue, presentation everynight from 7:00 pm.</li>\r\n</ul>', '', '', '', '<ul> <li>bottle of water</li> <li>Camera</li> <li>Sun hat/cream</li> <li>Rain jacket or rain poncho</li> <li>Comfortable walking shoes</li> <li>tourist ticket or money for entrances</li> </ul>', '', '', '', '1.30pm meet at the SAS office or predetermined location for transport. We first visit the central equisite architectural feats of the ancient \"Koricancha\" Temple, and the Principal Cathedral, in which the first stone was placed in 1560, is a marvel of the religious art possessing approximately 300 paintings from the Cusque&ntilde;a School.&nbsp;<br />Then, the tour moves to the arqueological park complex of Saqsayhuam&aacute;n, majestic place with impressive works in stone, some up to 120 tons. Q\'enqo (Labyrinth) a religious center dedicated to the adoration of the Earth. Puca Pucara (reddish place) that was used as a military control center, and a mandatory stop for all travelers of the Inca era.<br />Tambomachay (Temple of the Water) a center of adoration and worship of water.'),
(4, 6, 0, '<p>Cusco considerada como una de las ciudades m&aacute;s importantes del Per&uacute;, Es el centro del imperio inca, patrimonio Cultural del Mundo es uno de los lugares m&aacute;s visitado hoy en d&iacute;a, por la cantidad de importantes restos arqueol&oacute;gicos y atractivos tur&iacute;sticos, con paredes Incas, coloridos trajes, iglesias coloniales construidas sobre palacios incas, legendarios caminos incas y toda la belleza de un glorioso pasado que envuelve a los visitantes que llegan al Cusco. Con una gran diversidad de costumbres y tradiciones, Cusco a&uacute;n conserva sus muros incaicos y las calles con piso de piedra que se mezclan con la arquitectura Colonial incaica.</p>', '45.00', '15.00', '<ul>\r\n<li>Bus Tur&iacute;stico.</li>\r\n<li>Gu&iacute;a Profesional.</li>\r\n<li>Boleto Tur&iacute;stico de Ingreso a:</li>\r\n<li>(Sacsayhuaman &ndash; Qenqo &ndash; Pukapukara &ndash; Tambomachay )</li>\r\n<li>Traslados.</li>\r\n</ul>', '<ul>\r\n<li>Propinas.</li>\r\n\r\n</ul>', '', '', 'it simple', '                                                    ', '  falta teminar', '', '', '<p>Para iniciar este circuito lo recogeremos de su respectivo hotel en horas de la tarde para luego visitar los siguientes atractivos tur&iacute;sticos.</p>\r\n<p><strong>La Catedral del Cusco</strong>.- Iniciamos la excursi&oacute;n visitando la Catedral del Cusco, la iglesia de la Sagrada Familia, y la iglesia del Triunfo.</p>\r\n<p><strong>Templo de Koricancha</strong>.- Llamado tambi&eacute;n &ldquo;Templo del Sol&rdquo; su arquitectura unica y las construcciones de piedra reflejan que fue el templo m&aacute;s importante del imperio incaico.</p>\r\n<p><strong>Sacsayhuaman</strong>.- En la &eacute;poca inca fue llamada &ldquo;casa del sol&rdquo;, y fue un gran centro religioso de gran importancia Esta construcci&oacute;n se le atribuye a los Incas de las &uacute;ltimas dinast&iacute;as, est&aacute; ubicada a 5 km de la ciudad del Cusco.</p>\r\n<p><strong>Qenqo.-</strong>&nbsp;Ubicado a un kil&oacute;metro de Sacsayhuaman, fue un centro ceremonial ya que se aprecia en la parte central un monolito gigante, posiblemente el de un animal que fue la deidad principal, rodeado por hornacinas donde se colocaban las ofrendas.</p>\r\n<p><strong>PucaPucara.-</strong>&nbsp;Antiguo tambo, puesto de vigilancia que exist&iacute;a a lo largo de los caminos Incas.<br />Su construcci&oacute;n es de tipo r&uacute;stico conformada por calles, casas, y patios.</p>\r\n<p><strong>Tambomachay.-</strong>&nbsp;Se ubica a 9 km. de la ciudad, conocido como el ba&ntilde;o del Inca, por la forma de sus fuentes de agua, tambi&eacute;n pudo ser un templo dedicado al culto del agua,</p>\r\n<p>Posteriormente a nuestra visita retornaremos la ciudad de Cusco. Fin de nuestro servicio.</p>'),
(5, 7, 0, '                    Tienes un día completo de aventura disfrutando de la gran vista de la famosa montaña arco iris (Vinicunca). Imagínese contemplando estos maravillosos y colorido paisaje después de una corta caminata de dos horas atravesó de la montaña andina, ideal para las personas intrépidas.', '100.00', '20.00', '<ul>\r\n<li>Recojo del hotel</li>\r\n<li>Gu&iacute;a biling&uuml;e</li>\r\n<li>transporte</li>\r\n<li>Ticket de ingreso a la Monta&ntilde;a</li>\r\n<li>Desayuno en el Poblado de Chilca</li>\r\n<li>Almuerzo buffet</li>\r\n</ul>', '<ul>\r\n<li>Caballo (s/70.00)</li>\r\n<li>Bebidas.</li>\r\n<li>Gastos extras.</li>\r\n</ul>', '', '', '                                            vallesito', '<ul>\r\n<li>Llevar ropa Abrigadora.</li>\r\n<li>Zapatos de tracking</li>\r\n<li>Poncho de lluvia</li>\r\n<li>Mochila peque&ntilde;a con objetos personales.</li>\r\n<li>C&aacute;mara fotogr&aacute;fica para guardar los mejores momentos de tu viaje.</li>\r\n<li>Un poco de dinero en efectivo para compras.</li>\r\n<li>Agua Mineral.</li>\r\n<li>Bloqueador Solar.</li>\r\n<li>&nbsp;Gorra para el Sol</li>\r\n<li>Bastones</li>\r\n<li>Hojas de coca</li>\r\n<li>Medicamentos personales</li>\r\n<li>Dinero extra.</li>\r\n</ul>', '                                                                  ', '', '', '<p><strong>Día 1: Cerro de los Siete Colores (Vinicunca )</strong></p>\r\n<p>Saldremos por la madrugada de la  ciudad imperial Aprox 3:00am, esto debido que tenemos un largo viaje y queremos aprovechar la excursión al máximo, (lo recogemos de su respectivo hotel)</p>\r\n<p>Nos dirigimos a Qollasuyo, camino antiguo de los quechuas, parte importante de todo  el tawantinsuyo( 4 regiones de los incas) llegaremos a CHECACUPE, Para luego continuar a la localidad  de PITUMARCA,</p>\r\n<p>En el transcurso del viaje podremos disfrutar de hermosos paisajes y del valles de Pitumarca llegando al poblado nativo de JAPURA, HACHIPACHA con habitantes nativo  quechuas.</p>\r\n<p>Finalmente llegaremos al lugar punta carretera llamado Chillca. Donde tendremos un agradable desayuno a una altura de. (4200.00msnm),  este es nuestro punto de inicio de la caminata rumbo al Cerro de los Siete Colores</p>\r\n<p>Después de nuestro desayuno  daremos inicio de la caminata, observando  hermosos paisajes, donde habitan camélidos sudamericanos (alpacas, llamas, vicuñas, puma, aves andinos y cóndor etc.)</p>\r\n<p>La caminata a la Montaña de los siete Colores dura Aprox. 3 Hrs. Llegamos al lugar llamado VININCUNCA – paso DE 5200 M.s.n.m, des donde observaremos la vista impresiónate del cerro colorado con la salida del sol, mágicos colores que solo existe en este lugar de nuestra sierra Peruana.</p>\r\n<p>Es hora de sacar nuestras cámaras o celulares para sacar la mejor vista, ya que el paisaje parece un escenario sub realista, sacado de una película de ficción.</p>\r\n<p>Alrededor observaremos las montañas apu sari nini,  montaña Ausangate   la montaña más alta de cusco con una altura de 6372 M.s.n.m.</p>\r\n<p>Después de disfrutar el paisaje y hacer muchas fotos emprenderemos nuestro regreso (2 horas) a la Comunidad de Chillca constituida por pastores de llamas y alpacas es conocida como la guardiana de estos lugares andinos.</p>\r\n<p>A la hora oportuna emprenderemos el regreso al cusco. Llegando a la ciudad del cusco aproximadamente a las 7 pm.</p>\r\n<p> </p>'),
(6, 8, 0, 'dgd', '70.00', '20.00', 'dgfg', 'dfdf', '', '', '', '', '', '', '', ''),
(7, 9, 0, '                                                                                fcgdgf', '520.00', '450.00', '                          <ul>\r\n<li>Recojo de vuestro hotel en Cusco.</li>\r\n<li>Transporte.</li>\r\n<li>Guía bilingüe</li>\r\n<li>Almuerzo buffet. (Urubamba)</li>\r\n</ul>', '                          <ul>\r\n<li>Bebidas</li>\r\n<li>Snak</li>\r\n<li>Tickets de ingreso a los grupos arqueológicos.</li>\r\n</ul>', '', '', '                                                                          dsdasdasd              ', '                                                                                                        cvdv', '                                                                                        ', '', '', '<p>Recojo de sus hotel a las 8.00 am en la ciudad imperial por un representante de nuestra agencia. Luego iniciaremos nuestra excursi&oacute;n al Valle Sagrado de los Incas. Este hermoso valle est&aacute; compuesto por numerosos r&iacute;os que descienden por quebradas llenas de verdor y peque&ntilde;os valles. En su recorrido usted podr&aacute; visitar&nbsp; restos arquitect&oacute;nicos Incas que el valle alberga en su interior. El Valle Sagrado de los Icas fue un lugar divino para los Incas, un regalo que el dios Sol les dio para su subsistencia, por&nbsp; la geograf&iacute;a y&nbsp; su maravilloso clima.</p>\r\n<p><strong>PISAC</strong></p>\r\n<p>Pisac el primer lugar por donde se empieza el recorrido al valle sagrado de los incas. El complejo arqueol&oacute;gico de Pisac est&aacute; ubicado a 33 kil&oacute;metros de la ciudad del Cusco, se encuentra al este de la Cordillera de Vilca bamba. Como era costumbre en la arquitectura inca, las ciudades fueron construidas sobre la base de trazos figurativos de animales. P&iacute;sac, ten&iacute;a la forma de una perdiz, como dice su nombre. Este lugar maravilloso est&aacute; formado por grupos de andenes y estructuras arquitect&oacute;nicas dispersas en las laderas y en lo alto de la monta&ntilde;a, Pisac es uno de los centros monumentales m&aacute;s hermosos del valle pues combina el paisaje con el acabado impecable de sus construcciones.</p>\r\n<p><strong>Mercado Artesanal de Pisac</strong></p>\r\n<p>Ubicado a 30 km de la ciudad del Cusco, la plaza principal de Pisac alberga este mercado, lugar colorido y alegre, donde se exhiben las m&aacute;s famosas artesan&iacute;as cusque&ntilde;as hechas por manos andinas, entre las artesan&iacute;as, sobresalen piezas textiles, ponchos, bolsas, etc, y las artesan&iacute;as de<strong>&nbsp;</strong>cer&aacute;mica, las cuales son reproducciones de piezas arqueolog&iacute;as incaicas, como los queros (vasos ceremoniales), collares, etc. A esta feria acuden comerciantes y artesanos ind&iacute;genas de muchos pueblos, ataviados de sus trajes t&iacute;picos.</p>\r\n<p><strong>Ollantaytambo</strong></p>\r\n<p>La Fortaleza y Ciudadela de Ollantaytambo&nbsp; pueblo inka viviente&rdquo; construida para vigilar el ingreso a esta parte del valle y protegerlo de posibles invasiones de los pobladores de la selva. Tendremos la oportunidad de caminar por las callecitas del pueblo y as&iacute; tener una clara idea de c&oacute;mo fue este centro militar, religioso y cultural, durante el Imperio Incaico.</p>\r\n<p><strong>&nbsp;</strong><strong>Chinchero&nbsp;</strong></p>\r\n<p>En el camino de regreso a Cusco visitaremos el pintoresco pueblito de Chinchero, donde se encuentran los restos de la hacienda real de T&uacute;pac Inca Yupanqui. Admirar&aacute; su bien preservado Muro Inca en la plaza principal y visitar&aacute; el hermoso templo colonial con interesantes frescos en el p&oacute;rtico, construido sobre las bases de una edificaci&oacute;n Inca. Tambi&eacute;n podremos observar los maravillosos tejidos, a las mujeres con sus peinados t&iacute;picos vestimenta tradicional y su forma de tejer.</p>\r\n<p>Fin de nuestro tour.</p>'),
(8, 10, 0, 'fdg', '22.00', '52.00', 'dgf', 'dg', '', '', '', '', '', '', '', ''),
(9, 11, 0, '                    descc', '60.00', '20.00', '                          in', '                          no i', '', '', '                      fgdg', '                          ', '                      ', '', '', ''),
(10, 12, 0, 'This fabuolous half day tour takes you around all the most important sites of Cusco. Including visits to Cusco\'s Cathedral, the Temple of the Sun (Qoricancha) and the various Inca sites found outside of the city you get to see an incredible mixture of Inca and Spanish-style and in the case of Qoricancha, the two combined. Cusco is truly a fascinating place to visit; providing a blend of the two cultures (Inca and Spanish) the city has a look and feel about it that is completely different to the rest of Peru. This tour is a must-do when visiting Cusco and is usually one of the first ports of call for all visiting tourists.', '45.00', '16.00', '<ul>\r\n<li>Round-trip transportation (tourist bus)</li>\r\n<li>English-speaking Tour Guide</li>\r\n</ul>', '<ul>\r\n<li>Entrance fee to Cathedral and to Qoricancha</li>\r\n<li>Tourist Ticket for archeological sites outside the city.</li>\r\n<li>Tourist Ticket for archeological sites outside the city.</li>\r\n</ul>', '', '', 'Iti simple Cusco is truly a fascinating place to visit; providing a blend of the two cultures (Inca and Spanish) the city has a look and feel about it that is completely different to the rest of Peru. This tour is a must-do when visiting Cusco and is usually one of the first ports of call for all visiting tourists.          ', '<ul>\r\n<li>Tourist ticket (not included in price)</li>\r\n<li>Sun hat</li>\r\n<li>Sun protection cream (factor 35 recommended)</li>\r\n<li>Waterproof jacket/rain poncho</li>\r\n<li>Water</li>\r\n<li>Camera and films</li>\r\n</ul>    ', '                      ', '', '', 'Cusco is truly a fascinating place to visit; providing a blend of the two cultures (Inca and Spanish) the city has a look and feel about it that is completely different to the rest of Peru. This tour is a must-do when visiting Cusco and is usually one of the first ports of call for all visiting tourists.\r\nCusco is truly a fascinating place to visit; providing a blend of the two cultures (Inca and Spanish) the city has a look and feel about it that is completely different to the rest of Peru. This tour is a must-do when visiting Cusco and is usually one of the first ports of call for all visiting tourists.'),
(11, 13, 0, 'desc Machupicchu By Car', '620.00', '190.00', 'incluye', 'no incluye', '', '', '', '', '', '', '', ''),
(12, 14, 0, '<p>En este tour maravilloso usted tendr&aacute; la oportunidad de observar hermosos paisajes, &nbsp;selva alta llena de flora, quebradas, valles impresionantes nevados como chic&oacute;n, salkantay y la ver&oacute;nica tambi&eacute;n&nbsp; tambi&eacute;n algunos pueblos donde la gente local es muy amable y ara grato su viaje a la ciudad inca de machupicchu.</p>', '690.00', '190.00', '<ul>\r\n<li>Bus Cusco &ndash; Hidroel&eacute;ctrica &ndash; cusco.</li>\r\n<li>Incluye alojamiento en Aguas calientes.</li>\r\n<li>Entrada a Machu Picchu.</li>\r\n<li>Gu&iacute;a biling&uuml;e</li>\r\n</ul>', '<ul>\r\n<li>Gastos extras.</li>\r\n<li>Tren aguas calientes &ndash; hidroel&eacute;ctrica</li>\r\n<li>Alimentaci&oacute;n</li>\r\n<li>Hospedaje en Cusco (Opcional).</li>\r\n</ul>', '', '', '                      itinerario simle    ', '<ul>\r\n<li>Pasaporte original</li>\r\n<li>Una mochila peque&ntilde;a</li>\r\n<li>Zapatillas de tracking.</li>\r\n<li>Ropa impermeable por temporada de lluvia.</li>\r\n<li>Repelente para mosquitos</li>\r\n<li>Crema para el sol</li>\r\n<li>Dinero extra.</li>\r\n</ul>', '                                            ', '', '', '<p><strong>D&Iacute;A&nbsp;1: CUSCO &ndash; HIDROELECTRICA&nbsp;&ndash; AGUAS CALIENTES</strong></p>\r\n<p>Nuestra Agencia &nbsp;pasara a recogerlos de su hotel entre las 7:30 am hasta las 8:00 a.m. Para luego dar inicio a la excursi&oacute;n, &nbsp;nos dirigiremos por el valle sagrado de Urubamba y posteriormente a ollantaytambo, durante este recorrido apreciamos diferentes pueblos y cambios clim&aacute;ticos de los andes hasta los lugares tropicales y los nevados de&nbsp; la ver&oacute;nica y salkantay, desde&nbsp; este lugar&nbsp; comenzaremos el descenso par la selva alta&nbsp; hasta Santa Mar&iacute;a&nbsp; hasta llegar a Santa Teresa, aqu&iacute; aremos una parada para almorzar y abastecernos de agua. Continuaremos nuestro viaje hasta hidroel&eacute;ctrica, de donde iniciaremos nuestra caminata por un sendero plano hasta aguas calientes (pueblo de machupicchu, esta caminata es aproximadamente de 3 horas) a lo lejos tendremos una vista de huayna picchu.</p>\r\n<p>Llegando al pueblo de Aguas Calientes&nbsp;(Machu Picchu), nuestro gu&iacute;a&nbsp;los instalara en sus respectivos &nbsp;hoteles u hostales&nbsp; con ba&ntilde;o privado y agua caliente), por la noche tendremos la cena y las indicaciones de nuestro gu&iacute;a acerca de la visita de la ciudadela inca de Machu Picchu, es opcional ir a las aguas termales.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DIA 2: VISITA DEL SANTUARIO DE &nbsp;MACHU PICCHU &ndash;&nbsp; RETORNO A CUSCO:</strong></p>\r\n<p>El d&iacute;a m&aacute;s importante de nuestro viaje, tenemos dos formas para llegar, el primero es a trav&eacute;s del camino inca, esta caminata dura 1 hora con 30 minutos de puro ascenso.</p>\r\n<p>El segundo es en bus tur&iacute;stico este corto viaje dura aproximadamente 25 minutos.</p>\r\n<p>Las personas que deseen subir caminando por el camino inca, saldremos muy temprano de nuestro hotel 4.30 am para llegar a la ciudadela inca de machu picchu muy temprano y apreciar la salida del sol.</p>\r\n<p>Las personas que deseen subir en carro tendr&aacute;n que tomar el primer bus 5:30 am para llegar temprano a machu picchu y poder apreciar la salida del sol que es un espect&aacute;culo &uacute;nico luego podremos visitar la ciudadela inca de machu picchu con nuestro grupo el recorrido ser&aacute; por los puntos mas importantes como el sector&nbsp; urbano, sector religioso, sector agr&iacute;cola entre otros lugares, este tour guiado tendr&aacute; una duraci&oacute;n de 2.00 horas a&nbsp; 2.30 , luego tendr&aacute; tiempo libre para visitar los lugares de su mayor inter&eacute;s.</p>\r\n<p>M&aacute;s tarde retornaremos a hidroel&eacute;ctrica de la misma forma como lo hicimos de ida. (Estar a tiempo en hidroel&eacute;ctrica a las 2.00 pm) en hidroel&eacute;ctrica nuestro movilidad les estar&aacute; esper&aacute;ndoles para retornar a la ciudad del cusco llegando alrededor de las 9.30 pm.</p>'),
(13, 15, 0, 'desc inka trail', '750.00', '230.00', 'incluye man', 'no incluye man', '', '', '', '', '', '', '', ''),
(14, 16, 0, 'desc camino inca', '750.00', '230.00', 'incluye ', 'no inlcuye', '', '', '', '', '', '', '', ''),
(15, 17, 0, 'desc', '815.00', '250.00', 'inluye', 'no ingluye', '', '', '', '', '', '', '', ''),
(16, 18, 0, '<p>Es un tour alternativo al camino inca tradicional, denominado Inca Jungle Machu Picchu.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Es perfecto para las personas que tiene una estad&iacute;a corta y desean disfrutar&nbsp; cada minuto de su tiempo, este tour le permite apreciar los exuberantes paisajes en el lado Nor-Oeste de la ciudad de Cusco, es una caminata combinada con recorrido en Bicicletas.</p>', '800.00', '250.00', '<ul>\r\n<li>Recojo de su hotel.</li>\r\n<li>Gu&iacute;a biling&uuml;e.</li>\r\n<li>Transporte cusco&nbsp; Abra M&aacute;laga-inicio de la bicicleteada</li>\r\n<li>Transporte Quellomayo -Santa Teresa</li>\r\n<li>Bicicletas con suspensi&oacute;n y quipos (cascos y guantes).</li>\r\n<li>3 desayunos 3 almuerzos 3 cenas.</li>\r\n<li>3 noches hospedaje</li>\r\n<li>Ticket de ingreso a Machupicchu</li>\r\n<li>Tren de retorno Aguas calientes Ollantaytambo</li>\r\n<li>Trasporte Ollntaytambo- cusco</li>\r\n</ul>', '<ul>\r\n<li>Entrada a los ba&ntilde;os termales.</li>\r\n<li>Primer desayuno y ultimo almuerzo.</li>\r\n<li>Snack y platos adicionales</li>\r\n<li>Bus de subida y bajada</li>\r\n<li>Ingreso a Huayna Picchu</li>\r\n<li>Gastos personales</li>\r\n<li>Gastos no mencionados en el itinerario</li>\r\n</ul>\r\n<p>Si usted desea ingresar a Huayna Picchu deberá confirmar al momento de hacer su reserva, está sujeto a la disponibilidad de cupos.(Máximo de cupos por día 400)</p>', '', '', '                      ', '                          ', '                      ', '', '', '<p><strong>D&iacute;a 1: Cusco &ndash; Abra M&aacute;laga &ndash; Santa Mar&iacute;a</strong></p>\r\n<p>Recojo de su hotel a las 7.00 a 7.30 am partiremos desde nuestra ciudad imperial por la ma&ntilde;ana , hasta puerto M&aacute;laga(4316 m.s.n.m) donde empez&aacute;remos&nbsp; el descenso en bicicleta ,&nbsp;&nbsp; hasta Santa Mar&iacute;a en este recorrido veremos centros arqueol&oacute;gicos como Huamanmarca e Inka Carcel y panoramas cambiantes. El recorrido es de 5 horas en bicicleta podremos apreciar aves propias de la selva, plantas medicinales y las frutas ex&oacute;ticas como mango, pi&ntilde;a, papaya, palta, caf&eacute;, coca, los cuales podr&aacute; comerlos y disfrutar su delicioso sabor, y tambi&eacute;n apreciara plantaciones de coca , caf&eacute; .</p>\r\n<p>En el descenso&nbsp; por el valle contaremos con el apoyo de nuestro gu&iacute;a y trasporte de emergencia que nos acompa&ntilde;ara hasta santa Mar&iacute;a donde pernoctaremos.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>D&iacute;a 2: Santa Mar&iacute;a &ndash; Ba&ntilde;os Termales &ndash; Santa Teresa</strong></p>\r\n<p>Nos levantaremos a las 7.00am .despu&eacute;s de desayunar, comenzaremos a caminar por las orillas del ri&oacute; durante el &nbsp;camino &nbsp;podremos presenciar variedades de plantas frutales, animales&nbsp; de la regi&oacute;n como loros, colibr&iacute;, gatos monteses tambi&eacute;n podremos apreciar la agricultura y &nbsp;ver plantas medicinales de la zona con diferentes funciones que los lugare&ntilde;os utilizan para curar sus enfermedades. Luego llegaremos al pueblo de QUELLOMAYO donde descaremos y almorzaremos. Despu&eacute;s &nbsp;caminaremos aproximadamente 1 hora&nbsp; y de all&iacute; tomaremos un transporte a Santa Teresa llegaremos aproximadamente a las 4.00 pm (desayuno almuerzo, cena, pernocte).</p>\r\n<p><strong>D&iacute;a 3: Santa Teresa &ndash; Hidroel&eacute;ctrica &ndash; Aguas Calientes</strong></p>\r\n<p>Desayuno por la ma&ntilde;ana y luego caminaremos hacia el r&iacute;o luego cruzaremos por la oroya para dirigirnos hacia la catarata de Colpani si usted desea puede ba&ntilde;arse en la cascada que est&aacute; rodeada de &aacute;rboles frutales como: pl&aacute;tano, mango, naranja, cacao, coca, caf&eacute; y otros. Despu&eacute;s el camino es todo plano por 5 horas m&aacute;s, en el camino se ve las monta&ntilde;as de San Miguel, Putucusi, y la visita a las cataratas de Mandor, este d&iacute;a se aprecia la silueta de las impresionantes ruinas de Machu Picchu almuerzo en hidroel&eacute;ctrica y despu&eacute;s del almuerzo continuaremos al pueblo de Machu Picchu (Aguas Calientes). Cena y hospedaje.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>D&iacute;a 4: Aguas Calientes &ndash; Machu Picchu &ndash; Cusco</strong></p>\r\n<p>Por la ma&ntilde;ana nos despertaremos a las 5.00am&nbsp; y aproximadamente a las 5.30 am nos dirigiremos&nbsp; al centro arqueol&oacute;gico m&aacute;s importante&nbsp; Machupicchu&nbsp; tomaremos el primer bus despu&eacute;s de aproximadamente 25.00 minutos&nbsp; llegaremos al punto de control e ingreso a Machupicchu una vez dentro iniciara el guiado de aproximadamente 2.00 horas , luego se le dar&aacute; un tiempo libre para poder visitar los lugares de su mayor inter&eacute;s&nbsp; luego bajaremos a aguas calientes&nbsp; donde el gu&iacute;a nos dar&aacute; un breve explicaci&oacute;n para no tener problemas al momento de retornar a Ollantaytambo en la estaci&oacute;n de Ollantaytambo nos estar&aacute; esperando nuestro trasporte para traernos de retorno a la cuidad del cusco llegando aproximadamente a las 11.00pm</p>'),
(17, 19, 0, 'des', '3700.00', '1200.00', 'incluye', 'n incluye', '', '', '', '', '', '', '', ''),
(18, 20, 0, ' A su llegada,  estaremos esperando por ustedes en el a aeropuerto de Cusco o en el terminal terrestre, los trasportará hacia el hotel seleccionado. Se recomienda llegar a Cusco en horas de la mañana para poder iniciar la secuencia de tours, si Ud. llega por la tarde recomendamos iniciar la secuencia de tour al siguiente día (Se\r\nrequiere noche adicional) 1:00 pm – Concentración en la plaza de Armas de Cusco y/o recojo desde el hotel para iniciar el City Tour, este tour incluye trasporte a todas las ruinas, tickets de ingresos y guiado profesional, no se incluye almuerzo, se visitarán los siguientes sitios:\r\n', '1500.00', '470.00', '                      siii    incluye', '                 noooo         no incluye', '', '', '                     iti simple', '                     lleava     ', '                      notas', '', '', 'itinerario completo'),
(19, 21, 0, 'descrocin', '900.00', '290.00', 'in', 'no incl', '', '', '', '', '', '', '', ''),
(20, 22, 0, 'descip', '800.00', '200.00', 'incluye', 'no incluye', '', '', '', '', '', '', '', ''),
(21, 23, 0, 'ingles', '400.00', '200.00', 'in', 'no incluye', '', '', '', '', '', '', '', ''),
(22, 24, 0, 'espnol', '400.00', '200.00', 'in', 'no in', '', '', '', '', '', '', '', ''),
(23, 25, 0, 'ingles 4*3', '390.00', '190.00', 'i', 'no inlcuy', '', '', '', '', '', '', '', ''),
(24, 26, 0, 'desc espanol', '400.00', '200.00', 'incly', 'no inluye', '', '', '', '', '', '', '', ''),
(25, 27, 0, 'desc 3*2', '500.00', '170.00', 'inc', 'no inluye', '', '', '', '', '', '', '', ''),
(26, 28, 0, 'desc espanol 3*2', '420.00', '180.00', 'incluye', 'n ocliye', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `temporal`
--

CREATE TABLE `temporal` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `duracion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `etiquetas` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `actualizacion` datetime NOT NULL,
  `enlace` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ramdon` text COLLATE utf8_spanish_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tid` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `duracion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `etiquetas` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `actualizacion` datetime NOT NULL,
  `enlace` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ramdon` text COLLATE utf8_spanish_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tid`, `titulo`, `duracion`, `estado`, `ruta`, `etiquetas`, `fecha`, `actualizacion`, `enlace`, `ramdon`, `lang`, `orden`) VALUES
(2, 'Machupichu', ' Full Day', 'editando', '../../views/images/pictures/citytour_570_320_1.jpg', '                                                                                                                                                                                                                                                  ETIQE', '2018-02-07 16:40:59', '2018-02-15 08:56:14', 'machupichu-full-day-es', '0', 'es', 102),
(3, 'Machupichu', 'Full day', 'editando', '', '                                            El Mirador del Condor en Cusco', '2018-02-07 16:45:46', '2018-02-15 09:29:56', 'machupicchu-full-day-en', '0', 'en', 111),
(5, 'City Tour Cusco', '6 Horas Aproximadamente', 'publicado', '', 'sds', '2018-02-07 17:04:01', '2018-02-08 17:00:34', 'city-tour-es', '', 'es', 104),
(6, 'City Tour Cusco', '6 Hours Approximately', 'publicado', '', 'city tour cusco', '2018-02-07 17:23:25', '2018-02-10 06:10:42', 'city-tour-en', '', 'en', 105),
(7, 'Montana 7 colores', 'Full Day', 'editando', '', '                                              ', '2018-02-07 17:26:21', '2018-03-12 11:21:11', 'rainbown-mountain-es', '', 'es', 118),
(8, 'Rainbown Mountain', 'Full Day', 'editando', '', '', '2018-02-07 17:29:24', '2018-02-07 17:29:24', 'rainbown-mountain-en', '', 'en', 107),
(9, 'Valle Sagrado', 'Full Day', 'editando', '', '                                                                                        Inka Jungle', '2018-02-08 13:57:09', '2018-03-12 11:11:16', 'sacred-valley-es', '', 'es', 116),
(10, 'Sacred Valley', 'Full Day', 'editando', '', 'Vuelo del condor', '2018-02-08 14:21:16', '2018-02-08 14:21:16', 'sacred-valley-en', '', 'en', 108),
(11, 'Maras, Moray y Salineras', 'Medio dias creo', 'publicado', '', '                      Maras Moray Salineras', '2018-02-10 05:11:26', '2018-02-15 08:42:09', 'maras-moray-es', '', 'es', 109),
(12, 'Maras, Moray and Salt Mines', 'Half Day', 'publicado', '', '', '2018-02-11 12:08:32', '2018-02-12 13:14:48', 'maras-moray-en', '6491518368912', 'en', 110),
(13, 'Machupicchu By Car', '2 Days 1 Night', 'editando', '', 'Machupicchu By Car, Machupicchu By Bus', '2018-02-21 12:56:29', '2018-02-21 12:56:29', 'machupicchu-by-car-en', '7151519235789', 'en', 0),
(14, 'Machu Picchu By Car', '2 días 1 Noche', 'editando', '', '                                            Machupicchu By Car, Machupicchu By Bus', '2018-02-21 13:13:07', '2018-03-12 11:26:45', 'machupicchu-by-car-es', '9101519236787', 'es', 119),
(15, 'Inka Trail', '2 Days 1 Night', 'editando', '', 'Inka Trail 2 Days 1 Night', '2018-02-21 13:25:10', '2018-02-21 13:25:10', 'inka-trail-2days-1night-en', '7741519237510', 'en', 0),
(16, 'Camino Inka', '2 días 1 Noche', 'editando', '', 'Camino Inca, Camino Inka', '2018-02-21 13:47:08', '2018-02-21 13:47:08', 'inka-trail-2days-1night-es', '1871519238828', 'es', 0),
(17, 'Inka Jungle Trek', '4 Days 3 Nights', 'editando', '', 'Inka Jungle Trek', '2018-02-21 13:50:16', '2018-02-21 13:50:16', 'jungle-trek-4days-3nights-en', '6591519239016', 'en', 0),
(18, 'Inka Jungle Trek', '4 días 3 Noches', 'editando', '', '                      Inka Jungle Trek', '2018-02-21 14:11:34', '2018-03-12 11:42:15', 'jungle-trek-4days-3nights-es', '5551519240294', 'es', 120),
(19, 'Cusco', '7 Days 6 Nights', 'editando', '', 'Cusco 7 Days 6 Nights', '2018-02-21 16:19:41', '2018-02-21 16:19:41', 'cusco-package-7days-6nights-en', '7851519247981', 'en', 0),
(20, 'Cusco', '7 Días 6 Noches', 'publicado', '', 'etiqueta Cusco 7 dias 6 Noches', '2018-02-21 16:21:48', '2018-03-11 11:14:06', 'cusco-package-7days-6nights-es', '8501519248108', 'es', 114),
(21, 'Cusco', '6 Days 5 Nights', 'editando', '', 'Cusco 6 Days 5 Nights', '2018-02-21 16:50:23', '2018-02-21 16:50:23', 'cusco-package-6days-5nights-en', '8801519249823', 'en', 0),
(22, 'Cusco', '6 días 5 Noches', 'editando', '', 'Cusco 6 dias 5 Noches', '2018-02-22 10:24:07', '2018-02-22 10:24:07', 'cusco-package-6days-5nights-es', '4841519313047', 'es', 0),
(23, 'Cusco', '5 Days 4 Nights', 'editando', '', 'Cusco 5 Days 4 Nights', '2018-02-22 10:27:46', '2018-02-22 10:27:46', 'cusco-package-5days-4nights-en', '8041519313266', 'en', 0),
(24, 'Cusco', '5 días 4 Noches', 'editando', '', 'Cusco 5 días 4 Noches', '2018-02-22 10:28:54', '2018-02-22 10:28:54', 'cusco-package-5days-4nights-es', '5811519313334', 'es', 0),
(25, 'Cusco', '4 Days 3 Nights', 'editando', '', 'Cusco 4 Days 3 Nights', '2018-02-22 10:41:26', '2018-02-22 10:41:26', 'cusco-package-4days-3nights-en', '1091519314086', 'en', 0),
(26, 'Cusco', '4 días 3 Noches', 'editando', '', 'Cusco 4 días 3 Noches', '2018-02-22 10:42:43', '2018-02-22 10:42:43', '4 Days 3 Nights-es', '9451519314163', 'es', 0),
(27, 'Cusco', '3 Days 2 Nights', 'editando', '', 'Cusco 3 Days 2 Nights', '2018-02-22 11:14:26', '2018-02-22 11:14:26', 'cusco-package-3days-2nights-en', '9891519316066', 'en', 0),
(28, 'Cusco', '3 días 2 Noches', 'editando', '', 'Cusco 3 días 2 Noches', '2018-02-22 11:16:22', '2018-02-22 11:16:22', 'cusco-package-3days-2nights-es', '6721519316182', 'es', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `photo` text COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `email`, `photo`, `rol`, `intentos`) VALUES
(1, 'Artemis Fowl ', 'xyz', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'manu@ya.com', 'views/images/perfiles/perfil1860.jpg', 0, 0),
(2, 'usuario', 'usuario2', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'user2@ya.com', 'views/images/perfiles/perfil6847.jpg', 1, 0),
(3, 'Margoth', 'maju1989', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'margoth@ya.com', 'views/images/perfiles/perfil479.jpg', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsi_language`
--
ALTER TABLE `bsi_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbtablas`
--
ALTER TABLE `dbtablas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portada`
--
ALTER TABLE `portada`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sleep_galeria`
--
ALTER TABLE `sleep_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdetalles`
--
ALTER TABLE `tdetalles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsi_language`
--
ALTER TABLE `bsi_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dbtablas`
--
ALTER TABLE `dbtablas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `portada`
--
ALTER TABLE `portada`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sleep_galeria`
--
ALTER TABLE `sleep_galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tdetalles`
--
ALTER TABLE `tdetalles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
