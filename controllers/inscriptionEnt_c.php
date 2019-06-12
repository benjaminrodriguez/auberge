<?php

function rand_string( $length ) 
{

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$&=+-:?!)(";
    return substr(str_shuffle($chars),0,$length);
}

if (isset($_POST['nom']) && isset($_POST['email'])) 
{
  $check = check_down($_POST['email']);
  //var_dump($checkl);

  if (isset($check[0])) {
    
    //check mail exist et statut down
    
    $_SESSION['passRand'] = rand_string(10);
    
    $avatar = "https://pbs.twimg.com/profile_images/464501040197287936/gpy18PJj_400x400.jpeg";
    upd_premiereconnect($_POST['email'], $_SESSION['passRand'], $avatar, $_POST['nom'], $_POST['prenom']); //update
    header('Location: index.php?page=confirmationFirstConnexion');
    //require("./controllers/envoiMail.php");
  }
  else {
    $_SESSION['errorconnect'] = "L'adresse mail est déjà associée ou n'existe pas.";
  }
}

require(dirname(__FILE__).'/../views/inscriptionEnt_v.php');


?>