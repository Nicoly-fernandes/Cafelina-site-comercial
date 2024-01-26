-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 15:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cafelina`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `menu`
--

INSERT INTO `menu` (`id`, `product`, `price`, `img`) VALUES
(1, 'Expresso', 'R$ 6', 'https://uploaddeimagens.com.br/images/004/677/418/full/menu-icon-1a.png?1701266730 '),
(2, 'Americano', 'R$ 8', 'https://uploaddeimagens.com.br/images/004/677/297/full/menu-icon-1b.png?1701261267'),
(3, 'Cappuccino', 'R$ 12', 'https://uploaddeimagens.com.br/images/004/677/300/full/menu-icon-1c.png?1701261331'),
(4, 'Latte', 'R$ 8', 'https://uploaddeimagens.com.br/images/004/677/301/full/menu-icon-1d.png?1701261358'),
(5, 'Pão de Queijo', 'R$ 10', 'https://uploaddeimagens.com.br/images/004/677/306/full/menu-icon-2a.png?1701261413'),
(6, 'Pretzel', 'R$ 9', 'https://uploaddeimagens.com.br/images/004/677/307/full/menu-icon-2b.png?1701261441'),
(7, 'Cupcake', 'R$ 7', 'https://uploaddeimagens.com.br/images/004/677/309/full/menu-icon-2c.png?1701261462'),
(8, 'Croissant', 'R$ 12', 'https://uploaddeimagens.com.br/images/004/677/310/full/menu-icon-2d.png?1701261480');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
