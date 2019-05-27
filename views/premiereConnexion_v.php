<?php $title = 'premiereConnexion'; ?>
<?php ob_start(); ?>

<div class="well">
    <form enctype="multipart/form-data" action="index.php?page=firstconnect" method="POST">   
        <input type="text"  placeholder="Nom" name="nom" required>
        <input type="text"  placeholder="Prénom" name="prenom" required>
        <input type="email" placeholder="Adresse IN'TECH" name="email" required>
        <br>
       
    <script>
// Contrôle du courriel en fin de saisie
//CONTROLE MAIL
document.getElementById("email").addEventListener("input", function (e) {
    var validiteCourriel = "";
    var couleurMsg = "red";
    if (e.target.value.indexOf("@intechinfo.fr") === -1) {
        // Le courriel saisi ne contient pas le caractère @
        validiteCourriel = "Adresse invalide";
    } else {
      validiteCourriel = "Adresse valide";
      var couleurMsg = "green"; 
    }
    var aideCourrielElt = document.getElementById("aideCourriel");
    document.getElementById("aideCourriel").textContent = validiteCourriel;
    aideCourrielElt.style.color = couleurMsg;
})
</script>
 <button class="btn btn-lg btn-block" name="SignIn" type="submit">S'inscrire</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
