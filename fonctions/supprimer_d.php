<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "UPDATE dechet SET archived = '1' WHERE id='$id'";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['delete'] = "Déchet supprimé !";
        header("Location: ../liste-dechet.php");
    }
    else
    {
        $_SESSION['delete'] = "Echec de la suppression !";
        header("Location: ../liste-dechet.php");
    }
}

?>