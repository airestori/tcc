-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Mar-2023 às 21:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mecanica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_protocolo` bigint(20) NOT NULL,
  `horário` varchar(80) NOT NULL,
  `data` varchar(80) NOT NULL,
  `cod_servico` bigint(20) NOT NULL,
  `cnpj` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(250) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `cod_protocolo` bigint(20) NOT NULL,
  `cod_veiculo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oficina`
--

CREATE TABLE `oficina` (
  `Nome` varchar(200) NOT NULL,
  `Endereço` varchar(250) NOT NULL,
  `cnpj` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `qual_servico` varchar(250) NOT NULL,
  `cod_servico` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_pecas`
--

CREATE TABLE `tabela_pecas` (
  `tipo` varchar(200) NOT NULL,
  `id_peca` bigint(250) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cod_servico` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `modelo_carro` varchar(250) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `placa` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `cod_veiculo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`cod_protocolo`),
  ADD KEY `fk_cnpj` (`cnpj`),
  ADD KEY `fk_servico` (`cod_servico`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fk_codprotocolo` (`cod_protocolo`),
  ADD KEY `fk_veiculo` (`cod_veiculo`);

--
-- Índices para tabela `oficina`
--
ALTER TABLE `oficina`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`);

--
-- Índices para tabela `tabela_pecas`
--
ALTER TABLE `tabela_pecas`
  ADD PRIMARY KEY (`id_peca`),
  ADD KEY `fk_codpeca` (`cod_servico`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`cod_veiculo`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `fk_cnpj` FOREIGN KEY (`cnpj`) REFERENCES `oficina` (`cnpj`),
  ADD CONSTRAINT `fk_servico` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_codprotocolo` FOREIGN KEY (`cod_protocolo`) REFERENCES `atendimento` (`cod_protocolo`),
  ADD CONSTRAINT `fk_veiculo` FOREIGN KEY (`cod_veiculo`) REFERENCES `veiculo` (`cod_veiculo`);

--
-- Limitadores para a tabela `tabela_pecas`
--
ALTER TABLE `tabela_pecas`
  ADD CONSTRAINT `fk_codpeca` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod_servico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
