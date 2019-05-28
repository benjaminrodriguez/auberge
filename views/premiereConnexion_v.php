<?php $title = 'premiereConnexion'; ?>
<?php ob_start(); ?>

<div class="well"><center>
    <form enctype="multipart/form-data" action="index.php?page=firstconnect" method="POST">   
        <input type="text"  placeholder="Nom" name="nom" required></br>
        <input type="text"  placeholder="Prénom" name="prenom" required></br>
        <input type="email" placeholder="Adresse IN'TECH" id="email" name="email" required></br>
        <br>
       </center>
    
 </br><center><button class="btn btn-success" name="SignIn" type="submit">S'inscrire</button></center>
    </form>
</div>
<script>

//CONTROLE MAIL INTECH JS
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
<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
