<div class="flex-form">    
    <form action="fonctions/ajouter_produit.php" method="post">

            <?php
            $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
            $mysqli->set_charset("utf8");
            ?>

            <div>
                <label>Nom :</label>
                <input type="text" name="nom" id="nom">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('nom').value = ''">
            </div>


            <div>
                <label>Marque :</label>
                <select name="marque" id="marque">
                <?php
                $req = "SELECT * FROM marque";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    echo '<option value="' .$row['id']. '" ';
                    echo ' >' .$row['libelle']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('marque').value = ''">
            </div>


            <div>
                <label>Référence :</label>
                <input type="text" name="reference" id="reference">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('reference').value = ''">
            </div>

            <div>
                <label>Conditionnement :</label>
                <input type="text" name="volume" id="volume">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('volume').value = ''">
            </div>

            <div>
                <label>Lieu physique :</label>
                <select name="lieu" id="lieu">
                <?php
                $req = "SELECT * FROM lieu";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    echo '<option value="' .$row['id']. '" ';
                    echo ' >' .$row['libelle']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('lieu').value = ''">
            </div>
            
            <div>
                <label>Etagère :</label>
                <select name="etagere" id="etagere">
                <?php
                $req = "SELECT * FROM etagere";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    echo '<option value="' .$row['id']. '" ';
                    echo ' >' .$row['libelle']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('etagere').value = ''">
            </div>
            

            <div>
                <label>Unité :</label>
                <select name="unite" id="unite">
                <?php
                $req = "SELECT * FROM unite";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    echo '<option value="' .$row['id']. '" ';
                    echo ' >' .$row['libelle']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('unite').value = ''">
            </div>

            <div>
                <label>Classe de danger :</label>
                <select name="classe_de_danger" id="classe_de_danger">
                <?php
                $req = "SELECT * FROM classe_de_danger";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    echo '<option value="' .$row['id']. '" ';
                    echo ' >' .$row['libelle']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('classe_de_danger').value = ''">
            </div>

            <div>
                <label>Date d'entrée dans le stock :</label>
                <input type="date" name="date_entree" id="date_entree" value="<?php echo date("Y-m-d"); ?>">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_entree').value = ''">
            </div>

            <div>
                <label>Personne l'ayant entré dans le stock :</label>
                <select name="user_entree" id="user_entree">
                <?php
                $req = "SELECT id,nom,prenom FROM user ORDER BY user.nom ASC";
                $resultat = $mysqli->query($req);
                while ($row = $resultat->fetch_assoc())
                {
                    $s = '';
                    $id_user_co = $_SESSION['id'];
                    if ($row['id']==$id_user_co) {
                        $s = 'selected';
                        $name = $row['prenom'];
                        $last_name = $row['nom'];
                    }
                    echo '<option value="' .$row['id']. '" ' .$s. '>' .$row['nom']. ' ' .$row['prenom']. '</option>';
                }
                ?>
                </select>
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_entree').value = ''">
            </div>

            <div>
                <label>Remarque :</label>
                <input type="text" name="remarque" id="remarque">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('remarque').value = ''">
            </div>

            <div>
                <label>Combien voulez-vous en ajouter ?</label>
                <input type="number" id="quantite" value="1" name="quantite" min="1" max="10">
                <img src="images/remove.png" alt="Vider" onclick="document.getElementById('quantite').value = ''">
            </div>  

            <div>            
                <div class="b">
                    <input type="hidden" name="add">
                    <input onclick="return confirm('Ajouter ce(s) produit(s) au stock ?');" class="bouton-add" type="submit" value="Ajouter">
                </div>
            </div>

    </form>
</div>