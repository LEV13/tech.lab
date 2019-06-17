<html>
<head>
<title>Aston Martin</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body <?php

include('db.php');


?> leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" bgcolor="#ffffff">
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
	<table class="center" bgcolor="WhiteSmoke" border="0" width="950px" height="" cellspacing="0" cellpadding="0"  >
	
	
	
	
	
	
	
	<tr><td><table bgcolor="" border="0" width="950px" height="" cellspacing="0" cellpadding="0" >
	<tr>
	<td width="200px" class="lev13" style="border-radius: 50px 0 0 50px;" bgcolor="Gainsboro" ><center><h1 class="h1">LEV13</center></td>
	<td width="550px" bgcolor="ffffff">
	
	<img src="images/bugatti.jpg" 
        alt="Bugatti">
		<img src="images/aston.jpg" 
        alt="Aston-Martin">
		<img src="images/lamborghini.jpg" 
        alt="Lamborghini">
		<img src="images/maserati.jpg" 
        alt="Maserati">
	
	</td>
	<td width="200px" style="border-radius: 0 50px 50px 0;" bgcolor="Gainsboro">
	<center>
	<form method="post" action="index.php">
	Login<br><input class="password" type="text" name="login" required /><br>
	Password<br><input class="password" type="password" name="password" required /><br>
	<input class="modern" type="submit" name="input" value="Вход"/><input class="modern" type="submit" name="submit" value="Регистрация"/>
</form>
</center>
    </td>
	</tr>
	</table></td></tr>
	
	
	
	
	
	
	
	<tr><td><table  bgcolor="WhiteSmoke" border="0" width="950px" height="" cellspacing="0" cellpadding="0" >
	<tr>
	<center><div id="menu_wrapper" class="grey">
			<div  class="left"></div>
			<ul width="950px" id="menu">
			<li class="active"><a href="/index.php">Главная</a></li>
				<li ><a href="/auto.php">Автомобили</a></li>
				<li><a href="/top-car.php">Top-car</a></li>
				<li><a href="/poisk.php">Поиск</a></li>
				<li><a href="/otz.php">Отзывы</a></li>
			</ul>
		</center></div>
	</tr>
	</table></td></tr>
	
	
	
	
	
	
	
	
	<tr><td>
	
	<?php
	
	
	$query = mysql_query("SELECT * FROM auto LIMIT 7");
	$row = mysql_fetch_array($query);
	
	
	
	do
	{
	
	echo "<table bgcolor='Silver' border='0' width='950px' height='50px' cellspacing='0' cellpadding='0' class='gg13' >
	<tr valign='top'>
	
	
	
	
	
	
	<td>
	<table  bgcolor='Gainsboro' border='0' width='' height='100%' cellspacing='0' cellpadding='0' class='gg13'>
	<tr>
	
	<td width='50px'>
	
	</td>
	
	
	<td valign='top' >
	<table bgcolor='Gainsboro' border='0' width='200px' height='50px' cellspacing='0' cellpadding='0'  >
	</br>
	<td class='right1' ><h3><i>".$row['marka']."".$row['model']."</i></h3></td>
	<tr>
	<td>
	<center>
	<img width='300' height='200' src=".$row['img']. "
        alt=".$row['model']."></center>
	</td>
	</tr>
	
	</table>
	</td>
	
	
	<td width='50px'>
	
	</td>
	
	
	
	
	</tr>
	</table>
	</td>
	
	
	
	
	
	
	
	
	
	
	
	<td>
	<table bgcolor='Silver' border='0' width='500' height='' cellspacing='0' cellpadding='0' >
	</br>
<tr>
<td rowspan='14' width='50' height='' ></td>
	 <td class='gg'>Тип кузова</td><td class='gg'>".$row['bodywork']."</td>
		<td rowspan='14' width='50' height='' ></td>
		</tr>
		<tr><td class='gg'>Длина</td><td class='gg'>".$row['length']."мм</td></tr>
		<tr><td class='gg'>Ширина</td><td class='gg'>".$row['width']."мм</td></tr>
		<tr><td class='gg'>Высота</td><td class='gg'>".$row['height']."</td></tr>
		<tr><td class='gg'>Объем двигателя</td><td class='gg'>".$row['engine']."<sup>3</sup></td></tr>
		<tr><td class='gg'>Мощность</td><td class='gg'>".$row['power']." л.с.</td></tr>
		<tr><td class='gg'>Расположение цилиндров</td><td class='gg'>".$row['Pcylinders']."</td></tr>
		<tr><td class='gg'>Количество цилиндров</td><td class='gg'>".$row['Ncylinders']."</td></tr>
		<tr><td class='gg'>Топливо</td><td class='gg'>".$row['fuel']."</td></tr>
		<tr><td class='gg'>Максимальная скорость</td><td class='gg'>".$row['speed']." км/час</td></tr>
		<tr><td class='gg'>Время разгона (0-100 км/час)</td><td class='gg'>".$row['acceleration']." с</td></tr>
		<tr><td class='gg'>Расход топлива на шоссе</td><td class='gg'>".$row['highway']." л/100 км</td></tr>
		<tr><td class='gg'>Расход топлива в городе</td><td class='gg'>".$row['city']." л/100 км</td></tr>
		</table>
		</br>
			</td>

	</tr>
	
	
	
	
	
	<tr>
	<td colspan='4'></td>
	</tr>
	
	
	
	
	</table>";
	
	}

	while ($row = mysql_fetch_array($query))
	

	
	
	?>
	
	</td></tr>
	
	
	
	
	
	
	
	
	
	
	
	<tr><td><table  bgcolor="272F3A" border="0" width="950px" height="50px" cellspacing="0" cellpadding="0" >
	<tr>
	<td></td>
	</tr>
	</table></td></tr>
	
	
	
	
	
	
	
	
	</table>
</body>
</html>