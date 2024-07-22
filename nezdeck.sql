/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 5.1.72-community : Database - nezdeck
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nezdeck` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nezdeck`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `contact_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` char(40) DEFAULT NULL,
  `email` char(40) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`contact_id`,`full_name`,`phone`,`email`,`message`,`created_at`) values 
(1,'rayyan ali','0310924334','rayyan@gmail.com','i want to hire a software engineer\r\n		','2024-07-21 14:33:19'),
(2,'biala','2334535656','bilal@gmail.com','hi there','2024-07-21 14:33:49'),
(3,'Rayyan Ali','0319834534','alirayyan.dev@gmail.com','hi','2024-07-22 15:20:00'),
(4,'Rayyan ALi','365365345656','alirayyan.dev@gmail.com','345','2024-07-22 15:30:07'),
(5,'Rayyan ALi','365365345656','alirayyan.dev@gmail.com','345','2024-07-22 15:30:24'),
(6,'Rayyan ALi','36533365345656','alirayyan.dev@gmail.com','345','2024-07-22 15:30:36'),
(7,'Rayyan ALi','32454324545455','alirayyan.dev@gmail.com','345345','2024-07-22 15:31:22'),
(8,'Rayyan ALi','031924534545','alirayyan.dev@gmail.com','wet2345','2024-07-22 15:45:34'),
(9,'Rayyan ALi','343434343434','alirayyan.dev@gmail.com','234234234','2024-07-22 15:46:18'),
(10,'Rayyan ALi','32453456346346346','alirayyan.dev@gmail.com','wet2345','2024-07-22 15:47:24'),
(11,'Rayyan ALi','324524324234234','alirayyan.dev@gmail.com','wet2345','2024-07-22 15:48:25'),
(12,'Rayyan ALi','324535345345345','alirayyan.dev@gmail.com','wet2345','2024-07-22 15:52:29');

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` char(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

insert  into `setting`(`id`,`value`,`view`) values 
(1,'teams_display',0);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` char(40) DEFAULT NULL,
  `email` char(40) DEFAULT NULL,
  `gender` enum('F','M') DEFAULT 'M',
  `dob` date DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`password`,`phone`,`email`,`gender`,`dob`,`role`,`created_by_id`,`created_at`) values 
(1,'testing.user','25d55ad283aa400af464c76d713c07ad','03170666298','nezdeck@mtahak.com','M','2004-02-12',1,NULL,'2024-07-21 10:36:37');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
