-- MySQL Script generated by MySQL Workbench
-- Fri Jun  7 11:29:26 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema auberge
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema auberge
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `auberge` DEFAULT CHARACTER SET utf8 ;
USE `auberge` ;

-- -----------------------------------------------------
-- Table `auberge`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `statut` ENUM('prof', 'eleve', 'admin') NULL,
  `avatar` VARCHAR(255) NULL,
  `semestre` VARCHAR(45) NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `nom_ecole` VARCHAR(45) NULL,
  `actif` ENUM('up', 'down', 'ban') NOT NULL,
  `disponible` ENUM('y', 'n') NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`projet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`projet` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `resume` VARCHAR(45) NULL,
  `entreprise` VARCHAR(45) NULL,
  `semestre` VARCHAR(45) NULL,
  `datepublication` DATETIME NULL,
  `statut` ENUM('dispo', 'qualifié', 'affecté') NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`Ip`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`Ip` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NULL,
  `free` ENUM('yes', 'no') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`groupe` (
  `port` INT NOT NULL,
  
  `id` INT NOT NULL AUTO_INCREMENT,
  `projet_id` INT NOT NULL,
  `Ip_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_groupe_projet1_idx` (`projet_id` ASC) ,
  INDEX `fk_groupe_Ip1_idx` (`Ip_id` ASC) ,
  CONSTRAINT `fk_groupe_projet1`
    FOREIGN KEY (`projet_id`)
    REFERENCES `auberge`.`projet` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_groupe_Ip1`
    FOREIGN KEY (`Ip_id`)
    REFERENCES `auberge`.`Ip` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`user_has_groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`user_has_groupe` (
  `user_id` INT NOT NULL,
  `groupe_id` INT NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  INDEX `fk_user_has_groupe_groupe1_idx` (`groupe_id` ASC) ,
  INDEX `fk_user_has_groupe_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_user_has_groupe_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `auberge`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_groupe_groupe1`
    FOREIGN KEY (`groupe_id`)
    REFERENCES `auberge`.`groupe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

USE `auberge`;
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'barnabe@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'Barnabe', 'Morgan', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'benachour@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'Benachour', 'Ihsane', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'bertonneau@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'BERTONNEAU', 'Clément', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'bury@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'BURY', 'Thomas', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'mcamara@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'CAMARA', 'Mame Yacine', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'caulier@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'CAULIER', 'Rémi', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'cellier@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'CELLIER', 'Titouan', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'achafai@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'CHAFAI', 'Amine', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'cormand@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'CORMAND', 'Quentin', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'delorme-glorie@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'DELORME-GLORIEUX', 'Romain', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'favier@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'FAVIER', 'Jérémy', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'kferreira@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'FERREIRA', 'Kevin', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'galloni@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'GALLONI', 'Spencer', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'jeanne@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'JEANNE', 'Joseph', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'khaldi@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'KHALDI', 'Zine eddine', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'dlopes@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'LOPES', 'Dylan', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'louchelart@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'LOUCHELART', 'Cédric', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'michon@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'MICHON', 'Mathieu', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'moatty@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'MOATTY', 'Avishaï', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'pincent@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'PINCENT', 'Tanguy', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'roussin@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'ROUSSIN', 'Antoine', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'sachchithanant@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'SACHCHITHANANTHAN', 'Tharshigan', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'tamayolondres@intechinfo.fr', NULL , 'eleve', 'https://cdn130.picsart.com/256104012007212.png?r1024x1024', 'TAMAYO LONDRES', 'Annia', 'intech', 'down');
COMMIT;


-- -----------------------------------------------------
-- Data for table `auberge`.`projet`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'projetUn', 'dispo');
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'projetDeux', 'dispo');
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'projetTrois', 'dispo');

COMMIT;



