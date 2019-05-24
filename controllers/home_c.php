<?php

    //SI L'UTILISATEUR N'EST PAS CONNECTE, IL EST REDIRIGER VERS LA PAGE DE CONNEXION
    if (!isset($_SESSION['id']))
    {
        header('Location: index.php?page=connection');
        exit;
    } 

    if (isset($_SESSION['statut']) && $_SESSION['statut'] === "prof") {
        //$notifs = checknotif_SELECT();


        // RECUPERER LES PROPOSITIONS DE PROJETS
        $projet = voirdispo();
    }
    else {
        // RECUPERER LES SUJET DES LELEVE
    }

    require(dirname(__FILE__).'/../views/home_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>