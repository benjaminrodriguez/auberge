<?php

if (isset($_POST['nameProject']) && isset($_POST['describeProject']))
{
    // CREATION PROJET

    creation_projet_INSERT($_POST['nameProject'], $_POST['describeProject']);
}
    require(dirname(__FILE__).'/../views/create_projet_v.php');
    require(dirname(__FILE__).'/../views/template.php');
?>