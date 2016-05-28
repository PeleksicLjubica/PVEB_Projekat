INSERT INTO `mydb`.`profesor` (`ime`, `prezime`) VALUES ('Petar', 'Radanovic');
INSERT INTO `mydb`.`katedra` (`godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES ('2016', '1', 'Montaza', '1');

CREATE TABLE `mydb`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));

INSERT INTO `mydb`.`users` (`name`, `email`, `password`) VALUES ('Milutin Markovic', 'wade@example.com', '12345');

