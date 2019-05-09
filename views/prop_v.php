<?php ob_start(); ?>

<div class="card" style="color: black">
  <h5 class="card-header" style ="line-height: 40px;">
    <?php echo $titre;?>
  <div class="float-right">
    <a href="#" class="btn btn-success">Accepter</a>
    <a href="#" class="btn btn-primary">Contacter Entreprise</a>
    <a href="#" class="btn btn-danger">Refuser</a>
</div>
</h5>
  <div class="card-body">
    <h5 class="card-title">Proposé par <?php echo $auteur;?> </h5>
    <p class="card-text"><?php echo $descr;?></p>
    
  </div>
</div>
<?php $content = ob_get_clean(); ?>