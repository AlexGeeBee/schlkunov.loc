<h1>Регистрация</h1>

<?php if (!empty($error)) : ?>
    <p style="background-color: red;"><?= $error ?></p>
<?php endif ?>

<form class="auth" action="" method="POST">
    <label>Логин</label>
    <input type="text" name="login" value="<?= $_POST['login'] ?? '' ?>">

    <label>Email</label>
    <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>">

    <label>Пароль</label>
    <input type="password" name="password">

    <input type="submit" class="button" value="Зарегистрироваться">

    <p>Уже есть аккаунт? <a href="/user/logIn">Войти</a></p>
</form>