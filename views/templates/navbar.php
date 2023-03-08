<section class="navbar-polls reveal-top">
  <div class="userNameContainer">
    <p class="userName">Hola: <span><?= $_SESSION['userName'] ?? 'Invitado' ?></span></p>
  </div>
  <div class="closeSession">
    <a href="<?= $_ENV['HOST'] ?>/logout">
      <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </a>
  </div>
</section>