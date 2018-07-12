-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `criteria`;
CREATE TABLE `criteria` (
  `datecriteria` date NOT NULL,
  `id` varchar(20) NOT NULL,
  `dateresult` date NOT NULL,
  `ssm` varchar(20) NOT NULL,
  `lesenberniaga` varchar(20) NOT NULL,
  `sijilpmakanan` varchar(30) NOT NULL,
  `suntikan` varchar(20) NOT NULL,
  PRIMARY KEY (`datecriteria`,`dateresult`,`id`),
  KEY `id` (`id`),
  KEY `dateresult` (`dateresult`),
  CONSTRAINT `criteria_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zl_vendor` (`id`),
  CONSTRAINT `criteria_ibfk_2` FOREIGN KEY (`dateresult`) REFERENCES `result` (`dateresult`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `criteria` (`datecriteria`, `id`, `dateresult`, `ssm`, `lesenberniaga`, `sijilpmakanan`, `suntikan`) VALUES
('2017-03-05',	'A002',	'2018-07-07',	'5678',	'lkm86',	'79uikh',	'sick'),
('2017-03-08',	'A001',	'2018-09-09',	'1234',	'lkm029',	'78uikh',	'health');

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `fullusername` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gambar` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `username`, `fullusername`, `password`, `level`, `email`, `phoneno`, `address1`, `address2`, `city`, `postcode`, `state`, `gambar`) VALUES
(1,	'admin',	'Admin Besar',	'21232f297a57a5a743894a0e4a801fc3',	'admin',	'admin@duduk.mana',	12345678,	'No 1, Jalan 2',	'Taman 3',	'Empat',	'50000',	'Lain-Lain',	NULL),
(2,	'Iliya',	'Iliya Mustaffa',	'f5ca2d0fea818f7c46b004aa04214791',	'vendor',	'liyana@gmail.com',	192962215,	'No.4 Jalan St5',	'Taman St',	'Semenyih',	'43500',	'Selangor',	NULL),
(4,	'Ika',	'Ika',	'69998de41c74337344201300a1654434',	'vendor',	'ika@yahoo.com',	182673189,	'No.9 Jalan Bunga2',	'Taman Bunga',	'Kuala Kangsar',	'33020',	'Perak',	NULL),
(5,	'pintu',	'Ahmad Pintu',	'61243c7b9a4022cb3f8dc3106767ed12',	'vendor',	'ahmad@gmail.com',	192962215,	'No.4 Jalan St5',	'Taman St',	'Air Itam',	'43500',	'Selangor',	NULL),
(6,	'ahmad',	'Ahmad Albab',	'61243c7b9a4022cb3f8dc3106767ed12',	'admin2',	'ahmad@gmail.com',	192962215,	'No. 4, Jalan St 5',	'Taman St',	'Air Itam',	'43500',	'Selangor',	NULL),
(7,	'abdul',	'Abdul Rahman',	'82027888c5bb8fc395411cb6804a066c',	'admin2',	'abdul@yahoo.com',	182673189,	'No 9, Jalan Bunga 2',	'Taman Bunga',	'Kuala Kangsar',	'33020',	'Perak',	NULL);

DROP TABLE IF EXISTS `log_sql`;
CREATE TABLE `log_sql` (
  `id` bigint(20) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  `sql` text NOT NULL,
  `arahan` text NOT NULL,
  `tarikhmasa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `idpayment` varchar(20) NOT NULL,
  `datepayment` date NOT NULL,
  `dateresult` date NOT NULL,
  `receipt` tinyblob NOT NULL,
  PRIMARY KEY (`idpayment`),
  KEY `dateresult` (`dateresult`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`dateresult`) REFERENCES `result` (`dateresult`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `payment` (`idpayment`, `datepayment`, `dateresult`, `receipt`) VALUES
('FD001',	'2017-02-07',	'2018-09-09',	''),
('FD002',	'2017-03-09',	'2018-07-07',	'');

DROP TABLE IF EXISTS `result`;
CREATE TABLE `result` (
  `dateresult` date NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `categoryproduct` varchar(30) NOT NULL,
  `result` varchar(20) NOT NULL,
  PRIMARY KEY (`dateresult`),
  KEY `id` (`id`),
  CONSTRAINT `result_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zl_vendor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `result` (`dateresult`, `id`, `categoryproduct`, `result`) VALUES
('2018-07-07',	'A002',	'cosmetic',	'pending'),
('2018-09-09',	'A001',	'flower',	'proceed');

DROP TABLE IF EXISTS `test_product`;
CREATE TABLE `test_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id Admin` varchar(255) NOT NULL,
  `Product No` varchar(255) NOT NULL,
  `Category Product` varchar(255) NOT NULL,
  `Caoacity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_product` (`id`, `Id Admin`, `Product No`, `Category Product`, `Caoacity`) VALUES
(1,	'7-abdul',	'456',	'clothes',	456);

DROP TABLE IF EXISTS `test_report`;
CREATE TABLE `test_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_report` (`id`, `name`) VALUES
(1,	'test report 1'),
(2,	'test report 2'),
(3,	'test report 3'),
(4,	'test report 4');

DROP TABLE IF EXISTS `test_website`;
CREATE TABLE `test_website` (
  `website_id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(255) NOT NULL,
  `website_link` varchar(255) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`website_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_website` (`website_id`, `website_name`, `website_link`, `note`) VALUES
(1,	'Amin007',	'www.amin007.org',	'test sahaja'),
(2,	'Facebook',	'www.facebook.com',	'test sahaja'),
(3,	'Google',	'www.google.com',	'test sahaja');

DROP TABLE IF EXISTS `vacancybooth`;
CREATE TABLE `vacancybooth` (
  `idvacancybooth` varchar(20) NOT NULL,
  `categoryproduct` varchar(50) NOT NULL,
  `capacity` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`idvacancybooth`),
  KEY `id` (`id`),
  CONSTRAINT `vacancybooth_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zl_admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `vacancybooth` (`idvacancybooth`, `categoryproduct`, `capacity`, `id`) VALUES
('DE001',	'food',	'100',	'BE001'),
('DE002',	'flower',	'50',	'BE002');

DROP TABLE IF EXISTS `zl_admin`;
CREATE TABLE `zl_admin` (
  `id` varchar(20) NOT NULL,
  `nameadmin` varchar(40) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phoneno` int(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gambar` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `zl_admin` (`id`, `nameadmin`, `password`, `email`, `phoneno`, `address1`, `address2`, `city`, `postcode`, `state`, `gambar`) VALUES
('BE001',	'ahmad',	'abc456',	'ahmad@gmail.com',	192962215,	'No.4 jalan st5',	'Taman st',	'air itam',	'43500',	'Selangor',	''),
('BE002',	'abdul',	'789',	'abdul@yahoo.com',	182673189,	'No.9 jalan bunga2',	'Taman bunga',	'kuala kangsar',	'33020',	'Perak',	'');

DROP TABLE IF EXISTS `zl_login`;
CREATE TABLE `zl_login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `zl_login` (`id`, `password`, `level`) VALUES
('admin',	'admin123',	'admin');

DROP TABLE IF EXISTS `zl_vendor`;
CREATE TABLE `zl_vendor` (
  `id` varchar(20) NOT NULL,
  `namevendor` varchar(40) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phoneno` int(10) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gambar` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `zl_vendor` (`id`, `namevendor`, `password`, `email`, `phoneno`, `address1`, `address2`, `city`, `postcode`, `state`, `gambar`) VALUES
('A001',	'Iliya',	'abc456',	'liyana@gmail.com',	192962215,	'No.4 jalan st5',	'Taman st',	'semenyih',	'43500',	'Selangor',	''),
('A002',	'Ika',	'789',	'ika@yahoo.com',	182673189,	'No.9 jalan bunga2',	'Taman bunga',	'kuala kangsar',	'33020',	'Perak',	'');

-- 2018-07-12 11:46:55