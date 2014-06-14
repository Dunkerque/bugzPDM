<?php
if (isset($_POST['login'], $_POST['password']))
{
    $manager = new UserManager($db);
    $user = $manager->getUserByLogin($_POST['login']);
    if ($user)
    {
        if ($user->passwordVerify($_POST['password']))
        {
            $_SESSION['id'] = $user->getId();
            $_SESSION['prenom'] = $user->getPrenom();
            $_SESSION['nom'] = $user->getNom();
            header('Location:index.php');
        }
        else
        {
            echo "mdp invalide";
            // pass incorrect => gestion d'erreur : mdp invalide
        }
    }
    else
    {
        echo "login invalide";
        // Login incorrect => gestion erreur : login pas dans la db
    }
}
else
    require('app/content/signup.php');
?>