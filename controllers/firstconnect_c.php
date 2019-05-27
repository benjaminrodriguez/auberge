<?php

if (isset($_POST['SignIn'])) {
  $avatar = "https://pbs.twimg.com/profile_images/464501040197287936/gpy18PJj_400x400.jpeg";
  newuser_INSERT($_POST['email'], $_POST['password'], "eleve", $avatar, $_POST['nom'], $_POST['prenom'], "in'tech");
}

    require(dirname(__FILE__).'/../views/premiereConnexion_v.php');
?>