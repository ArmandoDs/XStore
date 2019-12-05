-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2019 às 17:17
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaics`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(10, 'RPG'),
(9, 'Ação'),
(8, 'Corrida'),
(11, 'FPS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(700) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `requisitos_min` varchar(599) NOT NULL,
  `requisitos_inidicados` varchar(599) NOT NULL,
  `preco` double NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `numero_vendas` int(11) NOT NULL,
  `foto` blob DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `deslikes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `titulo`, `descricao`, `id_categoria`, `requisitos_min`, `requisitos_inidicados`, `preco`, `id_usuario`, `numero_vendas`, `foto`, `likes`, `deslikes`) VALUES
(23, 'Pubg', 'adwaw', 10, 'adawda', 'dawdwad', 105, 19, 0, 0x507562672e6a7067, 0, 0),
(24, 'The witcher 2', 'adwdawd', 10, 'dawda', 'dawd', 2323, 19, 0, 0x546865207769746368657220322e6a7067, 0, 0),
(20, 'The witcher 3', 'GOTY 2015', 10, 'dawdawda', 'dawdwadwad', 233, 19, 0, 0x546865207769746368657220332e6a7067, 0, 0),
(22, 'Call of Duty Mobile', 'dawdawdaw', 10, 'adawdawd', 'adwdawdawd', 233, 19, 0, 0x43616c6c206f662044757479204d6f62696c652e6a7067, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `carteira` double DEFAULT NULL,
  `foto` blob NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `carteira`, `foto`, `tipo`) VALUES
(18, 'diogo', 'ds', '522748524ad010358705b6852b81be4c', 2451, 0x64696f676f6a666966, 1),
(19, 'Rockstar', 'r', '4b43b0aee35624cd95b910189b3dc231', 0, 0x526f636b737461722e6a7067, 2),
(20, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0x61646d696e2e6a7067, 1911),
(21, 'rau', 'rau', '5787de089122c2f70dccedcf50daeab9', 134, 0x7261752e6a7067, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
