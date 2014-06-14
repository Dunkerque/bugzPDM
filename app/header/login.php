<?php
$logErreur = '';


if(  (isset($_SESSION['adminConnected']) && $_SESSION['adminConnected'] == true) || (isset($_SESSION['memberConnected']) && $_SESSION['memberConnected'] == true)  )
{
    require('views/header/logged.html');
}

else if(isset($_POST['login'], $_POST['pass']))
{



        $manager = new UserManager($db);
        $user = $manager->getUserByLogin($_POST['login']);
        if ($user)
        {

            if ($user->passwordVerify($_POST['pass']))
            {
                $_SESSION['id'] = $user->getId();
                $_SESSION['prenom'] = $user->getPrenom();
                $_SESSION['nom'] = $user->getNom();
                header('Location:index.php');
            }
            else
            {

               $logErreur =  "mdp invalide";
                // pass incorrect => gestion d'erreur : mdp invalide
            }
        }
        else
        {

            $logErreur =  "login invalide";
            // Login incorrect => gestion erreur : login pas dans la db
        }


        require('views/header/login.html');
}
else
{

    $_SESSION['adminConnected'] = false;
    $_SESSION['memberConnected'] = false;
    $_SESSION['loginid'] = 404;
    $erreurlogin = 'connectez vous :';
    require('views/header/login.html');
}






?>