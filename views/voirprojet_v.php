<?php ob_start(); ?>

<div class="card" style="color: black">
  <h5 class="card-header" style ="line-height: 10px;">
    <div style="margin-top: 10px"><?php echo $projet[0]['nom'];?>
    <div style="float: right;"> Semestre <?php echo $projet[0]['semestre'];?> </div>
  </div>
  
  <div class="float-right">

    <!--<a href="#" class="btn btn-success">Accepter</a>
    
    <a href="#" class="btn btn-primary">Contacter Entreprise</a>
    <a href="#" class="btn btn-danger">Refuser</a>
    <br> <br>-->
  
  </div>
  </h5>

  <div class="card-body">
    <h5 class="card-title">Proposé par <?php echo $projet[0]['entreprise'];?></h5>

    <h5>Description</h5>
    <p class="card-text">
      Participants : 
      <?php 
      var_dump($auteurs);
        if (isset($auteurs[0])) {
          foreach ($auteurs as $key => $value) {
            echo $auteurs[$key]['nom']." ".$auteurs[$key]['prenom']." ";
          } 
        }
        echo "<br>";
        echo $projet[0]['resume'];;?>
    </p> 
  </div>
</div>
<?php $content = ob_get_clean(); ?>