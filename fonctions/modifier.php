<?php
session_start();

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];

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