CREATE DATABASE  IF NOT EXISTS `doctor_appointment` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `doctor_appointment`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: doctor_appointment
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `doc_id` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `days_available` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fees` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'doc_8573','Anirban Chatterjee','Cardiology','Mon, Wed, Fri','9876543210','15A Park Street, Kolkata',1500.00),(2,'doc_1946','Soma Mukherjee','Gynecology','Tue, Thu, Sat','9876543211','22B Ballygunge Place, Kolkata',1800.00),(3,'doc_6392','Sayan Sen','Dermatology','Mon, Wed, Fri','9876543212','34C Gariahat Road, Kolkata',1700.00),(4,'doc_2895','Alok Roy','Neurology','Tue, Thu, Sat','9876543213','17D Salt Lake, Sector V, Kolkata',1900.00),(5,'doc_1347','Partha Sarathi Das','Orthopedics','Mon, Wed, Fri','9876543214','29A Bhawanipore, Kolkata',1600.00),(6,'doc_6582','Madhumita Pal','Pediatrics','Tue, Thu, Sat','9876543215','50A Dum Dum Road, Kolkata',1400.00),(7,'doc_7481','Anindita Ghosh','Ophthalmology','Mon, Wed, Fri','9876543216','5C Lake Gardens, Kolkata',1500.00),(8,'doc_3874','Dipankar Saha','General Medicine','Tue, Thu, Sat','9876543217','13A Tollygunge, Kolkata',1200.00),(9,'doc_1928','Arindam Mitra','ENT','Mon, Wed, Fri','9876543218','48D Behala, Kolkata',1300.00),(10,'doc_8456','Shreya Sen','Psychiatry','Tue, Thu, Sat','9876543219','19A Alipore Road, Kolkata',1600.00),(11,'doc_7329','Abhijit Basu','Urology','Mon, Wed, Fri','9876543220','16B Jadavpur, Kolkata',1500.00),(12,'doc_2348','Rina Ghoshal','Endocrinology','Tue, Thu, Sat','9876543221','32A Shyambazar, Kolkata',1400.00),(13,'doc_9827','Sanjoy Das','Gastroenterology','Mon, Wed, Fri','9876543222','23C Kalighat, Kolkata',1700.00),(14,'doc_6574','Piyali Mukherjee','Pulmonology','Tue, Thu, Sat','9876543223','39B Rajarhat, Kolkata',1600.00),(15,'doc_8342','Debasish Roy','Nephrology','Mon, Wed, Fri','9876543224','21A Kasba, Kolkata',1800.00),(16,'doc_4917','Surajit Sen','Rheumatology','Tue, Thu, Sat','9876543225','27B Maniktala, Kolkata',1700.00),(17,'doc_5362','Ananya Chakraborty','Oncology','Mon, Wed, Fri','9876543226','6C Barasat, Kolkata',1500.00),(18,'doc_1398','Subhasish Das','Cardiology','Tue, Thu, Sat','9876543227','14D Howrah, Kolkata',1900.00),(19,'doc_6725','Sampa Ghosh','Neurology','Mon, Wed, Fri','9876543228','18A Dum Dum Park, Kolkata',1700.00),(20,'doc_2491','Bikash Sinha','Orthopedics','Tue, Thu, Sat','9876543229','24B Sealdah, Kolkata',1600.00),(21,'doc_5127','Rupa Das','Dermatology','Mon, Wed, Fri','9876543230','7C Chinar Park, Kolkata',1400.00),(22,'doc_1846','Anupam Sen','General Medicine','Tue, Thu, Sat','9876543231','12A Kankurgachi, Kolkata',1200.00),(23,'doc_7839','Arpita Das','Pediatrics','Mon, Wed, Fri','9876543232','16C Baguihati, Kolkata',1500.00),(24,'doc_3742','Soumen Roy','ENT','Tue, Thu, Sat','9876543233','38A Lake Town, Kolkata',1300.00),(25,'doc_6251','Rakesh Mukherjee','Ophthalmology','Mon, Wed, Fri','9876543234','9B Ultadanga, Kolkata',1600.00),(26,'doc_4823','Nupur Sen','Gynecology','Tue, Thu, Sat','9876543235','45C New Alipore, Kolkata',1800.00),(27,'doc_2917','Dipankar Ghosh','Psychiatry','Mon, Wed, Fri','9876543236','25A Santoshpur, Kolkata',1700.00),(28,'doc_7534','Aniruddha Das','Urology','Tue, Thu, Sat','9876543237','10C Garia, Kolkata',1500.00),(29,'doc_6829','Subrata Chatterjee','Endocrinology','Mon, Wed, Fri','9876543238','4B Joka, Kolkata',1400.00),(30,'doc_2847','Sudipta Saha','Gastroenterology','Tue, Thu, Sat','9876543239','33A Baghbazar, Kolkata',1900.00),(31,'doc_3965','Anindya Ghosh','Pulmonology','Mon, Wed, Fri','9876543240','14C Barrackpore, Kolkata',1600.00),(32,'doc_6184','Sneha Chakraborty','Nephrology','Tue, Thu, Sat','9876543241','20B Belgharia, Kolkata',1800.00),(33,'doc_2479','Sandip Saha','Rheumatology','Mon, Wed, Fri','9876543242','27C Salt Lake, Sector III, Kolkata',1700.00),(34,'doc_8347','Chandan Das','Oncology','Tue, Thu, Sat','9876543243','31A Kalikapur, Kolkata',1500.00),(35,'doc_1953','Sangeeta Basu','Cardiology','Mon, Wed, Fri','9876543244','5D Garcha, Kolkata',1900.00),(36,'doc_8476','Paromita Ghosh','Neurology','Tue, Thu, Sat','9876543245','17A Kestopur, Kolkata',1600.00),(37,'doc_1298','Arijit Roy','Orthopedics','Mon, Wed, Fri','9876543246','29C Dum Dum, Kolkata',1700.00),(38,'doc_5837','Nirmalya Sen','Dermatology','Tue, Thu, Sat','9876543247','11B Shyambazar, Kolkata',1500.00),(39,'doc_7923','Pradip Chakraborty','General Medicine','Mon, Wed, Fri','9876543248','34A Baguihati, Kolkata',1200.00),(40,'doc_4681','Nandita Mukherjee','Pediatrics','Tue, Thu, Sat','9876543249','18B New Town, Kolkata',1400.00),(41,'doc_5372','Amit Sen','ENT','Mon, Wed, Fri','9876543250','23D Topsia, Kolkata',1300.00),(42,'doc_1967','Jaya Roy','Ophthalmology','Tue, Thu, Sat','9876543251','10A Ballygunge, Kolkata',1600.00),(43,'doc_7432','Aritra Das','Gynecology','Mon, Wed, Fri','9876543252','7D Tollygunge, Kolkata',1800.00),(44,'doc_8593','Priya Saha','Psychiatry','Tue, Thu, Sat','9876543253','15C Rajarhat, Kolkata',1700.00),(45,'doc_2941','Bikash Roy','Urology','Mon, Wed, Fri','9876543254','22A Salt Lake, Sector I, Kolkata',1900.00);
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-04 18:36:23
