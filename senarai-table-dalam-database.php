-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `fullusername` varchar(100) DEFAULT NULL,
  `password` text,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` text,
  `postcode` varchar(10) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `gambar` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `username`, `fullusername`, `password`, `level`, `email`, `phoneno`, `address1`, `address2`, `city`, `postcode`, `state`, `gambar`) VALUES
(1,	'admin',	'Admin Besar',	'21232f297a57a5a743894a0e4a801fc3',	'admin',	'admin@duduk.mana',	123456789,	'No 1, Jalan 2',	'Taman 3',	'Kajang',	'12345',	'Selangor',	NULL),
(2,	'azizah',	'Azizah Talib',	'c83127aaa949deeb6169d36f7c6a1cee',	'admin2',	'azizah@duduk.mana',	1234567891,	'No 2, Jalan 3',	'Taman 5',	'Segamat',	'83000',	'Johor',	NULL),
(3,	'irwan',	'Irwan Jaes',	'b360089e48b62d69c6c80fa1b5ef024d',	'vendor',	'irwan@gmail.com',	123456789,	'No 3, Jalan 4',	'Taman 5',	'Batu Pahat',	'83000',	'Johor',	NULL),
(4,	'liyana',	'Liyana Mustappa',	'2c8d7e50fec435352f905b4eb938672f',	'vendor',	'liyana',	192962215,	'No.4 Jalan St5',	'Taman St',	'Semenyih',	'43500',	'Selangor',	NULL),
(5,	'ahmad',	'Ahmad',	'61243c7b9a4022cb3f8dc3106767ed12',	'admin2',	'ahmad@gmail.com',	192962215,	'No.4 Jalan St5',	'Taman St',	'Air Itam',	'43500',	'Selangor',	NULL),
(6,	'ika',	'Ika',	'7965c82127bd8517d2495e8efb12702c',	'vendor',	'ika@yahoo.com',	182673189,	'No.9 Jalan Bunga2',	'Taman Bunga',	'Kuala Kanfsar',	'33020',	'Perak',	NULL),
(7,	'abdul',	'Abdul',	'82027888c5bb8fc395411cb6804a066c',	'admin2',	'abdul@yahoo.com',	182673189,	'No.9 Jalan Bunga2',	'Taman Bunga',	'Kuala Kangsar',	'33020',	'Perak',	NULL);

DROP TABLE IF EXISTS `log_sql`;
CREATE TABLE `log_sql` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pengguna` varchar(100) NOT NULL,
  `sql` text NOT NULL,
  `arahan` text NOT NULL,
  `tarikhmasa` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `log_sql` (`id`, `pengguna`, `sql`, `arahan`, `tarikhmasa`) VALUES
(1,	'index/registeration',	'INSERT INTO login\r\n(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r\n(\'azizah\', \'Azizah Talib\', \'c83127aaa949deeb6169d36f7c6a1cee\', \'vendor\', \'azizah@duduk.mana\', \'01234567891\', \'No 2, Jalan 3\', \'Taman 4\', \'Tangkak\', \'84000\', \'Johor\');',	'tambah user baru level vendor',	'2018-07-08 12:08:59'),
(2,	'index/registeration',	'INSERT INTO login\r\n(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r\n(\'irwan\', \'Irwan Jaes\', \'b360089e48b62d69c6c80fa1b5ef024d\', \'vendor\', \'irwan@gmail.com\', \'0123456789\', \'No 3, Jalan 4\', \'Taman 5\', \'Batu Pahat\', \'83000\', \'Johor\');',	'tambah user baru level vendor',	'2018-07-08 12:11:42'),
(3,	'index/registeration',	'INSERT INTO login\r(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r(\'liyana\', \'Liyana Mustappa\', \'2c8d7e50fec435352f905b4eb938672f\', \'vendor\', \'liyana\', \'0192962215\', \'No.4 Jalan St5\', \'Taman St\', \'Semenyih\', \'43500\', \'Selangor\');',	'tambah user baru level vendor',	'2018-07-12 14:26:42'),
(4,	'index/registeration',	'INSERT INTO login\r(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r(\'ahmad\', \'Ahmad\', \'61243c7b9a4022cb3f8dc3106767ed12\', \'vendor\', \'ahmad@gmail.com\', \'192962215\', \'No.4 Jalan St5\', \'Taman St\', \'Air Itam\', \'43500\', \'Selangor\');',	'tambah user baru level vendor',	'2018-07-12 14:28:13'),
(5,	'index/registeration',	'INSERT INTO login\r(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r(\'ika\', \'Ika\', \'7965c82127bd8517d2495e8efb12702c\', \'vendor\', \'ika@yahoo.com\', \'182673189\', \'No.9 Jalan Bunga2\', \'Taman Bunga\', \'Kuala Kanfsar\', \'33020\', \'Perak\');',	'tambah user baru level vendor',	'2018-07-12 14:29:23'),
(6,	'index/registeration',	'INSERT INTO login\r(`username`,`fullusername`,`password`,`level`,`email`,`phoneno`,`address1`,`address2`,`city`,`postcode`,`state`) VALUES \r(\'abdul\', \'Abdul\', \'82027888c5bb8fc395411cb6804a066c\', \'vendor\', \'abdul@yahoo.com\', \'182673189\', \'No.9 Jalan Bunga2\', \'Taman Bunga\', \'Kuala Kangsar\', \'33020\', \'Perak\');',	'tambah user baru level vendor',	'2018-07-12 14:30:34');

DROP TABLE IF EXISTS `test_booking_criteria`;
CREATE TABLE `test_booking_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nossm` varchar(50) DEFAULT NULL,
  `lesenberniaga` varchar(50) DEFAULT NULL,
  `yuran` varchar(50) DEFAULT NULL,
  `sijilpemakanan` varchar(50) DEFAULT NULL,
  `suntikan` varchar(50) DEFAULT NULL,
  `dateCriteria` date DEFAULT NULL,
  `idUser` varchar(50) DEFAULT NULL,
  `dateResult` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_booking_criteria` (`id`, `nossm`, `lesenberniaga`, `yuran`, `sijilpemakanan`, `suntikan`, `dateCriteria`, `idUser`, `dateResult`) VALUES
(1,	'1234',	'lkm029',	NULL,	'78uikh',	'health',	'2017-03-08',	'A001',	'2018-09-09'),
(2,	'5678',	'lkm86',	NULL,	'79uikh',	'sick',	'2017-03-05',	'A002',	'2018-07-07'),
(3,	'456',	'456',	'654',	NULL,	NULL,	'2018-07-15',	'4-liyana',	NULL);

DROP TABLE IF EXISTS `test_booking_result`;
CREATE TABLE `test_booking_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryproduct` varchar(50) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `idUser` varchar(50) DEFAULT NULL,
  `dateResult` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_booking_result` (`id`, `categoryproduct`, `result`, `idUser`, `dateResult`) VALUES
(1,	'flower',	'proceed',	'A001',	'2018-09-09'),
(2,	'cosmetic',	'pending',	'A002',	'2018-07-07'),
(3,	'Clothes',	'new',	'4-liyana',	NULL);

DROP TABLE IF EXISTS `test_payment`;
CREATE TABLE `test_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpayment` varchar(20) DEFAULT NULL,
  `datepayment` date DEFAULT NULL,
  `dateresult` date DEFAULT NULL,
  `receipt` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_payment` (`id`, `idpayment`, `datepayment`, `dateresult`, `receipt`) VALUES
(1,	'FD001',	'2017-02-07',	'2018-09-09',	''),
(2,	'FD002',	'2017-03-09',	'2018-07-07',	'');

DROP TABLE IF EXISTS `test_product`;
CREATE TABLE `test_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idLogin` varchar(255) NOT NULL,
  `idProduct` varchar(255) NOT NULL,
  `categoryProduct` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_product` (`id`, `idLogin`, `idProduct`, `categoryProduct`, `capacity`) VALUES
(1,	'ini table untuk product',	'',	'',	''),
(2,	'5-ahmad',	'123',	'food',	'100'),
(3,	'7-abdul',	'124',	'clothes',	'500');

DROP TABLE IF EXISTS `test_report`;
CREATE TABLE `test_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_report` (`id`, `name`) VALUES
(1,	'ini table untuk report');

DROP TABLE IF EXISTS `test_website`;
CREATE TABLE `test_website` (
  `website_id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(255) NOT NULL,
  `website_link` varchar(255) NOT NULL,
  `note` text,
  PRIMARY KEY (`website_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `test_website` (`website_id`, `website_name`, `website_link`, `note`) VALUES
(1,	'Amin007',	'www.amin007.org',	'untuk test'),
(2,	'Facebook',	'www.facebook.com',	'untuk test 2'),
(3,	'Google',	'www.google.com',	'untuk test 3'),
(4,	'Yahoo',	'www.yahoo.com',	'test 123');

DROP TABLE IF EXISTS `z_criteria`;
CREATE TABLE `z_criteria` (
  `datecriteria` varchar(20) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `dateresult` varchar(20) DEFAULT NULL,
  `ssm` varchar(20) DEFAULT NULL,
  `lesenberniaga` varchar(20) DEFAULT NULL,
  `sijilpmakanan` varchar(30) DEFAULT NULL,
  `suntikan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `z_criteria` (`datecriteria`, `id`, `dateresult`, `ssm`, `lesenberniaga`, `sijilpmakanan`, `suntikan`) VALUES
('170308',	'A001',	'180909',	'1234',	'lkm029',	'78uikh',	'health'),
('170305',	'A002',	'180707',	'5678',	'lkm86',	'79uikh',	'sick');

DROP TABLE IF EXISTS `z_payment`;
CREATE TABLE `z_payment` (
  `idpayment` varchar(20) DEFAULT NULL,
  `datepayment` varchar(20) DEFAULT NULL,
  `dateresult` varchar(20) DEFAULT NULL,
  `receipt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `z_payment` (`idpayment`, `datepayment`, `dateresult`, `receipt`) VALUES
('FD001',	'2017-02-07',	'2018-09-09',	''),
('FD002',	'2017-03-09',	'2018-07-07',	'');

DROP TABLE IF EXISTS `z_result`;
CREATE TABLE `z_result` (
  `dateresult` varchar(20) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `categoryproduct` varchar(30) DEFAULT NULL,
  `result` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `z_result` (`dateresult`, `id`, `categoryproduct`, `result`) VALUES
('180909',	'A001',	'flower',	'proceed'),
('180707',	'A002',	'cosmetic',	'pending');

DROP TABLE IF EXISTS `z_vacancybooth`;
CREATE TABLE `z_vacancybooth` (
  `idvacancybooth` varchar(20) DEFAULT NULL,
  `categoryproduct` varchar(50) DEFAULT NULL,
  `capacity` varchar(200) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `z_vacancybooth` (`idvacancybooth`, `categoryproduct`, `capacity`, `id`) VALUES
('DE001',	'food',	'100',	'BE001'),
('DE002',	'flower',	'50',	'BE002');

-- 2018-07-15 04:24:33
