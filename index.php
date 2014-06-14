<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require('config.php');
$classPath = scandir("model/");
function __autoload($classname)
{
    $classname = strtolower($classname);
    if(in_array($classname, $classPath) === true)
    require('model/'.$classname.'.class.php');
    return false;
}
try
{
    $db = new PDO($db_connector.':host='.$db_host.';port='.$db_port.';dbname='.$db_database, $db_user, $db_pass);
}
catch (Exception $e)
{
    die("Internal Error");
}

$secuViews = scandir("app/");

if (isset($_GET['page']))
{
    $views = strtolower(htmlentities($_GET['page']));
    if (in_array($views, $secuViews) === true)
        $page = $views;
    else
        $page = '404';
}
else
    $page = 'home';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
    require('app/'.$page.'.php');
require('app/skel.php');
?>