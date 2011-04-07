CREATE DATABASE IF NOT EXISTS consolitex;
USE consolitex;

--
-- Definition of table `guardia`
--

DROP TABLE IF EXISTS `guardias`;



CREATE TABLE `guardias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(25) NOT NULL DEFAULT '',
  `hora` varchar(25) NOT NULL DEFAULT '',
  `lunes` varchar(20) DEFAULT '',
  `martes` varchar(20) DEFAULT '' ,
  `miercoles` varchar(20) DEFAULT '' ,
  `jueves` varchar(20) DEFAULT '' ,
  `viernes` varchar(20) DEFAULT '' ,
  `sabado` varchar(20) DEFAULT '' ,
  `domingo` varchar(20) DEFAULT '' ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES ( 1,'Sambil', '1:30 a 2:30', '111', '41', '122', '111', '41', '122', '333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (2, 'Sambil', '2:30 a 3:30', '111', '41', '122', '111', '41', '122', '333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (3, 'Sambil', '4:30 a 5:30', '111', '41', '122', '111', '41', '122', '333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (4, 'Sambil', '5:30 a 6:30', '111', '41', '122', '111', '41', '122', '333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (5, 'Plazza', '2:30 a 3:30', '1111', '141', '1122', '2111', '241', '1122', '1333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (6, 'Plazza', '4:30 a 5:30', '1111', '141', '1122', '2111', '241', '1122', '1333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (7, 'Plazza', '5:30 a 6:30', '1111', '141', '1122', '2111', '241', '1122', '1333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (8, 'CAPRI', '2:30 a 3:30', '11', '141', '12', '23111', '23341', '31122', '31333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (9, 'CAPRI', '4:30 a 5:30', '11', '141', '12', '21311', '33241', '31122', '31333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (10, 'CAPRI', '5:30 a 6:30', '11', '141', '12', '23111', '3241', '31122', '31333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (11, 'NAVONA', '2:30 a 3:30', '', '', '', '23111', '23341', '31122', '31333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (12, 'NAVONA', '4:30 a 5:30', '', '', '', '21311', '33241', '31122', '31333' );
INSERT INTO guardias (id, lugar, hora, lunes, martes, miercoles, jueves, viernes, sabado , domingo) VALUES (13, 'NAVONA', '5:30 a 6:30', '', '', '', '23111', '3241', '31122', '31333' );
