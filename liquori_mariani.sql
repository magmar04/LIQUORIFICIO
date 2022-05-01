-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.24-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database liquori_mariani
CREATE DATABASE IF NOT EXISTS `liquori_mariani` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `liquori_mariani`;

-- Dump della struttura di tabella liquori_mariani.carrello
CREATE TABLE IF NOT EXISTS `carrello` (
  `mail` char(50) DEFAULT NULL,
  `codicep` int(11) DEFAULT NULL,
  `quantita` int(11) DEFAULT NULL,
  KEY `FK_carrrello_utente` (`mail`),
  KEY `FK_carrrello_prodotto` (`codicep`) USING BTREE,
  CONSTRAINT `FK_carrello_prodotto` FOREIGN KEY (`codicep`) REFERENCES `prodotto` (`codice`) ON DELETE CASCADE,
  CONSTRAINT `FK_carrello_utente` FOREIGN KEY (`mail`) REFERENCES `utente` (`mail`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella liquori_mariani.carrello: ~3 rows (circa)
/*!40000 ALTER TABLE `carrello` DISABLE KEYS */;
INSERT INTO `carrello` (`mail`, `codicep`, `quantita`) VALUES
	('sofiabrambilla@gmail.com', 0, 2),
	('pietrorossi@gmail.com', 1, 1),
	('lorenzomariani@gmail.com', 0, 2);
/*!40000 ALTER TABLE `carrello` ENABLE KEYS */;

-- Dump della struttura di tabella liquori_mariani.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `mail` char(50) DEFAULT NULL,
  `codice` int(11) DEFAULT NULL,
  `quantita` int(11) DEFAULT NULL,
  `proprietario` char(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `carta` char(50) DEFAULT NULL,
  `scadenza` date DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  KEY `FK_compra_utente` (`mail`),
  KEY `FK_compra_prodotto` (`codice`),
  CONSTRAINT `FK_compra_prodotto` FOREIGN KEY (`codice`) REFERENCES `prodotto` (`codice`) ON DELETE CASCADE,
  CONSTRAINT `FK_compra_utente` FOREIGN KEY (`mail`) REFERENCES `utente` (`mail`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella liquori_mariani.compra: ~5 rows (circa)
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` (`mail`, `codice`, `quantita`, `proprietario`, `data`, `carta`, `scadenza`, `cvv`) VALUES
	('pietrorossi@gmail.com', 1, 3, NULL, '2022-03-09', NULL, NULL, NULL),
	('pietrorossi@gmail.com', 2, 1, NULL, '2022-03-19', NULL, NULL, NULL),
	('sofiabrambilla@gmail.com', 0, 2, NULL, '2022-03-26', NULL, NULL, NULL),
	('lorenzomariani@gmail.com', 0, 1, NULL, '2021-04-05', NULL, NULL, NULL),
	('asd@gmail.com', 9, 1, 'asd asd', '2022-04-30', '1234', '2022-05-01', 333);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Dump della struttura di tabella liquori_mariani.prodotto
CREATE TABLE IF NOT EXISTS `prodotto` (
  `codice` int(111) NOT NULL,
  `nome` char(50) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `descrizione` char(225) DEFAULT NULL,
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella liquori_mariani.prodotto: ~16 rows (circa)
/*!40000 ALTER TABLE `prodotto` DISABLE KEYS */;
INSERT INTO `prodotto` (`codice`, `nome`, `costo`, `descrizione`) VALUES
	(0, 'apespritz', 7.5, 'L’apespritz è un aperitivo dalla leggera gradazione alcolica (11%), ottenuto dall’infusione in alcol di Arancia ed erbe aromatiche.'),
	(1, 'bitter', 7, 'Il bitter Mariani è ottenuto con un infuso delle migliori erbe, provenienti da tutto il mondo. Indispensabile per la preparazione dei tuoi drink.'),
	(2, 'amaretto', 6, 'Amaretto Marilux è il tradizionale liquore dolce  italiano gradevolmente profumato alla mandorla e ricco di infuso di vaniglia bourbon e fave di cacao.'),
	(3, 'liquirito', 6.5, 'Il liquirito Mariani è un liquore dolce  a bassa gradazione (21°) con Grappa Lady Mariani ricco di succo di Liquirizia e aromi della radice. Presente un\'aggiunta di grappa.'),
	(4, 'sambuca', 7, 'La sambuca Mariani è un classico liquore della tradizione italiana fatto con gli aromi di semi di anice stellato e una miscela di erbe e frutti'),
	(5, 'limoncino', 7, 'Il limoncino Mariani è un classico liquore dolce di media gradazione (30°),  tipico della tradizione italiana ottenuto con infuso di scorze di limone.'),
	(6, 'meloni', 6.5, 'Il melonì Mariani è un liquore dolce a bassa gradazione aromatizzato al Melone verde. Ottimo per la preparazione di numerosi cocktail , long drink e sorbetti.'),
	(7, 'gold bon', 7.5, 'Il goldbon Mariani Liquore ottenuto dalla sapiente miscela di puro kentuky straight bourbon whiskey e alcool di puro grano.'),
	(8, 'tequila', 7, 'La tequila è un prodotto ottenuto dalla sapiente miscela di puro distillato di agave blanco e alcool di puro grano.'),
	(9, 'piperito', 6, 'Il piperito Mariani è un liquore dolce  a bassa gradazione (21°) con Grappa lady Mariani  e olio essenziale di menta. Fatto con aggiunta di pregiata grappa(2%).'),
	(10, 'nordik vodka', 7, 'La Nordik Vodka Mariani è una purissima vodka ottenuta con puro alcool di grano italiano trattato con doppia filtrazione con carbone vegetale.'),
	(11, 'cocorum', 7, 'Il cocorum Mariani è una versione del pregiato rum santana blanco con l’aggiunta di zucchero di canna raffinato , infuso di cocco e aromi.'),
	(12, 'vodka menta', 8, 'Nordik one mint vodka Mariani è ottenuta dalla miscelazione della Nordik vodka con i migliori oli ed estratti naturali di menta e zucchero raffinato.'),
	(13, 'vodka fragola', 8, 'Nordik one strawberry Mariani è ottenuta dalla miscelazione della nordik vodka con i succhi di fragola concentrat , e aromi per esaltarne il profumo.'),
	(14, 'vecchio brandy', 8, 'VecchioBrandy Mariani è un distillato di vino italiano invecchiato per 5 anni in fusti di rovere, dal colore ambrato e dal sapore caldo.'),
	(15, 'amaro 3 cime', 8, 'Amaro 3 cime è un amaro a bassa gradazione (21%) dal sapore di erbe alpine, ottenuto da un infusone naturale di erbe montane e spezie esotiche.');
/*!40000 ALTER TABLE `prodotto` ENABLE KEYS */;

-- Dump della struttura di tabella liquori_mariani.utente
CREATE TABLE IF NOT EXISTS `utente` (
  `mail` char(50) NOT NULL DEFAULT '',
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `pw` char(50) DEFAULT NULL,
  `stato` char(50) DEFAULT NULL,
  `citta` char(50) DEFAULT NULL,
  `via` char(50) DEFAULT NULL,
  `civico` char(50) DEFAULT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella liquori_mariani.utente: ~4 rows (circa)
/*!40000 ALTER TABLE `utente` DISABLE KEYS */;
INSERT INTO `utente` (`mail`, `nome`, `cognome`, `pw`, `stato`, `citta`, `via`, `civico`) VALUES
	('asd@gmail.com', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
	('lorenzomariani@gmail.com', 'lorenzo', 'mariani', 'lorenzomariani', 'italia', 'concorezzo', 'dante', '2'),
	('pietrorossi@gmail.com', 'pietro', 'rossi', 'pietrorossi', 'italia', 'concorezzo', 'adda', '5'),
	('sofiabrambilla@gmail.com', 'sofia', 'brambilla', 'sofiabrambilla', 'italia', 'agrate', 'levati', '4');
/*!40000 ALTER TABLE `utente` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
