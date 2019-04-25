<?php 

function creation_projet_INSERT ($nomProjet, $description, $eleves, $status, $email)
    {
        $bdd = bdd();
        // CREATION PROJET
        $create_projet = $bdd->prepare(
        'INSERT INTO projet (nom, ????????????) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?);
        ');
        $create_projet->execute(array($nomProjet, $description, $eleves, $status, $email));
    }
?>