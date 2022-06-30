<?php
$racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';

echo $_POST['email'];
echo $_POST['pass'];
echo "-----------------------------------------------<br>";
session_start();

if(isset($_POST['email']) && isset($_POST['pass']))
{

   include_once $racine .'/include/connexion.php';

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['pass']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user WHERE username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
         $_SESSION['email'] = $username;
         $req_nom = 'SELECT nom FROM user WHERE username = ' . $_SESSION['email'] . '';
         $req_prenom = 'SELECT prenom FROM user WHERE username = ' . $_SESSION['email'] . '';
         echo "go index tout est bon :";
         echo $req_nom;
         echo $req_prenom;
        //  header('Location: index.php');
        }
        else
        {
            echo "user ou mdp pas bon";
        }
    }
    else
    {
        echo "champs vide";
    }
}
else
{
    echo 'echo ne requit pas de parenthèses.aucune_information_de_connexion' . $_POST['email'] . ' ' . $_POST['pass'];
}
mysqli_close($db); // fermer la connexion
?>