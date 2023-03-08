<section class="section-sm container-sm reveal-bottom">
  <h1>Registrate</h1>
  <?php include_once(__DIR__ . './templates/alerts.php') ?>
  <div class="login-form-container">
    <form method="POST" action="" class="form">
      <label for="name" class="warning-input"><span>*</span><p>Todos los campos son obligatorios</p></label>
      <div class="field-group-container">
        <div class="field-group">
          <label for="name">Nombre:</label>
          <input 
          type="text" 
          name="name" 
          id="name" 
          placeholder="Ingrese su nombre"
          value="<?= $user->name ?>"
          >
        </div>
        <div class="field-group">
          <label for="surname">Apellido:</label>
          <input 
          type="text" 
          name="surname" 
          id="surname" 
          placeholder="Ingrese su apellido"
          value="<?= $user->surname ?>"
          >
        </div>
      </div>
      <div class="field-group">
        <label for="email">Correo electrónico:</label>
        <input 
        type="email" 
        name="email" 
        id="email" 
        placeholder="Ingrese su correo"
        value="<?= $user->email ?>"
        >
      </div>
      <div class="field-group">
        <label for="password">Contraseña:</label>
        <input 
        type="password" 
        name="password" 
        id="password" 
        placeholder="Ingrese su contraseña"
        >
      </div>
      <div class="field-group">
        <label for="confirmPassword">Confirmar contraseña:</label>
        <input 
        type="password" 
        name="confirmPassword" 
        id="confirmPassword" 
        placeholder="Ingrese nuevamente su contraseña"
        >
      </div>
      <div class="field-group">
        <input class="button-submit" type="submit" value="REGISTRARSE">
      </div>
    </form>
  </div>
</section>