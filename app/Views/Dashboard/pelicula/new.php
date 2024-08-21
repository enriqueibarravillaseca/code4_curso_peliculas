
<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    
<form action="/dashboard/Pelicula/create" method="post">
    <?= view('/Dashboard/pelicula/_form',['op' => 'Crear']) ?>
    </form>

    <?= view('helpers/_form-error')?>
    
<?= $this->endSection(); ?>