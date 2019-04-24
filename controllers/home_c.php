<?php

    //SI L'UTILISATEUR N'EST PAS CONNECTE, IL EST REDIRIGER VERS LA PAGE DE CONNEXION
    if (!isset($_SESSION['username']))
    {
        header('Location: index.php?page=connection');
        exit;
    } 

    if ($_SESSION['status'] === "prof") {
        $notifs = checknotif_SELECT();


        // RECUPERER LES PROPOSITIONS DE PROJETS
    }
    else {
        // RECUPERER LES SUJET DES LELEVE
    }

    require(dirname(__FILE__).'/../views/home_v.php');
    

    


?>