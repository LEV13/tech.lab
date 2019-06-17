<?php
include ('db.php');
$id = $_POST['ok'];


if(isset($_POST['ok']))

{

	$query = mysql_query("UPDATE auto SET plus = plus+1 WHERE id=1");
	
	if ($query=='true') 

	{echo "Ваши данные успешно добавлены";}
else
	{echo "Ваши данные не добавлены";}
 

};

?>