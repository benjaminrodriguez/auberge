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
      $query = "SELECT groupe.id, projet.nom, projet.id AS proj FROM `groupe` JOIN projet ON groupe.projet_id = projet.id AND groupe.semestre = :sm";
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
      JOIN user_has_groupe ON user_has_groupe.user_id = user.id AND user_has_groupe.groupe_id = :id";
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

function voirprojet($sm)
{
  $bdd = bdd();
      $query = "SELECT user.nom AS name, projet.nom, groupe.semestre
      FROM `groupe`
      JOIN projet ON groupe.projet_id = projet.id AND projet.id = :id
      JOIN user_has_groupe ON user_has_groupe.groupe_id = groupe.id
      JOIN user ON user_has_groupe.user_id = user.id";
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




?>