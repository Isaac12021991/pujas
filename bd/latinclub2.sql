-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 15:41:54
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `latinclub2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletines`
--

CREATE TABLE `boletines` (
  `id_boletin` int(11) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fecha_registro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadores`
--

CREATE TABLE `ganadores` (
  `id_ganador` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `primer_lugar` varchar(50) NOT NULL,
  `pago_primer_lugar` varchar(20) NOT NULL,
  `segundo_lugar` varchar(50) NOT NULL,
  `tercer_lugar` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ganadores`
--

INSERT INTO `ganadores` (`id_ganador`, `id_sala`, `primer_lugar`, `pago_primer_lugar`, `segundo_lugar`, `tercer_lugar`, `fecha`, `estado`) VALUES
(1, 188, '1', '0', '0', '0', '2021-06-15 07:30 pm', 1),
(2, 189, '1', '4', '0', '0', '2021-06-15 07:42 pm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_tabla` int(11) NOT NULL,
  `numero_tabla` varchar(10) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_ejemplar` varchar(200) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `total_recogido` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_tabla`, `numero_tabla`, `id_sala`, `id_usuario`, `nombre_ejemplar`, `cliente`, `precio`, `total_recogido`, `estado`) VALUES
(1860, '1', 186, 66, '1', 'julian', '440', '865', 2),
(1861, '2', 186, 66, '2', 'julian', '140', '', 2),
(1862, '3', 186, 66, '3', 'julian', '60', '', 2),
(1863, '4', 186, 66, '4', 'julian', '45', '', 2),
(1864, '5', 186, 66, '5', 'julian', '45', '', 2),
(1865, '6', 186, 66, '6', 'julian', '45', '', 2),
(1866, '7', 186, 66, '7', 'julian', '45', '', 2),
(1867, '8', 186, 66, '8', 'julian', '45', '', 2),
(1868, '9', 186, 1, '0', 'Casa', '0', '', 2),
(1869, '10', 186, 1, '0', 'Casa', '0', '', 2),
(1870, '11', 186, 1, '0', 'Casa', '0', '', 2),
(1871, '12', 186, 1, '0', 'Casa', '0', '', 2),
(1872, '13', 186, 1, '0', 'Casa', '0', '', 2),
(1873, '14', 186, 1, '0', 'Casa', '0', '', 2),
(1874, '1', 188, 1, '0', 'Casa', '0', '0', 2),
(1875, '2', 188, 1, '0', 'Casa', '0', '', 2),
(1876, '3', 188, 1, '0', 'Casa', '0', '', 2),
(1877, '4', 188, 1, '0', 'Casa', '0', '', 2),
(1878, '5', 188, 1, '0', 'Casa', '0', '', 2),
(1879, '6', 188, 1, '0', 'Casa', '0', '', 2),
(1880, '7', 188, 1, '0', 'Casa', '0', '', 2),
(1881, '8', 188, 1, '0', 'Casa', '0', '', 2),
(1882, '9', 188, 1, '0', 'Casa', '0', '', 2),
(1883, '10', 188, 1, '0', 'Casa', '0', '', 2),
(1884, '11', 188, 1, '0', 'Casa', '0', '', 2),
(1885, '12', 188, 1, '0', 'Casa', '0', '', 2),
(1886, '13', 188, 1, '0', 'Casa', '0', '', 2),
(1887, '14', 188, 1, '0', 'Casa', '0', '', 2),
(1888, '1', 189, 70, 'mayon visnes', 'isaac', '5', '5', 2),
(1889, '2', 189, 1, 'Ejem 2', 'Casa', '0', '', 2),
(1890, '3', 189, 1, '0', 'Casa', '0', '', 2),
(1891, '4', 189, 1, '0', 'Casa', '0', '', 2),
(1892, '5', 189, 1, '0', 'Casa', '0', '', 2),
(1893, '6', 189, 1, '0', 'Casa', '0', '', 2),
(1894, '7', 189, 1, '0', 'Casa', '0', '', 2),
(1895, '8', 189, 1, '0', 'Casa', '0', '', 2),
(1896, '9', 189, 1, '0', 'Casa', '0', '', 2),
(1897, '10', 189, 1, '0', 'Casa', '0', '', 2),
(1898, '11', 189, 1, '0', 'Casa', '0', '', 2),
(1899, '12', 189, 1, '0', 'Casa', '0', '', 2),
(1900, '13', 189, 1, '0', 'Casa', '0', '', 2),
(1901, '14', 189, 1, '0', 'Casa', '0', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_pagos`
--

CREATE TABLE `historial_pagos` (
  `id_pago` int(11) NOT NULL,
  `numero_tabla` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `saldo` varchar(10) NOT NULL,
  `estado` varchar(20) NOT NULL COMMENT '1(pagado) 2(devuelto)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tiempo`
--

CREATE TABLE `historial_tiempo` (
  `id_tiempo` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_tabla` int(11) NOT NULL,
  `tiempo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_principal`
--

CREATE TABLE `pagina_principal` (
  `id_principal` int(11) NOT NULL,
  `reglamentos` text NOT NULL,
  `condiciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina_principal`
--

INSERT INTO `pagina_principal` (`id_principal`, `reglamentos`, `condiciones`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, minima! Eligendi minima illum itaque harum aliquam vel, sunt magni dolorem! Cum quaerat est cupiditate saepe quidem, fugiat in at magni ad provident distinctio eum tempore laboriosam adipisci, tempora cumque ex quis unde voluptatem consequuntur. \n\nExcepturi quibusdam accusamus deleniti officiis ullam repellendus magni unde? Saepe quibusdam vel, ipsum numquam ratione tempore. Dolor optio aliquid in velit eaque, sed delectus reprehenderit quam quidem a eum id nostrum ullam obcaecati error deleniti modi quasi harum possimus voluptatum repellat saepe! Omnis dolor maiores eaque deserunt exercitationem incidunt autem et voluptatibus molestias quod explicabo ipsam nam vitae a architecto, consectetur quas facilis sed nulla, placeat eum ex, ducimus in. \n\nHic quo necessitatibus autem tempora provident!\n\n\n\njjjjjjjjjjjjjjjjjjjjjjj', '<img src=\"img/correcto.png\" width=\"25\"> El hecho de registrarse en nuestra web y formar parte de www.latinclub.net implica conocer y aceptar todas las condiciones establecidas en la misma, así como el reglamento de cada una de las formas de juego en ella existente.\n\n<img src=\"img/correcto.png\" width=\"25\"> Sólo se podrán registrar y jugar personas mayores de 18 años.\n\n<img src=\"img/correcto.png\" width=\"25\">  Sólo se aceptarán jugadas de usuarios registrados, los cuales deben poseer una cuenta bancaria exclusiva (no se admiten cuentas de terceros).\n\n<img src=\"img/correcto.png\" width=\"25\"> Los pagos, retiros de saldo y/o premios sólo se realizarán hacia la cuenta bancaria de la persona registrada en nuestro sistema y dicha cuenta bancaria debe coincidir en todos sus datos con los datos del usuario registrado en www.latinclub.net.\n\n<img src=\"img/correcto.png\" width=\"25\"> Los pagos, retiros de saldo y/o premios serán procesados regularmente el mismo día que sean solicitados, pudiendo tardar según sea el caso (relaciones entre bancos) hasta 72 horas como máximo para hacerse efectivo en su cuenta.\n\n<img src=\"img/correcto.png\" width=\"25\"> Las transferencias por retiro de saldo se procesarán una vez concluida la jornada de carreras. El usuario puede solicitar un retiro de saldo en cualquier momento, pero los mismos serán procesados después de la confirmación de la última carrera.\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porcentajes_pagos`
--

CREATE TABLE `porcentajes_pagos` (
  `id_porcentaje` int(11) NOT NULL,
  `porcentaje` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `porcentajes_pagos`
--

INSERT INTO `porcentajes_pagos` (`id_porcentaje`, `porcentaje`) VALUES
(1, '0.20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reglas_sala`
--

CREATE TABLE `reglas_sala` (
  `id_regla` int(11) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `campo4` text NOT NULL,
  `campo5` text NOT NULL,
  `campo6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reglas_sala`
--

INSERT INTO `reglas_sala` (`id_regla`, `campo1`, `campo2`, `campo3`, `campo4`, `campo5`, `campo6`) VALUES
(1, '$5 HASTA $100\nDE $5 EN $5', '$100 HASTA $200\nDE $10 EN $10', '$200 HASTA $600\nDE $20 EN $20', '$600 HASTA $1.000\nDE $50 EN $50', '$1.000 HASTA $2.000\nDE $100 EN $100', '$2.000 EN ADELANTE\nDE $200 EN $200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id_sala` int(11) NOT NULL,
  `numero_sala` varchar(10) NOT NULL,
  `tipo_remate` varchar(100) NOT NULL,
  `anuncio1` varchar(500) NOT NULL,
  `anuncio2` varchar(500) NOT NULL,
  `hipodromo` varchar(400) NOT NULL,
  `distancia` varchar(100) NOT NULL,
  `pote_tablazo` varchar(10) NOT NULL,
  `pote` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_activacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id_sala`, `numero_sala`, `tipo_remate`, `anuncio1`, `anuncio2`, `hipodromo`, `distancia`, `pote_tablazo`, `pote`, `estado`, `fecha_activacion`) VALUES
(186, '1', 'NACIONAL', '1', '1', '1', '1', '1', '1', 2, '2021-05-03 07:55 pm'),
(187, '7', 'NACIONAL', 'arranca maña', '', 'Poliedro', '600', '2', '2', 0, '2021-06-14 06:55 pm'),
(188, '8', 'NACIONAL', 'Fuera', '', '1', '600', '2', '2', 3, '2021-06-15 04:39 am'),
(189, '90', 'NACIONAL', 'vENTAS', '', 'caracas', '600', '2', '3', 3, '2021-06-16 02:36 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas_tablas`
--

CREATE TABLE `salas_tablas` (
  `id_tabla` int(11) NOT NULL,
  `numero_tabla` varchar(10) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_ejemplar` varchar(200) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `id_soporte` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `respuesta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablas`
--

CREATE TABLE `tablas` (
  `id_tabla` int(11) NOT NULL,
  `numero_tabla` varchar(10) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_ejemplar` varchar(200) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL,
  `precio_inicial` varchar(10) NOT NULL,
  `in_activo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_ganancias_casa`
--

CREATE TABLE `total_ganancias_casa` (
  `id_total` int(11) NOT NULL,
  `ganancias` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `total_ganancias_casa`
--

INSERT INTO `total_ganancias_casa` (`id_total`, `ganancias`) VALUES
(1, '-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmision_en_vivo`
--

CREATE TABLE `transmision_en_vivo` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `saldo` varchar(30) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `fecha_registro` varchar(50) NOT NULL,
  `ultima_conexion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_apellido`, `email`, `usuario`, `clave`, `saldo`, `ip`, `fecha_registro`, `ultima_conexion`, `estado`, `rol`) VALUES
(1, 'administrador', 'admin@gmail.com', 'admin', '72309b343bd1bb34548186802bc9519fc82d993f', '2004', '::1', '2020-05-19 8:19 PM', '2021-06-15 07:27 pm', 0, 1),
(66, 'julian', 'julianmejia0213210@gmail.com', 'julian', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1135', '::1', '2021-02-16 11:28 am', '2021-05-03 07:55 pm', 0, 2),
(67, 'julian2', 'julianmejia0213210@gmail.com', 'julian2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2000', '::1', '2021-02-16 11:28 am', '2021-05-03 08:01 pm', 0, 2),
(69, 'julian3', 'julianmejia021233210@gmail.com', 'julian3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1990', '192.168.1.52', '2021-02-16 11:28 am', '2021-04-28 12:14 am', 0, 2),
(70, 'Isaac Betancourt', 'isaac12021991@gmail.com', 'isaac', '72309b343bd1bb34548186802bc9519fc82d993f', '604', '127.0.0.1', '2021-06-14 06:44 pm', '2021-06-15 07:29 pm', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletines`
--
ALTER TABLE `boletines`
  ADD PRIMARY KEY (`id_boletin`);

--
-- Indices de la tabla `ganadores`
--
ALTER TABLE `ganadores`
  ADD PRIMARY KEY (`id_ganador`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_tabla`);

--
-- Indices de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `historial_tiempo`
--
ALTER TABLE `historial_tiempo`
  ADD PRIMARY KEY (`id_tiempo`);

--
-- Indices de la tabla `pagina_principal`
--
ALTER TABLE `pagina_principal`
  ADD PRIMARY KEY (`id_principal`);

--
-- Indices de la tabla `porcentajes_pagos`
--
ALTER TABLE `porcentajes_pagos`
  ADD PRIMARY KEY (`id_porcentaje`);

--
-- Indices de la tabla `reglas_sala`
--
ALTER TABLE `reglas_sala`
  ADD PRIMARY KEY (`id_regla`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `salas_tablas`
--
ALTER TABLE `salas_tablas`
  ADD PRIMARY KEY (`id_tabla`);

--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`id_soporte`);

--
-- Indices de la tabla `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`id_tabla`);

--
-- Indices de la tabla `total_ganancias_casa`
--
ALTER TABLE `total_ganancias_casa`
  ADD PRIMARY KEY (`id_total`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletines`
--
ALTER TABLE `boletines`
  MODIFY `id_boletin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ganadores`
--
ALTER TABLE `ganadores`
  MODIFY `id_ganador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_tabla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1902;

--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_tiempo`
--
ALTER TABLE `historial_tiempo`
  MODIFY `id_tiempo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagina_principal`
--
ALTER TABLE `pagina_principal`
  MODIFY `id_principal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `porcentajes_pagos`
--
ALTER TABLE `porcentajes_pagos`
  MODIFY `id_porcentaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reglas_sala`
--
ALTER TABLE `reglas_sala`
  MODIFY `id_regla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `salas_tablas`
--
ALTER TABLE `salas_tablas`
  MODIFY `id_tabla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tablas`
--
ALTER TABLE `tablas`
  MODIFY `id_tabla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `total_ganancias_casa`
--
ALTER TABLE `total_ganancias_casa`
  MODIFY `id_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
