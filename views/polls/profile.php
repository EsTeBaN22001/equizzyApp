<div class="profile-section section-sm container-sm">
  <h1>Perfil</h1>
  <div class="login-form-container">
    <form method="POST" action="" class="form">
      <a class="link-profile" href="<= $_ENV['HOST'] ?>/myPolls">Mis encuestas</a>
      <div class="field-group">
        <label for="name">Nombre completo:</label>
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre">
      </div>
      <div class="field-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" placeholder="Ingrese su correo">
      </div>
      <div class="field-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
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