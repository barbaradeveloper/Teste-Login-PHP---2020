-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2020 às 04:11
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--
CREATE DATABASE IF NOT EXISTS `pet_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pet_shop`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenservicos`
--

CREATE TABLE `agenservicos` (
  `responsavel` varchar(20) DEFAULT NULL,
  `animal` varchar(20) DEFAULT NULL,
  `especiel` varchar(15) DEFAULT NULL,
  `raca` varchar(15) DEFAULT NULL,
  `data` char(10) DEFAULT NULL,
  `servico` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenservicos`
--

INSERT INTO `agenservicos` (`responsavel`, `animal`, `especiel`, `raca`, `data`, `servico`) VALUES
('Marcos', 'Cão', '...', 'Pincher', '21/10/2019', 'Pelagem'),
('', 'CADELA', '', '', '20/10/2018', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastropets`
--

CREATE TABLE `cadastropets` (
  `codigo` int(11) DEFAULT NULL,
  `raca` varchar(20) DEFAULT NULL,
  `pelagem` varchar(20) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `porte` varchar(20) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `apelido` varchar(10) DEFAULT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `pai` varchar(20) DEFAULT NULL,
  `mae` varchar(20) DEFAULT NULL,
  `opiniao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastropets`
--

INSERT INTO `cadastropets` (`codigo`, `raca`, `pelagem`, `cor`, `porte`, `sexo`, `apelido`, `nome`, `pai`, `mae`, `opiniao`) VALUES
(1, 'Mestiço', 'Grande', 'Preta', 'Médio', 'M', 'Tininho', 'Biscoito', 'Kempper', 'Larissa', '...'),
(2, '', 'Grande', 'Preta', 'MÃ©dio', 'F', 'Tininho', 'kAREN', 'Kempper', '', ''),
(2, '', 'Grande', 'Preta', 'MÃ©dio', 'F', 'Tininho', 'kAREN', 'Kempper', '', ''),
(100, '', 'Grande', 'branca', 'MÃ©dio', 'M', 'NANA', 'NANINA', 'Kempper', '', ''),
(0, '', 'Grande', 'Preta', 'MÃ©dio', 'F', 'NANA', 'Sarah', 'tyt', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(1, '', 'Baixa', 'Preto', 'MÃ©dio', 'F', 'Pituquinha', 'Pituca', 'Ivan', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(3, '', 'grossa', 'azul', 'MÃ©dio', 'M', 'chuchu', 'edy', 'lucas', '', ''),
(5, '', 'Baixa', 'azul', 'MÃ©dio', 'F', 'chuchu', 'edy', 'Ivan', '', ''),
(6, '', 'jjj', 'eeee', 'lll', 'M', 'gggg', 'u', 'g', '', ''),
(0, '', '', '', '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
