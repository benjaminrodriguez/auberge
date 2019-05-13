<?php $title='Accueil';  ?>
<?php ob_start(); 
if ($_SESSION['role'] === "prof") {
    ?>
    <div class="well">

        <h4><u>Les Propositions</u>
            <div style="float: right;">
                <a href="?page=create_projet"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Creer Projet</button></a>
                <a href="?page=accepted"><button class="btn btn-mini btn-inverse hidden-phone" type="button">Projets acceptés</button></a>
            </div>
        </h4>
        <br>

        
    
        <div class="container">
            <div class="row">
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
                </div>
            </div>
        </div>

    </div>
    <?php
} else if($_SESSION['role'] === "eleve") {
    ?>
        <div class="well">

            <h4><u>Vos Projets</u>
               
            </h4>
            <br>



            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <h5 class="card-header">Titre proposition</h5>
                            <div class="card-body">
                                <h5 class="card-title">Entreprise</h5>
                                <p class="card-text">Résumé proposition</p>
                                <a href="#" class="btn btn-primary">Voir plus</a>
                                <a href="#" class="btn btn-primary" style="float: right;">Ma VM</a>
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
                                <a href="#" class="btn btn-primary">Voir plus</a>
                                <a href="#" class="btn btn-primary" style="float: right;">Ma VM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php

}
?>



<?php $content = ob_get_clean(); ?>