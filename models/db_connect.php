<?php
    function bdd()
    {
        //CONNEXION A LA BDD
        try
        {
            $bdd = new PDO('mysql:host=localhost; port=3307; dbname=auberge; charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
    }
?>