	<h1>����� ������</h1>	<? if($error) :?>		<b style="color: red;">��������� ��� ����!</b>	<? endif ?>	<form method="post">		��������:		<br/>		<input type="text" name="title" value="<?=$title?>" />		<br/>		<br/>		����������:		<br/>		<textarea name="content"><?=$content?></textarea>		<br/>		<input type="submit" value="��������" />	</form>