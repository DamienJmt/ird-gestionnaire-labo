<?php

 // Ensemble des requêtes permettant d'obtenir les informations du produit qui seront affichées

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
    // remarque
    $remarque = $ligne['remarque'];
    
                    
?>