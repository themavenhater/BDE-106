-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Avril 2017 à 15:52
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `contenu` text NOT NULL,
  `date_time_edition` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dislikes`
--

INSERT INTO inscription (`id`, `id_article`, `id_membre`) VALUES
(2, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(3) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `location` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `prix` int(5) NOT NULL,
  `Descr` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `type`, `location`, `date`, `prix`, `Descr`) VALUES
(1, 'sdfsdf', 'Culturel', 'TIM', '2017-04-21', 232, 'sdfsdf'),
(2, 'sdfsdfsdf', 'A l''Ã©cole', 'TIP', '2017-04-15', 201, 'belakce^scsdm'),
(3, 'dfsdf', 'Festif', 'JIJ', '2017-04-20', 232, 'sdsdfsdfsd'),
(4, 'morero', 'Culturel', 'ALG', '2020-03-20', 232, 'EFSDFSDF'),
(5, 'morero', 'Culturel', 'ALG', '2020-03-20', 232, 'EFSDFSDF'),
(6, 'rere', 'Voyage', 'TIM', '2017-04-22', 232, 'RGHTRTHTHT'),
(7, 'rere', 'Voyage', 'TIM', '2017-04-22', 232, 'RGHTRTHTHT'),
(8, 'rere', 'Voyage', 'TIM', '2017-04-22', 232, 'RGHTRTHTHT'),
(9, 'rere', 'Voyage', 'TIM', '2017-04-22', 232, 'RGHTRTHTHT'),
(10, 'qdqsd', 'Festif', 'BEJ', '2017-04-15', 232, 'bdfgdfiugdfg');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `likes`
--

INSERT INTO `likes` (`id`, `id_article`, `id_membre`) VALUES
(3, 12, 5),
(4, 9, 5),
(5, 11, 5),
(7, 5, 5),
(9, 8, 5);

-- --------------------------------------------------------

--
-- Structure de la table `past_event`
--

CREATE TABLE `past_event` (
  `id` int(3) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `location` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `prix` int(5) NOT NULL,
  `Descr` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `descr` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `p_name`, `price`, `descr`) VALUES
(2, 'zdc', 12, 'dede'),
(5, 'zdc', 12, 'dede'),
(7, 'belka', 3, 'yakou'),
(10, 'belka', 3, 'yakou2');

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

CREATE TABLE `proposition` (
  `id` int(4) NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `Description` varchar(250) COLLATE utf8_bin NOT NULL,
  `Date` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `proposition`
--

INSERT INTO `proposition` (`id`, `type`, `Description`, `Date`) VALUES
(1, 'husker', 'adzd', '04:07:17pm'),
(2, 'starbuck', 'sdvsdvsd', '04:07:24pm'),
(5, 'Sportives', 'kgkgyuyfgiutfutf_igÃ ohpoj', '2017-04-19 08:42:20am'),
(4, 'Sportives', 'belkacem_test_test', '2017-04-18 05:31:34pm'),
(6, 'Sportives', 'testetststetseufygi', '2017-04-19 08:42:56am'),
(7, 'Voyages', 'test22222', '2017-04-19 08:43:30am'),
(8, 'Sportives', 'testststkhg8888', '2017-04-19 08:44:45am'),
(9, 'FÃ©stives', 'zlefhzoemifhze', '2017-04-19 03:09:01pm'),
(10, 'Sportives', 'butotn 12344', '2017-04-19 03:13:35pm'),
(11, 'Sportives', 'ID', '2017-04-19 03:15:22pm'),
(12, 'Sportives', 'dayer valider', '2017-04-19 03:16:03pm'),
(13, 'Sportives', '', '2017-04-19 06:05:04pm'),
(14, 'Sportives', 'je veux un evenement de sport za3ma competition ta3kick boxing est ce que c''est possible ?', '2017-04-19 08:50:16pm'),
(15, 'Sportives', 'zebi', '2017-04-19 09:43:09pm'),
(16, 'Sportives', '', '2017-04-19 11:23:25pm');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dislikes`
--
ALTER TABLE inscription
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `past_event`
--
ALTER TABLE `past_event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dislikes`
--
ALTER TABLE inscription
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `past_event`
--
ALTER TABLE `past_event`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
