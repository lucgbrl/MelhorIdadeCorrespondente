-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2018 às 15:18
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bancos`
--

CREATE TABLE `bancos` (
  `id_banco` int(11) NOT NULL,
  `nome_banco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bancos`
--

INSERT INTO `bancos` (`id_banco`, `nome_banco`) VALUES
(1, 'PAN'),
(2, 'BMG'),
(3, 'Bradesco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficios`
--

CREATE TABLE `beneficios` (
  `id_beneficio` int(11) NOT NULL,
  `nome_beneficio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `beneficios`
--

INSERT INTO `beneficios` (`id_beneficio`, `nome_beneficio`) VALUES
(1, 'INSS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` varchar(255) DEFAULT NULL,
  `cpf_cli` varchar(12) DEFAULT NULL,
  `rg_cli` varchar(12) DEFAULT NULL,
  `conta_cli` varchar(32) DEFAULT NULL,
  `id_banco` int(11) NOT NULL,
  `id_beneficio` int(11) DEFAULT NULL,
  `id_loja` int(11) DEFAULT NULL,
  `id_add` int(11) DEFAULT NULL,
  `fone_cli` varchar(14) DEFAULT NULL,
  `mail_cli` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nome_cli`, `cpf_cli`, `rg_cli`, `conta_cli`, `id_banco`, `id_beneficio`, `id_loja`, `id_add`, `fone_cli`, `mail_cli`) VALUES
(1, 'Gabriel Sales Reis', '067', '2006', '345', 1, 1, 1, 1, '8811', '@user');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` int(11) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `valor_contrato` decimal(10,0) DEFAULT NULL,
  `valor_aprovado` decimal(10,0) DEFAULT NULL,
  `valor_parcela` decimal(10,0) DEFAULT NULL,
  `id_fun` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `id_loja` int(11) DEFAULT NULL,
  `id_beneficio` int(11) DEFAULT NULL,
  `id_promotora` int(11) DEFAULT NULL,
  `id_parcela` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `id_cli`, `valor_contrato`, `valor_aprovado`, `valor_parcela`, `id_fun`, `id_banco`, `id_loja`, `id_beneficio`, `id_promotora`, `id_parcela`) VALUES
(1, 1, '2700', '2500', NULL, 1, 3, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_add` int(11) NOT NULL,
  `uf` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_add`, `uf`, `cidade`, `bairro`, `rua`, `cep`, `numero`) VALUES
(1, 'Ceará', 'Sobral', 'Centro', 'Praça São João', '62010310', 156),
(2, 'Maranguape', '', 'Novo Maranguape', 'Central', '62138-972', 544),
(3, 'Maranguape', '', 'Novo Maranguape', 'Central', '62138-972', 544),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, 'CroatÃ¡', '', 'CENTRO', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 21),
(17, 'CroatÃ¡', '', 'CENTRO', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 21),
(18, 'CroatÃ¡', '', 'CENTRO', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 21),
(19, 'CroatÃ¡', '', 'CENTRO', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 21),
(20, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(21, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(22, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(23, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(24, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(25, 'CEARÃ', '', 'Novo Maranguape', 'RUA CARNAUBAS', '02621-216', 21),
(26, 'CEARÃ', '', 'Novo Maranguape', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 322),
(27, 'CEARÃ', '', 'Novo Maranguape', 'SANTO ANTONIO DOS FERNANDES - SITIO SANTA CRUZ', '62138-972', 322),
(28, '', '', '', '', '', 0),
(29, '', '', '', '', '', 0),
(30, '', '', '', '', '', 0),
(31, '', '', '', '', '', 0),
(32, '', '', '', '', '', 0),
(33, '', '', '', '', '', 0),
(34, '', '', '', '', '', 0),
(35, '', '', '', '', '', 0),
(36, '', '', '', '', '', 0),
(37, '', '', '', '', '', 0),
(38, '', '', '', '', '', 0),
(39, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_fun` int(11) NOT NULL,
  `nome_fun` varchar(255) DEFAULT NULL,
  `cpf_fun` varchar(12) DEFAULT NULL,
  `rg_fun` varchar(12) DEFAULT NULL,
  `conta_fun` varchar(32) DEFAULT NULL,
  `mail_fun` varchar(150) DEFAULT NULL,
  `fone_fun` varchar(14) DEFAULT NULL,
  `lucro_fun` double DEFAULT NULL,
  `nivel_fun` int(11) DEFAULT NULL,
  `id_loja` int(11) DEFAULT NULL,
  `id_add` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_fun`, `nome_fun`, `cpf_fun`, `rg_fun`, `conta_fun`, `mail_fun`, `fone_fun`, `lucro_fun`, `nivel_fun`, `id_loja`, `id_add`) VALUES
(1, 'Alexis', '069', '2009', '35622', '@root', '8810', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojas`
--

CREATE TABLE `lojas` (
  `id_loja` int(11) NOT NULL,
  `id_add` int(11) NOT NULL,
  `nome_loja` varchar(255) DEFAULT NULL,
  `fone_loja` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lojas`
--

INSERT INTO `lojas` (`id_loja`, `id_add`, `nome_loja`, `fone_loja`) VALUES
(1, 1, 'Melhor Idade Correspondente - Centro', '8810');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meuadd`
--

CREATE TABLE `meuadd` (
  `id_add` int(11) NOT NULL,
  `uf` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orgaos`
--

CREATE TABLE `orgaos` (
  `id_orgao` int(11) NOT NULL,
  `nome_orgao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orgaos`
--

INSERT INTO `orgaos` (`id_orgao`, `nome_orgao`) VALUES
(1, 'INSS'),
(2, 'SIAPE'),
(3, 'Empréstimo Pessoal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parcelas`
--

CREATE TABLE `parcelas` (
  `id_parcela` int(11) NOT NULL,
  `num_parcelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parcelas`
--

INSERT INTO `parcelas` (`id_parcela`, `num_parcelas`) VALUES
(1, 12),
(2, 18),
(3, 24),
(4, 36),
(5, 48),
(6, 72);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`) VALUES
(1, 'Novo'),
(2, 'Refin'),
(3, 'Empréstimo Conta de Luz'),
(4, 'Empréstimo Cartão de Crédito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promotoras`
--

CREATE TABLE `promotoras` (
  `id_promotora` int(11) NOT NULL,
  `nome_promotora` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `promotoras`
--

INSERT INTO `promotoras` (`id_promotora`, `nome_promotora`) VALUES
(1, 'BEVICRED'),
(2, 'GFT CREDMAIS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indexes for table `beneficios`
--
ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`id_beneficio`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `id_loja` (`id_loja`),
  ADD KEY `id_add` (`id_add`),
  ADD KEY `id_banco` (`id_banco`),
  ADD KEY `id_beneficio` (`id_beneficio`);

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_fun` (`id_fun`),
  ADD KEY `id_banco` (`id_banco`),
  ADD KEY `id_loja` (`id_loja`),
  ADD KEY `id_beneficio` (`id_beneficio`),
  ADD KEY `id_promotora` (`id_promotora`),
  ADD KEY `id_parcela` (`id_parcela`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_add`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_fun`),
  ADD KEY `id_loja` (`id_loja`),
  ADD KEY `id_add` (`id_add`);

--
-- Indexes for table `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`id_loja`),
  ADD KEY `id_add` (`id_add`);

--
-- Indexes for table `meuadd`
--
ALTER TABLE `meuadd`
  ADD PRIMARY KEY (`id_add`);

--
-- Indexes for table `orgaos`
--
ALTER TABLE `orgaos`
  ADD PRIMARY KEY (`id_orgao`);

--
-- Indexes for table `parcelas`
--
ALTER TABLE `parcelas`
  ADD PRIMARY KEY (`id_parcela`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `promotoras`
--
ALTER TABLE `promotoras`
  ADD PRIMARY KEY (`id_promotora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beneficios`
--
ALTER TABLE `beneficios`
  MODIFY `id_beneficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_fun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lojas`
--
ALTER TABLE `lojas`
  MODIFY `id_loja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meuadd`
--
ALTER TABLE `meuadd`
  MODIFY `id_add` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orgaos`
--
ALTER TABLE `orgaos`
  MODIFY `id_orgao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parcelas`
--
ALTER TABLE `parcelas`
  MODIFY `id_parcela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotoras`
--
ALTER TABLE `promotoras`
  MODIFY `id_promotora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_loja`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`id_add`) REFERENCES `enderecos` (`id_add`),
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id_banco`),
  ADD CONSTRAINT `clientes_ibfk_4` FOREIGN KEY (`id_beneficio`) REFERENCES `beneficios` (`id_beneficio`);

--
-- Limitadores para a tabela `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`),
  ADD CONSTRAINT `contratos_ibfk_2` FOREIGN KEY (`id_fun`) REFERENCES `funcionarios` (`id_fun`),
  ADD CONSTRAINT `contratos_ibfk_3` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id_banco`),
  ADD CONSTRAINT `contratos_ibfk_4` FOREIGN KEY (`id_loja`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `contratos_ibfk_5` FOREIGN KEY (`id_beneficio`) REFERENCES `beneficios` (`id_beneficio`),
  ADD CONSTRAINT `contratos_ibfk_6` FOREIGN KEY (`id_promotora`) REFERENCES `promotoras` (`id_promotora`),
  ADD CONSTRAINT `contratos_ibfk_7` FOREIGN KEY (`id_parcela`) REFERENCES `parcelas` (`id_parcela`);

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`id_loja`) REFERENCES `lojas` (`id_loja`),
  ADD CONSTRAINT `funcionarios_ibfk_2` FOREIGN KEY (`id_add`) REFERENCES `enderecos` (`id_add`);

--
-- Limitadores para a tabela `lojas`
--
ALTER TABLE `lojas`
  ADD CONSTRAINT `lojas_ibfk_1` FOREIGN KEY (`id_add`) REFERENCES `enderecos` (`id_add`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
