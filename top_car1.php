<?php


 echo ('<div class="body">');
	
	$query = mysql_query("SELECT * FROM auto ORDER BY plus - minus DESC");
	$row = mysql_fetch_array($query);
	
	
	
	
	do
	{
	$summm = $row['plus']-$row['minus'];
	if ($summm >= 0) {$summ = "<font color='grean'>".$summm."</font>";} else {$summ = "<font color='red'>".$summm."</font>";};
	echo "
	<div class='car1'>
		<div class='car1_1'>".$row['marka']." ". $row['model']."
		<div class='car1_2' style='background-image: url(".$row['img'].");' ></div></div>
		<div class='car1_3'>
			<div>Тип кузова <i>".$row['bodywork']."</i><br/><hr class='hr1'/></div>
			<div>Длина <i>".$row['length']."мм</i><hr class='hr1'/></div>
			<div>Ширина <i>".$row['width']."мм</i><hr class='hr1'/></div>
			<div>Высота <i>".$row['height']."</i><hr class='hr1'/></div>
			<div>Объем двигателя <i>".$row['engine']."<sup>3</sup></i><hr class='hr1'/></div>
			<div>Мощность <i>".$row['power']." л.с.</i><hr class='hr1'/></div>
			<div>Распол. цилиндров <i>".$row['Pcylinders']."</i><hr class='hr1'/></div>
			<br/>
			<div class='poisk35'>Рейтинг ".$summ."  </div>
		</div>
		<div class='car1_4'>
			<div>Количество цилиндров <i>".$row['Ncylinders']."</i><br/><hr class='hr1'/></div>
			<div>Топливо <i>".$row['fuel']."</i><hr class='hr1'/></div>
			<div>Максимальная скорость <i>".$row['speed']." км/час</i><hr class='hr1'/></div>
			<div>Время разгона (0-100 км/час) <i>".$row['acceleration']." с</i><hr class='hr1'/></div>
			<div>Расход топлива на шоссе <i>".$row['highway']." л/100 км</i><hr class='hr1'/></div>
			<div>Расход топлива в городе <i>".$row['city']." л/100 км</i><hr class='hr1'/></div>
			<div class='poisk36'>Голосов 
			<font color='grean'>+".$row['plus']."</font> <font color='red'>-".$row['minus']."</font></div>
			<div class='poisk36'>
			<form method='post' action='plus.php'><button name='ok' value=".$row['id']."> <font color='grean'>ПЛЮС</font></button></form>
			<form method='post' action='minus.php'><button name='no' value=".$row['id']."> <font color='red'>МИНУС</font></button></form> 
			</div>
		</div>
</div>";
}

	while ($row = mysql_fetch_array($query)) ;
	echo "<div class='otstup'></div>";

 echo ('</div>
 
 ');
 


?>