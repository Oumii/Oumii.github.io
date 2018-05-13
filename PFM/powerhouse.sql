-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2018 at 06:46 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powerhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `id_abonn` int(3) NOT NULL AUTO_INCREMENT,
  `dateD_abonn` date NOT NULL,
  `dateF_abonn` date NOT NULL,
  `prix_abonn` float NOT NULL,
  `member` int(3) NOT NULL,
  PRIMARY KEY (`id_abonn`),
  KEY `id_memb` (`member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id_activ` int(3) NOT NULL AUTO_INCREMENT,
  `nom_activ` varchar(50) NOT NULL,
  `heureD_activ` varchar(5) NOT NULL,
  `heureF_activ` varchar(5) NOT NULL,
  `coach` int(3) NOT NULL,
  `num_salle` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `id_member` int(3) NOT NULL,
  PRIMARY KEY (`id_activ`),
  KEY `coach` (`coach`),
  KEY `num_salle` (`num_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activite`
--

INSERT INTO `activite` (`id_activ`, `nom_activ`, `heureD_activ`, `heureF_activ`, `coach`, `num_salle`, `img`, `description`, `id_member`) VALUES
(1, 'AQUA GYM', '10h00', '12h00', 5, 159357, 'http://localhost/PFM/images/aqua.jpg', 'Want to tone yourself differently, need a gentle activity for your joints, water aerobics classes are here to meet your expectations. Far from the cliche of \"quiet\" courses, come and spend a dynamic session enjoyable and powerful music.', 0),
(2, 'RELAXATION', '17h00', '18h00', 1, 159357, 'http://localhost/PFM/images/relax.jpg', 'In order to forget stress and decompress, PowerHouseoffers its members relaxation areas and specific activities. After the effort, comfort. Take care of yourself and think that your Health Capital is built daily, in energy, positivity and well-being!', 0),
(3, 'FREE STYLE & DANCE', '20h00', '21h00', 6, 159357, 'http://localhost/PFM/images/dance.jpg', '\r\nFashionable activity, new sensations on furious Latin rhythms. This course will delight you with its dynamic fitness, with a very cardio pedagogy and body sensations related to dance.', 0),
(4, 'BHANGRA BEATS', '19h00', '20h00', 3, 159357, 'http://localhost/PFM/images/cardio.jpg', 'Do you like Indian series? Are you Bollywood fans? Have you been in love with \"Kabhi khushi Kabhi gham\", \"Jabra Fan\" or \"Jodha Akbar\"? Then you will love BHANGRA BEATS classes exclusively in all PowerHouse clubs.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `name`, `email`, `username`, `password`, `url_img`) VALUES
(1, 'ABDELJALIL RAJLI', 'abdeljalil.rajli13@gmail.com', 'ABDO1234', '12345678', 'http://localhost/PFM/images/users/sonu.jpg'),
(2, 'SALAHEDDINE', 'SALAH@GMAIL.COM', 'SALAH123', '123456', 'http://localhost/PFM/images/users/pawandeep.jpg'),
(3, 'Oumaima Oumghar', 'Oumaima@gmail.com', 'Oumaima', '1234567', 'http://localhost/PFM/images/users/hritik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sous_title` varchar(200) NOT NULL,
  `small_title` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img_1` varchar(500) NOT NULL,
  `img_2` varchar(500) NOT NULL,
  `paragraph` varchar(500) NOT NULL,
  `data_wow_delay` varchar(5) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `title`, `sous_title`, `small_title`, `description`, `img_1`, `img_2`, `paragraph`, `data_wow_delay`, `icon`) VALUES
(1, 'Clubs', 'For Fitness Lovers Around The World.', 'Clubs', 'PowerHouse members can take advantage of all Virtual Collective Classes broadcast non-stop 7 days a week. All those who have a subscription can participate without limit in virtual group lessons in all clubs of the group. Not only members can also benefit from courses taught by renowned international coaches.', 'http://localhost/PFM/images/machines1.png', 'http://localhost/PFM/images/machines2.jpg', 'More Than 10 Clubs Around The World', '1.8s', '<i class=\"fa fa-globe\"></i>'),
(2, 'Clubs', 'For Fitness Lovers Around The World.', 'Machines', 'At PowerHouse, the bodybuilding and muscle building space is very complete, we offer: A weight training platform with machines free or guided weight, high quality. Strength training classes: The objective of these courses is to allow you to work on your muscular tone on the whole body. In music, playful and tonic, you will dress your glutes, tone your abs, remuster your back ... .', 'http://localhost/PFM/images/machines1.png', 'http://localhost/PFM/images/machines2.jpg', 'More Than 10000 Machines', '1.6s', '<i class=\"fa fa-cog\"></i>'),
(3, 'Clubs', 'For Fitness Lovers Around The World.', 'Coffe & Restaurant', 'PowerHouse coffee & restaurant is now open. Our mission is to bring you fresh, healthy, nutrient rich food and beverages at affordable prices. We use tasty, natural ingredients and super-foods packed with nutrients and vitamins to benefit your mind and body.', 'http://localhost/PFM/images/coffee1.jpg', 'http://localhost/PFM/images/coffee2.jpg', 'Amazing Coffee & Resturant in each Club', '1.4s', '<i class=\"fa fa-coffee\"></i>'),
(4, 'Clubs', 'For Fitness Lovers Around The World.', 'SPA', 'The jacuzzi is a great source of well-being. It erases in a few minutes stress and fatigue following a sports activity or a long day of work. Its impact goes well beyond the pleasure provided by the bath: you leave relaxed, soothed, toned. The combined effects of water heat, weightlessness and the action of massage are the 3 ingredients of good hydrotherapy.', 'http://localhost/PFM/images/spa1.jpg', 'http://localhost/PFM/images/spa2.jpg', 'Amazing Relaxing Space', '1.2s', '<i class=\"fa fa-bed\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom_co` varchar(30) DEFAULT NULL,
  `prenom_co` varchar(30) DEFAULT NULL,
  `adresse_co` varchar(100) DEFAULT NULL,
  `dateN_co` varchar(10) DEFAULT NULL,
  `num_tel_co` varchar(15) DEFAULT NULL,
  `email_co` varchar(50) DEFAULT NULL,
  `url_img` varchar(100) DEFAULT NULL,
  `paragraph` varchar(2000) DEFAULT NULL,
  `paragraph2` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `nom_co`, `prenom_co`, `adresse_co`, `dateN_co`, `num_tel_co`, `email_co`, `url_img`, `paragraph`, `paragraph2`) VALUES
(1, 'John', 'Doe', 'URB LAS GLADIOLAS DULUTH MN  55811-9999 \r\n150 CALLE USA ', '05/05/1980', '615487596', 'john@gmail.com', 'http://localhost/PFM/images/4.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(2, 'Janice', 'Smith', '1234 AVE ASHFORD APT 1A COND LAS AMAPOLAS \r\nSAN JUAN PR 00907-1021 USA', '10/07/1990', '612564852', 'janice@gmail.com', 'http://localhost/PFM/images/3.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(3, 'Kevin', 'Beasley', 'DULUTH MN  55803-0034 CANTON OH 44730-9521 USA ', '01/03/1988', '612359648', 'kevin@gmail.com', 'http://localhost/PFM/images/1.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(4, 'Jane', 'Brown', 'HC 72 BOX 293A DULUTH MN 55811-9702 USA', '12/12/1989', '623485169', 'jane@gmail.com', 'http://localhost/PFM/images/5.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(5, 'Jim', 'Carry', 'DULUTH MN  55803-0034 CANTON OH 44730-9521 USA ', '23/10/1979', '623184975', 'jim@gmail.com', 'http://localhost/PFM/images/2.jpeg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(6, 'Malicia', 'Spears', 'HC 72 BOX 293A DULUTH MN 55811-9702 USA', '05/12/1992', '623951946', 'malicia@gmail.com', 'http://localhost/PFM/images/8.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Oumghar Oumaima', 'oumaimaoumghare@gmail.com', 605945018, 'This is my message .'),
(2, 'Salah Eddine', 'salaheddine@gmail.com', 602159478, 'This is my message'),
(3, 'ABDELJALIL RAJLI', 'abdeljalil.rajli13@gmail.com', 690005403, '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `url_img` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `paragraph` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `url_img`, `title`, `paragraph`) VALUES
(1, 'http://localhost/PFM/images/img1.png', 'PowerHouse', '<p>Try A New Wourkout Experience</p>\r\n					<p>Build Your Dreams Body</p>\r\n					<p>Enjoy Your Fitness Day By Day</p>\r\n					<p>All In PowerHous</p>\r\n					<p>Fitness Is Now</p>');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id_memb` int(3) NOT NULL AUTO_INCREMENT,
  `nom_memb` varchar(50) NOT NULL,
  `prenom_memb` varchar(50) NOT NULL,
  `adresse_memb` varchar(50) NOT NULL,
  `dateN_memb` date NOT NULL,
  `tel_memb` varchar(15) NOT NULL,
  `email_memb` varchar(30) NOT NULL,
  `login_memb` varchar(30) NOT NULL,
  `pass_memb` varchar(30) NOT NULL,
  `immaticule_salle` int(10) NOT NULL,
  PRIMARY KEY (`id_memb`),
  KEY `immatricule_salle` (`immaticule_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_memb`, `nom_memb`, `prenom_memb`, `adresse_memb`, `dateN_memb`, `tel_memb`, `email_memb`, `login_memb`, `pass_memb`, `immaticule_salle`) VALUES
(1, 'Rajli', 'Abdeljalil', 'azli marrakech', '2018-05-06', '0670277524', 'ABDELJALIL@GMAIL.COM', 'ABDO123', '123456', 159357),
(2, 'Eddin', 'Salah', 'Mhamid Marrakech', '1990-12-03', '0600070730', 'Salaheddin@gmail.com', 'salah', '123456', 159357),
(3, 'Oumghar', 'Oumaima', 'Lot tachfin azli marrakech', '1996-09-05', '0690005403', 'oumghar@gmail.com', 'oumaima', '12345678', 159357);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `activite` varchar(100) NOT NULL,
  `member` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`id`, `activite`, `member`) VALUES
(6, 'RELAXATION', 1),
(7, 'BHANGRA BEATS', 2),
(8, 'AQUA GYM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

DROP TABLE IF EXISTS `payement`;
CREATE TABLE IF NOT EXISTS `payement` (
  `id_pay` int(3) NOT NULL AUTO_INCREMENT,
  `id_memb` int(3) NOT NULL,
  `mode_pay` varchar(15) DEFAULT NULL,
  `date_pay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `num_carte` int(16) DEFAULT NULL,
  `cvc` int(3) NOT NULL,
  `expiration` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `name_card` varchar(100) NOT NULL,
  `abonnement` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pay`),
  KEY `idmemb` (`id_memb`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payement`
--

INSERT INTO `payement` (`id_pay`, `id_memb`, `mode_pay`, `date_pay`, `num_carte`, `cvc`, `expiration`, `year`, `name_card`, `abonnement`, `price`) VALUES
(4, 1, 'mastercard', '2018-05-11 19:33:48', 123456789, 212, 21, 2121, ' Rajli ', ' PREMIUM ', ' 200 ');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

DROP TABLE IF EXISTS `pricing`;
CREATE TABLE IF NOT EXISTS `pricing` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sous_title` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `paragraph` varchar(2000) NOT NULL,
  `content1` varchar(100) NOT NULL,
  `content2` varchar(100) NOT NULL,
  `content3` varchar(100) NOT NULL,
  `content4` varchar(100) NOT NULL,
  `type_abonn` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `title`, `sous_title`, `price`, `paragraph`, `content1`, `content2`, `content3`, `content4`, `type_abonn`) VALUES
(1, 'Pricing', 'The Best Subscriptions With The Best Prices', 30, 'Enjoy Your Fitness', 'BodyBuilding', 'Aerobic', 'Cardio', 'BodyBalance', 'BASIC'),
(2, '', '', 110, 'Enjoy Your Fitness', 'BodyBuilding', 'Aerobic', 'Cardio', 'BodyBalance', 'STANDARD'),
(3, '', '', 200, 'Enjoy Your Fitness', 'BodyBuilding', 'Aerobic', 'Cardio', 'BodyBalance', 'PREMIUM');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sous_title` varchar(200) NOT NULL,
  `url_img` varchar(1024) NOT NULL,
  `small_title` varchar(200) NOT NULL,
  `paragraph` varchar(200) NOT NULL,
  `img_desc` varchar(1024) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `data_wow_delay` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `sous_title`, `url_img`, `small_title`, `paragraph`, `img_desc`, `description`, `data_wow_delay`) VALUES
(1, 'Discover Our Programs', 'All What You Need To Get The Best Training Experience', 'http://localhost/PFM/images/cardio.jpg', 'Cardio', 'For A Strong Heart', 'http://localhost/powerhouse/images/cardio1.ipg', 'Cardio exercise is one of the most important things you can do for your body, whether you want to lose weight, burn fat, improve your health, or do all three. There are plenty of choices for cardio exercise, indoors and outdoors.', '1.8s'),
(2, '', '', 'http://localhost/PFM/images/bodybalance.jpg', 'BodyBalance', '  For More Physical power', 'http://localhost/PFM/images/', 'Ideal for anyone and everyone, BODYBALANCE is the yoga-based class that will improve your mind, your body and your life. During BODYBALANCE an inspired soundtrack plays as you bend and stretch through a series of simple yoga moves and embrace elements of Tai Chi and Pilates. Breathing control is a part of all the exercises, and instructors will always provide options for those just getting started. Youï¿½ll strengthen your entire body and leave the class feeling calm and centered. Happy.', '1.6s'),
(3, '', '', 'http://localhost/PFM/images/aerobic.jpg', 'Aerobic', 'For more stretching', 'http://localhost/powerhouse/images/aerobic1.jpg', 'Aerobic exercise facts. Aerobic exercise is sometimes known as \"cardio\" -- exercise that requires pumping of oxygenated blood by the heart to deliver oxygen to working muscles. Aerobic exercise stimulates the heart rate and breathing rate to increase in a way that can be sustained for the exercise session.', '1.4s'),
(4, '', '', 'http://localhost/PFM/images/bdbuilding.jpg', 'Bodybuilding', 'To build the perfect Body', 'http://localhost/powerhouse/images/bdbuilding.jpg', 'Bodybuilding is the use of progressive resistance exercise to control and develop one\'s musculature.[1] An individual who engages in this activity is referred to as a bodybuilder. In professional bodybuilding, bodybuilders appear in lineups and perform specified poses', '1.2s');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `immatricule_salle` int(10) NOT NULL AUTO_INCREMENT,
  `adresse_salle` varchar(30) NOT NULL,
  `code_postal` int(20) NOT NULL,
  `pays_salle` varchar(30) NOT NULL,
  `ville_salle` varchar(30) NOT NULL,
  PRIMARY KEY (`immatricule_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=159358 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`immatricule_salle`, `adresse_salle`, `code_postal`, `pays_salle`, `ville_salle`) VALUES
(159357, '1234 AVE SAN  PR 07-1021 USA', 666, 'USA', 'ARTZSTOTSKA');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(2) NOT NULL AUTO_INCREMENT,
  `url_img` varchar(100) NOT NULL,
  `paragraph` varchar(1000) NOT NULL,
  `paragraph2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `url_img`, `paragraph`, `paragraph2`) VALUES
(1, 'http://localhost/PFM/Team/img/4.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(2, 'http://localhost/PFM/Team/img/3.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(3, 'http://localhost/PFM/Team/img/1.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(4, 'http://localhost/PFM/Team/img/5.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(5, 'http://localhost/PFM/Team/img/2.jpeg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.'),
(6, 'http://localhost/PFM/Team/img/8.jpg', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.', 'The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `id_memb` FOREIGN KEY (`member`) REFERENCES `member` (`id_memb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `coach` FOREIGN KEY (`coach`) REFERENCES `coach` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `num_salle` FOREIGN KEY (`num_salle`) REFERENCES `salle` (`immatricule_salle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `immatricule_salle` FOREIGN KEY (`immaticule_salle`) REFERENCES `salle` (`immatricule_salle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `idmemb` FOREIGN KEY (`id_memb`) REFERENCES `member` (`id_memb`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
