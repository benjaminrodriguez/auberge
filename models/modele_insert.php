<?php 
    function creation_projet_INSERT($name, $desc, $entre, $sem)
    {
      $bdd = bdd();
          $query = "INSERT INTO `projet`(`id`, `nom`, `resume`, `entreprise`, `datepublication`, `statut`, `semestre`) VALUES (NULL, :name , :desc, :entre, CURRENT_DATE, 'qualifié' , :sem)";
          $query_params = array(
            ':name' => $name,
            ':desc' => $desc,
            ':sem' => $sem,
            ':entre' => $entre
            );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
    }
    function newuser_INSERT($mail, $psw, $stat, $avatar, $nom, $prenom, $ecole)
    {
      $bdd = bdd();
          $query = "INSERT INTO `user`(`id`, `mail`, `password`, `statut`, `avatar`, `nom`, `prenom`, `nom_ecole`) VALUES (NULL,:mail,:psw,:stat,:avatar,:nom,:prenom,:ecole)";
          $query_params = array(
            ':mail' => $mail,
            ':psw' => $psw,
            ':stat' => $stat,
            ':avatar' => $avatar,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':ecole' => $ecole
              );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
    }
    
?>