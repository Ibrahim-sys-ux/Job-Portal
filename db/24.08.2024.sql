/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.10-MariaDB : Database - kmea-jobportal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kmea-jobportal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kmea-jobportal`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

insert  into `companies`(`comp_id`,`emp_id`,`name`,`address`,`contact`,`email`) values 
(1,1,'RISS TECHONOLOGIES','EKM','8888888878','riss@gmail.com'),
(4,2,'corizon','EKM north railwaystation','8888888888','corizon@gmail.com'),
(5,2,'kc tech','vccgvgvgh\r\nknninnk\r\nmnjnjn','6777777777','kc@gmail.com');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `seek_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`comp_id`,`seek_id`,`complaint`,`reply`,`date`) values 
(1,1,'very ','its ok da','2024-08-17'),
(2,2,'okkkk','okkk','2024-08-24');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`emp_id`,`login_id`,`fname`,`lname`,`phone`,`email`) values 
(1,3,'abhi','naya','4444444444','abhiiii@gmail.com'),
(2,4,'Anu','M','9867453423','anu@gmail.com');

/*Table structure for table `interview` */

DROP TABLE IF EXISTS `interview`;

CREATE TABLE `interview` (
  `interview_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_app_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`interview_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `interview` */

insert  into `interview`(`interview_id`,`job_app_id`,`date`,`time`,`status`) values 
(1,1,'2024-08-08','17:30:00','Accepted');

/*Table structure for table `job` */

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `job` */

insert  into `job`(`job_id`,`category_id`,`emp_id`,`title`,`description`,`qualification`,`end_date`,`company_name`) values 
(1,1,1,'software developer','you have to know all program lang\r\n','all master degree','2024-08-20','RISS TECHONOLOGIES'),
(2,4,2,'software Tech','jdkshkhjdlkjdkl','Bcs,Msc','2024-09-05','RISS TECHONOLOGIES');

/*Table structure for table `job_application` */

DROP TABLE IF EXISTS `job_application`;

CREATE TABLE `job_application` (
  `job_app_id` int(11) NOT NULL AUTO_INCREMENT,
  `seek_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `resume` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`job_app_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `job_application` */

insert  into `job_application`(`job_app_id`,`seek_id`,`pro_id`,`job_id`,`resume`,`status`,`date`) values 
(1,1,1,1,'image/image_66c08eed449c6.jpg','Accepted','2024-08-17'),
(2,2,2,2,'image/image_66c46e277935a.jpg','pending','2024-08-20');

/*Table structure for table `job_category` */

DROP TABLE IF EXISTS `job_category`;

CREATE TABLE `job_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `job_category` */

insert  into `job_category`(`cat_id`,`category_name`) values 
(1,'software developer'),
(3,'software tester'),
(4,'Tech');

/*Table structure for table `jobseeker` */

DROP TABLE IF EXISTS `jobseeker`;

CREATE TABLE `jobseeker` (
  `seek_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`seek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jobseeker` */

insert  into `jobseeker`(`seek_id`,`login_id`,`fname`,`lname`,`address`,`phone`,`email`,`qualification`) values 
(1,2,'kk','kkk','guuuygdahhyda','8888888888','abhi@gmail.com','kkk'),
(2,5,'chippy','mol','dshkjdlk','8888888888','chippy12434@gmail.com','mol');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'admin','admin','admin'),
(2,'job','job','jobseeker'),
(3,'employee','employee','employee'),
(4,'ann','ann','employee'),
(5,'chippy','Chippy1324','jobseeker');

/*Table structure for table `pro_update` */

DROP TABLE IF EXISTS `pro_update`;

CREATE TABLE `pro_update` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `seek_id` int(11) DEFAULT NULL,
  `technical_skills` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pro_update` */

insert  into `pro_update`(`pro_id`,`seek_id`,`technical_skills`,`language`) values 
(1,1,'python,andriod studio','python c++ ai'),
(3,2,'good programing skils','yfufu');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
