<?php 
function isRegister($pseudo,$password)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM profil WHERE pseudo = :pseudo AND password = :password');
    $req->execute(array(
      'pseudo' => $pseudo,
      'password' => $password
    ));
    return $req;
}
function select_projetS($sm)
{
  $bdd = bdd();
      $query = "SELECT * FROM `projet` WHERE semestre = :sm AND statut='affecté'";
      $query_params = array(
        ':sm' => $sm
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function getname($sm)
{
  $bdd = bdd();
      $query = "SELECT user.nom FROM user
      JOIN user_has_groupe ON user_has_groupe.user_id = user.id
      JOIN groupe ON user_has_groupe.groupe_id = groupe.id AND groupe.projet_id LIKE :id";
      $query_params = array(
        ':id' => $sm
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function voirauteurprojet($sm)
{
  $bdd = bdd();
      $query = "SELECT user.nom, user.prenom FROM user 
      JOIN user_has_groupe ON user_has_groupe.user_id = user.id
      JOIN groupe ON groupe.id = user_has_groupe.groupe_id
      JOIN projet ON groupe.projet_id = projet.id AND projet.id = :id";
      $query_params = array(
        ':id' => $sm
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function voirprojet1($sm)
{
  $bdd = bdd();
      $query = "SELECT * FROM `projet` WHERE id = :id";
      $query_params = array(
        ':id' => $sm
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function liste_elev(){
    $bdd =bdd();
    $query = "SELECT nom,prenom,id from user WHERE `statut` = 'eleve'";
    try {
        $stmt = $bdd->prepare($query);
        $stmt->execute();
    } catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $ans;
}
function voirdispo(){
  $bdd = bdd();
  $query = "SELECT projet.nom AS nomp, projet.id AS idp FROM projet WHERE statut LIKE 'dispo'";
  $query_params = array();
  try {
      $stmt = $bdd->prepare($query);
      $stmt->execute($query_params);
  } catch(Exception $e) {
      die('Erreur : ' . $e->getMessage());
  }
  $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $ans;
}
function voirdispoid($sm){
  $bdd = bdd();
  $query = "SELECT projet.nom AS nomp, charte,logo FROM projet WHERE projet.statut LIKE 'dispo' AND projet.id = :id";
  $query_params = array(
    ':id' => $sm
  );
  try {
      $stmt = $bdd->prepare($query);
      $stmt->execute($query_params);
  } catch(Exception $e) {
      die('Erreur : ' . $e->getMessage());
  }
  $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $ans;
}
function select_acceptedprojetS($sm)
{
  $bdd = bdd();
      $query = "SELECT * FROM `projet` WHERE projet.statut LIKE 'qualifié' AND projet.semestre = :sm";
      $query_params = array(
        ':sm' => $sm
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function select_connect($mail, $psw)
{
  $bdd = bdd();
      $query = "SELECT * FROM `user` WHERE user.mail LIKE :mail AND user.password LIKE :psw AND nom_ecole LIKE 'intech'";
      $query_params = array(
        ':mail' => $mail,
        ':psw' => $psw
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}

function select_connect2($mail, $psw)
{
  $bdd = bdd();
      $query = "SELECT * FROM `user` WHERE user.mail LIKE :mail AND user.password LIKE :psw AND statut LIKE 'entre'";
      $query_params = array(
        ':mail' => $mail,
        ':psw' => $psw
          );
      try {
          $stmt = $bdd->prepare($query);
          $stmt->execute($query_params);
      } catch(Exception $e) {
          die('Erreur : ' . $e->getMessage());
      }
      $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $ans;
}
function password_SELECT($id)
    {
        $bdd = bdd();
        $req = $bdd->prepare(' SELECT password
                                FROM user
                                WHERE id = ?
                                LIMIT 1;
                            ');
        $req->execute(array($id));
        $donnees = $req->fetch();
        return $donnees;
    }
    function check_down($mail)
    {
      $bdd = bdd();
          $query = "SELECT id FROM user WHERE mail LIKE :mail AND actif LIKE 'down';";
          $query_params = array(
            ':mail' => $mail
              );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
          $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $ans;
    }

    function select_elevelibre($sm)
    {
      $bdd = bdd();
          $query = "SELECT id, nom, prenom
          FROM user
          WHERE semestre = :sm  AND actif LIKE 'up' AND statut LIKE 'eleve' AND disponible LIKE 'y';";
          $query_params = array(
              ":sm" => $sm
            
              );
    
          try {
              $stmt = $bdd->prepare($query);
              $stmt->execute($query_params);
          } catch(Exception $e) {
              die('Erreur : ' . $e->getMessage());
          }
          $ans = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $ans;
    }

      
?>