<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
</head>
<body>
    
    <form action="/dashboard/Categoria/create" method="post">
        <?= view('/Dashboard/categoria/_form',['op' => 'Crear']) ?>
    </form>

</body>
</html>