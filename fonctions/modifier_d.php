<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $remarque = $_POST['remarque'];
    $lieu = $_POST['lieu'];
    $etagere = $_POST['etagere'];
    $user_entree = $_POST['user_entree'];
    $unite = $_POST['unite'];
    $classe_de_danger = $_POST['classe_de_danger'];
    $num = $_POST['num'];
    
    $query = "UPDATE dechet SET nom ='$nom', 
                                 volume ='$volume', 
                                 date_entree ='$date_entree', 
                                 remarque ='$remarque', 
                                 num = '$num', 
                                 id_etagere ='$etagere', 
                                 id_lieu ='$lieu',
                                 id_unite ='$unite', 
                                 id_user_entree ='$user_entree', 
                                 id_classe_de_danger ='$classe_de_danger' 
                             WHERE id='$id';";

    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['edit'] = "Mise a jour effectuée !";
        header("Location: ../liste-dechet.php?succes-mise-a-jour");
    }
    else
    {
        $_SESSION['edit'] = "Echec de la mise à jour !";
        header("Location: ../liste-dechet.php?echec-mise-a-jour");
    }
}

?>