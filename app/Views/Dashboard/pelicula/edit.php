
<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>



<form action="/dashboard/Pelicula/update/<?= $pelicula['id']?>" method="post">
        <?= view('/Dashboard/pelicula/_form',['op' => 'Actualizar']) ?>
    </form>

<?= view('helpers/_form-error')?>
<br>
<a href="/dashboard/Pelicula"><button type="submit">Volver</button></a>

<?= $this->endSection(); ?>
