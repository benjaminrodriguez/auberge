USE `auberge`;
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'a', NULL , 'prof', NULL, 'Patrice', 'Patoche', 'intech', 'down');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL , 'isma@intechinfo.fr', 'isma49', 'eleve', NULL, 'Nimzill', 'ismael', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'ben@intechinfo.fr', 'root', 'admin', NULL, 'Rodriguez', 'Benjamin ', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'yann@intechinfo.fr', 'root', 'admin', NULL, 'Simachel', 'Yann', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'erwan@intehcinfo.fr', 'root', 'admin', NULL, 'Hacques', 'Erwan', 'intech ', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'olive@intechinfo.fr', 'test', 'eleve', NULL, 'Lespagnon', 'olivier', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'coco@intechinfo.fr', 'coco', 'prof', NULL, 'Toto', 'coco', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL , 'chris@intechinfo.fr', 'red', 'eleve', NULL, 'Delcourt', 'christopher', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'nahel@intechinfo.fr', 'test', 'entreprise', NULL, 'Master', 'Nahel', 'intech', 'up');
INSERT INTO `auberge`.`user` (`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`, `actif`) VALUES (NULL, 'ed@intechinfo.fr', 'ed', 'eleve', NULL, 'ed', 'momo', 'intech', 'up');

COMMIT;


-- -----------------------------------------------------
-- Data for table `auberge`.`projet`
-- -----------------------------------------------------
START TRANSACTION;
USE `auberge`;
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'un', 'dispo');
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'deux', 'dispo');
INSERT INTO `auberge`.`projet` (`id`, `nom`, `statut`) VALUES (NULL, 'trois', 'dispo');

COMMIT;



