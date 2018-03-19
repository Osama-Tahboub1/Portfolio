# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.39)
# Database: osamasCMSDB
# Generation Time: 2018-03-19 13:32:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aboutMe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aboutMe`;

CREATE TABLE `aboutMe` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aboutMeArticle` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aboutMe` WRITE;
/*!40000 ALTER TABLE `aboutMe` DISABLE KEYS */;

INSERT INTO `aboutMe` (`id`, `aboutMeArticle`)
VALUES
	(1,'I am currently attending Mayden Academy to become a full stack developer using HTML, CSS, Java Script, PHP, SQL and Node.js.\n\nOther interests are back end development using ASP.net and C#.');

/*!40000 ALTER TABLE `aboutMe` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table footer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `footer`;

CREATE TABLE `footer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contactIcon` varchar(50) DEFAULT '',
  `contactEmail` varchar(50) DEFAULT NULL,
  `adminLoginLink` varchar(50) DEFAULT NULL,
  `adminLoginIcon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `footer` WRITE;
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;

INSERT INTO `footer` (`id`, `contactIcon`, `contactEmail`, `adminLoginLink`, `adminLoginIcon`)
VALUES
	(1,'http://192.168.20.20/portfolio/assets/contactWhite','mailto:o.tahboob2000@gmail.com',NULL,NULL);

/*!40000 ALTER TABLE `footer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `projectTitle` varchar(50) DEFAULT NULL,
  `projectImage` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;

INSERT INTO `portfolio` (`id`, `projectTitle`, `projectImage`)
VALUES
	(1,'Pilot Shop','http://192.168.20.20/portfolio/assets/PilotShop.png'),
	(2,'CMS Project','http://192.168.20.20/portfolio/assets/PilotShop.png'),
	(3,'New Project','http://192.168.20.20/portfolio/assets/PilotShop.png'),
	(4,'New Project','http://192.168.20.20/portfolio/assets/PilotShop.png'),
	(5,'New Project','http://192.168.20.20/portfolio/assets/PilotShop.png'),
	(6,'New Project','http://192.168.20.20/portfolio/assets/PilotShop.png');

/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;