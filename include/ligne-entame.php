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
    </form>
    </td>


    <td>                        
    <form action="fonctions/supprimer.php" method="post">
        <input type="hidden" name ="id" value="<?php echo $id; ?>">
        <input type="image" id="image" alt="Supprimer" class="reduit2" src="images/remove.png">
    </form>
    </td>


</tr>