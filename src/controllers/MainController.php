<?php

namespace src\controllers;

use views\View;
use src\services\Db;

class MainController extends Controller {
    
    public function main() {
        $db = new Db();
        $articles = $db->query('SELECT * FROM `articles`;', [], Articles::class);

        $this->view->renderHTML('main/main.php', ['articles' => $articles]);
    }

    public function sayHello($name)
    {
        echo 'Привет, ' . $name;
    }
}
