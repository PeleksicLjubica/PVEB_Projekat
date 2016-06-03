INSERT INTO `mydb`.`predmet` (`naziv`) VALUES ('uvit');
INSERT INTO `mydb`.`vezba` (`naziv`, `opis`, `tip`, `Predmet_id_predmeta`) VALUES ('vezba1', 'ovo je vezba1 ', '1', '1');
INSERT INTO `mydb`.`profesor` (`ime`, `prezime`) VALUES ('Andjelka', 'Zecevic');
INSERT INTO `mydb`.`katedra` (`godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES ('2', '2016', 'rezija', '1');
INSERT INTO `mydb`.`film` (`Vezba_id_vezbe`, `godina_proizvodnje`, `naziv_filma`, `trajanje`) VALUES ('1', '2015', 'FILM', '60');

