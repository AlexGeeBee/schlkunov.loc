<?php

return [
    '~^articles/add$~' => [src\controllers\ArticlesController::class, 'add'],
    '~^articles$~' => [src\controllers\ArticlesController::class, 'index'],
    '~^article/(\d+)$~' => [src\controllers\ArticlesController::class, 'view'],
    '~^article/(\d+)/edit$~' => [src\controllers\ArticlesController::class, 'edit'],
    '~^article/(\d+)/delete$~' => [src\controllers\ArticlesController::class, 'delete'],
    '~^articles/search$~' => [src\controllers\ArticlesController::class, 'search'],
    '~^hello/(.*)$~' => [src\controllers\MainController::class, 'sayHello'],
    '~^user/signUp$~' => [src\controllers\UsersController::class, 'signUp'],
    '~^user/logIn$~' => [src\controllers\UsersController::class, 'logIn'],
    '~^user/logOut$~' => [src\controllers\UsersController::class, 'logOut'],
    '~^users$~' => [src\controllers\UsersController::class, 'allUsers'],
    '~^$~' => [src\controllers\MainController::class, 'main'],
];