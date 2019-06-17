<?php
include ('db.php');
$id = $_POST['ok'];


if(isset($_POST['no']))

{

	$query = mysql_query("UPDATE auto SET minus = minus+1 WHERE id='$id'");
	
	if ($query=='true') 

	{echo "Ваши данные успешно добавлены";}
else
	{echo "Ваши данные не добавлены";}
 

};

?>