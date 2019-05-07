<?php ob_start(); ?>
<div class="well">
  <form action="" method="POST" class="form-example">
    <div class="form-example">
        <label for="nameProject">Nom du projet : </label>
        <input type="text" name="nameProject" id="nameProject" required>
    </div>
    <textarea id="describeProject" name="describeProject"
    rows="5" cols="33">Description du Projet</textarea>
    <div class="form-example">
        <input type="submit" value="Créer Projet !">
    </div>
  </form>
</html>
</div>
<?php $content = ob_get_clean(); ?>