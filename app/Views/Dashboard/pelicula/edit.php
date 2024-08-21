
<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    
<form action="/dashboard/Pelicula/update/<?= $pelicula['id']?>" method="post">
        <?= view('/Dashboard/pelicula/_form',['op' => 'Actualizar']) ?>
    </form>

<?= $this->endSection(); ?>
