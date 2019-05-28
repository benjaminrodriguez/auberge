<?php

if (isset($_POST['nameProject']) && isset($_POST['describeProject']) && isset($_POST['semestre']))
{
    // CREATION PROJET
    if(!isset($_POST['entreprise'])){
        $entreprise = "in'tech";
    } else {
        $entreprise = $_POST['entreprise'];
    }
    creation_projet_INSERT($_POST['nameProject'], $_POST['describeProject'], $entreprise, $_POST['semestre']);
}
    require(dirname(__FILE__).'/../views/create_projet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>