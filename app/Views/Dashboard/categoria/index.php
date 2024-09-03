<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    
<h1>Listado de Categorias</h1>

    
<a href="/dashboard/Categoria/new">Crear</a>
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
            <td><?=$value->id ?></td>
                <td><?=$value->titulo ?></td>
                <td>
                    <a href="/dashboard/Categoria/show/<?= $value->id ?>">Show</a>
                    <a href="/dashboard/Categoria/edit/<?= $value->id ?>">Edit</a>
                    <form action="/dashboard/Categoria/delete/<?= $value->id ?>" method="post">
                        <button type="submit">
                        Borrar
                        </button>
                    </form>
                </td>
            </tr>
        
        <?php endforeach ?>

</table>

<br>
<a href="/logout"><button type="submit">Cerrar sesión</button></a>
<?= $this->endSection(); ?>
   