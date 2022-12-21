<section class="section-sm container-sm edit-form-container">
  <h1>Editar encuesta</h1>
  <?php include_once(__DIR__ . './../templates/alerts.php') ?>
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
        <label for="categoryId" class="warning-input"><span>*</span><p>Tiene un máximo de 500 carácteres</p></label>
        <textarea 
        maxlength="500"
        value="<?= $poll->description ?>"
        name="description"
        title="Descripción sobre la encuesta"
        id="description" 
        placeholder="Ingrese la descripción de la encuesta" 
        class="char-to-count"
        ><?= $poll->description ?></textarea>
        <span class="char-counter"></span>
      </div>
      <div class="field-group">
        <label for="categoryId">Categoría:</label>
        <label for="categoryId" class="warning-input"><span>*</span> <p>Si no existe la categoría que desea puede <a href="<?php $_ENV['HOST'] ?>/categories/list">crearla</a></p></label>
        <select name="categoryId" id="category" title="Categoría sobre la encuesta">
          <option value="" selected disabled>--Elegir una opción--</option>
          <?php foreach($categories as $category): ?>

            <?php debug($category->id) ?>
            <?php if($category->id == $poll->categoryId): ?>
              <option selected title="<?= $category->name ?>" value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php else: ?>
              <option title="<?= $category->name ?>" value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endif ?>

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
        value="GUARDAR CAMBIOS">
      </div>
    </form>
  </div>
</section>

<?php 

  $script = '

  <script src="/build/js/polls/textAreaCounter.js"></script>

  ';

?>