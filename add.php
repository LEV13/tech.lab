
<div class="body">
<div class="poisk13">Добавить автомобиль</div>
<form method="post" action="insert.php">
<table class="add" bgcolor="FFFFFF" border="0" width="600" height="" cellspacing="0" cellpadding="0" >
<td rowspan="19" width="50" height="" ></td>
<td class="gg">Марка</td><td class="gg"><select name="marka">
<? 

		$marka=mysql_query("SELECT * FROM marki");
		$mq=mysql_fetch_array($marka) ;
		
		do
		{
			echo '<option value="'.$mq['marka'].'">'.$mq['marka'].'</option>';
		}
		while($mq = mysql_fetch_array($marka))
		
?>
</select></td>
<tr><td class="gg">Модель</td><td class="gg"><input type="text" name="model"/></td></tr>
<tr><td class="gg">Год выпуска</td><td class="gg"><select name="year">
<?php
       for($i = 2004; $i <= date(2014); $i++) {
 print('<option value="' . $i . '"' . ($i == date('Y', $row["date"]) ? ' selected="selected"' : '') . '>' . $i . '</option>');
}
     ?>
</select></td>
<tr><td class="gg">Тип кузова</td><td class="gg"><select name="bodywork">
<? 

		$bodywork=mysql_query("SELECT * FROM bodywork");
		$dz=mysql_fetch_array($bodywork) ;
		
		do
		{
			echo '<option value="'.$dz['type'].'">'.$dz['type'].'</option>';
		}
		while($dz = mysql_fetch_array($bodywork))
		
?>
</select></td>
<td rowspan="14" width="50" height="" ></td>
</tr>
<tr><td class="gg">Длина</td><td class="gg"><input type="text" name="length"/></td></tr>
<tr><td class="gg">Ширина</td><td class="gg"><input type="text" name="width"/></td></tr>
<tr><td class="gg">Высота</td><td class="gg"><input type="text" name="height"/></td></tr>
<tr><td class="gg">Объем двигателя</td><td class="gg"><input type="text" name="engine"/></td></tr>
<tr><td class="gg">Мощность</td><td class="gg"><input type="text" name="power"/></td></tr>
<tr><td class="gg">Расположение цилиндров</td><td class="gg"><select name="Pcylinders">
<? 

		$Pcylinders=mysql_query("SELECT * FROM Pcylinders");
		$dp=mysql_fetch_array($Pcylinders) ;
		
		do
		{
			echo '<option value="'.$dp['type'].'">'.$dp['type'].'</option>';
		}
		while($dp = mysql_fetch_array($Pcylinders))
		
?>
   </select></td></tr>
<tr><td class="gg">Количество цилиндров</td><td class="gg"><select name="Ncylinders">
<? 

		$Ncylinders=mysql_query("SELECT * FROM Ncylinders");
		$dn=mysql_fetch_array($Ncylinders) ;
		
		do
		{
			echo '<option value="'.$dn['number'].'">'.$dn['number'].'</option>';
		}
		while($dn = mysql_fetch_array($Ncylinders))
		
?>
   </select></td></tr>
<tr><td class="gg">Топливо</td><td class="gg"><select name="fuel">
<? 

		$benzin=mysql_query("SELECT * FROM benzin");
		$dv=mysql_fetch_array($benzin) ;
		
		do
		{
			echo '<option value="'.$dv['type'].'">'.$dv['type'].'</option>';
		}
		while($dv = mysql_fetch_array($benzin))
		
?>
   </select>
		</td></tr>
<tr><td class="gg">Максимальная скорость</td><td class="gg"><input type="text" name="speed"/></td></tr>
<tr><td class="gg">Время разгона (0-100 км/час)</td><td class="gg"><input type="text" name="acceleration"/></td></tr>
<tr><td class="gg">Расход топлива на шоссе</td><td class="gg"><input type="text" name="highway"/></td></tr>
<tr><td class="gg">Расход топлива в городе</td><td class="gg"><input type="text" name="city"/></td></tr>
<tr><td class="gg">Дата добавления</td><td class="gg"><input type="text" name="data"/><td></tr>
<tr><td/><td><br/></td></tr>
<tr><td></td><td><button class="c-b c-b-T" name="ok" type="submit">Добавить</button></td></tr>
</table>
</tr>
</form>
</div>
</div>
</div>

