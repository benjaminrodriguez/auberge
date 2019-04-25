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
        else require_once('Controllers/connection_Controllers.php');
    }
    else if (isset($_GET['page']) && !empty($_GET['page']) && isset($_SESSION['id'])) 
    {
        if ($_GET['page'] == 'dc') //deconnection
        {
            require_once('Controllers/php/disconnect.php');
        }
        else if ($_GET['page'] == 'home') //accueil
        {
            require_once('Controllers/home_Controllers.php');
        }
        else if ($_GET['page'] == 'profile') //profil
        {
            require_once('Controllers/profile_Controllers.php');
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