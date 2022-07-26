<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['retirer']))
{
    $id = $_POST['id'];

    // requete: entame=1 + date du jour en auto increment + initiales_user_sortie=user_session
    // DATE( NOW() )
    $id_s = $_SESSION['id'];
    $num_p = "PR " . $id;
    $query = "UPDATE produit SET entame = '1', date_sortie = DATE( NOW() ), id_user_sortie = '$id_s', num = '$num_p' WHERE id='$id'";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['retirer'] = "Produit retirer avec succès !";
        header("Location: ../liste-produit.php");
    }
    else
    {
        $_SESSION['retirer'] = "Echec, le produit n'a pas été retiré !";
        header("Location: ../liste-produit.php");
    }
}

?>