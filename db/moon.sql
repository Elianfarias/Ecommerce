SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(255) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `escritor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `publicacion` date NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` varchar(999) COLLATE utf8_spanish_ci NOT NULL,
  `subgenero` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `nombre`, `foto`, `escritor`, `editorial`, `isbn`, `genero`, `publicacion`, `stock`, `descripcion`, `subgenero`, `precio`) VALUES
(1, 'Harry Potter y la Piedra Filosofal', '1567383193-1567357759-libro1.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389098', 'novela', '2019-03-11', 113, 'Harry vivee con sus horribles tios y el insoportable primo Dudley, hasta que su ingreso en el Colegio Hogwarts de Magia y Hechiceria cambia su vida para siempre. Alli aprendera trucos y encantamientos fabulosos, y hara un punado de buenos amigos... aunque tambien algunos temibles enemigos. Y, sobre todo, conocera los secretos que lo ayudaran a cumplir con su destino.', 'fantasia', 300),
(2, 'Harry Potter y la Camara Secreta', '1567307030-libro2.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389104', 'novela', '2019-01-14', 120, 'Mientras Harry espera impaciente en casa de sus insoportables tios el inicio del segundo curso del Colegio Hogwarts de Magia y Hechiceria, un elfo aparece en su habitacion y le advierte de que una amenaza mortal se cierne sobre la escuela. Harry no se lo piensa dos veces y, acompanado de Ron, se dirige a Hogwarts en un coche volador. Alli, Harry oye extranos susurros en los pasillos desiertos y, de pronto... los ataques comienzan. La siniestra prediccion del elfo parece hacerse realidad.', 'fantasia', 300),
(3, 'Harry Potter y el Prisionero de Azkaban', '1567306400-libro3.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389111', 'novela', '2019-04-14', 210, 'De la prision de Azkaban se ha escapado un terrible villano, Sirius Black, un asesino en serie que fue complice de lord Voldemort y que, dicen los rumores, quiere vengarse de Harry por haber destruido a su maestro. Por si esto fuera poco, entran en accion los dementores, unos seres abominables capaces de robarles la felicidad a los magos y de eliminar todo recuerdo hermoso de aquellos que se atreven a acercarseles. El desafio es enorme, pero Harry, Ron y Hermione son capaces de enfrentarse a todo esto y mucho mas.', 'fantasia', 675),
(4, 'Harry Potter y el Caliz de Fuego', '1567302834-libro4.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389128', 'novela', '2019-01-14', 287, 'Otro deplorable verano con los Dursley llega a su fin y Harry esta impaciente por regresar a Hogwarts. A sus catorce anos, solo desea ser un joven mago como los demas y dedicarse a aprender nuevos sortilegios y asistir a los Mundiales de quidditch. Sin embargo, en Hogwarts le espera un desafio de grandes proporciones, por lo que tendra que demostrar que ya no es un nino y que esta preparado para vivir las nuevas y emocionantes experiencias que el futuro le depara.', 'fantasia', 785),
(5, 'Harry Potter y la Orden del Fenix', '1567308078-libro5.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389135', 'novela', '2019-01-14', 287, 'Las vacaciones de verano aun no han acabado y Harry se encuentra mas inquieto que nunca. Apenas ha tenido noticias de Ron y Hermione, y presiente que algo extrano esta sucediendo en Hogwarts. No bien empieza el nuevo curso, sus temores se vuelven realidad: el Ministerio de Magia ha iniciado una campana de desprestigio contra el y Dumbledore, para lo cual ha asignado a la horrible profesora Dolores Umbridge la tarea de vigilar sus movimientos. Y por si fuera poco, Harry sospecha que Voldemort es capaz de adivinar sus pensamientos con el fin de apoderarse de un objeto secreto que le permitiria recuperar su poder destructivo.', 'fantasia', 895),
(6, 'Harry Potter y el Misterio del Principe', '1567304215-libro6.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389142', 'novela', '2019-03-11', 98, 'En medio de graves acontecimientos que asolan el pais, Harry inicia su sexto curso en Hogwarts. El equipo de quidditch, los examenes y las chicas lo mantienen ocupado, pero la tranquilidad dura poco. A pesar de los ferreos controles de seguridad, dos alumnos son brutalmente atacados. Dumbledore sabe que, tal como se anunciaba en la Profecia, Harry y Voldemort han de enfrentarse a muerte. Asi pues, para intentar debilitar al enemigo, el anciano director y el joven mago emprenderan juntos un peligroso viaje con la ayuda de un viejo libro de pociones perteneciente a un misterioso personaje, alguien que se hace llamar Principe Mestizo', 'fantasia', 825),
(7, 'Un Mundo Feliz', '1567365933-libro7.jpg', 'Aldous Huxley', 'Debolsillo', '8497594258', 'novela', '2010-00-00', 255, 'Un mundo feliz es un clï¿½sico de la literatura de este siglo.Con ironï¿½a mordiente, el genial autor inglï¿½s plasma una sombrï¿½a metï¿½fora sobre el futuro, muchas de cuyas previsiones se han materializado, acelerada e inquietantemente, en los ï¿½ltimos aï¿½os. La novela describe un mundo en el que finalmente se han cumplido los peores vaticinios: triunfan los dioses del consumo y la comodidad, y el orbe se organiza en diez zonas en apariencia seguras y estables. Sin embargo, este mundo ha sacrificado valores humanos esenciales, y sus habitantes son procreados in vitro a imagen y semejanza de una cadena de montaje.', 'Ciencia Ficcion', 399),
(9, 'El Principito', '1571747499-b1d50b4aca61d420efddd9302588baf4.jpg', 'Antonie de Saint', 'El Ateneo', '9789500299114', 'novela', '2016-07-12', 101, 'Una historia que destila aï¿½oranza por la infancia perdida, por la mirada inocente y limpia a los niï¿½os, por la simplicidad de las cosas frente a la codicia, el ansia de poder y el desmedido instinto de posesiï¿½n de los adultos. Porque, como aprende el principito en este viaje, hay que mirar con el corazï¿½n, ya que lo esencial es invisible para los ojos.', 'Infantil y Juvenil', 450),
(11, 'Moby Dick', '1567361633-libro11.jpg', 'Herman Melville', 'Edimat', '9788497944335', 'novela', '2018-11-15', 236, 'El amplio mar, la constante contemplaciÃ³n del horizonte en busca de la presa, la abigarrada tripulaciÃ³n del Pequod, ballenero comandado por un capitÃ¡n tullido y obsesionado por su venganza... Surgiendo de la profundidad de las aguas, como un espectro, ', 'Ciencia Ficcion', 550),
(12, 'Hamlet', '1571747520-hamlet-294.jpg', 'William Shakespeare', 'Mestas', '9788416365661', 'novela', '2016-09-09', 80, '', 'drama', 239),
(14, 'Lo que el Viento se llevo', '1567360717-libro14.jpg', 'Margaret Mitchell', 'Ediciones B', '9789876275309', 'novela', '2015-00-00', 105, 'Scarlett Oâ€™Hara vive en Tara, una gran plantaciÃ³n del estado sureÃ±o de Georgia, y estÃ¡ enamorada de Ashley Wilkes, que en breve contraerÃ¡ matrimonio con Melanie Hamilton. Estamos en 1861, en los prolegÃ³menos de la guerra de SecesiÃ³n, y todos los jÃ³venes sureÃ±os muestran entusiasmo por entrar en combate, excepto el atr activo aventurero Rhett Butler. A Butler le gusta Scarlett, pero Ã©sta sigue enamorada de Ashley, que acaba de hacer pÃºblico su compromiso con Melanie. Despechada, Scarlett acepta la propuesta de matrimonio de Charles, el hermano de Melanie, al que desprecia. AÃ±os mÃ¡s tarde, y como consecuencia del final de la guerra, ya viuda, Scarlett debe afrontar situaciones nuevas como el hambre, el dolor y la pÃ©rdida e instalarse en Atlanta, donde Melanie espera noticias de Ashley y Butler aparece de nuevo.', 'Novela Historica', 1239),
(16, 'El Psicoanalista', '1571747510-91-ELvEEeIL.jpg', 'John Katzenbach', 'Ediciones B', '9789876278270', 'novela', '2018-06-14', 177, 'Dickens trata paralelamente las realidades de Inglaterra y Francia a finales del siglo XVIII en los dÃ­as previos a la RevoluciÃ³n francesa. Si bien condena la insurrecciÃ³n popular, con imÃ¡genes terrorÃ­ficas, estÃ¡ convencido de que la aristocracia forzÃ³ al pueblo a revelarse. Sumamente crÃ­tico con las instituciones victorianas, la novela es tambiÃ©n una advertencia a la sociedad inglesa del momento en que Ã©l escribÃ­a.', 'Ficcion y Literatura', 629),
(18, 'It (Eso)', '1567358600-libro18.jpg', 'Stephen King', 'Debolsillo', '9789877250244', 'novela', '2014-10-21', 230, 'Una de las novelas mÃ¡s ambiciosas de Stephen King, donde ha logrado perfeccionar las claves del gÃ©nero de terror.', 'Terror', 949),
(19, 'Steve Jobs', '1567361666-libro19.jpg', 'Walter Isaacson', 'Debolsillo', '9789875669116', 'novela', '2013-08-14', 330, 'La biografÃ­a definitiva de Steve Jobs, el fundador de Apple, escrita con su colaboraciÃ³n.', 'Autobiografia', 899),
(36, 'sinceramente', '1571764086-245309_tina.jpg', 'Cristina Kirchner', 'santillana', '5', 'politica', '2019-10-09', 100, ' la historia de como le robaron a un paÃ­s', 'Biografia', 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_spanish_ci NOT NULL,
  `username` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `code` text COLLATE utf8_spanish_ci NOT NULL,
  `validation` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` text COLLATE utf8_spanish_ci NOT NULL,
  `ultimaConexion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `username`, `pass`, `email`, `code`, `validation`, `fechaRegistro`, `ultimaConexion`, `tipoUsuario`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin@gmail.com', '001', '', 'validado', '', 'admin'),
(10, 'elian farias', 'elianlf', 'elian123', 'elianfarias0@gmail.com', 'elian123', 'No verificado', '22/10/2019', '22/10/2019', 'usuario'),
(11, 'Brenda Barrera', 'Brenchus', 'brenchus', 'brendalubarrera@gmail.com', 'brenchus', 'No verificado', '22/10/2019', '22/10/2019', 'usuario'),
(12, 'rocio sanchez', 'rocio', 'elian123', 'rociopt@gmail.com', 'elian123', 'No verificado', '22/10/2019', '22/10/2019', 'usuario'),
(13, 'Samir DÃ­az', 'samirdiaz', 'asdqwe123', 'sami1126diaz@gmail.com', 'asdqwe123', 'No verificado', '06/11/2019', '06/11/2019', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(30) NOT NULL,
  `id_producto` int(30) NOT NULL,
  `id_usuario` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(30) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `libro` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;