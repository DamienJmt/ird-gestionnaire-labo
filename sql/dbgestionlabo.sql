-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 18 Juillet 2022 à 21:09
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbgestionlabo`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe_de_danger`
--

CREATE TABLE `classe_de_danger` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classe_de_danger`
--

INSERT INTO `classe_de_danger` (`id`, `libelle`) VALUES
(1, 'CORROSIF '),
(2, 'INFLAMMABLE '),
(3, 'COMBURANT '),
(4, 'TOXIQUE   '),
(5, 'CMR '),
(6, 'DANGEREUX POUR LʼENVIR. '),
(7, 'NOCIF '),
(8, 'CORR+TOXIQUE '),
(9, 'CORR+TOX+CMR '),
(10, 'COMB+TOX '),
(11, 'INFL+TOX '),
(12, 'COR+TOX+CMR+NOC+ENV+COM '),
(13, 'INFL + IRR / NOC '),
(14, 'DANGEREUX à LONG TERME / TOXIQUE '),
(15, 'COMB+TOX+CORR '),
(16, 'CORR+IRR '),
(17, 'CORR+INFL '),
(18, 'CORR+ENV ');

-- --------------------------------------------------------

--
-- Structure de la table `dechet`
--

CREATE TABLE `dechet` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `date_entree` date NOT NULL,
  `remarque` varchar(255) DEFAULT NULL,
  `num` varchar(255) NOT NULL,
  `id_classe_de_danger` int(10) NOT NULL,
  `id_etagere` int(10) NOT NULL,
  `id_user_entree` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dechet`
--

INSERT INTO `dechet` (`id`, `nom`, `volume`, `date_entree`, `remarque`, `num`, `id_classe_de_danger`, `id_etagere`, `id_user_entree`) VALUES
(1, 'Dechet nutritif', '30L', '2022-07-01', 'Remarque du déchet.', 'DE 6', 6, 10, 1),
(2, 'Dechet chromate', '20L', '2022-07-04', 'Autre remarque du déchet', 'DE 7', 6, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etagere`
--

CREATE TABLE `etagere` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_lieu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etagere`
--

INSERT INTO `etagere` (`id`, `libelle`, `id_lieu`) VALUES
(1, 'A1 ', 1),
(2, 'A2 ', 1),
(3, 'A3 ', 1),
(4, 'A4 ', 1),
(5, 'A5 ', 1),
(6, 'B1 ', 1),
(7, 'B2 ', 1),
(8, 'B3 ', 1),
(9, 'B4 ', 1),
(10, 'B5 ', 1),
(11, 'C1 ', 1),
(12, 'C2 ', 1),
(13, 'C3 ', 1),
(14, 'C4 ', 1),
(15, 'C5 ', 1),
(16, 'D1 ', 1),
(17, 'D2 ', 1),
(18, 'D3 ', 1),
(19, 'D4 ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`id`, `libelle`) VALUES
(1, 'INCONNU'),
(2, 'Local Acide'),
(3, 'Local Solvants');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `libelle`) VALUES
(1, 'PROLABO '),
(2, 'AJAX '),
(3, 'LABOSI '),
(4, 'MESACHIMIE '),
(5, 'FISHER '),
(6, 'MERCK '),
(7, 'INCONNU '),
(8, 'UNIVAR '),
(9, 'CARLO ERBA '),
(10, 'TECHCAL ');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `date_entree` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `remarque` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `id_marque` int(10) NOT NULL,
  `id_etagere` int(10) NOT NULL,
  `id_unite` int(10) NOT NULL,
  `id_user_entree` int(10) NOT NULL,
  `entame` tinyint(1) DEFAULT NULL,
  `id_user_sortie` int(10) DEFAULT NULL,
  `id_classe_de_danger` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `reference`, `volume`, `date_entree`, `date_sortie`, `remarque`, `num`, `id_marque`, `id_etagere`, `id_unite`, `id_user_entree`, `entame`, `id_user_sortie`, `id_classe_de_danger`) VALUES
(1, 'ACETONE', 'N/2271/PB15', '1L', '2022-07-06', NULL, 'Ceci est une remarque.', NULL, 2, 12, 1, 2, 0, NULL, 2),
(2, 'ETHANOL', 'AJA214-2.5L', '2,5L', '2022-07-04', '2022-07-06', 'Ceci est une autre remarque.', 'PR 11', 8, 7, 1, 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `unite`
--

CREATE TABLE `unite` (
  `id` int(10) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `unite`
--

INSERT INTO `unite` (`id`, `libelle`) VALUES
(1, 'LAMA '),
(2, 'ENTROPIE '),
(3, 'MIO '),
(4, 'LOCEAN '),
(5, 'IMBE '),
(6, 'IMPMC '),
(7, 'AMAP '),
(8, 'IFREMER '),
(9, 'IAC '),
(10, 'CNRS '),
(11, 'AEL '),
(12, 'IAC/KL '),
(13, 'IAC/Solveg '),
(14, 'IAC/NR '),
(15, 'IAC/JD '),
(16, 'IAC/AL '),
(17, 'IAC/POCQ ');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `initiales` varchar(255) NOT NULL,
  `id_unite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `initiales`, `id_unite`) VALUES
(1, 'JAMET', 'Damien', 'damien.jamet@ird.fr', 'damien1', 'DJ', 1),
(2, 'JAMET', 'Léocadie', 'leocadie.jamet@ird.fr', 'leo1', 'LJ', 1),
(3, 'LOUIS', 'Jean', 'jean.louis@ird.fr', 'jean1', 'JL', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classe_de_danger`
--
ALTER TABLE `classe_de_danger`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dechet`
--
ALTER TABLE `dechet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_entree` (`id_user_entree`),
  ADD KEY `id_etagere` (`id_etagere`),
  ADD KEY `id_classe_de_danger` (`id_classe_de_danger`);

--
-- Index pour la table `etagere`
--
ALTER TABLE `etagere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lieu` (`id_lieu`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_classe_de_danger` (`id_classe_de_danger`),
  ADD KEY `id_user_sortie` (`id_user_sortie`),
  ADD KEY `id_user_entree` (`id_user_entree`),
  ADD KEY `id_etagere` (`id_etagere`),
  ADD KEY `id_marque` (`id_marque`),
  ADD KEY `id_unite` (`id_unite`);

--
-- Index pour la table `unite`
--
ALTER TABLE `unite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unite` (`id_unite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `dechet`
--
ALTER TABLE `dechet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `etagere`
--
ALTER TABLE `etagere`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `unite`
--
ALTER TABLE `unite`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `dechet`
--
ALTER TABLE `dechet`
  ADD CONSTRAINT `dechet_ibfk_1` FOREIGN KEY (`id_classe_de_danger`) REFERENCES `classe_de_danger` (`id`),
  ADD CONSTRAINT `dechet_ibfk_2` FOREIGN KEY (`id_etagere`) REFERENCES `etagere` (`id`),
  ADD CONSTRAINT `dechet_ibfk_3` FOREIGN KEY (`id_user_entree`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `etagere`
--
ALTER TABLE `etagere`
  ADD CONSTRAINT `etagere_ibfk_1` FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_etagere`) REFERENCES `etagere` (`id`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_user_entree`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`id_user_sortie`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`id_classe_de_danger`) REFERENCES `classe_de_danger` (`id`),
  ADD CONSTRAINT `produit_ibfk_6` FOREIGN KEY (`id_unite`) REFERENCES `unite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_unite`) REFERENCES `unite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
