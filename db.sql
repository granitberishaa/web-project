-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 15, 2020 at 09:27 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `photo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Vizioni yne', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png'),
(2, 'Mjeket', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png'),
(3, 'Siguria', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png'),
(4, 'Skuadra Jone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `siguria`
--

DROP TABLE IF EXISTS `siguria`;
CREATE TABLE IF NOT EXISTS `siguria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `photo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siguria`
--

INSERT INTO `siguria` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Siguria', 'Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet architecto dicta, doloribus ducimus excepturi facilis impedit incidunt libero molestias nostrum perferendis porro quam qui repellendus saepe sint suscipit tenetur.Amet, aut blanditiis consequatur culpa dolore harum modi molestiae nemo, quaerat quam quas rem sapiente vero, voluptas voluptatem. Accusantium consequuntur dolores minima officiis quam tempora? Corporis debitis eaque itaque nihil.Animi asperiores corporis debitis doloremque dolores doloribus eligendi eos, et fuga harum, illum impedit, iusto minima nemo neque odio quasi sapiente vitae. Consectetur dignissimos eaque laudantium odit optio sed sunt?dolor sit amet, consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `skuadrajone`
--

DROP TABLE IF EXISTS `skuadrajone`;
CREATE TABLE IF NOT EXISTS `skuadrajone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `photo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skuadrajone`
--

INSERT INTO `skuadrajone` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Skuadra jone', 'Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet esse fugit hic ipsum magnam odio pariatur perferendis! A commodi enim eveniet facere, fugit laudantium odio pariatur qui reiciendis repellat voluptas?Aliquam architecto atque autem consequatur consequuntur culpa delectus, dignissimos dolorem eaque eos est ex excepturi fugit in, minus molestias neque nobis nulla obcaecati quae quisquam quod sint sit vel vero!Atque aut, corporis est id inventore numquam quidem sunt suscipit. Ad aliquid eius facilis mollitia possimus! Adipisci animi aut minima modi sapiente vel. A doloremque et quae repudiandae Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae cumque ducimus, hic illum ipsam itaque nam numquam officiis possimus quae qui quo reprehenderit rerum sint velit vero. Dolore, exercitationem.Architecto aspernatur at delectus dignissimos eum eveniet facilis, fugiat porro quos voluptates. Aliquid autem debitis, dolore dolorum fugiat incidunt laboriosam saepe similique. Corporis cupiditate ipsa laborum obcaecati rerum totam vero?tempore ut.consectetur adipisicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?\r\n', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spitalet`
--

DROP TABLE IF EXISTS `spitalet`;
CREATE TABLE IF NOT EXISTS `spitalet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `location` varchar(256) NOT NULL,
  `dateCreated` date NOT NULL,
  `dateModified` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spitalet`
--

INSERT INTO `spitalet` (`id`, `name`, `location`, `dateCreated`, `dateModified`, `photo`) VALUES
(1, 'Spitali Turk', 'Bregu i diellit prishtin', '0000-00-00', '0000-00-00', 'jpg'),
(2, 'Spitali Amerikan', 'Bregu i diellit', '2020-07-15', '2020-07-15', 'png'),
(3, 'Spitali AmerikanoTurk', 'Gjilanrrugaper', '2020-07-15', '2020-07-15', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `Email` varchar(123) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Photo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Priority` int(1) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `DateCreated` date NOT NULL,
  `LastModified` date NOT NULL,
  `Qendra` varchar(128) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Name`, `LastName`, `Email`, `Age`, `Gender`, `Photo`, `Priority`, `Password`, `DateCreated`, `LastModified`, `Qendra`) VALUES
(2, 'Arber', 'Pllana', 'arberPllana@gamil.com', 22, 'Male', 'jpg', 1, '88888888', '2020-07-15', '2020-07-15', 'Prishtin');

-- --------------------------------------------------------

--
-- Table structure for table `vizioniyn`
--

DROP TABLE IF EXISTS `vizioniyn`;
CREATE TABLE IF NOT EXISTS `vizioniyn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `photo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vizioniyn`
--

INSERT INTO `vizioniyn` (`id`, `title`, `text`, `photo`) VALUES
(1, 'Vizioni Yn', 'orem ipsum dolor sit amet, consectetur adip Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolorum ipsam iste laboriosam laborum quam quidem similique. Accusamus delectus deleniti et fuga fugit hic mollitia necessitatibus numquam officiis, unde vitae.</span><span>Ab beatae commodi debitis dolor esse illum itaque iure quos velit! Accusamus at blanditiis distinctio dolorem dolores ea, ex expedita id libero natus neque numquam pariatur reiciendis vero volu Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsam, voluptas. Blanditiis distinctio, dolor eaque eligendi error est Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad atque, consequatur exercitationem illum, impedit incidunt laboriosam libero, maiores modi molestias nobis similique unde voluptas voluptate! Consequatur, impedit, sapiente! Animi? hic iste itaque nam nemo perspiciatis quaerat quasi rerum suscipit veniam, voluptas?ptate voluptates.</span><span>Asperiores blanditiis corporis culpa cumque debitis deserunt dolore dolorum ducimus eos, eum facere, illo in inventore magni maiores minima modi nemo nisi quam quasi quidem quos, tempora unde vel veritatis.</span><span>Alias commodi culpa cum cumque cupiditate deserunt doloremque eius eligendi enim error est excepturi explicaboatum?</span> isicing elit. A alias aliquid cupiditate debitis dolorem ea illo ipsa quae qui quisquam similique, ut. Consequatur dolor expedita minima nulla omnis porro rem?', 'png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
