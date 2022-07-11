<form action="fonctions/modifier.php.php" class ='txt' method="post">

    <div class="div-g"><!-- -------------------------------------------DIV-GAUCHE--------------------------------------------- -->

        <div>
            <label>Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo $nom;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('nom').value = ''">
            <p>donnée actuelle : <?php echo $nom;?><p>
        </div>

        <div>
            <label>Marque :</label>
            <input type="text" name="marque" id="marque" value="<?php echo $marque;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('marque').value = ''">
            <p>donnée actuelle : <?php echo $marque;?><p>
        </div>

        <div>
            <label>Référence :</label>
            <input type="text" name="reference" id="reference" value="<?php echo $reference;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('reference').value = ''">
            <p>donnée actuelle : <?php echo $reference;?><p>
        </div>

        <div>
            <label>Conditionnement :</label>
            <input type="text" name="volume" id="volume" value="<?php echo $volume;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('volume').value = ''">
            <p>donnée actuelle : <?php echo $volume;?><p>
        </div>

        <div>
            <label>Lieu Physique :</label>
            <input type="text" name="lieu" id="lieu" value="<?php echo $lieu;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('lieu').value = ''">
            <p>donnée actuelle : <?php echo $lieu;?><p>
        </div>

        <div>
            <label>Etagère :</label>
            <input type="text" name="etagere" id="etagere" value="<?php echo $etagere;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('etagere').value = ''">
            <p>donnée actuelle : <?php echo $etagere;?><p>
        </div>

        <div>
            <label>Unité :</label>
            <input type="text" name="unite" id="unite" value="<?php echo $unite;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('unite').value = ''">
            <p>donnée actuelle : <?php echo $unite;?><p>
        </div>

        <div>
            <label>Classe de danger :</label>
            <input type="text" name="classe" id="classe" value="<?php echo $classe;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('classe').value = ''">
            <p>donnée actuelle : <?php echo $classe;?><p>
        </div>

        <div>
            <label>Date d'entrée dans le stock :</label>
            <input type="date" name="date_entree" id="date_entree" value="<?php echo $date_entree;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_entree').value = ''">
            <p>donnée actuelle : <?php echo $date_entree;?><p>
        </div>

    </div><!-- ---------------------------------------------------------------------------------------------------- -->


    <div class="div-d"><!-- -------------------------------------------DIV-DROITE----------------------------------------------- -->

        <div>
            <label>Personne l'ayant entré dans le stock :</label>
            <input type="text" name="user_entree" id="user_entree" value="<?php echo $user_entree;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_entree').value = ''">
            <p>donnée actuelle : <?php echo $user_entree;?><p>
        </div>

        <div>
            <label>Remarque :</label>
            <input type="text" name="remarque" id="remarque" value="<?php echo $remarque;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('remarque').value = ''">
            <p>donnée actuelle : <?php echo $remarque;?><p>
        </div>

        <div>
            <label>Entamé ou non :</label>
            <?php 
                if ($entame) {
                    $v=true;
                } else {
                    $v=false;
                }
            ?>
            <input type="checkbox" name="entame" onload="javascript:this.checked=true" />
            <p>donnée actuelle : 
                <?php 
                    if ($entame) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                ?>
            <p>
        </div>

        <div>
            <label>Date de sortie du stock :</label>
            <input type="date" name="date_sortie" id="date_sortie" value="<?php echo $date_sortie;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_sortie').value = ''">
            <p>donnée actuelle : <?php echo $date_sortie;?><p>
        </div>

        <div>
            <label>Personne l'ayant sorti du stock :</label>
            <input type="text" name="user_sortie" id="user_sortie" value="<?php echo $user_sortie;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_sortie').value = ''">
            <p>donnée actuelle : <?php echo $user_sortie;?><p>
        </div>

        <div>
            <label>Numéro :</label>
            <input type="text" name="num" id="num" value="<?php echo $num;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('num').value = ''">
            <p>donnée actuelle : <?php echo $num;?><p>
        </div>

        <div class=buttons>            
            <div class="l">
                <input type="hidden" name="edit">
                <input class="bouton-modif" type="submit" value="Enregistrer">
            </div>

            <?php
                if (!$entame) {
                    echo
                    '
                    <div>
                        <input type="hidden" name="delete">
                        <input class="bouton-retirer" type="submit" value="Retirer">
                    </div>
                    ';
                }
            ?>

            <div class="r">
                <input type="hidden" name="delete">
                <input class="bouton-supp" type="submit" value="Supprimer">
            </div>
        </div>

        <br><br><br>
</div><!-- ---------------------------------------------------------------------------------------------------- -->

</form>