
<ul>

    <? foreach ($articles as $article): ?>
        <li>
             <a href="articles/show/<?=$article['id_article']?>"><h1> <?=$article['title']?></h1></a>
             <p> <?=$article['intro']?></p>
             <hr />
        </li>
    <? endforeach ?>
</ul>
