<?php

if (isset($_POST['nameProject']) && isset($_POST['describeProject']))
{
    // CREATION PROJET

    creation_projet_INSERT($_POST['nameProject'], $_POST['describeProject']);
}

if ($_POST['semestre'] == "s1")
{
    // LANCEMENT SCRIPT VM S1
}
else if ($_POST['semestre'] == "s2") 
{
    // LANCEMENT SCRIPT VM S2
}
    require(dirname(__FILE__).'/../views/create_projet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>