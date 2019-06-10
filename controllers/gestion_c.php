<?php

    //PAGE POUR LA GESTION DES PROJETS POUR LE PROF

    $_SESSION['semestre'] = 1;
    $s1 = select_projetS($_SESSION['semestre']);


    function qualifié_projetA(){
        if(isConnect()){
          qualifié_projet($_GET['id']);
          header('Location: index.php');
        }
      }

    function affecter_projetA(){
        if(isConnect()){
          affecter_projet($_GET['id']);
          header('Location: index.php');
        }
      }

  
    

    require(dirname(__FILE__).'/../views/gestion_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>