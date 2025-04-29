/*M!999999\- enable the sandbox mode */
--
-- Host: localhost    Database: trains
-- ------------------------------------------------------

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
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `stations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desc` varchar(40) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (3,'Belfast Central','','54.6123','-5.91744','BFSTC'),(4,'Lisburn','','54.514','-6.04327','LBURN'),(5,'Lurgan','','54.4672','-6.33547','LURGN'),(6,'Portadown','','54.4295','-6.43868','PDOWN'),(7,'Sligo','','54.2723','-8.48249','SLIGO'),(8,'Newry','','54.1911','-6.36225','NEWRY'),(9,'Collooney','','54.1871','-8.49453','COLNY'),(10,'Ballina','','54.1085','-9.16146','BALNA'),(11,'Ballymote','','54.0887','-8.52088','BMOTE'),(12,'Dundalk','','54.0007','-6.41291','DDALK'),(13,'Foxford','','53.983','-9.1364','FXFRD'),(14,'Boyle','','53.9676','-8.30438','BOYLE'),(15,'Carrick on Shannon','','53.9383','-8.10657','CKOSH'),(16,'Dromod','','53.8591','-7.9164','DRMOD'),(17,'Castlebar','','53.8471','-9.2873','CLBAR'),(18,'Manulla Junction','','53.828','-9.19296','MNLAJ'),(19,'Westport','','53.7955','-9.50885','WPORT'),(20,'Ballyhaunis','','53.7616','-8.7584','BYHNS'),(21,'Castlerea','','53.7612','-8.48448','CSREA'),(22,'Longford','','53.7243','-7.79574','LFORD'),(23,'Claremorris','','53.7204','-9.00222','CLMRS'),(24,'Drogheda','','53.712','-6.33538','DGHDA'),(25,'Edgeworthstown','','53.6888','-7.60299','ETOWN'),(26,'Laytown','','53.6794','-6.24253','LTOWN'),(27,'Gormanston','','53.638','-6.21705','GSTON'),(28,'Roscommon','','53.6243','-8.19631','RSCMN'),(29,'Balbriggan','','53.6118','-6.18226','BBRGN'),(30,'Skerries','','53.5741','-6.11933','SKRES'),(31,'Mullingar','','53.523','-7.34608','MLGAR'),(32,'Rush and Lusk','','53.5201','-6.1439','RLUSK'),(33,'Donabate','','53.4855','-6.15134','DBATE'),(34,'Malahide','','53.4509','-6.15649','MHIDE'),(35,'M3 Parkway','','53.4349','-6.46898','M3WAY'),(36,'Athlone','','53.4273','-7.93683','ATLNE'),(37,'Dunboyne','','53.4175','-6.46483','DBYNE'),(38,'Portmarnock','','53.4169','-6.1512','PMNCK'),(39,'Enfield','','53.4157','-6.83395','ENFLD'),(40,'Kilcock','','53.4043','-6.67892','KCOCK'),(41,'Clongriffin','','53.4032','-6.14839','GRGRD'),(42,'Sutton','','53.392','-6.11448','SUTTN'),(43,'Bayside','','53.3917','-6.13678','BYSDE'),(44,'Howth Junction','Donaghmede ( Howth Junction )','53.3909','-6.15672','HWTHJ'),(45,'Howth','','53.3891','-6.07401','HOWTH'),(46,'Kilbarrack','','53.387','-6.16163','KBRCK'),(47,'Hansfield','','53.3853','-6.44205','HAFLD'),(48,'Clonsilla','','53.3831','-6.4242','CLSLA'),(49,'Castleknock','','53.3816','-6.37149','CNOCK'),(50,'Raheny','','53.3815','-6.17699','RAHNY'),(51,'Harmonstown','','53.3786','-6.19131','HTOWN'),(52,'Maynooth','','53.378','-6.58993','MYNTH'),(53,'Navan Road Parkway','Phoenix Park','53.3777','-6.34591','PHNPK'),(54,'Coolmine','','53.3776','-6.39072','CMINE'),(55,'Ashtown','','53.3755','-6.33135','ASHTN'),(56,'Leixlip (Confey)','','53.3743','-6.48624','LXCON'),(57,'Killester','','53.373','-6.20442','KLSTR'),(58,'Broombridge','','53.3725','-6.29869','BBRDG'),(59,'Leixlip (Louisa Bridge)','','53.3704','-6.50598','LXLSA'),(60,'Drumcondra','','53.3632','-6.25908','DCDRA'),(61,'Clontarf Road','','53.3629','-6.22753','CTARF'),(62,'Dublin Connolly','Connolly','53.3531','-6.24591','CNLLY'),(63,'Docklands','','53.3509','-6.23929','DCKLS'),(64,'Tara Street','','53.347','-6.25425','TARA '),(65,'Dublin Heuston','Heuston','53.3464','-6.29461','HSTON'),(66,'Dublin Pearse','Pearse','53.3433','-6.24829','PERSE'),(67,'Woodlawn','','53.3432','-8.47231','WLAWN'),(68,'Grand Canal Dock','','53.3397','-6.23773','GCDK '),(69,'Clara','','53.3395','-7.61596','CLARA'),(70,'Ballinasloe','','53.3363','-8.24081','BSLOE'),(71,'Adamstown','','53.3353','-6.45233','ADMTN'),(72,'Adamstown','','53.3353','-6.45233','ADAMF'),(73,'Lansdowne Road','','53.3347','-6.22979','LDWNE'),(74,'Cherry Orchard','Park West (Cherry Orchard )','53.334','-6.37868','CHORC'),(75,'Cherry Orchard','Park West (Cherry Orchard )','53.334','-6.37868','PWESF'),(76,'Clondalkin','Fonthill ( Clondalkin )','53.3334','-6.40628','CLONF'),(77,'Clondalkin','Fonthill ( Clondalkin )','53.3334','-6.40628','CLDKN'),(78,'Sandymount','','53.3281','-6.22116','SMONT'),(79,'Hazelhatch','Celbridge (Hazelhatch ) ','53.3223','-6.52356','HZLCH'),(80,'Hazelhatch','Celbridge (Hazelhatch ) ','53.3223','-6.52356','HAZEF'),(81,'Attymon','','53.3212','-8.60608','ATMON'),(82,'Sydney Parade','','53.3206','-6.21112','SIDNY'),(83,'Booterstown','','53.3099','-6.19498','BTSTN'),(84,'Blackrock','','53.3027','-6.17833','BROCK'),(85,'Athenry','','53.3015','-8.74855','ATHRY'),(86,'Seapoint','','53.2991','-6.16512','SEAPT'),(87,'Salthill','Monkstown ( Salthill )','53.2954','-6.15206','SHILL'),(88,'Dun Laoghaire','','53.2951','-6.13498','DLERY'),(89,'Sandycove','Glasthule (Sandycove ) ','53.2878','-6.12712','SCOVE'),(90,'Glenageary','','53.2812','-6.12289','GLGRY'),(91,'Dalkey','','53.2756','-6.10333','DLKEY'),(92,'Oranmore','','53.2751','-8.94792','ORNMR'),(93,'Galway','','53.2736','-9.04696','GALWY'),(94,'Tullamore','','53.2704','-7.49985','TMORE'),(95,'Killiney','','53.2557','-6.11317','KILNY'),(96,'Sallins','','53.2469','-6.66386','SALNS'),(97,'Shankill','','53.2364','-6.11691','SKILL'),(98,'Craughwell','','53.2252','-8.7359','CRGHW'),(99,'Woodbrook','','53.22','-6.1101','WBROK'),(100,'Bray','','53.2043','-6.10046','BRAY '),(101,'Newbridge','','53.1855','-6.80807','NBRGE'),(102,'Curragh','','53.1725','-6.86245','CURAH'),(103,'Kildare','','53.163','-6.90802','KDARE'),(104,'Ardrahan','','53.1572','-8.81483','ARHAN'),(105,'Portarlington','','53.146','-7.18055','PTRTN'),(106,'Monasterevin','','53.1454','-7.06361','MONVN'),(107,'Greystones','','53.1442','-6.06085','GSTNS'),(108,'Kilcoole','','53.107','-6.04112','KCOOL'),(109,'Gort','','53.0653','-8.81595','GORT'),(110,'Portlaoise','','53.0371','-7.30086','PTLSE'),(111,'Athy','','52.992','-6.9762','ATHY '),(112,'Wicklow','','52.9882','-6.05338','WLOW '),(113,'Roscrea','','52.9607','-7.7941','RCREA'),(114,'Cloughjordan','','52.9363','-8.0246','CJRDN'),(115,'Rathdrum','','52.9295','-6.22641','RDRUM'),(116,'Ballybrophy','','52.8999','-7.60259','BBRHY'),(117,'Nenagh','','52.8605','-8.19471','NNAGH'),(118,'Carlow','','52.8407','-6.92217','CRLOW'),(119,'Ennis','','52.8386','-8.97491','ENNIS'),(120,'Arklow','','52.7932','-6.15994','ARKLW'),(121,'Templemore','','52.7878','-7.82293','TPMOR'),(122,'Birdhill','','52.7656','-8.44247','BHILL'),(123,'Sixmilebridge','','52.7376','-8.78427','SXMBR'),(124,'Castleconnell','','52.7128','-8.49794','CCONL'),(125,'Muine Bheag','Bagenalstown','52.699','-6.95213','MNEBG'),(126,'Thurles','','52.6766','-7.82189','THRLS'),(127,'Gorey','','52.6712','-6.29195','GOREY'),(128,'Limerick','','52.6587','-8.62397','LMRCK'),(129,'Kilkenny','','52.655','-7.24498','KKNNY'),(130,'Thomastown','','52.523','-7.14891','THTWN'),(131,'Enniscorthy','','52.5046','-6.56627','ECRTY'),(132,'Limerick Junction','','52.5009','-8.20003','LMRKJ'),(133,'Tipperary','','52.4701','-8.1625','TIPRY'),(134,'Cahir','','52.3777','-7.92181','CAHIR'),(135,'Clonmel','','52.3611','-7.69936','CLMEL'),(136,'Carrick on Suir','','52.3487','-7.40354','CKOSR'),(137,'Charleville','','52.3468','-8.65362','CVILL'),(138,'Wexford','','52.3434','-6.4636','WXFRD'),(139,'Campile','','52.2855','-6.93896','CPILE'),(140,'Ballycullane','','52.2834','-6.83958','BCLAN'),(141,'Rosslare Strand','','52.2726','-6.39254','RLSTD'),(142,'Tralee','','52.271','-9.69846','TRLEE'),(143,'Wellingtonbridge','','52.2678','-6.75392','WBDGE'),(144,'Waterford','','52.2667','-7.1183','WFORD'),(145,'Rosslare Europort','Rosslare Harbour','52.2531','-6.33493','RLEPT'),(146,'Bridgetown','','52.2312','-6.54918','BRGTN'),(147,'Farranfore','','52.1733','-9.55278','FFORE'),(148,'Mallow','','52.1396','-8.65521','MLLOW'),(149,'Banteer','','52.1287','-8.89793','BTEER'),(150,'Rathmore','','52.0854','-9.21756','RMORE'),(151,'Millstreet','','52.0776','-9.06973','MLSRT'),(152,'Killarney','','52.0595','-9.50198','KLRNY'),(153,'Midleton','','51.9212','-8.17579','MDLTN'),(154,'Carrigtwohill','','51.9163','-8.26323','CGTWL'),(155,'Glounthaune','','51.9112','-8.3254','GHANE'),(156,'LittleIsland','Little Island','51.9078','-8.35466','LSLND'),(157,'Cork','','51.9018','-8.4582','CORK '),(158,'Fota','','51.896','-8.3183','FOTA '),(159,'Carrigaloe','','51.8688','-8.32417','CGLOE'),(160,'Rushbrooke','','51.8496','-8.32252','RBROK'),(161,'Cobh','','51.8491','-8.29956','COBH ');
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trains`
--

DROP TABLE IF EXISTS `trains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `trains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(4) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `code` varchar(6) NOT NULL,
  `trdate` varchar(15) NOT NULL,
  `message` varchar(80) NOT NULL,
  `direction` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`code`,`trdate`,`direction`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


-- Dump completed on 2025-04-29 11:02:32
