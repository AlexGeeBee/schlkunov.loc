<?php

namespace src\controllers;

use src\models\Articles;
use src\models\Users;

class ArticlesController extends Controller {
    public function index() {
        $articles = Articles::findAll();

        $this->view->renderHTML('articles/index.php', ['articles' => $articles]);
    }

    public function view($id) {
        $article = Articles::getById($id);

        if ($article !== null) {
            $author = Users::getById($article->getAuthorId());

            $this->view->renderHTML('articles/view.php', ['article' => $article, 'author' => $author]);
        }
        else {
            $this->view->renderHTML('errors/404.php', [], 404);
        }
        
    }
}