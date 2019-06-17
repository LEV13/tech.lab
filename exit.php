<?php
session_start();
session_unset();
include ('db.php');
?>

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
//<!-- Основная страница -->
echo ('<div class="body"><center><br/>');
echo "Вы успешно вышли с сайт! <a href='index.php'>Главная страница</a>";
echo ('</center></div>');
//<!-- footer -->
include('footer.php') ?>
</body>
<!-- copyright -->
<?php include('copy.php') ?>
