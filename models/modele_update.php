<?php

function affecter_projet($groupeId, $sem) {
    $db = bdd();
    $req = $db->prepare("UPDATE `groupe` SET `statut`= 'affecté',`semestre`= :sem WHERE `projet_id`= :id");
    $req->execute(array(
      ":id" => $groupeId,
      ":sem" => $sem
    ));
    }


function qualififié_projet($projetId){
    $db = bdd();
    $req = $db->prepare("UPDATE `groupe` SET `statut`= `qualifié` WHERE `groupe`. `id`= :id" );
    $req->execute(array(
        ":id" => $projetId,
    ));
}    

function modifier_projet($projetId){
    $db = bdd();
    $req = $db->prepare("UPDATE `projet` SET `nom`= `nom` = :nom , `description` = :description , `semestre` = :semestre WHERE `projet`. `id`= :id" );
    $req->execute(array(
        ":id" => $_GET['projet'],
        ":nom" => $_POST['nameProject'],
        ":description" => $_POST['describeProject'],
        ":semestre" => $_POST['semestre']

    ));
}

function password_UPDATE( $value_attribut, $id)
{
    $bdd = bdd();
    $req = $bdd->prepare(' UPDATE user
                        SET password = ? 
                        WHERE id = ? 
                        LIMIT 1
                        ');
    $req->execute(array($value_attribut, $id));
}

function picture_UPDATE( $value_attribut, $id)
{
    $bdd = bdd();
    $req = $bdd->prepare(' UPDATE user
                        SET avatar = ? 
                        WHERE id = ? 
                        LIMIT 1
                        ');
    $req->execute(array($value_attribut, $id));
}
 
?>