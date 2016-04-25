
<h1> <?=$article['title']?></h1></a>
<p> <?=$article['content']?></p>
<p><small>создано <a href="articles/user/<?=$user['id_user']?>"><?=$user['name']?></a></small></p>
<p><small>метки<a href="#"><?=user_name?></a></small></p>
<?// foreach ($tags as $tag): ?>
<!--    <li>-->
<!--        <p><small>метки<a href="#">--><?//=$tag?><!--</a></small></p>-->
<!--    </li>-->
<?// endforeach ?>


