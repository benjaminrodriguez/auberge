<?php

    //PAGE POUR LA GESTION DES PROJETS POUR LE PROF

    $_SESSION['semestre'] = 1;
    $s1 = select_projetS($_SESSION['semestre']);

    require(dirname(__FILE__).'/../views/gestion_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>