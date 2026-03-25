<?php

return [
    '~^articles$~' => [src\controllers\ArticlesController::class, 'index'],
    '~^article/(\d+)$~' => [src\controllers\ArticlesController::class, 'view'],
    '~^article/(\d+)/edit$~' => [src\controllers\ArticlesController::class, 'edit'],
    '~^hello/(.*)$~' => [src\controllers\MainController::class, 'sayHello'],
    '~^$~' => [src\controllers\MainController::class, 'main'],
];