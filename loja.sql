-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Set-2022 às 01:46
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--
CREATE DATABASE loja;
USE loja;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `numeroProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `catProduto` varchar(100) NOT NULL,
  `fornProduto` varchar(100) NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `numeroProduto`, `nomeProduto`, `qtdProduto`, `catProduto`, `fornProduto`) VALUES
(1, 6, 'Mouse Multitec', 5, 'Periféricos', 'Microsoft'),
(2, 13, 'Processador Intel i7', 5, 'Hardware', 'Lenovo'),
(3, 467654, 'Monitor 24 Polegadas', 7, 'PerifÃ©ricos', 'Multilaiser'),
(4, -10, 'Microfone', 3, 'PerifÃ©ricos', 'Aplee'),
(5, 7, 'Teste', 9, 'PerifÃ©ricos', 'Microsoft');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
