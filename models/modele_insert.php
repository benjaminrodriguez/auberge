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
          $id = $bdd -> lastInsertId();
        return($id);
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

    function insert_newip($pid)
    {
      $bdd = bdd();
          $query = "INSERT INTO `ip`(`id`, `value`, `free`) VALUES (NULL,:ip,'yes');";
          $query_params = array(
            ':ip' => $pid
            );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
          $id = $bdd -> lastInsertId();
        return($id);
    }

    function insert_newgrp($port, $pid, $iid)
    {
      $bdd = bdd();
          $query = "INSERT INTO `groupe`(`port`, `id`, `projet_id`, `Ip_id`) VALUES (:port,NULL,:pid,:iid)";
          $query_params = array(
            ':port' => $port,
            ':pid' => $pid,
            ':iid' => $iid
            );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
          $id = $bdd -> lastInsertId();
        return($id);
    }


    function insert_userhasgrp($uid, $gid)
    {
      $bdd = bdd();
          $query = "INSERT INTO `user_has_groupe`(`user_id`, `groupe_id`, `id`) VALUES (:uid,:gid,NULL)";
          $query_params = array(
            ':uid' => $uid,
            ':gid' => $gid
            
            );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
          
    }

  function insert_entre($mail, $psw, $nom, $prenom, $entre, $phone,$av)
  {
    $bdd = bdd();
        $query = "INSERT INTO `user`(`id`, `mail`, `password`, `statut`, `avatar`, `semestre`, `nom`, `prenom`, `nom_ecole`, `actif`, `disponible`, `phone`) 
        VALUES ( NULL, :mail,:psw,'entre', :av ,NULL,:nom,:prenom,:entre,'up','y', :phone)";
        $query_params = array(
          ':mail' => $mail,
          ':psw' => $psw,
          ':nom' => $nom,
          ':prenom' => $prenom,
          ':entre' => $entre,
          ':phone' => $phone,
          ':av' => $av        
          );
  
        try {
            $stmt = $bdd->prepare($query);
            $stmt->execute($query_params);
        } catch(Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        
}    

function insert_projetentre($nom, $desc,$entre,$char,$logo)
{
  $bdd = bdd();
      $query = "INSERT INTO `projet`(`id`, `nom`, `resume`, `entreprise`, `semestre`, `datepublication`, `charte`, `logo`, `statut`) VALUES (NULL,:nom,:desc,:entre,NULL,CURRENT_DATE,:char,:logo,'dispo')";
      
      $query_params = array(
        ':nom' => $nom,
        ':desc' => $desc,
        ':entre' => $entre,
        ':char' => $char,
        ':logo' => $logo
        );

      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      
}
    
?>