-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2023 às 17:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_gerenciamentodecliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `num` varchar(45) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `cep`, `cidade`, `estado`, `logradouro`, `bairro`, `num`, `usuario_id`) VALUES
(7, '13486-137', 'Limeira', 'SP', 'Avenida', 'Jardim Rossi', '205', 1),
(8, '13486-137', 'Limeira', 'SP', 'a', 'Jardim Rossi', '6', 1),
(9, '13486-137', 'Limeira', 'SP', 'Rua Américo Graciatti', 'Jardim Rossi', '213', 1),
(10, '02040-070', 'São Paulo', 'SP', 'Rua Barra de São João', 'Jardim São Paulo(Zona Norte)', '2012', 1),
(11, '02040-070', 'São Paulo', 'SP', 'Rua Barra de São João', 'Jardim São Paulo(Zona Norte)', '2012', 1),
(12, '01010-904', 'São Paulo', 'SP', 'Rua São Bento', 'Centro', '546', 1),
(13, '02040-070', 'São Paulo', 'SP', 'Rua Barra de São João', 'Jardim São Paulo(Zona Norte)', '210', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data` varchar(10) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `num` varchar(5) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `cpf`, `rg`, `telefone`, `data`, `cep`, `cidade`, `estado`, `logradouro`, `bairro`, `num`, `usuario_id`) VALUES
(1, 'italo1', '819332241', 'italo@gmail.com1', '666.666.666-62', '66.666.662', '(19) 98227-7701', '11/11/1111', '13486-136', 'Limeira', 'SP', 'Rua Vitorio Ceneviva', 'Jardim Rossi', '5051', 0),
(64, 'Neide', '1', 'neide@gmail.com', '111.111.111-11', '11.111.111', '(11) 11111-1111', '11/11/1111', '13486-137', 'Limeira', 'SP', 'Rua Américo Graciatti', 'Jardim Rossi', '2013', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
