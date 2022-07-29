<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['add']))
{
    $id = 'NULL';
    $nom = $_POST['nom'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $remarque = $_POST['remarque'];
    $num = 'NULL';
    $lieu = $_POST['lieu'];
    $etagere = $_POST['etagere'];
    $unite = $_POST['unite'];
    $user_entree = $_POST['user_entree'];
    $classe_de_danger = $_POST['classe_de_danger'];

    $quantite = $_POST['quantite'];
    $succes = 0;

    for ($i = 1; $i <= $quantite; $i++) {
        
        $query = "INSERT INTO dechet VALUES (
            $id, 
            '$nom',  
            '$volume',
            '$date_entree',
            '$remarque',
            $num,
            '$classe_de_danger',
            '$lieu',
            '$etagere',
            '$unite',
            '$user_entree')
            ";
        $query_run = mysqli_query($db, $query);

        if($query_run)
        {
            $succes++;
        }
        else
        {
            $_SESSION['add'] = "Echec de l'ajout du/des déchet(s) !";
            header("Location: ../liste-dechet.php");
        }

    }

    if($succes==$quantite)
    {
        header("Location: check-dechet-num.php");
    }
}

?>