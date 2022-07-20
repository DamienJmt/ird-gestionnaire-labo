<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $query = "DELETE * FROM produit WHERE id='$id'";
    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Mise a jour effectuée !";
        $statut  = $_SESSION['status'];
        echo '<script> alert("'.$statut.'"); </script>';
        header("Location: ../index.php");
    }
    else
    {
        $_SESSION['status'] = "Echec de la suppression!";
        $statut  = $_SESSION['status'];
        echo '<script> alert("'.$statut.'"); </script>';
        header("Location: ../index.php");
    }
}

?>