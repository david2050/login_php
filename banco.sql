
<br />
<b>Warning</b>:  Use of undefined constant SERVER - assumed 'SERVER' (this will throw an Error in a future version of PHP) in <b>/srv/http/adminer/plugins/AdminerTheme.php</b> on line <b>31</b><br />
-- Adminer 4.8.0 MySQL 5.5.5-10.6.4-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `curso_login` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `curso_login`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`) VALUES
(1,	'teste',	'teste',	'Teste da Silva');

-- 2021-08-23 12:51:49
