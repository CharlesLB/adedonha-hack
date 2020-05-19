-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2020 às 16:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_adedonha`
--
CREATE DATABASE IF NOT EXISTS `db_adedonha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_adedonha`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Comida', '2020-05-07 14:13:49', '2020-05-07 14:13:49'),
(7, 'Objeto', '2020-05-07 14:15:42', '2020-05-07 14:15:42'),
(8, 'Jogo', '2020-05-07 14:15:48', '2020-05-07 14:15:48'),
(10, 'Instrumento musical', '2020-05-07 14:16:03', '2020-05-07 14:16:03'),
(11, 'Nome', '2020-05-07 14:16:12', '2020-05-07 14:16:12'),
(12, 'Personagem', '2020-05-07 14:16:27', '2020-05-07 14:16:27'),
(13, 'PCH', '2020-05-07 19:49:51', '2020-05-07 19:49:51'),
(15, 'Música', '2020-05-07 19:50:08', '2020-05-07 19:50:08'),
(30, 'Famoso', '2020-05-08 11:16:32', '2020-05-08 11:16:32'),
(31, 'Cor', '2020-05-08 12:22:54', '2020-05-08 12:22:54'),
(32, 'Livro', '2020-05-08 13:01:31', '2020-05-08 13:01:31'),
(105, 'Banda', '2020-05-15 18:36:13', '2020-05-15 18:36:13'),
(107, 'Profissão', '2020-05-15 19:27:05', '2020-05-15 19:27:05'),
(108, 'Carro', '2020-05-17 02:14:22', '2020-05-17 02:14:22'),
(111, 'TV', '2020-05-18 15:14:52', '2020-05-18 15:14:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `words`
--

DROP TABLE IF EXISTS `words`;
CREATE TABLE `words` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `words`
--

INSERT INTO `words` (`id`, `name`, `created_at`, `updated_at`, `id_category`) VALUES
(3, 'Azul', '2020-05-09 13:16:08', '2020-05-09 13:16:08', 31),
(4, 'Branco', '2020-05-15 13:45:47', '2020-05-15 13:45:47', 31),
(5, 'Rosa', '2020-05-15 13:46:24', '2020-05-15 13:46:24', 31),
(6, 'Azeitona', '2020-05-15 14:33:03', '2020-05-15 14:33:03', 3),
(7, 'Cinza', '2020-05-15 18:36:25', '2020-05-15 18:36:25', 31),
(8, 'Dourado', '2020-05-15 18:37:47', '2020-05-15 18:37:47', 31),
(9, 'Esmeralda', '2020-05-15 18:39:47', '2020-05-15 18:39:47', 31),
(10, 'Fúcsia', '2020-05-15 18:44:12', '2020-05-15 18:44:12', 31),
(11, 'Bolacha', '2020-05-15 18:46:37', '2020-05-15 18:46:37', 3),
(12, 'Grená', '2020-05-15 18:50:10', '2020-05-15 18:50:10', 31),
(13, 'Canjica', '2020-05-15 18:55:53', '2020-05-15 18:55:53', 3),
(14, 'Herbal', '2020-05-15 18:57:36', '2020-05-15 18:57:36', 31),
(16, 'Indigo', '2020-05-15 19:04:24', '2020-05-15 19:04:24', 31),
(17, 'Jambo', '2020-05-15 19:06:28', '2020-05-15 19:06:28', 31),
(18, 'Lilás', '2020-05-15 19:09:04', '2020-05-15 19:09:04', 31),
(19, 'Magenta', '2020-05-15 19:21:39', '2020-05-15 19:21:39', 31),
(20, 'Amarelo', '2020-05-15 19:22:39', '2020-05-15 19:22:39', 31),
(22, 'Ocre', '2020-05-15 19:26:08', '2020-05-15 19:26:08', 31),
(23, 'Verde', '2020-05-15 19:38:22', '2020-05-15 19:38:22', 31),
(24, 'Backstreet Boys', '2020-05-15 19:40:53', '2020-05-15 19:40:53', 105),
(25, 'Paramore', '2020-05-15 19:42:17', '2020-05-15 19:42:17', 105),
(26, 'Mozart', '2020-05-15 19:42:45', '2020-05-15 19:42:45', 105),
(27, 'Violão', '2020-05-15 19:49:18', '2020-05-15 19:49:18', 10),
(28, 'Violino', '2020-05-15 19:49:28', '2020-05-15 19:49:28', 10),
(29, 'Artesão', '2020-05-15 19:50:22', '2020-05-15 19:50:22', 107),
(30, 'Promotor', '2020-05-15 19:50:55', '2020-05-15 19:50:55', 107),
(31, 'Cabeça', '2020-05-15 19:52:22', '2020-05-15 19:52:22', 13),
(32, 'Barriga', '2020-05-15 19:52:28', '2020-05-15 19:52:28', 13),
(33, 'Estômago', '2020-05-15 19:57:31', '2020-05-15 19:57:31', 13),
(34, 'Batata Frita', '2020-05-15 19:58:39', '2020-05-15 19:58:39', 3),
(35, 'Alaúde', '2020-05-15 21:30:24', '2020-05-15 21:30:24', 10),
(36, 'Berimbau', '2020-05-15 21:30:30', '2020-05-15 21:30:30', 10),
(37, 'Cavaquinho', '2020-05-15 21:30:38', '2020-05-15 21:30:38', 10),
(38, 'Derbake', '2020-05-15 21:31:49', '2020-05-15 21:31:49', 10),
(39, 'Flauta', '2020-05-15 21:33:52', '2020-05-15 21:33:52', 10),
(40, 'Guitarra', '2020-05-15 21:34:02', '2020-05-15 21:34:02', 10),
(41, 'Harpa', '2020-05-15 21:35:11', '2020-05-15 21:35:11', 10),
(42, 'Coldplay', '2020-05-16 21:53:08', '2020-05-16 21:53:08', 105),
(43, 'Detonautas', '2020-05-16 22:05:38', '2020-05-16 22:05:38', 105),
(44, 'Engenheiros do Hawaii', '2020-05-16 22:06:19', '2020-05-16 22:06:19', 105),
(45, 'Falamansa', '2020-05-16 22:07:18', '2020-05-16 22:07:18', 105),
(46, 'Henrique e Juliano', '2020-05-16 22:12:15', '2020-05-16 22:12:15', 105),
(47, 'Imagine Dragons', '2020-05-16 22:14:33', '2020-05-16 22:14:33', 105),
(48, 'Jorge e Mateus', '2020-05-16 22:14:48', '2020-05-16 22:14:48', 105),
(49, 'Katy Perry', '2020-05-16 22:14:58', '2020-05-16 22:14:58', 105),
(50, 'Lady Gaga', '2020-05-16 22:15:20', '2020-05-16 22:15:20', 105),
(51, 'Maroon 5', '2020-05-16 22:15:37', '2020-05-16 22:15:37', 105),
(52, 'Nirvana', '2020-05-16 22:15:49', '2020-05-16 22:15:49', 105),
(53, 'One Direction', '2020-05-16 22:16:23', '2020-05-16 22:16:23', 105),
(54, 'Pink Floyd', '2020-05-16 22:16:35', '2020-05-16 22:16:35', 105),
(55, 'Queen', '2020-05-16 22:16:46', '2020-05-16 22:16:46', 105),
(56, 'Roberto Carlos', '2020-05-16 22:16:55', '2020-05-16 22:16:55', 105),
(57, 'Selena Gomez', '2020-05-16 22:17:07', '2020-05-16 22:17:07', 105),
(58, 'The Beatles', '2020-05-16 22:17:18', '2020-05-16 22:17:18', 105),
(59, 'U2', '2020-05-16 22:17:30', '2020-05-16 22:17:30', 105),
(60, 'Victor e Leo', '2020-05-16 22:17:45', '2020-05-16 22:17:45', 105),
(61, 'Wesley Safadão', '2020-05-16 22:18:04', '2020-05-16 22:18:04', 105),
(62, 'Xuxa', '2020-05-16 22:18:12', '2020-05-16 22:18:12', 105),
(63, 'Yes', '2020-05-16 22:18:27', '2020-05-16 22:18:27', 105),
(64, 'Zero', '2020-05-16 22:18:48', '2020-05-16 22:18:48', 105),
(65, 'Drumet', '2020-05-16 22:19:55', '2020-05-16 22:19:55', 3),
(66, 'Espaguete', '2020-05-16 22:20:12', '2020-05-16 22:20:12', 3),
(67, 'Feijoada', '2020-05-16 22:20:23', '2020-05-16 22:20:23', 3),
(68, 'Galinhada', '2020-05-16 22:42:51', '2020-05-16 22:42:51', 3),
(69, 'Hambúrguer', '2020-05-16 22:43:22', '2020-05-16 22:43:22', 3),
(70, 'Uno', '2020-05-17 02:14:42', '2020-05-17 02:14:42', 108),
(71, 'Gol', '2020-05-17 02:16:09', '2020-05-17 02:16:09', 108),
(72, 'Enzo', '2020-05-17 03:07:44', '2020-05-17 03:07:44', 108),
(73, 'Onix', '2020-05-17 17:48:10', '2020-05-17 17:48:10', 108),
(74, 'Punto', '2020-05-17 17:49:18', '2020-05-17 17:49:18', 108),
(75, 'Camaro', '2020-05-17 17:49:56', '2020-05-17 17:49:56', 108),
(76, 'Clayman', '2020-05-17 17:50:30', '2020-05-17 17:50:30', 108),
(77, 'Smart', '2020-05-17 17:50:55', '2020-05-17 17:50:55', 108),
(78, 'Linguiça', '2020-05-17 17:52:31', '2020-05-17 17:52:31', 3),
(79, 'Abel', '2020-05-17 17:53:54', '2020-05-17 17:53:54', 11),
(80, 'Breno', '2020-05-17 17:53:58', '2020-05-17 17:53:58', 11),
(81, 'Charles', '2020-05-17 17:54:02', '2020-05-17 17:54:02', 11),
(82, 'Dark Souls', '2020-05-17 17:54:30', '2020-05-17 17:54:30', 8),
(83, 'GTA', '2020-05-17 17:54:34', '2020-05-17 17:54:34', 8),
(84, 'Crash ', '2020-05-17 17:55:09', '2020-05-17 17:55:09', 8),
(85, 'Silent Hill', '2020-05-17 17:55:18', '2020-05-17 17:55:18', 8),
(86, 'Fifa', '2020-05-17 17:55:22', '2020-05-17 17:55:22', 8),
(87, 'c', '2020-05-17 17:55:25', '2020-05-17 17:55:25', 8),
(88, 'Percy Jackson', '2020-05-17 17:58:10', '2020-05-17 17:58:10', 32),
(89, 'AC/DC', '2020-05-17 18:02:23', '2020-05-17 18:02:23', 105),
(90, 'Tchaikovsky', '2020-05-17 18:08:29', '2020-05-17 18:08:29', 105),
(92, 'Preto', '2020-05-19 14:07:27', '2020-05-19 14:07:27', 31),
(93, 'D', '2020-05-19 14:25:04', '2020-05-19 14:25:04', 114);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de tabela `words`
--
ALTER TABLE `words`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;