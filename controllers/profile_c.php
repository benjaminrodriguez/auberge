<?php
//var_dump($_POST);
if(!isset($_GET['menu']) || empty($_GET['menu'])) header('Location: index.php?page=profile&menu=username');


if(isset($_GET['menu']) && $_GET['menu'] === "dc") {
    session_unset();
    session_destroy();
    session_write_close();
    header('Location: index.php');
    exit;
}


//Changer son password :
if (isset($_SESSION['error']))
{
    header('Location: index.php?page=profile&menu=password');
}

if(isset($_POST['menu']) && $_POST['menu'] === "password")
{
    
    if(isset($_POST['old_password']))
    { 
        //echo'ok';
        // ENLEVE LES ESPACES DEBUT ET FIN
        $_POST['old_password'] = trim($_POST['old_password']);
        if (!empty($_POST['old_password']))
        {
            
            // VERIF LONGUEUR PASSWORD
            if (strlen($_POST['new_password1']) > 3 && strlen($_POST['new_password1']) < 255 
            && strlen($_POST['new_password2']) > 3 && strlen($_POST['new_password2']) < 255) 
            {
                $valide_password = true;
            }
            else 
            {
                $valide_password = false;
            }

            // VERIFICATION CARACTERE PASSWORD
            $password1 = $_POST['new_password1'];
            $password2 = $_POST['new_password2'];

            $conforme_password = true;
            
    

            if ($valide_password === true && $conforme_password === true)
            {
                
                //Vérifie si le password actuel entré est correcte
                $password = password_SELECT($_SESSION['id']);
                $password = $password['password'];
                $test_old_password = false;
                $error = '';
                if ($password === $_POST['old_password']) {
                    $test_old_password = true;
                } else {
                    $_SESSION['error'] = 'Le mot de passe actuel entré n\'est pas le bon.';
                }
                //password_verify(htmlspecialchars($_POST['old_password']), $password)? $test_old_password = true : $_SESSION['error'] = 'Le mot de passe actuel entré n\'est pas le bon.';

                //Vérifie si les 2 new_password entrés sont semblabes
                $test_new_password = false;
                ($_POST['new_password1']===$_POST['new_password2'])? $test_new_password = true : $_SESSION['error'] = 'Les nouveaux mots de passe ne sont pas identique.' ;

                //Si tout est bon : change le mot de passe
                if($test_old_password===true && $test_new_password===true)
                {
                    
                    //$new_password = password_hash(htmlspecialchars($_POST['new_password1']), PASSWORD_BCRYPT);
                    password_UPDATE($password1, intval($_SESSION['id']));
                    $_SESSION['error'] = "Votre mot de passe à été modifier avec succès.";
                }
            }
            else if ($valide_password === false || ($conforme_password === false))
            {
                include('./views/js/conforme_password.js');
                
            }
        }
        else 
        {
            include('./views/js/empty_form.js');
            
        }
    }
}


//Changer son avatar :
if(isset($_POST['profile_picture']))
{

    // ENLEVE LES ESPACES DEBUT ET FIN
    $_POST['profile_picture'] = trim($_POST['profile_picture']);
    if (!empty($_POST['profile_picture']))
    {
        if (strlen($_POST['profile_picture']) < 255) 
        {
            picture_UPDATE(htmlspecialchars($_POST['profile_picture']), intval($_SESSION['id']));
            $_SESSION['avatar'] = htmlspecialchars($_POST['profile_picture']);
            header('Location: index.php?page=profile&menu=picture');
            exit;
        }
        else 
        {
            include('./views/js/pp_length.js');
        }
    }
    else 
    {
        include('./views/js/empty_form.js');
    }
}



$title = 'Mon profile';
require_once('./views/profile_menu_v.php');
require_once('./views/template.php');


?>