

CREATE schema pageWeb;

<!--create the tables of the bbdd -->

CREATE TABLE `pageweb`.`products` (
  `idproducts` INT AUTO_INCREMENT,
  `imagenProduct` BLOB NOT NULL,
  `nameProduct` VARCHAR(45) NOT NULL,
  `descriptionProduct` VARCHAR(45) NOT NULL,
  `priceProduct` VARCHAR(45) NOT NULL,
  `categoryProduct` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproducts`));

CREATE TABLE `pageweb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `mail` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
