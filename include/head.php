<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<?php 
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['nom']) && !isset($_SESSION['prenom'])) {
    header('Location: login.php');
}
date_default_timezone_set('Pacific/Noumea');
?>
