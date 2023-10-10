-- Adminer 4.8.1 MySQL 5.7.42 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `projeto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto`;

DROP TABLE IF EXISTS `estabelecimentos`;
CREATE TABLE `estabelecimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `numLojas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `estabelecimentos` (`id`, `nome`, `endereco`, `cidade`, `numLojas`) VALUES
(1,	'Araucária',	'Rua João da Silva, 50',	'Curitiba',	2),
(2,	'Bom Jesus',	'Rua Silva João, 365',	'Curitiba',	2),
(3,	'Abelhão',	'Av. das Vespas',	'Abelhudos',	5),
(4,	'Mufatto',	'Marechal Floriano Peixoto, 2560',	'Curitiba',	10),
(5,	'Condro',	'Av. das Torres',	'Curitiba',	20);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `nome`, `marca`, `quantidade`) VALUES
(2,	'Café Soluvel',	'Três Corações',	500),
(3,	'Refrigerante',	'Cini',	2),
(4,	'Suco de Uva',	'Del Valle',	1),
(18,	'Achocolatado',	'Nescau',	750),
(19,	'Leite',	'Tirol',	1),
(20,	'Arroz',	'Buriti',	5),
(21,	'Feijão',	'Pé Vermelho',	5),
(22,	'Farinha de Trigo',	'Pinduca',	1);

DROP TABLE IF EXISTS `produto_estabelecimento`;
CREATE TABLE `produto_estabelecimento` (
  `prodestabId` int(11) NOT NULL AUTO_INCREMENT,
  `prodId` int(11) NOT NULL,
  `estabId` int(11) NOT NULL,
  `prodestabPreco` float NOT NULL,
  PRIMARY KEY (`prodestabId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `produto_estabelecimento` (`prodestabId`, `prodId`, `estabId`, `prodestabPreco`) VALUES
(1,	2,	1,	5),
(2,	20,	4,	10.95),
(3,	20,	1,	10.1),
(4,	22,	5,	15.99),
(5,	21,	2,	7.89),
(6,	4,	3,	8.99),
(7,	3,	4,	5.49);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1,	'Erick Martins',	'erick.martins@diprotec.com.br',	'7c4a8d09ca3762af61e59520943dc26494f8941b');

-- 2023-10-10 03:35:54
