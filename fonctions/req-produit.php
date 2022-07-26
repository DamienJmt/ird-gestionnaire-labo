<?php

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

?>