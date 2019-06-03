<?php

if (isset($_GET['projet'])) {
    //RECUP LES INFOS DANS LA BDD SUR LA PROPOSITION
    //echo $_GET['projet'];
    $projet = voirprojet1($_GET['projet']);

    if (isset($_POST['semestre']) || isset($_POST['nameProject']) || isset($_POST['describeProject'])) {
        if ($_POST['semestre'] !== $projet[0]['semestre'] || $_POST['nameProject'] !== $projet[0]['nom'] || $_POST['describeProject'] !== $projet[0]['resume']) {
            
            //var_dump($projet);
            upd_project($_POST['nameProject'], $_POST['describeProject'], $_POST['semestre'], $_GET['projet']);
            $projet = voirprojet1($_GET['projet']);
            //header('Location: ?page=modifyp&project=' . $_GET['projet']);
            //exit;   
        }
    }



}
require(dirname(__FILE__).'/../views/modify_projet_v.php');
require(dirname(__FILE__).'/../views/template.php');

?>