/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.8-MariaDB : Database - crud_aprendiz
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud_aprendiz` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crud_aprendiz`;

/*Table structure for table `crud` */

DROP TABLE IF EXISTS `crud`;

CREATE TABLE `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_constraint` (`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `crud` */

insert  into `crud`(`id`,`nombre`,`apellido`,`celular`,`genero`) values (2,'Lexabeth','Gomez',311583348,'Femenino'),(48,'Roger','Martinez',4364574,'Masculino'),(51,'Catherine','Perez Torres',31243541,'Femenino'),(52,'Yulieth','Perez',315345051,'Femenino'),(55,'Yelimar','Rivera',301350962,'Femenino'),(57,'Evelis','Cervantes',315346721,'Femenino'),(59,'Maria ','Medina',535345,'Femenino'),(60,'Omar','Medina',300209552,'Masculino'),(63,'Catherine','Perez',32045987,'Femenino');

/*Table structure for table `pract_consultas` */

DROP TABLE IF EXISTS `estudiantes`;

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(10) unsigned zerofill NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Masculino',
  `fecha_nacimiento` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `pract_consultas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
