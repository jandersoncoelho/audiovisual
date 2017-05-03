-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2017 às 16:06
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
(7, 'Cabo A/V', '2017-04-17 18:33:56', '2017-04-17 18:33:56');

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
(78, NULL, '2017-05-03 10:28:00', NULL, 'Pendente', 'Breno', '409098', 'João', ''),
(79, NULL, '2017-05-03 10:39:00', NULL, 'Pendente', 'Breno', '545466', 'Janderson', ''),
(80, 'Alberto', '2017-05-03 10:39:00', '2017-05-03 10:39:00', 'Devolvido', 'Breno', '54545454', 'Rodrigo', 'Breno'),
(81, 'Maria', '2017-05-03 10:51:00', '2017-05-03 10:51:00', 'Devolvido', 'Breno', '323232', 'João', 'Breno');

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
(80, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos_usuarios`
--

CREATE TABLE `emprestimos_usuarios` (
  `emprestimo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Data Show', '323232', '2017-04-17 19:13:14', '2017-04-17 19:13:14'),
(4, 'testsasa', '213232', '2017-04-17 19:18:12', '2017-04-17 20:00:05');

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
(4, 1),
(4, 2),
(4, 3),
(4, 5);

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
(20170426104349, 'RemoveOcorrenciaFromEmprestimos', '2017-04-26 13:43:56', '2017-04-26 13:43:56', 0);

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
(1, 'Breno', 'breno.parreira@live.com', '$2y$10$KlS7QTXO1B5Y.lzNU/IlZ.Desrer4qr1oGLVVL5xvuQ3dbsMSu.7K', 'administrador', '2017-04-13 21:29:31', '2017-04-23 05:25:39'),
(2, 'João', 'joao@gmail.com', '$2y$10$oHhjbQuYH4VC.ftxuOTrLOBXdQgQDwG1Gv3ALTWva63Jhktsxkk9G', 'atendente', '2017-04-14 14:20:20', '2017-04-14 14:20:20'),
(3, 'Rodrigo', 'rodrigo@iftm.edu.br', '$2y$10$6O8f1LBbLrhCYJTkc9pgM./yKtt6VMyOcM.llbSy8M042HKOLgRdG', 'atendente', '2017-04-15 17:15:21', '2017-04-15 17:15:21'),
(6, 'Janderson', 'janderson@iftm.edu.br', '$2y$10$9YZv7Ycqu90atVXgQCxTLOpoib/p650DRWuMle/iWUxF7Jp3Z7YAm', 'administrador', '2017-04-18 14:14:01', '2017-04-18 14:14:01'),
(7, 'José', 'jose@mail.com', '$2y$10$lRpf0Aqace8qg28MRHS3E.VHTxazYgTFjVxFUy5r/.3orBdhhqfK.', 'solicitante', '2017-04-26 12:02:31', '2017-04-26 12:02:31');

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
-- Indexes for table `emprestimos_usuarios`
--
ALTER TABLE `emprestimos_usuarios`
  ADD PRIMARY KEY (`emprestimo_id`,`usuario_id`),
  ADD KEY `usuario_id2` (`usuario_id`,`emprestimo_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- Limitadores para a tabela `emprestimos_usuarios`
--
ALTER TABLE `emprestimos_usuarios`
  ADD CONSTRAINT `emprestimo3_key` FOREIGN KEY (`emprestimo_id`) REFERENCES `emprestimos` (`id`),
  ADD CONSTRAINT `usuario3_key` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

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
