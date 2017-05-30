-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2017 às 03:07
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
(5, 'Carregador', '2017-04-17 18:33:09', '2017-04-17 18:33:09'),
(6, 'Caixa', '2017-04-17 18:33:44', '2017-04-17 18:33:44'),
(7, 'Cabo A/V', '2017-04-17 18:33:56', '2017-04-17 18:33:56'),
(8, 'Cabo VGA', '2017-05-30 00:18:59', '2017-05-30 00:18:59'),
(9, 'Cabo HDMI', '2017-05-30 00:19:17', '2017-05-30 00:19:17');

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
  `equipamento_id` int(11) NOT NULL,
  `atendente_id` int(11) NOT NULL,
  `solicitante_id` int(11) NOT NULL,
  `responsavel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `nomeDevolveu`, `dataRetirada`, `dataDevolucao`, `situacao`, `equipamento_id`, `atendente_id`, `solicitante_id`, `responsavel_id`) VALUES
(366, NULL, '2017-05-27 15:03:00', NULL, 'Pendente', 7, 15, 1, 0),
(367, NULL, '2017-05-27 15:05:00', NULL, 'Pendente', 6, 15, 4, 0),
(368, 'Rogério', '2017-05-27 15:05:00', '2017-05-27 15:35:00', 'Devolvido', 8, 15, 6, 15),
(369, 'Fernanda', '2017-05-27 15:05:00', '2017-05-27 15:36:00', 'Devolvido', 12, 15, 3, 15),
(370, NULL, '2017-05-27 15:06:00', NULL, 'Pendente', 13, 15, 9, 0),
(372, 'Romário', '2017-05-27 15:10:00', '2017-05-27 15:12:00', 'Devolvido', 9, 15, 8, 15),
(376, 'Breno', '2017-05-27 15:43:00', '2017-05-27 15:43:00', 'Devolvido', 7, 15, 7, 15),
(378, 'Breno', '2017-05-27 16:04:00', '2017-05-29 20:33:00', 'Devolvido', 13, 15, 7, 15),
(380, 'Breno', '2017-05-27 16:06:00', '2017-05-29 20:32:00', 'Devolvido', 13, 15, 7, 15),
(381, 'Breno', '2017-05-27 16:06:00', '2017-05-29 20:32:00', 'Devolvido', 13, 15, 7, 15),
(385, 'Breno', '2017-05-29 19:56:00', '2017-05-29 20:33:00', 'Devolvido', 9, 15, 7, 15),
(386, 'Breno', '2017-05-29 19:57:00', '2017-05-29 20:32:00', 'Devolvido', 7, 15, 7, 15),
(387, 'Breno', '2017-05-29 20:23:00', '2017-05-29 20:33:00', 'Devolvido', 8, 15, 7, 15),
(388, 'Breno', '2017-05-29 20:29:00', '2017-05-29 20:29:00', 'Devolvido', 6, 15, 7, 15),
(389, 'Breno', '2017-05-29 20:31:00', '2017-05-29 20:33:00', 'Devolvido', 7, 15, 7, 15),
(391, 'Breno', '2017-05-29 21:19:00', '2017-05-29 21:44:00', 'Devolvido', 8, 15, 7, 15),
(392, NULL, '2017-05-29 21:23:00', NULL, 'Pendente', 8, 15, 7, 0),
(395, 'Breno', '2017-05-29 21:31:00', '2017-05-29 21:33:00', 'Devolvido', 8, 15, 7, 15),
(396, 'Breno', '2017-05-29 21:33:00', '2017-05-29 21:34:00', 'Devolvido', 7, 15, 7, 15),
(397, NULL, '2017-05-29 21:47:00', NULL, 'Pendente', 10, 15, 7, 0);

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
(366, 1),
(366, 2),
(366, 6),
(367, 6),
(368, 5),
(368, 6),
(368, 7),
(369, 5),
(369, 6),
(370, 2),
(385, 1),
(385, 2),
(391, 2),
(391, 5),
(392, 1),
(395, 1),
(395, 2),
(396, 1),
(397, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `numeroPatrimonio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `nome`, `created`, `modified`, `numeroPatrimonio`) VALUES
(6, 'Tablet', '2017-05-09 12:58:45', '2017-05-09 12:58:45', '98765432'),
(7, 'Notebook', '2017-05-09 14:15:41', '2017-05-09 14:15:41', '4098093'),
(8, 'Data Show', '2017-05-09 14:16:01', '2017-05-09 14:16:01', '40999999'),
(9, 'Trambolho', '2017-05-09 14:16:25', '2017-05-09 14:16:25', '40222222'),
(10, 'NetBook', '2017-05-09 14:16:57', '2017-05-09 14:16:57', '4088888'),
(11, 'Filmadora', '2017-05-09 14:17:12', '2017-05-09 14:17:12', '4055555'),
(12, 'Leitor de Código de Barras', '2017-05-09 14:17:37', '2017-05-09 14:17:37', '40444444'),
(13, 'Nenhum Equipamento', '2017-05-19 11:47:56', '2017-05-19 11:47:56', '-');

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
(7, 1),
(7, 2),
(8, 5),
(8, 6),
(9, 5),
(10, 2),
(10, 5),
(10, 6),
(11, 6),
(12, 6);

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
(8, 391, 'Faltou um item', 'Chamar a polícia', '2017-05-30 00:45:40', '2017-05-30 00:45:40');

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
(20170503215017, 'CreateSolicitantes', '2017-05-04 00:51:26', '2017-05-04 00:51:26', 0),
(20170505135423, 'AddIdEquipamentoToEmprestimos', '2017-05-05 16:55:10', '2017-05-05 16:55:11', 0),
(20170505154139, 'AddEquipamentoIdoToEmprestimos', '2017-05-05 18:41:51', '2017-05-05 18:41:51', 0),
(20170509111944, 'AddEquipamentoIdToEmprestimos', '2017-05-09 14:22:16', '2017-05-09 14:22:17', 0),
(20170509112805, 'AddEquipamentoIdIdexToEmprestimos', '2017-05-09 15:12:01', '2017-05-09 15:12:03', 0),
(20170509114544, 'RemoveNumeroPatrimonioFromEquipamentos', '2017-05-09 14:45:56', '2017-05-09 14:45:56', 0),
(20170509114739, 'AddNumeroPatrimonioToEquipamentos', '2017-05-09 14:47:51', '2017-05-09 14:47:52', 0),
(20170509133554, 'AddAtendenteIdIndexToEmprestimos', '2017-05-09 16:39:01', '2017-05-09 16:39:03', 0),
(20170511151604, 'AddAtendenteIdToEmprestimos', '2017-05-11 18:17:14', '2017-05-11 18:17:15', 0),
(20170511153655, 'AddSolicitanteIdToEmprestimos', '2017-05-11 18:37:20', '2017-05-11 18:37:21', 0),
(20170511155221, 'RemoveNomeSolicitanteFromEmprestimos', '2017-05-11 18:52:36', '2017-05-11 18:52:37', 0),
(20170511155322, 'RemoveNomeAtendenteFromEmprestimos', '2017-05-11 18:53:28', '2017-05-11 18:53:29', 0),
(20170511155613, 'RemoveNumeroPatrimonioFromEmprestimos', '2017-05-11 18:56:22', '2017-05-11 18:56:22', 0),
(20170511160502, 'AddResponsavelIdIndexToEmprestimos', '2017-05-11 19:05:22', '2017-05-11 19:05:23', 0),
(20170511161850, 'CreateEmprestimosUsuarios', '2017-05-11 19:19:33', '2017-05-11 19:19:33', 0),
(20170511184254, 'RemoveNomeResponsavelFromEmprestimos', '2017-05-11 21:42:57', '2017-05-11 21:42:58', 0);

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
(1, 'Delfina', '09894839342', '323434521', 'delfina@maillll111l.com', '$2y$10$7DapakG7spO8n1WnrrK8t.hs5Mh0ViQJmjkBCNVUzBkhnf0Q9tnMe', '2017-05-03 22:12:38', '2017-05-16 21:07:30'),
(3, 'Fernanda', '0932323203', '434234321', 'fernanda@gmail1121.com', '$2y$10$Ih30k1P1uyFgLiOkcMry2eQVFsoM1fzimgqit9MiFnF7rF5MtJgZ.', '2017-05-03 22:41:22', '2017-05-03 22:41:22'),
(5, 'Kurt Cobain', '832618188032', '4319486361', 'kurt@gmail2121.com', '$2y$10$6eCPAw3Szeqw7P1wCJBXTufv6Y4ggUtIaR67MQBVlnoAY4ndEiMO2', '2017-05-04 10:44:11', '2017-05-04 10:44:11'),
(6, 'Cristiano Ronaldo', '932802421', '324343', 'real2121@mail2121.com', '$2y$10$4L2IHU2KZesgrhmjwebS8.WVPkEAbes/UJa66AZlzioRFWUlsOOmu', '2017-05-04 10:45:44', '2017-05-04 10:45:44'),
(7, 'Breno', '6564543424', '323232', 'breno140494@gmail.com', '$2y$10$myys4Utl/Xo8HEmkEaCICulpWYmPKW/f.j4CYpxxAjpkiDuKJUxJG', '2017-05-08 16:59:15', '2017-05-08 16:59:15'),
(9, 'Afonso', '0860584933', '323455', 'afonso@gmail3232.com', '$2y$10$NIuJDyOX3oOHROWsZSsZF.gwQqv3MbZ2AXdpZBPOkZA9WBOjPblpK', '2017-05-10 14:11:57', '2017-05-10 14:11:57'),
(10, 'Marcos Silva', '08382327732', '3432122', 'marcosilva@gmail2322.com', '$2y$10$AN/0tobP7B3pu707fBegYuET8a3ruxNdpV2ms21/asy8mGWrbnmk.', '2017-05-10 14:13:02', '2017-05-10 14:13:02'),
(11, 'Adriano Gois', '9889898989', '233232', 'adriano.vurmo@gmail2123.com', '$2y$10$mLfmmuOZujNUm/.HhVF/o.HWlYgfviPlZzijnsvRDYvRB/8OAXtEG', '2017-05-17 01:09:47', '2017-05-17 01:09:47'),
(12, 'Zeca Pagodinho', '3223232', '2323221', 'zeca@gmail3454.com', '$2y$10$6yyBtbFyKmHQz/VOB466CuVgfNai7dhwV/7Tx15iyMyvPY7PAtDkG', '2017-05-29 23:46:50', '2017-05-29 23:46:50');

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
(15, 'Breno Parreira', 'breno.parreira@live.com', '$2y$10$TD2QomfLh1b4L4HuAJfH8ujYkD5CQtkUTCkH0mxZF12l5VxhGfYOy', 'Administrador', '2017-05-09 14:02:54', '2017-05-09 14:02:54'),
(16, 'Rodrigo', 'rodrigo@gmail.com', '$2y$10$GXKzm1ty7ZsjxTCU9l3PzuIXb1K22srDbtSAhuG2vDQaUUp2o/CPG', 'Administrador', '2017-05-09 14:03:16', '2017-05-09 14:03:16'),
(17, 'Márcio', 'marcio@gmail.com', '$2y$10$MITx2kkKznWlcwaZ1WhzaOzOoToUwQk2MIS3ccWl4NflEh7lxah8K', 'Atendente', '2017-05-09 14:03:30', '2017-05-09 14:03:30'),
(19, 'Joana', 'joana@gmail.com', '$2y$10$mrDS1taDuYOAxGVENu4ylOe9dVqEyQnKFSrW/USw1fQQcLA6QqpMy', 'Atendente', '2017-05-09 23:01:00', '2017-05-09 23:01:00'),
(20, 'Lucas', 'lucas@gmail.com', '$2y$10$tDjvdXO283cICi4gRDslSufLmopBfppe.REinark6Jd6YxP9BFJ3G', 'Administrador', '2017-05-10 14:06:02', '2017-05-10 14:06:02'),
(28, 'Janderson', 'janderson@iftm.edu.br', '$2y$10$gc5RJyZGl6gCeAP5nsg9TO3PnPe/Ynz5yY2PoJzwINFZOp/VcZAZ6', 'Administrador', '2017-05-11 14:00:02', '2017-05-11 14:00:02'),
(29, 'Marcos James', 'marcosjames95@gmail.com', '$2y$10$rq1PbLA9gP/N4zARs5gkdOcwoqYTo04umgpDPABcwyCTHiKkB6Rum', 'Atendente', '2017-05-11 23:09:17', '2017-05-11 23:09:17'),
(30, 'Breno Parreira Gonçalves', 'breno140494@gmail.com', '$2y$10$jiOIjklUq/17vMhJ/o.94eWrHv/EDhS.YBtfzzcptyRdbqnqsO0O2', 'Atendente', '2017-05-11 23:21:16', '2017-05-11 23:21:16');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `BY_EQUIPAMENTO_ID` (`equipamento_id`),
  ADD KEY `BY_ATENDENTE_ID` (`atendente_id`),
  ADD KEY `BY_SOLICITANTE_ID` (`solicitante_id`),
  ADD KEY `BY_RESPONSAVEL_ID` (`responsavel_id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;
--
-- AUTO_INCREMENT for table `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
