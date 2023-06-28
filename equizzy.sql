-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-05-2023 a las 00:35:42
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equizzy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` int NOT NULL,
  `optionId` int DEFAULT NULL,
  `questionId` int DEFAULT NULL,
  `pollId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `optionId`, `questionId`, `pollId`) VALUES
(58, 451, 125, 24),
(59, 453, 126, 24),
(60, 456, 127, 24),
(61, 460, 128, 24),
(62, 461, 129, 24),
(63, 452, 125, 24),
(64, 455, 126, 24),
(65, 456, 127, 24),
(66, 459, 128, 24),
(67, 461, 129, 24),
(68, 238, 60, 13),
(69, 241, 61, 13),
(70, 243, 62, 13),
(71, 244, 63, 13),
(72, 254, 64, 13),
(73, 259, 65, 13),
(74, 262, 66, 13),
(75, 395, 108, 21),
(76, 399, 109, 21),
(77, 404, 110, 21),
(78, 408, 111, 21),
(79, 409, 112, 21),
(80, 395, 108, 21),
(81, 398, 109, 21),
(82, 405, 110, 21),
(83, 406, 111, 21),
(84, 411, 112, 21),
(85, 451, 125, 24),
(86, 454, 126, 24),
(87, 456, 127, 24),
(88, 459, 128, 24),
(89, 461, 129, 24),
(90, 348, 93, 18),
(91, 351, 94, 18),
(92, 355, 95, 18),
(93, 360, 96, 18),
(94, 362, 97, 18),
(95, 348, 93, 18),
(96, 352, 94, 18),
(97, 356, 95, 18),
(98, 359, 96, 18),
(99, 363, 97, 18),
(100, 348, 93, 18),
(101, 352, 94, 18),
(102, 355, 95, 18),
(103, 359, 96, 18),
(104, 362, 97, 18),
(105, 348, 93, 18),
(106, 352, 94, 18),
(107, 355, 95, 18),
(108, 358, 96, 18),
(109, 363, 97, 18),
(110, 365, 98, 19),
(111, 369, 99, 19),
(112, 372, 100, 19),
(113, 374, 101, 19),
(114, 379, 102, 19),
(115, 366, 98, 19),
(116, 368, 99, 19),
(117, 370, 100, 19),
(118, 375, 101, 19),
(119, 379, 102, 19),
(120, 238, 60, 13),
(121, 241, 61, 13),
(122, 243, 62, 13),
(123, 245, 63, 13),
(124, 250, 64, 13),
(125, 257, 65, 13),
(126, 262, 66, 13),
(127, 110, 26, 7),
(128, 119, 27, 7),
(129, 121, 28, 7),
(130, 335, 88, 17),
(131, 338, 89, 17),
(132, 341, 90, 17),
(133, 344, 91, 17),
(134, 346, 92, 17),
(135, 287, 74, 15),
(136, 294, 75, 15),
(137, 298, 76, 15),
(138, 302, 77, 15),
(139, 306, 78, 15),
(140, 310, 79, 15),
(141, 313, 80, 15),
(142, 287, 74, 15),
(143, 292, 75, 15),
(144, 296, 76, 15),
(145, 301, 77, 15),
(146, 307, 78, 15),
(147, 308, 79, 15),
(148, 311, 80, 15),
(149, 348, 93, 18),
(150, 351, 94, 18),
(151, 354, 95, 18),
(152, 359, 96, 18),
(153, 363, 97, 18),
(154, 348, 93, 18),
(155, 352, 94, 18),
(156, 354, 95, 18),
(157, 358, 96, 18),
(158, 363, 97, 18),
(159, 288, 74, 15),
(160, 293, 75, 15),
(161, 297, 76, 15),
(162, 301, 77, 15),
(163, 306, 78, 15),
(164, 309, 79, 15),
(165, 311, 80, 15),
(166, 349, 93, 18),
(167, 351, 94, 18),
(168, 354, 95, 18),
(169, 357, 96, 18),
(170, 362, 97, 18),
(171, 314, 81, 16),
(172, 318, 82, 16),
(173, 321, 83, 16),
(174, 323, 84, 16),
(175, 326, 85, 16),
(176, 330, 86, 16),
(177, 331, 87, 16),
(178, 348, 93, 18),
(179, 351, 94, 18),
(180, 354, 95, 18),
(181, 360, 96, 18),
(182, 363, 97, 18),
(183, 287, 74, 15),
(184, 292, 75, 15),
(185, 296, 76, 15),
(186, 302, 77, 15),
(187, 305, 78, 15),
(188, 309, 79, 15),
(189, 312, 80, 15),
(190, 108, 26, 7),
(191, 117, 27, 7),
(192, 121, 28, 7),
(193, 238, 60, 13),
(194, 240, 61, 13),
(195, 242, 62, 13),
(196, 245, 63, 13),
(197, 250, 64, 13),
(198, 255, 65, 13),
(199, 261, 66, 13),
(200, 512, 26, 7),
(201, 117, 27, 7),
(202, 121, 28, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorypoll`
--

CREATE TABLE `categorypoll` (
  `id` int NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `categorypoll`
--

INSERT INTO `categorypoll` (`id`, `name`) VALUES
(1, 'Musica'),
(2, 'Criptomonedas'),
(3, 'Perros'),
(4, 'Videojuegos'),
(5, 'Historia'),
(6, 'Inversiones'),
(7, 'Gatos'),
(8, 'Lugares'),
(9, 'Libros'),
(10, 'Peliculas'),
(11, 'Animales'),
(12, 'Tecnologia'),
(13, 'Aplicaciones'),
(14, 'Famosos'),
(15, 'Inteligencia artificial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `id` int NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `questionId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`id`, `name`, `questionId`) VALUES
(108, 'Caniche', 26),
(109, 'Bulldog francés', 26),
(110, 'Golden retriever', 26),
(111, 'Pastor alemán', 26),
(112, 'Bulldog', 26),
(113, 'Rottweiler', 26),
(114, 'Beagle', 26),
(115, 'Border collie', 27),
(116, 'Caniche', 27),
(117, 'Pastor alemán', 27),
(118, 'Golden retriever', 27),
(119, 'Labrador retriever', 27),
(120, 'Doberman', 27),
(121, 'Chihuahua', 28),
(122, 'Labrador', 28),
(123, 'Caniche', 28),
(124, 'Memoria ram', 29),
(125, 'Disco duro', 29),
(126, 'Procesador', 29),
(127, 'Placa madre', 29),
(128, 'Gabinete', 29),
(129, 'Procesar instrucciones', 30),
(130, 'Procesar gráficos', 30),
(131, 'Realizar operaciones matemáticas', 30),
(132, 'SSD', 32),
(133, 'Memoria ram', 32),
(134, 'Tarjeta gráfica', 32),
(135, 'Disco duro', 32),
(136, 'Fuente de poder', 32),
(137, 'Memoria ram', 33),
(138, 'Fuente de poder', 33),
(139, 'Disco duro', 33),
(140, 'Placa base', 33),
(154, 'C++', 38),
(155, 'C#', 38),
(156, 'Kotlin', 38),
(157, 'Javascript', 38),
(158, 'Python', 38),
(159, 'Aplicaciones de línea de comandos', 39),
(160, 'Aplicaciones web', 39),
(161, 'Scraping web', 39),
(162, 'Ciencia de datos', 39),
(163, 'Machine learning', 39),
(164, 'Todas las anteriores', 39),
(165, 'imperativo', 40),
(166, 'Declarativo', 40),
(167, 'Orientado a objetos', 40),
(168, 'Microsoft', 41),
(169, 'Apple', 41),
(170, 'Netscape', 41),
(171, 'Novel', 41),
(172, 'Ansi', 42),
(173, 'ECMAScript', 42),
(174, 'ISO 9660', 42),
(175, 'IEC', 42),
(176, 'Int', 43),
(177, 'Integer', 43),
(178, 'Long', 43),
(179, 'number', 43),
(180, 'Verdadero', 44),
(181, 'Falso', 44),
(182, '30', 45),
(183, '219', 45),
(184, '9', 45),
(185, 'Error', 45),
(186, 'String', 46),
(187, 'Boolean', 46),
(188, 'Undefined', 46),
(189, 'Object', 46),
(190, 'String', 47),
(191, 'Boolean', 47),
(192, 'Undefined', 47),
(193, 'Object', 47),
(194, 'Representación simbólica (numérica, alfabética, algorítmica etc.) de un atributo o una característica de una entidad', 48),
(195, 'Colección de datos y objetos estructurados e interrelacionados, sobre un tema o propósito específico.', 48),
(196, 'Conjunto de programas para acceder a datos.', 48),
(197, 'Aplicación utilizada para capturar información.', 48),
(198, 'Es una relación de datos relacionados interrelacionados y un conjunto de programas para acceder a dichos datos', 49),
(199, 'Es aquel que permite tener acceso a los usuarios de datos organizados mediante el modelo de datos', 49),
(200, 'Una serie Datos no relacionados que se pueden modificar', 49),
(201, 'Es un programa de Software que no se puede modificar,ni eliminar.', 49),
(202, 'Realizar la Representación simbólica (numérica, alfabética, algorítmica etc.) de un atributo o una característica de una entidad', 50),
(203, 'Acceder a toda la información de la base de datos', 50),
(204, 'Disponer de datos para ser compartidos por diferentes usuarios y aplicaciones', 50),
(205, 'Generar redundancia de los datos', 50),
(206, 'Verdadero', 51),
(207, 'Falso', 51),
(208, 'La información almacenada en la base de datos esté libre de errores', 52),
(209, 'Solo las personas autorizadas accedan a la información.', 52),
(210, 'Los datos sean numericos', 52),
(211, 'Las tablas tengan llaves primarias.', 52),
(212, 'Primary Key', 53),
(213, 'Clave foránea', 53),
(214, 'Relación', 53),
(215, 'Dato', 53),
(216, 'Verdadero', 54),
(217, 'Falso', 54),
(218, 'Si, tengo uno o más gatos', 55),
(219, 'No, no tengo gatos', 55),
(220, 'Siamés', 56),
(221, 'Persa', 56),
(222, 'Bengala', 56),
(223, 'Esfinge', 56),
(224, 'Otra', 56),
(225, 'Negro', 57),
(226, 'Blanco', 57),
(227, 'Gris', 57),
(228, 'Naranja', 57),
(229, 'Atigrado', 57),
(230, 'Otro', 57),
(231, 'Menos de 1 año', 58),
(232, 'Entre 1 y 3 años', 58),
(233, 'Entre 3 y 5 años', 58),
(234, 'Más de 5 años', 58),
(235, 'Interior solamente', 59),
(236, 'Exterior solamente', 59),
(237, 'Tanto interior como exterior', 59),
(238, 'Si', 60),
(239, 'No', 60),
(240, 'Si', 61),
(241, 'No', 61),
(242, 'Si', 62),
(243, 'No', 62),
(244, 'Bitcoin', 63),
(245, 'Ethereum', 63),
(246, 'Binance Coin', 63),
(247, 'Cardano', 63),
(248, 'Dogecoin', 63),
(249, 'Otra', 63),
(250, 'Compra y espera', 64),
(251, 'Trading a corto plazo', 64),
(252, 'Minería de criptomonedas', 64),
(253, 'Participación en ICOs', 64),
(254, 'No he invertido en criptomonedas', 64),
(255, 'Potencial de ganancias', 65),
(256, 'Creencia en la tecnología', 65),
(257, 'Diversificación de mi portafolio', 65),
(258, 'Porque amigos/familiares lo han hecho', 65),
(259, 'No invierto en criptomonedas', 65),
(260, 'Si, regularmente', 66),
(261, 'Si, ocasionalmente', 66),
(262, 'No, pero me gustaría probarlo', 66),
(263, 'No, no estoy interesado en hacerlo', 66),
(264, 'Si', 67),
(265, 'No', 67),
(266, 'Si', 68),
(267, 'No', 68),
(268, 'Si', 69),
(269, 'No', 69),
(270, 'No estoy seguro/a', 69),
(271, 'Oferta y demanda', 70),
(272, 'Eventos mundiales', 70),
(273, 'Regulaciones gubernamentales', 70),
(274, 'Ninguna de las anteriores', 70),
(275, 'Inversión', 71),
(276, 'Compras en línea', 71),
(277, 'Envío de remesas', 71),
(278, 'Ninguna de las anteriores', 71),
(279, 'La descentralización', 72),
(280, 'La seguridad y privacidad', 72),
(281, 'La rapidez de las transacciones', 72),
(282, 'Ninguna de las anteriores', 72),
(283, 'La volatilidad del precio', 73),
(284, 'La falta de aceptación generalizada', 73),
(285, 'El riesgo de hackeo o pérdida de los fondos', 73),
(286, 'Ninguna de las anteriores', 73),
(287, 'Si', 74),
(288, 'No', 74),
(289, 'Rock clásico', 75),
(290, 'Hard rock', 75),
(291, 'Metal', 75),
(292, 'Punk', 75),
(293, 'Indie rock', 75),
(294, 'Otro', 75),
(295, 'The Beatles', 76),
(296, 'Led Zeppelin', 76),
(297, 'Queen', 76),
(298, 'AC/DC', 76),
(299, 'Nirvana', 76),
(300, 'Guitarra', 77),
(301, 'Bajo', 77),
(302, 'Batería', 77),
(303, 'Teclado', 77),
(304, 'Otro', 77),
(305, 'Si, regularmente', 78),
(306, 'De vez en cuando', 78),
(307, 'Nunca', 78),
(308, 'Si', 79),
(309, 'No', 79),
(310, 'No estoy seguro/a', 79),
(311, 'Si', 80),
(312, 'No', 80),
(313, 'No estoy seguro/a', 80),
(314, 'Si', 81),
(315, 'No', 81),
(316, 'Una criptomoneda', 82),
(317, 'Una plataforma blockchain', 82),
(318, 'Un tipo de token', 82),
(319, 'Para enviar y recibir pagos', 83),
(320, 'Para crear contratos inteligentes', 83),
(321, 'Para almacenar y transferir datos', 83),
(322, 'Bitcoin', 84),
(323, 'Ethereum', 84),
(324, 'Litecoin', 84),
(325, 'Un acuerdo legal en papel', 85),
(326, 'Un programa informático que se ejecuta automáticamente', 85),
(327, 'Una forma de transferir criptomonedas', 85),
(328, 'El combustible que alimenta la red', 86),
(329, 'Una criptomoneda alternativa', 86),
(330, 'El nombre de un token ERC-20', 86),
(331, 'Una forma de criptomoneda en la red de Ethereum', 87),
(332, 'Una unidad de medida utilizada para calcular las tarifas de transacción', 87),
(333, 'Un tipo de contrato inteligente', 87),
(334, 'Si', 88),
(335, 'No', 88),
(336, 'Una base de datos centralizada', 89),
(337, 'Una plataforma de criptomoneda', 89),
(338, 'Una base de datos descentralizada', 89),
(339, 'La distribución de la base de datos entre múltiples nodos', 90),
(340, 'La encriptación de la información almacenada', 90),
(341, 'La velocidad de procesamiento de la red', 90),
(342, 'Un dispositivo físico que almacena criptomonedas', 91),
(343, 'Una unidad de medida utilizada para calcular las tarifas de transacción', 91),
(344, 'Un dispositivo o computadora que participa en la validación y registro de transacciones en la red', 91),
(345, 'Es una tecnología que solo se utiliza para la criptomoneda', 92),
(346, 'Es una tecnología que puede ser utilizada para una amplia gama de aplicaciones, desde finanzas hasta logística y más allá', 92),
(347, 'Es una tecnología que no tiene aplicaciones prácticas en la vida cotidiana.', 92),
(348, 'Si', 93),
(349, 'No', 93),
(350, 'Una tecnología que permite a las máquinas aprender de forma autónoma', 94),
(351, 'Un tipo de software que permite a las máquinas interactuar con humanos', 94),
(352, 'Un conjunto de técnicas de programación que permite a las máquinas procesar grandes cantidades de datos', 94),
(353, 'Procesamiento de lenguaje natural', 95),
(354, 'Reconocimiento de imágenes', 95),
(355, 'Análisis de datos', 95),
(356, 'Todas las anteriores', 95),
(357, 'Automatización de procesos empresariales', 96),
(358, 'Diagnóstico médico', 96),
(359, 'Conducción autónoma', 96),
(360, 'Todas las anteriores', 96),
(362, 'Si', 97),
(363, 'No', 97),
(364, 'No estoy seguro', 97),
(365, 'Si', 98),
(366, 'No', 98),
(367, 'Una técnica de programación que permite a las máquinas procesar grandes cantidades de datos', 99),
(368, 'Un tipo de software que permite a las máquinas interactuar con humanos', 99),
(369, 'Un conjunto de técnicas de programación que permite a las máquinas aprender de forma autónoma', 99),
(370, 'Algoritmos supervisados', 100),
(371, 'Algoritmos no supervisados', 100),
(372, 'Algoritmos de refuerzo', 100),
(373, 'Todas las anteriores', 100),
(374, 'Clasificación de imágenes', 101),
(375, 'Pronóstico del tiempo', 101),
(376, 'Predicción de ventas', 101),
(377, 'Todas las anteriores', 101),
(378, 'La capacidad de procesar grandes cantidades de datos', 102),
(379, 'La capacidad de aprender y mejorar de forma autónoma', 102),
(380, 'La capacidad de interactuar con humanos', 102),
(381, 'Si', 103),
(382, 'No', 103),
(383, 'Un tipo de algoritmo de aprendizaje automático inspirado en el cerebro humano', 104),
(384, 'Un conjunto de técnicas de programación que permite a las máquinas procesar grandes cantidades de datos', 104),
(385, 'Un tipo de software que permite a las máquinas interactuar con humanos', 104),
(386, 'Reconocimiento de voz', 105),
(387, 'Reconocimiento de objetos', 105),
(388, 'Pronóstico del tiempo', 105),
(389, 'Todas las anteriores', 105),
(390, 'La alimentación de datos a la red y el ajuste de los parámetros para minimizar el error', 106),
(391, 'La enseñanza de la red a través de la programación manual de reglas y condiciones', 106),
(392, 'La capacidad de procesar grandes cantidades de datos', 107),
(393, 'La capacidad de aprender y mejorar de forma autónoma', 107),
(394, 'La capacidad de interactuar con humanos', 107),
(395, 'Si', 108),
(396, 'No', 108),
(397, 'No estoy seguro/a', 108),
(398, 'La privacidad y seguridad de los datos', 109),
(399, 'El sesgo en la toma de decisiones', 109),
(400, 'La eliminación de empleos', 109),
(401, 'Todas las anteriores', 109),
(402, 'Mediante la regulación gubernamental', 110),
(403, 'A través del diseño ético de algoritmos y sistemas de inteligencia artificial', 110),
(404, 'A través de la educación pública sobre la inteligencia artificial', 110),
(405, 'Todas las anteriores', 110),
(406, 'Las empresas que desarrollan y utilizan la tecnología', 111),
(407, 'Los reguladores gubernamentales', 111),
(408, 'Los usuarios finales de la tecnología', 111),
(409, 'Si', 112),
(410, 'No', 112),
(411, 'No estoy seguro/a', 112),
(412, 'Si', 113),
(413, 'No', 113),
(414, 'No estoy seguro/a', 113),
(415, 'Creará nuevos empleos y oportunidades económicas', 114),
(416, 'Reducirá los empleos humanos y la demanda económica', 114),
(417, 'No tendrá un impacto significativo en la economía global', 114),
(418, 'Si', 115),
(419, 'No', 115),
(420, 'No estoy seguro/a', 115),
(421, 'Mejorar la atención médica y la atención al paciente', 116),
(422, 'Facilitar el transporte y la movilidad', 116),
(423, 'Mejorar la eficiencia y la sostenibilidad en la producción y distribución de alimentos', 116),
(424, 'Todas las anteriores', 116),
(425, 'Si', 117),
(426, 'No', 117),
(427, 'No estoy seguro/a', 117),
(428, 'Bach', 118),
(429, 'Mozart', 118),
(430, 'Beethoven', 118),
(431, 'Otro', 118),
(432, 'Requiem de Mozart', 119),
(433, 'Las Cuatro Estaciones de Vivaldi', 119),
(434, 'La Novena Sinfonía de Beethoven', 119),
(435, 'Otro', 119),
(436, 'Sí, frecuentemente', 120),
(437, 'Sí, pero solo una o dos veces', 120),
(438, 'No, nunca he asistido a un concierto de música clásica en vivo', 120),
(439, 'Sí, creo que la música clásica puede ser disfrutada por cualquier persona', 121),
(440, 'No, creo que la música clásica es un género exclusivo para algunos', 121),
(441, 'La complejidad musical y el uso de instrumentos acústicos', 122),
(442, 'El énfasis en la estructura y la forma', 122),
(443, 'La conexión con la historia y la cultura', 122),
(444, 'Todas las anteriores', 122),
(445, 'Sí, creo que la música clásica es una forma de arte valiosa que debe ser preservada y promovida', 123),
(446, 'No, creo que la música clásica es un género obsoleto y sin importancia en la actualidad', 123),
(447, 'Ofrecer más conciertos gratuitos o a precios asequibles', 124),
(448, 'Incluir la música clásica en programas educativos y de formación', 124),
(449, 'Utilizar las redes sociales y la tecnología para promover y difundir la música clásica', 124),
(450, 'Todas las anteriores', 124),
(451, 'Sí, creo que el trap incluye y representa a diferentes grupos y comunidades', 125),
(452, 'No, creo que el trap se centra en un estereotipo de masculinidad y riqueza', 125),
(453, 'El ritmo y la instrumentación', 126),
(454, 'Las letras y el mensaje', 126),
(455, 'La energía y la emoción que transmite', 126),
(456, 'Sí, creo que el trap tiene el potencial de crecer y cambiar con el tiempo', 127),
(457, 'No, creo que el trap se ha estancado en un sonido repetitivo y predecible', 127),
(458, 'Sí, frecuentemente', 128),
(459, 'Sí, pero solo una o dos veces', 128),
(460, 'No, nunca he asistido a un concierto de trap en vivo', 128),
(461, 'Sí, creo que el trap ha llegado para quedarse y seguirá siendo popular en los próximos años', 129),
(462, 'No, creo que el trap es una moda pasajera que pronto será olvidada.', 129),
(463, 'Pop', 130),
(464, 'Rock', 130),
(465, 'Hip-hop', 130),
(466, 'Trap', 130),
(467, 'Regeton', 130),
(468, 'Otro', 130),
(469, 'Ableton Live', 131),
(470, 'FL Studio', 131),
(471, 'Logic Pro', 131),
(472, 'Reaper', 131),
(473, 'Pro Tools', 131),
(474, 'Otro', 131),
(475, 'Sí, creo que la producción musical está cambiando hacia un enfoque más digital', 132),
(476, 'No, creo que la producción musical seguirá utilizando instrumentos y equipos analógicos', 132),
(477, 'La calidad del sonido', 133),
(478, 'La creatividad en la producción', 133),
(479, 'La capacidad de la canción para conectarse con el público', 133),
(480, 'La tecnología ha permitido una mayor creatividad en la producción musical', 134),
(481, 'La tecnología ha hecho que la producción musical sea más accesible y fácil de hacer', 134),
(482, 'Sí, creo que la tecnología ha permitido que cualquier persona pueda producir música', 135),
(483, 'No, creo que la producción musical sigue siendo un campo especializado que requiere habilidades y conocimientos específicos', 135),
(484, 'Aprende los fundamentos de la producción musical y dedica tiempo para practicar y experimentar', 136),
(485, 'Utiliza los recursos en línea y tutoriales para aprender a producir música de manera efectiva', 136),
(486, 'Trata de trabajar con otros productores y músicos para aprender de ellos y mejorar tus habilidades.', 136),
(487, 'Sonido digital', 137),
(488, 'Sonido analógico', 137),
(489, 'No tengo preferencia', 137),
(490, 'Sí', 138),
(491, 'No', 138),
(492, 'Depende del equipo de sonido', 138),
(493, 'Sí', 139),
(494, 'No', 139),
(495, 'Depende del tipo de música', 139),
(496, 'Sí, siempre noto la diferencia', 140),
(497, 'A veces noto la diferencia', 140),
(498, 'Nunca he notado la diferencia', 140),
(499, 'Sonido digital', 141),
(500, 'Sonido analógico', 141),
(501, 'Depende del tipo de música', 141),
(502, 'Son demasiado caros', 142),
(503, 'Son razonables', 142),
(504, 'Depende del equipo y la marca', 142),
(505, 'Sí, ambos son igual de importantes', 143),
(506, 'No, uno es más importante que el otro', 143),
(507, 'Depende del tipo de música', 143),
(512, 'Dogo Argentino', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polls`
--

CREATE TABLE `polls` (
  `id` int NOT NULL,
  `uniqId` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `likes` int DEFAULT NULL,
  `public` int DEFAULT NULL,
  `categoryId` int DEFAULT NULL,
  `userId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `polls`
--

INSERT INTO `polls` (`id`, `uniqId`, `title`, `description`, `img`, `likes`, `public`, `categoryId`, `userId`) VALUES
(7, '65034b3d5e729855895041cc9eb90063', 'Razas de perros', 'Esta encuesta se trata sobre las diferentes razas de perro que existen', '4e7facc0d3d79fdfa6b00d0eb8c9682c.webp', 0, 1, 3, 12),
(8, 'cb09f279de56e2e5d0cb1ac95217806e', 'Cuanto sabes sobre partes internas de una computadora', 'En este cuestionario se van a hacer preguntas sobre los componentes internos de una computadora para ver cuanto conoces sobre estos componentes', '0b516ff7ed1576dc686779189fdf2adc.webp', 0, 1, 12, 12),
(9, '5b08ef4492a1bb880a2a68adc8f5948a', 'Lenguajes de programación', 'Este cuestionario tiene diferentes preguntas acerca de los diferentes tipos de lenguajes de programación', '8d76fcc5231c99e11de8c3d0940c4304.webp', 0, 1, 12, 12),
(10, 'fe0c369a4be445c40bad1db20801057e', 'Javascript', 'Es un test básico para ver cuánto sabes sobre el famoso lenguaje de programación web Javascript', 'c05fc7fe11ef8f4fd486cc992c6e59a4.webp', 0, 1, 12, 12),
(11, '550567c26f0de9981d75ad7ce45c7889', 'Test básico de bases de datos', 'Es una encuesta básica sobre conceptos generales de bases de datos y los sistemas de gestión de bases de datos', '1eb0c80471cdde654418b8c07ca84d7c.webp', 0, 1, 12, 12),
(12, 'afcebc238229c231093177bd6c3bf27d', 'Preferencias de gatos', 'Esta encuesta lo que busca es recaudar información sobre qué tipo o razas de gatos abundan en los hogares.', '561409e74e1e0a193cd3f9538f9ea15e.webp', 0, 1, 7, 12),
(13, 'd53fb274908cff90046526232c9560d0', 'Uso de criptomonedas', 'Esta encuesta busca recaudar información sobre el uso que le dan las personas a las criptomonedas en su vida.', '9650ea1cdb1504df9b7a4e352b2c9f20.webp', 0, 1, 2, 12),
(14, 'b244386ce1e2a589c0288b5ef4087d6d', 'Bitcoin', 'Es una encuesta para ver cuánto saben las personas acerca de una de las criptomonedas más conocidas en el mundo', '6da5dc8fc445a53c011cee67d21be1fa.webp', 0, 1, 2, 12),
(15, 'bce988c3a5ab337dce1fdb18359e67c9', 'Rock', 'Es una encuesta que buscar conocer tu opinión acerca del grandioso género musical del Rock', 'a79b76150e5d3d952b6a9b443660123f.webp', 0, 1, 1, 12),
(16, '92cff20c79cf0d97c3ab849fc8f50e21', 'Ethereum', 'Es una encuesta que busca conocer cuánto saben las personas acerca de esta criptomoneda tan conocida', '5f4595b365615f793fe976131d7abf1b.webp', 0, 1, 2, 12),
(17, '110548025123d432c00554e80d1754ae', 'Blockchain', 'Cuanto sabes acerca del concepto \"Blockchain\" relacionado con el mundo de las criptomonedas', '495b5a2bbc8f49d8676b9cfe10de555e.webp', 0, 1, 2, 12),
(18, '87a8ced9d5c2b18f773a80aa0d50907f', 'Introducción a la inteligencia artificial', 'Introducción a la inteligencia artificial: Una encuesta básica sobre los conceptos clave de la IA.', '38c0c3f69f814b7c3210bfa394b65b6e.webp', 0, 1, 15, 12),
(19, 'd35ef3a413fd7844581cc957fe069c54', 'Aprendizaje automático', 'Una encuesta sobre el aprendizaje automático como lo es una inteligencia artificial', '4a00092920a6227b3636966a5053e77e.webp', 0, 1, 15, 12),
(20, '1db78fe9b09f0fad0c3527e0fcfb3296', 'Redes neuronales', 'Una encuesta sobre los conceptos y procesos detrás del aprendizaje profundo y las redes neuronales.', '8ff883f8a978757416a8a977ab618d01.webp', 0, 1, 15, 12),
(21, 'ab2066c8debdfd572d535b6d3cd6ffd2', 'Ética de la inteligencia artificial', 'Una encuesta sobre los riesgos éticos de la IA y cómo abordarlos.', '6eacd22897d37eedfbd9934966b508db.webp', 0, 1, 15, 12),
(22, '21b3f606e5f3271f4ae05f41afd02014', 'Futuro de la inteligencia artificial', 'Una encuesta sobre el impacto potencial de la IA en la economía, la sociedad y el futuro de la humanidad.', 'f5687042bea647bdeaa46127848463e7.webp', 0, 1, 15, 12),
(23, '994fe72990f3ab6ca227152aff567bff', 'Música clásica: gustos y opiniones', 'La música clásica es un género musical que ha perdurado a lo largo de los siglos y que sigue siendo apreciado por muchas personas en todo el mundo. Esta encuesta tiene como objetivo conocer tus gustos y opiniones sobre la música clásica, así como tu perspectiva sobre su accesibilidad y su importancia cultural. Por favor, tómate unos minutos para completar la encuesta y compartir tus ideas con nosotros.', 'a1bb3fbfc2c1bdd39a7d262c9a83dbdc.webp', 0, 1, 1, 12),
(24, '3ee8d832c09820c850f43f7c41f436c9', 'Trap: explorando el género musical', 'El trap es un género musical que ha ganado popularidad en los últimos años, especialmente entre los jóvenes. En esta encuesta, nos gustaría conocer tus opiniones y gustos sobre el trap. Por favor, tómate unos minutos para responder a las preguntas y compartir con nosotros tus ideas.', '633f5c16e82ececb910dcec105b0c9c1.webp', 0, 1, 1, 12),
(25, '286389a4c3b0cfa5f124ccaf86a50bd1', 'La mente de los productores musicales', 'La producción musical es una parte fundamental de la industria de la música. En esta encuesta, nos gustaría conocer tus opiniones y prácticas como productor musical. Por favor, tómate unos minutos para responder a las preguntas y compartir con nosotros tus ideas.', 'ef0ebee035adb523093db2b818b9d7ce.webp', 0, 1, 1, 12),
(26, 'e06024893f7b0304676304c13ee87f27', 'Sonido analógico VS digital', 'El sonido es una de las partes más importantes de la música y la calidad de su reproducción es fundamental. Con el avance de la tecnología, se ha desarrollado la capacidad de crear sonido digital que puede ser grabado y procesado de manera más fácil que el sonido analógico. En esta encuesta, nos gustaría conocer tu opinión sobre la calidad del sonido digital y analógico y cómo los percibes.', '082957b89cdf8e330e44bb5a55d17f06.webp', 0, 1, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `pollId` int DEFAULT NULL,
  `typeId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `name`, `pollId`, `typeId`) VALUES
(26, '¿Cuál es tu raza de perro favorita?', 7, 1),
(27, '¿Cuál creés que es la raza de perro más inteligente?', 7, 1),
(28, '¿Cuál es la raza de perro más pequeña del mundo?', 7, 1),
(29, '¿En dónde se conectan todos los componentes internos de una computadora?', 8, 1),
(30, '¿Cuál es la función del procesador?', 8, 1),
(32, '¿Qué componente contiene discos giratorios en su interior?', 8, 1),
(33, '¿Qué componente se encarga de guardar la información de las aplicaciones en ejecución?', 8, 1),
(38, '¿Qué lenguaje se utiliza para añadirle interactividad a un sitio web?', 9, 1),
(39, '¿Para qué utiliza python?', 9, 1),
(40, '¿Qué paradigma de programación usa Java?', 9, 1),
(41, '¿Quién diseñó javascript en 1995?', 10, 1),
(42, '¿Qué norma rige el Lenguaje de Programación JavaScript?', 10, 1),
(43, 'Tipo de dato JavaScript para manejar números', 10, 1),
(44, '¿\"Undefined\" es un tipo de datos JavaScript?', 10, 1),
(45, 'La expresión \"21\" + 9 da como resultado:', 10, 1),
(46, 'Qué valor devuelve la siguiente expresión: typeof true', 10, 1),
(47, 'Qué valor devuelve la siguiente expresión: typeof null', 10, 1),
(48, '¿Qué es una base de datos?', 11, 1),
(49, '¿Qué es un SGBD?', 11, 1),
(50, 'Uno de los principales objetivos de un sistema manejador de Base de datos SGBD ES?', 11, 1),
(51, 'Garantizar la coherencia de los datos almacenados, en relación con la realidad en un objetivo de un SMBD', 11, 1),
(52, 'La integridad en Base de datos hace referencia...', 11, 1),
(53, 'Campo particular dentro del registro, que permite la identificación exclusiva y unívoca de cada registro', 11, 1),
(54, 'Una entidad es toda cosa u objeto significativo (real ó imaginario) del cual se requiere conocer ó almacenar información.', 11, 1),
(55, '¿Tienes algún gato en casa?', 12, 1),
(56, '¿Qué raza de gato tienes o te gusta más?', 12, 1),
(57, '¿Cuál es tu color favorito para un gato?', 12, 1),
(58, '¿Qué edad tienen tus gatos?', 12, 1),
(59, '¿Tu gato es un gato de interior o exterior?', 12, 1),
(60, '¿Estás familiarizado con el término \"criptomoneda\"?', 13, 1),
(61, '¿Tienes alguna criptomoneda en tu cartera?', 13, 1),
(62, '¿Consideras que las criptomonedas son una inversión segura?', 13, 1),
(63, '¿Qué criptomoneda es tu favorita?', 13, 1),
(64, '¿Qué tipo de inversión en criptomonedas has hecho principalmente?', 13, 1),
(65, '¿Cuál es la principal razón por la que inviertes en criptomonedas?', 13, 1),
(66, '¿Has utilizado criptomonedas para hacer compras o pagos en línea?', 13, 1),
(67, '¿Estás familiarizado con el término \"Bitcoin\"?', 14, 1),
(68, '¿Has comprado alguna vez Bitcoin?', 14, 1),
(69, '¿Crees que Bitcoin es una inversión segura?', 14, 1),
(70, '¿Qué crees que determina el precio de Bitcoin?', 14, 1),
(71, '¿Qué uso le das o darías a bitcoin?', 14, 1),
(72, '¿Cuál crees que es la principal ventaja de Bitcoin sobre otras monedas?', 14, 1),
(73, '¿Cuál es la principal desventaja de Bitcoin según tu opinión?', 14, 1),
(74, '¿Eres fanático/a del rock?', 15, 1),
(75, '¿Cuál es tu subgénero de rock favorito?', 15, 1),
(76, '¿Cuál de las siguientes bandas prefieres?', 15, 1),
(77, '¿Qué instrumento te gusta más en una banda de rock?', 15, 1),
(78, '¿Asistes a conciertos de rock con frecuencia?', 15, 1),
(79, '¿Crees que el rock sigue siendo un género popular en la actualidad?', 15, 1),
(80, '¿Crees que el rock tiene un impacto cultural y social importante?', 15, 1),
(81, '¿Has oído hablar de Ethereum antes?', 16, 1),
(82, '¿Cuál de las siguientes afirmaciones describe mejor Ethereum?', 16, 1),
(83, '¿Para qué se utiliza principalmente Ethereum?', 16, 1),
(84, '¿Cuál es la criptomoneda que se utiliza en la red de Ethereum?', 16, 1),
(85, '¿Qué es un contrato inteligente?', 16, 1),
(86, '¿Qué es la \"gasolina\" en la red de Ethereum?', 16, 1),
(87, '¿Qué son los tokens ERC-20?', 16, 1),
(88, '¿Has oído hablar de blockchain antes?', 17, 1),
(89, '¿Cuál de las siguientes afirmaciones describe mejor blockchain?', 17, 1),
(90, '¿Qué característica de blockchain la hace segura y resistente a la manipulación?', 17, 1),
(91, '¿Qué es un \"nodo\" en la red de blockchain?', 17, 1),
(92, '¿Cuál de las siguientes afirmaciones describe mejor la tecnología blockchain?', 17, 1),
(93, '¿Has oído hablar de inteligencia artificial antes?', 18, 1),
(94, '¿Cómo definirías la inteligencia artificial?', 18, 1),
(95, '¿Qué tipo de tareas puede realizar la inteligencia artificial?', 18, 1),
(96, '¿Cuáles son algunas de las aplicaciones prácticas de la inteligencia artificial?', 18, 1),
(97, '¿Crees que la inteligencia artificial cambiará radicalmente el mundo en el futuro?', 18, 1),
(98, '¿Has oído hablar de aprendizaje automático antes?', 19, 1),
(99, '¿Cómo definirías el aprendizaje automático?', 19, 1),
(100, '¿Qué tipo de algoritmos se utilizan en el aprendizaje automático?', 19, 1),
(101, '¿Qué tipo de tareas puede realizar el aprendizaje automático?', 19, 1),
(102, '¿Cuál crees que es la principal ventaja del aprendizaje automático?', 19, 1),
(103, '¿Has oído hablar de redes neuronales antes?', 20, 1),
(104, '¿Cómo definirías una red neuronal?', 20, 1),
(105, '¿Qué tipo de tareas puede realizar una red neuronal?', 20, 1),
(106, '¿Cuál es el proceso de entrenamiento de una red neuronal?', 20, 1),
(107, '¿Cuál crees que es la principal ventaja de las redes neuronales?', 20, 1),
(108, '¿Crees que la inteligencia artificial puede ser utilizada para el mal?', 21, 1),
(109, '¿Qué tipo de riesgos plantea la inteligencia artificial en términos de ética?', 21, 1),
(110, '¿Cómo se pueden abordar los riesgos éticos de la inteligencia artificial?', 21, 1),
(111, '¿Quiénes deberían ser responsables de garantizar la ética en la inteligencia artificial?', 21, 1),
(112, '¿Crees que la ética de la inteligencia artificial debe ser una preocupación global?', 21, 1),
(113, '¿Crees que la inteligencia artificial reemplazará algún día a los trabajadores humanos en gran escala?', 22, 1),
(114, '¿Qué tipo de impacto crees que tendrá la inteligencia artificial en la economía global?', 22, 1),
(115, '¿Crees que la inteligencia artificial debería ser utilizada para mejorar la vida humana en general?', 22, 1),
(116, '¿Cómo crees que la inteligencia artificial podría utilizarse para mejorar la vida humana?', 22, 1),
(117, '¿Crees que la inteligencia artificial será una tecnología fundamental en el futuro de la humanidad?', 22, 1),
(118, '¿Cuál es tu compositor de música clásica favorito?', 23, 1),
(119, '¿Cuál es tu obra de música clásica favorita?', 23, 1),
(120, '¿Has asistido alguna vez a un concierto de música clásica en vivo?', 23, 1),
(121, '¿Crees que la música clásica es accesible para todos los públicos?', 23, 1),
(122, '¿Qué crees que diferencia a la música clásica de otros géneros musicales?', 23, 1),
(123, '¿Te parece importante preservar y promover la música clásica?', 23, 1),
(124, '¿Qué crees que se puede hacer para acercar la música clásica a un público más amplio?', 23, 1),
(125, '¿Crees que el trap es un género musical inclusivo?', 24, 1),
(126, '¿Qué te gusta más del trap?', 24, 1),
(127, '¿Crees que el trap es un género musical que puede evolucionar?', 24, 1),
(128, '¿Has asistido alguna vez a un concierto de trap en vivo?', 24, 1),
(129, '¿Crees que el trap es un género musical que seguirá siendo popular en el futuro?', 24, 1),
(130, '¿Cuál es el género musical que más produces?', 25, 1),
(131, '¿Cuál es el software de producción musical que prefieres utilizar?', 25, 1),
(132, '¿Crees que la producción musical está evolucionando hacia un sonido más digital?', 25, 1),
(133, '¿Qué es lo más importante para ti al producir una canción?', 25, 1),
(134, '¿Cómo crees que la tecnología ha afectado la producción musical?', 25, 1),
(135, '¿Crees que la producción musical ha sido democratizada por la tecnología?', 25, 1),
(136, '¿Qué consejos le darías a alguien que quiere empezar a producir música?', 25, 1),
(137, '¿Prefieres el sonido digital o analógico?', 26, 1),
(138, '¿Crees que el sonido digital es más nítido y claro que el sonido analógico?', 26, 1),
(139, '¿Crees que el sonido analógico tiene un carácter único que el sonido digital no puede replicar?', 26, 1),
(140, '¿Has notado alguna vez la diferencia entre el sonido digital y analógico al escuchar música?', 26, 1),
(141, '¿Crees que los músicos deberían usar equipos de sonido digital o analógico para grabar su música?', 26, 1),
(142, '¿Cuál es tu opinión sobre el precio de los equipos de sonido digital y analógico?', 26, 1),
(143, '¿Crees que el sonido digital y analógico son igual de importantes en la industria de la música?', 26, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ratepolls`
--

CREATE TABLE `ratepolls` (
  `id` int NOT NULL,
  `rate` int DEFAULT NULL,
  `pollId` int DEFAULT NULL,
  `userId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `ratepolls`
--

INSERT INTO `ratepolls` (`id`, `rate`, `pollId`, `userId`) VALUES
(24, 1, 15, 12),
(25, 2, 15, 13),
(26, 3, 15, 14),
(27, 5, 18, 12),
(28, 5, 7, 12),
(29, 5, 13, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typequestion`
--

CREATE TABLE `typequestion` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `typequestion`
--

INSERT INTO `typequestion` (`id`, `name`) VALUES
(1, 'select');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `uniqId` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `uniqId`, `name`, `surname`, `email`, `password`, `admin`) VALUES
(12, '28783e9a5deb555675b2f5008c16d1fe', 'Esteban ', 'Redón', 'esteban1.redon2@gmail.com', '$2y$10$iigdTrpY/Gg1myTUrk1na.eOwQ.XEFube1JoS9PDWWH5AiN4lIqiy', 0),
(13, '4711da11175d1e4164ada515fa18a31e', 'Pepe', 'Argento', 'pepeargento@gmail.com', '$2y$10$0tiJfuc./b0.S/ntu.GjJOS8rFI1wvztc/PjyXIE6Y6zsjX9p95uu', 0),
(14, '802830f0d341bd827c01afe5b8076282', 'Lionel', 'Messi', 'lionelmessi@gmail.com', '$2y$10$XAK44X6b03nRumTcMIA3iOzgE3s8j4Z9frjTZG5UG24vbGFEwjZlG', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `optionAnswerId` (`optionId`),
  ADD KEY `questionAnswerId` (`questionId`),
  ADD KEY `pollAnswerId` (`pollId`);

--
-- Indices de la tabla `categorypoll`
--
ALTER TABLE `categorypoll`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionId_idx` (`questionId`);

--
-- Indices de la tabla `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId_idx` (`userId`),
  ADD KEY `categoryId_idx` (`categoryId`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pollId_idx` (`pollId`),
  ADD KEY `typeQuestionId_idx` (`typeId`);

--
-- Indices de la tabla `ratepolls`
--
ALTER TABLE `ratepolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pollIdRate` (`pollId`),
  ADD KEY `userIdRate` (`userId`);

--
-- Indices de la tabla `typequestion`
--
ALTER TABLE `typequestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `categorypoll`
--
ALTER TABLE `categorypoll`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;

--
-- AUTO_INCREMENT de la tabla `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `ratepolls`
--
ALTER TABLE `ratepolls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `typequestion`
--
ALTER TABLE `typequestion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `optionAnswerId` FOREIGN KEY (`optionId`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pollAnswerId` FOREIGN KEY (`pollId`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questionAnswerId` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `questionId` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `categoryId` FOREIGN KEY (`categoryId`) REFERENCES `categorypoll` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `pollId` FOREIGN KEY (`pollId`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `typeQuestionId` FOREIGN KEY (`typeId`) REFERENCES `typequestion` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `ratepolls`
--
ALTER TABLE `ratepolls`
  ADD CONSTRAINT `pollIdRate` FOREIGN KEY (`pollId`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userIdRate` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
