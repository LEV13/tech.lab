<?php
// Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    $z = "<a href='/reg.php' >Регистрация</a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    $z = "<a href='/exit.php' >Выход</a>";
    };
echo ('


<form class="logo1_1" method="post" action="testreg.php">
<input type="text" name="login" placeholder="Login" required />
<input type="password" name="password" placeholder="Password" required />
<button class="sbmt" name="submit" type="submit">Войти</button>
'.$z.'
</form> 
</div>
</div>
</div>
</div>
</div>


')

?>
	