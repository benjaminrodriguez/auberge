<?php $title='Gestion Projets';  ?>
<?php ob_start(); ?>

<div class="card" style="color: black;">
  <h5 class="card-header">PROJETS S?</h5>
  <div class="card-body">
   
    Voici les projets de ce semestre
    <div style="float: right;">
                <a href="?page=create_projet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>
    </div>
    <br><br>
    
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
            <b>Membres</b>
            </div>
            <div class="col">
            <b>Entreprise</b>
            </div>
            <div class="col">
              
            </div>
            <div class="col">
              
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
            Y B E
            </div>
            <div class="col">
            In'tech
            </div>
            <div class="col">
                <a href="#" class="btn btn-success">voir</a> 
            </div>
            <div class="col">
               <a href="#" class="btn btn-primary">modifier</a>
            </div>
            <div class="col">
                <a href="#" class="btn btn-info">publier</a>
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
            Y B E
            </div>
            <div class="col">
            In'tech
            </div>
            <div class="col">
                <a href="#" class="btn btn-success">voir</a> 
            </div>
            <div class="col">
               <a href="#" class="btn btn-primary">modifier</a>
            </div>
            <div class="col">
                <a href="#" class="btn btn-info">publier</a>
            </div>

            
        </div>
    </div>

    
  </div>
</div>



<?php $content = ob_get_clean(); ?>