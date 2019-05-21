<?php $title='Gestion Projets';  ?>
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
                BESOIN RESME
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
                In'tech
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s1[$key]['proj'];?>" class="btn btn-success">voir</a> 
                </div>
                <div class="col">
                    <a href="?page=modifyp&projet=<?php echo $s1[$key]['proj'];?>" class="btn btn-primary">modifier</a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-info">publier</a>
                </div>
                </div>

                <?php

            }
        }
        ?>
        


    </div>
    <br>
</div>



<?php $content = ob_get_clean(); ?>