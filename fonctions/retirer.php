<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['retirer']))
{
    $id = $_POST['id'];

    // requete: entame=1 + date du jour en auto increment + initiales_user_sortie=user_session
    $query = "";
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