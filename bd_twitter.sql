-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Abr-2018 às 16:05
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";''
SET time_zone = "+00:00";

-- Database: `bd_twitter`
--
CREATE DATABASE IF NOT EXISTS `bd_twitter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_twitter`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data_post` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_posts`
--

INSERT INTO `tb_posts` (`id_post`, `id_user`, `data_post`, `msg`) VALUES
(1, 1, '2018-04-20 09:15:42', 'mensagem de teste			\r\n		'),
(2, 1, '2018-04-20 09:57:25', 'mensagem de teste			\r\n		'),
(3, 1, '2018-04-20 09:57:47', 'mensagem de teste			\r\n		'),
(4, 2, '2018-04-20 10:01:48', 'mensagem de teste henrique'),
(5, 3, '2018-04-20 10:02:34', 'mensagem teste Chelle			\r\n		'),
(6, 4, '2018-04-20 10:03:12', 'mensagem teste Rique'),
(7, 5, '2018-04-20 10:03:42', 'mensagem teste Fernanda'),
(8, 6, '2018-04-20 10:04:08', 'mensagem teste Cristiano			\r\n		');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relacionamentos`
--

CREATE TABLE `tb_relacionamentos` (
  `id_rel` int(11) NOT NULL,
  `id_seguidor` int(11) NOT NULL,
  `id_seguido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_relacionamentos`
--

INSERT INTO `tb_relacionamentos` (`id_rel`, `id_seguidor`, `id_seguido`) VALUES
(7, 6, 2),
(8, 6, 3),
(9, 6, 4),
(10, 6, 5),
(11, 1, 6),
(12, 1, 4),
(13, 1, 2),
(14, 2, 1),
(15, 2, 6),
(16, 2, 5),
(17, 3, 1),
(18, 3, 2),
(19, 3, 5),
(20, 4, 1),
(21, 4, 2),
(22, 4, 3),
(23, 5, 1),
(24, 5, 2),
(25, 5, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_user`, `nome`, `email`, `senha`) VALUES
(1, 'Filipe', 'filipe@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'henrique', 'henri@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'chelle', 'chelle@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'rique', 'rique@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Fernanda', 'nanda@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Cristiano', 'cris@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tb_relacionamentos`
--
ALTER TABLE `tb_relacionamentos`
  ADD PRIMARY KEY (`id_rel`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_relacionamentos`
--
ALTER TABLE `tb_relacionamentos`
  MODIFY `id_rel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;--
