<?php
   session_start();

if(isset($_POST['email']) && isset($_POST['pass'])) 
{
   $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo';
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

         $requete = new mysqli($db_host, $db_username, $db_password,$db_name);
         $requete->query("SELECT nom FROM user WHERE username = ' . $username");
         $_SESSION['nom']=$requete;

         $requete = new mysqli($db_host, $db_username, $db_password,$db_name);
         $requete->query("SELECT prenom FROM user WHERE username = ' . $username");
         $_SESSION['prenom']=$requete;
         
         echo $_SESSION['email'];
         echo ($_SESSION['nom']);
         echo $_SESSION['prenom'];

         // reussir à afficher resultat des requêtes - apres ça devrait marcher
         // car le if dans heap.php pourra verifier les 3 conditions

         // header('Location: index.php');







      }
      else
      {
      header('Location: login.php?erreur=1'); // nom d'utilisateur ou mot de passe incorrectes
      }
   }
   else
   {
      header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
   }
}
else
{
   header('Location: login.php?no_session' . $_POST['email'] . ' ' . $_POST['pass']);
}
mysqli_close($db); // fermer la connexion
?>