-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2017 às 16:12
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audiovisual`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

CREATE TABLE `acessorios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessorios`
--

INSERT INTO `acessorios` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Mouse', '2017-04-14 01:44:12', '2017-04-14 01:44:12'),
(2, 'Teclado', '2017-04-14 01:44:26', '2017-04-14 01:44:26'),
(3, 'Cabo RGB', '2017-04-17 18:32:48', '2017-04-17 18:32:48'),
(4, 'Cabo VGA', '2017-04-17 18:32:58', '2017-04-17 18:32:58'),
(5, 'Carregador', '2017-04-17 18:33:09', '2017-04-17 18:33:09'),
(6, 'Caixa', '2017-04-17 18:33:44', '2017-04-17 18:33:44'),
(7, 'Cabo A/V', '2017-04-17 18:33:56', '2017-04-17 18:33:56'),
(8, 'Cabo X', '2017-05-04 13:28:11', '2017-05-04 13:28:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `nomeDevolveu` varchar(255) DEFAULT NULL,
  `dataRetirada` datetime DEFAULT NULL,
  `dataDevolucao` datetime DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `nomeAtendente` varchar(255) NOT NULL,
  `numeroPatrimonio` varchar(255) NOT NULL,
  `nomeSolicitante` varchar(255) NOT NULL,
  `nomeResponsavel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `nomeDevolveu`, `dataRetirada`, `dataDevolucao`, `situacao`, `nomeAtendente`, `numeroPatrimonio`, `nomeSolicitante`, `nomeResponsavel`) VALUES
(78, 'José Geraldo', '2017-05-03 10:28:00', '2017-05-04 09:32:00', 'Devolvido', 'Breno', '409098', 'João', 'Breno Parreira'),
(79, 'Maria Joana', '2017-05-03 10:39:00', '2017-05-04 09:17:00', 'Devolvido', 'Breno', '545466', 'Janderson', 'Breno Parreira'),
(80, 'Alberto', '2017-05-03 10:39:00', '2017-05-03 10:39:00', 'Devolvido', 'Breno', '54545454', 'Rodrigo', 'Breno'),
(81, 'Maria', '2017-05-03 10:51:00', '2017-05-03 10:51:00', 'Devolvido', 'Breno', '323232', 'João', 'Breno'),
(82, 'Marcos', '2017-05-03 16:49:00', '2017-05-03 19:56:00', 'Devolvido', 'Breno', '323232', 'Breno Parreira Gonçalves', 'Breno Parreira'),
(83, 'Marcos', '2017-05-03 19:47:00', '2017-05-04 09:30:00', 'Devolvido', 'Breno Parreira', '2121212', 'Delfina', 'Breno Parreira'),
(84, 'Antônio', '2017-05-03 20:00:00', '2017-05-04 09:22:00', 'Devolvido', 'Breno Parreira', '43434211', 'Fernanda', 'Breno Parreira'),
(85, 'João', '2017-05-03 20:10:00', '2017-05-03 20:10:00', 'Devolvido', 'Breno Parreira', '34345345', 'Delfina', 'Breno Parreira'),
(86, 'José', '2017-05-04 07:45:00', '2017-05-04 09:18:00', 'Devolvido', 'Breno Parreira', '45345322', 'Kurt Cobain', 'Breno Parreira'),
(88, NULL, '2017-05-04 11:11:00', NULL, 'Pendente', 'Fulano', '2123211', 'Zeca Pagodinho', ''),
(89, NULL, '2017-05-04 11:11:00', NULL, 'Pendente', 'Fulano', '565776876', 'Cristiano Ronaldo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos_acessorios`
--

CREATE TABLE `emprestimos_acessorios` (
  `emprestimo_id` int(11) NOT NULL,
  `acessorio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimos_acessorios`
--

INSERT INTO `emprestimos_acessorios` (`emprestimo_id`, `acessorio_id`) VALUES
(78, 2),
(78, 3),
(79, 1),
(80, 5),
(82, 2),
(83, 3),
(84, 2),
(84, 3),
(84, 4),
(85, 1),
(86, 4),
(86, 5),
(88, 1),
(89, 3),
(89, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `numeroPatrimonio` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `nome`, `numeroPatrimonio`, `created`, `modified`) VALUES
(1, 'Notebook', '40203012', '2017-04-14 14:03:37', '2017-04-14 14:05:44'),
(2, 'Trambolho', '23090909', '2017-04-14 14:04:30', '2017-04-14 14:04:30'),
(5, 'Data Show', '21111223', '2017-05-04 11:42:45', '2017-05-04 11:42:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_acessorios`
--

CREATE TABLE `equipamentos_acessorios` (
  `equipamento_id` int(11) NOT NULL,
  `acessorio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos_acessorios`
--

INSERT INTO `equipamentos_acessorios` (`equipamento_id`, `acessorio_id`) VALUES
(5, 3),
(5, 5),
(5, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` int(11) NOT NULL,
  `idEmprestimo` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `providenciaTomada` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `idEmprestimo`, `descricao`, `providenciaTomada`, `created`, `modified`) VALUES
(1, 84, 'Faltou um teclado', 'Chamar a Polícia', '2017-05-03 23:05:13', '2017-05-03 23:05:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170425185404, 'Initial', '2017-04-25 21:54:04', '2017-04-25 21:54:04', 0),
(20170425185511, 'CreateOcorrencias', '2017-04-25 22:04:48', '2017-04-25 22:04:49', 0),
(20170425195903, 'AddNomeAtendenteToEmprestimos', '2017-04-25 23:01:34', '2017-04-25 23:01:35', 0),
(20170425200118, 'RemoveIdSolicitanteFromEmprestimos', '2017-04-25 23:01:35', '2017-04-25 23:01:35', 0),
(20170425203511, 'RemoveIdEquipamentoFromEmprestimos', '2017-04-25 23:37:35', '2017-04-25 23:37:35', 0),
(20170425203718, 'AddNumeroPatrimonioToEmprestimos', '2017-04-25 23:37:35', '2017-04-25 23:37:36', 0),
(20170425205726, 'AddNomeSolicitanteToEmprestimos', '2017-04-25 23:57:31', '2017-04-25 23:57:32', 0),
(20170426103457, 'AddNomeResponsavelToEmprestimos', '2017-04-26 13:41:00', '2017-04-26 13:41:01', 0),
(20170426104319, 'RemoveIdAtendenteFromEmprestimos', '2017-04-26 13:43:55', '2017-04-26 13:43:56', 0),
(20170426104349, 'RemoveOcorrenciaFromEmprestimos', '2017-04-26 13:43:56', '2017-04-26 13:43:56', 0),
(20170503215017, 'CreateSolicitantes', '2017-05-04 00:51:26', '2017-05-04 00:51:26', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitantes`
--

CREATE TABLE `solicitantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` text NOT NULL,
  `matricula` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitantes`
--

INSERT INTO `solicitantes` (`id`, `nome`, `cpf`, `matricula`, `email`, `password`, `created`, `modified`) VALUES
(1, 'Delfina', '09894839342', '323434521', 'delfina@mail.com', '$2y$10$7DapakG7spO8n1WnrrK8t.hs5Mh0ViQJmjkBCNVUzBkhnf0Q9tnMe', '2017-05-03 22:12:38', '2017-05-03 22:39:54'),
(3, 'Fernanda', '0932323203', '434234321', 'fernanda@gmail.com', '$2y$10$Ih30k1P1uyFgLiOkcMry2eQVFsoM1fzimgqit9MiFnF7rF5MtJgZ.', '2017-05-03 22:41:22', '2017-05-03 22:41:22'),
(4, 'Zeca Pagodinho', '23242422111', '3243234', 'zeca@gmail.com', '$2y$10$rIecO2pBhHcBFGQxyCK04OHo1ivkmVOp7nrE/jvG4mexDr2JbPiiG', '2017-05-04 10:43:30', '2017-05-04 10:43:30'),
(5, 'Kurt Cobain', '832618188032', '4319486361', 'kurt@gmail.com', '$2y$10$6eCPAw3Szeqw7P1wCJBXTufv6Y4ggUtIaR67MQBVlnoAY4ndEiMO2', '2017-05-04 10:44:11', '2017-05-04 10:44:11'),
(6, 'Cristiano Ronaldo', '932802421', '324343', 'real@mail.com', '$2y$10$4L2IHU2KZesgrhmjwebS8.WVPkEAbes/UJa66AZlzioRFWUlsOOmu', '2017-05-04 10:45:44', '2017-05-04 10:45:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `password`, `tipo`, `created`, `modified`) VALUES
(9, 'Breno Parreira', 'breno.parreira@live.com', '$2y$10$7UG40dOn7Hw5BHEFZ4C4U.0OM4PIn9.yDSgxncrkni4Bj0grGLR2q', 'Administrador', '2017-05-03 22:23:45', '2017-05-03 22:23:45'),
(10, 'Janderson', 'janderson@iftm.edu.br', '$2y$10$mJL/6DCImSvLQLB6bZO2nupxHapiZMyV8B71nEXgdRITVok7tU3SW', 'Administrador', '2017-05-03 22:24:19', '2017-05-03 22:24:19'),
(11, 'Rodrigo', 'rodrigo@gmail.com', '$2y$10$/hlXopnsEEYiK7LHs4VMQuIbWQv9.WedWPkFfSTwv84wb5.SZ8sgm', 'Administrador', '2017-05-03 22:24:43', '2017-05-03 22:24:43'),
(12, 'Márcio', 'marcio@gmail.com', '$2y$10$wk3Y2WDLhNQDwCV52OOBGuyrjz.aLXqL3tXYyMMegVpxcOKUbxhca', 'Atendente', '2017-05-03 22:25:15', '2017-05-03 22:25:15'),
(13, 'Marcelo', 'marcelo@gmail.com', '$2y$10$aAAeB/hxjiQEOoGtb8gJoeYTTZ22Ed32vslazPk.Ayq1SwFSx344C', 'Atendente', '2017-05-04 10:41:40', '2017-05-04 10:41:40'),
(14, 'Fulano', 'fulano@gmail.com', '$2y$10$RQycIWoOqwt2EGs4gYYEz.wTEESG4ljEklCmXxdqci9YqSEt9CaU6', 'Atendente', '2017-05-04 12:48:37', '2017-05-04 12:48:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessorios`
--
ALTER TABLE `acessorios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprestimos_acessorios`
--
ALTER TABLE `emprestimos_acessorios`
  ADD PRIMARY KEY (`emprestimo_id`,`acessorio_id`),
  ADD KEY `acessorio_id2` (`acessorio_id`,`emprestimo_id`);

--
-- Indexes for table `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numeroPatrimonio` (`numeroPatrimonio`);

--
-- Indexes for table `equipamentos_acessorios`
--
ALTER TABLE `equipamentos_acessorios`
  ADD PRIMARY KEY (`equipamento_id`,`acessorio_id`),
  ADD KEY `acessorio_idx` (`acessorio_id`,`equipamento_id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmprestimo` (`idEmprestimo`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessorios`
--
ALTER TABLE `acessorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `emprestimos_acessorios`
--
ALTER TABLE `emprestimos_acessorios`
  ADD CONSTRAINT `acessorio2_key` FOREIGN KEY (`acessorio_id`) REFERENCES `acessorios` (`id`),
  ADD CONSTRAINT `emprestimo2_key` FOREIGN KEY (`emprestimo_id`) REFERENCES `emprestimos` (`id`);

--
-- Limitadores para a tabela `equipamentos_acessorios`
--
ALTER TABLE `equipamentos_acessorios`
  ADD CONSTRAINT `acessorio_key` FOREIGN KEY (`acessorio_id`) REFERENCES `acessorios` (`id`),
  ADD CONSTRAINT `equipamento_key` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`);

--
-- Limitadores para a tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD CONSTRAINT `ocorrencias_ibfk_1` FOREIGN KEY (`idEmprestimo`) REFERENCES `emprestimos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
