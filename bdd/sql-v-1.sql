SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `Ladix` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Ladix` ;

-- -----------------------------------------------------
-- Table `Ladix`.`Projets`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Projets` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nomProjet` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Familles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Familles` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `labelFamille` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Structures`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Structures` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nomStructure` VARCHAR(200) NOT NULL ,
  `Familles_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Structure_Familles1` (`Familles_id` ASC) ,
  CONSTRAINT `fk_Structure_Familles1`
    FOREIGN KEY (`Familles_id` )
    REFERENCES `Ladix`.`Familles` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Createurs`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Createurs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nomCreateur` VARCHAR(45) NOT NULL ,
  `prenomCreateur` VARCHAR(45) NOT NULL ,
  `dateNaissanceCreateur` DATE NOT NULL ,
  `villeDomicialisation` VARCHAR(45) NOT NULL ,
  `Projets_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Createurs_Projets1` (`Projets_id` ASC) ,
  CONSTRAINT `fk_Createurs_Projets1`
    FOREIGN KEY (`Projets_id` )
    REFERENCES `Ladix`.`Projets` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Groupes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Groupes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `labelGroupes` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Questions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Questions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `labelQuestion` TEXT NOT NULL ,
  `Groupes_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Questions_Groupes1` (`Groupes_id` ASC) ,
  CONSTRAINT `fk_Questions_Groupes1`
    FOREIGN KEY (`Groupes_id` )
    REFERENCES `Ladix`.`Groupes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Criteres`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Criteres` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `labelCritere` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Reponses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Reponses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Questions_id` INT NOT NULL ,
  `Criteres_id` INT NOT NULL ,
  `labelReponse` TEXT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Reponses_Questions1` (`Questions_id` ASC) ,
  INDEX `fk_Reponses_Criteres1` (`Criteres_id` ASC) ,
  CONSTRAINT `fk_Reponses_Questions1`
    FOREIGN KEY (`Questions_id` )
    REFERENCES `Ladix`.`Questions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reponses_Criteres1`
    FOREIGN KEY (`Criteres_id` )
    REFERENCES `Ladix`.`Criteres` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Membres`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Membres` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nomMembre` VARCHAR(45) NOT NULL ,
  `prenomMembre` VARCHAR(45) NOT NULL ,
  `Structure_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Membres_Structure` (`Structure_id` ASC) ,
  CONSTRAINT `fk_Membres_Structure`
    FOREIGN KEY (`Structure_id` )
    REFERENCES `Ladix`.`Structures` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Membres_has_Projets`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Membres_has_Projets` (
  `Membres_id` INT NOT NULL ,
  `Projets_id` INT NOT NULL ,
  PRIMARY KEY (`Membres_id`, `Projets_id`) ,
  INDEX `fk_Membres_has_Projets_Projets1` (`Projets_id` ASC) ,
  INDEX `fk_Membres_has_Projets_Membres1` (`Membres_id` ASC) ,
  CONSTRAINT `fk_Membres_has_Projets_Membres1`
    FOREIGN KEY (`Membres_id` )
    REFERENCES `Ladix`.`Membres` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Membres_has_Projets_Projets1`
    FOREIGN KEY (`Projets_id` )
    REFERENCES `Ladix`.`Projets` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ladix`.`Resultats`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Ladix`.`Resultats` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Createurs_id` INT NOT NULL ,
  `Groupes_id` INT NOT NULL ,
  `Resultat` LONGTEXT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Resultats_Createurs1` (`Createurs_id` ASC) ,
  INDEX `fk_Resultats_Groupes1` (`Groupes_id` ASC) ,
  CONSTRAINT `fk_Resultats_Createurs1`
    FOREIGN KEY (`Createurs_id` )
    REFERENCES `Ladix`.`Createurs` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Resultats_Groupes1`
    FOREIGN KEY (`Groupes_id` )
    REFERENCES `Ladix`.`Groupes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
