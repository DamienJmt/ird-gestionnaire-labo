<tr>
    <td><?php echo $nom; ?></td>
    <td><?php echo $marque; ?></td>
    <td><?php echo $volume; ?></td>
    <td><?php echo $lieu; ?></td>
    <td><?php echo $etagere; ?></td>
    <td><?php echo $unite; ?></td>
    <td><?php echo $classe; ?></td>
    <td><?php echo $remarque; ?></td>
    <td>                        
    <form action="voir-produit.php" method="post">
        <input type="hidden" name ="id" value="<?php echo $id; ?>">
        <input type="image" id="image" alt="Voir" class="reduit2" src="images/voir.png">
        <!-- <input class="login100-form-btn" id="submit" type="submit" value="Voir"> -->
    </form>
    </td>
    <td><a href="/fonctions/retirer.php"><img src="images/retirer.png" alt="retirer"/></a></td>
    <td><a href="/fonctions/supprimer.php"><img src="images/remove.png" alt="supprimer"/></td>
</tr>