<?php
session_start();



// connexion à la base de données
$db_username = 'root';
$db_password = 'root';
$db_name     = 'dbgestionlabo';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
        or die('Connexion à la base de données impossible');
  

// Test du succès de la tentative de connexion
if (!$db) {
  $message='Erreur de connexion (' . mysqli_connect_errno() . ') ' . ' (' . mysqli_connect_error() . ') ';
  $redirect='/login';
  header("Location: .$redirect.php");
  die();
}

// Passage de la connexion en utf8
mysqli_set_charset($db, 'utf8');



if(isset($_POST['email']) && isset($_POST['pass']))
{

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['pass']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user where 
              username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $username;
           header('Location: index.php');
        }
        else
        {
        $alerte = '<script>alert("Utilisateur ou mot de passe incorrect")</script>';
        $_POST[$alerte];
        header('Location: login.php?erreur=1');
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>