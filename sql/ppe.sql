-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: ppe
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `idadmin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'macron','emmanuel','Directeur','0101010101',4),(2,'jake','spence','Président','0202020202',5),(12,'schmitt','laurent','ingénieur','0673858928',NULL),(13,'sch','lolo','ingénieur','0673858928',NULL),(14,'sc','lo','ingénieur','1234567890',NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bus` (
  `idbus` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `nbkm` int DEFAULT NULL,
  `energie` enum('diesel','gazol','essence','electrique','hybride','autre') DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  `image` varchar (200),
  PRIMARY KEY (`idbus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus`
--

LOCK TABLES `bus` WRITE;
/*!40000 ALTER TABLE `bus` DISABLE KEYS */;
INSERT INTO `bus` VALUES (1,'23az23','Peugeot',20000,'gazol',1,"https://www.larmor-plage.bzh/medias/2019/05/bus-ctrl-Copier-e151557391479490.jpg"),(2,'56rt56','Citroen',30000,'essence',2, "https://www.larmor-plage.bzh/medias/2019/05/bus-ctrl-Copier-e151557391479490.jpg"), (4,"2385azf01", "Volvo", 1354, "gazol", 12, "https://www.larmor-plage.bzh/medias/2019/05/bus-ctrl-Copier-e151557391479490.jpg");
/*!40000 ALTER TABLE `bus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employe` (
  `idemploye` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  PRIMARY KEY (`idemploye`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employe`
--

LOCK TABLES `employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
INSERT INTO `employe` VALUES (1,'Benjamin','franklin','Maintenance','0101010101',10),(2,'Juliette','romeo','Réparation Moteur','0202020202',15);
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metro`
--

DROP TABLE IF EXISTS `metro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metro` (
  `idmetro` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `nbkm` int DEFAULT NULL,
  `energie` enum('diesel','gazol','essence','electrique','hybride','autre') DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  PRIMARY KEY (`idmetro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metro`
--

LOCK TABLES `metro` WRITE;
/*!40000 ALTER TABLE `metro` DISABLE KEYS */;
INSERT INTO `metro` VALUES (1,'01ab23','Renault',40000,'diesel',3),(2,'99yz01','Tata',2,'hybride',6);
/*!40000 ALTER TABLE `metro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tgv`
--

DROP TABLE IF EXISTS `tgv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tgv` (
  `idtgv` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `nbkm` int DEFAULT NULL,
  `energie` enum('diesel','gazol','essence','electrique','hybride','autre') DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  PRIMARY KEY (`idtgv`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tgv`
--

LOCK TABLES `tgv` WRITE;
/*!40000 ALTER TABLE `tgv` DISABLE KEYS */;
INSERT INTO `tgv` VALUES (1,'23az23','France',20000,'gazol',12),(2,'56rt56','Alstom',30000,'electrique',24);
/*!40000 ALTER TABLE `tgv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `idutilisateur` int NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idutilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'test','9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicule` (
  `idvehicule` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `nbkm` int DEFAULT NULL,
  `energie` enum('diesel','gazol','essence','electrique','hybride','autre') DEFAULT NULL,
  `anciennete` int DEFAULT NULL,
  PRIMARY KEY (`idvehicule`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicule`
--

LOCK TABLES `vehicule` WRITE;
/*!40000 ALTER TABLE `vehicule` DISABLE KEYS */;
INSERT INTO `vehicule` VALUES (1,'23az23','Peugeot',20000,'gazol',30),(2,'56rt56','Volswagen',30000,'essence',30);
/*!40000 ALTER TABLE `vehicule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-16 17:57:03
