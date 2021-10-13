-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 22-10-2020 a las 19:17:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon-alejandro-cruz`
--
CREATE DATABASE IF NOT EXISTS `pokemon-alejandro-cruz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pokemon-alejandro-cruz`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `tag` varchar(40) NOT NULL,
  `url` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `imagen_url` varchar(100) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `nombre`, `imagen_url`, `tipo`, `descripcion`) VALUES
(1, 'Bulbasaur', '../Pokedex-AlejandroCruz/recursos/img/1.png', 'Planta', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(2, 'Ivysaur', '../Pokedex-AlejandroCruz/recursos/img/2.png', 'Planta', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(3, 'Venusaur', '../Pokedex-AlejandroCruz/recursos/img/3.png', 'Planta', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(4, 'Charmander', '../Pokedex-AlejandroCruz/recursos/img/4.png', 'Fuego', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(5, 'Charmeleon', '../Pokedex-AlejandroCruz/recursos/img/5.png', 'Fuego', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(6, 'Charizard', '../Pokedex-AlejandroCruz/recursos/img/6.png', 'Fuego', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(7, 'Squirtle', '../Pokedex-AlejandroCruz/recursos/img/7.png', 'Agua', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(8, 'Wartortle', '../Pokedex-AlejandroCruz/recursos/img/8.png', 'Agua', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(9, 'Blastoise', '../Pokedex-AlejandroCruz/recursos/img/9.png', 'Agua', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(10, 'Caterpie', '../Pokedex-AlejandroCruz/recursos/img/10.png', 'Planta', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(11, 'Metapod', '../Pokedex-AlejandroCruz/recursos/img/11.png', 'Planta', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(12, 'Butterfree', '../Pokedex-AlejandroCruz/recursos/img/12.png', 'Aire', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(13, 'Weedle', '../Pokedex-AlejandroCruz/recursos/img/13.png', 'Planta', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(14, 'Kakuna', '../Pokedex-AlejandroCruz/recursos/img/14.png', 'Planta', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(15, 'Beedrill', '../Pokedex-AlejandroCruz/recursos/img/15.png', 'Planta', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(16, 'Pidgey', '../Pokedex-AlejandroCruz/recursos/img/16.png', 'Aire', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(17, 'Pidgeotto', '../Pokedex-AlejandroCruz/recursos/img/17.png', 'Aire', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(18, 'Pidgeot', '../Pokedex-AlejandroCruz/recursos/img/18.png', 'Aire', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(19, 'Rattata', '../Pokedex-AlejandroCruz/recursos/img/19.png', 'Planta', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(20, 'Raticate', '../Pokedex-AlejandroCruz/recursos/img/20.png', 'Planta', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(21, 'Spearow', '../Pokedex-AlejandroCruz/recursos/img/21.png', 'Planta', 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional.'),
(22, 'Fearow', '../Pokedex-AlejandroCruz/recursos/img/22.png', 'Planta', 'Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto.'),
(23, 'Ekans', '../Pokedex-AlejandroCruz/recursos/img/23.png', 'Planta', 'Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y, a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur.'),
(24, 'Arbok', '../Pokedex-AlejandroCruz/recursos/img/24.png', 'Planta', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!'),
(25, 'Pikachu', '../Pokedex-AlejandroCruz/recursos/img/25.png', 'Electrico', 'Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let\'s Go, Pikachu! y Pokémon: Let\'s Go, Eevee!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` smallint(6) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `CLAVE` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `USUARIO`, `CLAVE`) VALUES
(1, 'alejandro', 'admin'),
(2, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`tag`);

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
