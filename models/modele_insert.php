<?php 

function creation_projet_INSERT ($nomProjet, $description, $eleves, $status, $email)
    {
        $bdd = bdd();
        // CREATION PROJET
        $create_projet = $bdd->prepare(
        'INSERT INTO projet (nom, idvm, port, statut, groupe_id, projet_id, semestre) 
        VALUES (?, ?, ?, ?, ?, ?, ?);
        ');
        $create_projet->execute(array($nomProjet, $description, $eleves, $status, $email));
    }
?>