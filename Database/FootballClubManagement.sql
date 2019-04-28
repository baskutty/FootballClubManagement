-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema club
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema club
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `club` DEFAULT CHARACTER SET latin1 ;
USE `club` ;

-- -----------------------------------------------------
-- Table `club`.`cashbook`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`cashbook` ;

CREATE TABLE IF NOT EXISTS `club`.`cashbook` (
  `month` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `player_salary` TEXT NOT NULL,
  `coach_salary` TEXT NOT NULL,
  `staff_salary` TEXT NOT NULL,
  `manager_salary` TEXT NOT NULL,
  `merchandise_sale` TEXT NOT NULL,
  `ticket_sale` TEXT NOT NULL,
  `endorsements` TEXT NOT NULL,
  PRIMARY KEY (`month`, `year`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`coach`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`coach` ;

CREATE TABLE IF NOT EXISTS `club`.`coach` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `age` INT(11) NOT NULL,
  `section` TEXT NOT NULL,
  `nationality` TEXT NOT NULL,
  `designation` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  `salary` DOUBLE NOT NULL,
  `username` TEXT NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`events` ;

CREATE TABLE IF NOT EXISTS `club`.`events` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `photo` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`fans`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`fans` ;

CREATE TABLE IF NOT EXISTS `club`.`fans` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `description` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`gallery`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`gallery` ;

CREATE TABLE IF NOT EXISTS `club`.`gallery` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `photo` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`manager`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`manager` ;

CREATE TABLE IF NOT EXISTS `club`.`manager` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `username` TEXT NOT NULL,
  `nationality` TEXT NOT NULL,
  `bio` TEXT NOT NULL,
  `status` TEXT NOT NULL,
  `salary` DOUBLE NOT NULL,
  `age` INT(11) NOT NULL,
  `photo` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`matches`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`matches` ;

CREATE TABLE IF NOT EXISTS `club`.`matches` (
  `date` DATE NOT NULL,
  `team` VARCHAR(45) NOT NULL,
  `versus` TEXT NOT NULL,
  `result` TEXT NOT NULL,
  `tournament` TEXT NOT NULL,
  PRIMARY KEY (`date`, `team`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`opinions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`opinions` ;

CREATE TABLE IF NOT EXISTS `club`.`opinions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `staff_username` TEXT NOT NULL,
  `opinion` TEXT NOT NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`player`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`player` ;

CREATE TABLE IF NOT EXISTS `club`.`player` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `nationality` TEXT NOT NULL,
  `morale` TEXT NOT NULL,
  `age` INT(11) NOT NULL,
  `section` TEXT NOT NULL,
  `position` TEXT NOT NULL,
  `form` TEXT NOT NULL,
  `contract` DATE NOT NULL,
  `photo` TEXT NOT NULL,
  `fitness` TEXT NOT NULL,
  `salary` DOUBLE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`stadium`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`stadium` ;

CREATE TABLE IF NOT EXISTS `club`.`stadium` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `location` TEXT NOT NULL,
  `capacity` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`staff`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`staff` ;

CREATE TABLE IF NOT EXISTS `club`.`staff` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `username` TEXT NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `department` TEXT NOT NULL,
  `designation` TEXT NOT NULL,
  `salary` DOUBLE NOT NULL,
  `nationality` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  `age` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`superadmin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`superadmin` ;

CREATE TABLE IF NOT EXISTS `club`.`superadmin` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`tournament`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`tournament` ;

CREATE TABLE IF NOT EXISTS `club`.`tournament` (
  `name` VARCHAR(45) NOT NULL,
  `year` VARCHAR(45) NOT NULL,
  `position` TEXT NOT NULL,
  `topscorer` TEXT NOT NULL,
  `topassists` TEXT NOT NULL,
  `topcleansheets` TEXT NOT NULL,
  PRIMARY KEY (`name`, `year`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `club`.`training`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `club`.`training` ;

CREATE TABLE IF NOT EXISTS `club`.`training` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `coach_username` TEXT NOT NULL,
  `summary` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
