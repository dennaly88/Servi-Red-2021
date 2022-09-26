-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2022 a las 10:11:35
-- Versión del servidor: 8.0.30-0ubuntu0.22.04.1
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servi-red-viejo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` bigint UNSIGNED NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `ser` varchar(100) NOT NULL,
  `bien` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `marca`, `modelo`, `ser`, `bien`, `nombre`) VALUES
(70, 'TP-LINK', 'EAP225', '220C4N5003530', '10180', 'Wifi'),
(71, 'TP-LINK', 'EAP225', '220C4N5003584', '10181', 'Wifi'),
(72, 'TP-LINK', 'EAP225', '220C4N5003545', '10182', 'Wifi'),
(73, 'TP-LINK', 'EAP225', '220C4N5003590', '10183', 'Wifi'),
(74, 'TP-LINK', 'EAP225', '220C4N5003587', '10184', 'Wifi'),
(75, 'TP-LINK', 'EAP225', '220C4N5003588', '10185', 'Wifi'),
(76, 'TP-LINK', 'EAP225', '220C4N5003586', '10186', 'Wifi'),
(77, 'TP-LINK', 'EAP225', '220C4N5003525', '10187', 'Wifi'),
(78, 'TP-LINK', 'EAP225', '220C4N5003529', '10188', 'Wifi'),
(79, 'TP-LINK', 'EAP225', '220C4N5003521', '10189', 'Wifi'),
(80, 'TP-LINK', 'EAP225', '220C4N5003522', '10190', 'Wifi'),
(81, 'TP-LINK', 'EAP225', '220C4N5003524', '10191', 'Wifi'),
(82, 'TP-LINK', 'EAP225', '220C4N5003526', '10192', 'Wifi'),
(83, 'TP-LINK', 'EAP225', '220C4N5003582', '10193', 'Wifi'),
(84, 'TP-LINK', 'EAP225', '220C4N5003523', '10194', 'Wifi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'CISCO'),
(2, 'TRENDNET'),
(3, 'PLANET'),
(4, '3COM'),
(5, 'DLINK'),
(6, 'CNET'),
(7, 'AVANTEK'),
(8, 'NEXXT'),
(9, 'SMC'),
(10, 'LOGIC '),
(11, 'HP'),
(12, 'INTEL'),
(13, 'DELL'),
(14, 'VIT'),
(15, 'SIRAGON'),
(16, 'NUC'),
(17, 'Cisco'),
(18, 'ORACLE'),
(19, 'VSN'),
(20, 'SONY'),
(21, 'TP-LINK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `unidad` varchar(150) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `unidad`, `cantidad`) VALUES
(35, 'Patch Panel', 'Unidad', 20),
(36, 'Pacth Cord', 'Unidad', 40),
(37, 'Conectores', 'Unidad', 60),
(38, 'Bobina de Cable', 'Bobina', 90),
(39, 'Pacth Cord', 'Unidad', 100),
(40, 'Pacth Cord', 'Unidad', 150),
(41, 'Tapas', 'Unidad', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `switches`
--

CREATE TABLE `switches` (
  `id` bigint UNSIGNED NOT NULL,
  `ip` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `switches`
--

INSERT INTO `switches` (`id`, `ip`, `usuario`, `clave`, `ubicacion`) VALUES
(12, '192.168.4.2', 'admin', 'admin', 'Ubicacion'),
(13, '192.168.4.3', 'admin', 'admin', 'Piso 1'),
(14, '192.168.4.4', 'admin', 'admin', 'Piso 2'),
(15, '192.168.4.5', 'admin', 'admin', 'Piso 3'),
(16, '192.168.4.6', 'admin', 'admin', 'Piso 4'),
(17, '192.168.80.10', 'vtv', 'vtv', 'Ubicacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_equipo`
--

CREATE TABLE `tipos_equipo` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipos_equipo`
--

INSERT INTO `tipos_equipo` (`id`, `nombre`) VALUES
(1, 'Router'),
(2, 'Switch'),
(3, 'Firewall '),
(4, 'Bahía'),
(5, 'Procesador '),
(6, 'Disipador '),
(7, 'Memoria Ram'),
(8, 'Cpu'),
(9, 'Monitor'),
(10, 'Servidor'),
(11, 'Ups'),
(12, 'Teclados'),
(13, 'Mouse'),
(14, 'Regulador'),
(15, 'Regleta'),
(16, 'Disco Duros'),
(17, 'Tv'),
(18, 'Wifi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_materiales`
--

CREATE TABLE `tipo_materiales` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_materiales`
--

INSERT INTO `tipo_materiales` (`id`, `nombre`) VALUES
(1, 'Patch Panel '),
(2, 'Pacth Cord '),
(3, 'Bobina de Cable '),
(4, 'Cable Stack'),
(5, 'Cable KVM '),
(6, 'Cable Telefónico '),
(7, 'Organizadores '),
(8, 'Jack '),
(9, 'Conectores'),
(10, 'Canaletas'),
(11, 'Cajetines '),
(12, 'Tapas '),
(13, 'Ramplug'),
(14, 'Tuercas'),
(16, 'Uniones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_perfil`
--

CREATE TABLE `tipo_perfil` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_perfil`
--

INSERT INTO `tipo_perfil` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(3, 'Basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_unidad`
--

CREATE TABLE `tipo_unidad` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tipo_unidad`
--

INSERT INTO `tipo_unidad` (`id`, `nombre`) VALUES
(1, 'Metros'),
(2, 'Bobina'),
(3, 'Kilogramos'),
(4, 'Unidad'),
(5, 'Cajas'),
(6, 'Rollos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `nombre`) VALUES
(1, 'Sotano 2'),
(2, 'Sotano 1'),
(3, 'Planta Baja'),
(4, 'Piso 1'),
(5, 'Piso 2'),
(6, 'Piso 3'),
(7, 'Piso 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `cedula` varchar(150) NOT NULL,
  `perfil` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `nombres`, `apellidos`, `cedula`, `perfil`) VALUES
(8, 'danny', '8', 'danny jose', 'jimenez gutierrez', '16029567', 'Administrador'),
(163, 'jcontreras', '1', 'Julio', 'Contreras', '17423167', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wifi`
--

CREATE TABLE `wifi` (
  `id` bigint UNSIGNED NOT NULL,
  `ip` varchar(150) NOT NULL,
  `clave_administrador` varchar(150) NOT NULL,
  `SSID` varchar(150) NOT NULL,
  `Clave` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `wifi`
--

INSERT INTO `wifi` (`id`, `ip`, `clave_administrador`, `SSID`, `Clave`, `ubicacion`) VALUES
(49, '192.168.51.10', 'admin', 'WIFI-S2', '1234', 'Sotano 2'),
(50, '192.168.6.23', 'admin', 'WIFI-PB', '1234', 'Planta Baja'),
(51, '192.168.52.19:8043/login', 'admin', 'WIFI-P1', '1234', 'Piso 1'),
(52, '192.168.51.10', 'admin', 'WIFI-P2', '1234', 'Piso 2'),
(53, '192.168.6.3', 'admin', 'WIFI-P3', '1234', 'Piso 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `switches`
--
ALTER TABLE `switches`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tipos_equipo`
--
ALTER TABLE `tipos_equipo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tipo_materiales`
--
ALTER TABLE `tipo_materiales`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tipo_unidad`
--
ALTER TABLE `tipo_unidad`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `wifi`
--
ALTER TABLE `wifi`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `switches`
--
ALTER TABLE `switches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipos_equipo`
--
ALTER TABLE `tipos_equipo`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipo_materiales`
--
ALTER TABLE `tipo_materiales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_unidad`
--
ALTER TABLE `tipo_unidad`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `wifi`
--
ALTER TABLE `wifi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
