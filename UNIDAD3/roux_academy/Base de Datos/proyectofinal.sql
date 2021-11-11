-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 07:05:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`usuario`, `contrasena`) VALUES
('admin', '347208d1660dfc5b0f1d5bda049e9263'),
('alma', '89d9be228a980a8bdd87de7399ecab89');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Barot Bellingham', 'Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils.', 'images/artists/Barot_Bellingham_tn.jpg'),
(2, 'Constance Smith', 'Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness.', 'images/artists/Constance_Smith_tn.jpg'),
(3, 'Hassum Harrod', 'The Art College in New Dehli has sponsored Hassum for his entire undergraduate career at the university, seeing great promise in his contemporary paintings of landscapes - that use equal parts muted and vibrant tones. Hassum will be speaking on “The use and absence of color in modern art”.', 'images/artists/Hassum_Harrod_tn.jpg'),
(4, 'Hillary Goldwynn', 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor’s Medal, and the Academy of Paris Award. Hillary’s CAC exhibit features paintings that contain only water images including waves, deep sea, and river.', 'images/artists/Hillary_Goldwynn_tn.jpg'),
(5, 'Jennifer Jerome', 'A native of New Orleans, much of Jennifer’s work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years. Despite the sadness of devastation and lives lost.', 'images/artists/Jennifer_Jerome_tn.jpg'),
(6, 'Jonathan Ferrar', 'Labeled as “The Artist to Watch in 2016” by the London Review, Johnathan has already sold one of the highest priced commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000.', 'images/artists/Jonathan_Ferrar_tn.jpg'),
(7, 'LaVonne LaRue', 'LaVonne’s giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart. LaVonne will share her love and skill of graffiti art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo in front of a standing-room only audience in Art in Unexpected Places.', 'images/artists/LaVonne_LaRue_tn.jpg'),
(8, 'Riley Rewington', 'A first-year student at the Roux Academy of Art, Media, and Design, Riley is already changing the face of modern art at the university. Riley’s exquisite abstract pieces have no intention of ever being understood, but instead beg the viewer to dream, create, pretend, and envision with their mind’s eye. Riley will be speaking on the “Art of Abstract” during Thursday’s schedule.', 'images/artists/Riley_Rewington_tn.jpg'),
(9, 'Xhou Ta', 'A senior at the China International Art University, Xhou has become well-known for his miniature sculptures, often the size of a rice granule, that are displayed by rear projection of microscope images on canvas. Xhou will discuss the art and science behind his incredibly detailed works of art.', 'images/artists/Xhou_Ta_tn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentesregistro`
--

CREATE TABLE `asistentesregistro` (
  `identificacion` int(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `compañia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `coments` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `asistentesregistro`
--

INSERT INTO `asistentesregistro` (`identificacion`, `nombre`, `compañia`, `email`, `coments`) VALUES
(1, 'Alma Alfaro', 'Universidad Politécnica de Victoria', '1830326@upv.edu.mx', 'Muy bonita la pagina\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistentesregistro`
--
ALTER TABLE `asistentesregistro`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `asistentesregistro`
--
ALTER TABLE `asistentesregistro`
  MODIFY `identificacion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
