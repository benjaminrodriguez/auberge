<?php $title = 'premiereConnexion'; ?>
<?php ob_start(); ?>

    <!-- <link href="./views/css/connectio.css" rel="stylesheet" type="text/css" /> -->

<div class="well"><center>
    <form enctype="multipart/form-data" action="index.php?page=firstconnect" id="monFormulaire" method="POST">   
        <input type="text"  placeholder="Nom" name="nom" required></br>
        <input type="text"  placeholder="Prénom" name="prenom" required></br>
        <label for="email"></label> <input type="text" name="email" id="mail" class="champ" placeholder="E-mail"/>
        <br>
       </center>
    
 </br><center><button class="btn btn-success" id="subm" name="SignIn" type="submit">S'inscrire</button></center>
    </form>
</div>
<script>

//CONTROLE MAIL INTECH JS

var formElement = document.querySelector('#monFormulaire');
formElement.addEventListener('submit', verifymail)

document.getElementById("mail").addEventListener("input", emailIsValid );
//document.getElementById("subm").addEventListener("submit", verifymail);

function verifymail (evt) 
{
    evt.preventDefault();
    if(/\S+@\S+\.\S+/.test(document.getElementById("mail").value) && document.getElementById("mail").value.includes('@intechinfo.fr'))
    {
         document.getElementById('monFormulaire').submit();
    }
}

function emailIsValid () 
{
  if(/\S+@\S+\.\S+/.test(document.getElementById("mail").value) && document.getElementById("mail").value.includes('@intechinfo.fr'))
  {
    document.getElementById("mail").style.color = "green";
  }
  else 
  {
    document.getElementById("mail").style.color = "red";

  }
}
</script>
<?php $content = ob_get_clean(); ?>
<?php require(dirname(__FILE__).'/template.php'); ?>
</body>
