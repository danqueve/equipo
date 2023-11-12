-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 12:21:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ourjxora_dirigentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_registro`
--

CREATE TABLE `datos_registro` (
  `id` int(11) NOT NULL,
  `apellido_dir` varchar(50) NOT NULL,
  `nombre_dir` varchar(50) NOT NULL,
  `cto_dir` varchar(50) NOT NULL,
  `dni` int(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mesa` varchar(10) NOT NULL,
  `escuela` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_registro`
--

INSERT INTO `datos_registro` (`id`, `apellido_dir`, `nombre_dir`, `cto_dir`, `dni`, `apellido`, `nombre`, `mesa`, `escuela`) VALUES
(1, 'ASILI', 'MAURO', '21', 33974572, 'ZUBELSA', 'JUAN CARLOS', '142', 'JOSE LUIS'),
(2, 'ASILI', 'MAURO', '21', 33669988, 'ZOTTOLI ASAT', 'VIRGINIA CAMILA', '143', 'HERMA CIRILA'),
(3, 'ASILI', 'MAURO', '21', 33669922, 'ZOTTOLI', 'WALTER CAYETANO', '144', 'BLANCA ALICIA'),
(4, 'ASILI', 'MAURO', '21', 33669955, 'ZOTTOLI', 'FELIPE NORBERTO', '145', 'CELIA ESTELA'),
(5, 'ASILI', 'MAURO', '21', 33669944, 'ZOTTOLI', 'IGNACIO JEREMIAS', '146', 'LAURA CRISTOBALINA'),
(6, 'ASILI', 'MAURO', '21', 33669977, 'ZOTTOLA', 'LUIS ALBERTO', '147', 'ELOISA JULIANA'),
(7, 'ASILI', 'MAURO', '21', 33669911, 'ZOTTOLA', 'JOSE NICOLAS', '148', 'MARIA AGUSTINA'),
(8, 'ASILI', 'MAURO', '21', 33669900, 'ZOTTOLA', 'CARLOS EZEQUIEL', '149', 'MARIA JOSEFINA'),
(9, 'ASILI', 'MAURO', '21', 22558866, 'ZORRILLA', 'LUIS ALBERTO', '150', 'OLGA DALINDA'),
(10, 'ASILI', 'MAURO', '21', 11223344, 'ZOLORZANO', 'DOLORES DEL VALLE', '151', 'EDUARDO'),
(11, 'ASILI', 'MAURO', '21', 2147483647, 'ZOLORZANO', 'FRANCISCO NESTOR', '152', 'IRMA NELIDA'),
(12, 'ASILI', 'MAURO', '21', 1122445577, 'ZOLORZANO', 'DOMINGO HECTOR', '153', 'SONIA BEATRIZ'),
(13, 'ASILI', 'MAURO', '21', 11225566, 'ZOLORZANO', 'JULIO OSCAR', '154', 'STELLA MARIS'),
(14, 'ASILI', 'MAURO', '21', 66559988, 'ZOLORZANO', 'MARIO ROBERTO', '155', 'ADRIANA EVELIN'),
(15, 'ASILI', 'MAURO', '21', 33665544, 'ZOLORZANO', 'ANA SOFIA', '156', 'CAMILO ROGELIO'),
(16, 'ASILI', 'MAURO', '21', 12564957, 'ZOLORZANO', 'PABLO AGUSTIN', '157', 'JOSE ANTONIO'),
(17, 'ASILI', 'MAURO', '21', 66552233, 'ZOLORZANO', 'GONZALO EMANUEL', '158', 'ALEJANDRO JOSE LUIS'),
(18, 'ASILI', 'MAURO', '21', 66554433, 'ZIVILLICA', 'FRANCISCA LILIANA', '159', 'KAREN GISELE'),
(19, 'ASILI', 'MAURO', '21', 55664499, 'ZITELLI SEGURA', 'GONZALO EMANUEL', '160', 'LIDIA DOLORES'),
(20, 'ASILI', 'MAURO', '21', 11669944, 'ZITELLI SEGURA', 'MARIANO NAHUEL', '161', 'MARIA EUGENIA'),
(21, 'Assan', 'Sara', '9', 29060028, 'ZITELLI', 'HECTOR EDUARDO', '162', 'LILIANA EUGENIA'),
(22, 'Assan', 'Sara', '9', 31323477, 'ZILMAN', 'DANTE HORACIO', '163', 'ORLANDO CARLOS'),
(23, 'Castro Auteri', 'Andres Ignacio', '9', 21328013, 'ZHANG', 'NAZARENO RODRIGO', '164', 'FABIAN ANTONIO'),
(24, 'Castro Auteri', 'Andres Ignacio', '9', 42008920, 'ZERPA', 'MYRIAM BEATRIZ', '165', 'MARIA DE LOS ANGELES'),
(25, 'Castro Auteri', 'Andres Ignacio', '9', 12345677, 'ZERPA', 'JAVIER ARMANDO', '166', 'RICARDO MANUEL'),
(26, 'Castro Auteri', 'Andres Ignacio', '9', 12345678, 'ZERMOGLIO', 'MARIO FLORINDO', '167', 'HECTOR RAMON'),
(27, 'Castro Auteri', 'Andres Ignacio', '9', 12345679, 'ZERDA', 'LUIS ALBERTO', '168', 'MATIAS EXEQUIEL'),
(28, 'Castro Auteri', 'Andres Ignacio', '9', 12345676, 'ZENAVILLA', 'RAMONA ARMINDA', '169', 'LUCAS SANTIAGO'),
(29, 'Dorigatti', 'Florencia', '21', 37510189, 'ZELIS', 'CARLOS ALBERTO', '170', 'JUAN ENRIQUE'),
(30, 'Dorigatti', 'Florencia', '21', 50161191, 'ZELIS', 'TIARA EMILCE', '171', 'AMADO'),
(31, 'Dorigatti', 'Florencia', '21', 21631456, 'ZELAYA', 'JUAN RENE', '172', 'CAROLINA DEL VALLE'),
(32, 'Dorigatti', 'Florencia', '21', 2225964, 'ZELAYA', 'ANA MARIA', '173', 'ISA SAHIR'),
(33, 'Quevedo', 'Alejandro', '10a', 99999999, 'ZELAYA', 'CLARA ISOLINA', '174', 'CAROLINA DEL VALLE'),
(34, 'Quiroga', 'Juan Pablo Quiroga', '20', 33689123, 'ZELAYA', 'RAMON ANTONIO', '175', 'ISA SAHIR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dni_registrados`
--

CREATE TABLE `dni_registrados` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dni_registrados`
--

INSERT INTO `dni_registrados` (`id`, `usuario_id`, `dni`) VALUES
(36, 1, 99999999),
(37, 4, 21328013),
(38, 6, 29060028),
(39, 4, 42008920),
(40, 6, 31323477),
(41, 4, 12345677),
(42, 4, 12345678),
(43, 4, 12345679),
(44, 4, 12345676),
(45, 8, 33974572),
(46, 8, 33669988),
(47, 8, 33669922),
(48, 8, 33669955),
(49, 8, 33669944),
(50, 8, 33669977),
(51, 8, 33669911),
(52, 8, 33669900),
(53, 8, 22558866),
(54, 8, 11223344),
(55, 8, 2147483647),
(56, 8, 1122445577),
(57, 8, 11225566),
(58, 8, 66559988),
(59, 8, 33665544),
(60, 8, 12564957),
(61, 8, 66552233),
(62, 8, 66554433),
(63, 8, 55664499),
(64, 8, 11669944),
(65, 9, 33689123),
(66, 11, 37510189),
(67, 11, 50161191),
(68, 11, 21631456),
(69, 11, 2225964);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_registrados`
--

CREATE TABLE `pagos_registrados` (
  `id` int(11) NOT NULL,
  `apellido_dir` varchar(255) DEFAULT NULL,
  `nombre_dir` varchar(255) DEFAULT NULL,
  `cto_dir` varchar(255) DEFAULT NULL,
  `dni` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `mesa` int(11) DEFAULT NULL,
  `escuela` varchar(255) DEFAULT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_registro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos_registrados`
--

INSERT INTO `pagos_registrados` (`id`, `apellido_dir`, `nombre_dir`, `cto_dir`, `dni`, `apellido`, `nombre`, `mesa`, `escuela`, `registro`, `usuario_registro`) VALUES
(8, 'ASILI', 'MAURO', '21', '22558866', 'ZORRILLA', 'LUIS ALBERTO', 150, 'OLGA DALINDA', '2023-11-12 06:23:23', 'alejandro'),
(9, 'Castro Auteri', 'Andres Ignacio', '9', '42008920', 'ZERPA', 'MYRIAM BEATRIZ', 165, 'MARIA DE LOS ANGELES', '2023-11-12 06:24:26', 'alejandro'),
(10, 'Assan', 'Sara', '9', '31323477', 'ZILMAN', 'DANTE HORACIO', 163, 'ORLANDO CARLOS', '2023-11-12 06:57:51', 'carlos'),
(11, 'Castro Auteri', 'Andres Ignacio', '9', '12345679', 'ZERDA', 'LUIS ALBERTO', 168, 'MATIAS EXEQUIEL', '2023-11-12 06:58:40', 'circuito10a'),
(12, 'Castro Auteri', 'Andres Ignacio', '9', '12345676', 'ZENAVILLA', 'RAMONA ARMINDA', 169, 'LUCAS SANTIAGO', '2023-11-12 06:58:50', 'circuito10a'),
(13, 'Dorigatti', 'Florencia', '21', '21631456', 'ZELAYA', 'JUAN RENE', 172, 'CAROLINA DEL VALLE', '2023-11-12 06:58:59', 'circuito10a'),
(14, 'Dorigatti', 'Florencia', '21', '2225964', 'ZELAYA', 'ANA MARIA', 173, 'ISA SAHIR', '2023-11-12 06:59:15', 'circuito10a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `circuito` varchar(50) NOT NULL,
  `es_superusuario` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `apellido`, `nombre`, `celular`, `circuito`, `es_superusuario`) VALUES
(1, 31812857, 'Quevedo', 'Alejandro', '3815096109', '10a', 1),
(4, 42008920, 'Castro Auteri ', 'Andres Ignacio', '3816740183', '9', 0),
(5, 38184446, 'Matas', 'JeremÃ­as', '3816394549', '16', 0),
(6, 29060028, 'Assan', 'Sara', '3813003067', '9', 0),
(7, 30442376, 'Pastrana', 'Maximiliano ', '3816424317', '9', 0),
(8, 36225297, 'ASILI', 'MAURO', '385478146p', '21', 0),
(9, 35547817, 'Quiroga', 'Juan Pablo Quiroga ', '3816369589', '20', 0),
(10, 28884304, 'Leal', 'Esteban', '3815606865', '15 B', 0),
(11, 37510189, 'Dorigatti ', 'Florencia ', '3816291700', '21', 0),
(12, 33971266, 'Yane ', 'MatÃ­as Miguel ', '3814887074', '9', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios2`
--

CREATE TABLE `usuarios2` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `username`, `password`) VALUES
(1, 'alejandro', 'Meri'),
(2, 'carlos', 'mareaverde'),
(3, 'circuito10a', 'mareaverde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_registro`
--
ALTER TABLE `datos_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dni_registrados`
--
ALTER TABLE `dni_registrados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `pagos_registrados`
--
ALTER TABLE `pagos_registrados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_registro`
--
ALTER TABLE `datos_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `dni_registrados`
--
ALTER TABLE `dni_registrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `pagos_registrados`
--
ALTER TABLE `pagos_registrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dni_registrados`
--
ALTER TABLE `dni_registrados`
  ADD CONSTRAINT `dni_registrados_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
