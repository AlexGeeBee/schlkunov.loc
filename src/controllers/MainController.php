<?php

namespace src\controllers;

use views\View;
use src\services\Db;
use src\models\Article; //

class MainController extends Controller {
    
    public function main() {
        $db = Db::getInstance();
        $articles = $db->query('SELECT * FROM `articles`;', [], Article::class);

        $this->view->renderHTML('main/main.php', ['articles' => $articles]);
    }

    public function sayHello($name)
    {
        echo 'Привет, ' . $name;
    }
}
