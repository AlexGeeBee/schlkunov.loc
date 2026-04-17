
<a href="/articles"><= ко всем статьям</a>

<h1><?= $article->getName() ?></h1>


<?php if($article->getImg() !== null) : ?>
    <img src="/<?= $article->getImg() ?>" width="400px" alt="">
<?php endif; ?>

<p><?= $article->getText() ?></p>

<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>

<?php if ($user): ?>
    <br>
    <a class="post_link edit" href="/article/<?= $article->getId() ?>/edit">Редактировать</a>
    <br>
    <a class="post_link delete" href="/article/<?= $article->getId() ?>/delete">Удалить</a>
<?php endif ?>