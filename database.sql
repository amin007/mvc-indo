-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nokp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`id`, `nama`, `nokp`, `email`, `jurusan`) VALUES
(1,	'Awek Cun 1',	'123456',	'awekcun1@duduk.mana',	'Art'),
(2,	'Awek Cun 2',	'456987',	'awekcun1@duduk.mana',	'Komputer'),
(3,	'pakwe1',	'236547',	'pakwe1@duduk.mana',	'Perniagaan'),
(4,	'pakwe2',	'456321',	'pakwe2@duduk.mana',	'Muzik'),
(5,	'Adik Cun',	'852177',	'adikcun@duduk.mana',	'Perniagaan'),
(6,	'Adik Cun 2',	'741258',	'adikcun2@duduk.mana',	'Art'),
(12,	'Adik cun 3',	'852147',	'adikcun3@duduk.mana',	'Perniagaan');

-- 2019-04-28 07:42:53