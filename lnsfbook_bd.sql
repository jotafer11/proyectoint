CREATE TABLE IF NOT EXISTS `editorial` (
  `id_editorial` int(9) NOT NULL,
  `nombre_editorial` varchar(100) NOT NULL,
  `editorial_active` int(2) NOT NULL DEFAULT '0',
  `editorial_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nombre_editorial`, `editorial_active`, `editorial_status`) VALUES
(1, 'santillana', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(9) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL,
  `categoria_active` int(2) NOT NULL DEFAULT '0',
  `categoria_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `categoria_active`, `categoria_status`) VALUES
(1, 'aventura', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(9) NOT NULL,
  `cod_libro` varchar(50) NOT NULL,
  `nombre_libro` varchar(100) NOT NULL,
  `id_editorial` int(9) NOT NULL,
  `id_categoria` int(9) NOT NULL,
  `year` int(4) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `libros` (`id_libro`, `cod_libro`, `nombre_libro`, `id_editorial`, `id_categoria`, `year`, `autor`, `descripcion`, `active`, `status`) VALUES
(1, 'ghsatsa553623432', 'hormiga', 1, 1, 1990, 'jose altamirano', 'gato perro hamster', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--

-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
