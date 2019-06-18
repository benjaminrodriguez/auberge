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
<div class="well" style="padding-right: 5%; padding-left: 5%;padding-top: 5%">
    <form id="form" class="form-signin" action="index.php?page=connection" method="POST"> 
        <input type="text" name="username" class="form-control" placeholder="Adresse mail" required autofocus>

        <label for="inputPassword" class="sr-only"></label><br>
        <input type="password" name="password" value="" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

        
        <br><center><button class=" btn btn-success" style="font-size:1.2em; text-align: center">Connexion</button></center>
    </form>
    </div>
<div>
       
<br><center> <a href =".?page=inscriptionentre"  button class=" btn btn-success" style="font-size:1.2em; text-align: center">Inscription</button></center></a>
</div>
</div>


<?php $content = ob_get_clean(); ?>

</body>
