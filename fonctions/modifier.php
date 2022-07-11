<?php
session_start();

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $reference = $_POST[''];
    $volume = $_POST[''];
    $date_entree = $_POST[''];
    $date_sortie = $_POST[''];
    $remarque = $_POST[''];
    $num = $_POST[''];
    $marque = $_POST[''];
    $etagere = $_POST[''];
    $user_entree = $_POST[''];
    $user_sortie = $_POST[''];
    $unite = $_POST[''];
    $entame = $_POST[''];
    $classe_de_danger = $_POST[''];
    // compléter ça
    

    $query = "UPDATE produit SET nom='$nom', 
                                 test='$test'
                            WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Mise a jour effectué";
        header("Location: liste-produit.php");
    }
    else
    {
        $_SESSION['status'] = "Echec !";
        header("Location: liste-produit.php");
    }
}

?>