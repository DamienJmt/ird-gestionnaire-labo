<?php

session_start();

$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
include_once $racine .'../include/connexion.php';

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
$mysqli->set_charset("utf8");
$requete = "SELECT * FROM dechet ";
$resultat = $mysqli->query($requete);
while ($ligne = $resultat->fetch_assoc()) 
{

    $id = $ligne['id'];

    if (is_null($ligne['num'])) {

        $num = "DE ".$id;
        $query = "UPDATE dechet SET num ='$num' WHERE id='$id';";
        $query_run = mysqli_query($db, $query);

        if($query_run)
        {
            $_SESSION['add'] = "Déchet(s) ajouté(s) avec succès !";
            header("Location: ../liste-dechet.php");
        }
        else
        {
            $_SESSION['add'] = "Echec de l'ajout du/des déchet(s)2 !";
            header("Location: ../liste-dechet.php");
        }

    } else {

        $_SESSION['add'] = "Echec de l'ajout du/des déchet(s)3 !";
        header("Location: ../liste-dechet.php");

    }
    
}

?>