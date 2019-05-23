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
        <?php
        if (isset($s1)) {
            
            foreach ($s1 as $key => $value) {
                ?>

                <div class="row align-items-start">
                <div class="col">
                <?php echo $s1[$key]['nom']; ?>
                </div>
                <div class="col">
                BESOIN RESME
                </div>
                <div class="col">
                In'tech
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s1[$key]['proj'];?>" class="btn btn-success">voir</a> 
                
                    <a href="#" class="btn btn-info">publier</a>
                </div>
                <br><br>
                </div>
                <?php

            }
        }
        ?>
    </div>
  </div>
</div>
<br>
<div class="card" style="color: black;">
  <h6 class="card-header">PROJETS S2</h6>
  <div class="card-body">
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
        <?php
        if (isset($s2)) {
            
            foreach ($s2 as $key => $value) {
                ?>

                <div class="row align-items-start">
                <div class="col">
                <?php echo $s1[$key]['nom']; ?>
                </div>
                <div class="col">
                BESOIN RESME
                </div>
                <div class="col">
                In'tech
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s2[$key]['proj'];?>" class="btn btn-success">voir</a> 
                    <a href="#" class="btn btn-info">publier</a>
                </div>
                <br><br>
                </div>

                <?php

            }
        }
        ?>
    </div>
  </div>
</div>

</div>


<?php $content = ob_get_clean(); ?>