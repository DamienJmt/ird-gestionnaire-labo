<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil - Liste du stock</title>
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
                    <th>Marque</th>
                    <th>Référence</th>
                    <th>Volume</th>
                    <th>Lieu</th>
                    <th>Etagère</th>
                    <th>Unité</th>
                    <th>Classe de danger</th>
                    <th>Date d'entrée</th>
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
                // La page des produits retirés sera exatement la même que celle-ci à une exeption près, il faudra écrire "retire=1" dans la requête ci-dessus.
                // Fonction inverse de retirer dans la page "retirer produit" ?
                $resultat = $mysqli->query($requete);
                while ($ligne = $resultat->fetch_assoc()) {

                    $get_marque = "SELECT libelle FROM marque WHERE id=" . $ligne['id_marque'] . "";
                    $resultat = $mysqli->query($get_marque);
                    while($row = $resultat->fetch_assoc())
                     {
                        $marque = implode($row);
                     } 
                     
                    $get_lieu = "SELECT libelle FROM lieu LEFT JOIN etagere ON lieu.id=etagere.id_lieu";
                    $resultat = $mysqli->query($get_lieu);
                    while($row = $resultat->fetch_assoc())
                     {
                        $lieu = implode($row);
                     } 

                    

                    $get_etagere = "SELECT libelle FROM etagere WHERE id=" . $ligne['id_etagere'] . "";
                    $resultat = $mysqli->query($get_etagere);
                    while($row = $resultat->fetch_assoc())
                     {
                        $etagere = implode($row);
                     } 

                    $get_unite = "";

                    $get_classe = "";

                    echo '<tr>' .
                         '<td>' . $ligne['nom'] . '</td>' . 
                         '<td>' . $marque . '</td>' . 
                         '<td>' . $ligne['reference'] . '</td>' . 
                         '<td>' . $ligne['volume'] . '</td>' . 
                         '<td>' . $lieu . '</td>' . 
                         '<td>' . $etagere . '</td>' . 
                         '<td>' . $ligne['id_user_entree'] . '</td>' . 
                         '<td>' . $ligne['id_classe_de_danger'] . '</td>' . 
                         '<td>' . $ligne['date_entree'] . '</td>' . 
                         '<td>' . $ligne['remarque'] . '</td>' . 
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
