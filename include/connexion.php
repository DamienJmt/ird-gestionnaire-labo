<?php

// connexion à la base de données
$db_username = 'root';
$db_password = 'adminIRD2022.';
$db_name     = 'dbgestionlabo';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
        or die('Connexion à la base de données impossible');
  

// Test du succès de la tentative de connexion
if (!$db) {
  $message='Erreur de connexion (' . mysqli_connect_errno() . ') ' . ' (' . mysqli_connect_error() . ') ';
  $redirect='/login';
  header("Location: .$redirect.php");
  exit;
}

// Passage de la connexion en utf8
mysqli_set_charset($db, 'utf8');

?>