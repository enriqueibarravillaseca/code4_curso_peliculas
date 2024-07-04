<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorias</title>
</head>
<body>
    
    <h1>Listado de Categorias</h1>

    <a href="/Categoria/new">Crear</a>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Titulo
            </th>
            <th>
                Opciones
            </th>
        </tr>
            <?php foreach ($categorias as $key => $value) : ?>
                <tr>
                <td><?=$value['id'] ?></td>
                    <td><?=$value['titulo'] ?></td>
                    <td>
                        <a href="/Categoria/show/<?= $value['id'] ?>">Show</a>
                        <a href="/Categoria/edit/<?= $value['id'] ?>">Edit</a>
                        <form action="/Categoria/delete/<?= $value['id'] ?>" method="post">
                            <button type="submit">
                            Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            
            <?php endforeach ?>

    </table>

</body>
</html>