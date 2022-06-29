<?php

// Création de la connexion à la base de données
$serveur = "localhost:8080";
$nom_de_la_base = "dbgestionlabo";
$utilisateur = "root";
$mot_de_passe = "root";
$cnx = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $nom_de_la_base);

// Test du succès de la tentative de connexion
if (!$cnx) {
  $message='Erreur de connexion (' . mysqli_connect_errno() . ') ' . ' (' . mysqli_connect_error() . ') ';
  $newURL='/login';
  header("Location: .$newURL.php");
  die();
}

// Passage de la connexion en utf8
mysqli_set_charset($cnx, 'utf8');

?>