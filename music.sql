-- MySQL dump 10.17  Distrib 10.3.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	10.3.12-MariaDB-2

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

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_name` varchar(25) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'our','mission','Our mission is to inspire a community of artists, students, and audience members through the  performance  and appreciation of music — an original musical form. '),(2,'','Get Full enjoying during this Summer!','Official jazz music provide the best concert over the world. We are working hard to help customer enjoying live concert anywhere.'),(3,'','Expert In Record Quality','Jazz record has more than one thousand of record over the world. Musician does not want to come in our office to record act.Thanks to the use of the Internet.');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(40) NOT NULL,
  `banner_type` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'THE SOUL OF MUSIC','big'),(2,'OFFICIAL JAZZ WEBSITE','small');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `showname` varchar(30) NOT NULL,
  `showdate` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Japan Show','','josue','lotshangojosue@gmail.com'),(2,'INDIAN SHOW ','Dec 20, 06:00 PM','josue','lotshangojosue@gmail.com');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concert`
--

DROP TABLE IF EXISTS `concert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concert_name` varchar(25) NOT NULL,
  `concert_img` varchar(25) NOT NULL,
  `concert_date` varchar(30) NOT NULL,
  `concert_place` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concert`
--

LOCK TABLES `concert` WRITE;
/*!40000 ALTER TABLE `concert` DISABLE KEYS */;
INSERT INTO `concert` VALUES (1,'Two days back','img/record_1.jpg','Nov 15,2019','New York'),(2,'Last night','img/record_3.jpg','Nov 30,2019','Paris'),(3,'Star boy show','img/record_6.jpg','Dec 5,2019','Lagos'),(4,'Africa beauty','img/record_8.jpg','Dec 15,2019','Kenyan'),(5,'Congo hack','../../img/checking.jpg','Nov 20,2018','kinshasa');
/*!40000 ALTER TABLE `concert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(25) NOT NULL,
  `contact_email` varchar(25) NOT NULL,
  `contact_date` date NOT NULL,
  `concert_msg` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'josue','josue@gmail.com','2012-07-03','i like you'),(2,'lotshango','lotshangojosue@gmail.com','2019-11-02','msg_s');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_img` varchar(255) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_msg` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `event_img` (`event_img`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'img/event_1.jpg','AFRICA MUSIC NIGHT','Dec 18, 06:00 PM','Africa music night is one of the biggest event in africa where the biggest star like davido, Diamond, Fally and more are invite to the stage.'),(2,'img/event_2.jpg','INDIAN SHOW ','Dec 20, 06:00 PM','Indian show is starting getting more popular in the world because they are playing the traditional style music to the public.'),(3,'img/event_3.jpg','AFRICA JAZZ NIGHT','Dec 25, 06:00 PM','Africa jazz is recognize as the first music in africa that help our grand father to travel in the world to go play music there.'),(4,'img/event_4.jpg','UK NIGHT SHOW','Dec 26, 08:00 PM','UK night show is one the best night in UK where all the start from the goble come to participate in the event.People are waiting for that because it is only one show per year.'),(5,'img/event_5.jpg','AMERICA HIP HOP','Dec 26, 09:00 PM','America show or america award is the best of the best event in the USA where all the international TV show are coming to participate in the event to find the artist in the year.'),(6,'img/event_6.jpg','Chine Night Show','Jan 01, 07:00 PM','Chine night show got more impact in the world because they are showing how chine people are more strong in kung fu and many other body things like Yoga'),(7,'img/event_7.jpg','Japan Show','Fev 10, 07:00 PM','Japan show are getting more popular in the world where people play piano traditional and more dance from young team.It is only one time per year in Japan even the president of japan is going to be there. '),(8,'img/event_8.jpg','Congo Show','Dec 10, 08:00 PM','Congo show or DRC(congo) show known has dombole show. It is one the biggest event in DRC where people are going to dance from morning to morning. Congo is bless with music talent in the world.');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_img` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'img/event_1.jpg'),(3,'img/event_2.jpg'),(4,'img/event_3.jpg'),(5,'img/event_4.jpg'),(6,'img/event_5.jpg'),(7,'img/event_6.jpg'),(8,'img/event_7.jpg'),(9,'img/event_8.jpg'),(10,'img/record_1.jpg'),(11,'img/record_2.jpg'),(12,'img/record_3.jpg'),(13,'img/record_4.jpg'),(14,'img/record_5.jpg'),(15,'img/record_6.jpg'),(16,'img/record_7.jpg'),(17,'img/record_8.jpg'),(19,'img/images.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Home','index.php'),(2,'About','about.php#about'),(3,'News','news.php#act'),(4,'Tour','tour.php#live'),(5,'Discography','discography.php#record'),(6,'Gallery','gallery.php#gallery'),(7,'Login','login.php');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(25) NOT NULL,
  `news_img` varchar(25) NOT NULL,
  `news_date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Shakira Jaz','img/news_1.jpg','Jav 20,2020'),(2,'Ciara','img/news_2.jpg','Fev 10,2019'),(3,'Omarion','img/news_3.jpg','Jun 15,2019'),(4,'Lil Bow','img/news_4.jpg','Oct 17,2019'),(5,'T-pain','img/news_5.jpg','May 18,2019'),(6,'Lil romeo','img/news_6.jpg','Jan 20,2019'),(7,'Zack knight','img/news_7.jpg','Aug 21,2019'),(10,'Beyonce','img/news_9.jpg','Jan 20, 2019'),(11,'Otile brown','img/news_8.jpg','Aug 20, 2010');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (1,'agnesis','agnes@gmail.com');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `record_name` varchar(25) NOT NULL,
  `record_img` varchar(25) NOT NULL,
  `record_date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (1,'Chris brown','img/record_1.jpg','Jav 20,2020'),(2,'Davido Okumo','img/record_2.jpg','Fev 10,2019'),(3,'Fally ipupa','img/record_3.jpg','Jun 15,2019'),(4,'Jason derulo','img/record_4.jpg','Oct 17,2019'),(5,'Jay Z','img/record_5.jpg','May 18,2019'),(6,'Wizkid star','img/record_6.jpg','Jan 20,2019'),(7,'Zack knight','img/record_7.jpg','Aug 21,2019'),(8,'Otile brown','img/record_8.jpg','Aug 20,2019'),(11,'Sombo Show','img/beyonce.jpeg','Jan 20, 2050');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,'book','book/index.php'),(2,'record','record/index.php'),(3,'event','event/index.php'),(4,'user','user/index.php'),(5,'gallery','gallery/index.php'),(6,'concert','concert/index.php'),(7,'news','act/index.php'),(8,'newsletter','news/index.php'),(9,'contact','contact/index.php'),(10,'about','about/index.php');
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_img` varchar(20) NOT NULL,
  `service_text` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'img/record.png','Record Album'),(2,'img/concert.png','Live concert'),(3,'img/album.png','Upcoming Events ');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `language` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `privilege` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Josue Sombo','admin@gmail.com','admin','India Bangalore','English','../img/record_6.jpg','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-14 20:06:39
