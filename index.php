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


$secuViews =  array("home" => "content/home",
    "carte"=>"content/carte",
    "compte"=>"content/compte",
    "coord" =>"content/coord",
    "paiement"=>"content/paiement",
    "signup"=>"content/signup",
    "reservation"=>"content/reservation",
    "voirpanier"=>"content/voirpanier",
    "livre"=>"content/livre",
    "logout"=>"logout",
    "comptemodif"=>"content/comptemodif");

$page = 'content/home';
if (isset($_GET['page']))
{
    $views = strtolower(htmlentities($_GET['page']));
    if (isset($secuViews[$views]) )
            $page = $secuViews[$views];
    else
        $page = '404';
}
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
    require('app/'.$page.'.php');
require('app/skel.php');
