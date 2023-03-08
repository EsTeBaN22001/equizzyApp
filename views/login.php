<section class="section-sm container-sm reveal-bottom">
  <h1>Iniciar sesión</h1>
  <?php include_once(__DIR__ . './templates/alerts.php') ?>
  <div class="login-form-container">
    <form method="POST" action="" class="form">
      <label for="name" class="warning-input"><span>*</span><p>Todos los campos son obligatorios</p></label>
      <div class="field-group">
        <label for="email">Correo electrónico:</label>
        <input 
        autofocus 
        type="email" 
        name="email" 
        title="Correo electrónico"
        id="email" 
        placeholder="Ingrese su correo">
      </div>
      <div class="field-group">
        <label for="password">Contraseña:</label>
        <input 
        type="password" 
        name="password" 
        title="Contraseña"
        id="password" 
        placeholder="Ingrese su contraseña">
      </div>
      <div class="field-group">
        <input 
        class="button-submit" 
        type="submit"
        value="INICIAR SESIÓN">
      </div>
    </form>
  </div>
</section>