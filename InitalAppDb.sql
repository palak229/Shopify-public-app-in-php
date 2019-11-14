-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: TrustLockBadge
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_appsettings`
--

DROP TABLE IF EXISTS `tbl_appsettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_appsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_key` varchar(300) DEFAULT NULL,
  `redirect_url` varchar(300) DEFAULT NULL,
  `permissions` text,
  `shared_secret` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_appsettings`
--

LOCK TABLES `tbl_appsettings` WRITE;
/*!40000 ALTER TABLE `tbl_appsettings` DISABLE KEYS */;
INSERT INTO `tbl_appsettings` VALUES (1,'5a2d1286d168dc308e9e0e1385bcd4c8','https://shopify.trustlock.co/Trust/getToken.php','read_products,write_products,read_customers,write_customers,read_orders,read_content,write_orders,read_themes,write_themes,read_script_tags,write_script_tags,read_fulfillments,write_fulfillments,read_content,write_content','8aa21d104f7ad0810f4d1e6249f6509c');
/*!40000 ALTER TABLE `tbl_appsettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usersettings`
--

DROP TABLE IF EXISTS `tbl_usersettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usersettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_token` text NOT NULL,
  `storename` varchar(300) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usersettings`
--

LOCK TABLES `tbl_usersettings` WRITE;
/*!40000 ALTER TABLE `tbl_usersettings` DISABLE KEYS */;
INSERT INTO `tbl_usersettings` VALUES (1,'d84c1b78cc33f9f96190a3c776961646','oly-organics.myshopify.com','2018-12-03 05:02:00');
/*!40000 ALTER TABLE `tbl_usersettings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-03  5:22:52
