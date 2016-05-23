-- MySQL Script generated by MySQL Workbench
-- 05/23/16 19:22:45
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Vezba`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vezba` (
  `id_vezbe` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NULL,
  `opis` LONGTEXT NULL,
  `tip` CHAR(1) NULL,
  `predmet` VARCHAR(70) NULL,
  PRIMARY KEY (`id_vezbe`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Film`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Film` (
  `id_filma` INT NOT NULL AUTO_INCREMENT,
  `godina_proizvodnje` INT NULL,
  `naziv_filma` VARCHAR(45) NULL,
  `trajanje` INT NULL,
  `Vezba_id_vezbe` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_filma`, `Vezba_id_vezbe`),
  INDEX `fk_Film_Vezba1_idx` (`Vezba_id_vezbe` ASC),
  CONSTRAINT `fk_Film_Vezba1`
    FOREIGN KEY (`Vezba_id_vezbe`)
    REFERENCES `mydb`.`Vezba` (`id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Student` (
  `id_studenta` INT NOT NULL AUTO_INCREMENT,
  `indeks` MEDIUMTEXT NULL,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  `godina_studija` INT NULL,
  `Katedra_id_katedre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_studenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Snimatelj`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Snimatelj` (
  `id_snimatelja` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `Student_id_studenta` INT NOT NULL,
  PRIMARY KEY (`id_snimatelja`),
  INDEX `fk_Film_has_Student_Film1_idx` (`Film_id_filma` ASC),
  INDEX `fk_Snimatelj_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Film_has_Student_Film1`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Snimatelj_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Reziser`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Reziser` (
  `id_rezisera` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `Student_id_studenta` INT NOT NULL,
  INDEX `fk_Film_has_Student_Film2_idx` (`Film_id_filma` ASC),
  PRIMARY KEY (`id_rezisera`),
  INDEX `fk_Reziser_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Film_has_Student_Film2`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reziser_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Producent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Producent` (
  `id_prodicenta` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `Student_id_studenta` INT NOT NULL,
  PRIMARY KEY (`id_prodicenta`),
  INDEX `fk_Film_has_Student_Film3_idx` (`Film_id_filma` ASC),
  INDEX `fk_Producent_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Film_has_Student_Film3`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producent_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Montazer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Montazer` (
  `id_montazer` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `Student_id_studenta` INT NOT NULL,
  PRIMARY KEY (`id_montazer`),
  INDEX `fk_Film_has_Student_Film4_idx` (`Film_id_filma` ASC),
  INDEX `fk_Montazer_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Film_has_Student_Film4`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Montazer_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Glumac`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Glumac` (
  `id_glumca` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  `Student_id_studenta` INT NULL,
  PRIMARY KEY (`id_glumca`),
  INDEX `fk_Film_has_Student_Film5_idx` (`Film_id_filma` ASC),
  INDEX `fk_Glumac_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Film_has_Student_Film5`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Glumac_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Osnovne_informacije`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Osnovne_informacije` (
  `Film_id_filma` INT NOT NULL,
  `sinopsis` LONGTEXT NULL,
  `arhivska_muzika` LONGTEXT NULL,
  `biografija_rezisera` LONGTEXT NULL,
  `napomene` LONGTEXT NULL,
  INDEX `fk_Info_film_Film1_idx` (`Film_id_filma` ASC),
  PRIMARY KEY (`Film_id_filma`),
  CONSTRAINT `fk_Info_film_Film1`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tehnicka_specifikacija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Tehnicka_specifikacija` (
  `Film_id_filma` INT NOT NULL,
  `osnovni_format` INT NULL,
  `filmski_format` INT NULL,
  `video_format` INT NULL,
  `tel_standard` INT NULL,
  `analiza_slike` INT NULL,
  `format_slike` VARCHAR(15) NULL,
  `br_sl_sek` INT NULL,
  `video_nosac` INT NULL,
  `vrsta_fajla` VARCHAR(45) NULL,
  `zvuk` INT NULL,
  `broj_kanala` INT NULL,
  `redukcija_suma` INT NULL,
  `varijacije_zvuka` LONGTEXT NULL,
  `napomene` LONGTEXT NULL,
  INDEX `fk_Tehnicka_specifikacija_Film1_idx` (`Film_id_filma` ASC),
  PRIMARY KEY (`Film_id_filma`),
  CONSTRAINT `fk_Tehnicka_specifikacija_Film1`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Podrska`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Podrska` (
  `id_podrske` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `tip_podrske` VARCHAR(45) NULL,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  `Student_id_studenta` INT NULL,
  PRIMARY KEY (`id_podrske`),
  INDEX `fk_Podrska_Student1_idx` (`Student_id_studenta` ASC),
  CONSTRAINT `fk_Podrska_Film1`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Podrska_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Karton_prilog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Karton_prilog` (
  `id_priloga` INT NOT NULL AUTO_INCREMENT,
  `Film_id_filma` INT NOT NULL,
  `tip_priloga` VARCHAR(45) NOT NULL,
  `putanja` VARCHAR(300) NULL,
  PRIMARY KEY (`id_priloga`),
  CONSTRAINT `fk_Karton_prilog_Film1`
    FOREIGN KEY (`Film_id_filma`)
    REFERENCES `mydb`.`Film` (`id_filma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Profesor` (
  `id_profesora` INT NOT NULL AUTO_INCREMENT,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  PRIMARY KEY (`id_profesora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Katedra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Katedra` (
  `godina_studija` INT NOT NULL,
  `skolska_godina` INT NOT NULL,
  `naziv` VARCHAR(45) NOT NULL,
  `Profesor_id_profesora` INT NOT NULL,
  PRIMARY KEY (`godina_studija`, `skolska_godina`, `naziv`),
  INDEX `fk_Katedra_Profesor1_idx` (`Profesor_id_profesora` ASC),
  CONSTRAINT `fk_Katedra_Profesor1`
    FOREIGN KEY (`Profesor_id_profesora`)
    REFERENCES `mydb`.`Profesor` (`id_profesora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vezba_studenti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vezba_studenti` (
  `Vezba_id_vezbe` VARCHAR(45) NOT NULL,
  `Student_id_studenta` INT NOT NULL,
  PRIMARY KEY (`Vezba_id_vezbe`, `Student_id_studenta`),
  INDEX `fk_Vezba_has_Student_Student1_idx` (`Student_id_studenta` ASC),
  INDEX `fk_Vezba_has_Student_Vezba1_idx` (`Vezba_id_vezbe` ASC),
  CONSTRAINT `fk_Vezba_has_Student_Vezba1`
    FOREIGN KEY (`Vezba_id_vezbe`)
    REFERENCES `mydb`.`Vezba` (`id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vezba_has_Student_Student1`
    FOREIGN KEY (`Student_id_studenta`)
    REFERENCES `mydb`.`Student` (`id_studenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vezbu_profesori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vezbu_profesori` (
  `Vezba_id_vezbe` VARCHAR(45) NOT NULL,
  `Profesor_id_profesora` INT NOT NULL,
  PRIMARY KEY (`Vezba_id_vezbe`, `Profesor_id_profesora`),
  INDEX `fk_Vezba_has_Profesor_Profesor1_idx` (`Profesor_id_profesora` ASC),
  INDEX `fk_Vezba_has_Profesor_Vezba1_idx` (`Vezba_id_vezbe` ASC),
  CONSTRAINT `fk_Vezba_has_Profesor_Vezba1`
    FOREIGN KEY (`Vezba_id_vezbe`)
    REFERENCES `mydb`.`Vezba` (`id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vezba_has_Profesor_Profesor1`
    FOREIGN KEY (`Profesor_id_profesora`)
    REFERENCES `mydb`.`Profesor` (`id_profesora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Administrator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Administrator` (
  `sifra` VARCHAR(45) NOT NULL,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  PRIMARY KEY (`sifra`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Katedra_film`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Katedra_film` (
  `Film_id_filma` INT NOT NULL,
  `Film_Vezba_id_vezbe` VARCHAR(45) NOT NULL,
  `Katedra_id_katedre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Film_id_filma`, `Film_Vezba_id_vezbe`, `Katedra_id_katedre`),
  INDEX `fk_Film_has_Katedra_Film1_idx` (`Film_id_filma` ASC, `Film_Vezba_id_vezbe` ASC),
  CONSTRAINT `fk_Film_has_Katedra_Film1`
    FOREIGN KEY (`Film_id_filma` , `Film_Vezba_id_vezbe`)
    REFERENCES `mydb`.`Film` (`id_filma` , `Vezba_id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Nagrada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Nagrada` (
  `id_nagrade` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NULL,
  `Film_id_filma` INT NOT NULL,
  `Film_Vezba_id_vezbe` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_nagrade`),
  INDEX `fk_Nagrada_Film1_idx` (`Film_id_filma` ASC, `Film_Vezba_id_vezbe` ASC),
  CONSTRAINT `fk_Nagrada_Film1`
    FOREIGN KEY (`Film_id_filma` , `Film_Vezba_id_vezbe`)
    REFERENCES `mydb`.`Film` (`id_filma` , `Vezba_id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vezba_katedra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vezba_katedra` (
  `Katedra_godina_studija` INT NOT NULL,
  `Katedra_skolska_godina` INT NOT NULL,
  `Katedra_naziv` VARCHAR(45) NOT NULL,
  `Vezba_id_vezbe` INT NOT NULL,
  PRIMARY KEY (`Katedra_godina_studija`, `Katedra_skolska_godina`, `Katedra_naziv`, `Vezba_id_vezbe`),
  INDEX `fk_Katedra_has_Vezba_Vezba1_idx` (`Vezba_id_vezbe` ASC),
  INDEX `fk_Katedra_has_Vezba_Katedra1_idx` (`Katedra_godina_studija` ASC, `Katedra_skolska_godina` ASC, `Katedra_naziv` ASC),
  CONSTRAINT `fk_Katedra_has_Vezba_Katedra1`
    FOREIGN KEY (`Katedra_godina_studija` , `Katedra_skolska_godina` , `Katedra_naziv`)
    REFERENCES `mydb`.`Katedra` (`godina_studija` , `skolska_godina` , `naziv`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Katedra_has_Vezba_Vezba1`
    FOREIGN KEY (`Vezba_id_vezbe`)
    REFERENCES `mydb`.`Vezba` (`id_vezbe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
