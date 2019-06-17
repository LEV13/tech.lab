<?php include('db.php'); ?>
<html>
<head>
<title>LEV13</title>
<!-- Добавляем инструменты -->
<?php include('link.php') ?>
</head>

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
//<!-- Основная страница -->?>
<div class="body">
<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }


$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);


include ("db.php");

$result = mysql_query("SELECT id FROM users WHERE login='$login'");
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("<div class='poisk13'>
<font color='red'>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</font>
</div>");
}


$result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");

if ($result2=='TRUE')
{
echo "<div class='poisk21'><font color='grean'>Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a></font>
</div>";
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
?>

</div>
<?php
//<!-- footer -->
include('footer.php') ?>
</body>
<!-- copyright -->
<?php include('copy.php') ?>