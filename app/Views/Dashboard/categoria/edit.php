<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    

<form action="/dashboard/Categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('/Dashboard/categoria/_form',['op' => 'Actualizar']) ?>
    </form>

<?= view('helpers/_form-error') ?>

<br>
<a href="/dashboard/Categoria"><button type="submit">Volver</button></a>

<?= $this->endSection(); ?>
