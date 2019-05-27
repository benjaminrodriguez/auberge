<?php $title = 'premiereConnexion'; ?>
<?php ob_start(); ?>

<div class="well">
    <form enctype="multipart/form-data" action="index.php?page=firstconnect" method="POST">   
        <input type="password" name="password" placeholder="Mot de passe"required>
        <input type="text"  placeholder="nom" name="nom" required>
        <input type="text"  placeholder="prenom" name="prenom" required>
        <input type="email" placeholder="you@memocards.com" name="email" required>
        <br>
        <button class="btn btn-lg btn-block" name="SignIn" type="submit">S'inscrire</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
