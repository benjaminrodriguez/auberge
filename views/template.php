<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Eval</title>
  </head>
  <body style="background-image: url('./img/foret.jpg'); background-size: cover;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    
    <div class="col-sm-8">
        <a class="navbar-brand" href="?"><img src="./img/logo2.png" width="145" height="100" class="d-inline-block align-middle" alt="">L'Auberge</a>

    </div>
    <div class="col-sm-1" style="line-height: 0.5; text-align: center; ">
    <a href="?"><img src="./img/books.png" width="60" height="60" style="display: block; margin-left: auto; margin-right: auto; margin-top: auto; line-height: 0.5;" ><br>Les Projets</a>
    </div>
    <div class="col-sm-1">
    <img src=<?php //echo $_SESSION['picture']; ?> width="69px" height="69px" class="d-inline-block align-middle" style="float: right;border-radius: 25%" alt="">
    </div>
    <div class="col-sm-2" style="float: left">
    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style ="padding=0px">
    <?php echo  "test"; // $_SESSION['username']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?page=profile&menu=username">Changer pseudo</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=password">Changer mdp</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=picture">Changer image profile</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=horaires">Horaires</a>
          <a class="dropdown-item" href="index.php?page=profile&menu=dc">Deconnexion</a>
    </div>
  </div>
</nav>
<br><br>
<div class="container main-container" style='color: white'>
        <div class="span8 blog">
                <?php 
                  //var_dump($_SESSION);
                  if (isset($content)) {
                   
                    $content = "test;";
                    echo $content; 
                  } 
                ?>

        </div>
  </div><br><br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 
    

  </body>
</html>