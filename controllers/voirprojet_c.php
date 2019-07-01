<?php

$auteur= "In'tech";
$descr= "Il n'y a pas de résumé disponible.";
$titre= "Titre";
    if (isset($_GET['projet'])) {
        //RECUP LES INFOS DANS LA BDD SUR LA PROPOSITION
        //echo $_GET['projet'];
        $projet = voirprojet1($_GET['projet']);

        //var_dump($projet);
        if($projet[0]['statut'] == "affecté") {

            $auteurs = voirauteurprojet($_GET['projet']);
        }
    

    }

    require(dirname(__FILE__).'/../views/voirprojet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>