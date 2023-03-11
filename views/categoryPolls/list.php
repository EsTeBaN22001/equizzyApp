<div class="categories-section section-sm container-sm">
  <?php if($_GET): ?>
    <div class="alert <?= $_GET['alert'] ?>">
      La categoría se creó correctamente
    </div>
  <?php endif ?>
  <div class="header-title-container">
    <h1>Categorías</h1>
    <a href="<?= $_ENV['HOST'] ?>/categories/create" class="create-category-button">Crear categoría</a>
  </div>
  <div class="categories-container">

    <?php foreach($categories as $category): ?>
  
      <div class="category" title="<?= $category->name ?>">
        <div class="about-category">
          <a href="<?= $_ENV['HOST'] ?>/polls-by-category?category=<?= $category->id ?>">
            <h3><?= $category->name ?></h3>
            <span class="char-counter"><?= $category->poll_count ?></span>
          </a>
        </div>
      </div>

    <?php endforeach ?>
    
  </div>
</div>