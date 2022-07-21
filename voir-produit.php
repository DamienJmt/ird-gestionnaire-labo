<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Détails du produit</title>
    <?php include_once $racine .'/include/head.php' ?>  
    <?php include_once $racine .'/include/connexion.php' ?>
</head>
<body>
    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

    <h2>Vous pouvez ici voir et modifier les informations du produit :</h2>

    <?php
        $id = $_POST['id'];
        $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
        $mysqli->set_charset("utf8");
        $requete = "SELECT * FROM produit WHERE id=$id";
        $resultat = $mysqli->query($requete);
        while ($ligne = $resultat->fetch_assoc()) 
        {

            include_once $racine .'/fonctions/req-produit.php';
            ?>
            <?php include_once $racine .'/include/form-produit.php' ?>
            <?php

        }
        $mysqli->close();
    ?>

    
    </div>
    
</body>
</html>