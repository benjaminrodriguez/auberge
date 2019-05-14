<?php ob_start(); ?>

<div class="card" style="color: black">
  <h5 class="card-header" style ="line-height: 10px;">
    <div style="margin-top: 10px"><?php echo $titre;?>
    <div style="float: right;"> Semestre <?php echo $auteur;?> </div>
  </div>
  
  <div class="float-right">

    <!--<a href="#" class="btn btn-success">Accepter</a>
    
    <a href="#" class="btn btn-primary">Contacter Entreprise</a>
    <a href="#" class="btn btn-danger">Refuser</a>
    <br> <br>-->
  
  </div>
  </h5>

  <div class="card-body">
    <h5 class="card-title">Proposé par <?php echo $auteur;?></h5>

    <h5>Description</h5>
    <p class="card-text">
      Participants : 
      <?php 
        foreach ($projet as $key => $value) {
          echo $projet[$key]['name']." ";
        } 
        echo $descr;?>
    </p> 
  </div>
</div>
<?php $content = ob_get_clean(); ?>