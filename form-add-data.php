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
    <?php
        if(isset($_SESSION['add']))
        {
            echo '<script> alert("'.$_SESSION['add'].'"); </script>';
            unset($_SESSION['add']);
        }
    ?>

    <div class="article">

        <h2>Veuillez entrer les informations à ajouter :</h2>

        <form action="fonctions/add-data.php" method="post">

        <div>
            <label>Ajouter le champ :</label>
            <input type="text" name="data" id="data" required="required">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('data').value = ''">

            <label>Dans la table :</label>
            <select name="table" id="table" required="required">
                <option value="classe_de_danger">Classe de danger</option>
                <option value="etagere">Etagère</option>
                <option value="lieu">Lieu</option>
                <option value="marque">Marque</option>
                <option value="unite">Unité</option>
            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('table').value = ''">

            <br>
            <br>
            <p>Exemple :<p>
            <p>Ajouter le champ : C2, Dans la table : Etagère<p>
        </div>

        <div>            
            <div class="b">
                <input type="hidden" name="add">
                <input onclick="return confirm('Confirmer l`ajout ?');" class="bouton-add" type="submit" value="Ajouter">
            </div>
        </div>

        </form>

    </div>



</body>
</html>