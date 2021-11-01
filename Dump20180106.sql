-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: parking
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income` (
  `Income_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Vehicle_Type` varchar(20) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`Income_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income`
--

LOCK TABLES `income` WRITE;
/*!40000 ALTER TABLE `income` DISABLE KEYS */;
INSERT INTO `income` VALUES (1,'Three Wheeler','2018-01-04 17:57:59.000000',0);
/*!40000 ALTER TABLE `income` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `Role_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`Role_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMINISTRATOR'),(2,'DATA OPERATOR');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `User_ID` int(20) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role_ID` int(20) DEFAULT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  PRIMARY KEY (`User_ID`),
  KEY `Role_ID` (`Role_ID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Role_ID`) REFERENCES `roles` (`Role_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chathura','0192023a7bbd73250516f069df18b500',1,'',''),(2,'charith','92e6777d11c76d595de3',1,'',''),(3,'ss','3691308f2a4c2f6983f2880d32e29c84',2,'ss','ss');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_details`
--

DROP TABLE IF EXISTS `vehicle_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_details` (
  `Vehicle_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Vehicle_Number` varchar(20) NOT NULL,
  `Vehicle_Type` varchar(20) NOT NULL,
  `Vehicle_IN_Time` datetime(6) NOT NULL,
  `Vehicle_OUT_Time` datetime(6) NOT NULL,
  `Vehicle_Status` varchar(20) NOT NULL,
  `Vehicle_Card_Number` varchar(20) NOT NULL,
  `Owner_NIC` varchar(12) NOT NULL,
  PRIMARY KEY (`Vehicle_ID`,`Vehicle_IN_Time`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_details`
--

LOCK TABLES `vehicle_details` WRITE;
/*!40000 ALTER TABLE `vehicle_details` DISABLE KEYS */;
INSERT INTO `vehicle_details` VALUES (1,'KA-1234','Four Wheeler','2018-01-02 03:06:07.203138','2018-01-04 17:55:57.000000','','f01','48326595965'),(2,'KA-1233','Four Wheeler','2018-01-04 17:56:38.000000','2018-01-04 17:56:57.000000','ACTIVE','01','548546565'),(3,'ABC-123','Three Wheeler','2018-01-04 17:57:39.000000','2018-01-04 17:57:59.000000','ACTIVE','05','959565656');
/*!40000 ALTER TABLE `vehicle_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-06 19:05:19
