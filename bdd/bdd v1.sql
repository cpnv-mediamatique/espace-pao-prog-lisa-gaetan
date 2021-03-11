-- MySQL Script generated by MySQL Workbench
-- Thu Mar 11 14:11:22 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pao
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pao
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pao` DEFAULT CHARACTER SET utf8 ;
USE `pao` ;

-- -----------------------------------------------------
-- Table `pao`.`utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pao`.`utilisateur` (
  `id_utilisateur` INT NOT NULL AUTO_INCREMENT,
  `user_nom` VARCHAR(100) NULL,
  `user_mdp` VARCHAR(450) NULL,
  `user_mail` VARCHAR(100) NULL,
  `user_rang` ENUM('élève', 'enseignant', 'élève cbe') NULL,
  `token`LONGTEXT() NULL,
  PRIMARY KEY (`id_utilisateur`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
