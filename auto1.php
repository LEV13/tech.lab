<?php

$sedan=$_POST['option1'];
$cupe=$_POST['option2'];
$hatchback=$_POST['option3'];
$universal=$_POST['option4'];
$vnedor=$_POST['option5'];

$length1=$_POST['length1'];
if ( $length1 == NULL ) { $length1 = 0; } else {};
$length2=$_POST['length2'];
if ( $length2 == NULL ) { $length2 = 99999; } else {};

$length = ' AND (length >= '.$length1.' and length <= '.$length2. ')';

$width1=$_POST['width1'];
if ( $width1 == NULL ) { $width1 = 0; } else {};
$width2=$_POST['width2'];
if ( $width2 == NULL ) { $width2 = 99999; } else {};

$width = ' AND (width >= '.$width1.' and width <= '.$width2. ')';

$height1=$_POST['height1'];
if ( $height1 == NULL ) { $height1 = 0; } else {};
$height2=$_POST['height2'];
if ( $height2 == NULL ) { $height2 = 99999; } else {};

$height = ' AND (height >= '.$height1.' and height <= '.$height2. ')';



$marka1=$_POST['marka1'];

if ( $marka1 == 1 ) {} else { $marka2 = " AND (marka = '$marka1') "; };

echo ('<div class="body">');
		
	$query = mysql_query("SELECT * FROM auto WHERE 
	(bodywork IN ('$sedan','$cupe','$vnedor','$hatchback','$universal'))
	".$bodywork."
	".$length."
	".$width."
	".$height."
	".$marka2."
	
	");
	$row = mysql_fetch_array($query);
	
	
	
	
	
	do
	{
	
	echo "
	<div class='car1'>
		<div class='car1_1'>".$row['marka']." ". $row['model']."
		<div class='car1_2' style='background-image: url(".$row['img'].");' ></div></div>
		<div class='car1_3'>
			<div>Тип кузова <i>".$row['bodywork']."</i><br/><hr class='hr1'/></div>
			<div>Длина <i>".$row['length']."мм</i><hr class='hr1'/></div>
			<div>Ширина <i>".$row['width']."мм</i><hr class='hr1'/></div>
			<div>Высота <i>".$row['height']."мм</i><hr class='hr1'/></div>
			<div>Объем двигателя <i>".$row['engine']."<sup>3</sup></i><hr class='hr1'/></div>
			<div>Мощность <i>".$row['power']." л.с.</i><hr class='hr1'/></div>
			<div>Распол. цилиндров <i>".$row['Pcylinders']."</i><hr class='hr1'/></div>
		</div>
		<div class='car1_4'>
			<div>Количество цилиндров <i>".$row['Ncylinders']."</i><br/><hr class='hr1'/></div>
			<div>Топливо <i>".$row['fuel']."</i><hr class='hr1'/></div>
			<div>Максимальная скорость <i>".$row['speed']." км/час</i><hr class='hr1'/></div>
			<div>Время разгона (0-100 км/час) <i>".$row['acceleration']." с</i><hr class='hr1'/></div>
			<div>Расход топлива на шоссе <i>".$row['highway']." л/100 км</i><hr class='hr1'/></div>
			<div>Расход топлива в городе <i>".$row['city']." л/100 км</i><hr class='hr1'/></div>
		</div>
</div>";
}

	while ($row = mysql_fetch_array($query)) ;
	echo "<div class='otstup'></div>";

 echo ('</div>
 
 ');
 


?>