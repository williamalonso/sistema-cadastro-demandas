CREATE DATABASE  IF NOT EXISTS `cadastro_demanda` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cadastro_demanda`;
-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: cadastro_demanda
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `dados_demanda`
--

DROP TABLE IF EXISTS `dados_demanda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dados_demanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_abertura` date DEFAULT NULL,
  `data_conclusao` date DEFAULT NULL,
  `regiao_adm` varchar(150) DEFAULT NULL,
  `tipo_demanda` varchar(150) DEFAULT NULL,
  `status_demanda` varchar(150) DEFAULT NULL,
  `demandante` varchar(150) DEFAULT NULL,
  `assessor_responsavel` varchar(150) DEFAULT NULL,
  `observacao` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dados_demanda`
--

LOCK TABLES `dados_demanda` WRITE;
/*!40000 ALTER TABLE `dados_demanda` DISABLE KEYS */;
INSERT INTO `dados_demanda` VALUES (1,'2021-10-04','2021-10-21','VII - Núcleo Bandeirante','1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO','7 - Em Contratação',NULL,NULL,NULL),(2,'2021-10-19','2021-10-22','XXIX - Vicente Pires','1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS','11 - Suspensa - TCDF',NULL,NULL,NULL);
/*!40000 ALTER TABLE `dados_demanda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-20 16:49:54
