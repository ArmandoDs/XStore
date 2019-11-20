-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 11:33
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
(8, 'Corrida');

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
(17, 'The witcher 3', 'Nice rpg', 10, '8gb ram, i3 ,30gb hd', '8gb ram, i3 ,30gb hd', 233, 18, 0, 0x546865207769746368657220332e6a7067, 0, 0),
(18, 'Pubg', 'Nice batlle royale ', 9, '8gb ram, i3 ,30gb hd', '8gb ram, i3 ,30gb hd', 120, 18, 0, 0x507562672e6a7067, 0, 0),
(19, 'Call of Duty Mobile', 'awdfafaw', 10, '8gb ram, i3 ,30gb hd', '8gb ram, i3 ,30gb hd', 34, 18, 0, 0x43616c6c206f662044757479204d6f62696c652e6a7067, 0, 0);

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
  `foto` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `carteira`, `foto`) VALUES
(18, 'diogo', 'ds', '522748524ad010358705b6852b81be4c', 0, 0x64696f676f6a666966);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
