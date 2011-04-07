CREATE DATABASE IF NOT EXISTS consolitex;
USE consolitex;

--
-- Definition of table `guardia`
--

DROP TABLE IF EXISTS `vendedor`;



CREATE TABLE `vendedor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `distincion` varchar(10) CHARACTER SET latin1 NOT NULL,
  `vendeplaza_id` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendeplaza_id` (`vendeplaza_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '1111', 'pedro', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '1123', 'pablo', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '11231', 'pablo a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '112311', 'pablo ae', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '1123113', 'pablo aer', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '321', 'jose', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '3211', 'jose a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '32113', 'jose ae', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '32114', 'jose aer', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '3211312', 'jose mi', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '234', 'cino', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '2341', 'rosa', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '23412', 'rosa a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '234123', 'rosa ae', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '222', 'rosa aer', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '2221', 'mami', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '22213', 'mami a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '2212213', 'mami ae', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '345', 'mami aer', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '3453', 'nena', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '34534', 'nena e', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '345345', 'nena rre', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '456', 'nena rred', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '4561', 'petra', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '45612', 'petra e', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '456123', 'petra e', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '4561234', 'maria', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '333', 'maria', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '3332', 'maria', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '33321', 'maria', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '333214', 'maria', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '555', 'luisa', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '5551', 'luisa', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '55512', 'luisa', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '555124', 'luisa', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '65', 'robert', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '651', 'robert', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '6512', 'robert', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '65124', 'robert a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '651245', 'robert a', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '88', 'perre', 'excelente', null );
INSERT INTO vendedor ( id, codigo, nombre, distincion,  vendeplaza_id ) VALUES ( null, '881', 'perre', 'excelente', null );