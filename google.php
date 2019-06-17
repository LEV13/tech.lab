<?php include('db.php'); ?>
<html>
<head>
<title>LEV13</title>
<!-- Добавляем инструменты -->
<?php include('link.php') ?>
</head>
<?php

include('db.php');


if(isset($_POST['submit'])) 
{
$login = $_POST['login'];
$password = $_POST['password'];


$password = md5($password);
$query = mysql_query("INSERT INTO users VALUES('','$login','$password')") or die(mysql_error());

}

if(isset($_POST['input']))
{
$i_login = $_POST['i_login'];
$i_password = md5($_POST['i_password']);

$query = mysql_query("SELECT * FROM users WHERE login='$i_login'");
$user_input = mysql_fetch_array($query);

if($user_input['password'] == $i_password)
{
echo "Ты тута";
$check = "true";
}
else
{
echo 'Неверный пароль';
}
}

?>
<body class="dir" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" bgcolor="">
<!-- Верхнее меню сайта -->
<?php include('head.php');
//<!-- Логотип и фон -->
include('logo.php');
//<!-- Регистрация и </div> -->
include('login.php');
//<!-- Шапка сайта -->
include('banner.php');
//<!-- Меню сайта -->
include('menu.php');
//<!-- Основная страница -->
include('body.php');
//<!-- footer -->
include('footer.php') ?>
</body>
<!-- copyright -->
<?php include('copy.php') ?>
