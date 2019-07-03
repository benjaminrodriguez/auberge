<?php $title='Gestion Projets';  ?>
<?php ob_start(); ?>
<a href="?page=gestion"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Retour</button></a><br><br>
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
                <?php echo $s1[$key]['resume']; ?>
                </div>
                <div class="col">
                <?php echo $s1[$key]['entreprise']; ?>
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-success">voir</a> 
                
                    <a href="?page=assoc&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-info">associer</a>
                    <?php
                    if ($s1[$key]['statut'] !== "affecté") {
                        ?>
                        <a href="?page=publier&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-warning">Publier</a>
                        <?php
                    }
                    ?>
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
                <?php echo $s2[$key]['nom']; ?>
                </div>
                <div class="col">
                <?php echo $s2[$key]['resume']; ?>
                </div>
                <div class="col">
                <?php echo $s2[$key]['entreprise']; ?>
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s2[$key]['id'];?>" class="btn btn-success">voir</a> 
                    <a href="?page=assoc&projet=<?php echo $s2[$key]['id'];?>" class="btn btn-info">associer</a>
                    <?php
                    if ($s1[$key]['statut'] !== "affecté") {
                        ?>
                        <a href="?page=publier&projet=<?php echo $s2[$key]['id'];?>" class="btn btn-warning">Publier</a>
                        <?php
                    }
                    ?>
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