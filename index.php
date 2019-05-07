<?php
    session_start();

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
        else require_once('controllers/home_c.php');
    }
    else if (isset($_GET['page']) && !empty($_GET['page'])) 
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
            require_once('controllers/create_project_c.php');
        }
        else if ($_GET['page'] == 'projets') 
        {
            require_once('controllers/project_c.php');
        }            
        else if ($_GET['page'] == 'gestion') 
        {
            require_once('controllers/gestion_c.php');
        }            
        else
        {
            require_once('views/404.php');
        }
    }
    else 
    {
        header('Location: index.php?page=connection');
        exit();
    }
?>