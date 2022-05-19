-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2022 a las 02:22:03
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `choquetmole`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Num_Documento` varchar(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Tipo_Cliente` varchar(20) NOT NULL,
  `Estado_Cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Num_Documento`, `Nombre`, `Apellido`, `Correo`, `Direccion`, `Telefono`, `Tipo_Cliente`, `Estado_Cliente`) VALUES
(31, '43269587', 'Luz Neida', 'Duque', 'luz@hotmail.com', 'Calle 78A #85-96', '5077589', 'De tal', 'Activo'),
(34, '456789', 'DIana', 'DIaz', 'diana@gmail.com', '45', '7894561', 'Mayorista', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_clientes`
--

CREATE TABLE `comentarios_clientes` (
  `Id` int(20) NOT NULL,
  `Nombre_Cliente` varchar(20) NOT NULL,
  `Apellido_Cliente` varchar(20) NOT NULL,
  `Documento_Cliente` varchar(20) NOT NULL,
  `Correo_Cliente` varchar(50) NOT NULL,
  `Direccion_Cliente` varchar(50) NOT NULL,
  `Telefono_Cliente` varchar(10) NOT NULL,
  `Comentario_Cliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_clientes`
--

INSERT INTO `comentarios_clientes` (`Id`, `Nombre_Cliente`, `Apellido_Cliente`, `Documento_Cliente`, `Correo_Cliente`, `Direccion_Cliente`, `Telefono_Cliente`, `Comentario_Cliente`) VALUES
(14, 'Luz Neida', 'Duque', '43269587', 'luz@hotmail.com', 'Calle 78A #85-96', '5077589', 'Hola Mundos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(20) NOT NULL,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Apellido_Usuario` varchar(30) NOT NULL,
  `Documento_Usuario` varchar(15) NOT NULL,
  `Correo_Usuario` varchar(50) NOT NULL,
  `Direccion_Usuario` varchar(50) NOT NULL,
  `Telefono_Usuario` varchar(15) NOT NULL,
  `User` varchar(15) NOT NULL,
  `Password_User` varchar(20) NOT NULL,
  `RolUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Nombre_Usuario`, `Apellido_Usuario`, `Documento_Usuario`, `Correo_Usuario`, `Direccion_Usuario`, `Telefono_Usuario`, `User`, `Password_User`, `RolUser`) VALUES
(12, 'nataly', 'martinez', '123456789', 'nataly@gmail.com', 'Cll 10', '777777777', 'naty', '123', 'Vendedor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `comentarios_clientes`
--
ALTER TABLE `comentarios_clientes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `comentarios_clientes`
--
ALTER TABLE `comentarios_clientes`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
