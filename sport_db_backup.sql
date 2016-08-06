-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: sport
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gender` (
  `id` enum('ชาย','หญิง') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES ('ชาย'),('หญิง');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(8) COLLATE utf8_bin NOT NULL,
  `prefix` enum('นาย','นาง','นางสาว') COLLATE utf8_bin NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `gender` enum('ชาย','หญิง') COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `weight` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `major` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gender` (`gender`),
  KEY `prefix` (`prefix`),
  KEY `username` (`username`),
  CONSTRAINT `members_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`),
  CONSTRAINT `members_ibfk_2` FOREIGN KEY (`prefix`) REFERENCES `prefix` (`id`),
  CONSTRAINT `members_ibfk_3` FOREIGN KEY (`username`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (15,'B5601228','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',33,44,'fv','0845380145','tazakunk@gmail.com'),(16,'B5601227','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',33,44,'fv','0845380145','tazakunk@gmail.com'),(17,'B5601299','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',33,44,'fv','0845380145','tazakunk@gmail.com'),(18,'B5601293','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',33,44,'fv','0845380145','tazakunk@gmail.com'),(19,'B5601285','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(20,'B5601285','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(21,'B5601289','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(22,'B5601287','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(23,'B5601282','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(24,'B5601284','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com'),(25,'B5601277','นาย','วุฒินันท์','ชาวยศ','ชาย','1980-01-01',565,456,'sdfgsdfg','0845380145','tazakunk@gmail.com');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix`
--

DROP TABLE IF EXISTS `prefix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix` (
  `id` enum('นาย','นาง','นางสาว') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix`
--

LOCK TABLES `prefix` WRITE;
/*!40000 ALTER TABLE `prefix` DISABLE KEYS */;
INSERT INTO `prefix` VALUES ('นาย'),('นาง'),('นางสาว');
/*!40000 ALTER TABLE `prefix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(8) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` enum('active','deactive') COLLATE utf8_bin NOT NULL,
  `_key` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('B5601227','45','deactive','69adc1e107f7f7d035d7baf04342e1ca'),('B5601228','1234','deactive','96b9bff013acedfb1d140579e2fbeb63'),('B5601277','sdf','deactive','72da7fd6d1302c0a159f6436d01e9eb0'),('B5601282','123','deactive','24b16fede9a67c9251d3e7c7161c83ac'),('B5601284','122','deactive','a733fa9b25f33689e2adbe72199f0e62'),('B5601285','sdfsd','deactive','8d317bdcf4aafcfc22149d77babee96d'),('B5601287','123','deactive','3b8a614226a953a8cd9526fca6fe9ba5'),('B5601289','jsdk','deactive','289dff07669d7a23de0ef88d2f7129e7'),('B5601293','45345','deactive','96ea64f3a1aa2fd00c72faacf0cb8ac9'),('B5601299','','deactive','c16a5320fa475530d9583c34fd356ef5');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-06 15:44:11
