<?php
session_start();
include_once 'config.php';
include_once 'libs/iWorkData.php';
include_once 'libs/Cookie.php';
include_once 'libs/Ini.php';
include_once 'libs/Json.php';
include_once 'libs/MySql.php';
include_once 'libs/Session.php';
include_once 'function.php';

//Session
$session = new Session();
$_SESSION['sess1'] = "qwerty";
$_SESSION['sess2'] = "asdfgh";
saveData($session, 1, $_SESSION['sess1']);
saveData($session, 2, $_SESSION['sess2']);
$session_get1 = getData($session, 1);
deleteData($session, 2);
$session_get2 = getData($session, 2);

//Cookie
$cookie = new Cookie();
$_COOKIE["cookie1"] = "qwerty";
$_COOKIE["cookie2"] = "asdfgh";
saveData($cookie, 1, $_COOKIE["cookie1"]);
saveData($cookie, 2, $_COOKIE["cookie2"]);
$cookie_get1 = getData($cookie, 1);
deleteData($cookie, 2);
$cookie_get2 = getData($cookie, 2);

//Json
$json = new Json();
$json_arr1 = array("Derek","Json1");
$json_arr2 = array("Melvin","Json2");
saveData($json, 1,$json_arr1);
saveData($json, 2,$json_arr2);
$json_get1 = getData($json,1);
deleteData($json,2);
$json_get2 = getData($json,2);


//MySql
$mysql = new MySql();
$mysql_arr1 = array("name","Derek");
$mysql_arr2 = array("age","25");
saveData($mysql, 1,$mysql_arr1);
saveData($mysql, 2,$mysql_arr2);
$mysql_get1 = getData($mysql,1);
deleteData($mysql,2);
$mysql_get2 = getData($mysql,2);

//Ini
$ini = new Ini();
$ini_arr1 = array('login','root');
$ini_arr2 = array('admin','admin@test.com');
saveData($ini, '[db]',$ini_arr1);
saveData($ini, '[email]',$ini_arr2);
$ini_get1 = getData($ini,'db');
deleteData($ini,'email');
$ini_get2 = getData($ini,'email');


include_once 'templates/index.php';


?>