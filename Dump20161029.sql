CREATE DATABASE  IF NOT EXISTS `BD_RYSLATINA` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `BD_RYSLATINA`;
-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: BD_RYSLATINA
-- ------------------------------------------------------
-- Server version	5.5.52-0+deb8u1

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
-- Table structure for table `AUTO_HIST`
--

DROP TABLE IF EXISTS `AUTO_HIST`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUTO_HIST` (
  `ID_AUTO` int(11) NOT NULL AUTO_INCREMENT,
  `PLACAS` char(15) DEFAULT NULL,
  `NS_CHASIS` char(30) DEFAULT NULL,
  `NS_MOTOR` char(30) DEFAULT NULL,
  `MARCA` char(30) DEFAULT NULL,
  `MODELO` char(30) DEFAULT NULL,
  `AGE` int(4) DEFAULT NULL,
  `COLOR` char(30) DEFAULT NULL,
  `COMBUSTIBLE` char(30) DEFAULT NULL,
  PRIMARY KEY (`ID_AUTO`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTO_HIST`
--

LOCK TABLES `AUTO_HIST` WRITE;
/*!40000 ALTER TABLE `AUTO_HIST` DISABLE KEYS */;
INSERT INTO `AUTO_HIST` VALUES (3,'MYU-2462','','3G1SF21X97S1253461','CHEVROLET','CHEVY',2007,'','GASOLINA'),(5,'MKS-3076','','3G1SF21XX5F203209','CHEVROLET','CHEVY',2005,'','GASOLINA'),(6,'MKN-3624','','3G1SF21X58S122929','CHEVROLET','CHEVY',2008,'','GASOLINA'),(7,'MKS-3072','','3G1SS21614S150678','CHEVROLET','CHEVY',2004,'','GASOLINA'),(8,'MKS-3078','','3G1SF21X77S125104','CHEVROLET','CHEVY',2007,'','GASOLINA'),(10,'KW-78858','','8AE5CN6A85G500008','PEUGEOT','PARTNER',2005,'','GASOLINA'),(11,'KV-94211','','8AE5CN6A85G500390','PEUGEOT','PARTNER',2008,'','GASOLINA'),(12,'KW-78911','','VE3GCN6A97J013911','PEUGEOT','PARTNER',2007,'','GASOLINA'),(13,'MBW-9185','','VF3GCN6A28J024766','PEUGEOT','PARTNER',2008,'','GASOLINA'),(14,'LZV-5280','','8AE5CN6A15G518821','PEUGEOT','PARTNER',2005,'','GASOLINA'),(15,'KW-79100','','F3GCNGA57J002663','PEUGEOT','PARTNER',2007,'','GASOLINA'),(16,'KZ-97208','','','PEUGEOT','PARTNER',2014,'','DIESEL'),(17,'KZ-99304','','VF37R9HE9FJ505147','PEUGEOT','PARTNER',2015,'','DIESEL'),(18,'KZ-99302','125468756','5874698545','NISSAN','TSURU',2010,'Azul','GASOLINA'),(19,'KZ-24115','','VF37R9HE5DJ503442','PEUGEOT','PARTNER',2013,'','DIESEL'),(20,'KZ-24106','','VF37R9HE0DJ503901','PEUGEOT','PARTNER',2013,'','DIESEL'),(21,'LA-89442','','VF37R9HE5GJ511254','PEUGEOT','PARTNER',NULL,'','DIESEL'),(22,'KZ-97193','','VF37R9HE3EJ508141','PEUGEOT','PARTNER',2014,'','DIESEL'),(23,'LA-69553','','VF37R9HE2FJ512733','PEUGEOT','PARTNER',2015,'','DIESEL'),(24,'KZ-97205','','VF37R9HE5EJ508173','PEUGEOT','PARTNER',2014,'','DIESEL'),(25,'LA-87401','741258','VF37R9HE2GJ515469','PEUGEOT','PARTNER',2016,'Verde','DIESEL'),(26,'SKV-38313','','WD9XD54324R625070','MERCEDES BENZ','SPRINTER',2004,'','GASOLINA'),(27,'MKS-3101','1598523','93CXM80R55C131145','CHEVROLET','TORNADO',2005,'Amarillo','GASOLINA'),(28,'MKS-3074','','93CXM80267C152107','CHEVROLET','TORNADO',2007,'','GASOLINA'),(29,'MLH-2324','','93CXM80278C129680','CHEVROLET','TORNADO',2008,'','GASOLINA'),(30,'LA-83074','','93CXM80238C113962','CHEVROLET','TORNADO',2008,'','GASOLINA'),(35,'KZ-99302','125468756','5874698545','NISSAN','TSURU',2010,'Azul','GASOLINA'),(36,'KZ-99302','125468756','5874698545','NISSAN','TSURU',2010,'Azul','GASOLINA'),(37,'KZ-99302','125468756','5874698545','NISSAN','TSURU',2010,'Azul','GASOLINA'),(38,'','','','','',0,'',''),(39,'','','','','',0,'','');
/*!40000 ALTER TABLE `AUTO_HIST` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AUTO_INGR`
--

DROP TABLE IF EXISTS `AUTO_INGR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AUTO_INGR` (
  `PLACAS` char(15) DEFAULT NULL,
  `RESPONSABLE` char(50) DEFAULT NULL,
  `FECHA_INGR` char(10) DEFAULT NULL,
  `ESTATUS` char(30) DEFAULT NULL,
  `TRABAJO_SOL` char(255) DEFAULT NULL,
  `FOLIO_ING` char(20) DEFAULT NULL,
  `MEC_RESP` char(50) DEFAULT NULL,
  `KM` varchar(45) DEFAULT NULL,
  `CLIENTE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTO_INGR`
--

LOCK TABLES `AUTO_INGR` WRITE;
/*!40000 ALTER TABLE `AUTO_INGR` DISABLE KEYS */;
INSERT INTO `AUTO_INGR` VALUES ('MKS-3042','RICARDO DANIEL GUZMAN DIAZ','2016-07-11','SERVICIO','CAMBIO AMORTIGUADORES DELANTEROS, CAMBIO AMORTIGUADORES TRASEROS,\nCAMBIO AMORTIGUADORES DE CAJUELA, CAMBIO BALATAS TRASERAS, \nCAMBIO BALATAS DELANTERAS, CAMBIO TAMBORES, \nCAMBIO BALEROS TRASEROS, AFINACION, \nCAMBIO RENTEN DE ARBOL DE LEVAS, \nCAMBIO FAROS','7856941235','JUAN PEREZ LOPEZ',NULL,NULL),('MKS-3042','RICARDO DANIEL GUZMAN DIAZ','2016-07-11','SERVICIO','CAMBIO AMORTIGUADORES DELANTEROS, CAMBIO AMORTIGUADORES TRASEROS,\nCAMBIO AMORTIGUADORES DE CAJUELA, CAMBIO BALATAS TRASERAS,  \nCAMBIO FAROS DELANTEROS','7856941235','JUAN PEREZ LOPEZ',NULL,NULL),('KZ-97208','Edgar Olvera','07/29/2016','SERVICIO','CAMBIO AMORTIGUADORES DELANTEROS, CAMBIO AMORTIGUADORES TRASEROS, CAMBIO AMORTIGUADORES DE CAJUELA, CAMBIO BALATAS TRASERAS,   CAMBIO FAROS DELANTEROS','9632587','Angel',NULL,NULL),('AFL-145','Edgar Olvera','08/10/2016','SERVICIO','Cambio de frenos','159635','Alexis','2560','Sabritas S.A. de C.V.'),('KZ-99302','Panfilo Pancracio','09/13/2016','Choque','Hojalateria','2345','Alexis','15236','Telcel SA de CV');
/*!40000 ALTER TABLE `AUTO_INGR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CIERRE_ORDEN`
--

DROP TABLE IF EXISTS `CIERRE_ORDEN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CIERRE_ORDEN` (
  `ID_CIERRE_ORDEN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ORDEN` int(11) DEFAULT NULL,
  `DATOS_AUTO` char(255) DEFAULT NULL,
  `DATOS_ORDEN` char(255) DEFAULT NULL,
  `TOT_REF` int(11) DEFAULT NULL,
  `TOT_MANO_O` int(11) DEFAULT NULL,
  `TOT_HRS_TRAB` int(11) DEFAULT NULL,
  `COST_SUBT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CIERRE_ORDEN`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CIERRE_ORDEN`
--

LOCK TABLES `CIERRE_ORDEN` WRITE;
/*!40000 ALTER TABLE `CIERRE_ORDEN` DISABLE KEYS */;
INSERT INTO `CIERRE_ORDEN` VALUES (1,1,'Sabritas S.A. de C.V.,Edgar Olvera,08/10/2016,2560,NISSAN,TSURU,AFL-145','9125478965, Mecanicos: Daniel ,Trabajos realizados: Afinacion Refacciones: Filtro de aire, Total de refacciones: 1, Total costo refacciones: 78, Horas trabajadas: 67, Total de horas trabajadas: 67',99000,7350,6600,112950),(2,4,'Telcel SA de CV,Panfilo Pancracio,09/13/2016,15236,NISSAN,TSURU,KZ-99302','2345, Mecanicos: Adan,Angel ,Trabajos realizados: Afinacion,Suspension Refacciones: Filtro de gasolina,Bujia, Total de refacciones: 2, Total costo refacciones: 157, Horas trabajadas: 4,5, Total de horas trabajadas: 9',486,1329,6111,6753),(3,4,'Telcel SA de CV,Panfilo Pancracio,09/13/2016,15236,NISSAN,TSURU,KZ-99302','2345, Mecanicos: Adan,Angel ,Trabajos realizados: Afinacion,Suspension Refacciones: Filtro de gasolina,Bujia, Total de refacciones: 2, Total costo refacciones: 157, Horas trabajadas: 4,5, Total de horas trabajadas: 9',43568,70313,30478,96432);
/*!40000 ALTER TABLE `CIERRE_ORDEN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MECANICOS`
--

DROP TABLE IF EXISTS `MECANICOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MECANICOS` (
  `idMECANICOS` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `ApePat` varchar(45) NOT NULL,
  `ApeMat` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `fechaIngreso` varchar(45) NOT NULL,
  PRIMARY KEY (`idMECANICOS`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MECANICOS`
--

LOCK TABLES `MECANICOS` WRITE;
/*!40000 ALTER TABLE `MECANICOS` DISABLE KEYS */;
INSERT INTO `MECANICOS` VALUES (1,'Adan','Perez','Matias','555-55-55','31/05/1982'),(2,'Angel','Matias','Perez','555-55-55','31/07/1982'),(3,'Alexis','Martinez','Perez','555-55-55','05/07/2015'),(4,'Daniel','Gonzalez','Luna','555-55-55','02/07/2014');
/*!40000 ALTER TABLE `MECANICOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORDEN_TRABAJO`
--

DROP TABLE IF EXISTS `ORDEN_TRABAJO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ORDEN_TRABAJO` (
  `ID_ORDEN` int(11) NOT NULL AUTO_INCREMENT,
  `PLACAS` char(15) DEFAULT NULL,
  `FOLIO_ING` char(20) DEFAULT NULL,
  `TRABAJO_REAL1` char(100) DEFAULT NULL,
  `MEC_ASIG1` char(50) DEFAULT NULL,
  `TRABAJO_HR1` int(11) DEFAULT NULL,
  `TRABAJO_REAL2` char(100) DEFAULT NULL,
  `MEC_ASIG2` char(50) DEFAULT NULL,
  `TRABAJO_HR2` int(11) DEFAULT NULL,
  `TRABAJO_REAL3` char(100) DEFAULT NULL,
  `MEC_ASIG3` char(50) DEFAULT NULL,
  `TRABAJO_HR3` int(11) DEFAULT NULL,
  `TRABAJO_REAL4` char(100) DEFAULT NULL,
  `MEC_ASIG4` char(50) DEFAULT NULL,
  `TRABAJO_HR4` int(11) DEFAULT NULL,
  `TRABAJO_REAL5` char(100) DEFAULT NULL,
  `MEC_ASIG5` char(50) DEFAULT NULL,
  `TRABAJO_HR5` int(11) DEFAULT NULL,
  `TRABAJO_REAL6` char(100) DEFAULT NULL,
  `MEC_ASIG6` char(50) DEFAULT NULL,
  `TRABAJO_HR6` int(11) DEFAULT NULL,
  `TRABAJO_REAL7` char(100) DEFAULT NULL,
  `MEC_ASIG7` char(50) DEFAULT NULL,
  `TRABAJO_HR7` int(11) DEFAULT NULL,
  `TRABAJO_REAL8` char(100) DEFAULT NULL,
  `MEC_ASIG8` char(50) DEFAULT NULL,
  `TRABAJO_HR8` int(11) DEFAULT NULL,
  `TRABAJO_REAL9` char(100) DEFAULT NULL,
  `MEC_ASIG9` char(50) DEFAULT NULL,
  `TRABAJO_HR9` int(11) DEFAULT NULL,
  `TRABAJO_REAL10` char(100) DEFAULT NULL,
  `MEC_ASIG10` char(50) DEFAULT NULL,
  `TRABAJO_HR10` int(11) DEFAULT NULL,
  `REF_REQ1` char(50) DEFAULT NULL,
  `REF_PREC1` int(11) DEFAULT NULL,
  `REF_REQ2` char(50) DEFAULT NULL,
  `REF_PREC2` int(11) DEFAULT NULL,
  `REF_REQ3` char(50) DEFAULT NULL,
  `REF_PREC3` int(11) DEFAULT NULL,
  `REF_REQ4` char(50) DEFAULT NULL,
  `REF_PREC4` int(11) DEFAULT NULL,
  `REF_REQ5` char(50) DEFAULT NULL,
  `REF_PREC5` int(11) DEFAULT NULL,
  `REF_REQ6` char(50) DEFAULT NULL,
  `REF_PREC6` int(11) DEFAULT NULL,
  `REF_REQ7` char(50) DEFAULT NULL,
  `REF_PREC7` int(11) DEFAULT NULL,
  `REF_REQ8` char(50) DEFAULT NULL,
  `REF_PREC8` int(11) DEFAULT NULL,
  `REF_REQ9` char(50) DEFAULT NULL,
  `REF_PREC9` int(11) DEFAULT NULL,
  `REF_REQ10` char(50) DEFAULT NULL,
  `REF_PREC10` int(11) DEFAULT NULL,
  `T_ENTREGA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ORDEN`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORDEN_TRABAJO`
--

LOCK TABLES `ORDEN_TRABAJO` WRITE;
/*!40000 ALTER TABLE `ORDEN_TRABAJO` DISABLE KEYS */;
INSERT INTO `ORDEN_TRABAJO` VALUES (1,'AFL-145','9125478965','Afinacion','Daniel',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',67,'Filtro de aire',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',78,0),(2,'MKS-3042','7856941235','Afinacion','Daniel',5,'Frenos','Angel',7,'Carroceria','Alexis',5,'Frenos','Adan',9,'momo','mames',5,'momo','mames',6,'momo','mames',7,'momo','mames',8,'momo','mames',9,'momo','mames',10,'Filtro de aire',56,'Filtro de gasolina',89,'Bujia',78,'Aceite',12,'mames',4,'mames',5,'mames',6,'mames',7,'mames',8,'mames',9,45),(3,'AFL-145','159635','Afinacion','Adan',4,'Suspension','Angel',5,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'Bujia',45,'Filtro de aire',79,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,9),(4,'MKS-3042','6','','',0,'','',0,'','',3,'','',0,'asdasd','3',0,'56','asdasd',56,'6','',0,'','',0,'','',0,'','',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,0),(5,'KZ-99302','15618352','Cambio de aceite','Alberto',3,'Cambio de bujias','Alberto',3,'Verificar frenos','Carlos',2,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'Filtro de aceite',63,'Bujias',89,'',0,'',0,'',0,'',0,'',0,'',0,'',0,'',0,10);
/*!40000 ALTER TABLE `ORDEN_TRABAJO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`idLogin`),
  KEY `loggin_usuarios_id_fk` (`idUsuario`),
  CONSTRAINT `loggin_usuarios_id_fk` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,1,'brightside','5416d7cd6ef195a0f7622a9c56b55e84');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apePat` varchar(25) NOT NULL,
  `apeMat` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Edgar Eduardo','Olvera','Lopez');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-29 16:52:01
