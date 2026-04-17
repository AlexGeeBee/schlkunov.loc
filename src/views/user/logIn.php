<h1>Вход</h1>

<?php if (!empty($error)) : ?>
    <p style="background-color: red;"><?= $error ?></p>
<?php endif ?>

<form class="auth" action="" method="POST">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login" value="<?= $_POST['login'] ?? '' ?>">

    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">

    <input type="submit" class="button" value="Войти">

    <p>Нет аккаунта? <a href="/user/signUp">Зарегистрироваться</a></p>
</form>