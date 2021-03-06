<div class="flex-form">

    <form action="fonctions/modifier.php" method="post">
        
        <div>
            <label>Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo $nom;?>" required="required">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('nom').value = ''">
            <p>donnée actuelle : <?php echo $nom;?><p>
        </div>

        <div>
            <label>Marque :</label>
            <?php
            $req = "SELECT id FROM marque WHERE libelle ='$marque'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_marque = implode($row);
            }
            ?>
            <select name="marque" id="marque">
            <?php
            $req = "SELECT * FROM marque";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                echo '<option value="' .$row['id']. '" ';
                if ($row['id']==$id_marque) {
                    echo 'selected';
                }
                echo ' >' .$row['libelle']. '</option>';
            }
            ?>

            </select>
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
            <label>Lieu physique :</label>
            <?php
            $req = "SELECT id FROM lieu WHERE libelle ='$lieu'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_lieu = implode($row);
            }
            ?>
            <select name="lieu" id="lieu">
            <?php
            $req = "SELECT * FROM lieu";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                echo '<option value="' .$row['id']. '" ';
                if ($row['id']==$id_lieu) {
                    echo 'selected';
                }
                echo ' >' .$row['libelle']. '</option>';
            }
            ?>

            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('lieu').value = ''">
            <p>donnée actuelle : <?php echo $lieu;?><p>
        </div>
        
        <div>
            <label>Etagère :</label>
            <?php
            $req = "SELECT id FROM etagere WHERE libelle ='$etagere'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_etagere = implode($row);
            }
            ?>
            <select name="etagere" id="etagere">
            <?php
            $req = "SELECT * FROM etagere";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                echo '<option value="' .$row['id']. '" ';
                if ($row['id']==$id_etagere) {
                    echo 'selected';
                }
                echo ' >' .$row['libelle']. '</option>';
            }
            ?>

            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('etagere').value = ''">
            <p>donnée actuelle : <?php echo $etagere;?><p>
        </div>
        

        <div>
            <label>Unité :</label>
            <?php
            $req = "SELECT id FROM unite WHERE libelle ='$unite'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_unite = implode($row);
                $id_unite_produit = $id_unite;
            }
            ?>
            <select name="unite" id="unite" required="required">
            <?php
            $req = "SELECT * FROM unite";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                echo '<option value="' .$row['id']. '" ';
                if ($row['id']==$id_unite) {
                    echo 'selected';
                }
                echo ' >' .$row['libelle']. '</option>';
            }
            ?>

            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('unite').value = ''">
            <p>donnée actuelle : <?php echo $unite;?><p>
        </div>

        <div>
            <label>Classe de danger :</label>
            <?php
            $req = "SELECT id FROM classe_de_danger WHERE libelle ='$classe'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_classe_de_danger = implode($row);
            }
            ?>
            <select name="classe_de_danger" id="classe_de_danger">
            <?php
            $req = "SELECT * FROM classe_de_danger";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                echo '<option value="' .$row['id']. '" ';
                if ($row['id']==$id_classe_de_danger) {
                    echo 'selected';
                }
                echo ' >' .$row['libelle']. '</option>';
            }
            ?>

            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('classe_de_danger').value = ''">
            <p>donnée actuelle : <?php echo $classe;?><p>
        </div>

        <div>
            <label>Date d'entrée dans le stock :</label>
            <input type="date" name="date_entree" id="date_entree" value="<?php echo $date_entree;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_entree').value = ''">
            <p>donnée actuelle : <?php echo $date_entree;?><p>
        </div>

        <div>
            <label>Personne l'ayant entré dans le stock :</label>
            <?php
            $req = "SELECT id FROM user WHERE initiales ='$user_entree'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_user_entree = implode($row);
            }
            ?>
            <select name="user_entree" id="user_entree" required="required">
                <?php
                $req = "SELECT id,nom,prenom FROM user";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    $s = '';
                    if ($row['id']==$id_user_entree) {
                        $s = 'selected';
                        $name = $row['prenom'];
                        $last_name = $row['nom'];
                    }
                    echo '<option value="' .$row['id']. '" ' .$s. '>' .$row['nom']. ' ' .$row['prenom']. '</option>';
                }
                ?>
            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_entree').value = ''">
            <p>donnée actuelle : <?php echo $last_name;?> <?php echo $name;?><p>
        </div>

        <div>
            <label>Remarque :</label>
            <input type="text" name="remarque" id="remarque" value="<?php echo $remarque;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('remarque').value = ''">
            <p>donnée actuelle : <?php echo $remarque;?><p>
        </div>


        <div>
            <?php 
                if ($entame) {
                    $v="Oui";
                    $hide='';
                    $hide2='hidden';
                } else {
                    $v="Non";
                    $hide='hidden';
                    $hide2='';
                }
            ?>
            <label>Entamé ou non : <?php echo $v;?></label>
            <input type="hidden" name ="entame" value="<?php echo $entame; ?>">
            <p <?php echo $hide2;?>>(Modifiable seulement grâce aux boutons "Retirer")<p>
            <p <?php echo $hide2;?>>(Les champs "Date de sortie du stock", "Personne l'ayant sorti du stock" <br>et "Numéro" seront modifiables seulement une fois le produit retiré)<p>
        </div>


        
        <div <?php echo $hide;?>>
            <label>Date de sortie du stock :</label>
            <input type="date" name="date_sortie" id="date_sortie" value="<?php echo $date_sortie;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_sortie').value = ''">
            <p>donnée actuelle : <?php echo $date_sortie;?><p>
        </div>

        <div <?php echo $hide;?>>
            <label>Personne l'ayant sorti du stock :</label>
            <?php
            $req = "SELECT id FROM user WHERE initiales ='$user_sortie'";
            $resultat = $mysqli->query($req);
            while ($row = $resultat->fetch_assoc())
            {
                $id_user_sortie = implode($row);
            }
            ?>
            <select name="user_sortie" id="user_sortie">
            <option value="0" <?php if (!$user_sortie) { echo 'selected'; }?>>N/A</option>
                <?php
                $req = "SELECT id,nom,prenom FROM user";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    $s = '';
                    if ($row['id']==$id_user_sortie) {
                        $s = 'selected';
                    }
                    echo '<option value="' .$row['id']. '" ' .$s. '>' .$row['nom']. ' ' .$row['prenom']. '</option>';
                }
                ?>
            </select>
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_sortie').value = ''">
            <p>donnée actuelle : <?php echo $last_name;?> <?php echo $name;?><p>
        </div>

        <div <?php echo $hide;?>>
            <label>Numéro :</label>
            <input type="text" name="num" id="num" value="<?php echo $num;?>">
            <img src="images/remove.png" alt="Vider" onclick="document.getElementById('num').value = ''">
            <p>donnée actuelle : <?php echo $num;?><p>
        </div>

        <?php
            $id_unite_user = $_SESSION['id_unite'];
            if ($id_unite_produit == $id_unite_user) {
                $hide3 = '';
            } else {
                $hide3 = 'hidden';
            }
        ?>

        <div <?php echo $hide3; ?> class="b">
            <input type="hidden" name="edit">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input  onclick="return confirm('Voulez-vous vraiment enregistrer les modifications effectuées ?');" class="bouton-modif" type="submit" value="Enregistrer">
        </div>
    </form>

    <div>            

        <?php
            if ($entame) {
                $hide = "hidden";
            } else {
                $hide = "";
            }
        ?>    

        <div <?php echo $hide; ?> <?php echo $hide3; ?> class="b">
            <form action="fonctions/retirer.php" method="post">
                <input type="hidden" name ="id" value="<?php echo $id; ?>">
                <input type="hidden" name="retirer">
                <input onclick="return confirm('Voulez vous vraiment retirer ce produit du stock ?');" class="bouton-retirer" type="submit" value="Retirer">
            </form>
        </div>

        

        <div <?php echo $hide3; ?> class="b">
            <form action="fonctions/supprimer.php" method="post">
                <input type="hidden" name ="id" value="<?php echo $id; ?>">
                <input type="hidden" name="delete">
                <input onclick="return confirm('Supprimer DEFINITIVEMENT le produit ?');" class="bouton-supp" type="submit" value="Supprimer">
            </form>
        </div>

    </div>
    
</div>

