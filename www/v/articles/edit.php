
<h1>�������� ������</h1>
<? if($error) :?>
    <b style="color: red;">��������� ��� ����!</b>
<? endif ?>
<form method="post">
    ��������:
    <br/>
    <input type="text" name="title" value="<?=$title?>" />
    <br/>
    <br/>
    ����������:
    <br/>
    <textarea name="content"><?=$content?></textarea>
    <br/>
    <input type="submit" name = "edit" value="��������" />
    <br />
    <input type="submit" name = "delete" value="�������" />
    <!--<input type="hidden" name = "id" value="<?=$id_article?>" />-->
</form>

