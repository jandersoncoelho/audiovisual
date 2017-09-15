-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Set-2017 às 17:35
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
  `responsavel_id` int(11),
  `periodoEmail` int(11),
  `mensagemEmail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos_acessorios`
--

CREATE TABLE `emprestimos_acessorios` (
  `emprestimo_id` int(11) NOT NULL,
  `acessorio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_acessorios`
--

CREATE TABLE `equipamentos_acessorios` (
  `equipamento_id` int(11) NOT NULL,
  `acessorio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(20170511184254, 'RemoveNomeResponsavelFromEmprestimos', '2017-05-11 21:42:57', '2017-05-11 21:42:58', 0),
(20170531231155, 'AddPeriodoEmailToEmprestimos', '2017-06-01 02:14:24', '2017-06-01 02:14:25', 0),
(20170531231355, 'AddMensagemEmailToEmprestimos', '2017-06-01 02:14:25', '2017-06-01 02:14:26', 0);

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
(32, 'Admin', 'adm@mail.com', '$2y$10$0s2bkqSVr/RxcPQKS/ADOOl7.o5LNfGTF9q7R7e6OmHW2ygj0AUNW', 'Administrador', '2017-09-01 15:31:29', '2017-09-01 15:31:29');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
