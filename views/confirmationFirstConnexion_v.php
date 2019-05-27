<?php $title = 'COnfirmationPremiereConnexion'; ?>
<?php ob_start(); ?>

<center>
<div class="well">
Veuillez noter votre mot de passe : <?php echo $_SESSION['passRand'] ?></br>
 <a href = "index.php?page=connection" button class="btn btn-success" name="SignIn" type="submit">Retour connexion</button></a>
    
</div>
</center>

<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
