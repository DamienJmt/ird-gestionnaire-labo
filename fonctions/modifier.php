<?php
session_start();

if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $reference = $_POST['reference'];
    $volume = $_POST['volume'];
    $date_entree = $_POST['date_entree'];
    $date_sortie = $_POST['date_sortie'];
    $remarque = $_POST['remarque'];
    $num = $_POST['num'];
    $marque = $_POST['marque'];
    $etagere = $_POST['etagere'];
    $user_entree = $_POST['user_entree'];
    $user_sortie = $_POST['user_sortie'];
    $unite = $_POST['unite'];
    $entame = $_POST['entame'];
    $classe_de_danger = $_POST['classe_de_danger'];
    // compléter ça

    // récup ID marque
    // $get_marque = "SELECT id FROM marque WHERE libelle=" . $marque . "";
    // $resultat = $mysqli->query($get_marque);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $marque = implode($row);
    // } 

    // récup ID etagere
    // $get_etagere = "SELECT id FROM etagere WHERE libelle=" . $etagere . "";
    // $resultat = $mysqli->query($get_etagere);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $etagere = implode($row);
    // } 

    // récup ID user_entree
    // $get_user_entree = "SELECT id FROM user WHERE libelle=" . $user_entree . "";
    // $resultat = $mysqli->query($get_user_entree);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $user_entree = implode($row);
    // } 
    
    // récup ID user_sortie
    // $get_user_sortie = "SELECT id FROM user WHERE libelle=" . $user_sortie . "";
    // $resultat = $mysqli->query($get_user_sortie);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $user_sortie = implode($row);
    // } 
    
    // récup ID unite
    // $get_unite = "SELECT id FROM unite WHERE libelle=" . $unite . "";
    // $resultat = $mysqli->query($get_unite);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $unite = implode($row);
    // } 
    
    // récup ID classe_de_danger
    // $get_classe_de_danger = "SELECT id FROM classe_de_danger WHERE libelle=" . $classe_de_danger . "";
    // $resultat = $mysqli->query($get_classe_de_danger);
    // while($row = $resultat->fetch_assoc())
    // {
    //     $classe_de_danger = implode($row);
    // } 

    $query = "UPDATE produit SET nom ='$nom', 
                                 reference ='$reference',
                                 volume ='$volume',
                                 date_entree ='$date_entree',
                                 date_sortie ='$date_sortie',
                                 remarque ='$remarque',
                                 num ='$num',
                                 marque ='$marque',
                                 etagere ='$etagere',
                                 user_entree ='$user_entree',
                                 user_sortie ='$user_sortie',
                                 unite ='$unite',
                                 entame ='$entame',
                                 classe_de_danger ='$classe_de_danger'
                            WHERE id='$id' ";
    $query_run = mysqli_query($bd, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Mise a jour effectué";
        header("Location: ../liste-produit.php?succes-mise-a-jour");
    }
    else
    {
        $_SESSION['status'] = "Echec !";
        header("Location: ../liste-produit.php?echec-mise-a-jour");
    }
}

?>