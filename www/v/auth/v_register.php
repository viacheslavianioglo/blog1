<?/*
Шаблон авторизации пользователя
===============================
$login - логин пользователя

*/?>
<h1>Авторизация</h1>
<div class="error">
<? if($errors): ?>
    <ul>
    <? foreach($errors as $error): ?>
        <li><?=$error?></li>
    <? endforeach; ?>
    </ul>
<? endif; ?>
</div>
<form method="post">
    Имя:
    <br/>
    <input name="name" type="text" value="<?=$name?>"/>
    <br/>
	Логин:
	<br/>
	<input name="login" type="text" value="<?=$login?>"/>
	<br/>
	Пароль:
	<br/> 
	<input name="password" type="password"/>
	<br/>
    Повтор пароля:
    <br/>
	<input name="password2" type="password"/>
    <br/>
    <input type="checkbox" name="remember" /> запомнить меня
	<br/>
	<input type="submit" value="Войти"/>
	<br/>
	<br/>	
	<a href="index.php">Главная страница</a>
</form>
