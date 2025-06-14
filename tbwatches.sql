-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2025 às 06:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `systemwatch`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbwatches`
--

CREATE TABLE `tbwatches` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `rating` int(11) NOT NULL,
  `tittleType` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbwatches`
--

INSERT INTO `tbwatches` (`id`, `title`, `genero`, `description`, `rating`, `tittleType`, `id_user`) VALUES
(13, 'teste', 'acao', 'teste', 1, 'serie', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbwatches`
--
ALTER TABLE `tbwatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_watches` (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbwatches`
--
ALTER TABLE `tbwatches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbwatches`
--
ALTER TABLE `tbwatches`
  ADD CONSTRAINT `user_watches` FOREIGN KEY (`id_user`) REFERENCES `tbusers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
