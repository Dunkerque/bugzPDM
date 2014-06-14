<?php
$logErreur = '';


if (isset($_SESSION['login']))
    require('views/header/logged.html');

else if (isset($_POST['login'], $_POST['pass']))
{


    $manager = new UserManager($db);
    $user = $manager->getUserByLogin($_POST['login']);

    if ($user)
    {

        if ($user->passwordVerify($_POST['pass'])) {
            if($manager->isAdmin($user->getLogin()))
            {
                $_SESSION['adminConnected'] = true;
                $_SESSION['login'] = $user->getLogin();
            }
            require('views/header/logged.html');

        }
        else
        {

            $logErreur = "mdp invalide";
            require('views/header/login.html');
            // pass incorrect => gestion d'erreur : mdp invalide
        }
    }
    else
    {

        $logErreur = "login invalide";
        require('views/header/login.html');
        // Login incorrect => gestion erreur : login pas dans la db
    }



}
else
{

    $_SESSION['adminConnected'] = false;
    $_SESSION['loginid'] = 404;
    $erreurlogin = 'connectez vous :';
    require('views/header/login.html');
}






?>