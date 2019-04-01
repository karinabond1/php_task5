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
$save_ses_1 = saveData($session, 1, $_SESSION['sess1']);
$save_ses_2 = saveData($session, 2, $_SESSION['sess2']);
if ($save_ses_1 && $save_ses_2) {
    $session_get1 = getData($session, 1);
    $delete_ses = deleteData($session, 2);
    if (!$delete_ses) {
        $session_get2 = getData($session, 2);
    }

}


//Cookie
$cookie = new Cookie();
$_COOKIE["cookie1"] = "qwerty";
$_COOKIE["cookie2"] = "asdfgh";
$save_cook_1 = saveData($cookie, 1, $_COOKIE["cookie1"]);
$save_cook_2 = saveData($cookie, 2, $_COOKIE["cookie2"]);
if ($save_cook_1 && $save_cook_2) {
    $cookie_get1 = getData($cookie, 1);
    $deletecook = deleteData($cookie, 2);
    if (!$deletecook) {
        $cookie_get2 = getData($cookie, 2);
    }

}


//Json
$json = new Json();
$json_arr1 = array("Derek", "Json1");
$json_arr2 = array("Melvin", "Json2");
$save_json_1 = saveData($json, 1, $json_arr1);
$save_json_2 = saveData($json, 2, $json_arr2);
if ($save_json_1 && $save_json_2) {
    $json_get1 = getData($json, 1);
    $delete_json = deleteData($json, 2);
    if(!$delete_json){
        $json_get2 = getData($json, 2);
    }

}


//MySql
$mysql = new MySql();
$mysql_arr1 = array("name", "Derek");
$mysql_arr2 = array("age", "25");
$save_mysql_1 = saveData($mysql, 1, $mysql_arr1);
$save_mysql_2 = saveData($mysql, 2, $mysql_arr2);
if($save_mysql_1 && $save_mysql_2){
    $mysql_get1 = getData($mysql, 1);
    $delete_mysql = deleteData($mysql, 2);
    if(!$delete_mysql){
        $mysql_get2 = getData($mysql, 2);
    }

}


//Ini
$ini = new Ini();
$ini_arr1 = array('login', 'root');
$ini_arr2 = array('admin', 'admin@test.com');
$save_ini_1 = saveData($ini, '[db]', $ini_arr1);
$save_ini_2 = saveData($ini, '[email]', $ini_arr2);
if($save_ini_1 &&$save_ini_2){
    $ini_get1 = getData($ini, 'db');
    $delete_ini = deleteData($ini, 'email');
    if(!$delete_ini){
        $ini_get2 = getData($ini, 'email');
    }

}



include_once 'templates/index.php';


?>