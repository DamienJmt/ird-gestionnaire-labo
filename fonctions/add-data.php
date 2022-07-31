<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['add']))
{
    $id = 'NULL';
    $data = $_POST['data'];
    $table = $_POST['table'];

    $query = "INSERT INTO $table VALUES (
        $id, 
        '$data') 
        ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['add'] = "Ajout effectué !";
        header("Location: ../form-add-data.php");
    }
    else
    {
        $_SESSION['add'] = "Echec de l'ajout !";
        header("Location: ../form-add-data.php");
    }
}
?>