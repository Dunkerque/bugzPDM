<!-- --><?php
$error = "";

//if (isset($_POST['login'], $_POST['password'], $_POST['password_']))
//{

if(isset($_POST['login'])){
    try{

        $register = new User($_POST);

        var_dump($register);

            $registerManager = new UserManager($db);
            $registerManager->registerUser($register);
    }
    catch(Exception $e)
    {
        $register = null;
        $error = $e->getMessage();
    }
}



require('views/content/signup.html');



//?>