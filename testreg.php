<?php 
session_start();
include('db.php'); 

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
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


// подключаемся к базе
include ("db.php");



$result = mysql_query("SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['password']))
{
//если пользователя с введенным логином не существует
exit ("Извините, пользователя с введенным логином не существует.");
}
else {
//если существует, то сверяем пароли
          if ($myrow['password']==$password) {
          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
          $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
          echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
          }

       else {
       //если пароли не сошлись
       exit ("Извините, пароли не сошлись.");
	   }
}
echo ('</center></div>');
//<!-- footer -->
include('footer.php') ?>
</body>
<!-- copyright -->
<?php include('copy.php') ?>
