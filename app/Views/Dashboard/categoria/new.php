<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    

<form action="/dashboard/Categoria/create" method="post">
        <?= view('/Dashboard/categoria/_form',['op' => 'Crear']) ?>
    </form>


<?= view('helpers/_form-error')?>

<?= $this->endSection(); ?>
