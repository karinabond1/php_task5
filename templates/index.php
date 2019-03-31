<?php
//include_once '/home/user14/public_html/PHP/php_task5/php_task5/index.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Session!".'<br>';
echo $session_get1.'<br>';
echo $session_get2.'<br>';

echo "Cookie!".'<br>';
echo $cookie_get1.'<br>';
echo $cookie_get2.'<br>';

echo "Json!".'<br>';
echo $json_get1.'<br>';
echo $json_get2.'<br>';

echo "MySql!".'<br>';
echo $mysql_get1.'<br>';
echo $mysql_get2.'<br>';

echo "Ini!".'<br>';
echo $ini_get1.'<br>';
echo $ini_get2.'<br>';

?>

</body>
</html> 