-- MySQL Script generated by MySQL Workbench
-- Wed Nov  1 19:12:20 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbVS
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbVS
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbVS` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `dbVS` ;

-- -----------------------------------------------------
-- Table `dbVS`.`suplidor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`suplidor` (
  `idsuplidor` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`idsuplidor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`empleado` (
  `idempleado` INT NOT NULL AUTO_INCREMENT,
  `cedula` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NULL,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  PRIMARY KEY (`idempleado`),
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`materiaPrima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`materiaPrima` (
  `idmateriaPrima` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `categoria` VARCHAR(45) NULL,
  `porcentaje_pesohumedo` DECIMAL(11,2) NULL,
  `existencia_minima` DECIMAL(11,2) NULL,
  `existencia_real` DECIMAL(11,2) NULL,
  PRIMARY KEY (`idmateriaPrima`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`cigarro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`cigarro` (
  `idcigarro` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `tipo_cigarro` VARCHAR(45) NULL,
  `materiaPrima_idmateriaPrima` INT NOT NULL,
  PRIMARY KEY (`idcigarro`),
  INDEX `fk_cigarro_materiaPrima1_idx` (`materiaPrima_idmateriaPrima` ASC),
  CONSTRAINT `fk_cigarro_materiaPrima1`
    FOREIGN KEY (`materiaPrima_idmateriaPrima`)
    REFERENCES `dbVS`.`materiaPrima` (`idmateriaPrima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`configuracion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`configuracion` (
  `idconfiguracion` INT NOT NULL AUTO_INCREMENT,
  `cigarro_idcigarro` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idconfiguracion`),
  INDEX `fk_configuracion_cigarro1_idx` (`cigarro_idcigarro` ASC),
  CONSTRAINT `fk_configuracion_cigarro1`
    FOREIGN KEY (`cigarro_idcigarro`)
    REFERENCES `dbVS`.`cigarro` (`idcigarro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`maquina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`maquina` (
  `idmaquina` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `produccion` TINYINT NULL,
  PRIMARY KEY (`idmaquina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`produccionMaquina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`produccionMaquina` (
  `maquina_idmaquina` INT NOT NULL,
  `cigarro_idcigarro` INT NOT NULL,
  `configuracion_idconfiguracion` INT NOT NULL,
  `cantidad` DECIMAL(11,2) NULL,
  `fecha` DATETIME NULL,
  INDEX `fk_produccion_maquina_configuracion1_idx` (`configuracion_idconfiguracion` ASC),
  INDEX `fk_produccion_maquina_cigarro1_idx` (`cigarro_idcigarro` ASC),
  INDEX `fk_produccion_maquina_maquina1_idx` (`maquina_idmaquina` ASC),
  PRIMARY KEY (`maquina_idmaquina`, `cigarro_idcigarro`, `configuracion_idconfiguracion`),
  CONSTRAINT `fk_produccion_maquina_configuracion1`
    FOREIGN KEY (`configuracion_idconfiguracion`)
    REFERENCES `dbVS`.`configuracion` (`idconfiguracion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produccion_maquina_cigarro1`
    FOREIGN KEY (`cigarro_idcigarro`)
    REFERENCES `dbVS`.`cigarro` (`idcigarro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produccion_maquina_maquina1`
    FOREIGN KEY (`maquina_idmaquina`)
    REFERENCES `dbVS`.`maquina` (`idmaquina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`user` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `tipo_usuario` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`entrada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`entrada` (
  `suplidor_idsuplidor` INT NOT NULL,
  `materiaPrima_idmateriaPrima` INT NOT NULL,
  `precio` FLOAT NULL,
  `cantidad` INT NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`suplidor_idsuplidor`, `materiaPrima_idmateriaPrima`),
  INDEX `fk_suplidor_has_materiaPrima_materiaPrima1_idx` (`materiaPrima_idmateriaPrima` ASC),
  INDEX `fk_suplidor_has_materiaPrima_suplidor1_idx` (`suplidor_idsuplidor` ASC),
  CONSTRAINT `fk_suplidor_has_materiaPrima_suplidor1`
    FOREIGN KEY (`suplidor_idsuplidor`)
    REFERENCES `dbVS`.`suplidor` (`idsuplidor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_suplidor_has_materiaPrima_materiaPrima1`
    FOREIGN KEY (`materiaPrima_idmateriaPrima`)
    REFERENCES `dbVS`.`materiaPrima` (`idmateriaPrima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`configuracionMateriaPrima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`configuracionMateriaPrima` (
  `materiaPrima_idmateriaPrima` INT NOT NULL,
  `configuracion_idconfiguracion` INT NOT NULL,
  `cantidad` DECIMAL(11,2) NULL,
  PRIMARY KEY (`materiaPrima_idmateriaPrima`, `configuracion_idconfiguracion`),
  INDEX `fk_materiaPrima_has_configuracion_configuracion1_idx` (`configuracion_idconfiguracion` ASC),
  INDEX `fk_materiaPrima_has_configuracion_materiaPrima1_idx` (`materiaPrima_idmateriaPrima` ASC),
  CONSTRAINT `fk_materiaPrima_has_configuracion_materiaPrima1`
    FOREIGN KEY (`materiaPrima_idmateriaPrima`)
    REFERENCES `dbVS`.`materiaPrima` (`idmateriaPrima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materiaPrima_has_configuracion_configuracion1`
    FOREIGN KEY (`configuracion_idconfiguracion`)
    REFERENCES `dbVS`.`configuracion` (`idconfiguracion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`salida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`salida` (
  `materiaPrima_idmateriaPrima` INT NOT NULL,
  `cantidad` DECIMAL(11,2) NULL,
  PRIMARY KEY (`materiaPrima_idmateriaPrima`),
  CONSTRAINT `fk_salida_materiaPrima1`
    FOREIGN KEY (`materiaPrima_idmateriaPrima`)
    REFERENCES `dbVS`.`materiaPrima` (`idmateriaPrima`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbVS`.`jornada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbVS`.`jornada` (
  `maquina_idmaquina` INT NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  `hora_extra` INT NULL,
  `incentivo` DECIMAL(11,2) NULL,
  `fecha` DATE NULL,
  `comida` DECIMAL(11,2) NULL,
  PRIMARY KEY (`maquina_idmaquina`, `empleado_idempleado`),
  INDEX `fk_maquina_has_empleado_empleado1_idx` (`empleado_idempleado` ASC),
  INDEX `fk_maquina_has_empleado_maquina1_idx` (`maquina_idmaquina` ASC),
  CONSTRAINT `fk_maquina_has_empleado_maquina1`
    FOREIGN KEY (`maquina_idmaquina`)
    REFERENCES `dbVS`.`maquina` (`idmaquina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_maquina_has_empleado_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `dbVS`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
