CREATE TABLE `user`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `prenom` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `initiales` VARCHAR(255) NOT NULL,
    `id_unite` INT NOT NULL
);
ALTER TABLE
    `user` ADD INDEX `user_id_unite_index`(`id_unite`);
CREATE TABLE `classe_de_danger`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
CREATE TABLE `unite`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
CREATE TABLE `marque`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
CREATE TABLE `etagere`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL,
    `id_lieu` INT NOT NULL
);
ALTER TABLE
    `etagere` ADD INDEX `etagere_id_lieu_index`(`id_lieu`);
CREATE TABLE `produit`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255) NOT NULL,
    `volume` VARCHAR(255) NOT NULL,
    `quantite` INT NOT NULL,
    `date_entree` DATE NULL,
    `date_sortie` DATE NULL,
    `remarque` VARCHAR(255) NULL,
    `num` VARCHAR(255) NULL,
    `id_marque` INT NOT NULL,
    `id_etagere` INT NOT NULL,
    `id_user_entree` INT NOT NULL,
    `entame` TINYINT(1) NULL,
    `id_user_sortie` INT NULL,
    `id_classe_de_danger` INT NOT NULL
);
ALTER TABLE
    `produit` ADD INDEX `produit_id_marque_index`(`id_marque`);
ALTER TABLE
    `produit` ADD INDEX `produit_id_etagere_index`(`id_etagere`);
ALTER TABLE
    `produit` ADD INDEX `produit_id_user_entree_index`(`id_user_entree`);
ALTER TABLE
    `produit` ADD INDEX `produit_id_user_sortie_index`(`id_user_sortie`);
ALTER TABLE
    `produit` ADD INDEX `produit_id_classe_de_danger_index`(`id_classe_de_danger`);
CREATE TABLE `dechet`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `volume` VARCHAR(255) NOT NULL,
    `quantite` INT NOT NULL,
    `date_entree` DATE NOT NULL,
    `remarque` VARCHAR(255) NULL,
    `num` VARCHAR(255) NOT NULL,
    `id_classe_de_danger` INT NOT NULL,
    `id_etagere` INT NOT NULL,
    `id_user_entree` INT NOT NULL
);
ALTER TABLE
    `dechet` ADD INDEX `dechet_id_classe_de_danger_index`(`id_classe_de_danger`);
ALTER TABLE
    `dechet` ADD INDEX `dechet_id_etagere_index`(`id_etagere`);
ALTER TABLE
    `dechet` ADD INDEX `dechet_id_user_entree_index`(`id_user_entree`);
CREATE TABLE `lieu`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `produit` ADD CONSTRAINT `produit_id_user_entree_foreign` FOREIGN KEY(`id_user_entree`) REFERENCES `user`(`id`);
ALTER TABLE
    `produit` ADD CONSTRAINT `produit_id_user_sortie_foreign` FOREIGN KEY(`id_user_sortie`) REFERENCES `user`(`id`);
ALTER TABLE
    `dechet` ADD CONSTRAINT `dechet_id_user_entree_foreign` FOREIGN KEY(`id_user_entree`) REFERENCES `user`(`id`);
ALTER TABLE
    `produit` ADD CONSTRAINT `produit_id_etagere_foreign` FOREIGN KEY(`id_etagere`) REFERENCES `etagere`(`id`);
ALTER TABLE
    `dechet` ADD CONSTRAINT `dechet_id_etagere_foreign` FOREIGN KEY(`id_etagere`) REFERENCES `etagere`(`id`);
ALTER TABLE
    `produit` ADD CONSTRAINT `produit_id_classe_de_danger_foreign` FOREIGN KEY(`id_classe_de_danger`) REFERENCES `classe_de_danger`(`id`);
ALTER TABLE
    `dechet` ADD CONSTRAINT `dechet_id_classe_de_danger_foreign` FOREIGN KEY(`id_classe_de_danger`) REFERENCES `classe_de_danger`(`id`);
ALTER TABLE
    `user` ADD CONSTRAINT `user_id_unite_foreign` FOREIGN KEY(`id_unite`) REFERENCES `unite`(`id`);
ALTER TABLE
    `produit` ADD CONSTRAINT `produit_id_marque_foreign` FOREIGN KEY(`id_marque`) REFERENCES `marque`(`id`);
ALTER TABLE
    `etagere` ADD CONSTRAINT `etagere_id_lieu_foreign` FOREIGN KEY(`id_lieu`) REFERENCES `lieu`(`id`);