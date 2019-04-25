<?php 

function connection($array){
  $pseudo = $array['pseudo'];
  $pw = $array['pw'];
  $isRegister = isRegister($pseudo,$pw)->fetch(PDO::FETCH_ASSOC);

  if($isRegister){
    if ($isRegister['pseudo'] == $pseudo) {
      if ($isRegister['password'] == $pw) {
        $_SESSION['status'] = 'connected';
        $_SESSION['statut'] = $isRegister['statut'];
        $_SESSION['error'] = "";
      }
    }else {
      $_SESSION['error'] = "Erreur : Pseudo ou mot de passe inconnu !";
    }
  }else{
  $_SESSION['error'] = "Erreur : Pseudo ou mot de passe inconnu !";
  }
  header('Location: index.php');
}