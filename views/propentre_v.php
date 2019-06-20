<?php ob_start(); ?>

<div class="well">
  <h3>Nouvelle proposition projet</h3>
    <form method="POST" enctype="multipart/form-data">
      Nom :<br>
      <input type="text"  style="width: 320px;"required name="nom"><br>
      Description détaillée:<br>
      <textarea required rows="5" cols="42" name="description"></textarea><br>
      Charte projet :(Document Word)<br>
      <input type="file"
        name="charte" class="btn btn-outline-success"
        accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"><br>
        Logo:(image)<br>
      <input type="file" class="btn btn-outline-success"
        name="projectpic"
        accept=".jpg, .jpeg, .png">
      <br><br>
      <input type="submit" class="btn btn-success">

    </form>
</div>

    
 
<?php $content = ob_get_clean(); ?>