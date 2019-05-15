<?php

function affecter_projet($groupeId) {
    $db = dbConnect();
    $req = $db->prepare("UPDATE `groupe` SET `statut` = 'affecté' WHERE `groupe`.`id` = :id");
    $req->execute(array(
      ":id" => $groupeId,
    ));
    }


function qualififié_projet($projetId){
    $db = dbConnect();
    $req = $db->prepare("UPDATE `groupe` SET `statut`= `qualifié` WHERE `groupe`. `id`= :id" );
    $req->execute(array(
        ":id" => $projetId,
    ));
}    
?>