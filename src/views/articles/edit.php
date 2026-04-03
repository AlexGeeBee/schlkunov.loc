<h1>Редактирование статьи: <?= $article->getName() ?></h1>


<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>


<form action="" method="POST">
    <label>Название статьи: <br> <input class="edit_input" type="text" name="name" value="<?= $article->getName() ?>"></label><br>
    <label>Текст статьи: <br> <textarea class="edit_input edit_textarea" name="text" rows="10" cols="8"><?= $article->getText() ?></textarea></label><br>
    <input class="button" type="submit" value="Обновить">
</form>