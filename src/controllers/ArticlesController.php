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
            $this->view->renderHTML('articles/view.php', ['article' => $article]);
        }
        else {
            $this->view->renderHTML('errors/404.php', [], 404);
        }
        
    }

    public function edit($id) {
        $article = Articles::getById($id);
        if ($article === null) {
            $this->view->renderHTML('errors/404.php', [], 404);
        }
        $this->view->renderHTML('articles/edit.php', ['article' => $article]);
    }
}