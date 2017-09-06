-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 06 Septembre 2017 à 13:54
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `adeline_melodie_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `cp` int(10) NOT NULL,
  `ville` text NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mail` text NOT NULL,
  `tel` int(20) NOT NULL,
  `date_inscription` date NOT NULL,
  `mot_de_passe` text NOT NULL,
  `session` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaires` text NOT NULL,
  `date_commentaires` date NOT NULL,
  `notes` int(11) NOT NULL,
  `id_clients` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_restaurants` int(11) NOT NULL,
  `id_commentaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `adresse` text NOT NULL,
  `cp` int(10) NOT NULL,
  `ville` text NOT NULL,
  `tel` text NOT NULL,
  `description` text NOT NULL,
  `dateouverture` date NOT NULL,
  `datedemiseàjour` date NOT NULL,
  `id_commentaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `restaurants`
--

INSERT INTO `restaurants` (`id`, `nom`, `adresse`, `cp`, `ville`, `tel`, `description`, `dateouverture`, `datedemiseàjour`, `id_commentaires`) VALUES
(1, 'Auberge de Bagatelle', '489 Avenue Bollée', 72100, 'Le Mans', ' 02 43 85 25 73', 'Ouvert le dimanche et le lundi le midi de 12h à 14h30 ; le mardi, le jeudi et le vendredi le midi de 12h à 14h30 et le soir de 19h à 22h ; le samedi midi de 12h à 14h et le soir de 19h à 22h. Avec ou sans rendez-vous. Menus de 14 € à 34 €. Menu enfant : 10 €. Vin au verre. American Express, Chèque Restaurant. Accueil des groupes (50 personnes maximum). Terrasse.\r\nRead more at https://www.petitfute.com/v28477-le-mans-72000/c1165-restaurants/c4-cuisine-francaise/390468-auberge-de-bagatelle.html#Hw7lHwDqR5JXDqtu.99', '2017-03-29', '2017-08-31', 1),
(2, 'La Fontaine des Saveurs', '43 rue d\'Arcole', 72000, 'Le Mans', '02.43.24.55.91', 'La Fontaine des Saveurs vous réserve un accueil des plus chaleureux au cœur de la ville du Mans. Dans une ambiance chic et sobre, l’établissement vous invite à partager son goût pour le raffinement et la simplicité. Installez-vous et appréciez une agréable pause gastronomique !\r\n', '2015-06-21', '2017-08-31', 2),
(3, 'La Plancha Gourmande', '93 Grande Rue', 72000, 'Le Mans', '02.43.80.74.67', 'bon restaurant calme et chaleureux', '2014-12-12', '2017-08-31', 3),
(4, 'La Vieille Porte', '12 rue de la vieille porte', 72100, 'Le Mans', '02.43.24.03.76', 'Située en contre bas du Vieux Mans, la Vieille Porte s’est muée en bistrot élégant contemporain, la déco comme les poutres et les pierres apparentes, les tons beiges et gris rendent l’atmosphère chaleureuse et intime. Côté cuisine on retrouve le sérieux et la maîtrise de plats qui ont fait le succès de la grande sœur, la Baraque à Bœuf, place Saint-Pierre.', '2016-07-25', '2017-08-31', 4),
(5, 'Le Bellifontain', '110 Avenue du Général Leclerc', 72000, 'Le Mans', '02.43.24.65.38', 'Notre restaurant vous propose une cuisine soignée riche en saveurs.\r\n\r\nNotre salon peu accueillir jusqu\'à 25 personnes pour l\'organisation de vos événements.\r\n\r\nVous avez la possibilité de savourer nos spécialités sur notre terrasse en compagnie de vos proches.\r\n\r\nRéservez dès aujourd\'hui une table, dans notre espace où la bonne humeur est au rendez-vous!', '2013-05-12', '2017-08-31', 5),
(6, 'Le Bistrot des Gourmets', '72000', 72000, 'Le Mans', '02.43.43.06.86', 'Toute l\'équipe du restaurant Bistrot des Gourmets est heureuse de vous accueillir et vous présente la Nouvelle carte pour l\'été 2014. Tous nos plats sont élaborés avec des produits frais. Votre satisfaction est aussi la nôtre, c\'est pourquoi nous avons sélectionné pour vous des viandes label rouge et de la charcuterie de tradition sarthoise. Voici Quelques uns de nos partenaires : Boucherie charcuterie Mr Doire Mickael à Changé. Héliciculteur (éleveur cfescargots) Mr Millot Hugues à St Mars sous Ballon. Boulangerie \'La miette de pain\' Nadège et Fabrice Bourgine à Savigné l\'évêque Tous nos plats hors formules sont à 15,90 € hormis l\'entrecôte 300g 18,90 € ', '2016-01-07', '2017-08-31', 1),
(7, 'Le Grenier à Sel', '26 Place de l’Éperon', 72000, 'Le Mans', '02.43.23.26.30', 'Le restaurant Le Grenier à Sel, au Mans, vous propose une cuisine gastronomique et traditionnelle, et est situé dans le centre-ville aux portes du Vieux Mans dans le département de la Sarthe (72).\r\n\r\nNotre chef vous propose une cuisine actuelle et raffinée avec des plats aux saveurs authentiques, tout cela dans un cadre contemporain.\r\n\r\nNotre équipe est composée de Jérome Foulard en cuisine et Frédéric Morançais en salle. Ils souhaitent vous faire découvrir une cuisine de saison en accord avec les vins.\r\n\r\nLe restaurant est équipé de la climatisation pour améliorer votre confort. Nous vous offrons un accueil chaleureux et un service de qualité. Les tables sont espacées afin de vous assurer calme et discrétion.\r\n\r\nNotre restaurant et équipe vous attendent pour partager des moments privilégiés. Pour obtenir de plus amples renseignements, contactez-nous, nous sommes à votre disposition.', '2014-09-27', '2017-08-31', 12),
(8, 'Le Lisboa', '80 Avenue Bollée', 72000, 'Le mans', '09.81.42.98.92', 'Venez découvrir ici la cuisine portugaise traditionnelle. Au menu : de la morue à toutes les sauces, des plats faits maison cuisinés en direct et du vin d\'importation. Seulement voilà, on se trouve ici dans un restaurant familial où le service est loin d\'être impeccable (un effet de la malchance peut-être) : une heure d\'attente pour avoir les plats, pas de boisson proposée. Un conseil : offrez-vous un assortiment de tapas pour patienter (chorizo, beignets de morue, de crevettes, de poulpe...). On est cependant servis avec le sourire, de manière très agréable et les cafés ont été offerts en réparation. Heureusement, et c\'est bien là le principal, les plats sont excellents et copieux : le picanha (faux-filet, banane frie, haricots noirs avec leur sauce au porto), le biloque (escalope de boeuf, frites, oeufs, salade)... Accompagnez le tout d\'un vinho tinto et le tour est joué.\r\n', '2017-05-15', '2017-08-31', 7),
(9, 'Le Nez Rouge', '107 Grande Rue', 72000, 'Le Mans', '02.43.24.27.26', 'Venez déguster nos plats et spécialités, renouvelés à chaque saison.\r\n\r\nNous élaborons notre cuisine a base de produits de saison frais pour nos différents menus tels que les menus Gourmand et Prestige. Nos produits sont sélectionnés chaque jour par le chef cuisinier pour vous assurer qualité et fraîcheur.\r\n\r\nNous vous proposons une formule à l\'ardoise tous les midis à 14€. mais aussi vous trouverez nos menus à 21,90€ et 32€ tous les midis et soirs.\r\n\r\nVenez vite découvrir nos menus et carte, un accueil chaleureux vous sera réservé. Vous profiterez de notre terrasse en été et nous acceptons vos petits animaux.', '2015-04-16', '2017-08-31', 11),
(10, 'Le Parvis Saint Hilaire', '7 Place Saint Hilaire', 72000, 'Le Mans', '02.43.28.92.55', 'Le chef a à coeur d\'utiliser des produits de grande qualité nutritionnelle et environnementale afin de faire une cuisine saine et savoureuse. Sa philosophie s\'articule sur 3 axes:\r\n- protection de la planète\r\n- respect de l\'animal, et ce, tout au long des étapes de sa vie\r\n- respect de l\'homme et transmission du savoir', '2016-03-18', '2017-08-31', 10),
(11, 'Le Tablier de Jaurès', '138 Avenue Jean Jaurès', 72100, 'Le Mans', '02.43.78.93.81', 'Non loin du centre-ville, cet agréable restaurant est niché dans une ancienne cordonnerie, à deux pas du tramway. Après dix ans passés dans l\'agriculture, le patron revient à ses premières amours et compose une belle cuisine dans l\'air du temps, où le terroir est en bonne place. Service sympathique.', '2017-06-20', '2017-08-31', 6),
(12, 'L\'un des Sens', '9 rue du Dr Leroy', 72100, 'Le Mans', '02.43.80.94.81', 'Connaissant la très bonne réputation de ce restaurant et attiré par un plat du jour alléchant nous nous sommes arrêtés pour déjeuner. Service excellent, plat très goûteux accompagné à merveille d\'un vin sélectionné par notre serveur : une adresse qui mérite amplement sa réputation ! Nous y reviendrons pour déguster les différents vins ...', '2017-04-17', '2017-08-31', 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
