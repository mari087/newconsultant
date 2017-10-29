-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: consultant
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'noel.titus','2016-10-24 09:12:05','Add Class Form 6'),(2,'noel.titus','2016-10-24 09:12:58','Edit Class Form 6'),(3,'noel.titus','2016-10-24 09:15:07','Add Student aaa bbb'),(4,'noel.titus','2016-10-24 09:15:36','Updated Student aaa bbb'),(5,'noel.titus','2016-10-24 09:17:50','Add Student buel bol'),(6,'noel.titus','2016-10-24 09:23:17','Add User abdul.hemedy'),(7,'mariyappan','2017-08-20 17:03:30','Add New User test2 '),(8,'admin','2017-08-22 08:03:58','Deleted  user noel.titus'),(9,'admin','2017-08-22 08:04:12','Deleted  user abdul.hemedy'),(10,'mariyappan','2017-08-22 22:27:43','Add New User test3 '),(11,'mariyappan','2017-08-23 23:52:12','updated userdetails '),(12,'mariyappan','2017-08-23 23:56:40','updated userdetails '),(13,'mariyappan','2017-08-23 23:56:51','updated userdetails '),(14,'mariyappan','2017-08-24 00:10:04','updated userdetails '),(15,'mariyappan','2017-08-24 00:14:17','updated userdetails '),(16,'mariyappan','2017-08-24 00:14:42','updated userdetails '),(17,'mariyappan','2017-08-24 00:15:10','updated userdetails '),(18,'mariyappan','2017-09-20 01:10:03','updated userdetails '),(19,'mariyappan','2017-09-20 01:14:57','updated userdetails '),(20,'mariyappan','2017-09-23 20:09:55','Add New User newtest '),(21,'','2017-09-23 21:34:08','updated userdetails '),(22,'newtest','2017-09-23 21:38:45','updated userdetails '),(23,'mariyappan','2017-09-23 21:56:33','updated userdetails '),(24,'mariyappan','2017-09-23 22:05:44','updated userdetails '),(25,'mariyappan','2017-09-23 22:06:03','updated userdetails '),(26,'mariyappan','2017-09-23 22:07:20','updated userdetails '),(27,'mariyappan','2017-09-23 22:07:32','updated userdetails '),(28,'mariyappan','2017-09-23 22:07:46','updated userdetails '),(29,'mariyappan','2017-09-23 22:34:35','Deleted userdetails '),(30,'mariyappan','2017-09-23 22:34:49','Deleted userdetails '),(31,'mariyappan','2017-09-23 22:49:31','Deleted userdetails '),(32,'mariyappan','2017-09-23 22:51:08','Deleted userdetails '),(33,'mariyappan','2017-09-23 22:51:35','Add New User test2 '),(34,'mariyappan','2017-09-23 22:52:36','Add New User test3 '),(35,'mariyappan','2017-09-24 13:52:17','Add New department   '),(36,'mariyappan','2017-09-24 14:06:14','Add New department  The Mode '),(37,'mariyappan','2017-09-24 16:11:56','updated Department details '),(38,'mariyappan','2017-09-24 16:12:36','updated Department details '),(39,'mariyappan','2017-09-24 16:12:47','updated Department details '),(40,'mariyappan','2017-09-24 16:12:54','updated Department details '),(41,'mariyappan','2017-09-24 16:13:01','updated Department details '),(42,'mariyappan','2017-09-24 16:13:12','updated Department details '),(43,'mariyappan','2017-09-24 16:16:26','Add New department  Inventcare '),(44,'mariyappan','2017-09-24 16:17:39','updated Department details '),(45,'mariyappan','2017-09-24 16:31:04','Deleted department details '),(46,'mariyappan','2017-09-24 16:31:33','Add New department  The Mode '),(47,'mariyappan','2017-09-24 17:19:10','updated Department details '),(48,'mariyappan','2017-09-24 17:20:18','Add New department  IBIQA '),(49,'mariyappan','2017-09-24 18:51:38','Add New IP INformation 192.168.11.67 '),(50,'mariyappan','2017-09-24 19:33:46','Add New IP INformation 192.168.11.68 '),(51,'mariyappan','2017-09-24 19:41:09','Add New IP INformation 192.168.11.69 '),(52,'mariyappan','2017-09-27 00:39:39','updated IP details '),(53,'mariyappan','2017-09-27 00:42:59','updated IP details '),(54,'mariyappan','2017-09-27 00:43:19','updated IP details '),(55,'mariyappan','2017-09-27 00:43:39','updated IP details '),(56,'mariyappan','2017-09-27 00:44:13','updated IP details '),(57,'mariyappan','2017-09-27 00:44:36','updated IP details '),(58,'mariyappan','2017-09-27 00:59:36','Deleted IP details '),(59,'mariyappan','2017-09-27 01:00:07','Add New IP INformation 192.168.11.67 '),(60,'mariyappan','2017-09-27 01:04:58','updated IP details '),(61,'mariyappan','2017-09-27 01:12:31','Add New IP INformation 192.168.128.23 '),(62,'mariyappan','2017-09-27 01:13:11','Add New IP INformation 192.168.128.24 '),(63,'mariyappan','2017-09-27 01:13:36','Add New IP INformation 192.168.11.100 '),(64,'mariyappan','2017-09-27 01:14:13','Add New IP INformation 192.168.11.101 '),(65,'mariyappan','2017-09-28 00:45:22','updated IP details '),(66,'mariyappan','2017-09-28 00:50:41','updated IP details '),(67,'mariyappan','2017-09-28 00:50:55','updated IP details '),(68,'mariyappan','2017-09-28 00:52:36','updated IP details '),(69,'mariyappan','2017-09-29 10:26:04','updated IP details '),(70,'mariyappan','2017-09-29 10:28:23','updated IP details '),(71,'mariyappan','2017-09-29 10:28:30','updated IP details '),(72,'mariyappan','2017-09-29 10:31:36','updated IP details '),(73,'mariyappan','2017-09-29 12:27:11','updated IP details '),(74,'mariyappan','2017-09-29 12:27:28','updated IP details '),(75,'mariyappan','2017-09-29 12:57:08','Add New department  HR '),(76,'mariyappan','2017-09-29 12:58:21','Add New IP INformation 192.168.0.46 '),(77,'mariyappan','2017-09-29 17:40:19','Add New IP INformation 192.168.11.70 '),(78,'mariyappan','2017-09-29 17:42:00','updated IP details '),(79,'mariyappan','2017-10-25 00:26:22','Add New Client test '),(80,'mariyappan','2017-10-25 00:40:05','Add New Client test '),(81,'mariyappan','2017-10-28 09:05:38','Add New User  '),(82,'mariyappan','2017-10-28 09:06:02','Deleted userdetails '),(83,'mariyappan','2017-10-28 09:06:49','Add New Client new '),(84,'mariyappan','2017-10-28 17:27:41','updated clientdetails of  '),(85,'mariyappan','2017-10-28 17:31:16','updated clientdetails of test '),(86,'mariyappan','2017-10-28 17:31:35','updated clientdetails of new '),(87,'mariyappan','2017-10-28 17:31:44','updated clientdetails of test '),(88,'mariyappan','2017-10-28 17:37:13','Deleted clientdetails of '),(89,'mariyappan','2017-10-28 17:37:44','Deleted clientdetails of '),(90,'mariyappan','2017-10-28 17:39:29','Add New Client mariyappan '),(91,'mariyappan','2017-10-28 17:41:37','updated clientdetails of mariyappan '),(92,'mariyappan','2017-10-28 18:40:39','Add New Employee mariyappan '),(93,'mariyappan','2017-10-28 18:42:45','Add New Employee test-user '),(94,'mariyappan','2017-10-28 19:00:57','updated employeedetails of mariyappanm '),(95,'mariyappan','2017-10-28 19:01:43','updated employeedetails of mariyappanm '),(96,'mariyappan','2017-10-28 19:01:59','updated employeedetails of mariyappanm '),(97,'mariyappan','2017-10-28 19:02:10','updated employeedetails of mariyappan '),(98,'mariyappan','2017-10-28 19:16:08','Deleted employeedetails of mariyappan'),(99,'mariyappan','2017-10-28 20:18:22','Add New Vendor Tata Consultancy Services '),(100,'mariyappan','2017-10-28 20:33:31','updated corporatedetails of Tata Consultancy Servi'),(101,'mariyappan','2017-10-28 20:33:37','updated corporatedetails of Tata Consultancy Servi'),(102,'mariyappan','2017-10-28 20:33:44','updated corporatedetails of Tata Consultancy Servi'),(103,'mariyappan','2017-10-28 20:33:56','updated corporatedetails of Tata Consultancy Servi'),(104,'mariyappan','2017-10-28 20:34:07','updated corporatedetails of Tata Consultancy Servi'),(105,'mariyappan','2017-10-28 20:34:17','updated corporatedetails of Tata Consultancy Servi'),(106,'mariyappan','2017-10-28 20:34:25','updated corporatedetails of Tata Consultancy Servi'),(107,'mariyappan','2017-10-28 20:35:21','Add New Vendor new-corporate '),(108,'mariyappan','2017-10-28 20:45:44','Deleted corporatedetails of Tata Consultancy Servi'),(109,'mariyappan','2017-10-28 20:46:20','Add New Vendor Tata Consultancy Services '),(110,'mariyappan','2017-10-29 00:55:33','Add New Employee test-user2 '),(111,'mariyappan','2017-10-29 01:16:22','Add New Employee mariyappan '),(112,'mariyappan','2017-10-29 01:16:51','Add New Employee mari '),(113,'mariyappan','2017-10-29 15:53:19','Add New Consultant mari '),(114,'mariyappan','2017-10-29 17:41:16','Add New laptop Details of mari'),(115,'mariyappan','2017-10-29 18:47:04','Add New Consultant mariyappan '),(116,'mariyappan','2017-10-29 18:50:20','Add New Consultant testuser '),(117,'mariyappan','2017-10-29 22:05:37','updated Laptop details of '),(118,'mariyappan','2017-10-29 22:05:52','updated Laptop details of '),(119,'mariyappan','2017-10-29 22:06:23','updated Laptop details of '),(120,'mariyappan','2017-10-29 22:06:44','updated Laptop details of '),(121,'mariyappan','2017-10-29 22:09:48','updated Laptop details of '),(122,'mariyappan','2017-10-29 22:10:37','updated Laptop details of '),(123,'mariyappan','2017-10-29 22:42:12','Deleted Laptop Information of testuser');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientdetails`
--

DROP TABLE IF EXISTS `clientdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientdetails` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `clientname` varchar(50) NOT NULL,
  `clientemail` varchar(100) NOT NULL,
  `clientmobilenumber` varchar(100) NOT NULL,
  `clientlocation` varchar(50) NOT NULL,
  `clientaddress` text NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `clientname` (`clientname`),
  UNIQUE KEY `clientemail` (`clientemail`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientdetails`
--

LOCK TABLES `clientdetails` WRITE;
/*!40000 ALTER TABLE `clientdetails` DISABLE KEYS */;
INSERT INTO `clientdetails` VALUES (26,'mariyappan','mariyappan087@gmail.com','9650231254','chennai','chennai');
/*!40000 ALTER TABLE `clientdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultantdetails`
--

DROP TABLE IF EXISTS `consultantdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultantdetails` (
  `consultant_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ssn` int(11) DEFAULT NULL,
  `sales` varchar(100) DEFAULT NULL,
  `recruiter` varchar(100) DEFAULT NULL,
  `worktype` varchar(100) DEFAULT NULL,
  `workstatus` varchar(100) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `billrate` int(10) DEFAULT NULL,
  `payrate` int(10) DEFAULT NULL,
  `vacation` int(10) DEFAULT NULL,
  `sickdays` int(10) DEFAULT NULL,
  `clientholidays` int(10) DEFAULT NULL,
  `medical` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`consultant_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultantdetails`
--

LOCK TABLES `consultantdetails` WRITE;
/*!40000 ALTER TABLE `consultantdetails` DISABLE KEYS */;
INSERT INTO `consultantdetails` VALUES (1,'mari','no 4/a venugopal street vetri nagar chennai 82','9710089179','1987-04-21','a.mario21@gmail.com',5623,'mariyappan','mari','w2','Delhi','mariyappan',22,22,2,2,2,2,'active'),(2,'mariyappan','tuticorin','9710754151','1987-04-21','mariyappan087@gmail.com',5689,'test-user','test-user2','w2','H1B','mariyappan',10,10,2,2,2,2,'active');
/*!40000 ALTER TABLE `consultantdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contractdetails`
--

DROP TABLE IF EXISTS `contractdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contractdetails` (
  `contract_id` int(10) DEFAULT NULL,
  `consultantname` varchar(50) NOT NULL,
  `billinginfo` varchar(25) NOT NULL,
  `paymentterms` varchar(50) NOT NULL DEFAULT 'no',
  `location` varchar(100) NOT NULL DEFAULT 'no',
  `email` varchar(100) NOT NULL DEFAULT 'no',
  `source` varchar(100) DEFAULT NULL,
  `inrate` int(10) DEFAULT NULL,
  `outrate` int(10) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  KEY `contract_id` (`contract_id`),
  CONSTRAINT `contractdetails_ibfk_1` FOREIGN KEY (`contract_id`) REFERENCES `consultantdetails` (`consultant_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contractdetails`
--

LOCK TABLES `contractdetails` WRITE;
/*!40000 ALTER TABLE `contractdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `contractdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(50) NOT NULL,
  `departmenthead` varchar(50) NOT NULL,
  `ipusedfrom` varchar(50) NOT NULL,
  `ipusedtill` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `departmentname` (`departmentname`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (15,'Inventcare','Arul','192.168.11.86','192.168.11.125','test'),(16,'The Mode','Bala','192.168.11.67','192.168.11.85',''),(17,'IBIQA','Bindu','192.168.128.10','192.168.128.100','test'),(18,'HR','Sathya','192.168.0.45','192.168.0.55','test');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeedetails`
--

DROP TABLE IF EXISTS `employeedetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employeedetails` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employeename` varchar(50) NOT NULL,
  `worklocation` varchar(50) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `mobilenumber` (`mobilenumber`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeedetails`
--

LOCK TABLES `employeedetails` WRITE;
/*!40000 ALTER TABLE `employeedetails` DISABLE KEYS */;
INSERT INTO `employeedetails` VALUES (24,'test-user','Chennai','9710089178','a.mario21@gmail.com','Sales'),(25,'test-user2','Chennai','895623417','test-user2@gmail.com','Recruiter'),(26,'mariyappan','Chennai','971005623123','mari@amtexsystems.com','Sales'),(27,'mari','Chennai','971562354652','marinew@amtexsystems.com','Recruiter');
/*!40000 ALTER TABLE `employeedetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipdetails`
--

DROP TABLE IF EXISTS `ipdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipdetails` (
  `ip_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`ip_id`),
  UNIQUE KEY `ipaddress` (`ipaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipdetails`
--

LOCK TABLES `ipdetails` WRITE;
/*!40000 ALTER TABLE `ipdetails` DISABLE KEYS */;
INSERT INTO `ipdetails` VALUES (14,'test2','192.168.11.68','The Mode','Used','test'),(15,'test3','192.168.11.69','The Mode','Used','test'),(16,'test','192.168.11.67','The Mode','Used','test'),(17,'ibiqa-test','192.168.128.23','IBIQA','Used','test'),(18,'test5','192.168.128.24','IBIQA','Used','test'),(19,'test6','192.168.11.100','Inventcare','Used','test'),(20,'test10','192.168.11.101','Inventcare','Used','test'),(21,'Deepak','192.168.0.46','HR','Used','test'),(22,'test','192.168.11.70','The Mode','Free','test');
/*!40000 ALTER TABLE `ipdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptopdetails`
--

DROP TABLE IF EXISTS `laptopdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laptopdetails` (
  `laptop_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `laptopinfo` text NOT NULL,
  `hardwarespec` text NOT NULL,
  `purchasedate` date NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `status` text,
  PRIMARY KEY (`laptop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptopdetails`
--

LOCK TABLES `laptopdetails` WRITE;
/*!40000 ALTER TABLE `laptopdetails` DISABLE KEYS */;
INSERT INTO `laptopdetails` VALUES (1,'mari','Inventcare','test','test','2017-10-18','test','test');
/*!40000 ALTER TABLE `laptopdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_made`
--

DROP TABLE IF EXISTS `payment_made`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_made` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_made`
--

LOCK TABLES `payment_made` WRITE;
/*!40000 ALTER TABLE `payment_made` DISABLE KEYS */;
INSERT INTO `payment_made` VALUES (1,2,'janmar',250000,'2016-10-24',23444),(2,2,'aprjun',250000,'2016-10-24',90909887);
/*!40000 ALTER TABLE `payment_made` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_log`
--

LOCK TABLES `user_log` WRITE;
/*!40000 ALTER TABLE `user_log` DISABLE KEYS */;
INSERT INTO `user_log` VALUES (1,'noel.titus','2016-10-24 09:10:07','2016-10-24 09:23:20',3),(2,'noel.titus','2016-10-24 09:11:10','2016-10-24 09:23:20',3),(3,'noel.titus','2016-10-24 09:23:04','2016-10-24 09:23:20',3),(4,'abdul.hemedy','2016-10-24 09:23:30','2016-10-24 09:36:55',4),(5,'admin','2017-08-13 00:53:22','',5),(6,'admin','2017-08-13 01:04:51','',5),(7,'admin','2017-08-13 23:20:24','',5),(8,'admin','2017-08-14 00:03:22','',5),(9,'admin','2017-08-14 00:14:01','',5),(10,'admin','2017-08-15 01:28:41','',5),(11,'admin','2017-08-15 18:30:18','',5),(12,'admin','2017-08-15 18:39:33','',5),(13,'admin','2017-08-15 21:32:30','',5),(14,'admin','2017-08-16 00:13:28','',5),(15,'admin','2017-08-19 19:11:48','',5),(16,'admin','2017-08-19 20:04:54','',5),(17,'admin','2017-08-19 23:19:14','',5),(18,'admin','2017-08-20 13:12:12','',5),(19,'admin','2017-08-20 16:54:50','',5),(20,'admin','2017-08-20 18:24:32','',5),(21,'admin','2017-08-20 19:47:20','',5),(22,'admin','2017-08-20 22:40:38','',5),(23,'admin','2017-08-21 22:17:14','',5),(24,'admin','2017-08-22 00:31:21','',5),(25,'admin','2017-08-22 00:37:20','',5),(26,'admin','2017-08-22 08:03:13','',5),(27,'admin','2017-08-22 08:17:46','',5),(28,'admin','2017-08-22 11:10:17','',5),(29,'admin','2017-08-22 11:21:58','',5),(30,'admin','2017-08-22 22:11:29','',5),(31,'admin','2017-08-23 00:00:46','',5),(32,'admin','2017-08-23 08:09:47','',5),(33,'admin','2017-08-23 08:53:12','',5),(34,'admin','2017-08-23 10:16:24','',5),(35,'admin','2017-08-23 11:25:57','',5),(36,'admin','2017-08-23 22:04:27','',5),(37,'admin','2017-08-23 22:50:55','',5),(38,'admin','2017-08-24 00:09:48','',5),(39,'admin','2017-08-24 08:59:27','',5),(40,'admin','2017-08-24 10:48:24','',5),(41,'admin','2017-08-25 19:46:49','',5),(42,'admin','2017-08-25 21:41:06','',5),(43,'admin','2017-08-25 23:28:47','',5),(44,'admin','2017-08-30 22:40:57','',5),(45,'admin','2017-08-30 23:50:00','',5),(46,'admin','2017-08-31 11:18:34','',5),(47,'admin','2017-09-01 11:26:52','',5),(48,'admin','2017-09-07 00:26:12','',5),(49,'admin','2017-09-07 01:11:09','',5),(50,'admin','2017-09-18 22:19:16','',5),(51,'admin','2017-09-19 00:32:59','',5),(52,'admin','2017-09-19 01:00:03','',5),(53,'admin','2017-09-20 00:14:10','',5),(54,'admin','2017-09-23 00:12:43','',5),(55,'admin','2017-09-23 07:45:09','',5),(56,'admin','2017-09-23 09:43:37','',5),(57,'admin','2017-09-23 16:49:21','',5),(58,'admin','2017-09-23 18:14:54','',5),(59,'admin','2017-09-23 18:15:19','',5),(60,'admin','2017-09-23 18:16:14','',5),(61,'admin','2017-09-23 18:27:09','',5),(62,'admin','2017-09-23 18:28:33','',5),(63,'admin','2017-09-23 18:52:36','',5),(64,'newtest','2017-09-23 21:35:34','',10),(65,'newtest','2017-09-23 21:36:40','',10),(66,'newtest','2017-09-23 21:37:10','',10),(67,'admin','2017-09-23 21:39:45','',5),(68,'admin','2017-09-23 21:54:35','',5),(69,'admin','2017-09-23 21:55:56','',5),(70,'admin','2017-09-23 22:06:18','',5),(71,'admin','2017-09-23 23:32:46','',5),(72,'admin','2017-09-24 11:23:41','',5),(73,'admin','2017-09-24 13:14:33','',5),(74,'admin','2017-09-24 16:10:31','',5),(75,'admin','2017-09-24 18:16:56','',5),(76,'admin','2017-09-24 19:36:34','',5),(77,'admin','2017-09-24 22:31:46','',5),(78,'admin','2017-09-26 00:16:01','',5),(79,'admin','2017-09-26 00:18:08','',5),(80,'admin','2017-09-27 00:15:30','',5),(81,'admin','2017-09-28 00:44:32','',5),(82,'admin','2017-09-29 10:24:43','',5),(83,'admin','2017-09-29 12:20:51','',5),(84,'admin','2017-09-29 16:10:41','',5),(85,'admin','2017-09-29 17:38:36','',5),(86,'admin','2017-10-25 00:16:38','',5),(87,'admin','2017-10-28 07:55:34','',5),(88,'mari','2017-10-28 09:05:04','',6),(89,'mari','2017-10-28 17:15:49','',6),(90,'mari','2017-10-28 20:02:24','',6),(91,'mari','2017-10-28 23:54:42','',6),(92,'mari','2017-10-29 12:47:18','',6),(93,'mari','2017-10-29 15:41:11','',6),(94,'mari','2017-10-29 17:40:40','',6),(95,'mari','2017-10-29 21:46:09','',6),(96,'mari','2017-10-30 00:27:46','',6);
/*!40000 ALTER TABLE `user_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'admin','Amtxx@TRAG','mariyappan','mariyappan','mari@amtexsystems.com','administrator'),(6,'mari','useruser','mariyappan','mariyappan','mari1@amtexsystems.com','administrator'),(7,'test','useruser','mariyappan','mariyappan','test@amtexsystems.com','administrator'),(10,'newtest','useruser','newtest','newtest','newtest@amtexsystems.com','administrator'),(11,'test2','useruser','test2','test2','test2@amtexsystems.com','administrator'),(12,'test3','useruser','test3','test3','test3@amtexsystems.com','administrator');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendordetails`
--

DROP TABLE IF EXISTS `vendordetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendordetails` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `corporatename` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `taxid` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `contactnumber` (`contactnumber`),
  UNIQUE KEY `taxid` (`taxid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendordetails`
--

LOCK TABLES `vendordetails` WRITE;
/*!40000 ALTER TABLE `vendordetails` DISABLE KEYS */;
INSERT INTO `vendordetails` VALUES (2,'new-corporate','new-company chennai siruseri','5623','new-company@corporate.com','044895623123'),(3,'Tata Consultancy Services','Siruseri Special Economic Zone, Plot No.1/G1, SIPCOT Information Technology Park, Navalur Post, Siruseri, Chennai, Tamil Nadu 603103, India','5421','new@tata.com','04456231254');
/*!40000 ALTER TABLE `vendordetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-30  1:01:23
