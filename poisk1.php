<div class="body">
<div class="poisk13">Поиск</div>
	<hr class='hr2'/>
	<div class="poisk14">Тип кузова</div>
		<div class="cuzov">
		<div class="sedan"> 
		<div class="cupe"> 
		<div class="hatchback"> 
		<div class="universalis"> 
		<div class="vnedor"> </div></div></div></div></div>
		<div class="eNyU8d textcuzov">
		<form method="POST" action="auto.php">
		<input type="checkbox" name="option1" value="Седан" id="aaaa1" checked="checked"/><label  for="aaaa1" class="c-b c-b-T" name="sedan" type="submit">Седан</label></div>
		<div class="eNyU8d textcuzov2"><input type="checkbox" name="option2" value="Купе" id="aaaa2" checked="checked"/><label for="aaaa2" class="c-b c-b-T" name="cupe" type="submit">Купе</label></div>
		<div class="eNyU8d textcuzov3"><input type="checkbox" name="option3" value="Хэтчбек" id="aaaa3" checked="checked"/><label for="aaaa3" class="c-b c-b-T" name="hatchback" type="submit">Хэтчбек</label></div>
		<div class="eNyU8d textcuzov4"><input type="checkbox" name="option4" value="Универсал" id="aaaa4" checked="checked"/><label for="aaaa4" class="c-b c-b-T" name="universal" type="submit">Универсал</label></div>
		<div class="eNyU8d textcuzov4"><input type="checkbox" name="option5" value="Внедорожник" id="aaaa5" checked="checked"/><label for="aaaa5" class="c-b c-b-T" name="vnedor" type="checkbox">Внедорожник</label></div>
	</div>
	<hr class='hr2'/>
	<div class="poiskStolb">
	<div class="poisk14">Длина</div>
	<div class="poisk21">MIN <input type="text" size="5" name="length1" value=""/>MAX <input type="text" size="5" name="length2" value=""/></div></div>
	<div class="poiskStolb">
	<div class="poisk14">Ширина</div>
	<div class="poisk21">MIN <input type="text" size="5" name="width1" value=""/>MAX <input type="text" size="5" name="width2" value=""/></div></div>
	<div class="poiskStolb1">
	<div class="poisk14">Высота</div>
	<div class="poisk21">MIN <input type="text" size="5" name="height1" value=""/>MAX <input type="text" size="5" name="height2" value=""/></div></div>
	<hr class='hr2'/>
	<div class="poisk14">Марка</div>
	<div class="poisk21"><select name="marka1" >
<? 

		$marka=mysql_query("SELECT * FROM marki");
		$mq=mysql_fetch_array($marka) ;
		echo '<option value="1"></option>';

		do
		{
			echo '<option  value="'.$mq['marka'].'">'.$mq['marka'].'</option>';
		}
		while($mq = mysql_fetch_array($marka))
		
?>
</select></div>
	<hr class='hr2'/>
	<button class="c-b1 c-b-T1" name="sedan" type="submit">Поиск</button></form>
</div>
