-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 19 mars 2018 à 22:43
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `repport` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `repport`, `author`, `comment`, `comment_date`) VALUES
(41, 36, NULL, 'hugo', '<p>slt mon pti gars</p>', '2018-03-07 16:13:47'),
(51, 20, NULL, 'moiiiiiiiiiiiiiiiiiiiiii', '<p>toudoudoum bim boum bap</p>', '2018-03-08 22:50:57'),
(52, 36, NULL, 'hugo', '<p>slt mon pti&nbsp;</p>', '2018-03-09 03:20:42'),
(53, 37, NULL, 'CAMILLE ', '<p>voyons ton projet !!! il est super!!!!!!</p>', '2018-03-09 21:16:56'),
(57, 8, NULL, 'Lucas', ' Dès le titre, nous pouvons sentir la sueur versée à l\'élaboration de ce qui s\'apparente être une des oeuvres majeures de la cyber architecture. Un De Vinci en puissance s\'actualise de jour en jour ! Gloire à l\'artiste !', '2018-03-10 23:11:19');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `pass`, `mail`) VALUES
(1, 'kenpa', 'e10adc3949ba59abbe56e057f20f883e', 'cha.hugo@yahoo.fr');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(42, 'Age d\'or', '<p style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">Quelqu\'une des voix&nbsp;<br />Toujours ang&eacute;lique&nbsp;<br />- Il s\'agit de moi, -&nbsp;<br />Vertement s\'explique :<br /><br />Ces mille questions&nbsp;<br />Qui se ramifient&nbsp;<br />N\'am&egrave;nent, au fond,&nbsp;<br />Qu\'ivresse et folie ;<br /><br />Reconnais ce tour&nbsp;<br />Si gai, si facile :&nbsp;<br />Ce n\'est qu\'onde, flore,&nbsp;<br />Et c\'est ta famille !<br /><br />Puis elle chante. &Ocirc;&nbsp;<br />Si gai, si facile,&nbsp;<br />Et visible &agrave; l\'oeil nu...&nbsp;<br />- Je chante avec elle, -<br /><br />Reconnais ce tour&nbsp;<br />Si gai, si facile,&nbsp;<br />Ce n\'est qu\'onde, flore,&nbsp;<br />Et c\'est ta famille !... etc...<br /><br />Et puis une voix&nbsp;<br />- Est-elle ang&eacute;lique ! -&nbsp;<br />Il s\'agit de moi,&nbsp;<br />Vertement s\'explique ;&nbsp;<br /><br />Et chante &agrave; l\'instant&nbsp;<br />En soeur des haleines :&nbsp;<br />D\'un ton Allemand,&nbsp;<br />Mais ardente et pleine :<br /><br />Le monde est vicieux ;&nbsp;<br />Si cela t\'&eacute;tonne !&nbsp;<br />Vis et laisse au feu&nbsp;<br />L\'obscure infortune.<br /><br />&Ocirc; ! joli ch&acirc;teau !&nbsp;<br />Que ta vie est claire !&nbsp;<br />De quel Age es-tu,&nbsp;<br />Nature princi&egrave;re&nbsp;<br />De notre grand fr&egrave;re ! etc...<br /><br />Je chante aussi, moi :&nbsp;<br />Multiples soeurs ! voix&nbsp;<br />Pas du tout publiques !&nbsp;<br />Environnez-moi&nbsp;<br />De gloire pudique... etc...</p>\r\n<p><a style=\"text-decoration-line: none; font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px; color: #003399 !important;\" href=\"http://www.poesie-francaise.fr/poemes-arthur-rimbaud/\">Arthur Rimbaud</a><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">.</span><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\"><br /><br /></span></p>', '2018-03-18 04:57:34'),
(43, 'Bonne pensée du matin', '<p style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">&Agrave; quatre heures du matin, l\'&eacute;t&eacute;,&nbsp;<br />Le sommeil d\'amour dure encore.&nbsp;<br />Sous les bosquets l\'aube &eacute;vapore&nbsp;<br />L\'odeur du soir f&ecirc;t&eacute;.<br /><br />Mais l&agrave;-bas dans l\'immense chantier&nbsp;<br />Vers le soleil des Hesp&eacute;rides,&nbsp;<br />En bras de chemise, les charpentiers&nbsp;<br />D&eacute;j&agrave; s\'agitent.<br /><br />Dans leur d&eacute;sert de mousse, tranquilles,&nbsp;<br />Ils pr&eacute;parent les lambris pr&eacute;cieux&nbsp;<br />O&ugrave; la richesse de la ville&nbsp;<br />Rira sous de faux cieux.<br /><br />Ah ! pour ces Ouvriers charmants&nbsp;<br />Sujets d\'un roi de Babylone,&nbsp;<br />V&eacute;nus ! laisse un peu les Amants,&nbsp;<br />Dont l\'&acirc;me est en couronne.<br /><br />&Ocirc; Reine des Bergers !&nbsp;<br />Porte aux travailleurs l\'eau-de-vie,&nbsp;<br />Pour que leurs forces soient en paix&nbsp;<br />En attendant le bain dans la mer, &agrave; midi.</p>\r\n<p><a style=\"text-decoration-line: none; font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px; color: #003399 !important;\" href=\"http://www.poesie-francaise.fr/poemes-arthur-rimbaud/\">Arthur Rimbaud</a><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">.</span><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\"><br /></span></p>', '2018-03-18 04:58:34'),
(44, ' Le cœur volé', '<p style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">Mon triste coeur bave &agrave; la poupe,&nbsp;<br />Mon coeur couvert de caporal :&nbsp;<br />Ils y lancent des jets de soupe,&nbsp;<br />Mon triste coeur bave &agrave; la poupe :&nbsp;<br />Sous les quolibets de la troupe&nbsp;<br />Qui pousse un rire g&eacute;n&eacute;ral,&nbsp;<br />Mon triste coeur bave &agrave; la poupe,&nbsp;<br />Mon coeur couvert de caporal !<br /><br />Ithyphalliques et pioupiesques&nbsp;<br />Leurs quolibets l\'ont d&eacute;prav&eacute; !&nbsp;<br />Au gouvernail on voit des fresques&nbsp;<br />Ithyphalliques et pioupiesques.&nbsp;<br />&Ocirc; flots abracadabrantesques,&nbsp;<br />Prenez mon coeur, qu\'il soit lav&eacute; !&nbsp;<br />Ithyphalliques et pioupiesques&nbsp;<br />Leurs quolibets l\'ont d&eacute;prav&eacute; !<br /><br />Quand ils auront tari leurs chiques,&nbsp;<br />Comment agir, &ocirc; coeur vol&eacute; ?&nbsp;<br />Ce seront des hoquets bachiques&nbsp;<br />Quand ils auront tari leurs chiques :&nbsp;<br />J\'aurai des sursauts stomachiques,&nbsp;<br />Moi, si mon coeur est raval&eacute; :&nbsp;<br />Quand ils auront tari leurs chiques&nbsp;<br />Comment agir, &ocirc; coeur vol&eacute; ?</p>\r\n<p><a style=\"text-decoration-line: none; font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px; color: #003399 !important;\" href=\"http://www.poesie-francaise.fr/poemes-arthur-rimbaud/\">Arthur Rimbaud</a><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\">.</span><span style=\"font-family: Helvetica, Arial, Tahoma, sans-serif; font-size: 15.2px;\"><br /></span></p>', '2018-03-18 04:59:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
