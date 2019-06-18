<?php

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['entre']) ) 
    {
        insert_entre($_POST['email'], $_POST['psw'], $_POST['nom'], $_POST['prenom'], $_POST['entre'], $_POST['tel']);
        header('Location: index.php?page=connectionentreprise');
        exit;  
       //var_dump(($_SESSION));
    }

    require(dirname(__FILE__).'/../views/inscription_entre_v.php');
    require(dirname(__FILE__).'/../views/template.php');

?>