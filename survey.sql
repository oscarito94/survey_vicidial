/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.5.8-MariaDB-log : Database - asterisk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`asterisk` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `asterisk`;

/*Table structure for table `survey_log` */

DROP TABLE IF EXISTS `survey_log`;

CREATE TABLE `survey_log` (
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `callerid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniqueid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Answer1` int(2) DEFAULT NULL,
  `Answer2` int(2) DEFAULT NULL,
  `Answer3` int(2) DEFAULT NULL,
  `Recording` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
