<?php ob_start(); ?>

<div class="card" style="color: black">
  <h5 class="card-header" style ="line-height: 10px;">
    <div style="margin-top: 10px"><?php echo $projet[0]['nomp'];?></div>
  
  <div class="float-right">

    <!--<a href="#" class="btn btn-success">Accepter</a>-->
    
    <a href="#" disabled class="btn btn-primary">Contacter Entreprise</a>
    <a href="#" disabled class="btn btn-danger">Refuser</a>
    <br> <br>
    
    <form action="?page=prop&projet=<?php echo $_GET['projet'] ?>" method="POST">
      <div class="input-group">
        <select required class="custom-select" name="semestre">
          <option selected disabled hidden value="error">Semestre</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <div class="input-group-append">
          <button type="submit" class="btn btn-outline-secondary">Accepter</button>
        </div>
      </div>
    </form> 
  
  </div>
  </h5>

  <div class="card-body">
    <h5 class="card-title">Proposé par <?php echo $auteur;?></h5>
    <br>
    <h5>Description</h5>
    <p class="card-text"><?php echo $descr;?>
  </p>
  <?php if(isset($projet[0]['logo'])) echo "<img src='./views/doc/logo/".$projet[0]['logo']."' width='300'>";?>
    
  </div>
</div>
<?php $content = ob_get_clean(); ?>