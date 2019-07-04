<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>

<?php
if (isset($_SESSION['errorconnect'])) {
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Erreur!</strong> <?php echo $_SESSION['errorconnect'];
    unset($_SESSION['errorconnect']);
    ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <?php
}
?>

<div style="padding-right: 30%; padding-left: 30%;">
<div class="well"><center>
    <form enctype="multipart/form-data" action="index.php?page=inscriptionentre" id="monFormulaire" method="POST">   
        <input type="text"  placeholder="Nom" name="nom" required><br>
        <input type="text"  placeholder="Prénom" name="prenom" required><br>
        <input type="password"  placeholder="Mot de passe" name="psw" required><br>
        <label for="email"></label><input type="text" name="email" id="mail" class="champ" placeholder="Adresse mail"/ required><br>
        <input type="tel" name="tel"  placeholder="Téléphone"/ required><br>
        <input type="text" name="entre"  placeholder="Entreprise"/ required>
       
  </center>
    </div>
    </div>
<div>
<br>    
<center><button class="btn btn-success" id="subm" name="SignIn" type="submit">S'inscrire</button></center>
</form>
</div>
</div>


<?php $content = ob_get_clean(); ?>

</body>
