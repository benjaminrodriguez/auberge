<?php

    if(isset($_POST['username']) && isset($_POST['password'])) 
    {
        //RECUPERE LES DONNEES DE L'USER
       
       $data = select_connectprof($_POST['username'], $_POST['password']);
       sleep(1);
        
       //var_dump($data);
       //echo"fe";
        if (isset($data[0]['id'])) {
            
            
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['statut'] = $data[0]['statut'];
            $_SESSION['avatar'] = $data[0]['avatar'];
            $_SESSION['nom'] = $data[0]['nom'];
            $_SESSION['prenom'] = $data[0]['prenom'];
            $_SESSION['nom_ecole'] = $data[0]['nom_ecole'];
            $_SESSION['mail'] = $data[0]['mail'];
            header('Location: index.php?page=connection');
            exit;    
        }
        else {
            $_SESSION['errorconnect'] = "Le mot de passe est incorrect ou le compte n'existe pas.";
        }

        //var_dump(($_SESSION));
    }  
    require(dirname(__FILE__).'/../views/connection_prof_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>