<?= $this->extend('Layouts/web'); ?>

<?= $this->Section('contenido') ?>

<?= view('helpers/_form-error')?>

<form action="<?= route_to('usuario.login_post')?>" method="post">

<label for="email">Usuario / Email</label>
<input type="text" name="email" id="email">

<label for="contrasena">Contraseña</label>
<input type="password" name="contrasena" id="contrasena">

<input type="submit" value="Enviar">
</form>


<?= $this->endSection() ?>

  

