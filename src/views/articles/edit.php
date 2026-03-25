<h1>Редактирование статьи: <?= $article->getName() ?></h1>


<p><?= $article->getText() ?></p>
<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>


<form action="" method="POST">
    <label>Название статьи: <input type="text" name="name" value="<?= $article->getName() ?>"></label><br>
    <label>Текст статьи: <input type="text" name="text" value="<?= $article->getText() ?>"></label><br>
    <input type="submit" value="Обновить">
</form>