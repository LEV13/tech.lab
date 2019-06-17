<?php


 echo ('<div class="body">');
	
	
	$query = mysql_query("SELECT * FROM auto LIMIT 7");
	$row = mysql_fetch_array($query);
	
	
	
	
	do
	{
	
	echo "
	<div class='car1'>
<div class='car1_4'>
		<div class='car1_1'>".$row['marka']." ". $row['model']."
</div>
</div>
</div>";
}

	while ($row = mysql_fetch_array($query)) ;
	echo "<div class='otstup'></div>";

 echo ('</div>
 
 ');
 


?>