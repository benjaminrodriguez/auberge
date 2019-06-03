<?php

function affecter_projet($groupeId, $sem) {
    $db = bdd();
    $req = $db->prepare("UPDATE `projet` SET `statut`= 'affecté', `semestre`= :sem  WHERE projet.id = :id");
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

function upd_premiereconnect($mail,$psw,$avatar,$nom,$prenom){
    $db = bdd();
    $req = $db->prepare("UPDATE `user` SET `password`= :psw,`avatar`=:avatar,`nom`=:nom,`prenom`=:prenom,`actif`='up' WHERE mail LIKE :mail;");
    $req->execute(array(
            ':mail' => $mail,
            ':psw' => $psw,
            ':avatar' => $avatar,
            ':nom' => $nom,
            ':prenom' => $prenom
            

    ));
}


function upd_project($name, $resume, $sm, $id){
    $db = bdd();
    $req = $db->prepare("UPDATE `projet` SET `nom`=:name,`resume`=:rsm,`semestre`= :sm WHERE id = :id;");
    $req->execute(array(
            ':name' => $name,
            ':rsm' => $resume,
            ':sm' => $sm,
            ':id' => $id  

    ));
}

 
?>