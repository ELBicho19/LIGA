-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: liga2
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `aministrador`
--

DROP TABLE IF EXISTS `aministrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aministrador` (
  `ida_a` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_a_a` varchar(30) NOT NULL,
  `ap_paterno_a_a` varchar(20) NOT NULL,
  `idu_a_a` int(11) NOT NULL,
  PRIMARY KEY (`ida_a`),
  KEY `idu_a_a` (`idu_a_a`),
  CONSTRAINT `aministrador_ibfk_1` FOREIGN KEY (`idu_a_a`) REFERENCES `usuario` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7777781 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aministrador`
--

LOCK TABLES `aministrador` WRITE;
/*!40000 ALTER TABLE `aministrador` DISABLE KEYS */;
INSERT INTO `aministrador` VALUES (7777777,'David','Lugo',87654322),(7777778,'Jazmin','Gonzalez',87654324),(7777779,'Eduardo','Vargas',87654325),(7777780,'Carolina','Suarez',87654336);
/*!40000 ALTER TABLE `aministrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arbitro`
--

DROP TABLE IF EXISTS `arbitro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arbitro` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_a` varchar(30) NOT NULL,
  `ap_paterno_a` varchar(20) NOT NULL,
  `ap_materno_a` varchar(20) NOT NULL,
  `tele_a` varchar(10) NOT NULL,
  `email_a` varchar(50) NOT NULL,
  `naci_a` date NOT NULL,
  `inscrito_a` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arbitro`
--

LOCK TABLES `arbitro` WRITE;
/*!40000 ALTER TABLE `arbitro` DISABLE KEYS */;
INSERT INTO `arbitro` VALUES (5,'as','sad','das','sda','dsf','1995-01-01',0),(7,'Emilio','Jorginho','De la luz','5829644755','elarbi12@aragon.unam.mx','1989-05-12',0),(8,'Emilio','Jorginho','De la luz','5829644755','elarbi12@aragon.unam.mx','1989-05-12',2),(9,'Emilio','Jorginho','De la luz','5829644755','elarbi12@aragon.unam.mx','1989-05-12',0),(10,'Adan','Jimenez','Soto','5582512254','alguien@example.com','1995-12-02',0);
/*!40000 ALTER TABLE `arbitro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `idc_c` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_c_c` varchar(20) NOT NULL,
  PRIMARY KEY (`idc_c`)
) ENGINE=InnoDB AUTO_INCREMENT=987654323 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (987654321,'ADMIN'),(987654322,'DIRECTIVO');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idc` int(4) NOT NULL AUTO_INCREMENT,
  `nombre_c` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=100003 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (100000,'MASCULINA','A partir de 18 años hasta 35 años'),(100001,'FEMENINA','Mujeres de entre 18 y 35 años'),(100002,'INFANTIL','Niños y niñas de entre 8 y 12 años');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directivo`
--

DROP TABLE IF EXISTS `directivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directivo` (
  `idd` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_d` varchar(30) NOT NULL,
  `ap_paterno_d` varchar(20) NOT NULL,
  `ap_materno_d` varchar(20) NOT NULL,
  `tele_d` varchar(10) NOT NULL,
  `email_d` varchar(50) NOT NULL,
  `naci_d` date NOT NULL,
  `inscrito_d` int(5) NOT NULL DEFAULT 0,
  `idu_d` int(11) NOT NULL,
  `ide_d` int(11) NOT NULL,
  PRIMARY KEY (`idd`),
  KEY `usu` (`idu_d`),
  KEY `ide_d` (`ide_d`),
  CONSTRAINT `directivo_ibfk_1` FOREIGN KEY (`idu_d`) REFERENCES `usuario` (`idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `directivo_ibfk_2` FOREIGN KEY (`ide_d`) REFERENCES `equipo` (`ide`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directivo`
--

LOCK TABLES `directivo` WRITE;
/*!40000 ALTER TABLE `directivo` DISABLE KEYS */;
INSERT INTO `directivo` VALUES (101,'Ocho','Gutierrez','Salinas','5542645698','ochosta@gmail.com','1998-04-05',2,87654321,12),(102,'Gabriel','Hernandez','Soto','5582649597','gabrielito@gmail.com','1996-03-25',0,87654323,14),(103,'Veronica','Solis','Marquez','5531323501','verosol@gmail.com','1987-08-19',0,87654326,15),(106,'Felipe','Hernandez','Salinas','5578469611','elfeliz12@gmail.com','1999-10-02',2,87654327,16),(107,'Jose','Lopez','Matias','5468959872','budin14@gmail.com','1985-03-14',0,87654328,13),(108,'Juan','Morales','Elizondo','4576866555','manitas@gmail.com','1992-11-15',0,87654329,17),(109,'Gerardo','Antonio','De la cruz','7777777777','chofis9@aragon.unam.mx','1988-05-04',0,87654330,18),(110,'Ariel','Lugo','Solis','5582512287','ariel@aragon.unam.mx','1998-06-25',0,87654331,19),(111,'Roberto','Lugo','A cuña','5582512222','chuchu@gmail.com','1985-02-25',0,87654332,20),(112,'Jassiel','Sosa','Quintana','2555166487','eljassiel@gmail.com','1995-05-05',0,87654333,21),(113,'Aylin Naomi','Solis','Luna','5558296447','naosol@gmail.com','1999-10-12',0,87654334,22),(115,'Ricardo','Ramírez ','Hernández','5582512289','elcrickby@gmail.com','1999-10-02',0,87654337,27);
/*!40000 ALTER TABLE `directivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `ide` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_e` varchar(20) NOT NULL,
  `gol_f` int(11) NOT NULL DEFAULT 0,
  `gol_c` int(11) NOT NULL DEFAULT 0,
  `jj` int(11) NOT NULL DEFAULT 0,
  `jg` int(11) NOT NULL DEFAULT 0,
  `je` int(11) NOT NULL DEFAULT 0,
  `jp` int(11) NOT NULL DEFAULT 0,
  `inscrito_e` int(11) NOT NULL DEFAULT 0,
  `cate` int(4) NOT NULL,
  PRIMARY KEY (`ide`),
  KEY `cate` (`cate`),
  CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`cate`) REFERENCES `categoria` (`idc`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (12,'Santa Maria',7,2,3,2,1,0,2,100000),(13,'Arleza FC',4,4,3,1,1,1,2,100000),(14,'Asturias',9,2,3,3,0,0,2,100000),(15,'Atlas FC',15,4,7,7,0,0,2,100001),(16,'Santos FC',10,5,7,5,1,1,2,100001),(17,'Rolling',20,6,10,9,1,0,2,100002),(18,'Mexico FC',7,7,7,2,4,1,2,100001),(19,'Real Madrid',15,4,10,6,3,1,2,100002),(20,'Xolos',5,10,10,2,4,4,2,100002),(21,'Olimpico',3,6,3,0,0,3,2,100000),(22,'Colchoneros FC',10,10,10,5,3,2,2,100002),(23,'América',0,0,0,0,0,0,0,100002),(27,'Dinamarca FC',0,0,0,0,0,0,0,100000);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugador`
--

DROP TABLE IF EXISTS `jugador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugador` (
  `idj` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_j` varchar(30) NOT NULL,
  `ap_paterno_j` varchar(20) NOT NULL,
  `ap_materno_j` varchar(20) NOT NULL,
  `naci_j` date NOT NULL,
  `inscrito_j` int(5) NOT NULL DEFAULT 0,
  `ide_j` int(11) NOT NULL,
  `idd_j` int(11) NOT NULL,
  PRIMARY KEY (`idj`),
  KEY `ide_j` (`ide_j`),
  KEY `idd_j` (`idd_j`),
  CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`ide_j`) REFERENCES `equipo` (`ide`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jugador_ibfk_2` FOREIGN KEY (`idd_j`) REFERENCES `directivo` (`idd`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugador`
--

LOCK TABLES `jugador` WRITE;
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` VALUES (1000,'David','Lugo','Solis','1999-02-10',2,12,101);
/*!40000 ALTER TABLE `jugador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idu` int(4) NOT NULL AUTO_INCREMENT,
  `usu` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `cargo` int(11) NOT NULL,
  PRIMARY KEY (`idu`),
  KEY `cargo` (`cargo`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`idc_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=87654338 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (87654321,'padillo88','12345',987654322),(87654322,'elbicho19','02101999',987654321),(87654323,'Gabo10','54321',987654322),(87654324,'jazmin35','99999',987654321),(87654325,'Eduvrgs10','88888',987654321),(87654326,'verosol19','1234567',987654322),(87654327,'feliz24','65984',987654322),(87654328,'buda333','arleza15',987654322),(87654329,'manitas45','9489461',987654322),(87654330,'lachofis69','94865',987654322),(87654331,'arielso87','arielina87',987654322),(87654332,'robertlw3','1651518',987654322),(87654333,'jassiel54','45678',987654322),(87654334,'aylinluna2','78945',987654322),(87654335,'Mario25','12345',987654322),(87654336,'Carolina','Suarez',987654321),(87654337,'usuario12','123456789',987654322);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-10  5:02:06
