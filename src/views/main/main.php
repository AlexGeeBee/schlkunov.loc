<h1>Статьи</h1>

<div class="all_posts">

    <?php foreach($articles as $article): ?>

        <div class="post">
            <div>
                <h2><?= $article->getName() ?></h2>

                <?php if($article->getImg() !== null) : ?>
                    <img class="post_img" src="/<?= $article->getImg() ?>" width="200px" alt="">
                <?php endif; ?>

                <p><?= $article->getText() ?></p>
            </div>


            <div>
                <p class="post_author">Автор: <?= $article->getAuthor()->getNickname() ?></p>
            
                <div class="post_actions">
                    <a class="post_link" href="/article/<?= $article->getId() ?>">Подробнее</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>