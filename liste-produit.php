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

        <h2>Liste de tous les produits du stock :</h2>

        <table id="table1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Référence</th>
                    <th>Volume</th>
                    <th>Date d'entrée</th>
                    <th>Remarque</th>
                    <th>Numéro de produit</th>
                    <th class="reduit" style="text-align: center;">Voir</th>
                    <th class="reduit" style="text-align: center;">Retirer</th>
                    <th class="reduit" style="text-align: center;">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
                $mysqli->set_charset("utf8");
                $requete = "SELECT * FROM produit WHERE retire=0";
                // La page des produits retirés sera exatement la même que celle-ci à une exeption près, il faudra écrire "retire=1" dans la requête ci-dessus.
                // Fonction inverse de retirer dans la page "retirer produit" ?
                $resultat = $mysqli->query($requete);
                while ($ligne = $resultat->fetch_assoc()) {
                    echo '<tr>' .
                         '<td>' . $ligne['nom'] . '</td>' . 
                         '<td>' . $ligne['reference'] . '</td>' . 
                         '<td>' . $ligne['volume'] . '</td>' . 
                         '<td>' . $ligne['date_entree'] . '</td>' . 
                         '<td>' . $ligne['remarque'] . '</td>' . 
                         '<td>' . $ligne['num'] . '</td>' .
                         '<td><a href="/fontions/voir.php"><img src="images/voir.png" alt="voir"/></td>' .
                         '<td><a href="/fontions/retirer.php"><img src="images/retirer.png" alt="retirer"/></td>' .
                         '<td><a href="/fontions/supprimer.php"><img src="images/remove.png" alt="supprimer"/></td>' .
                         '</tr>';

                }
                $mysqli->close();
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>
