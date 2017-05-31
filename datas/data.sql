-- MySQL Script generated by MySQL Workbench
-- 05/31/17 15:33:43
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema SLCOMPUTER
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SLCOMPUTER
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SLCOMPUTER` DEFAULT CHARACTER SET utf8 ;
USE `SLCOMPUTER` ;

-- -----------------------------------------------------
-- Table `SLCOMPUTER`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SLCOMPUTER`.`comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(500) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_comment_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `SLCOMPUTER`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SLCOMPUTER`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SLCOMPUTER`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),
  `isActive` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SLCOMPUTER`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SLCOMPUTER`.`comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(500) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_comment_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `SLCOMPUTER`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SLCOMPUTER`.`activation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SLCOMPUTER`.`activation` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `key` VARCHAR(256) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SLCOMPUTER`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SLCOMPUTER`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `price` DECIMAL NOT NULL,
  `isNew` TINYINT(1) NOT NULL DEFAULT 0,
  `creadted_at` DATETIME NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
