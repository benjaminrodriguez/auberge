<?php 
// the breaker
$title='Gestion Projets';  ?>
<?php ob_start(); ?>

<a href="?page=create_projet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>
<a href="?page=home"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Propositions</button></a>
<a href="?page=accepted"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Projets acceptés</button></a>
<br><br>
<div class="card" style="color: black;">
  <h5 class="card-header">PROJETS S<?=  $_SESSION['semestre'] ?></h5>
  <div class="card-body">
   
    Voici les projets de ce semestre
    <!--
        <div style="float: right;">
                <a href="?page=create_projet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>
    </div>
    <br><br>
-->
    
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
                    <?php
                    $nom = getname($s1[$key]['id']);
                    foreach ($nom as $key1 => $value1) {
                        echo $nom[$key1]['nom'].' ';
                    }
                    ?>
                    
                </div>
                <div class="col">
                <?php echo $s1[$key]['entreprise']; ?>
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-success">Voir</a> 
                </div>
                <div class="col">
                    <a href="?page=modifyp&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-primary">Modifier</a>
                </div>
                <div class="col">
                    <?php
                    if ($s1[$key]['statut'] !== "affecté") {
                        ?>
                        <a href="?page=publier&projet=<?php echo $s1[$key]['id'];?>" class="btn btn-info">Publier</a>
                        <?php
                    }
                    ?>
                </div>
                </div>
                <br>
                <?php

            }
        }
        ?>
        


    </div>
    <br>
</div>



<?php $content = ob_get_clean(); ?>