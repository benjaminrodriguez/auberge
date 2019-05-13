<?php $title='Gestion Projets';  ?>
<?php ob_start(); ?>

<div class="well">

<div class="card" style="color: black;">
  <h6 class="card-header">PROJETS S1</h6>
  <div class="card-body">
   
    <p class="card-text">Voici les projets acceptés</p>
    <!-- menu -->
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
            <b>Nom</b>
            </div>
            <div class="col">
            <b>Description</b>
            </div>
            <div class="col">
            <b>Entreprise</b>
            </div>
            <div class="col">
              
            </div>
        </div>
        <br>
        <div class="row align-items-start">
            <div class="col">
            Auberge
            </div>
            <div class="col">
            Hergeur
            </div>
            <div class="col">
            In'tech
            </div>
            <div class="col">
                <a href="#" class="btn btn-success">voir</a> &nbsp <a href="#" class="btn btn-primary">affecter</a>
            </div>
        </div>
    </div>
  </div>
</div>
<br>
<div class="card" style="color: black;">
  <h6 class="card-header">PROJETS S2</h6>
  <div class="card-body">
   
    <p class="card-text">Voici les projets acceptés</p>
    <!-- menu -->
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
            <b>Nom</b>
            </div>
            <div class="col">
            <b>Description</b>
            </div>
            <div class="col">
            <b>Entreprise</b>
            </div>
            <div class="col">
              
            </div>
        </div>
        <br>
        <div class="row align-items-start">
            <div class="col">
            Auberge
            </div>
            <div class="col">
            Hergeur
            </div>
            <div class="col">
            In'tech
            </div>
            <div class="col">
                <a href="#" class="btn btn-success">voir</a> &nbsp <a href="#" class="btn btn-primary">affecter</a>
            </div>
        </div>
    </div>
  </div>
</div>

</div>


<?php $content = ob_get_clean(); ?>