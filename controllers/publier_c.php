
<?php

    //PAGE POUR LA GESTION DES PROJETS POUR LE PROF


    if(isset($_GET['projet'])) {      
      upd_projdispo($_GET['projet']);
    }

    header('Location: index.php?page=gestion');
    exit();

  
    

?>