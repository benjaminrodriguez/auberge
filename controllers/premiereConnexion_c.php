     <form action="index.php?page=premierConnexion" method="POST" class="form-signin">
     <!-- <div id="erreur">
  <p>Vous n'avez pas rempli correctement les champs du formulaire !</p>
</div> -->

 

  <input type="submit" id="envoi" value="Inscription"/> 
 <!-- <input type="reset" id="rafraichir" value="Rafraîchir" /> -->
</form>


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
});/*

</script>

      <!-- Bouton de retour à l'écran d'accueil -->
<form action='index.php?page=connexion' method='POST'>
  <button type="submit" value="Retour à l'écran de connexion" class="form-signin">Retour à l'écran de connexion</button>
</form>
   
<?php
    require(dirname(__FILE__).'/../views/premiereConnexion_v.php');
?>