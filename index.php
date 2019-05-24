<?php
    session_start();

    $_SESSION['role'] = "eleve";
    //$_SESSION['role'] = "prof";

    // REQUIRE LES MODELES DE BDD
    require('models/db_connect.php');
    require('models/modele_delete.php');
    require('models/modele_insert.php');
    require('models/modele_select.php');
    require('models/modele_update.php');

    if ($_GET['page'] == 'connection')
    {
        if(isset($_SESSION['username']))  header('Location: index.php?page=home');
        //else require_once('controllers/connection_Controllers.php');
        else require_once('controllers/connection_c.php');

    }
    else if (isset($_GET['page']) && !empty($_GET['page']) && isset($_SESSION['id'])) 
    {   
        
        // DECONNECTION

        if ($_GET['page'] == 'dc')
        {
            require_once('controllers/php/disconnect.php');
        }
        // ACCUEIL

        else if ($_GET['page'] == 'home')
        {
            require_once('controllers/home_c.php');
        }
        // PROFIL

        else if ($_GET['page'] == 'profile')
        {
            require_once('controllers/profile_Controllers.php');
        }    
        // NOUVEAU PROJET
    
        else if ($_GET['page'] == 'create_projet') 
        {
            require_once('Controllers/create_project_c.php');
        }
        else if ($_GET['page'] == 'prop')
        {
            require_once('controllers/prop_c.php');
        }        
        else if ($_GET['page'] == 'create_projet') 
        {
            require_once('Controllers/create_project_c.php');
        }         
        else if ($_GET['page'] == 'gestion') 
        {
            require_once('controllers/gestion_c.php');
        }     
        else if ($_GET['page'] == 'accepted') 
        {
            require_once('controllers/accepted_c.php');
        }
        else if ($_GET['page'] == 'v') 
        {
            require_once('controllers/voirprojet_c.php');
        }
        else if ($_GET['page'] == 'modifyp') 
        {
            require_once('controllers/modify_projet_c.php');
        } 
        else
        {
            require_once('views/404.php');
        }
    }
    
    else if (isset($_GET['page']) && !empty($_GET['page'])) 
    {
        if ($_GET['page'] == 'projets') 
        {
            require_once('controllers/project_c.php');
        }
        else 
        {
            header('Location: index.php?page=connection');
            exit();
        }
        
    }

    else 
    {
        header('Location: index.php?page=connection');
        exit();
    }
?>