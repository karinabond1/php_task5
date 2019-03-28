<?php
session_start();
include_once 'config.php';
include_once 'templates/index.php';
include_once 'libs/iWorkData.php';
include_once 'libs/Cookie.php';
include_once 'libs/Ini.php';
include_once 'libs/Json.php';
include_once 'libs/MySql.php';
include_once 'libs/Session.php';
include_once 'function.php';

$session = new Session();
$_SESSION['sess1'] = "qwerty"; 
$_SESSION['sess2'] = "asdfgh"; 
saveData($session, 1, $_SESSION['sess1']);
saveData($session, 2, $_SESSION['sess2']);
$session_get1 = getData($session, 2);
//deleteData($session,2);
//$session_get2 = getData($session, 2);

//$cookie = new Cookie();


//$json = new Json();


//$mysql = new MySql();


//$ini = new Ini();





?>