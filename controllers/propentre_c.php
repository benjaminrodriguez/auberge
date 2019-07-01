<?php

//var_dump($_FILES);
//var_dump($_POST);

    if(isset($_POST['nom']) && isset($_POST['description'])){

        $logo= null;
        $charte = null;

        if (isset($_FILES['projectpic'])) {
            if ($_FILES['projectpic']['type'] == 'image/png' || $_FILES['projectpic']['type'] == 'image/jpg' || $_FILES['projectpic']['type'] == 'image/jpeg') {
                if (!is_file('./views/doc/logo'.$_FILES['projectpic']['name'])) {
    
                $uploaddir = './views/doc/logo/';
                $uploadfile = $uploaddir . basename($_FILES['projectpic']['name']);
                move_uploaded_file($_FILES['projectpic']['tmp_name'], $uploadfile);

                $logo = $_FILES['projectpic']['name'];
                
                }
            }
        }

        if (isset($_FILES['charte'])) {
            
            if (!is_file('./views/doc/'.$_FILES['charte']['name'])) {

            $uploaddir = './views/doc/';
            $uploadfile = $uploaddir . basename($_FILES['charte']['name']);
            move_uploaded_file($_FILES['charte']['tmp_name'], $uploadfile);

            $charte = $_FILES['charte']['name'];
            }
            
        }

        insert_projetentre($_POST['nom'], $_POST['description'], $_SESSION['nom_ecole'],$charte,$logo);
    }



    require(dirname(__FILE__).'/../views/propentre_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>