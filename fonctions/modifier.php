<?php
session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $reference = $_POST['reference'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $remarque = $_POST['remarque'];
    $marque = $_POST['marque'];
    $etagere = $_POST['etagere'];
    $user_entree = $_POST['user_entree'];
    $unite = $_POST['unite'];
    $classe_de_danger = $_POST['classe_de_danger'];
    
    $entame = $_POST['entame'];

    $date_sortie = $_POST['date_sortie'];
    $date_sortie = !empty($date_sortie) ? "'$date_sortie'" : "NULL";
    $user_sortie = $_POST['user_sortie'];
    $user_sortie = !empty($user_sortie) ? "'$user_sortie'" : "NULL";
    $num = $_POST['num'];
    $num = !empty($num) ? "'$num'" : "NULL";

    // echo $id,
    // '<br>'.$nom,
    // '<br>'.$reference,
    // '<br>'.$volume,
    // '<br>'.$date_entree,
    // '<br>'.$remarque,
    // '<br>'.$marque,
    // '<br>'.$etagere,
    // '<br>'.$user_entree,
    // '<br>'.$unite,
    // '<br>'.$classe_de_danger,
    // '<br>'.$entame,
    // '<br>'.$date_sortie,
    // '<br>'.$user_sortie,
    // '<br>'.$num;
    
    $query = "UPDATE produit SET nom ='$nom', 
                                 reference ='$reference', 
                                 volume ='$volume', 
                                 date_entree ='$date_entree', 
                                 date_sortie = $date_sortie, 
                                 remarque ='$remarque', 
                                 num = $num, 
                                 id_marque ='$marque', 
                                 id_etagere ='$etagere', 
                                 id_unite ='$unite', 
                                 id_user_entree ='$user_entree', 
                                 entame ='$entame',
                                 id_user_sortie = $user_sortie, 
                                 id_classe_de_danger ='$classe_de_danger' 
                             WHERE id='$id';";

    $query_run = mysqli_query($db, $query);
    
    if($query_run)
    {
        $_SESSION['edit'] = "Mise a jour effectuée !";
        header("Location: ../liste-produit.php?succes-mise-a-jour");
    }
    else
    {
        $_SESSION['edit'] = "Echec de la mise à jour !";
        header("Location: ../liste-produit.php?echec-mise-a-jour");
    }
}

?>