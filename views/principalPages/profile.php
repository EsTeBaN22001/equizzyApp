<div class="profile-section section-sm container-sm">
  <h1>Perfil</h1>

  <?php include_once(__DIR__ . '/../templates/alerts.php') ?>

  <?php if(isset($_GET['alert'])): ?>
    <div class="alert success">
      Se guardaron los cambios
    </div>
  <?php endif ?>

  <div class="form-container login-form-container">
    <form method="POST" action="/profile" class="form">
      <h2>Cambiar los datos del perfíl</h2>
      <div class="field-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" value="<?= $name ?>">
      </div>
      <div class="field-group">
        <label for="name">Apellido:</label>
        <input type="text" name="surname" id="surnam" placeholder="Ingrese su apellido" value="<?= $surname ?>">
      </div>
      <div class="field-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" placeholder="Ingrese su correo" value="<?= $email ?>">
      </div>
      <a class="link-profile" href="<?= $_ENV['HOST'] ?>/profile/change-password">Cambiar contraseña</a>
      <div class="field-group">
        <input class="button-submit" type="submit" value="GUARDAR CAMBIOS">
      </div>
    </form>
  </div>
</div>

<?php

$script = '

<script src="/build/js/removeSuccessAlerts.js"></script>

';

?>
