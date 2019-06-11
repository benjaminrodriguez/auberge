<?php

    if ($_POST && isset($_GET['projet'])) {

        var_dump($_POST);
        $idlast = insert_newip();
        $idlast = insert_newgrp('5005',$_GET['projet'], $idlast);
        upd_projdispo($_GET['projet']);
        
        
        ///FINIR
        foreach ($_POST as $key => $value) {
            //echo $_POST[$key];
            upd_userdispo($_POST[$key]);
            insert_userhasgrp($_POST[$key], $idlast);
            
        }    
        foreach ($_POST as $key => $value) {
            $res = shell_exec('adduser.sh');;
            
        }    

        header('Location: index.php?page=v&projet='.$_GET['projet']);
        exit();
    }

    $eleve = select_elevelibre();
    var_dump($_POST);

    require(dirname(__FILE__).'/../views/assoc_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>