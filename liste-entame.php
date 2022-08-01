<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Produits entamés</title>
    <?php include_once $racine .'/include/head.php' ?>
    <?php include_once $racine .'/include/connexion.php' ?>   
</head>
<body>

    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>
    <?php
        $id_unite_user = $_SESSION['id_unite'];
    ?>

    <div class="article">

        <h2>Liste de tous les produits entamés :</h2>

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
                    <th class="reduit" style="text-align: center;">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
                $mysqli->set_charset("utf8");
                $requete = "SELECT * FROM produit 
                            WHERE entame=1 AND archived=0
                            ORDER BY 
                                (CASE id_unite
                                WHEN '$id_unite_user' THEN 1
                                ELSE 2 END) ASC, nom ASC;";
                $resultat = $mysqli->query($requete);
                while ($ligne = $resultat->fetch_assoc()) 
                {

                    // Ensemble des requêtes permettant d'obtenir les informations du produit qui seront affichées

                    // id
                    $id = $ligne['id'];

                    // nom
                    $nom = $ligne['nom'];

                    // reference
                    $reference = $ligne['reference'];

                    // volume
                    $volume = $ligne['volume'];

                    // date d'entree
                    $date_entree = $ligne['date_entree'];

                    // date de sortie
                    $date_sortie = $ligne['date_sortie'];

                    // remarque
                    $remarque = $ligne['remarque'];

                    // numero
                    $num = $ligne['num'];

                    // marque
                    $get_marque = "SELECT libelle FROM marque WHERE id=" . $ligne['id_marque'] . "";
                    $result = $mysqli->query($get_marque);
                    while($row = $result->fetch_assoc())
                    {
                        $marque = implode($row);
                    } 
                            
                    // etagere
                    $get_etagere = "SELECT libelle FROM etagere WHERE id=" . $ligne['id_etagere'] . "";
                    $result = $mysqli->query($get_etagere);
                    while($row = $result->fetch_assoc())
                    {
                        $etagere = implode($row);
                    } 

                    // lieu
                    $get_lieu = "SELECT libelle FROM lieu WHERE id=" . $ligne['id_lieu'] . "";
                    $result = $mysqli->query($get_lieu);
                    while($row = $result->fetch_assoc())
                    {
                        $lieu = implode($row);
                    } 

                    // user entree
                    $get_user_entree = "SELECT initiales FROM user WHERE id=" . $ligne['id_user_entree'] . "";
                    $result = $mysqli->query($get_user_entree);
                    while($row = $result->fetch_assoc())
                    {
                        $user_entree = implode($row);
                    } 
                                    
                    // user sortie
                    if ($ligne['id_user_sortie'] == NULL) {
                        $user_sortie = "";
                    } else {
                        $get_user_sortie = "SELECT initiales FROM user WHERE id=" . $ligne['id_user_sortie'] . "";
                        $result = $mysqli->query($get_user_sortie);
                        while($row = $result->fetch_assoc())
                        {
                            $user_sortie = implode($row);
                        }   
                    }


                    // unite
                    $id_unite_produit = $ligne['id_unite'];
                    $get_unite = "SELECT libelle FROM unite WHERE id = " . $ligne['id_unite'] . "";
                    $result = $mysqli->query($get_unite);
                    while($row = $result->fetch_assoc())
                    {
                        $unite = implode($row);
                    } 

                    // entamé
                    $entame = $ligne['entame'];

                    // classe de danger
                    $get_classe = "SELECT libelle FROM classe_de_danger WHERE id=" . $ligne['id_classe_de_danger'] . "";
                    $result = $mysqli->query($get_classe);
                    while($row = $result->fetch_assoc())
                    {
                        $classe = implode($row);
                    } 

                    // Droits de l'utilisateur
                    if ($id_unite_produit == $id_unite_user) {
                        $hide = '';
                    } else {
                        $hide = 'hidden';
                    }                    

                    ?>
                <tr>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $marque; ?></td>
                    <td><?php echo $volume; ?></td>
                    <td><?php echo $lieu; ?></td>
                    <td><?php echo $etagere; ?></td>
                    <td><?php echo $unite; ?></td>
                    <td><?php echo $classe; ?></td>
                    <td><?php echo $remarque; ?></td>


                    <td>                        
                    <form action="voir-produit.php" method="post">
                        <input type="hidden" name ="id" value="<?php echo $id; ?>">
                        <input type="image" id="image" alt="Voir" class="reduit2" src="images/voir.png">
                    </form>
                    </td>


                    <td>                        
                    <form <?php echo $hide; ?> action="fonctions/supprimer.php" method="post">
                        <input type="hidden" name ="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="delete">
                        <input onclick="return confirm('Supprimer DEFINITIVEMENT le produit ?');" type="image" id="image" alt="Supprimer" class="reduit2" src="images/remove.png">
                    </form>
                    </td>
                </tr>
                    <?php
                }
                $mysqli->close();
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>