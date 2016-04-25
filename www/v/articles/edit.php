
<h1>Изменить статью</h1>
<? if($error) :?>
    <b style="color: red;">Заполните все поля!</b>
<? endif ?>
<form method="post">
    Название:
    <br/>
    <input type="text" name="title" value="<?=$title?>" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content"><?=$content?></textarea>
    <br/>
    <input type="submit" name = "edit" value="Изменить" />
    <br />
    <input type="submit" name = "delete" value="Удалить" />
    <!--<input type="hidden" name = "id" value="<?=$id_article?>" />-->
</form>

