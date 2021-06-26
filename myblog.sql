-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2021 at 08:31 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL,
  `publication_date` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enum_status_comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `email`, `creation_date`, `last_update_date`, `publication_date`, `post_id`, `user_id`, `enum_status_comment`) VALUES
(1, 'L\'intelligence Artificielle tout un programme !', 'ls.richard@wanadoo.fr', '2021-05-21 18:20:00', '2021-05-21 18:21:00', '2021-05-21 18:22:00', 1, 1, 2),
(2, 'Faut-il avoir des connaissances en programmation pour devenir développeur web ?', 'marg78&hotmail.fr', '2021-05-21 18:23:00', '2021-05-21 18:24:00', '2021-05-21 18:25:00', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enum_role`
--

CREATE TABLE `enum_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enum_role`
--

INSERT INTO `enum_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'visitor');

-- --------------------------------------------------------

--
-- Table structure for table `enum_status_comment`
--

CREATE TABLE `enum_status_comment` (
  `id` int(11) NOT NULL,
  `enum_status_comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enum_status_comment`
--

INSERT INTO `enum_status_comment` (`id`, `enum_status_comment`) VALUES
(1, 'submitted'),
(2, 'approved'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `enum_status_post`
--

CREATE TABLE `enum_status_post` (
  `id` int(11) NOT NULL,
  `enum_status_post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enum_status_post`
--

INSERT INTO `enum_status_post` (`id`, `enum_status_post`) VALUES
(1, 'drafted'),
(2, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL,
  `publication_date` datetime NOT NULL,
  `enum_status_post` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `headline`, `content`, `creation_date`, `last_update_date`, `publication_date`, `enum_status_post`) VALUES
(1, 'Intelligence Artificielle', 'Plus d\'un tiers des entreprises utilisent une forme d\'intelligence artificielle.', 'Le déploiement de l\'intelligence artificielle dans les entreprises s\'est accentué à la faveur de la pandémie.\r\nC\'est ce qui ressort de l\'enquête menée par IBM mené auprès de 5500 compagnies, dont les sociétés françaises.\r\nDans le détail, les auteurs précisent ainsi que 43% des organisations interrogées ont accéléré leur déploiement l\'an dernier. Au total, près d\'un tiers utilisent au moins une forme d\'intelligence artificielle et par exemple des outils de chatbot ou de traitement de langage naturel.\r\n\r\nLes chefs d\'entreprises font de plus en plus confiance à l\'IA.\r\nParmi les autres enseignements de cette étude, on peut aussi noter une accélération des solutions d\'automatisation. Ainsi, 80% des entreprises indiquent utiliser un logiciel de ce type ou prévoient de le faire au cours des 12 prochains mois.', '2021-05-21 17:28:00', '2021-05-21 00:00:00', '2021-05-21 00:00:00', 1),
(2, 'Développeur Web\r\nla programmation', 'Comment devenir développeur&nbsp;?\r\nLe métier de développeur c\'est quoi&nbsp;?', 'En quoi consiste ce métier&nbsp;?\r\nLe développeur informatique est le pro des langages informatiques, tels que C++ ou Java&nbsp;! Responsable de la programmation, c\'est-à-dire de la production de lignes de code, il rédige et suit un cahier des charges précisant les spécificités techniques à suivre pour créer le programme. Afin de concevoir des programmes informatiques - sur mesure, il participe en amont à l\'analyse des besoins des utilisateurs, puis à la phase d\'essai.\r\nEn aval, il adapte le logiciel à la demande du client en apportant les retouches nécessaires. Le développeur prend en charge la formation des utilisateurs de l\'application et peut même rédiger un guide d\'utilisateur.\r\nPar la suite, il intervient pour effectuer la maintenance ou faire évoluer les programmes. Grâce aux progiciels (des logiciels standards de programmation prêts à être utilisés). Il passe moins de temps à écrire les programmes, si bien que son activité évolue vers plus d\'analyse que de programmation.', '2021-05-21 17:42:00', '2021-05-21 17:43:00', '2021-05-21 17:45:00', 2),
(3, 'Numérique responsable, GreenIT, éco-conception...', 'Un effet de mode ou une nécessité vitale&nbsp;?', 'Nous observons deux tendances (défis) majeures ces dernières années : la transition numérique, accentuée encore plus par la crise sanitaire actuelle, et la transition écologique face au réchauffement climatique et au déclin de la biodiversité.\r\nDe plus en plus d\'acteurs parlent de concilier les deux, au risque de tomber dans une surenchère d\'éléments de langage qui peut vite tourner au \"greenwashing\".\r\nVous vous posez donc la question légitime : le numérique responsable est-il une réelle nécessité ou un simple effet de mode&nbsp;?', '2021-06-01 18:49:00', '2021-06-01 18:50:00', '2021-06-01 18:51:00', 2),
(4, 'Fiverr organise un hackathon d\'étudiants pour améliorer sa plateforme', 'La plateforme veut améliorer sa cybersécurité... et bien plus encore.', 'FIVERR a fait l\'explosion du nombre de freelances un florilège de profils aux compétences des plus importantes pour les entreprises en 2021. Sa plateforme, aux allures de site e-commerce est le rendez-vous parfait (et le plus complet) entre les indépendants du marketing, de la musique, du graphisme et d\'autres domaines, avec les entreprises dans le besoin.\r\nPour continuer de s\'améliorer et fêter son arrivée en France (depuis 2020), la plateforme organise un hackathon les 28, 29 et 30 juin prochain. Un rendez-vous en partenariat avec la Wild Code School qui mettra en avant la créativité et l\'expérience de 500 étudiants pour faire de FIVERR une plateforme plus sécurisée encore et innovante pour les interactions de sa communauté.\r\n\r\nRépondre aux défis d\'une marque mondiale\r\nFIVERR s\'est rapidement placée en référence des plateformes de mises en relation entre freelances et entreprises pour apporter un système le plus simple et optimisé possible, qui rend l\'expérience plus bénéfique à chacun des membres. Aujourd\'hui, plus de 240 000 freelances sont inscrits et couvrent 160 pays.\r\n\"En plus de provenir des quatre coins du monde, les freelances de FIVERR offrent une réelle profondeur de gamme allant du graphisme/design à la data, en passant par le marketing digital, la rédaction/traduction, la vidéo/animation, la musique/audio, la programmation/tech\" explique la plateforme dans un communiqué.', '2021-06-11 14:57:00', '2021-06-11 14:58:00', '2021-06-11 15:00:00', 1),
(5, 'Créer son école digitale : la stratégie des groupes Vivendi, Havas et Bolloré', 'Les groupes Vivendi, Havas et Bolloré ont récemment inauguré leur école digitale innovante GABEREEK. Une initiative unique, lancée en partenariat avec OpenClassrooms.', 'GABEREEK apporte une réponse originale et inspirante aux enjeux de formation, recrutement et développement des talents digitaux au sein de Vivendi et Havas Group, acteurs mondiaux de la culture, du divertissement, des médias et de la communication, et du Groupe Bolloré, leader du transport et de la logistique.\r\n\r\nGenèse de GABEREEK - Ecole digitale innovante : le besoin de mieux accompagner les talents tech.\r\nIl faut remonter trois voire quatre années en arrière. Les agences d\'Havas Group ont fait le constat, partagé par les groupes Vivendi et Bolloré, que dans un contexte de transformation digitale des organisations, l\'offre de formations solides aux métiers de la tech était trop restreinte pour répondre aux besoins croissants en talents digitaux sur lesquels ces groupes misent pour leur essor.\r\nPar ailleurs, ils souhaitaient répondre à l\'enjeu de développement de ces profils, une fois recrutés. Ces derniers sont en effet particulièrement demandeurs de mobilités, d\'opportunités de changements en interne et d\'upskilling. Il leur est alors apparu évident de joindre leurs forces pour créer une école digitale innovante qui répond à ces enjeux partagés.', '2021-06-11 15:18:00', '2021-06-11 15:19:00', '2021-06-11 15:20:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL,
  `publication_date` datetime NOT NULL,
  `enum_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `nickname`, `email`, `password`, `creation_date`, `last_update_date`, `publication_date`, `enum_role`) VALUES
(1, 'Laurence', 'Richard', 'Lolo', 'ls.richard@wanadoo.fr', 'dev', '2021-05-21 18:12:00', '2021-05-21 18:13:00', '2021-05-21 18:14:00', 1),
(2, 'Margaux', 'Labrado', 'Gomar', 'marg78@hotmail.fr', 'toto', '2021-05-21 18:15:00', '2021-05-21 18:16:00', '2021-05-21 18:17:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enum_role`
--
ALTER TABLE `enum_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enum_status_comment`
--
ALTER TABLE `enum_status_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enum_status_post`
--
ALTER TABLE `enum_status_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enum_role` (`enum_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enum_role`
--
ALTER TABLE `enum_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enum_status_comment`
--
ALTER TABLE `enum_status_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enum_status_post`
--
ALTER TABLE `enum_status_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
