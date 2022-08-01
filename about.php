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
        <p>Gestionnaire de laboratoire de l'IRD de Nouvelle-Calédonie ayant pour objectif d'optimiser le suivi des produits et des déchets.</p>

        <h2>Documentation :</h2>
        <p>Caractéristiques techniques :</p>
        <ul type="1">
            <li>PHP (php-5.6.18)</li>
            <li>MySQL (mysql-5.7.11)</li>
            <li>Hébergé sur une machine (siteLaboChimie.ird.nc) dont l'IP est 10.41.2.136</li>
            <li>Serveur Ubuntu 18</li>
        </ul>
        <p> Développement par Damien JAMET (jamet.damien02@gmail.com) </p>

        <h2>Pistes d'amélioration du service (To Do list) :</h2>
        <ol type="1">
            <li><b>A faire :</b> insérer les données du labo dans la base de données</li>
            <li>Amélioration : créer une/des table(s) (produit_supp, déchet_supp) dans la base de données afin d'avoir un historique de suppression des produits/déchets et pouvoir faire des stats (éventuelles backups)</li>
            <li>Amélioration : Style global (CSS) à revoir</li>
            <li>Amélioration : faire rentrer le plus possible de div sur la même page dans les formulaires</li>
            <li>Fonctionnalité : système de tri des listes (menus déroulants avec coche)</li>
            <li>Fonctionnalité : système de QR code sur les étiquettes des produits/déchets pour faciliter leur gestion</li>
            <li>Fonctionnalité : pouvoir consulter la fiche sécurité de chaque produit</li>
            <li>Fonctionnalité : Alerte liée à la date de péremption du produit</li>
        </ol>

    </div>

</body>
</html>