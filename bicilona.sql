-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2023 a las 14:26:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bicilona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(20) NOT NULL,
  `id_autor` int(10) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `contenido` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `id_autor`, `tema`, `contenido`) VALUES
(1, 1, 'Rutas por Barcelona', 'Buenas, chicos, me gustaría saber si alguno de vosotros sabe de alguna posible excursión agradable por Collserola o Cornellà que no tenga mucha dificultad. Gracias'),
(2, 2, 'Tienda de fixies', 'Hola, hace tiempo que busco una bici de piñón fijo pero no encuentro nada asequible y de buena calidad. ¿Me podríais recomendar alguna tienda? No me importa desplazarme aunque sea fuera de mi ciudad.'),
(3, 3, '¿Cómo reparar un pinchazo?', 'Se me acaba de pinchar la rueda delante, ¿sabe alguien cómo repararla sin gastarse mucho dinero?¿Algún video de youtube recomendable?'),
(40, 66, 'Ayuda para novatos', '¿Alguien sabe de algún usuario que venda pedales a buen precio?'),
(41, 66, 'Buenas formas', 'Querría comentar que este foro me ha ayudado mucho, ¡muchas gracias a todos!'),
(50, 5, 'Quedada en Barcelona', 'Me gustaría crear un grupo para participar en carreras este verano.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(20) NOT NULL,
  `id_vendedor` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `id_vendedor`, `nombre`, `precio`, `descripcion`) VALUES
(1, 2, 'Sillín para bici casi nuevo', 10, 'Es de piel sintética, muy blando y cómodo, perfecto para usarlo en bici. Estoy interesado tanto en venderlo como en intercambiarlo por otro objeto, ¿qué me ofrecéis?'),
(2, 1, 'Bicicleta plegable', 50, 'Bici plegable de aluminio para adultos, muy robusta y fácil de plegar'),
(11, 66, 'Funda bici', 10, 'Funda de plástico para proteger la bici de la lluvia o de la nieve. Escribir a merinovila@gmail.com'),
(82, 66, 'Zapatillas de ciclismo', 12, 'Son muy blanditas y ergonómicas, nada caras, enviar mensaje privado a ljosefa@gmail.com'),
(90, 5, 'Mallas de ciclismo', 20, 'Nuevas, talla M de chico, trato en mano en Barcelona. Telf 675748493');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usr` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usr`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, 'Marcos', 'Alonso', 'marcosalonso@gmail.com', 'marcosalonso'),
(2, 'Marta', 'Mateu', 'marta.mcubells@gmail.com', 'cosasvarias84'),
(3, 'Pedro', 'Salinas Robles', 'salinasrobles@gmail.com', 'salinasRob'),
(5, 'Carlos', 'Fuentes Cordero', 'carlosfuentes@gmail.com', 'fuentescordero'),
(66, 'Laura', 'Merino Vila', 'merinovila@gmail.com', '15deenero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_usr` (`id_autor`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_usr` (`id_vendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
