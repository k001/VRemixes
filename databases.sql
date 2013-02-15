-- MySQL dump 10.13  Distrib 5.1.68, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: vremixes_web
-- ------------------------------------------------------
-- Server version   5.1.68-cll

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
 `session_id` varchar(40) NOT NULL DEFAULT '0',
 `ip_address` varchar(45) NOT NULL DEFAULT '0',
 `user_agent` varchar(120) NOT NULL,
 `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
 `user_data` text NOT NULL,
 PRIMARY KEY (`session_id`),
 KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('6ef2b7f586101528b86396779ce5975f','69.171.228.244','facebookexternalhit/1.1 (+http://www.facebook.com/',1348183955,''),('c08702b1ea68ba193b1b508289fb4f39','201.161.150.54','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1348183939,'');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conf`
--

DROP TABLE IF EXISTS `conf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conf` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `class` varchar(100) NOT NULL,
 `value` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conf`
--

LOCK TABLES `conf` WRITE;
/*!40000 ALTER TABLE `conf` DISABLE KEYS */;
INSERT INTO `conf` VALUES (1,'version','0.01-Beta'),(2,'faqs','Este es el contenido');
/*!40000 ALTER TABLE `conf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `first_name` varchar(40) NOT NULL,
 `last_name` varchar(40) NOT NULL,
 `position` enum('Manager','Supervisor','Underling') NOT NULL DEFAULT 'Underling',
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`first_name`,`last_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(20) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups_users`
--

DROP TABLE IF EXISTS `groups_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups_users` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `group_id` bigint(20) unsigned NOT NULL,
 `user_id` bigint(20) unsigned NOT NULL,
 PRIMARY KEY (`id`),
 KEY `group_id` (`group_id`),
 KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups_users`
--

LOCK TABLES `groups_users` WRITE;
/*!40000 ALTER TABLE `groups_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
 `login` varchar(50) COLLATE utf8_bin NOT NULL,
 `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers_supervisors`
--

DROP TABLE IF EXISTS `managers_supervisors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers_supervisors` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `manager_id` bigint(20) unsigned NOT NULL,
 `supervisor_id` bigint(20) unsigned NOT NULL,
 PRIMARY KEY (`id`),
 KEY `manager_id` (`manager_id`),
 KEY `supervisor_id` (`supervisor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers_supervisors`
--

LOCK TABLES `managers_supervisors` WRITE;
/*!40000 ALTER TABLE `managers_supervisors` DISABLE KEYS */;
/*!40000 ALTER TABLE `managers_supervisors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `de` int(11) DEFAULT NULL,
 `para` int(11) DEFAULT NULL,
 `messages` text,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,0,1,NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supervisors_underlings`
--

DROP TABLE IF EXISTS `supervisors_underlings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supervisors_underlings` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `supervisor_id` bigint(20) unsigned NOT NULL,
 `underling_id` bigint(20) unsigned NOT NULL,
 PRIMARY KEY (`id`),
 KEY `supervisor_id` (`supervisor_id`),
 KEY `underling_id` (`underling_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supervisors_underlings`
--

LOCK TABLES `supervisors_underlings` WRITE;
/*!40000 ALTER TABLE `supervisors_underlings` DISABLE KEYS */;
/*!40000 ALTER TABLE `supervisors_underlings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_autologin` (
 `key_id` char(32) COLLATE utf8_bin NOT NULL,
 `user_id` int(11) NOT NULL DEFAULT '0',
 `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
 `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
 `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_autologin`
--

LOCK TABLES `user_autologin` WRITE;
/*!40000 ALTER TABLE `user_autologin` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_autologin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profiles` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
 `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
 `pro` tinyint(1) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
INSERT INTO `user_profiles` VALUES (1,1,NULL,NULL,1),(2,2,NULL,NULL,1),(3,4,NULL,NULL,NULL),(4,5,NULL,NULL,NULL),(5,6,NULL,NULL,NULL),(6,8,NULL,NULL,NULL),(7,7,NULL,NULL,NULL),(8,9,NULL,NULL,NULL),(9,11,NULL,NULL,NULL),(10,12,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) COLLATE utf8_bin NOT NULL,
 `password` varchar(255) COLLATE utf8_bin NOT NULL,
 `email` varchar(100) COLLATE utf8_bin NOT NULL,
 `activated` tinyint(1) NOT NULL DEFAULT '1',
 `banned` tinyint(1) NOT NULL DEFAULT '0',
 `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
 `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
 `new_password_requested` datetime DEFAULT NULL,
 `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
 `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
 `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
 `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'k001','$2a$08$7oLu3WEcApG8k.MTflt/quSK0vMC/AIMaygNrZmbqcCS12IBJ8ucS','k001.operator@gmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'189.167.107.229','2012-09-06 00:00:52','2012-08-05 16:33:16','2012-09-06 05:00:52'),(2,'OlbrichDj','$2a$08$e7w.e.CL9IpkMENVQ0eglu1/8poyMDTpHDh3mAeGn69JMkiBeDJxG','and30dj@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'201.167.23.236','2012-09-06 00:01:04','2012-08-05 17:15:23','2012-09-06 05:01:04'),(4,'ricardo','$2a$08$fOeCVQ1wsHDOqWXLvamFUeiwS6VKyS1XV8EYgxAdJSvrSV6ZopoYG','ricardo.djmix@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'189.203.217.160','2012-08-06 22:44:17','2012-08-06 15:34:05','2012-08-07 03:44:17'),(5,'jhavid','$2a$08$qmxvowAtEc58jTPNVuD8p.voXFZ2CgR2/CEx0efq0RzRRdZ5NQvUC','smook85@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'187.135.17.51','2012-09-03 16:50:27','2012-08-07 12:32:48','2012-09-03 21:50:27'),(6,'CAOS','$2a$08$93hFgtC7klQv5Cso3MUHZO8axuTeDSmHk6s6XCZs4HeeKHfT.uG0W','djcaos@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'189.133.18.122','2012-08-07 21:23:21','2012-08-07 21:19:11','2012-08-08 02:23:21'),(7,'djcatmix1','$2a$08$9vg8tLR3ZKcPdA8ctC9dP.jX9O1HD7JOIxkx6LT55FWVsS5y3wtCS','djcatmix1@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'190.149.87.107','2012-08-15 13:22:29','2012-08-14 17:35:12','2012-08-15 18:22:29'),(8,'cheffrancisco','$2a$08$3AuTZGzYrClrnP7ObqsqUun7KcH0z2jt/3l7bBfXcjck9XQmGW9YW','chefcuches@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'187.143.213.148','2012-08-16 13:40:22','2012-08-15 13:17:04','2012-08-16 18:40:22'),(9,'gabriel','$2a$08$hvjdjQu54NX5.qTwrcCBv.2oghP9.zPkq2bLdUO93xyolhiLLfNLm','djgabrielcalderon@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'187.143.215.144','2012-08-17 12:48:31','2012-08-15 19:24:42','2012-08-17 17:48:31'),(11,'shannon','$2a$08$T2VHUi4tkFAQGIhMDSwVfOAoJno6x4IpuSV4VeRuhv1Tsv6E8kgDu','dj_darkcrow@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'187.143.40.6','2012-08-16 13:56:38','2012-08-16 13:53:25','2012-08-16 18:56:38'),(12,'vdjsanyi','$2a$08$r46Nvv3N0lEE5yB/0hItXO5Ns2W90oRYsrNNCoU5TTCuNS5xXwaGa','ces_40_5@hotmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'187.175.116.63','2012-09-14 23:02:11','2012-09-14 22:59:06','2012-09-15 04:02:11');
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

-- Dump completed on 2013-02-15  1:41:41
