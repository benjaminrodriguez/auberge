<?php $title='Accueil';  ?>
<?php ob_start(); 
if ($_SESSION['statut'] === "prof") {
    ?>
    <div class="well">

        <h4><u>Les Propositions</u>
            <div style="float: right;">
                <a href="?page=create_projet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>
                <a href="?page=accepted"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Projets acceptés</button></a>
            </div>
        </h4>
        <br>

        
    <?php 
    if (!isset($projet[0]['nomp'])) {
        ?>
        Il n'y a pas de projet a qualifier.
        <?php
    }
    else {
        ?>

        <div class="container">
            <div class="row">
            <?php
            $i = 0;
            foreach ($projet as $key => $value) {
                if ($i%2 == 0 && $i !== 0) {
                    ?>
                    </div>
                    <br>
                    <div class="row">
                    <?php
                } else if ($i === 0) {
                } else {
                
                    ?>
                    &nbsp
                    <?php
                }
                ?>
                <div class="col-sm">
                    <div class="card">
                        <h5 class="card-header"><?php echo $projet[$key]['nomp'];?></h5>
                        <div class="card-body">
                            <h5 class="card-title">Entreprise</h5>
                            <p class="card-text">Résumé proposition</p>
                            <a href="?page=prop&projet=<?php echo $projet[$key]['idp']; ?>" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
                
                <?php
                $i++;
                if (!isset($projet[$key+1]) && $i%2 !== 0 ) {
                    ?>
                    <div class="col-sm">
                    </div>
                    <?php
                }
            }
            ?>
            <!--
                <div class="col-sm">
                    <div class="card">
                        <h5 class="card-header">Titre proposition</h5>
                        <div class="card-body">
                            <h5 class="card-title">Entreprise</h5>
                            <p class="card-text">Résumé proposition</p>
                            <a href="?page=prop" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
                &nbsp
                <div class="col-sm">  
                    <div class="card">
                        <h5 class="card-header">Titre proposition</h5>
                        <div class="card-body">
                            <h5 class="card-title">Entreprise</h5>
                            <p class="card-text">Résumé proposition</p>
                            <a href="?page=prop" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>-->
                
            </div>
            
        </div>

    </div>
    <?php
    }
    ?>
    <?php
} else if($_SESSION['statut'] === "eleve") {
    ?>
        <div class="well">

            <h4><u>Vos Projets</u>
               
            </h4>
            <br>



            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <h5 class="card-header">Agora</h5>
                            <div class="card-body">
                                <h5 class="card-title">In'tech</h5>
                                <p class="card-text">Forum communautaire pour IN'TECH.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                                <a href="http://192.168.152.150/Agora/index.php" class="btn btn-primary" style="float: right;">Ma VM</a>
                            </div>
                        </div>
                    </div>
                    &nbsp
                    <div class="col-sm">  
                        <div class="card">
                            <h5 class="card-header">ALL'INTECH</h5>
                            <div class="card-body">
                                <h5 class="card-title">In'tech</h5>
                                <p class="card-text">Jeu de poker en ligne.</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                                <a href="http://192.168.152.151:5000" class="btn btn-primary" style="float: right;">Ma VM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php

}
 else if($_SESSION['statut'] === "entre") {
    ?>
        <div class="well">
            <a href="?page=propentre" class="btn btn-success">Proposer sujet</a> 

        </div>

    <?php

}
?>



<?php $content = ob_get_clean(); ?>