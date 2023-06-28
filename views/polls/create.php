<section class="section-sm container-sm">
  <!-- <a href="<?= $_ENV['HOST'] ?>/my-polls" class="previousUrlLink"><i class="fa-solid fa-arrow-left"></i>Volver</a> -->
  <h1>Crear encuesta</h1>
  <?php include_once(__DIR__ . '/../templates/alerts.php') ?>
  <div class="form-container">
    <form method="POST" class="form" enctype="multipart/form-data">
      <div class="field-group">
        <label for="title">Nombre:</label>
        <input 
        type="text" 
        name="title"
        title="Nombre"
        id="title" 
        placeholder="Ingrese el nombre de la encuesta" 
        value="<?= $poll->title ?>"
        >
      </div>
      <div class="field-group">
        <label for="description">Descripción:</label>
        <label for="categoryId" class="warning-input"><span>*</span> Tiene un máximo de 500 carácteres</label>
        <textarea 
        value="<?= $poll->description ?>"
        name="description"
        title="Descripción sobre la encuesta"
        id="description" 
        placeholder="Ingrese la descripción de la encuesta" 
        class="char-to-count"
        ></textarea>
        <span class="char-counter"></span>
      </div>
      <div class="field-group">
        <label for="categoryId">Categoría:</label>
        <label for="categoryId" class="warning-input"><span>*</span> Si no existe la categoría que desea puede <a href="<?php $_ENV['HOST'] ?>/categories/list">crearla</a></label>
        <select name="categoryId" id="category" title="Categoría sobre la encuesta">
          <option value="" selected disabled>--Elegir una opción--</option>
          <?php foreach($categories as $category): ?>
            <option title="<?= $category->name ?>" value="<?= $category->id ?>"><?= $category->name ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="field-group">
        <label for="img">Seleccionar una imagen:</label>
        <input 
        type="file" 
        name="img" 
        title="Imagen sobre la encuesta"
        id="img"
        >
      </div>
      <div class="field-group">
        <input 
        class="button-submit" 
        type="submit" 
        value="CREAR ENCUESTA">
      </div>
    </form>
  </div>
</section>

<?php 

  $script = '

  <script src="/build/js/polls/textAreaCounter.js"></script>

  ';

?>
