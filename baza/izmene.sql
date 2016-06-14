ALTER TABLE `student` CHANGE `e-mail` `e_mail` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `katedra` ADD `id_katedre` INT NOT NULL AFTER `Profesor_id_profesora`;

ALTER TABLE `mydb`.`vezba_katedra`
DROP FOREIGN KEY `fk_Katedra_has_Vezba_Katedra1`;
ALTER TABLE `mydb`.`vezba_katedra`
DROP INDEX `fk_Katedra_has_Vezba_Katedra1_idx` ;

ALTER TABLE `mydb`.`katedra`
CHANGE COLUMN `id_katedre` `id_katedre` INT(11) NOT NULL AUTO_INCREMENT ,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`id_katedre`);

ALTER TABLE `mydb`.`vezba_katedra`
DROP COLUMN `Katedra_naziv`,
DROP COLUMN `Katedra_skolska_godina`,
DROP COLUMN `Katedra_godina_studija`;

ALTER TABLE `mydb`.`vezba_katedra`
ADD COLUMN `Katedra_id_katedre` INT(11) NOT NULL AFTER `Vezba_id_vezbe`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Vezba_id_vezbe`, `Katedra_id_katedre`);
ALTER TABLE `mydb`.`vezba_katedra`
ADD CONSTRAINT `fk_IvanIsTheBoss`
  FOREIGN KEY (`Vezba_id_vezbe`)
  REFERENCES `mydb`.`katedra` (`id_katedre`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `mydb`.`vezba_katedra`
DROP FOREIGN KEY `fk_IvanIsTheBoss`;
ALTER TABLE `mydb`.`vezba_katedra`
DROP PRIMARY KEY;
ALTER TABLE `mydb`.`vezba_katedra`
ADD CONSTRAINT `fk_IvanIsTheBoss`
  FOREIGN KEY (`Katedra_id_katedre`)
  REFERENCES `mydb`.`katedra` (`id_katedre`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

