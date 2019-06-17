<?php

    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    $a1 = "<li><a href='#' class='active'>Администрирование</a></li>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    $a1 = "<li><a href='/table.php' class='active'>Администрирование</a></li>";
    }

	 if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    $a2 = "<font color='blue'>Гость</font>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    $a2 = "<font color='red'>".$_SESSION['login']."</font>";
    }

	
echo ('


<div class="tmenu"> 
<ul> 
<li><a href="/index.php">Главная</a></li> 
'.$a1.'
<li><a >Вы вошли как '.$a2.'</a></li>
</ul>
<div>
</div>
</div>

');
?>
