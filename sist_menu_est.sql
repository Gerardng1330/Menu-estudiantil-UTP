-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 11:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sist_menu_est`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `CEDULA` varchar(50) DEFAULT NULL,
  `CONTRA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `CEDULA`, `CONTRA`) VALUES
(1, '8-980-52', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `combos`
--

CREATE TABLE `combos` (
  `id` int(11) NOT NULL,
  `PRESA` varchar(100) DEFAULT NULL,
  `ACOMP` varchar(100) DEFAULT NULL,
  `ACOMP2` varchar(100) DEFAULT NULL,
  `BEBIDA` varchar(255) DEFAULT NULL,
  `FOTO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `combos`
--

INSERT INTO `combos` (`id`, `PRESA`, `ACOMP`, `ACOMP2`, `BEBIDA`, `FOTO`) VALUES
(1, 'Lomo de cerdo', 'Arroz blanco', 'Ensalada', 'Cerveza', 'imagenes/arrozcerdo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comentariosugerencia`
--

CREATE TABLE `comentariosugerencia` (
  `id` int(11) NOT NULL,
  `comentarioSugerencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comentariosugerencia`
--

INSERT INTO `comentariosugerencia` (`id`, `comentarioSugerencia`) VALUES
(16, 'el personal me grito'),
(17, 'No deberian cobrar a 0.80$ una alita pequeña'),
(19, 'La alita esta fria');

-- --------------------------------------------------------

--
-- Table structure for table `comida`
--

CREATE TABLE `comida` (
  `id` int(11) NOT NULL,
  `TITULO` varchar(100) DEFAULT NULL,
  `PRECIO` decimal(6,2) DEFAULT NULL,
  `TIPO` varchar(20) DEFAULT NULL,
  `DESCP` varchar(255) DEFAULT NULL,
  `FOTO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comida`
--

INSERT INTO `comida` (`id`, `TITULO`, `PRECIO`, `TIPO`, `DESCP`, `FOTO`) VALUES
(1, 'Pollo frito', 0.80, 'PRESA', 'Muslo de pollo frito', 'imagenes/Muslofrito.jpeg'),
(2, 'Lomo de cerdo', 0.95, 'PRESA', 'Lomo de cerdo guisado', 'imagenes/Lomo-cerdo.jpeg'),
(3, 'Carne guisada', 1.00, 'PRESA', 'Carne de res guisada', 'imagenes/carne-guisada.jpeg'),
(4, 'Arroz blanco', 0.40, 'ACOMP', 'Arroz blanco', 'imagenes/arroz-blanco.png'),
(5, 'Lentejas', 0.60, 'ACOMP', 'Lentejas', 'imagenes/Lentejas.jpeg'),
(6, 'Ensalada', 0.50, 'ACOMP', 'Ensalada mixta de lechuga, tomate, cebolla y aguacate con aderezo de limón y cilantro', 'imagenes/ensalada.jpg'),
(7, 'Arveja', 0.60, 'ACOMP', 'Arveja', 'imagenes/arveja.jpeg'),
(8, 'Botella de agua', 0.25, 'BEBIDA', 'Botella de agua UTP', 'imagenes/botelladeagua.jpg'),
(9, 'Papas salteadas', 0.50, 'ACOMP', 'Papas salteadas bien condimentadas', 'imagenes/Papas-salteadas.jpg'),
(10, 'Salchicha guisada', 0.40, 'ACOMP', 'Salchicha guisada', 'imagenes/salchicha-guisada.png'),
(11, 'Yuca frita', 0.65, 'ACOMP', 'Yuca frita', 'imagenes/yuca.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `menuEspecial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `menuEspecial`) VALUES
(15, 'Macarrones'),
(16, 'Sancocho'),
(17, 'Pie de manzana');

-- --------------------------------------------------------

--
-- Table structure for table `votos`
--

CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `elecciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `votos`
--

INSERT INTO `votos` (`id`, `elecciones`) VALUES
(55, 'Sancocho'),
(57, 'Macarrones'),
(58, 'Sancocho'),
(59, 'Pie de manzana'),
(61, 'Sancocho'),
(62, 'Sancocho'),
(63, 'Macarrones'),
(64, 'Pesa de nance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentariosugerencia`
--
ALTER TABLE `comentariosugerencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `combos`
--
ALTER TABLE `combos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comentariosugerencia`
--
ALTER TABLE `comentariosugerencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
