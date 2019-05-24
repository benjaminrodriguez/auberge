<?php 
//AFFICHAGE DES PROJETS S1/S2
ob_start(); ?>
<div class="well">
<?php
//var_dump($s1);
?>
<h4>Projets S1</h4>
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
                    <?php 
                    if (isset($_SESSION['role']) && $_SESSION['role'] === "prof") {
                        ?>
                        <a href="#" class="btn btn-info">publier</a>
                        <?php
                    }
                    ?>
                </div>
                </div>

                <?php

            }
        }
        ?>
        <!-- <div class="row align-items-start">
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
    -->


    </div>
    <br>
</div>
<br>
<div class="well">
<h4>Projets S2</h4>
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
        if (isset($s2)) {
            
            foreach ($s2 as $key => $value) {
                ?>

                <div class="row align-items-start">
                <div class="col">
                <?php echo $s2[$key]['nom']; ?>
                </div>
                <div class="col">
                BESOIN RESME
                </div>
                <div class="col">
                    <?php
                    $nom = getname($s2[$key]['id']);
                    foreach ($nom as $key1 => $value1) {
                        echo $nom[$key1]['nom'].' ';
                    }
                    ?>
                    
                </div>
                <div class="col">
                In'tech
                </div>
                <div class="col">
                    <a href="?page=v&projet=<?php echo $s2[$key]['proj'];?>" class="btn btn-success">voir</a> 
                </div>
                <div class="col">
                    <a href="#" class="btn btn-primary">modifier</a>
                </div>
                <div class="col">
                <?php 
                    if (isset($_SESSION['role']) && $_SESSION['role'] === "prof") {
                        ?>
                        <a href="#" class="btn btn-info">publier</a>
                        <?php
                    }
                    ?>
                </div>
                </div>

                <?php

            }
        }
        ?>
    </div>
    <br>
</div>
<br>
<?php $content = ob_get_clean(); ?>