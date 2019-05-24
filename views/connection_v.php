<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8"/>
      <!-- Le script du head -->
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="./Public/css/connectio.css" rel="stylesheet" type="text/css" />
    <!-- jQuery (Media Temple) : -->
    <script charset="utf-8" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    
    <!-- Google : -->
    <script charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    
    <!-- Microsoft : -->
    <script charset="utf-8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
    </head>
<body>  
<div class="background">
<div class="page-container">

    <center><img class="mb-4"  src="" width="670" alt=""></center>
    <form id="form" class="form-signin" action="index.php?page=connection" method="POST"> 
     


        <input type="text" name="username" class="form-control" placeholder="Pseudo" required autofocus>

        <label for="inputPassword" class="sr-only"></label><br>
        <input type="password" name="password" value="" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

        
        <br><br><button ><h3>Connexion</h3></button><br><br>
    </form>

    <center><p color: white>&copy; l'Auberge</p></center>

</div>
 </div>

<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
