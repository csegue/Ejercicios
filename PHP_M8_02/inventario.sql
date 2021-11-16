# creamos la BD:
CREATE DATABASE IF NOT EXISTS inventario;
# relacionar la BD
USE inventario;
#creamos las tablas


CREATE TABLE IF NOT EXISTS compra (
  id int(11) NOT NULL AUTO_INCREMENT,
  NomComp varchar(50) NOT NULL,
  PreComp float(4,2) NOT NULL,
  CanComp int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

INSERT INTO compra (id, NomComp, PreComp, CanComp) VALUES
(36, 'Entrecot de Ternera Baja', 13.58, 4),
(41, 'Cola.Cao', 3.68, 4),
(11, 'Leche Desnatada', 0.59, 4),
(17, 'Tomate Frito', 2.25, 1),
(39, 'Longanizas', 5.34, 12),
(19, 'CalÃ§ots', 3.25, 5),
(35, 'Pechugas pavo', 3.75, 4),
(40, 'ColaCao', 3.68, 4),
(26, 'Garbanzos', 0.74, 7),
(46, 'Pisto', 12.97, 1),
(29, 'Manzanas', 5.24, 7),
(45, 'Sobrasada', 7.69, 1),
(43, 'Galletas Maria', 2.14, 1),
(47, 'Pisto', 12.97, 1),
(48, 'Tequila Dorada', 14.90, 2),
(49, 'Fresas Salvajes', 4.25, 1);
COMMIT;