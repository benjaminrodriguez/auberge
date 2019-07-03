<?php
//PAGE DES PROJETS S1/S2

$s1 = select_projetS(1);
$s2 = select_projetS(2);
$s3 = select_projetS(3);


  


    require(dirname(__FILE__).'/../views/projet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>