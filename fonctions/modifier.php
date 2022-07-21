<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $reference = $_POST['reference'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $date_sortie = $_POST['date_sortie'];
    $remarque = $_POST['remarque'];
    $num = $_POST['num'];
    $marque = $_POST['marque'];
    $etagere = $_POST['etagere'];
    $user_entree = $_POST['user_entree'];
    $user_sortie = $_POST['user_sortie'];
    $unite = $_POST['unite'];
    $entame = $_POST['entame'];
    $classe_de_danger = $_POST['classe_de_danger'];

    // $query = "UPDATE produit SET nom ='$nom', reference ='$reference', volume ='$volume', date_entree ='$date_entree', date_sortie ='$date_sortie', remarque ='$remarque', num ='$num', id_marque ='$marque', id_etagere ='$etagere', id_unite ='$unite', id_user_entree ='$user_entree', entame ='$entame',id_user_sortie ='$user_sortie', id_classe_de_danger ='$classe_de_danger' WHERE id='$id';";
    $query = "UPDATE produit SET nom ='$nom', 
                                 reference ='$reference', 
                                 volume ='$volume', 
                                 date_entree ='$date_entree', 
                                 date_sortie ='$date_sortie', 
                                 remarque ='$remarque', 
                                 num ='$num', 
                                 id_marque ='$marque', 
                                 id_etagere ='$etagere', 
                                 id_unite ='$unite', 
                                 id_user_entree ='$user_entree', 
                                 entame ='$entame',
                                 id_user_sortie ='$user_sortie', 
                                 id_classe_de_danger ='$classe_de_danger' 
                             WHERE id='$id';";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Mise a jour effectuée !";
        header("Location: ../liste-produit.php?succes-mise-a-jour");
    }
    else
    {
        $_SESSION['status'] = "Echec !";
        header("Location: ../liste-produit.php?echec-mise-a-jour");
    }
}

?>