<section class="section-sm container-sm edit-form-container">
  <a href="<?= $_ENV['HOST'] ?>/my-polls" class="previousUrlLink"><i class="fa-solid fa-arrow-left"></i>Volver</a>
  <h1>Crear encuesta</h1>
  <?php include_once(__DIR__ . './../templates/alerts.php') ?>
  <div class="form-container">
    <form method="POST" class="form" enctype="multipart/form-data">
      <div class="field-group">
        <label for="title">Nombre de la encuesta:</label>
        <input type="text" name="title" id="title" placeholder="Ingrese el nombre de la encuesta">
      </div>
      <div class="field-group">
        <label for="categoryId">Categoría:</label>
        <select name="categoryId" id="category">
          <option value="" selected disabled>--Elegir una opción--</option>
          <?php foreach($categories as $category): ?>
            <option value="<?= $category->id ?>"><?= $category->name ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="field-group">
        <label for="img">Seleccionar una imagen:</label>
        <input type="file" name="img" id="img">
      </div>
      <div class="field-group">
        <input class="button-submit" type="submit" value="CREAR ENCUESTA">
      </div>
    </form>
  </div>
</section>