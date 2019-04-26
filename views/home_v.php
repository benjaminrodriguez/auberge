<?php $title='Accueil';  ?>
<?php ob_start(); ?>

<a href="index.php?page=newprojet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>



<?php $content = ob_get_clean(); ?>