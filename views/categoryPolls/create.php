<section class="edit-form-container categories-section container-sm">
  <a href="<?= $_ENV['HOST'] ?>/categories/list" class="previousUrlLink"><i class="fa-solid fa-arrow-left"></i>Volver</a>
  <h1>Crear categoría</h1>
  <?php include_once(__DIR__ . './../templates/alerts.php') ?>
  <div class="form-container">
    <form method="POST" class="form" enctype="multipart/form-data">
      <div class="field-group">
        <label for="name">Nombre de la categoría:</label>
        <input autofocus type="text" name="name" id="name" placeholder="Ingrese el nombre de la categoría">
      </div>
      <div class="field-group">
        <input class="button-submit" type="submit" value="CREAR CATEGORÍA">
      </div>
    </form>
  </div>
</section>