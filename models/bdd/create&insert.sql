-- MySQL Script generated by MySQL Workbench
-- Tue Apr 30 09:55:11 2019
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
  `id` INT NOT NULL,
  `mail` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `statut` ENUM('prof', 'eleve', 'admin', 'entreprise') NULL,
  `avatar` VARCHAR(255) NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `nom_ecole` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`projet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`projet` (
  `id` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`groupe` (
  `id` INT NOT NULL,
  `idvm` VARCHAR(45) NOT NULL,
  `port` INT NOT NULL,
  `statut` ENUM('dispo', 'qualifié', 'affecté') NOT NULL,
  `groupe_id` INT NOT NULL,
  `user_has_groupe_id` INT NOT NULL,
  `projet_id` INT NOT NULL,
  `semestre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_groupe_projet1_idx` (`projet_id` ASC) ,
  CONSTRAINT `fk_groupe_projet1`
    FOREIGN KEY (`projet_id`)
    REFERENCES `auberge`.`projet` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auberge`.`user_has_groupe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auberge`.`user_has_groupe` (
  `user_id` INT NOT NULL,
  `groupe_id` INT NOT NULL,
  `id` INT NOT NULL,
  INDEX `fk_user_has_projet_projet1_idx` (`groupe_id` ASC) ,
  INDEX `fk_user_has_projet_user_idx` (`user_id` ASC) ,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_user_has_projet_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `auberge`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_projet_projet1`
    FOREIGN KEY (`groupe_id`)
    REFERENCES `auberge`.`groupe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `auberge`.`user`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (1, 'patoche@intechinfo.fr', 'patoche', 'prof', NULL, 'Patrice', 'Patoche', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (2 , 'isma@intechinfo.fr', 'isma49', 'eleve', NULL, 'Nimzill', 'ismael', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (3, 'ben@intechinfo.fr', 'root', 'admin', NULL, 'Rodriguez', 'Benjamin ', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (4, 'yann@intechinfo.fr', 'root', 'admin', NULL, 'Simachel', 'Yann', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (5, 'erwan@intehcinfo.fr', 'root', 'admin', NULL, 'Hacques', 'Erwan', 'intech ');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (6, 'olive@intechinfo.fr', 'test', 'eleve', NULL, 'Lespagnon', 'olivier', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (7, 'coco@intechinfo.fr', 'coco', 'prof', NULL, 'Toto', 'coco', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (8 , 'chris@intechinfo.fr', 'red', 'eleve', NULL, 'Delcourt', 'christopher', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (9, 'nahel@intechinfo.fr', 'test', 'entreprise', NULL, 'Master', 'Nahel', 'intech');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (10, 'ed@intechinfo.fr', 'ed', 'eleve', NULL, 'ed', 'momo', 'intech');

COMMIT;


-- -----------------------------------------------------
-- Data for table `auberge`.`projet`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`projet` (`id`, `nom`) VALUES (1, 'un');
INSERT INTO `auberge`.`projet` (`id`, `nom`) VALUES (2, 'deux');
INSERT INTO `auberge`.`projet` (`id`, `nom`) VALUES (3, 'trois');

COMMIT;


-- -----------------------------------------------------
-- Data for table `auberge`.`groupe`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`groupe` (`id`, `idvm`, `port`, `statut`, `groupe_id`, `user_has_groupe_id`, `projet_id`, `semestre`) VALUES (1, '1', 500, 'affecté', 1, 1, 1, '1');
INSERT INTO `auberge`.`groupe` (`id`, `idvm`, `port`, `statut`, `groupe_id`, `user_has_groupe_id`, `projet_id`, `semestre`) VALUES (2, '2', 501, 'affecté', 2, 3, 2, '2');

COMMIT;


-- -----------------------------------------------------
-- Data for table `auberge`.`user_has_groupe`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`user_has_groupe` (`user_id`, `groupe_id`, `id`) VALUES (2, 1, 1);
INSERT INTO `auberge`.`user_has_groupe` (`user_id`, `groupe_id`, `id`) VALUES (6, 1, 2);
INSERT INTO `auberge`.`user_has_groupe` (`user_id`, `groupe_id`, `id`) VALUES (8, 2, 3);
INSERT INTO `auberge`.`user_has_groupe` (`user_id`, `groupe_id`, `id`) VALUES (10, 2, 4);

COMMIT;

