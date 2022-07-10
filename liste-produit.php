<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Liste du stock</title>
    <?php include_once $racine .'/include/head.php' ?>
    <?php include_once $racine .'/include/connexion.php' ?>   
</head>
<body>

    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

        <h2>Liste de tous les produits du stock :</h2>

        <div>
        <a href="ajout-produit.php"><button class="bouton-ajouter">Ajouter un produit dans le stock</button></a>
        </div>

        <table id="table1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Conditionnement</th>
                    <th>Lieu</th>
                    <th>Etagère</th>
                    <th>Unité</th>
                    <th>Classe de danger</th>
                    <th>Remarque</th>
                    <th class="reduit" style="text-align: center;">Voir</th>
                    <th class="reduit" style="text-align: center;">Retirer</th>
                    <th class="reduit" style="text-align: center;">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
                $mysqli->set_charset("utf8");
                $requete = "SELECT * FROM produit WHERE entame=0";
                $resultat = $mysqli->query($requete);
                while ($ligne = $resultat->fetch_assoc()) 
                {

                    include_once $racine .'/fonctions/req-produit.php';

                    ?>

                    <?php include_once $racine .'/include/ligne-stock.php';?>
                    
                    <?php

                }
                $mysqli->close();
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>
