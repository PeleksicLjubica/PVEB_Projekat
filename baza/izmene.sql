INSERT INTO `mydb`.`predmet` (`naziv`) VALUES ('uvit');
INSERT INTO `mydb`.`vezba` (`naziv`, `opis`, `tip`, `Predmet_id_predmeta`) VALUES ('vezba1', 'ovo je vezba1 ', '1', '1');
INSERT INTO `mydb`.`profesor` (`ime`, `prezime`) VALUES ('Andjelka', 'Zecevic');
INSERT INTO `mydb`.`katedra` (`godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES ('2', '2016', 'rezija', '1');
INSERT INTO `mydb`.`film` (`Vezba_id_vezbe`, `godina_proizvodnje`, `naziv_filma`, `trajanje`) VALUES ('1', '2015', 'FILM', '60');

ALTER TABLE `student` CHANGE `Katedra_id_katedre` `Katedra_naziv` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
INSERT INTO `student`(`indeks`, `ime`, `prezime`, `e-mail`, `godina_studija`, `Katedra_naziv`) VALUES (123456,'Mika','Mikic','mika.mikic@gmail.com',2,'rezija')

DROP TABLE IF EXISTS `scenarista`;
CREATE TABLE IF NOT EXISTS `scenarista` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film1_idx` (`Film_id_filma`),
  KEY `fk_Snimatelj_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

