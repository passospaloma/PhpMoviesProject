-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2022 at 07:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies2030DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id_comment` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `data_comment` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_login` varchar(100) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id_comment`, `comment`, `data_comment`, `user_login`, `movie_id`) VALUES
(1, 'Hello world', '2022-04-07 05:53:39', 'paloma', 1),
(2, 'hiiii!', '2022-04-07 05:53:39', 'jordan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_movies`
--

CREATE TABLE `tb_movies` (
  `id_movie` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `running_time` varchar(50) NOT NULL,
  `rating_imdb` varchar(10) DEFAULT NULL,
  `summary` text NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `trailer_src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_movies`
--

INSERT INTO `tb_movies` (`id_movie`, `name`, `image`, `category`, `running_time`, `rating_imdb`, `summary`, `release_date`, `trailer_src`) VALUES
(1, 'Eternals', 'eternals.jpg', 'Action', '156min', '6.4', 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants..', '2021', 'pWfjJ6bOy7w'),
(2, 'Don´t look up', 'dontlookup.jpg', 'Sci-fi', '138min', '7.2', 'Two low-level astronomers must go on a giant media tour to warn mankind of an approaching comet that will destroy planet Earth.', '2021', 'RbIxYm3mKzI'),
(3, 'Scream5', 'scream5.jpg', 'Horror', '116min', '6.5', 'Twenty-five years after a streak of brutal murders shocked the quiet town of Woodsboro, Calif., a new killer dons the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the towns deadly past.', '2022', 'beToTslH17s'),
(4, 'House of Gucci', 'houseofgucci.jpg', 'Drama', '158min', '6.7', 'When Patrizia Reggiani, an outsider from humble beginnings, marries into the Gucci family, her unbridled ambition begins to unravel the family legacy and triggers a reckless spiral of betrayal, decadence, revenge and ultimately murder.', '2021', 'pGi3Bgn7U5U'),
(5, 'Moon Fall', 'moonfall.jpg', 'Action', '130min', '5.2', 'The world stands on the brink of annihilation when a mysterious force knocks the moon from its orbit and sends it hurtling toward a collision course with Earth. With only weeks before impact, NASA executive Jocinda \"Jo\" Fowler teams up with a man from her past and a conspiracy theorist for an impossible mission into space to save humanity.\r\n	', '2022', 'ivIwdQBlS10'),
(6, 'Red Notice', 'rednotice.jpg', 'Comedy', '158min', '6,4', 'In the world of international crime, an Interpol agent attempts to hunt down and capture the worlds most wanted art thief.', '2021', 'Pj0wz7zu3Ms'),
(7, 'The 355', 'the355.jpg', 'Action', '124min', '5,3', 'CIA agent Mason \"Mace\" Brown joins forces with a rival German agent, a cutting-edge computer specialist and a Colombian psychologist when a top-secret weapon falls into the hands of a group of mercenaries. Together, the four women embark on a breakneck mission to save the world while staying one step ahead of a mysterious figure who is tracking their every move.', '2022', 'SV0s2S9reT0'),
(8, 'Spider-Man No way home', 'spidermannowayhome.jpg', 'Action', '148min', '8,5', 'With Spider-Man`s identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', '2021', 'rt-2cxAiPJk'),
(9, 'Tinder Swindler', 'tinderswindler.jpg', 'Documentary', '120min', '7,2', 'A group of women who were the victims of a dating app based swindler join together in an attempt to hunt him down and recover the millions of dollars that were stolen from them.', '2022', '_R3LWM_Vt70'),
(10, 'The power of a dog', 'thepowerofadog.jpg', 'Drama', '125min', '6,9', 'A domineering rancher responds with mocking cruelty when his brother brings home a new wife and her son, until the unexpected comes to pass.', '2021', 'LRDPo0CHrko');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `login`, `password`) VALUES
(1, 'Paloma', 'ppassosvieirad00@mylangara.ca', 'paloma', '0ab4927588f892febb50915ff54c060c'),
(2, 'Jordan', 'jordan@gmail.com', 'jordan', 'd16d377af76c99d27093abc22244b342'),
(3, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wanna_watch`
--

CREATE TABLE `tb_wanna_watch` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wanna_watch`
--

INSERT INTO `tb_wanna_watch` (`id`, `movie_id`, `user_id`) VALUES
(1, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_login` (`user_login`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `tb_movies`
--
ALTER TABLE `tb_movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `tb_wanna_watch`
--
ALTER TABLE `tb_wanna_watch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_movies`
--
ALTER TABLE `tb_movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_wanna_watch`
--
ALTER TABLE `tb_wanna_watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD CONSTRAINT `tb_comment_ibfk_1` FOREIGN KEY (`user_login`) REFERENCES `tb_user` (`login`),
  ADD CONSTRAINT `tb_comment_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `tb_movies` (`id_movie`);

--
-- Constraints for table `tb_wanna_watch`
--
ALTER TABLE `tb_wanna_watch`
  ADD CONSTRAINT `tb_wanna_watch_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `tb_movies` (`id_movie`),
  ADD CONSTRAINT `tb_wanna_watch_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;