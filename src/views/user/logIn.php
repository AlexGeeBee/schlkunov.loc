<h1>Вход</h1>

<?php if (!empty($error)) : ?>
    <p style="background-color: red;"><?= $error ?></p>
<?php endif ?>

<form action="" method="POST">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login" value="<?= $_POST['login'] ?? '' ?>">

    <br>

    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">

    <br>

    <button type="submit" class="btn btn-dark card-button w-100 py-2">Войти</button>
</form>

<div id="bb" class="text-center mt-3 pt-2 border-top">
    <p>Нет аккаунта? <a href="user/signUp">Зарегистрироваться</a></p>
</div>


<!-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body p-4">

                    <h1 id="aa" class="card-title text-center mb-4 h2">Вход</h1>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $error ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="login" class="form-label">Логин </label>
                            <input type="text" class="form-control" id="login" name="login"
                                value="<?= $_POST['login'] ?? '' ?>">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-dark card-button w-100 py-2">Войти</button>
                    </form>

                    <div id="bb" class="text-center mt-3 pt-2 border-top">
                        <p>Нет аккаунта? <a href="user/signUp">Зарегистрироваться</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->