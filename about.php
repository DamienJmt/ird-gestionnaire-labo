<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>A propos</title>
    <?php include_once $racine .'/include/head.php' ?>
    <?php include_once $racine .'/include/connexion.php' ?>   
</head>
<body>

    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

        <h2>A propos :</h2>
        <p>Gestionnaire de laboratoire pour l'IRD de Nouvelle-Calédonie.</p>

        <h2>Documentation :</h2>
        <h4>Caractéristiques de développement :</h4>
        <ul type="1">
            <li>PHP (php-5.6.18)</li>
            <li>MySQL (mysql-5.7.11)</li>
        </ul>

        <h2>Pistes d'amélioration du service (To Do list) :</h2>
        <ol type="1">
            <li>! Faire fonctionner les boutons retirer !</li>
            <li>Mettre en place un système de tri des listes (menus déroulants avec coche)</li>
            <li>Créer une/des table(s) (produit_supp, déchet_supp) dans la base de données afin d'avoir un historique de suppression des produits/déchets (éventuelles backups)</li>
            <li>Mettre en place un système de QR code sur les étiquettes des produits/déchets pour faciliter leur gestion</li>
        </ol>

    </div>

</body>
</html>