-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2016 a las 16:56:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centromedico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `citFecha` date NOT NULL,
  `citHora` time NOT NULL,
  `citPaciente` int(11) NOT NULL,
  `citMedico` int(11) NOT NULL,
  `citConsultorio` int(11) NOT NULL,
  `citEstado` enum('Asignado','Atendido') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Asignado',
  `citObservaciones` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `citFecha`, `citHora`, `citPaciente`, `citMedico`, `citConsultorio`, `citEstado`, `citObservaciones`) VALUES
(1, '2013-10-11', '22:00:00', 2, 2, 2, 'Atendido', 'Se hace revisiÃ³n de articulaciones y se envÃ­a exÃ¡menes de laboratorio'),
(2, '2013-10-25', '16:08:00', 3, 2, 4, 'Atendido', 'fghfjgfujgjgbkj'),
(3, '2014-02-28', '10:30:00', 9, 3, 4, 'Atendido', 'hjhjh'),
(4, '2016-06-23', '12:59:00', 7, 4, 1, 'Atendido', 'eres una mamasita'),
(5, '2016-08-11', '12:59:00', 2, 3, 1, 'Atendido', 'deben estudiar o si no se van a tapar motos junto la alcaldia'),
(6, '2016-08-10', '12:00:00', 2, 2, 1, 'Asignado', ''),
(7, '2016-08-08', '00:00:00', 7, 3, 2, 'Atendido', 'ir a evento adices dia del aprendiz'),
(8, '2016-08-12', '00:01:00', 2, 2, 3, 'Asignado', ''),
(9, '2016-08-19', '17:01:00', 7, 4, 4, 'Asignado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `idConsultorio` int(11) NOT NULL,
  `conNombre` char(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`idConsultorio`, `conNombre`) VALUES
(1, 'CON-101'),
(2, 'CON-102'),
(3, 'CON-201'),
(4, 'CON-202');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas`
--

CREATE TABLE `deudas` (
  `cod_deuda` int(11) NOT NULL,
  `nom_deudor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apelli_deudor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mont_deudor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deudas`
--

INSERT INTO `deudas` (`cod_deuda`, `nom_deudor`, `apelli_deudor`, `mont_deudor`) VALUES
(1, 'carlos jair ', 'cordoba cordoba', 5000000),
(2, 'yesenia durley', 'gonzales ', 13000000),
(3, 'elena ', 'sanabria', 32000000),
(4, 'carlos avila', 'vaez ', 800000),
(5, 'robinson velandia ', 'ruiz', 340000),
(6, 'divian albert', 'cañas cañas ', 6000000),
(7, 'anderson ', 'alzate mesa', 650000),
(8, 'mario carmona', 'cordoba', 435000),
(9, 'luisa miranda ', 'suñiga', 1340000),
(10, 'yesica tatiana', 'barbosa', 100000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idMedico` int(11) NOT NULL,
  `medIdentificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `medNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medEspecialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medTelefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medCorreo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idMedico`, `medIdentificacion`, `medNombres`, `medApellidos`, `medEspecialidad`, `medTelefono`, `medCorreo`) VALUES
(2, '3', 'Amparo', 'Grisales', 'Fisioterapeuta', '312456787', 'amparo@gmail.com'),
(3, '23', 'Francisco', 'Maturana', 'Odontologo', '8888888', 'fmaturana@gmail.com'),
(4, '24', 'Sofia', 'Vergara', 'Cirujano Plastico', '31234778', 'sofivergara@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `pacIdentificacion` int(11) NOT NULL,
  `pacNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacFechaNacimiento` date NOT NULL,
  `pacSexo` enum('Femenino','Masculino') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `pacIdentificacion`, `pacNombres`, `pacApellidos`, `pacFechaNacimiento`, `pacSexo`) VALUES
(2, 2, 'Faustino', 'Asptrilla', '1972-05-21', 'Masculino'),
(3, 13, 'Carlos', 'Valderrama', '1965-11-10', 'Masculino'),
(7, 45, 'alex', 'alzate', '2016-08-09', 'Masculino'),
(9, 34324, 'maria', 'madrugada', '1980-12-12', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuEstado` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`) VALUES
(1, 'Medico', 'c93b85830345deff3a39fa0578250420', 'Activo'),
(2, 'Asistente', '21a8277249d348a68f1ef4a5630184f8', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_paciente` (`citPaciente`),
  ADD KEY `fk_medico` (`citMedico`),
  ADD KEY `fk_consultorio` (`citConsultorio`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `deudas`
--
ALTER TABLE `deudas`
  ADD PRIMARY KEY (`cod_deuda`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedico`),
  ADD UNIQUE KEY `medIdentificacion` (`medIdentificacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `pacIdentificacion` (`pacIdentificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `login` (`usuLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `idConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `deudas`
--
ALTER TABLE `deudas`
  MODIFY `cod_deuda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_consultorios_idConsultorio` FOREIGN KEY (`citConsultorio`) REFERENCES `consultorios` (`idConsultorio`),
  ADD CONSTRAINT `fk_medicos_idMedico` FOREIGN KEY (`citMedico`) REFERENCES `medicos` (`idMedico`),
  ADD CONSTRAINT `fk_pacientes_idPaciente` FOREIGN KEY (`citPaciente`) REFERENCES `pacientes` (`idPaciente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
