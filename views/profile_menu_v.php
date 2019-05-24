<?php $title='Mon Profil';  ?>
<?php ob_start(); ?>
<div class = "well">
<?php
    if(isset($_GET['menu']) && $_GET['menu'] == 'username')
    { 
?>      <form method="POST" action="index.php?page=profile&menu=username">

            <p class="lead"> Votre nouveau pseudo doit contenir au minimum 4 caractères. </p>

            <div class="input-prepend">
                <span class="add-on"><i class="icon-user">
                </i></span><input class="span2" id="prependedInput" size="16" type="text" name="username" value="" 
                            placeholder="Nouveau pseudo" title="Entrez un pseudo sans caractère spéciaux." required><br/>
            </div>

            <input type="hidden" name="menu" value="username">
            <input type='submit' class="btn btn-default" value="Confirmer">

        </form>



       
<?php 
        $subtitle = 'Modifier votre pseudo';
    }
?>


<!-- --------------------------- Change Password --------------------------- -->
<?php if(!isset($test_old_password) && isset($_GET['menu']) && $_GET['menu'] == 'password' && !isset($_POST['new_password1']))
        { 
?> 
            <p class="lead"> Votre nouveau mot de passe doit contenir au minimum 4 caractères. </p>
            <form method="POST" action="index.php?page=profile&menu=password">
                <!-- Demande le mot de passe actuel. -->
                <input type="password"  name="old_password" value="" placeholder="Mot de passe actuel" 
                title="Entrez votre mot de passe actuel" required><br><br>

                <!-- Demande le nouveau mot de passe. -->
                <input type="password"  name="new_password1" value="" placeholder="Nouveau mot de passe" 
                title="Le mot de passe doit contenir : 4 caractères minimum, au moins une majuscule, une minuscule et un chiffre" required> &nbsp &nbsp &nbsp

                <input type="password"  name="new_password2" value="" placeholder="Confirmer mot de passe" 
                title="Le mot de passe doit contenir : 4 caractères minimum, au moins une majuscule, une minuscule et un chiffre" required><br><br>
                        
                <input type="hidden" name="menu" value="password">
                <input type='submit' class="btn btn-default" value="Confirmer">
            </form>         
<?php   
            $subtitle = 'Modifier votre mot de passe';
        } 
        if(isset($_SESSION['error']))
        { 
            $subtitle = 'Modifier votre mot de passe';
        ?>
            <!-- Alerts
            ================================================== --> 
            <div class="span4">  
                <div class="alert alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo $_SESSION['error']; ?></strong>
                </div>
            </div>
    <?php
            unset($_SESSION['error']);
        }

        
?>



<!-- --------------------------- Change Profile Pricture --------------------------- -->
<?php
    if(isset($_GET['menu']) && $_GET['menu'] == 'picture')
    { 
?>      
        <form method="POST" action="">

            <input type="text" name="profile_picture" class="form-control" placeholder="Lien URL de l'image" 
                    title="Entrez l'URL d'une image."><br/>

            <input type="hidden" name="menu" value="picture">

            <input type='submit' class="btn btn-default" value="Confirmer">

        </form>
<?php 
        $subtitle = 'Modifier votre image de profile';
    }
?>


<!-- --------------------------- unsub --------------------------- -->

</div>
<?php
 $content = ob_get_clean(); ?>