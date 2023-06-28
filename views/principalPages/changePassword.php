<div class="profile-section section-sm container-sm">
  <h1>Perfil</h1>
  <?php include_once(__DIR__ . '/../templates/alerts.php') ?>
  <div class="login-form-container">
    <form method="POST" action="" class="form">
      <h2>Cambiar contraseña</h2>
      <div class="field-group">
        <label for="actualPassword">Contraseña actual:</label>
        <input type="password" name="actualPassword" id="actualPassword" placeholder="Ingrese su contraseña actual">
      </div>
      <div class="field-group">
        <label for="newPassword">Nueva contraseña:</label>
        <input type="password" name="newPassword" id="newPassword" placeholder="Ingrese su nueva contraseña">
      </div>
      <div class="field-group">
        <label for="confirmPassword">Confirmar contraseña:</label>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Ingrese nuevamente su contraseña">
      </div>
      <div class="field-group">
        <input class="button-submit" type="submit" value="GUARDAR CAMBIOS">
      </div>
    </form>
  </div>
</div>