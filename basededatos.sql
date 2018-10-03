-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 05:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto_taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chofer`
--

CREATE TABLE `chofer` (
  `ci` int(11) NOT NULL,
  `licencia` int(11) NOT NULL,
  `cod_antecedentes` varchar(30) NOT NULL,
  `foto_licencia` varchar(255) NOT NULL,
  `imei` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chofer`
--

INSERT INTO `chofer` (`ci`, `licencia`, `cod_antecedentes`, `foto_licencia`, `imei`, `password`) VALUES
(111, 111, '123', 'No hay aun', 'Peor esto', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_taxi`
--

CREATE TABLE `detalle_taxi` (
  `placa_taxi` varchar(10) NOT NULL,
  `id_detalle` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_viaje`
--

CREATE TABLE `detalle_viaje` (
  `id_viaje` int(11) NOT NULL,
  `id_detalle` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estado_taxi`
--

CREATE TABLE `estado_taxi` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estado_viaje`
--

CREATE TABLE `estado_viaje` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `placa_taxi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasajero`
--

CREATE TABLE `pasajero` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `numero_celular` varchar(11) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propietario`
--

CREATE TABLE `propietario` (
  `ci` int(11) NOT NULL,
  `foto_soat_ruat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propietario`
--

INSERT INTO `propietario` (`ci`, `foto_soat_ruat`) VALUES
(222, 'No hay esto');

-- --------------------------------------------------------

--
-- Table structure for table `recorrido`
--

CREATE TABLE `recorrido` (
  `placa_taxi` varchar(10) NOT NULL,
  `id_recorrido` int(11) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `velocidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporte_taxi`
--

CREATE TABLE `reporte_taxi` (
  `placa_taxi` varchar(10) NOT NULL,
  `id_reporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

CREATE TABLE `taxi` (
  `placa` varchar(10) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `anio` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `numero_asientos` tinyint(4) NOT NULL,
  `numero_puertas` tinyint(4) NOT NULL,
  `con_parrilla` tinyint(4) NOT NULL,
  `con_aire` tinyint(4) NOT NULL,
  `codigo_ruat` varchar(20) NOT NULL,
  `ci_chofer` int(11) NOT NULL,
  `ci_propietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`placa`, `marca`, `modelo`, `anio`, `color`, `numero_asientos`, `numero_puertas`, `con_parrilla`, `con_aire`, `codigo_ruat`, `ci_chofer`, `ci_propietario`) VALUES
('MGT237', 'Suzuki', 'SK4', 2006, 'Rojo', 4, 4, 0, 1, 'No se que es esto', 111, 222);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo_electronico` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipoChofer` bit(1) NOT NULL DEFAULT b'0',
  `tipoPropietario` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ci`, `nombres`, `apellidos`, `fecha_nacimiento`, `sexo`, `direccion`, `telefono`, `correo_electronico`, `foto`, `tipoChofer`, `tipoPropietario`) VALUES
(111, 'Natalia', 'Oviedo Acosta', '1997-05-01 00:00:00', 'F', 'Cond. Brisas del Norte', '72138431', 'oviedoacostanatalia@gmail.com', 'dfg', b'1', b'0'),
(222, 'Joaquin', 'Chumacer', '1992-11-04 00:00:00', 'M', 'Hacienda 1', '72118544', 'joaquin@gmail.com', 'No hay', b'0', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `viaje`
--

CREATE TABLE `viaje` (
  `id` int(11) NOT NULL,
  `lat_origen` float NOT NULL,
  `lon_origen` float NOT NULL,
  `lat_destino` float NOT NULL,
  `lon_destino` float NOT NULL,
  `tiempo_estimado` datetime NOT NULL,
  `costo` float NOT NULL,
  `fecha` datetime NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `comentario_cliente` varchar(255) NOT NULL,
  `placa_taxi` varchar(10) NOT NULL,
  `id_pasajero` int(11) NOT NULL,
  `id_calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `detalle_taxi`
--
ALTER TABLE `detalle_taxi`
  ADD PRIMARY KEY (`placa_taxi`,`id_detalle`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indexes for table `detalle_viaje`
--
ALTER TABLE `detalle_viaje`
  ADD PRIMARY KEY (`id_viaje`,`id_detalle`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indexes for table `estado_taxi`
--
ALTER TABLE `estado_taxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estado_viaje`
--
ALTER TABLE `estado_viaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `placa_taxi` (`placa_taxi`);

--
-- Indexes for table `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `recorrido`
--
ALTER TABLE `recorrido`
  ADD PRIMARY KEY (`placa_taxi`,`id_recorrido`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporte_taxi`
--
ALTER TABLE `reporte_taxi`
  ADD KEY `placa_taxi` (`placa_taxi`),
  ADD KEY `id_reporte` (`id_reporte`);

--
-- Indexes for table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `ci_chofer` (`ci_chofer`),
  ADD KEY `ci_propietario` (`ci_propietario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `placa_taxi` (`placa_taxi`),
  ADD KEY `id_pasajero` (`id_pasajero`),
  ADD KEY `id_calificacion` (`id_calificacion`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chofer`
--
ALTER TABLE `chofer`
  ADD CONSTRAINT `chofer_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detalle_taxi`
--
ALTER TABLE `detalle_taxi`
  ADD CONSTRAINT `detalle_taxi_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado_taxi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_taxi_ibfk_2` FOREIGN KEY (`placa_taxi`) REFERENCES `taxi` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detalle_viaje`
--
ALTER TABLE `detalle_viaje`
  ADD CONSTRAINT `detalle_viaje_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viaje` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_viaje_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado_viaje` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`placa_taxi`) REFERENCES `taxi` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `propietario`
--
ALTER TABLE `propietario`
  ADD CONSTRAINT `propietario_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recorrido`
--
ALTER TABLE `recorrido`
  ADD CONSTRAINT `recorrido_ibfk_1` FOREIGN KEY (`placa_taxi`) REFERENCES `taxi` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reporte_taxi`
--
ALTER TABLE `reporte_taxi`
  ADD CONSTRAINT `reporte_taxi_ibfk_1` FOREIGN KEY (`placa_taxi`) REFERENCES `taxi` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_taxi_ibfk_2` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taxi`
--
ALTER TABLE `taxi`
  ADD CONSTRAINT `taxi_ibfk_1` FOREIGN KEY (`ci_chofer`) REFERENCES `chofer` (`ci`),
  ADD CONSTRAINT `taxi_ibfk_2` FOREIGN KEY (`ci_propietario`) REFERENCES `propietario` (`ci`);

--
-- Constraints for table `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`placa_taxi`) REFERENCES `taxi` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viaje_ibfk_2` FOREIGN KEY (`id_pasajero`) REFERENCES `pasajero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viaje_ibfk_3` FOREIGN KEY (`id_calificacion`) REFERENCES `calificacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
