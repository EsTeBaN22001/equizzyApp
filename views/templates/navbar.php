<section class="navbar-polls">
  <div class="userNameContainer">
    <p class="userName">Hola: <span><?= $_SESSION['userName'] ?? 'Invitado' ?></span></p>
  </div>
  
  <?php if($_SERVER['PATH_INFO'] == '/polls/list'): ?>

  <div class="search-container">
    <input type="text" name="search" id="search" class="search" placeholder="Buscar encuesta">
    <i class="fa-solid fa-magnifying-glass search-icon"></i>
  </div>

  <?php endif ?>
  
  <div class="closeSession">
    <a href="<?= $_ENV['HOST'] ?>/logout">
      <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </a>
  </div>
</section>