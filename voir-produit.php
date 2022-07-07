<?php $racine = $_SERVER['DOCUMENT_ROOT'].'ird-gestionnaire-labo' ?><!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil - Gestionnaire de labo</title>
    <?php include_once $racine .'/include/head.php' ?>  
</head>
<body>
    <?php include_once $racine .'/include/header.php' ?>
    <?php include_once $racine .'/include/nav.php' ?>

    <div class="article">

    <h2>Vouc pouvez ici voir et modifier les informations du produit "<?php echo $POST['id']; ?>" :</h2>

    </div>
    
</body>
</html>