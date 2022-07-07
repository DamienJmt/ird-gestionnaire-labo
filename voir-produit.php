<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Détails du produit</title>
    <?php include_once $racine .'/include/head.php' ?>  
</head>
<body>
    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

    <?php
    $id_produit = $POST['id'];
    ?>

    <h2>Vous pouvez ici voir et modifier les informations du produit "<?php echo $id_produit; ?>" :</h2>

    </div>
    
</body>
</html>