-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 17:41:38
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `weird_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contactus`
--

CREATE TABLE `tb_contactus` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_token_usuarios`
--

CREATE TABLE `tb_token_usuarios` (
  `id_token` int(11) NOT NULL,
  `id_usuario` varchar(45) DEFAULT NULL,
  `token` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_token_usuarios`
--

INSERT INTO `tb_token_usuarios` (`id_token`, `id_usuario`, `token`, `estado`, `fecha`) VALUES
(14, '1', 'bfc7512a12e9252e3e4e12fd7413219a', 'Active', '2022-11-10 15:08:00'),
(15, '28', 'c80d003f076c3d2ee8a672f9176343a0', 'Active', '2022-11-10 19:27:00'),
(16, '1', '9fc219a689b3929e642f55a6e37b931d', 'Active', '2022-11-12 22:34:00'),
(17, '1', 'c79f64e01075b95085bb48d643cf39b6', 'Active', '2022-11-12 23:44:00'),
(18, '1', '37c91a1359fc7b2b63b36442d1e75d20', 'Active', '2022-11-12 23:44:00'),
(19, '1', 'a0ec5df9be7972101368336d5ed63728', 'Active', '2022-11-16 02:50:00'),
(20, '1', '40bcda050007041dd082b6b3a2e4aa0c', 'Active', '2022-11-21 16:40:00'),
(21, '1', '5ddd4e45348b79424fb446292eb445bf', 'Active', '2022-11-21 16:41:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nro_cel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `usuario`, `contrasena`, `rol`, `nombre`, `apellido`, `correo`, `nro_cel`) VALUES
(1, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(2, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(21, 'Benititacio', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benitocamelo', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(22, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(23, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(24, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(25, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(26, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(27, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(28, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(29, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(30, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(31, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(32, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(33, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(34, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(35, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(36, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(37, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(38, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(39, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(40, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(41, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(42, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benita', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(44, 'Benititacio', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benitocamelo', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(45, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benito1', 'Camelas', 'Benitocamelas@mozmail.com', ''),
(46, 'Benitito', '6d0da60115ce3917baa5d8c7226e34582fd1cb41', 'user', 'Benito', 'Camelas', 'Benitocamelas@mozmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_contactus`
--
ALTER TABLE `tb_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_token_usuarios`
--
ALTER TABLE `tb_token_usuarios`
  ADD PRIMARY KEY (`id_token`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_contactus`
--
ALTER TABLE `tb_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_token_usuarios`
--
ALTER TABLE `tb_token_usuarios`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
