<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        .well {
          min-height: 20px;
          padding: 10px;
          background-color: #f5f5f5;
          color: black;
          border: 1px solid #e3e3e3;
          -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        }
    </style>
    <title>Auberge</title>
  </head>
  <body style="background-image: url('./views/img/foret.jpg'); background-size: cover;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    
    <div class="col-sm-7">
        <a class="navbar-brand" href="?"><img src="./views/img/logo2.png" width="145" height="100" class="d-inline-block align-middle" alt="">L'Auberge</a>
    </div>
    <?php 
    if (isset($_SESSION['statut']) && $_SESSION['statut'] === "prof"
    ) {
      ?>
      <div class="col-sm-1" style="line-height: 0.5; text-align: center; padding-bottom: 1%; padding-top: 1%;border-radius: 20px 20px 0px 0px; margin-bottom: -20px; background: rgba(75, 137, 218, 0.75); margin-right: 25px;">
        <a href="?page=gestion" style="color: white;"><img src="./views/img/books.png" width="60" height="60" style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; line-height: 0.5;" ><br>Gestion</a>
      </div>
      <?php
    } else {
      ?>
      <div class="col-sm-1">
      </div>

      <?php
    }
    ?>

    <div class="col-sm-1" style="line-height: 0.5; text-align: center; padding-bottom: 1%; padding-top: 1%;border-radius: 20px 20px 0px 0px; margin-right: 25px;
     margin-bottom: -20px; background: rgba(76, 175, 80, 0.75)">
    <a href="?page=projets" style="color: white;"><img src="./views/img/books.png" width="60" height="60" style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; line-height: 0.5;" ><br>Projets</a>
    </div>

    <?php 
      if (isset($_SESSION['avatar']) && $_SESSION['avatar'] !== null) {
        ?>
        <div class="col-sm-1">
        <img src=<?php echo $_SESSION['avatar']; ?> width="99px" height="99px" class="d-inline-block align-middle" style="float: right;border-radius: 25%" alt="">
        </div>
        <?php
      }
      else {
        ?>
        <div class="col-sm-1" style="line-height: 0.5; text-align: center; padding-bottom: 1%; padding-top: 1%;border-radius: 20px 20px 0px 0px; margin-bottom: -20px; background: rgba(75, 137, 218, 0.75); margin-right: 25px;">
          <a href="?page=connectioneleve" style="color: white;"><img src="./views/img/books.png" width="60" height="60" style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; line-height: 0.5;" ><br>Eleve</a>
        </div>
        <?php
      }
      ?>

<?php 
      if (isset($_SESSION['mail'])) {
        ?>
        <div class="col-sm-1" style="float: left">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style ="padding=0px"><?php echo  $_SESSION['mail']; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=profile&menu=password">Changer mot de passe</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=picture">Changer image profile</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=dc">Deconnexion</a>
        </div>
        </div>
        <?php
      }
      else {
        ?>
        <div class="col-sm-1" style="line-height: 0.5; text-align: center; padding-bottom: 1%; padding-top: 1%;border-radius: 20px 20px 0px 0px; margin-bottom: -20px; background: rgba(255, 66, 51, 0.75); margin-right: 35px;">
          <a href="?page=connectionentreprise" style="color: white;"><img src="./views/img/books.png" width="60" height="60" style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; line-height: 0.5;" ><br>Entreprise</a>
        </div>
        <?php
      }
      ?>

</nav>
<br><br>
<div class="container main-container" style='color: white'>
        <div class="span8 blog">
                <?php 
                  //var_dump($_SESSION);
                  if (isset($content)) {
                    //echo '<div class="well">';
                    echo $content; 
                    //echo '</div>';
                  } 
                ?>

        </div>
  </div><br><br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    

  </body>
</html>