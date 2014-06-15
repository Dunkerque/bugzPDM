<!-- --><?php
$error = "";

//if (isset($_POST['login'], $_POST['password'], $_POST['password_']))
//{

if(isset($_POST['login'])){
    try{

        $newUser = new User($_POST);

        var_dump($newUser);

            $registerManager = new UserManager($db);
            $registerManager->registerUser($newUser);
    }
    catch(Exception $e)
    {
        $register = null;
        $error = $e->getMessage();
    }
}



require('views/content/signup.html');



//?>