-- MySQL Script generated by MySQL Workbench
-- Wed Apr 24 09:20:51 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT NOT NULL,
  `mail` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `statut` ENUM('prof', 'eleve', 'admin') NULL,
  `avatar` VARCHAR(255) NULL,
  `semestre` VARCHAR(45) NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `nom_ecole` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`projet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`projet` (
  `idprojet` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`idprojet`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`groupe` (
  `id` INT NOT NULL,
  `idvm` VARCHAR(45) NOT NULL,
  `port` INT NOT NULL,
  `statut` ENUM('dispo', 'qualifié', 'affecté') NULL,
  `groupe_id` INT NOT NULL,
  `user_has_groupe_id` INT NOT NULL,
  `projet_id` INT NOT NULL,
  PRIMARY KEY (`id`, `port`),
  INDEX `fk_groupe_projet1_idx` (`projet_id` ASC) VISIBLE,
  CONSTRAINT `fk_groupe_projet1`
    FOREIGN KEY (`projet_id`)
    REFERENCES `mydb`.`projet` (`idprojet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user_has_groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_has_groupe` (
  `user_id` INT NOT NULL,
  `groupe_id` INT NOT NULL,
  `id` INT NOT NULL,
  INDEX `fk_user_has_projet_projet1_idx` (`groupe_id` ASC) VISIBLE,
  INDEX `fk_user_has_projet_user_idx` (`user_id` ASC) VISIBLE,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_user_has_projet_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_projet_projet1`
    FOREIGN KEY (`groupe_id`)
    REFERENCES `mydb`.`groupe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;