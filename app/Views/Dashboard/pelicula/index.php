<?= $this->extend('Layouts/Dashboard'); ?>

<?= $this->Section('contenido') ?>
<h1>Listado de Peliculas</h1>

<a href="/dashboard/Pelicula/new"> Crear </a>
<table>
    <tr>
        <th>
            Titulo
        </th>
        <th>
            Descripcion
        </th>
        <th>
            Opciones
        </th>
    </tr>
        <?php foreach($peliculas as $key => $value) : ?>
            <tr>
                <td><?= $value->titulo ?></td>
                <td><?= $value->descripcion ?></td>
                <td>
                    <a href="/dashboard/Pelicula/show/<?= $value->id ?>"> Show  </a>
                    <a href="/dashboard/Pelicula/edit/<?= $value->id ?>"> Edit </a>
                    <form action="/dashboard/Pelicula/delete/<?= $value->id?>" method="post">
                        <button type="submit">
                            Borrar
                        </button>
                    </form>
                    
                </td>  
            </tr>
        <?php endforeach ?>
</table>

<?= $this->endSection() ?>

  

