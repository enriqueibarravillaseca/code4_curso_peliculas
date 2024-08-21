<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>

    <?= view('helpers/_session') ?>

    <form action="/dashboard/Categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('/Dashboard/categoria/_form',['op' => 'Actualizar']) ?>
    </form>

</body>
</html>