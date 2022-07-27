<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['add']))
{
    $id = 'NULL';
    $nom = $_POST['nom'];
    $reference = $_POST['reference'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $date_sortie = 'NULL';
    $remarque = $_POST['remarque'];
    $num = 'NULL';
    $marque = $_POST['marque'];
    $lieu = $_POST['lieu'];
    $etagere = $_POST['etagere'];
    $unite = $_POST['unite'];
    $user_entree = $_POST['user_entree'];
    $entame = '0';
    $user_sortie = 'NULL';
    $classe_de_danger = $_POST['classe_de_danger'];

    $quantite = $_POST['quantite'];
    
    $query = "INSERT INTO produit VALUES (
                                 $id, 
                                 '$nom', 
                                 '$reference', 
                                 '$volume',
                                 '$date_entree',
                                 $date_sortie,
                                 '$remarque',
                                 $num,
                                 '$marque',
                                 '$lieu',
                                 '$etagere',
                                 '$unite',
                                 '$user_entree',
                                 '$entame',
                                 $user_sortie, 
                                 '$classe_de_danger') 
                                 ";

    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['add'] = "Produit ajouté avec succès !";
        header("Location: ../liste-produit.php");
    }
    else
    {
        $_SESSION['add'] = "Echec de l'ajout du produit !";
        header("Location: ../liste-produit.php");
    }
}

?>