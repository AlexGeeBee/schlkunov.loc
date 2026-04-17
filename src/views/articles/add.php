<h1>Создание статьи</h1>

<?php if (!empty($error)) : ?>
    <p style="background-color: red;"><?= $error ?></p>
<?php endif ?>


<div class="m-3 col-md-6">

    <form class="auth" action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="inputName" class="form-label">Название</label>
            <input class="edit_input form-control" type="text" id="inputName" name="name" value="<?= $_POST['name'] ?? '' ?>">
        </div> 

        <div class="mb-3">
            <label for="inputText" class="form-label">Текст</label>
            <textarea class="edit_textarea form-control" id="inputText" name="text"><?= $_POST['text'] ?? '' ?></textarea>
        </div> 

        <div class="mb-3">
            <label for="inputImg" class="form-label">Обложка</label>
            <input class="form-control" type="file" id="inputImg" name="img">
        </div> 

        <input type="submit" class="button btn btn-primary" value="Создать">

    </form>

</div>