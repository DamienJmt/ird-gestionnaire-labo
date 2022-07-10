<form action="fonctions/modifier.php.php" class ='txt' method="post">

<div class="div-g"><!-- -------------------------------------------DIV-GAUCHE--------------------------------------------- -->

<div>
    <div>
    <label>Nom :</label>
    <input type="text" name="nom" id="nom">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('nom').value = ''">
</div>

<div>
    <div>
    <label>Marque :</label>
    <input type="text" name="marque" id="marque">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('marque').value = ''">
</div>

<div>
    <div>
    <label>Référence :</label>
    <input type="text" name="reference" id="reference">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('reference').value = ''">
</div>

<div>
    <div>
    <label>Conditionnement :</label>
    <input type="text" name="volume" id="volume">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('volume').value = ''">
</div>

<div>
    <div>
    <label>Lieu Physique :</label>
    <input type="text" name="lieu" id="lieu">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('lieu').value = ''">
</div>

<div>
    <div>
    <label>Etagère :</label>
    <input type="text" name="etagere" id="etagere">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('etagere').value = ''">
</div>

<div>
    <div>
    <label>Unité :</label>
    <input type="text" name="unite" id="unite">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('unite').value = ''">
</div>

<div>
    <div>
    <label>Classe de danger :</label>
    <input type="text" name="classe" id="classe">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('classe').value = ''">
</div>

<div>
    <div>
    <label>Date d'entrée dans le stock :</label>
    <input type="date" name="date_entree" id="date_entree">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('date_entree').value = ''">
</div>

</div><!-- ---------------------------------------------------------------------------------------------------- -->


<div class="div-d"><!-- -------------------------------------------DIV-DROITE----------------------------------------------- -->

<div>
    <div>
    <label>Personne l'ayant entré dans le stock :</label>
    <input type="text" name="user_entree" id="user_entree">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('user_entree').value = ''">
</div>

<div>
    <div>
    <label>Remarque :</label>
    <input type="text" name="remarque" id="remarque">
    <img src="images/remove.png" alt="Vider" onclick="document.getElementById('remarque').value = ''">
</div>

<div>
    <input type="hidden" name="add">
    <input class="bouton-modif" type="submit" value="Ajouter">
</div>

<div>
</div>

</div><!-- ---------------------------------------------------------------------------------------------------- -->

</form>