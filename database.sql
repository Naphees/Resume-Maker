-- MySQL dump 10.13  Distrib 5.7.23-23, for Linux (x86_64)
--
-- Host: localhost    Database: impprfrh_resume
-- ------------------------------------------------------
-- Server version	5.7.23-23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `ip` varchar(90) DEFAULT NULL,
  `class` varchar(80) DEFAULT NULL,
  `college` varchar(96) DEFAULT NULL,
  `board` varchar(90) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`id`, `ip`, `class`, `college`, `board`, `resume_number`) VALUES (9,'103.91.82.168','BCA (Bachelor of Computer Applications)','Neelkant Institute Of Management Meerut','C.C.S. University','12'),(10,'103.91.82.168','Pursuing MCA (Master of Computer Applications)','Dewan Institute Of Management Meerut','Dr. A.P.J. Abdul Kalam Technical University','12'),(13,'103.200.86.74','Mca','Dewan','Rishabh','1'),(14,'103.200.86.74','Mca','Dewan','Rishabh','1');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experience` (
  `id` int(69) NOT NULL AUTO_INCREMENT,
  `ip` varchar(69) DEFAULT NULL,
  `company` varchar(69) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `work` varchar(76) DEFAULT NULL,
  `experience` varchar(46) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` (`id`, `ip`, `company`, `address`, `work`, `experience`, `resume_number`) VALUES (6,'103.91.82.168','ddddddd','jjj','fff','eee','1'),(7,'103.91.82.168','ddddddd','jjj','fff','eee','7'),(8,'103.91.82.168','fresher','Khatauli , Near by Meerut city','mmmmmmmmmmmmmmm','22','7');
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `more`
--

DROP TABLE IF EXISTS `more`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `more` (
  `id` int(57) NOT NULL AUTO_INCREMENT,
  `ip` varchar(57) DEFAULT NULL,
  `achievements` varchar(88) DEFAULT NULL,
  `strengths` varchar(88) DEFAULT NULL,
  `hobbies` varchar(88) DEFAULT NULL,
  `career_objective` varchar(300) DEFAULT NULL,
  `declaration` varchar(300) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `more`
--

LOCK TABLES `more` WRITE;
/*!40000 ALTER TABLE `more` DISABLE KEYS */;
INSERT INTO `more` (`id`, `ip`, `achievements`, `strengths`, `hobbies`, `career_objective`, `declaration`, `resume_number`) VALUES (5,'103.91.82.168','Goal complete ,Problem solve , live with my parents','ccccc','ddddd','dddddd','I here declare that the information furnished above is true to the best of my knowledge','1'),(6,'103.91.82.168','Goal complete ,Problem solve , live with my parents','ccccc','ddddd','dddddd','I here declare that the information furnished above is true to the best of my knowledge','1'),(7,'103.91.82.168','bca complete','Teacher and learning','exercies','My ambitious is to be software engineer.','I here declare that the information furnished above is true to the best of my knowledge','10'),(8,'103.91.82.168','bca complete','Teacher and learning','exercies','My ambitious is to be software engineer.','I here declare that the information furnished above is true to the best of my knowledge','10'),(9,'103.91.82.168','bca complete','My teachers and parents','exercise , singing song , walking ','My ambitious is to be software engineer.','I here declare that the information furnished above is true to the best of my knowledge','12');
/*!40000 ALTER TABLE `more` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `ip` varchar(45) DEFAULT NULL,
  `resume_heading` varchar(500) DEFAULT NULL,
  `photo` varchar(68) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(89) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`id`, `ip`, `resume_heading`, `photo`, `name`, `email`, `address`, `contact`, `resume_number`) VALUES (39,'103.91.82.168',' &quot;Ambitious and adaptable graduate with a Bachelor&#039;s degree in software engineering. Possessing strong interpersonal skills , I am eager to kickstart my career and contribute positively to a forward-thinking organization. &quot;','1ae91822-0233-4eb0-89cd-054b65f5d1a8 (1).jfif','Naphees','naphees9997@gmail.com','Khatauli , near by Meerut city','9997178512',NULL),(40,'103.91.82.168','heloowwww','1ae91822-0233-4eb0-89cd-054b65f5d1a8.jfif','asfd','a@gmail.com','bbbb','4444','1'),(41,'103.91.82.168','Ambitious and adaptable graduate with a Bachelor degree in software engineering. Possessing strong interpersonal skills , I am eager to kickstart my career and contribute positively to a forward-thinking organization.','1ae91822-0233-4eb0-89cd-054b65f5d1a8 (1).jfif','Naphees','naphees9997@gmail.com','Khatauli , Near by Meerut city','9997178512','12');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(78) NOT NULL AUTO_INCREMENT,
  `ip` varchar(78) DEFAULT NULL,
  `project` varchar(78) DEFAULT NULL,
  `project_duration` varchar(78) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `link` varchar(89) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` (`id`, `ip`, `project`, `project_duration`, `detail`, `link`, `resume_number`) VALUES (9,'103.91.82.168','Resume maker','hhh','this beside used  resume create','http://imppro/project1/index.php','7'),(10,'103.91.82.168','Marketing plateform','2 months','Sell and purchase produce','https://imppro.in/marketing/','12'),(11,'103.91.82.168','Resume maker','A month','Anyone  can create resume easily','https://imppro.in/resume/','12');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `security`
--

DROP TABLE IF EXISTS `security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `security` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=403 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `security`
--

LOCK TABLES `security` WRITE;
/*!40000 ALTER TABLE `security` DISABLE KEYS */;
INSERT INTO `security` (`id`, `ip`, `time`, `date`) VALUES (1,'103.91.82.168','08:06:56','02-06-24'),(2,'103.91.82.168','08:06:31','02-06-24'),(3,'103.91.82.168','09:06:35','02-06-24'),(4,'117.96.128.137','11:06:26','02-06-24'),(5,'117.96.128.137','11:06:36','02-06-24'),(6,'117.96.128.137','11:06:01','02-06-24'),(7,'117.96.128.137','11:06:01','02-06-24'),(8,'103.91.82.168','03:06:49','03-06-24'),(9,'103.91.82.168','03:06:49','03-06-24'),(10,'103.91.82.168','03:06:54','03-06-24'),(11,'103.91.82.168','03:06:53','03-06-24'),(12,'103.15.254.159','03:06:51','03-06-24'),(13,'103.15.254.159','03:06:37','03-06-24'),(14,'103.15.254.159','03:06:55','03-06-24'),(15,'103.15.254.159','03:06:21','03-06-24'),(16,'103.15.254.159','03:06:08','03-06-24'),(17,'103.15.254.159','03:06:12','03-06-24'),(18,'103.91.82.168','03:06:17','04-06-24'),(19,'103.200.86.74','02:06:48','04-06-24'),(20,'103.200.86.74','02:06:51','04-06-24'),(21,'152.59.65.97','10:06:35','07-06-24'),(22,'202.89.77.71','07:06:51','08-06-24'),(23,'202.89.77.71','07:06:58','08-06-24'),(24,'110.172.131.248','07:06:12','08-06-24'),(25,'110.172.131.248','07:06:08','08-06-24'),(26,'110.172.131.248','08:06:40','08-06-24'),(27,'103.15.255.35','02:06:57','08-06-24'),(28,'103.15.255.35','05:06:04','08-06-24'),(29,'103.91.82.164','05:06:13','09-06-24'),(30,'103.91.82.164','05:06:58','09-06-24'),(31,'152.59.64.151','06:06:27','14-06-24'),(32,'152.59.64.151','06:06:42','14-06-24'),(33,'152.59.64.151','06:06:00','14-06-24'),(34,'103.15.254.140','03:06:05','17-06-24'),(35,'152.59.64.153','03:06:45','18-06-24'),(36,'152.59.64.153','03:06:40','18-06-24'),(37,'103.91.82.162','09:06:14','21-06-24'),(38,'103.91.82.162','09:06:45','21-06-24'),(39,'103.91.82.162','09:06:20','21-06-24'),(40,'103.200.86.146','03:06:19','22-06-24'),(41,'103.200.86.109','02:06:38','24-06-24'),(42,'103.200.86.198','09:07:33','01-07-24'),(43,'103.200.86.198','09:07:45','01-07-24'),(44,'103.200.86.198','09:07:46','01-07-24'),(45,'103.91.82.173','04:07:47','02-07-24'),(46,'103.91.82.165','11:08:41','05-08-24'),(47,'103.91.82.162','12:08:27','12-08-24'),(48,'103.91.82.162','02:08:10','12-08-24'),(49,'103.91.82.164','04:08:37','13-08-24'),(50,'103.226.202.37','03:09:44','11-09-24'),(51,'157.55.39.6','04:09:43','11-09-24'),(52,'49.42.36.127','05:09:44','11-09-24'),(53,'49.42.36.127','05:09:04','11-09-24'),(54,'178.254.12.183','05:09:10','11-09-24'),(55,'13.79.189.231','01:09:43','12-09-24'),(56,'35.87.223.130','01:09:23','12-09-24'),(57,'93.158.90.65','03:09:48','12-09-24'),(58,'104.131.163.125','04:09:28','12-09-24'),(59,'104.131.163.125','04:09:29','12-09-24'),(60,'13.79.92.84','04:09:36','12-09-24'),(61,'154.38.187.100','05:09:19','12-09-24'),(62,'87.236.176.23','06:09:34','12-09-24'),(63,'207.46.13.107','10:09:48','12-09-24'),(64,'91.92.255.187','03:09:04','12-09-24'),(65,'3.111.48.138','04:09:39','12-09-24'),(66,'3.111.48.138','04:09:39','12-09-24'),(67,'3.111.48.138','04:09:41','12-09-24'),(68,'66.249.72.129','06:09:30','12-09-24'),(69,'66.249.72.142','06:09:45','12-09-24'),(70,'66.249.72.142','06:09:45','12-09-24'),(71,'66.249.72.129','06:09:12','12-09-24'),(72,'163.116.214.39','06:09:10','12-09-24'),(73,'4.213.167.133','07:09:38','12-09-24'),(74,'4.213.167.133','07:09:39','12-09-24'),(75,'87.236.176.214','10:09:39','12-09-24'),(76,'40.77.167.136','03:09:21','13-09-24'),(77,'13.74.113.25','05:09:12','13-09-24'),(78,'163.116.195.119','06:09:55','13-09-24'),(79,'163.116.195.119','06:09:32','13-09-24'),(80,'147.185.132.51','07:09:10','13-09-24'),(81,'14.97.165.138','07:09:07','13-09-24'),(82,'34.100.128.77','07:09:15','13-09-24'),(83,'34.100.128.77','07:09:19','13-09-24'),(84,'34.100.128.77','07:09:22','13-09-24'),(85,'14.97.165.138','07:09:00','13-09-24'),(86,'14.97.165.138','08:09:37','13-09-24'),(87,'14.97.165.138','08:09:19','13-09-24'),(88,'14.97.165.138','08:09:24','13-09-24'),(89,'14.97.165.138','08:09:17','13-09-24'),(90,'14.97.165.138','08:09:17','13-09-24'),(91,'34.100.128.77','08:09:12','13-09-24'),(92,'103.226.200.61','08:09:13','13-09-24'),(93,'34.100.128.77','08:09:16','13-09-24'),(94,'34.100.128.77','08:09:20','13-09-24'),(95,'14.97.165.138','08:09:22','13-09-24'),(96,'14.97.165.138','08:09:09','13-09-24'),(97,'103.226.200.61','08:09:31','13-09-24'),(98,'14.97.165.138','08:09:50','13-09-24'),(99,'14.97.165.138','08:09:50','13-09-24'),(100,'52.11.161.107','09:09:28','13-09-24'),(101,'54.212.117.181','09:09:26','13-09-24'),(102,'147.185.132.177','11:09:26','13-09-24'),(103,'103.226.200.1','12:09:33','13-09-24'),(104,'52.167.144.22','12:09:42','13-09-24'),(105,'40.77.167.72','12:09:04','13-09-24'),(106,'40.77.167.77','02:09:38','13-09-24'),(107,'100.21.218.158','03:09:59','13-09-24'),(108,'100.21.218.158','03:09:00','13-09-24'),(109,'100.21.218.158','03:09:00','13-09-24'),(110,'40.77.167.77','03:09:51','13-09-24'),(111,'35.165.215.140','03:09:51','13-09-24'),(112,'35.165.215.140','03:09:53','13-09-24'),(113,'35.165.215.140','03:09:53','13-09-24'),(114,'199.195.251.78','05:09:49','13-09-24'),(115,'40.77.167.4','02:09:03','14-09-24'),(116,'52.167.144.22','03:09:10','14-09-24'),(117,'15.236.40.67','11:09:28','14-09-24'),(118,'205.210.31.26','01:09:25','14-09-24'),(119,'198.235.24.24','06:09:10','14-09-24'),(120,'66.249.77.73','12:09:46','15-09-24'),(121,'198.235.24.179','02:09:10','15-09-24'),(122,'40.77.167.17','03:09:21','15-09-24'),(123,'5.133.192.136','04:09:45','15-09-24'),(124,'35.88.245.94','09:09:32','15-09-24'),(125,'18.236.237.50','09:09:15','15-09-24'),(126,'52.167.144.204','02:09:18','15-09-24'),(127,'198.235.24.53','02:09:44','15-09-24'),(128,'106.219.192.158','02:09:01','15-09-24'),(129,'106.219.192.158','02:09:01','15-09-24'),(130,'106.219.192.158','03:09:17','15-09-24'),(131,'103.226.202.246','03:09:14','15-09-24'),(132,'13.79.35.214','11:09:29','15-09-24'),(133,'13.36.244.74','01:09:09','16-09-24'),(134,'40.77.167.54','02:09:22','16-09-24'),(135,'51.81.46.212','08:09:09','16-09-24'),(136,'52.167.144.25','04:09:00','16-09-24'),(137,'49.42.36.141','04:09:07','16-09-24'),(138,'66.249.77.74','02:09:28','17-09-24'),(139,'164.90.241.135','03:09:25','17-09-24'),(140,'68.183.245.101','03:09:29','17-09-24'),(141,'38.95.13.131','03:09:29','17-09-24'),(142,'40.77.167.25','03:09:09','17-09-24'),(143,'198.235.24.230','06:09:17','17-09-24'),(144,'52.10.214.49','08:09:06','17-09-24'),(145,'35.87.149.149','08:09:58','17-09-24'),(146,'139.59.35.112','09:09:00','17-09-24'),(147,'139.59.35.112','09:09:02','17-09-24'),(148,'205.210.31.185','01:09:50','17-09-24'),(149,'2.98.103.64','07:09:15','17-09-24'),(150,'68.183.245.101','07:09:15','17-09-24'),(151,'40.113.88.237','08:09:55','17-09-24'),(152,'40.113.88.237','08:09:59','17-09-24'),(153,'207.46.13.102','03:09:17','18-09-24'),(154,'198.235.24.55','08:09:44','18-09-24'),(155,'13.79.35.58','08:09:32','18-09-24'),(156,'13.79.35.58','08:09:54','18-09-24'),(157,'13.74.103.156','10:09:54','18-09-24'),(158,'13.74.103.156','10:09:58','18-09-24'),(159,'13.74.103.156','10:09:02','18-09-24'),(160,'13.74.103.156','10:09:16','18-09-24'),(161,'34.211.54.242','11:09:34','18-09-24'),(162,'34.221.106.105','11:09:18','18-09-24'),(163,'209.58.162.198','12:09:22','18-09-24'),(164,'52.178.143.183','01:09:45','18-09-24'),(165,'52.178.143.183','01:09:49','18-09-24'),(166,'206.168.34.222','01:09:32','18-09-24'),(167,'199.45.154.152','02:09:36','18-09-24'),(168,'13.74.98.118','03:09:36','18-09-24'),(169,'13.74.98.118','03:09:41','18-09-24'),(170,'13.74.98.118','03:09:45','18-09-24'),(171,'13.74.98.118','03:09:01','18-09-24'),(172,'207.46.13.141','06:09:50','18-09-24'),(173,'34.133.243.114','11:09:48','18-09-24'),(174,'157.173.122.176','12:09:12','19-09-24'),(175,'66.249.69.136','02:09:30','19-09-24'),(176,'207.46.13.154','03:09:02','19-09-24'),(177,'52.178.143.173','06:09:58','19-09-24'),(178,'52.178.143.173','06:09:20','19-09-24'),(179,'13.94.95.64','08:09:28','19-09-24'),(180,'13.94.95.64','08:09:32','19-09-24'),(181,'13.79.35.58','08:09:16','19-09-24'),(182,'13.79.35.58','08:09:20','19-09-24'),(183,'13.79.35.58','08:09:23','19-09-24'),(184,'13.79.35.58','08:09:38','19-09-24'),(185,'13.115.125.121','10:09:32','19-09-24'),(186,'13.115.125.121','10:09:32','19-09-24'),(187,'13.115.125.121','10:09:33','19-09-24'),(188,'13.79.229.148','09:09:06','19-09-24'),(189,'13.79.229.148','09:09:10','19-09-24'),(190,'52.169.217.58','10:09:27','19-09-24'),(191,'52.169.217.58','10:09:31','19-09-24'),(192,'52.169.217.58','10:09:35','19-09-24'),(193,'52.169.217.58','10:09:51','19-09-24'),(194,'66.249.69.196','11:09:22','19-09-24'),(195,'199.45.155.80','12:09:50','20-09-24'),(196,'199.45.154.157','12:09:16','20-09-24'),(197,'13.94.100.62','01:09:23','20-09-24'),(198,'13.94.100.62','01:09:50','20-09-24'),(199,'157.55.39.57','03:09:48','20-09-24'),(200,'130.255.166.26','12:09:28','20-09-24'),(201,'94.156.68.236','01:09:35','20-09-24'),(202,'157.55.39.55','05:09:41','20-09-24'),(203,'157.55.39.201','08:09:46','20-09-24'),(204,'35.87.31.80','08:09:16','20-09-24'),(205,'35.89.64.17','08:09:14','20-09-24'),(206,'157.55.39.57','04:09:41','21-09-24'),(207,'147.185.132.51','04:09:25','21-09-24'),(208,'5.133.192.94','08:09:27','21-09-24'),(209,'54.88.179.33','09:09:12','21-09-24'),(210,'35.171.144.152','09:09:13','21-09-24'),(211,'54.88.179.33','09:09:13','21-09-24'),(212,'157.55.39.201','12:09:49','21-09-24'),(213,'205.210.31.58','01:09:37','21-09-24'),(214,'52.138.203.76','03:09:08','21-09-24'),(215,'52.138.203.76','03:09:13','21-09-24'),(216,'52.138.203.76','03:09:17','21-09-24'),(217,'52.138.203.76','03:09:33','21-09-24'),(218,'52.164.126.26','03:09:16','21-09-24'),(219,'52.164.126.26','03:09:20','21-09-24'),(220,'157.55.39.58','05:09:15','21-09-24'),(221,'199.244.88.224','12:09:27','22-09-24'),(222,'66.249.69.196','12:09:33','22-09-24'),(223,'66.249.69.197','12:09:33','22-09-24'),(224,'207.46.13.126','04:09:05','22-09-24'),(225,'207.241.225.114','07:09:12','22-09-24'),(226,'207.241.235.164','07:09:12','22-09-24'),(227,'207.154.197.113','07:09:12','22-09-24'),(228,'142.93.143.8','07:09:13','22-09-24'),(229,'207.241.235.133','07:09:13','22-09-24'),(230,'142.93.143.8','07:09:13','22-09-24'),(231,'207.241.235.133','07:09:13','22-09-24'),(232,'207.241.225.114','07:09:13','22-09-24'),(233,'207.154.197.113','07:09:16','22-09-24'),(234,'142.93.143.8','07:09:18','22-09-24'),(235,'207.154.197.113','07:09:24','22-09-24'),(236,'207.241.235.164','07:09:25','22-09-24'),(237,'195.211.77.140','07:09:26','22-09-24'),(238,'195.211.77.142','07:09:38','22-09-24'),(239,'138.199.6.204','07:09:18','22-09-24'),(240,'34.72.176.129','07:09:21','22-09-24'),(241,'205.169.39.85','07:09:32','22-09-24'),(242,'205.169.39.85','07:09:43','22-09-24'),(243,'88.99.26.177','07:09:47','22-09-24'),(244,'5.164.29.116','08:09:57','22-09-24'),(245,'78.197.204.166','08:09:21','22-09-24'),(246,'87.236.176.251','09:09:40','22-09-24'),(247,'13.79.36.136','09:09:25','22-09-24'),(248,'13.79.36.136','09:09:50','22-09-24'),(249,'205.169.39.23','10:09:23','22-09-24'),(250,'133.242.174.119','10:09:00','22-09-24'),(251,'205.169.39.20','12:09:15','22-09-24'),(252,'192.241.67.70','12:09:25','22-09-24'),(253,'95.164.159.114','12:09:25','22-09-24'),(254,'209.127.107.125','12:09:25','22-09-24'),(255,'157.55.39.55','01:09:53','22-09-24'),(256,'205.210.31.168','02:09:52','22-09-24'),(257,'72.14.201.143','02:09:26','22-09-24'),(258,'15.237.251.126','03:09:52','22-09-24'),(259,'52.169.37.124','07:09:46','22-09-24'),(260,'52.169.37.124','07:09:50','22-09-24'),(261,'52.169.37.124','07:09:54','22-09-24'),(262,'52.169.37.124','07:09:11','22-09-24'),(263,'171.244.43.14','08:09:48','22-09-24'),(264,'52.178.218.185','08:09:46','22-09-24'),(265,'52.178.218.185','08:09:51','22-09-24'),(266,'47.251.15.21','09:09:27','22-09-24'),(267,'47.254.16.187','09:09:28','22-09-24'),(268,'47.88.5.56','09:09:28','22-09-24'),(269,'109.202.99.46','09:09:27','22-09-24'),(270,'45.200.149.221','10:09:10','22-09-24'),(271,'165.232.99.229','12:09:51','23-09-24'),(272,'165.232.99.229','12:09:52','23-09-24'),(273,'170.231.251.148','01:09:55','23-09-24'),(274,'95.164.158.237','01:09:13','23-09-24'),(275,'95.164.156.221','01:09:15','23-09-24'),(276,'209.58.162.218','03:09:26','23-09-24'),(277,'94.247.172.129','09:09:01','23-09-24'),(278,'35.88.182.110','11:09:50','23-09-24'),(279,'34.209.72.49','12:09:37','23-09-24'),(280,'34.209.72.49','12:09:37','23-09-24'),(281,'34.209.72.49','12:09:37','23-09-24'),(282,'35.161.33.210','12:09:24','23-09-24'),(283,'207.46.13.154','01:09:37','23-09-24'),(284,'40.113.118.83','11:09:34','23-09-24'),(285,'13.79.189.231','12:09:38','24-09-24'),(286,'40.113.88.212','12:09:44','24-09-24'),(287,'40.113.88.212','12:09:49','24-09-24'),(288,'40.113.88.212','12:09:53','24-09-24'),(289,'40.113.88.212','12:09:09','24-09-24'),(290,'15.204.182.106','01:09:36','24-09-24'),(291,'15.204.182.106','01:09:24','24-09-24'),(292,'52.164.126.59','01:09:16','24-09-24'),(293,'52.164.126.59','01:09:21','24-09-24'),(294,'34.209.72.49','01:09:52','24-09-24'),(295,'34.209.72.49','01:09:52','24-09-24'),(296,'34.209.72.49','01:09:52','24-09-24'),(297,'91.92.255.187','08:09:45','24-09-24'),(298,'38.154.214.108','08:09:39','24-09-24'),(299,'38.154.198.80','08:09:39','24-09-24'),(300,'170.254.178.106','08:09:41','24-09-24'),(301,'20.229.51.198','11:09:05','24-09-24'),(302,'157.173.122.176','12:09:18','24-09-24'),(303,'40.77.167.4','01:09:24','24-09-24'),(304,'54.213.222.41','03:09:47','24-09-24'),(305,'35.92.12.112','03:09:06','24-09-24'),(306,'104.152.52.71','04:09:07','24-09-24'),(307,'104.152.52.68','04:09:07','24-09-24'),(308,'134.122.109.225','01:09:41','25-09-24'),(309,'134.122.109.225','01:09:42','25-09-24'),(310,'135.148.100.196','02:09:11','25-09-24'),(311,'123.207.198.35','03:09:45','25-09-24'),(312,'84.17.46.147','04:09:00','25-09-24'),(313,'40.77.167.136','01:09:31','25-09-24'),(314,'34.215.174.174','04:09:02','25-09-24'),(315,'54.191.74.86','04:09:49','25-09-24'),(316,'199.244.88.231','05:09:16','25-09-24'),(317,'45.200.149.221','09:09:12','25-09-24'),(318,'167.71.183.171','05:09:42','26-09-24'),(319,'167.71.183.171','05:09:43','26-09-24'),(320,'130.255.166.115','06:09:18','26-09-24'),(321,'52.178.219.51','08:09:11','26-09-24'),(322,'13.74.98.118','10:09:14','26-09-24'),(323,'40.77.167.55','08:09:23','26-09-24'),(324,'92.249.29.239','11:09:23','26-09-24'),(325,'40.77.167.243','12:09:17','27-09-24'),(326,'134.122.23.222','12:09:38','27-09-24'),(327,'134.122.23.222','12:09:38','27-09-24'),(328,'147.185.132.150','12:09:21','27-09-24'),(329,'52.169.31.135','01:09:50','27-09-24'),(330,'13.94.102.185','02:09:44','27-09-24'),(331,'5.133.192.88','12:09:22','27-09-24'),(332,'107.181.244.204','03:09:44','27-09-24'),(333,'5.62.62.93','04:09:31','27-09-24'),(334,'5.62.62.93','04:09:31','27-09-24'),(335,'5.62.62.93','04:09:32','27-09-24'),(336,'52.164.203.124','04:09:55','27-09-24'),(337,'52.164.203.124','04:09:59','27-09-24'),(338,'52.164.203.124','04:09:07','27-09-24'),(339,'34.201.133.119','06:09:38','27-09-24'),(340,'40.77.167.46','07:09:02','27-09-24'),(341,'13.79.225.115','10:09:22','27-09-24'),(342,'13.79.225.115','10:09:29','27-09-24'),(343,'40.113.93.228','03:09:15','28-09-24'),(344,'40.113.93.228','03:09:51','28-09-24'),(345,'40.113.93.228','03:09:04','28-09-24'),(346,'40.113.93.228','05:09:59','28-09-24'),(347,'52.167.144.231','07:09:39','28-09-24'),(348,'52.178.191.197','04:09:46','28-09-24'),(349,'52.167.144.239','07:09:10','28-09-24'),(350,'91.92.255.187','10:09:10','28-09-24'),(351,'54.216.150.80','03:09:43','29-09-24'),(352,'40.77.167.152','05:09:36','29-09-24'),(353,'5.62.58.81','06:09:09','29-09-24'),(354,'5.62.58.81','06:09:09','29-09-24'),(355,'5.62.58.81','06:09:09','29-09-24'),(356,'205.210.31.158','11:09:29','29-09-24'),(357,'198.235.24.142','12:09:20','29-09-24'),(358,'91.92.248.147','03:09:23','29-09-24'),(359,'91.92.248.147','03:09:24','29-09-24'),(360,'69.160.160.60','05:09:07','29-09-24'),(361,'69.160.160.60','05:09:07','29-09-24'),(362,'52.167.144.184','07:09:46','29-09-24'),(363,'52.178.220.65','09:09:51','29-09-24'),(364,'52.178.220.65','09:09:05','29-09-24'),(365,'178.254.38.45','01:09:29','30-09-24'),(366,'52.167.144.218','04:09:44','30-09-24'),(367,'34.44.93.61','02:09:38','30-09-24'),(368,'52.167.144.232','07:09:31','30-09-24'),(369,'205.210.31.88','11:09:42','30-09-24'),(370,'20.171.206.240','06:10:52','01-10-24'),(371,'139.59.26.59','06:10:35','01-10-24'),(372,'139.59.26.59','06:10:36','01-10-24'),(373,'69.160.160.60','08:10:41','01-10-24'),(374,'69.160.160.60','08:10:42','01-10-24'),(375,'66.249.69.195','01:10:11','01-10-24'),(376,'66.249.69.194','01:10:11','01-10-24'),(377,'52.167.144.203','08:10:17','01-10-24'),(378,'52.169.84.65','08:10:22','01-10-24'),(379,'52.169.84.65','08:10:39','01-10-24'),(380,'52.169.84.65','08:10:06','01-10-24'),(381,'84.17.46.207','03:10:07','02-10-24'),(382,'52.167.144.190','05:10:40','02-10-24'),(383,'87.236.176.46','06:10:38','02-10-24'),(384,'93.158.90.12','08:10:20','02-10-24'),(385,'144.217.135.213','12:10:33','02-10-24'),(386,'144.217.135.213','12:10:33','02-10-24'),(387,'144.217.135.213','12:10:34','02-10-24'),(388,'144.217.135.213','12:10:38','02-10-24'),(389,'144.217.135.212','12:10:58','02-10-24'),(390,'34.140.94.236','02:10:39','02-10-24'),(391,'52.178.178.48','03:10:30','02-10-24'),(392,'40.77.167.10','03:10:17','02-10-24'),(393,'54.186.14.35','10:10:18','03-10-24'),(394,'44.243.218.49','10:10:48','03-10-24'),(395,'52.178.179.50','10:10:51','03-10-24'),(396,'66.249.69.196','01:10:07','03-10-24'),(397,'66.249.69.197','01:10:07','03-10-24'),(398,'40.77.167.26','03:10:19','03-10-24'),(399,'5.133.192.167','04:10:52','03-10-24'),(400,'212.102.33.130','10:10:06','03-10-24'),(401,'5.62.60.93','10:10:20','03-10-24'),(402,'205.210.31.174','03:10:27','04-10-24');
/*!40000 ALTER TABLE `security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `ip` varchar(90) DEFAULT NULL,
  `skill` varchar(90) DEFAULT NULL,
  `skill_information` varchar(100) DEFAULT NULL,
  `resume_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` (`id`, `ip`, `skill`, `skill_information`, `resume_number`) VALUES (13,'103.91.82.168','hhh','easily hhhhhhhhhhh2handel','2'),(14,'103.91.82.168','Programming Language','html ,css , javascript , c, c++ , java , php , jquery,bootstrap, sql','7'),(15,'103.91.82.168','Programming Language','html ,css , javascript , c, c++ , java , php , sql','12'),(16,'103.91.82.168','Networking','Good knowledge','12'),(17,'103.91.82.168','DBMS  (database management system)','Mysql ,   oracle ','12'),(18,'103.91.82.168','Presentation','Best','12'),(19,'103.91.82.168','Communication','Best','12'),(20,'103.91.82.168','Framework','Bootstrap , jquery ,angular','12'),(21,'103.91.82.168','OS (operating system)','Good knowledge','12'),(22,'103.91.82.168','System Security ','Good knowledge','12'),(23,'103.91.82.168','DSA (data structures algorithms )','Good','12');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'impprfrh_resume'
--

--
-- Dumping routines for database 'impprfrh_resume'
--
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-04 12:06:13
