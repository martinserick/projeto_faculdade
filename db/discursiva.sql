-- Adminer 4.8.1 MySQL 5.7.43 dump

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
(6,	'Maxxi Atacadista',	'Linha Verde',	'Curitiba',	5),
(7,	'Assai',	'Rua Desembargador Westphalen, 2356',	'Curitiba',	5);

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `produtos` (`id`, `nome`, `marca`, `quantidade`) VALUES
(2,	'Café Soluvel',	'Três Corações',	500),
(3,	'Refrigerante',	'Cini',	2),
(4,	'Suco de Uva',	'Del Valle',	1),
(18,	'Achocolatado',	'Nescau',	750),
(19,	'Leite',	'Tirol',	1),
(20,	'Arroz',	'Buriti',	5),
(21,	'Feijão',	'Pé Vermelho',	5),
(22,	'Farinha de Trigo',	'Pinduca',	1),
(23,	'Refrigerante',	'Coca Cola',	2),
(24,	'Macarrão',	'Panco',	500),
(25,	'Macarrão',	'Panco',	500),
(26,	'Detergente',	'Minuano',	1),
(27,	'Sabonete',	'Phebo',	1),
(28,	'Sabão em pó',	'OMO',	1),
(29,	'Queijo',	'Seara',	200);

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
(7,	3,	4,	5.49),
(8,	23,	6,	12),
(9,	2,	2,	15),
(10,	28,	7,	16.5),
(11,	21,	7,	19.9),
(12,	3,	1,	4.39),
(13,	3,	2,	4.12),
(14,	3,	3,	4.7),
(15,	3,	7,	4.29),
(16,	2,	7,	4.99),
(17,	20,	2,	10.09),
(18,	4,	7,	8.5),
(19,	23,	1,	6.99);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1,	'Erick Martins',	'erick.martins@diprotec.com.br',	'7c4a8d09ca3762af61e59520943dc26494f8941b');

-- 2023-10-10 21:16:40
