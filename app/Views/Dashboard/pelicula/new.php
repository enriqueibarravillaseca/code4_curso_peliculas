
<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    
<form action="/dashboard/Pelicula/create" method="post">
    <?= view('/Dashboard/pelicula/_form',['op' => 'Crear']) ?>
    </form>

    
<?= $this->endSection(); ?>