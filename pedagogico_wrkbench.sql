-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 18:27
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
-- Banco de dados: `pedagogico`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `user_adm` varchar(40) NOT NULL,
  `password_adm` varchar(50) NOT NULL,
  `perm` tinyint(1) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `user_adm`, `password_adm`, `perm`, `cargo`) VALUES
(1, 'marcio.ferreir0', '{SSHA}4NIfJbF9rI0XZoPKbKT1fqc93kZ3gZGs9Dj52Q==', 0, 0),
(2, 'ademir', '{SSHA}CALSU6X+c+UJyIVnDjObmqeugm2MfiKkjKX/0g==', 1, 2),
(3, 'marcia', '{SSHA}tuft6ZcdNX0fBdcMZdryG+T5KnpZeZSJ26xkwQ==', 1, 1),
(4, 'robert', '{SSHA}vLrBOtXwyb18DFp/t5cMp9wALm+Glse6bMPTVg==', 1, 3),
(8, 'fam', '{SSHA}id8mwvC7DJJ23M7yQLvHUOKNGXMLtwWW0mD/2A==', 0, 0),
(9, 'lian', '{SSHA}wjs+i+oWsBevXJ07Ggymvo5fJf1iYF4e0Pn2OQ==', 1, 2),
(11, 'faro', '{SSHA}huu4eLWQ7WycG48divnUAfhFMs9VUEt4cgVLiA==', 1, 3),
(12, 'abernardo', '{SSHA}LJOyI7itCYsSoGuGCNMLKS2oOR5Be+w1fNT3jg==', 1, 1),
(13, 'thabata', '{SSHA}Iyofo6bIn0mhOffzBnFW4ALSbMPXWyM367b+Yg==', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `grau_ins` varchar(35) NOT NULL,
  `etnia` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `estado` char(3) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `religiao` varchar(25) DEFAULT NULL,
  `paimae` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `curso` int(11) DEFAULT NULL,
  `turma` int(11) DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `repfin` tinyint(1) NOT NULL,
  `repleg` tinyint(1) NOT NULL,
  `trabalha` tinyint(1) NOT NULL,
  `matricula` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `sobrenome`, `email`, `genero`, `cpf`, `grau_ins`, `etnia`, `endereco`, `bairro`, `estado`, `cidade`, `estado_civil`, `religiao`, `paimae`, `celular`, `num`, `curso`, `turma`, `data_nasc`, `repfin`, `repleg`, `trabalha`, `matricula`) VALUES
(2, 'math', 'va', 'ma@gmail.com', 'M', '232.323.232-45', 'Ensino Médio - Completo', 'Branca', 'Cav', 'cav', 'RS', 'poa', 'solteiro', 'cat', 'flavio', '(11)11111-1111', 5075, 1, NULL, '2007-09-07', 1, 1, 0, '12452451002'),
(3, 'm', 'a', '@.ma', 'M', '432.143.214-32', 'Ensino Médio - Completo', 'Branca', 'ca', 'ca', 'RS', 'poa', 'solteiro', 'c', 'flavio', '(23)23232-3232', 54, 1, NULL, '2007-09-07', 1, 1, 0, '12407321003'),
(4, 'Thabata', 'Real', 'thata@gmail.com', 'F', '123.445.443-76', 'Ensino Médio - Completo', 'Branca', 'rio', 'janeiro', 'RJ', 'rio de janeiro', 'solteiro', 'católica', 'Dyana', '(34)56789-0987', 65, 14, NULL, '2007-08-08', 1, 1, 1, '142430761004'),
(5, 'Caua', 'Fernandez', 'caua@gmail.com', 'M', '554.466.455-67', 'Ensino Médio - Completo', 'Branca', 'cavalhada', 'cavalhada', 'RS', 'poa', 'solteiro', 'católica', 'Geraldo Fernandez', '(55)98756-7453', 5075, 5, NULL, '2007-09-07', 1, 1, 0, '52458671005'),
(6, 'thatabata', 'cristina', 'thatabata@gmail.com', 'M', '575.758.585-88', 'Ensino Médio - Completo', 'Branca', 'cavalhada', 'cavalhada', 'RS', 'poa', 'solteiro', 'católica', 'dyana cristina', '(11)11112-2222', 5075, 1, NULL, '2007-09-07', 1, 1, 1, '12425881006'),
(7, 'Rolenço', 'La France', 'rolenço@gmail.com', 'M', '567.890.987-55', 'Ensino Médio - Completo', 'Parda', 'Rue Rorenco', 'São Lageado', 'RS', 'Paris', 'solteiro', 'Católica', 'Francis La France', '(88)85867-5533', 740, 6, 1, '2004-07-07', 0, 0, 0, '62421551007');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cronograma`
--

CREATE TABLE `cronograma` (
  `id_cronograma` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `id_modulo` int(11) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cronograma`
--

INSERT INTO `cronograma` (`id_cronograma`, `data_inicio`, `data_fim`, `id_curso`, `id_modulo`, `id_turma`) VALUES
(1, '2024-07-01', '2024-08-13', 11, 22, 8),
(2, '2024-09-02', '2024-10-15', 11, 22, 8),
(3, '2024-06-03', '2024-07-16', 11, 22, 8),
(4, '2024-08-01', '2024-09-19', 11, 23, 8),
(5, '2024-07-01', '2024-08-13', 11, 22, 8),
(6, '2024-08-05', '2024-09-17', 11, 22, 10),
(7, '2024-07-03', '2024-08-21', 11, 23, 10),
(8, '2025-06-02', '2025-07-15', 11, 22, 8),
(9, '2025-01-01', '2025-02-19', 11, 23, 8),
(10, '2025-02-14', '2025-03-31', 11, 22, 9),
(11, '2025-01-01', '2025-03-25', 1, 16, 3),
(12, '2025-01-01', '2025-03-25', 1, 16, 11),
(13, '2026-01-01', '2026-02-19', 14, 18, 4),
(14, '2026-02-19', '2026-04-09', 1, 17, 3),
(15, '2026-01-01', '2026-02-19', 14, 18, 4),
(16, '2025-12-01', '2026-01-20', 1, 17, 3),
(17, '2027-01-01', '2027-01-08', 14, 24, 12),
(18, '2027-01-01', '2027-01-08', 14, 24, 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(35) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`, `sigla`) VALUES
(1, 'TÉC. EM INFORMÁTICA', 'TECINF'),
(2, 'TÉC. EM ENFERMAGEM', 'TECENF'),
(5, 'ENGENHARIA DA COMPUTAÇÃO', 'ENGCOMP'),
(6, 'PYTHON', 'PY'),
(11, 'JAVA', 'JAV'),
(12, 'RADIOLOGIA', 'RAD'),
(14, 'ENGENHARIA', 'ENG'),
(17, 'PORTUGUÊS', 'PT');

-- --------------------------------------------------------

--
-- Estrutura para tabela `data_prof`
--

CREATE TABLE `data_prof` (
  `id` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `turno` char(1) NOT NULL,
  `id_cronograma` int(11) DEFAULT NULL,
  `id_professor` int(11) DEFAULT NULL,
  `id_uc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `data_prof`
--

INSERT INTO `data_prof` (`id`, `data_inicio`, `data_fim`, `turno`, `id_cronograma`, `id_professor`, `id_uc`) VALUES
(1, '2025-06-02', '2025-07-15', 'M', 8, 3, 9),
(2, '2025-01-01', '2025-02-19', 'M', 9, 5, 10),
(3, '2025-02-14', '2025-03-31', 'T', 10, 5, 9),
(4, '2025-01-01', '2025-02-19', 'M', 11, 1, 4),
(5, '2025-02-20', '2025-03-25', 'M', 11, 5, 7),
(6, '2025-01-01', '2025-02-19', 'T', 12, 1, 4),
(7, '2025-02-20', '2025-03-25', 'T', 12, 5, 7),
(10, '2026-01-01', '2026-02-19', 'M', 15, 5, 13),
(11, '2025-12-01', '2026-01-20', 'M', 16, 5, 8),
(12, '2027-01-01', '2027-01-08', 'N', 17, 5, 14),
(13, '2027-01-01', '2027-01-08', 'T', 18, 5, 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `feriados`
--

CREATE TABLE `feriados` (
  `dia` tinyint(2) NOT NULL,
  `mes` tinyint(2) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `feriados`
--

INSERT INTO `feriados` (`dia`, `mes`, `nome`) VALUES
(7, 9, 'Dia da Independência do Brasil'),
(25, 12, 'Natal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `incidentes`
--

CREATE TABLE `incidentes` (
  `id_incidente` int(11) NOT NULL,
  `data` date NOT NULL,
  `manha` tinyint(1) NOT NULL,
  `tarde` tinyint(1) NOT NULL,
  `noite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `log`
--

INSERT INTO `log` (`id_log`, `info`) VALUES
(1, 'LIAN ALTEROU ADM MARCIO.FERREIR0 23-04-2024 09:39:31'),
(2, 'FARO ALTEROU USUÁRIO MATHEUS.VARANI0 23-04-2024 20:28:03'),
(3, 'FARO ALTEROU USUÁRIO A 23-04-2024 20:28:12'),
(4, 'FARO ALTEROU SENHA USUÁRIO JORDANA 23-04-2024 20:28:21'),
(5, 'FARO ALTEROU ADM MARCIO.FERREIR0 23-04-2024 20:28:50'),
(6, 'FARO ALTEROU SENHA ADM MARCIO.FERREIR0 23-04-2024 20:29:09'),
(7, 'FARO DELETOU ADM FER 23-04-2024 20:29:18'),
(8, 'FARO CADASTROU ADM ABERNARDO 23-04-2024 20:30:00'),
(9, 'FARO DELETOU USUÁRIO AAAA 23-04-2024 20:50:55'),
(10, 'FARO DELETOU USUÁRIO ZAS 24-04-2024 10:49:27'),
(11, 'FARO CADASTROU ADM THABATA 24-04-2024 14:56:45'),
(12, 'THATY CRIOU CURSO TÉC. EM ENFERMAGEM 24-04-2024 17:19:27'),
(13, 'THATY CRIOU CURSO ENGENHARIA DA COMPUTAÇÃO 24-04-2024 17:36:16'),
(14, 'THATY CRIOU CURSO PYTHON 24-04-2024 17:38:08'),
(15, 'THATY CRIOU CURSO JAVA 24-04-2024 17:45:19'),
(16, 'THATY CRIOU MODULO MODULO A (ENGENHARIA DA COMPUTAÇÃO) 25-04-2024 18:26:45'),
(17, 'THATY CRIOU MODULO MODULO B (ENGENHARIA DA COMPUTAÇÃO) 25-04-2024 18:32:13'),
(18, 'THATY CRIOU CURSO RADIOLOGIA 26-04-2024 14:14:07'),
(19, 'THATY CRIOU MODULO MODULO A (RADIOLOGIA) 26-04-2024 14:14:35'),
(20, 'FARO ALTEROU SENHA USUÁRIO THATY 26-04-2024 16:51:36'),
(21, 'THATY CRIOU MODULO MODULO A (PYTHON) 26-04-2024 17:32:46'),
(22, 'THATY CRIOU MODULO MODULO B (PYTHON) 26-04-2024 17:34:47'),
(23, 'THATY CRIOU UC ALGORITMOS 26-04-2024 21:13:25'),
(24, 'THATY CRIOU UC A (JAVAX.SWING.JCOMBOBOX[,53,30,195X23,LAYOUT=JAVAX.SWING.PLAF.BASIC.BASICCOMBOBOXUI$HANDLER,ALIGNMENTX=0.0,ALIGNMENTY=0.0,BORDER=JAVAX.SWING.PLAF.SYNTH.SYNTHBORDER@60213FFB,FLAGS=320,MAXIMUMSIZE=,MINIMUMSIZE=,PREFERREDSIZE=,ISEDITABLE=FALSE,LIGHTWEIGHTPOPUPENABLED=TRUE,MAXIMUMROWCOUNT=8,SELECTEDITEMREMINDER=ENGENHARIA DA COMPUTAÇÃO]) 26-04-2024 21:19:58'),
(25, 'THATY CRIOU MODULO MODULO A (TÉC. EM INFORMÁTICA) 26-04-2024 21:30:51'),
(26, 'THATY CRIOU MODULO MODULO B (TÉC. EM INFORMÁTICA) 26-04-2024 21:31:09'),
(27, 'THATY CRIOU MODULO MODULO C (TÉC. EM INFORMÁTICA) 26-04-2024 21:31:21'),
(28, 'THATY CRIOU MODULO MODULO D (TÉC. EM INFORMÁTICA) 26-04-2024 21:31:31'),
(29, 'THATY CRIOU UC DESENVOLVER ALGORITMOS (JAVAX.SWING.JCOMBOBOX[,53,30,195X23,LAYOUT=JAVAX.SWING.PLAF.BASIC.BASICCOMBOBOXUI$HANDLER,ALIGNMENTX=0.0,ALIGNMENTY=0.0,BORDER=JAVAX.SWING.PLAF.SYNTH.SYNTHBORDER@292B98B8,FLAGS=320,MAXIMUMSIZE=,MINIMUMSIZE=,PREFERREDSIZE=,ISEDITABLE=FALSE,LIGHTWEIGHTPOPUPENABLED=TRUE,MAXIMUMROWCOUNT=8,SELECTEDITEMREMINDER=TÉC. EM INFORMÁTICA]) 26-04-2024 21:32:06'),
(30, 'THATY CRIOU UC DESENVOLVER ALGORITMOS (TÉC. EM INFORMÁTICA) 26-04-2024 21:34:29'),
(31, 'THATY CRIOU UC DESENVOLVERBANCO DE DADOS (TÉC. EM INFORMÁTICA) 26-04-2024 21:41:27'),
(32, 'THATY CRIOU UC DESENVOLVER BANCO DE DADOS (TÉC. EM INFORMÁTICA) 26-04-2024 21:44:49'),
(33, 'THATY CRIOU UC DESENVOLVER E ORGANIZAR ELEMENTOS ESTRUTURAIS DE SITES (TÉC. EM INFORMÁTICA) 26-04-2024 21:47:25'),
(34, 'FARO ALTEROU ADM MARCIO.FERREIR0 27-04-2024 09:41:01'),
(35, 'FARO ALTEROU ADM FAM 27-04-2024 09:41:47'),
(36, 'FARO DELETOU USUÁRIO Z 27-04-2024 09:43:42'),
(37, 'FARO DELETOU USUÁRIO CAH NABIS 27-04-2024 09:43:48'),
(38, 'FARO DELETOU USUÁRIO L 27-04-2024 09:43:51'),
(39, 'FARO DELETOU USUÁRIO JOÃO HEEEEEEEEEEE 27-04-2024 09:44:07'),
(40, 'FARO ALTEROU USUÁRIO MATHEUS.VARANI 27-04-2024 09:44:16'),
(41, 'THATY CRIOU CURSO ENGENHARIA 29-04-2024 15:07:42'),
(42, 'THATY CRIOU MODULO MODULO A (ENGENHARIA) 29-04-2024 15:08:55'),
(43, 'THATY CRIOU TURMA PY24N 29-04-2024 17:39:15'),
(44, 'THATY CRIOU TURMA TECINF24M 29-04-2024 17:41:49'),
(45, 'THATY CRIOU TURMA ENG24M 29-04-2024 18:00:35'),
(46, 'THATY CADASTROU ALUNO MATHEUS VARANI 01-05-2024 20:24:52'),
(47, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA MATHEUS VARANI 01-05-2024 20:24:54'),
(48, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA MATHEUS VARANI 01-05-2024 20:24:57'),
(49, 'THATY CADASTROU ALUNO MATH VA 01-05-2024 20:32:52'),
(50, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA MATH VA 01-05-2024 20:32:55'),
(51, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA MATH VA 01-05-2024 20:32:56'),
(52, 'THATY CADASTROU ALUNO M A 01-05-2024 20:38:07'),
(53, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA M A 01-05-2024 20:38:14'),
(54, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA M A 01-05-2024 20:38:17'),
(55, 'THATY CADASTROU ALUNO THABATA REAL 01-05-2024 20:45:30'),
(56, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA THABATA REAL 01-05-2024 20:45:45'),
(57, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA THABATA REAL 01-05-2024 20:45:51'),
(58, 'THATY CADASTROU ALUNO CAUA FERNANDEZ 02-05-2024 01:41:58'),
(59, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA CAUA FERNANDEZ 02-05-2024 01:42:03'),
(60, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA CAUA FERNANDEZ 02-05-2024 01:42:03'),
(61, 'THATY CADASTROU ALUNO THATABATA CRISTINA 02-05-2024 01:48:25'),
(62, 'THATY CADASTROU RESPONSÁVEL LEGAL PARA THATABATA CRISTINA 02-05-2024 01:48:25'),
(63, 'THATY CADASTROU RESPONSÁVEL FINANCEIRO PARA THATABATA CRISTINA 02-05-2024 01:48:25'),
(64, 'THATY CADASTROU PROFESSOR MATHEUS VARANI 04-05-2024 02:20:35'),
(65, 'THATY CADASTROU PROFESSOR MATHEUS VA 04-05-2024 02:23:59'),
(66, 'THATY CRIOU CURSO PORTUGUÊS 07-05-2024 14:42:22'),
(67, 'THATY CRIOU MODULO MODULO A (PORTUGUÊS) 07-05-2024 14:42:32'),
(68, 'THATY CADASTROU PROFESSOR CAETANO VARANI 08-05-2024 15:27:13'),
(69, 'THATY CRIOU MODULO MODULO A (JAVA) 08-05-2024 15:28:53'),
(70, 'THATY CRIOU MODULO MODULO B (JAVA) 08-05-2024 15:28:59'),
(71, 'THATY CRIOU UC LÓGICA DE PROGRAMAÇÃO (JAVA) 08-05-2024 15:29:28'),
(72, 'THATY CRIOU UC CRUD (JAVA) 08-05-2024 15:30:38'),
(73, 'THATY CRIOU UC ALGORITMOS (PYTHON) 08-05-2024 16:37:31'),
(74, 'THATY ADICIONOU UNIDADE CURRICULAR LÓGICA DE PROGRAMAÇÃO AO PROFESSOR CAETANO VARANI 09-05-2024 01:25:13'),
(75, 'THATY ADICIONOU UNIDADE CURRICULAR CRUD AO PROFESSOR CAETANO VARANI 09-05-2024 01:32:52'),
(76, 'THATY ADICIONOU UNIDADE CURRICULAR LÓGICA DE PROGRAMAÇÃO AO PROFESSOR MATHEUS VA 11-05-2024 20:03:58'),
(77, 'THATY CRIOU TURMA PY24M 11-05-2024 21:49:24'),
(78, 'THATY CRIOU TURMA PY24T 11-05-2024 21:49:35'),
(79, 'THATY CADASTROU ALUNO ROLENÇO LA FRANCE 13-05-2024 14:20:21'),
(80, 'THATY ADICIONOU ALUNO ROLENÇO LA FRANCE A TURMA PY24N! 13-05-2024 15:54:09'),
(81, 'THATY ADICIONOU ALUNO ROLENÇO LA FRANCE A TURMA PY24M! 13-05-2024 15:55:06'),
(82, 'THATY ADICIONOU ALUNO ROLENÇO LA FRANCE A TURMA PY24N! 13-05-2024 15:55:41'),
(83, 'THATY CRIOU TURMA JAV24M 22-05-2024 19:37:14'),
(84, 'THATY CRIOU TURMA JAV24T 22-05-2024 19:37:18'),
(85, 'THATY CRIOU TURMA JAV24N 23-05-2024 14:48:03'),
(86, 'THATY CADASTROU PROFESSOR THABATA REAL 23-05-2024 14:52:03'),
(87, 'THATY ADICIONOU UNIDADE CURRICULAR LÓGICA DE PROGRAMAÇÃO AO PROFESSOR THABATA REAL 23-05-2024 14:52:17'),
(88, 'THATY ADICIONOU UNIDADE CURRICULAR CRUD AO PROFESSOR THABATA REAL 23-05-2024 14:52:34'),
(89, 'THATY CADASTROU PROFESSOR FLAVIO VARANI 23-05-2024 14:56:19'),
(90, 'THATY ADICIONOU UNIDADE CURRICULAR DESENVOLVER ALGORITMOS AO PROFESSOR MATHEUS VARANI 23-05-2024 15:20:19'),
(91, 'THATY ADICIONOU UNIDADE CURRICULAR DESENVOLVER BANCO DE DADOS AO PROFESSOR THABATA REAL 23-05-2024 15:20:33'),
(92, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24M 24-05-2024 22:06:38'),
(93, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24M 24-05-2024 22:09:03'),
(94, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24N 24-05-2024 22:17:43'),
(95, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24M 24-05-2024 22:27:40'),
(96, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24M 24-05-2024 22:47:49'),
(97, 'THATY CADASTROU CRONOGRAMA DA TURMA JAV24T 24-05-2024 22:53:12'),
(98, 'THATY CADASTROU CRONOGRAMA DA TURMA TECINF24M 24-05-2024 22:55:00'),
(99, 'THATY CRIOU TURMA TECINF24T 24-05-2024 22:55:35'),
(100, 'THATY CADASTROU CRONOGRAMA DA TURMA TECINF24T 24-05-2024 22:56:08'),
(101, 'THATY CRIOU UC FUNÇÃO (ENGENHARIA) 29-05-2024 15:05:29'),
(102, 'THATY ADICIONOU UNIDADE CURRICULAR FUNÇÃO AO PROFESSOR THABATA REAL 29-05-2024 15:05:42'),
(103, 'THATY ADICIONOU UNIDADE CURRICULAR DESENVOLVER E ORGANIZAR ELEMENTOS ESTRUTURAIS DE SITES AO PROFESSOR THABATA REAL 29-05-2024 15:05:53'),
(104, 'THATY CADASTROU CRONOGRAMA DA TURMA ENG24M 29-05-2024 15:06:24'),
(105, 'THATY CADASTROU CRONOGRAMA DA TURMA TECINF24M 29-05-2024 15:09:59'),
(106, 'THATY CADASTROU CRONOGRAMA DA TURMA ENG24M 29-05-2024 15:12:43'),
(107, 'THATY CADASTROU CRONOGRAMA DA TURMA TECINF24M 29-05-2024 15:14:03'),
(108, 'THATY CRIOU TURMA ENG24N 29-05-2024 15:24:02'),
(109, 'THATY CRIOU TURMA TECINF24N 29-05-2024 15:24:07'),
(110, 'THATY CRIOU MODULO MODULO B (ENGENHARIA) 29-05-2024 15:26:10'),
(111, 'THATY CRIOU UC ELÉTRICA (ENGENHARIA) 29-05-2024 15:26:46'),
(112, 'THATY CRIOU UC HARDWARE (TÉC. EM INFORMÁTICA) 29-05-2024 15:27:24'),
(113, 'THATY ADICIONOU UNIDADE CURRICULAR ELÉTRICA AO PROFESSOR THABATA REAL 29-05-2024 15:28:39'),
(114, 'THATY ADICIONOU UNIDADE CURRICULAR HARDWARE AO PROFESSOR THABATA REAL 29-05-2024 15:28:50'),
(115, 'THATY CADASTROU CRONOGRAMA DA TURMA ENG24N 29-05-2024 15:29:55'),
(116, 'THATY CRIOU TURMA ENG24T 29-05-2024 18:42:41'),
(117, 'THATY CADASTROU CRONOGRAMA DA TURMA ENG24T 29-05-2024 19:15:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `nome_modulo` varchar(60) NOT NULL,
  `curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `nome_modulo`, `curso`) VALUES
(3, 'Modulo A (ENGENHARIA DA COMPUTAÇÃO)', 5),
(5, 'Modulo B (ENGENHARIA DA COMPUTAÇÃO)', 5),
(6, 'Modulo A (RADIOLOGIA)', 12),
(8, 'Modulo A (PYTHON)', 6),
(10, 'Modulo B (PYTHON)', 6),
(13, 'Modulo A (TÉC. EM INFORMÁTICA)', 1),
(15, 'Modulo B (TÉC. EM INFORMÁTICA)', 1),
(16, 'Modulo C (TÉC. EM INFORMÁTICA)', 1),
(17, 'Modulo D (TÉC. EM INFORMÁTICA)', 1),
(18, 'Modulo A (ENGENHARIA)', 14),
(19, 'Modulo A (PORTUGUÊS)', 17),
(22, 'Modulo A (JAVA)', 11),
(23, 'Modulo B (JAVA)', 11),
(24, 'Modulo B (ENGENHARIA)', 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `grau_ins` varchar(35) NOT NULL,
  `etnia` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `estado` char(3) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `religiao` varchar(25) DEFAULT NULL,
  `paimae` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `manha` tinyint(1) DEFAULT NULL,
  `tarde` tinyint(1) DEFAULT NULL,
  `noite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome`, `sobrenome`, `email`, `genero`, `cpf`, `grau_ins`, `etnia`, `endereco`, `bairro`, `estado`, `cidade`, `estado_civil`, `religiao`, `paimae`, `celular`, `num`, `data_nasc`, `manha`, `tarde`, `noite`) VALUES
(1, 'matheus', 'varani', 'math@gmail.com', 'M', '098.787.656-55', 'Médio', 'Branca', 'cavalhada', 'cavalhada', 'AC', 'poa', 'solteiro', 'católica', 'flavio varani', '(51)99998-8779', 1150, '2001-09-07', 1, 1, 1),
(3, 'matheus', 'va', 'mathe@gmail.com', 'M', '098.987.878-78', 'Médio', 'Branca', 'cav', 'cav', 'RS', 'poa', 'solteiro', 'cat', 'flavio', '(44)23232-3232', 3232, '2001-09-07', 1, 1, 0),
(4, 'Caetano', 'Varani', 'caetano@gmail.com', 'M', '480.160.030-09', 'Técnico', 'Branca', 'casa', 'São Caetano', 'RS', 'Parobé', 'solteiro', 'católica', 'Flavio Varani', '(78)40900-3008', 109, '2001-07-25', 0, 0, 1),
(5, 'Thabata', 'Real', 'thabata@gmail.com', 'F', '198.798.357-77', 'Pós-Graduado', 'Branca', 'Wenceslau Escobar', 'Tristeza', 'RS', 'Porto Alegre', 'solteiro', 'Católica', 'Dyana ', '(55)55555-5555', 1111, '2000-07-07', 1, 1, 1),
(6, 'Flavio', 'Varani', 'flavio@gmail.com', 'M', '444.433.333-33', 'Graduado', 'Branca', 'cavalhada', 'cavalhada', 'RS', 'poa', 'solteiro', 'católica', 'flavio varani', '(54)54545-4434', 1111, '2000-09-09', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `prof_uc`
--

CREATE TABLE `prof_uc` (
  `id_prof` int(11) NOT NULL,
  `id_uc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `prof_uc`
--

INSERT INTO `prof_uc` (`id_prof`, `id_uc`) VALUES
(1, 4),
(3, 9),
(4, 9),
(4, 10),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 13),
(5, 14),
(5, 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `representante_financeiro`
--

CREATE TABLE `representante_financeiro` (
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `representante_financeiro`
--

INSERT INTO `representante_financeiro` (`nome`, `cpf`, `data_nasc`, `aluno`) VALUES
('dyana cristina', '333.344.444-44', '2001-09-07', 6),
('Geraldo Fernandez', '888.779.988-78', '2001-09-07', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavel_legal`
--

CREATE TABLE `responsavel_legal` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `etnia` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `estado` char(3) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `religiao` varchar(25) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `responsavel_legal`
--

INSERT INTO `responsavel_legal` (`nome`, `sobrenome`, `email`, `genero`, `cpf`, `etnia`, `endereco`, `bairro`, `estado`, `cidade`, `estado_civil`, `religiao`, `celular`, `num`, `data_nasc`, `aluno`) VALUES
('dyana', 'cristina', 'dyana@cristina.com', 'M', '333.344.444-44', 'Branca', 'cavalhada', 'cavalhada', 'RS', 'poa', 'solteiro', 'católica', '(99)77777-7777', 5075, '2001-09-07', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `id_turma` int(11) NOT NULL,
  `nome_turma` varchar(15) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `turno` char(1) NOT NULL,
  `mod1` tinyint(1) NOT NULL,
  `mod2` tinyint(1) NOT NULL,
  `mod3` tinyint(1) NOT NULL,
  `mod4` tinyint(1) NOT NULL,
  `curso` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`id_turma`, `nome_turma`, `ano`, `turno`, `mod1`, `mod2`, `mod3`, `mod4`, `curso`, `status`) VALUES
(1, 'PY24N', '2024', 'N', 1, 0, 0, 0, 6, 1),
(3, 'TECINF24M', '2024', 'M', 0, 0, 1, 1, 1, 1),
(4, 'ENG24M', '2024', 'M', 1, 1, 0, 0, 14, 1),
(5, 'PY24M', '2024', 'M', 0, 0, 1, 0, 6, 1),
(7, 'PY24T', '2024', 'T', 0, 0, 0, 1, 6, 1),
(8, 'JAV24M', '2024', 'M', 1, 1, 0, 0, 11, 1),
(9, 'JAV24T', '2024', 'T', 1, 0, 0, 0, 11, 1),
(10, 'JAV24N', '2024', 'N', 1, 0, 0, 0, 11, 1),
(11, 'TECINF24T', '2024', 'T', 0, 0, 1, 0, 1, 1),
(12, 'ENG24N', '2024', 'N', 0, 1, 0, 0, 14, 1),
(13, 'TECINF24N', '2024', 'N', 0, 0, 0, 0, 1, 1),
(14, 'ENG24T', '2024', 'T', 0, 1, 0, 0, 14, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `unidades_curriculares`
--

CREATE TABLE `unidades_curriculares` (
  `id_uc` int(11) NOT NULL,
  `nome_uc` varchar(80) NOT NULL,
  `cargaHoraria` int(4) NOT NULL,
  `modulo` int(11) DEFAULT NULL,
  `curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `unidades_curriculares`
--

INSERT INTO `unidades_curriculares` (`id_uc`, `nome_uc`, `cargaHoraria`, `modulo`, `curso`) VALUES
(4, 'desenvolver algoritmos', 108, 16, 1),
(7, 'desenvolver banco de dados', 72, 16, 1),
(8, 'desenvolver e organizar elementos estruturais de sites', 108, 17, 1),
(9, 'lógica de programação', 96, 22, 11),
(10, 'crud', 108, 23, 11),
(12, 'algoritmos', 96, 8, 6),
(13, 'função', 108, 18, 14),
(14, 'elétrica', 18, 24, 14),
(15, 'hardware', 18, 15, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(35) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login`, `senha`, `email`, `cpf`) VALUES
(1, 'matheus.varani', '{SSHA}RoXV4iOjjcf03vziroVpEiY5Uv5ZhGpSkS57Pg==', 'matheus@gmail.com.br', '015.623.490-87'),
(4, 'jordana', '{SSHA}4e2u+bMtFZl8mESE9ILlZhMSRGDYDSqFvB1Q1w==', 'dana@gmail.com', '111.111.111-11'),
(28, 'victor', '{SSHA}1YwRiWMqclWZNlv+sApxju48J8j8DiA2E4t+Cw==', 'victor@gmail.com', '121.212.121-21'),
(33, 'math', '{SSHA}IWZXVzwBY6Agq571cmu2Mx9DqV/mqTBxHqovMA==', 'math@gmail.com', '345.678.976-65'),
(54, 'leo', '{SSHA}fCPsgGvr8v5VaxOMQ7N7x1/TlgW0dzBxN2AY9Q==', 'leo@gmail.com', '767.676.767-67'),
(57, 'thaty', '{SSHA}xKPzKYBMK2ReKXUTlgAuNYBWkC6lXOvjZ6DN3w==', 'thaty@gmail.com', '122.344.455-56');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`),
  ADD UNIQUE KEY `user_adm` (`user_adm`);

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `celular` (`celular`),
  ADD UNIQUE KEY `celular_2` (`celular`),
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD KEY `curso` (`curso`),
  ADD KEY `turma` (`turma`);

--
-- Índices de tabela `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`id_cronograma`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_modulo` (`id_modulo`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `nome_curso` (`nome_curso`),
  ADD UNIQUE KEY `sigla` (`sigla`);

--
-- Índices de tabela `data_prof`
--
ALTER TABLE `data_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cronograma` (`id_cronograma`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_uc` (`id_uc`);

--
-- Índices de tabela `feriados`
--
ALTER TABLE `feriados`
  ADD PRIMARY KEY (`dia`,`mes`);

--
-- Índices de tabela `incidentes`
--
ALTER TABLE `incidentes`
  ADD PRIMARY KEY (`id_incidente`);

--
-- Índices de tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Índices de tabela `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`),
  ADD UNIQUE KEY `nome_modulo` (`nome_modulo`),
  ADD KEY `curso` (`curso`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `celular` (`celular`);

--
-- Índices de tabela `prof_uc`
--
ALTER TABLE `prof_uc`
  ADD PRIMARY KEY (`id_prof`,`id_uc`),
  ADD KEY `id_uc` (`id_uc`);

--
-- Índices de tabela `representante_financeiro`
--
ALTER TABLE `representante_financeiro`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `aluno` (`aluno`);

--
-- Índices de tabela `responsavel_legal`
--
ALTER TABLE `responsavel_legal`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `celular` (`celular`),
  ADD UNIQUE KEY `celular_2` (`celular`),
  ADD KEY `aluno` (`aluno`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turma`),
  ADD UNIQUE KEY `nome_turma` (`nome_turma`),
  ADD KEY `curso` (`curso`);

--
-- Índices de tabela `unidades_curriculares`
--
ALTER TABLE `unidades_curriculares`
  ADD PRIMARY KEY (`id_uc`),
  ADD UNIQUE KEY `nome_uc` (`nome_uc`),
  ADD KEY `modulo` (`modulo`),
  ADD KEY `curso` (`curso`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `id_cronograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `data_prof`
--
ALTER TABLE `data_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `incidentes`
--
ALTER TABLE `incidentes`
  MODIFY `id_incidente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de tabela `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `unidades_curriculares`
--
ALTER TABLE `unidades_curriculares`
  MODIFY `id_uc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `alunos_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turmas` (`id_turma`);

--
-- Restrições para tabelas `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `cronograma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `cronograma_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `cronograma_ibfk_3` FOREIGN KEY (`id_turma`) REFERENCES `turmas` (`id_turma`);

--
-- Restrições para tabelas `data_prof`
--
ALTER TABLE `data_prof`
  ADD CONSTRAINT `data_prof_ibfk_1` FOREIGN KEY (`id_cronograma`) REFERENCES `cronograma` (`id_cronograma`),
  ADD CONSTRAINT `data_prof_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professores` (`id_professor`),
  ADD CONSTRAINT `data_prof_ibfk_3` FOREIGN KEY (`id_uc`) REFERENCES `unidades_curriculares` (`id_uc`);

--
-- Restrições para tabelas `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`);

--
-- Restrições para tabelas `prof_uc`
--
ALTER TABLE `prof_uc`
  ADD CONSTRAINT `prof_uc_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professores` (`id_professor`),
  ADD CONSTRAINT `prof_uc_ibfk_2` FOREIGN KEY (`id_uc`) REFERENCES `unidades_curriculares` (`id_uc`);

--
-- Restrições para tabelas `representante_financeiro`
--
ALTER TABLE `representante_financeiro`
  ADD CONSTRAINT `representante_financeiro_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `alunos` (`id_aluno`);

--
-- Restrições para tabelas `responsavel_legal`
--
ALTER TABLE `responsavel_legal`
  ADD CONSTRAINT `responsavel_legal_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `alunos` (`id_aluno`);

--
-- Restrições para tabelas `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`);

--
-- Restrições para tabelas `unidades_curriculares`
--
ALTER TABLE `unidades_curriculares`
  ADD CONSTRAINT `unidades_curriculares_ibfk_1` FOREIGN KEY (`modulo`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `unidades_curriculares_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
