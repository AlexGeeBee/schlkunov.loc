<?php if (empty($_GET['q'])): ?>

    <h1>Поиск по сайту</h1>
    <form action="">
        <label for="search">Введите запрос</label>
        <input class="form-control" type="text" name="q" id="search">
        <input type="submit" value="Искать">
    </form>


<?php else: ?>
    <h1>Результаты поиска</h1>
    <p>По запросу: <?= $_GET['q'] ?></p>

    <?php if (empty($articles)): ?>
        <p>Ничего не найдено</p>
    
    <?php else: ?>
        <div class="all_posts">
            <?php foreach($articles as $article): ?>
                <div class="post">
                    <div>
                        <h2><?= $article->getName() ?></h2>

                        <?php if($article->getImg() !== null) : ?>
                            <img class="post_img" src="<?= $article->getImg() ?>" width="200px" alt="">
                        <?php endif; ?>
                        
                        <p><?= $article->getText() ?></p>
                    </div>

                    <div>
                        <p class="post_author">Автор: <?= $article->getAuthor()->getNickname() ?></p>
                        
                        <div class="post_actions">
                            <a class="post_link" href="article/<?= $article->getId() ?>">Подробнее</a>

                            <?php if ($user): ?>
                                <a class="post_link edit" href="article/<?= $article->getId() ?>/edit">Редактировать</a>
                                <a class="post_link delete" href="article/<?= $article->getId() ?>/delete">Удалить</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>