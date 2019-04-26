<?php ob_start(); ?>
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
    <title>Eval</title>
  </head>
  <body style="background-image: url('./views/img/foret.jpg'); background-size: cover;">

    <form action="" method="POST" class="form-example">
                        <div class="form-example">
                            <label for="nameProject">Nom du projet : </label>
                            <input type="text" name="nameProject" id="nameProject" required>
                        </div>
                        <textarea id="describeProject" name="describeProject"
                        rows="5" cols="33">
                        Description du Projet                        
                        </textarea>
                        <div class="form-example">
                            <input type="submit" value="Créer Projet !">
                        </div>
    </form>
<br><br>
<div class="container main-container" style='color: white'>
        <div class="span8 blog">
                <?php 
                  //var_dump($_SESSION);
                  if (isset($content)) {
                    echo '<div class="well">';
                    echo $content; 
                    echo '</div>';
                  } 
                ?>   
                

        </div>
  </div><br><br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 
    

  </body>
</html>
<?php $content = ob_get_clean(); ?>