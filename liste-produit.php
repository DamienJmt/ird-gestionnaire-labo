<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil - Gestionnaire de labo</title>
    <?php include_once $racine .'/include/head.php' ?>
    <?php include_once $racine .'/include/connexion.php' ?>   
</head>
<body>

    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

        <h2>Liste de tous les produits :</h2>

        <table id="table1">
            <thead>
                <tr class="table100-head">
                    <th scope="col">Nom</th>
                    <th scope="col">Référence</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Date d'entrée</th>
                    <th scope="col">Remarque</th>
                    <th scope="col">Numéro de produit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
                $mysqli->set_charset("utf8");
                $requete = "SELECT * FROM produit WHERE retire=0";
                // La page des produits retirés sera exatement la même que celle-ci à une exeption près, il faudra écrire "retire=1" dans la requête ci-dessus.
                $resultat = $mysqli->query($requete);
                while ($ligne = $resultat->fetch_assoc()) {
                    echo '<tr>' .
                         '<td>' . $ligne['nom'] . '</td>' . 
                         '<td>' . $ligne['reference'] . '</td>' . 
                         '<td>' . $ligne['volume'] . '</td>' . 
                         '<td>' . $ligne['date_entree'] . '</td>' . 
                         '<td>' . $ligne['remarque'] . '</td>' . 
                         '<td>' . $ligne['num'] . '</td>' . 
                         // Ajouter une colone avec un bouton "modifier" qui apparait quand l'utilisateur appartient à la même unité que le produit.
                         '</tr>';

                }
                $mysqli->close();
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>
