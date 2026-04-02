<h1>Регистрация</h1>

<?php if (!empty($error)) : ?>
    <p style="background-color: red;"><?= $error ?></p>
<?php endif ?>

<form class="auth" action="" method="POST">
    <label>Логин <input type="text" name="login" value="<?= $_POST['login'] ?? '' ?>"></label>
    <label>Email <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>"></label>
    <label>Пароль <input type="password" name="password"></label>
    <input type="submit" value="Зарегистрироваться">
    <p>Уже есть аккаунт? <a href="user/logIn">Войти</a></p>
</form>