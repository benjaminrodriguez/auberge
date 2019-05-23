<?php

    //PAGE POUR LA GESTION DES PROJETS ACCPETES POUR LE PROF

    $s1 = select_acceptedprojetS(1);
    $s2 = select_acceptedprojetS(2);

    require(dirname(__FILE__).'/../views/accepted_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>