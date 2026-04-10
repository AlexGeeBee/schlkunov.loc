<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Мой Блог</title>
<base href="/schelkunov.loc/">
<link rel="stylesheet" href="css/main.css">

</head>
<body>

<header>
    <div class="header_left">
        <h1><a href="">Мой Блог</a></h1>
        <p><?= $user ? 'Пользователь: ' . $user->getNickname() : '' ?></p>
    </div>
    <nav>
        <a href="">Главная</a>
        <a href="articles">Статьи</a>
        <a href="articles/search">Поиск</a>

        <?php if (!$user): ?>
            <a href="user/logIn">Вход</a>
            <a href="user/signUp">Регистрация</a>
        <?php endif ?>

        <?php if ($user): ?>
            <a href="user/logOut">Выход</a>
        <?php endif ?>
    </nav>
</header>

<main>
    <?= $content ?>
</main>

<footer>
    <p>© 2026 Мой Блог | Связаться: info@myblog.ru</p>
</footer>

</body>
</html>