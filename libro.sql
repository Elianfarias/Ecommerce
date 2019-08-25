-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2019 a las 07:19:16
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

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
  `genero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
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
(1, 'Harry Potter y la Piedra Filosofal', 'libros/libro1.jpg\r\n', 'Joanne K. Rowling', 'Salamandra', '9788498389098', 'Novela', '2019-03-11', 113, 'Harry vive con sus horribles tios y el insoportable primo Dudley, hasta que su ingreso en el Colegio Hogwarts de Magia y Hechiceria cambia su vida para siempre. Alli aprendera trucos y encantamientos fabulosos, y hara un punado de buenos amigos... aunque tambien algunos temibles enemigos. Y, sobre todo, conocera los secretos que lo ayudaran a cumplir con su destino.\r\n', 'fantasia', 300),
(2, 'Harry Potter y la Camara Secreta', 'libros/libro2.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389104', 'Novela', '2019-01-14', 120, 'Mientras Harry espera impaciente en casa de sus insoportables tios el inicio del segundo curso del Colegio Hogwarts de Magia y Hechiceria, un elfo aparece en su habitacion y le advierte de que una amenaza mortal se cierne sobre la escuela. Harry no se lo piensa dos veces y, acompanado de Ron, se dirige a Hogwarts en un coche volador. Alli, Harry oye extranos susurros en los pasillos desiertos y, de pronto... los ataques comienzan. La siniestra prediccion del elfo parece hacerse realidad.', 'fantasia', 300),
(3, 'Harry Potter y el Prisionero de Azkaban', 'libros/libro3.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389111', 'Novela', '2019-04-14', 210, 'De la prision de Azkaban se ha escapado un terrible villano, Sirius Black, un asesino en serie que fue complice de lord Voldemort y que, dicen los rumores, quiere vengarse de Harry por haber destruido a su maestro. Por si esto fuera poco, entran en accion los dementores, unos seres abominables capaces de robarles la felicidad a los magos y de eliminar todo recuerdo hermoso de aquellos que se atreven a acercarseles. El desafio es enorme, pero Harry, Ron y Hermione son capaces de enfrentarse a todo esto y mucho mas.', 'fantasia', 675),
(4, 'Harry Potter y el Caliz de Fuego', 'libros/libro4.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389128', 'Novela', '2019-01-14', 287, 'Otro deplorable verano con los Dursley llega a su fin y Harry esta impaciente por regresar a Hogwarts. A sus catorce anos, solo desea ser un joven mago como los demas y dedicarse a aprender nuevos sortilegios y asistir a los Mundiales de quidditch. Sin embargo, en Hogwarts le espera un desafio de grandes proporciones, por lo que tendra que demostrar que ya no es un nino y que esta preparado para vivir las nuevas y emocionantes experiencias que el futuro le depara.', 'fantasia', 785),
(5, 'Harry Potter y la Orden del Fenix', 'libros/libro5.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389135', 'Novela', '2019-01-14', 287, 'Las vacaciones de verano aun no han acabado y Harry se encuentra mas inquieto que nunca. Apenas ha tenido noticias de Ron y Hermione, y presiente que algo extrano esta sucediendo en Hogwarts. No bien empieza el nuevo curso, sus temores se vuelven realidad: el Ministerio de Magia ha iniciado una campana de desprestigio contra el y Dumbledore, para lo cual ha asignado a la horrible profesora Dolores Umbridge la tarea de vigilar sus movimientos. Y por si fuera poco, Harry sospecha que Voldemort es capaz de adivinar sus pensamientos con el fin de apoderarse de un objeto secreto que le permitiria recuperar su poder destructivo.', 'fantasia', 895),
(6, 'Harry Potter y el Misterio del Principe', 'libros/libro6.jpg', 'Joanne K. Rowling', 'Salamandra', '9788498389142', 'Novela', '2019-03-11', 98, 'En medio de graves acontecimientos que asolan el pais, Harry inicia su sexto curso en Hogwarts. El equipo de quidditch, los examenes y las chicas lo mantienen ocupado, pero la tranquilidad dura poco. A pesar de los ferreos controles de seguridad, dos alumnos son brutalmente atacados. Dumbledore sabe que, tal como se anunciaba en la Profecia, Harry y Voldemort han de enfrentarse a muerte. Asi pues, para intentar debilitar al enemigo, el anciano director y el joven mago emprenderan juntos un peligroso viaje con la ayuda de un viejo libro de pociones perteneciente a un misterioso personaje, alguien que se hace llamar Principe Mestizo', 'fantasia', 825),
(7, 'Un Mundo Feliz', 'libros/libro7.jpg', 'Aldous Huxley', 'Debolsillo', '8497594258', 'Novela', '2010-00-00', 255, 'Un mundo feliz es un clásico de la literatura de este siglo.\r\nCon ironía mordiente, el genial autor inglés plasma una sombría metáfora sobre el futuro, muchas de cuyas previsiones se han materializado, acelerada e inquietantemente, en los últimos años. La novela describe un mundo en el que finalmente se han cumplido los peores vaticinios: triunfan los dioses del consumo y la comodidad, y el orbe se organiza en diez zonas en apariencia seguras y estables. Sin embargo, este mundo ha sacrificado valores humanos esenciales, y sus habitantes son procreados in vitro a imagen y semejanza de una cadena de montaje.', 'Ciencia Ficcion', 399),
(9, 'El Principito', '1565758833-libro9.jpg', 'Antonie de Saint', 'El Ateneo', '9789500299114', 'novela', '2016-07-12', 101, 'Una historia que destila aï¿½oranza por la infancia perdida, por la mirada inocente y limpia a los niï¿½os, por la simplicidad de las cosas frente a la codicia, el ansia de poder y el desmedido instinto de posesiï¿½n de los adultos. Porque, como aprende el principito en este viaje, hay que mirar con el corazï¿½n, ya que lo esencial es invisible para los ojos.', 'Infantil y Juvenil', 450),
(11, 'Moby Dick', 'libros/libro11.jpg', 'Herman Melville', 'Edimat', '9788497944335', 'Novela', '2018-11-15', 236, 'El amplio mar, la constante contemplación del horizonte en busca de la presa, la abigarrada tripulaciÃ³n del Pequod, ballenero comandado por un capitÃ¡n tullido y obsesionado por su venganza... Surgiendo de la profundidad de las aguas, como un espectro, ', 'Ciencia Ficcion', 550),
(12, 'Hamlet', '1565758867-libro12.jpg', 'William Shakespeare', 'Mestas', '9788416365661', 'novela', '2016-09-09', 80, '', 'drama', 239),
(13, 'El Lobo Estepario', '1565758470-libro13.jpg', 'Hermann Hesse', 'Lumen', '9788426400598', 'novela', '2013-00-00', 250, 'Detrï¿½s del aspecto descuidado y enfermizo del intelectual Harry Haller se esconde una naturaleza sumamente sensible y despierta. ï¿½l mismo se describe como un lobo estepario, ya que se siente fuera del mundo burguï¿½s que lo rodea: un mundo que odia y desprecia pero que, a la vez, no puede abandonar. Por eso alquila una habitaciï¿½n en la pensiï¿½n de una seï¿½ora mayor y trata de convivir con inquilinas que cuidan sus plantas con esmero y hombres responsables que cumplen religiosamente su horario de trabajo. Pero ese orden lo ahoga y una fuerza oscura lo obliga a salir y emprender la bï¿½squeda incansable de una vida mï¿½s autï¿½ntica e intensa.', 'Ciencia Ficcion', 569),
(14, 'Lo que el Viento se llevo', 'libros/libro14.jpg', 'Margaret Mitchell', 'Ediciones B', '9789876275309', 'Novela', '2015-00-00', 105, 'Scarlett Oâ€™Hara vive en Tara, una gran plantaciÃ³n del estado sureÃ±o de Georgia, y estÃ¡ enamorada de Ashley Wilkes, que en breve contraerÃ¡ matrimonio con Melanie Hamilton. Estamos en 1861, en los prolegÃ³menos de la guerra de SecesiÃ³n, y todos los jÃ³venes sureÃ±os muestran entusiasmo por entrar en combate, excepto el atr activo aventurero Rhett Butler. A Butler le gusta Scarlett, pero Ã©sta sigue enamorada de Ashley, que acaba de hacer pÃºblico su compromiso con Melanie. Despechada, Scarlett acepta la propuesta de matrimonio de Charles, el hermano de Melanie, al que desprecia. AÃ±os mÃ¡s tarde, y como consecuencia del final de la guerra, ya viuda, Scarlett debe afrontar situaciones nuevas como el hambre, el dolor y la pÃ©rdida e instalarse en Atlanta, donde Melanie espera noticias de Ashley y Butler aparece de nuevo.', 'Novela Historica', 1239),
(16, 'El Psicoanalista', '1565758852-libro16.jpg', 'John Katzenbach', 'Ediciones B', '9789876278270', 'novela', '2018-06-14', 177, 'Dickens trata paralelamente las realidades de Inglaterra y Francia a finales del siglo XVIII en los dÃ­as previos a la RevoluciÃ³n francesa. Si bien condena la insurrecciÃ³n popular, con imÃ¡genes terrorÃ­ficas, estÃ¡ convencido de que la aristocracia forzÃ³ al pueblo a revelarse. Sumamente crÃ­tico con las instituciones victorianas, la novela es tambiÃ©n una advertencia a la sociedad inglesa del momento en que Ã©l escribÃ­a.', 'Ficcion y Literatura', 629),
(17, 'Sinceramente', 'libros/libro17.jpg', 'Cristina Fernandez de Kirchner', 'Sudamericana', '9789500763035', 'Politica', '2019-04-23', 403, 'Este libro no es autobiogrÃ¡fico ni tampoco una enumeraciÃ³n de logros personales o polÃ­ticos, es una mirada y una reflexiÃ³n retrospectiva para desentraÃ±ar algunos hechos y capÃ­tulos de la historia reciente y cÃ³mo han impactado en la vida de los argentinos y en la mÃ­a tambiÃ©n.', 'Derecho y Ciencias Sociales', 599),
(18, 'It (Eso)', 'libros/libro18.jpg', 'Stephen King', 'Debolsillo', '9789877250244', 'Novela', '2014-10-21', 230, 'Una de las novelas mÃ¡s ambiciosas de Stephen King, donde ha logrado perfeccionar las claves del gÃ©nero de terror.', 'Terror', 949),
(19, 'Steve Jobs', 'libros/libro19.jpg', 'Walter Isaacson', 'Debolsillo', '9789875669116', 'Biografia', '2013-08-14', 330, 'La biografÃ­a definitiva de Steve Jobs, el fundador de Apple, escrita con su colaboraciÃ³n.', 'Autobiografia', 899),
(24, 'Mavi la loca12312', 'Array', 'tu vieja', 'aaaaaaaaa', '1234567890', 'novela', '4567-03-12', 123, 'zaqwsxedcrfvtgbyhnujmiko,l', 'literario', 123),
(29, '213456', 'Array', '13456432456', '42243524', '3524421242352534', 'novela', '5244-03-24', 2147483647, '44241214214242', '534355341435253', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
