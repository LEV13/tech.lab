<?php

include('db.php');

$data = $_POST['data'];
$marka = $_POST['marka'];
$bodywork = $_POST['bodywork'];
$length = $_POST['length'];
$width = $_POST['width'];
$height = $_POST['height'];
$engine = $_POST['engine'];
$power = $_POST['power'];
$Pcylinders = $_POST['Pcylinders'];
$Ncylinders = $_POST['Ncylinders'];
$fuel = $_POST['fuel'];
$speed = $_POST['speed'];
$acceleration = $_POST['acceleration'];
$highway = $_POST['highway'];
$city = $_POST['city'];
$year = $_POST['year'];
$model = $_POST['model'];


	$query = mysql_query("INSERT INTO auto(data, marka, bodywork, length, width, height, engine, power, Pcylinders, Ncylinders, fuel, speed, acceleration, highway, city, year, model) 
	VALUES('$data','$marka','$bodywork', '$length', '$width', '$height', '$engine', '$power', '$Pcylinders', '$Ncylinders', '$fuel', '$speed', '$acceleration', '$highway', '$city', '$year','$model')");
	
	if ($query=='true') 

	{echo "Ваши данные успешно добавлены";}
else
	{echo "Ваши данные не добавлены";}
 

?>