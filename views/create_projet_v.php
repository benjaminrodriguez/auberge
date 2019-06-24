<?php ob_start(); ?>
<div class="well">
  <form action="" method="POST" class="form-example">
  A propos du Projet :
    <div class="form-example">
        <label for="nameProject">Nom du projet : </label>
        <input type="text" name="nameProject" id="nameProject" required>
    </div>
    <textarea id="describeProject" name="describeProject"
    rows="5" cols="33">Description du Projet</textarea>
        <select required class="custom-select" name="semestre">
          <option selected disabled hidden value="error">Semestre</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
    <div class="form-example"></br>
        <input type="submit" class='btn btn-success' value="Créer Projet !">
    </div>
  </form>
</html>
</div>
<?php $content = ob_get_clean(); ?> 