<?/*
������ ����������� ������������
===============================
$login - ����� ������������

*/?>
<h1>�����������</h1>
<form method="post">
	�����:
	<br/>
	<input name="login" type="text" value="<?=$login?>"/>
	<br/>
	������:
	<br/> 
	<input name="password" type="password"/>
	<br/>
	<input type="checkbox" name="remember" /> ��������� ����
	<br/>	
	<input type="submit" value="�����"/>
	<br/>
	<br/>	
	<a href="/auth/register">�����������</a>
</form>
