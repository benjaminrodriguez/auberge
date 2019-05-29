<?php

function rand_string( $length ) 
{

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$&=+-_:?!)(";
    return substr(str_shuffle($chars),0,$length);
}


if (isset($_POST['nom']) && isset($_POST['email'])) 
{
  //check mail exist et statut down

  $_SESSION['passRand'] = rand_string(10);
  
  $avatar = "https://pbs.twimg.com/profile_images/464501040197287936/gpy18PJj_400x400.jpeg";
  newuser_INSERT($_POST['email'], $_SESSION['passRand'], "eleve", $avatar, $_POST['nom'], $_POST['prenom'], "in'tech"); //update
  header('Location: index.php?page=confirmationFirstConnexion');
}

require(dirname(__FILE__).'/../views/premiereConnexion_v.php');


?>