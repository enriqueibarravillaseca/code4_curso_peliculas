<?= $this->extend('Layouts/dashboard'); ?>

<?= $this->Section('contenido') ?>
    

<div>
    <h1><?= $pelicula['titulo'] ?></h1>
    <h3><?= $pelicula['descripcion'] ?></h3> 

   </div>
<?= $this->endSection(); ?>
