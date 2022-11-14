-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema equizzy
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema equizzy
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `equizzy` DEFAULT CHARACTER SET utf8 ;
USE `equizzy` ;

-- -----------------------------------------------------
-- Table `equizzy`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`users` (
  `id` INT(11) NOT NULL,
  `uniqid` VARCHAR(60) NULL,
  `name` VARCHAR(30) NULL,
  `surname` VARCHAR(30) NULL,
  `email` VARCHAR(40) NULL,
  `password` VARCHAR(60) NULL,
  `admin` INT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equizzy`.`categoryPolls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`categoryPolls` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equizzy`.`polls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`polls` (
  `id` INT(11) NOT NULL,
  `uniqid` VARCHAR(60) NULL,
  `title` VARCHAR(60) NULL,
  `img` VARCHAR(200) NULL,
  `likes` INT(10) NULL,
  `public` INT(1) NULL,
  `categoryId` INT(11) NULL,
  `userId` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `userId_idx` (`userId` ASC) VISIBLE,
  INDEX `categoryId_idx` (`categoryId` ASC) VISIBLE,
  CONSTRAINT `userId`
    FOREIGN KEY (`userId`)
    REFERENCES `equizzy`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `categoryId`
    FOREIGN KEY (`categoryId`)
    REFERENCES `equizzy`.`categoryPolls` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equizzy`.`typeQuestion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`typeQuestion` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equizzy`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`questions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(400) NULL,
  `pollId` INT(11) NULL,
  `type` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `pollId_idx` (`pollId` ASC) VISIBLE,
  INDEX `typeQuestionId_idx` (`type` ASC) VISIBLE,
  CONSTRAINT `pollId`
    FOREIGN KEY (`pollId`)
    REFERENCES `equizzy`.`polls` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `typeQuestionId`
    FOREIGN KEY (`type`)
    REFERENCES `equizzy`.`typeQuestion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `equizzy`.`options`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `equizzy`.`options` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(400) NULL,
  `questionId` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `questionId_idx` (`questionId` ASC) VISIBLE,
  CONSTRAINT `questionId`
    FOREIGN KEY (`questionId`)
    REFERENCES `equizzy`.`questions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
