<?/*
������ ����������� ������������
===============================
$login - ����� ������������

*/?>
<h1>�����������</h1>
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
    ���:
    <br/>
    <input name="name" type="text" value="<?=$name?>"/>
    <br/>
	�����:
	<br/>
	<input name="login" type="text" value="<?=$login?>"/>
	<br/>
	������:
	<br/> 
	<input name="password" type="password"/>
	<br/>
    ������ ������:
    <br/>
	<input name="password2" type="password"/>
    <br/>
    <input type="checkbox" name="remember" /> ��������� ����
	<br/>
	<input type="submit" value="�����"/>
	<br/>
	<br/>	
	<a href="index.php">������� ��������</a>
</form>
