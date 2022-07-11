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
    $get_marque = "SELECT libelle FROM marque WHERE id=" . $ligne['id_marque'] . "";
    $resultat = $mysqli->query($get_marque);
    while($row = $resultat->fetch_assoc())
    {
        $marque = implode($row);
    } 
    
    // récup ID etagere
    // récup ID user_entree
    // récup ID user_sortie
    // récup ID unite
    // récup ID classe_de_danger
    

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
        header("Location: liste-produit.php");
    }
    else
    {
        $_SESSION['status'] = "Echec !";
        header("Location: liste-produit.php");
    }
}

?>