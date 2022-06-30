<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<?php 
if (isset($_SESSION['email']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
    exit;
} else {
    // header('Location: login.php');
}
?>

