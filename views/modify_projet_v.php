<?php ob_start(); ?>
<div class="well">
  <form action="" method="POST" class="form-example">
  A propos du Projet :
    <div class="form-example">
        <label for="nameProject">Nom du projet : </label>
        <input type="text" name="nameProject" id="nameProject" value="<?php echo $projet[0]['nom']; ?>" required>
    </div>
    Description :
    <br>
    <textarea id="describeProject" name="describeProject"
    rows="5" cols="33" ><?php echo $projet[0]['resume']; ?></textarea>
        <select required class="custom-select" name="semestre">
          <option selected disabled hidden value="error">Semestre</option>
          <option value="1" <?php if ($projet[0]['semestre'] == 1) echo "selected"; ?> >1</option>
          <option value="2" <?php if ($projet[0]['semestre'] == 2) echo "selected"; ?>>2</option>
        </select>
    <div class="form-example">
        <input type="submit" value="Modifier !">
    </div>
  </form>
</html>
</div>
<?php $content = ob_get_clean(); ?>