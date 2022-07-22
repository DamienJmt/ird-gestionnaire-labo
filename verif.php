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

         $get_nom = "SELECT nom FROM user WHERE username = '$username'";
         $get_prenom = "SELECT prenom FROM user WHERE username = '$username'";
         $get_id = "SELECT id FROM user WHERE username = '$username'";

         mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
         $db = new mysqli($db_host, $db_username, $db_password,$db_name);
         $db->set_charset("utf8");

         $result = $db->query($get_nom);
         foreach($result as $row) {
         $_SESSION['nom'] = $row['nom'];
         }

         $result = $db->query($get_prenom);
         foreach($result as $row) {
         $_SESSION['prenom'] = $row['prenom'];
         }

         $result = $db->query($get_id);
         foreach($result as $row) {
         $_SESSION['id'] = $row['id'];
         }

         header('Location: index.php');
         
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
   header('Location: login.php?no_session');
}
mysqli_close($db); // fermer la connexion
?>