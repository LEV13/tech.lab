<?php

include('db.php');


if(isset($_POST['submit'])) 
{
$login = $_POST['login'];
$password = $_POST['password'];
$r_password = $_POST['r_password'];

if($password == $r_password)
{
$password = md5($password);
$query = mysql_query("INSERT INTO users VALUES('','$login','$password')") or die(mysql_error());
}
else 
{
die( 'Пароль не совпадает' );
}

}

if(isset($_POST['input']))
{
$i_login = $_POST['i_login'];
$i_password = md5($_POST['i_password']);

$query = mysql_query("SELECT * FROM users WHERE login='$i_login'");
$user_input = mysql_fetch_array($query);

if($user_input['password'] == $i_password)
{
echo "OK";
$check = "true";
}
else
{
echo 'Неверный пароль';
}
}

?>

<form method="post" action="index.php">
	Логин :<input type="text" name="login" required /><br>
	Пароль: <input type="password" name="password" required /><br>
	Повторите пароль: <input type="password" name="r_password" required /><br>
	<input type="submit" name="submit" value="Регистрация"/>
</form>

<form method="post" action="index.php">
	Логин :<input type="text" name="i_login" required /><br>
	Пароль: <input type="password" name="i_password" required /><br>
	<input type="submit" name="input" value="Вход"/>
</form>
	