CREATE TABLE `user_produit`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_produit` INT NOT NULL,
    `id_user` INT NOT NULL
);
CREATE TABLE `user_dechet`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_dechet` INT NOT NULL,
    `id_user` INT NOT NULL
);
CREATE TABLE `user`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `prenom` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `initiales` VARCHAR(255) NOT NULL
);
CREATE TABLE `danger_produit`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_produit` INT NULL,
    `id_classe_de_danger` INT NULL
);
CREATE TABLE `danger_dechet`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_dechet` INT NULL,
    `id_classe_de_danger` INT NULL
);
CREATE TABLE `classe_de_danger`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
CREATE TABLE `unite`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL,
    `id_user` INT NULL,
    `id_produit` INT NULL,
    `id_dechet` INT NULL
);
CREATE TABLE `marque`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL,
    `id_produit` INT NULL
);
CREATE TABLE `etagere`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL,
    `id_produit` INT NULL,
    `id_dechet` INT NULL
);
CREATE TABLE `produit`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `reference` VARCHAR(255) NOT NULL,
    `volume` VARCHAR(255) NOT NULL,
    `quantite` INT NOT NULL,
    `retire` TINYINT(1) NOT NULL,
    `date_entree` DATE NULL,
    `remarque` VARCHAR(255) NULL,
    `num` VARCHAR(255) NOT NULL
);
CREATE TABLE `dechet`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `volume` VARCHAR(255) NOT NULL,
    `quantite` INT NOT NULL,
    `date_entree` DATE NOT NULL,
    `remarque` VARCHAR(255) NULL,
    `num` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `danger_produit` ADD CONSTRAINT `danger_produit_id_produit_foreign` FOREIGN KEY(`id_produit`) REFERENCES `produit`(`id`);
ALTER TABLE
    `user_produit` ADD CONSTRAINT `user_produit_id_produit_foreign` FOREIGN KEY(`id_produit`) REFERENCES `produit`(`id`);
ALTER TABLE
    `user_produit` ADD CONSTRAINT `user_produit_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `user_dechet` ADD CONSTRAINT `user_dechet_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `etagere` ADD CONSTRAINT `etagere_id_produit_foreign` FOREIGN KEY(`id_produit`) REFERENCES `produit`(`id`);
ALTER TABLE
    `etagere` ADD CONSTRAINT `etagere_id_dechet_foreign` FOREIGN KEY(`id_dechet`) REFERENCES `dechet`(`id`);
ALTER TABLE
    `danger_produit` ADD CONSTRAINT `danger_produit_id_classe_de_danger_foreign` FOREIGN KEY(`id_classe_de_danger`) REFERENCES `classe_de_danger`(`id`);
ALTER TABLE
    `danger_dechet` ADD CONSTRAINT `danger_dechet_id_classe_de_danger_foreign` FOREIGN KEY(`id_classe_de_danger`) REFERENCES `classe_de_danger`(`id`);
ALTER TABLE
    `unite` ADD CONSTRAINT `unite_id_produit_foreign` FOREIGN KEY(`id_produit`) REFERENCES `produit`(`id`);
ALTER TABLE
    `unite` ADD CONSTRAINT `unite_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `unite` ADD CONSTRAINT `unite_id_dechet_foreign` FOREIGN KEY(`id_dechet`) REFERENCES `dechet`(`id`);
ALTER TABLE
    `marque` ADD CONSTRAINT `marque_id_produit_foreign` FOREIGN KEY(`id_produit`) REFERENCES `produit`(`id`);
ALTER TABLE
    `danger_dechet` ADD CONSTRAINT `danger_dechet_id_dechet_foreign` FOREIGN KEY(`id_dechet`) REFERENCES `dechet`(`id`);
ALTER TABLE
    `user_dechet` ADD CONSTRAINT `user_dechet_id_dechet_foreign` FOREIGN KEY(`id_dechet`) REFERENCES `dechet`(`id`);