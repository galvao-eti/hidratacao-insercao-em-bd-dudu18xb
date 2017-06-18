-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema trabalho_pos_2017
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema trabalho_pos_2017
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `trabalho_pos_2017` DEFAULT CHARACTER SET utf8 ;
USE `trabalho_pos_2017` ;

-- -----------------------------------------------------
-- Table `trabalho_pos_2017`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trabalho_pos_2017`.`usuario` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `trabalho_pos_2017`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trabalho_pos_2017`.`produto` (
  `idproduto` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `valor` DECIMAL(11,2) NOT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
