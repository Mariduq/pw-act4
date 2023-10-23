-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 02:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtudvirtual`
--

-- --------------------------------------------------------

--
-- Table structure for table `botellones_clientes`
--

CREATE TABLE `botellones_clientes` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `zonapais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `botellones_llenados`
--

CREATE TABLE `botellones_llenados` (
  `idllenados` int(11) NOT NULL,
  `fechahora` datetime NOT NULL,
  `numbotellones` int(11) NOT NULL,
  `estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `clientes_cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `botellones_usuarios`
--

CREATE TABLE `botellones_usuarios` (
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `botellones_usuarios`
--

INSERT INTO `botellones_usuarios` (`username`, `clave`, `estado`) VALUES
('ADMIN', 'ADMIN', 'SI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `botellones_clientes`
--
ALTER TABLE `botellones_clientes`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `idclientes_UNIQUE` (`cedula`);

--
-- Indexes for table `botellones_llenados`
--
ALTER TABLE `botellones_llenados`
  ADD PRIMARY KEY (`idllenados`),
  ADD UNIQUE KEY `idllenados_UNIQUE` (`idllenados`),
  ADD KEY `fk_llenados_clientes1_idx` (`clientes_cedula`);

--
-- Indexes for table `botellones_usuarios`
--
ALTER TABLE `botellones_usuarios`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `clave_UNIQUE` (`clave`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `botellones_llenados`
--
ALTER TABLE `botellones_llenados`
  MODIFY `idllenados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `botellones_llenados`
--
ALTER TABLE `botellones_llenados`
  ADD CONSTRAINT `fk_llenados_clientes1` FOREIGN KEY (`clientes_cedula`) REFERENCES `botellones_clientes` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
