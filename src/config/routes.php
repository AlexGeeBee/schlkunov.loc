<?php

return [
    '~^articles/add$~' => [src\controllers\ArticlesController::class, 'add'],
    '~^articles$~' => [src\controllers\ArticlesController::class, 'index'],
    '~^article/(\d+)$~' => [src\controllers\ArticlesController::class, 'view'],
    '~^article/(\d+)/edit$~' => [src\controllers\ArticlesController::class, 'edit'],
    '~^article/(\d+)/delete$~' => [src\controllers\ArticlesController::class, 'delete'],
    '~^hello/(.*)$~' => [src\controllers\MainController::class, 'sayHello'],
    '~^user/signUp$~' => [src\controllers\UsersController::class, 'signUp'],
    '~^user/logIn$~' => [src\controllers\UsersController::class, 'logIn'],
    '~^$~' => [src\controllers\MainController::class, 'main'],
];