-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2018 at 01:10 PM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7708000_lpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `atividadeAcademica`
--

CREATE TABLE `atividadeAcademica` (
  `id_atividadeAcademica` int(10) UNSIGNED ZEROFILL NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `hora_inicio` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hota_fim` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_requisitos` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `outros` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atividadeAcademicaServidor`
--

CREATE TABLE `atividadeAcademicaServidor` (
  `id_atividadeAcademicaServidor` int(10) UNSIGNED ZEROFILL NOT NULL,
  `id_atividadeAcademica` int(10) UNSIGNED DEFAULT NULL,
  `id_servidor` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventoExterno`
--

CREATE TABLE `eventoExterno` (
  `id_eventoExterno` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `outros` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pre_requisitos` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_realizacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventoExternoServidor`
--

CREATE TABLE `eventoExternoServidor` (
  `id_eventoExternoServidor` int(10) UNSIGNED ZEROFILL NOT NULL,
  `id_eventoExterno` int(10) UNSIGNED DEFAULT NULL,
  `id_servidor` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producaoAcademica`
--

CREATE TABLE `producaoAcademica` (
  `id_procucaoAcaemica` int(10) UNSIGNED ZEROFILL NOT NULL,
  `tipo` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caminho` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_servidor` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servidor`
--

CREATE TABLE `servidor` (
  `id_servidor` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matricula` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_funcional` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacao_academica` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lotacao` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `funcao` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(25) COLLATE utf8_unicode_ci DEFAULT '12345'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividadeAcademica`
--
ALTER TABLE `atividadeAcademica`
  ADD PRIMARY KEY (`id_atividadeAcademica`);

--
-- Indexes for table `atividadeAcademicaServidor`
--
ALTER TABLE `atividadeAcademicaServidor`
  ADD PRIMARY KEY (`id_atividadeAcademicaServidor`),
  ADD KEY `id_atividadeAcademica` (`id_atividadeAcademica`),
  ADD KEY `id_servidor` (`id_servidor`);

--
-- Indexes for table `eventoExterno`
--
ALTER TABLE `eventoExterno`
  ADD PRIMARY KEY (`id_eventoExterno`);

--
-- Indexes for table `eventoExternoServidor`
--
ALTER TABLE `eventoExternoServidor`
  ADD PRIMARY KEY (`id_eventoExternoServidor`),
  ADD KEY `id_eventoExterno` (`id_eventoExterno`),
  ADD KEY `id_servidor` (`id_servidor`);

--
-- Indexes for table `producaoAcademica`
--
ALTER TABLE `producaoAcademica`
  ADD PRIMARY KEY (`id_procucaoAcaemica`),
  ADD KEY `id_servidor` (`id_servidor`);

--
-- Indexes for table `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`id_servidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividadeAcademica`
--
ALTER TABLE `atividadeAcademica`
  MODIFY `id_atividadeAcademica` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atividadeAcademicaServidor`
--
ALTER TABLE `atividadeAcademicaServidor`
  MODIFY `id_atividadeAcademicaServidor` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventoExterno`
--
ALTER TABLE `eventoExterno`
  MODIFY `id_eventoExterno` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventoExternoServidor`
--
ALTER TABLE `eventoExternoServidor`
  MODIFY `id_eventoExternoServidor` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producaoAcademica`
--
ALTER TABLE `producaoAcademica`
  MODIFY `id_procucaoAcaemica` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servidor`
--
ALTER TABLE `servidor`
  MODIFY `id_servidor` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atividadeAcademicaServidor`
--
ALTER TABLE `atividadeAcademicaServidor`
  ADD CONSTRAINT `atividadeAcademicaServidor_ibfk_1` FOREIGN KEY (`id_atividadeAcademica`) REFERENCES `atividadeAcademica` (`id_atividadeAcademica`),
  ADD CONSTRAINT `atividadeAcademicaServidor_ibfk_2` FOREIGN KEY (`id_servidor`) REFERENCES `servidor` (`id_servidor`);

--
-- Constraints for table `eventoExternoServidor`
--
ALTER TABLE `eventoExternoServidor`
  ADD CONSTRAINT `eventoExternoServidor_ibfk_1` FOREIGN KEY (`id_eventoExterno`) REFERENCES `eventoExterno` (`id_eventoExterno`),
  ADD CONSTRAINT `eventoExternoServidor_ibfk_2` FOREIGN KEY (`id_servidor`) REFERENCES `servidor` (`id_servidor`);

--
-- Constraints for table `producaoAcademica`
--
ALTER TABLE `producaoAcademica`
  ADD CONSTRAINT `producaoAcademica_ibfk_1` FOREIGN KEY (`id_servidor`) REFERENCES `servidor` (`id_servidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
