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
                    <th>Par</th>
                    <th>Remarque</th>
                    <th class="reduit" style="text-align: center;">Voir</th>
                    <th class="reduit" style="text-align: center;">Retirer</th>
                    <!-- <th class="reduit" style="text-align: center;">Supprimer</th> -->
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

                    // marque
                    $get_marque = "SELECT libelle FROM marque WHERE id=" . $ligne['id_marque'] . "";
                    $resultat = $mysqli->query($get_marque);
                    while($row = $resultat->fetch_assoc())
                    {
                        $marque = implode($row);
                    } 
                     
                    // lieu
                    $q = "SELECT id_lieu FROM etagere WHERE id = " . $ligne['id_etagere'] . "";
                    $resultat = $mysqli->query($q);
                    while($row = $resultat->fetch_assoc())
                    {
                        $r = implode($row);
                    } 
                    $get_lieu = "SELECT libelle FROM lieu WHERE id = " . $r . "";
                    $resultat = $mysqli->query($get_lieu);
                    while($row = $resultat->fetch_assoc())
                    {
                        $lieu = implode($row);
                    } 
                    
                    // etagere
                    $get_etagere = "SELECT libelle FROM etagere WHERE id=" . $ligne['id_etagere'] . "";
                    $resultat = $mysqli->query($get_etagere);
                    while($row = $resultat->fetch_assoc())
                    {
                        $etagere = implode($row);
                    } 

                    // user
                    $get_user = "SELECT initiales FROM user WHERE id=" . $ligne['id_user_entree'] . "";
                    $resultat = $mysqli->query($get_user);
                    while($row = $resultat->fetch_assoc())
                    {
                        $user = implode($row);
                    } 
                     

                    // unite
                    $q = "SELECT id_unite FROM user WHERE id = " . $ligne['id_user_entree'] . "";
                    $resultat = $mysqli->query($q);
                    while($row = $resultat->fetch_assoc())
                    {
                        $r = implode($row);
                    } 
                    $get_unite = "SELECT libelle FROM unite WHERE id = " . $r . "";
                    $resultat = $mysqli->query($get_unite);
                    while($row = $resultat->fetch_assoc())
                    {
                        $unite = implode($row);
                    } 

                    // classe de danger
                    $get_classe = "SELECT libelle FROM classe_de_danger WHERE id=" . $ligne['id_classe_de_danger'] . "";
                    $resultat = $mysqli->query($get_classe);
                    while($row = $resultat->fetch_assoc())
                    {
                        $classe = implode($row);
                    } 
                    

                    echo '<tr>' .
                         '<td>' . $ligne['nom'] . '</td>' . 
                         '<td>' . $marque . '</td>' . 
                         '<td>' . $ligne['reference'] . '</td>' . 
                         '<td>' . $ligne['volume'] . '</td>' . 
                         '<td>' . $lieu . '</td>' . 
                         '<td>' . $etagere . '</td>' . 
                         '<td>' . $unite . '</td>' . 
                         '<td>' . $classe . '</td>' . 
                         '<td>' . $ligne['date_entree'] . '</td>' .
                         '<td>' . $user . '</td>' .  
                         '<td>' . $ligne['remarque'] . '</td>' . 
                         '<td>
                         
                         <form action="voir-produit.php" method="post">
                         <input type="hidden" name ="id" value="<?php echo $ligne["id"]; ?></input>
                         <input type="image" id="image" alt="Voir" class="reduit2" style="text-align: center;" src="images/voir.png">
                         </form>

                         </td>' .
                         '<td><a href="/fonctions/retirer.php"><img src="images/retirer.png" alt="retirer"/></a></td>' .
                        //  '<td><a href="/fonctions/supprimer.php"><img src="images/remove.png" alt="supprimer"/></td>' .
                         '</tr>';

                }
                $mysqli->close();
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>
