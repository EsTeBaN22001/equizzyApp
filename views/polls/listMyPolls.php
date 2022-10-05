<div class="my-polls-section section-sm container-sm">
  <?php if ($_GET) : ?>
    <div class="alert <?= $_GET['alert'] ?>">
      La encuesta se eliminó correctamente
    </div>
  <?php endif ?>
  <div class="header-title-container">
    <h1>Mis encuestas</h1>
    <a href="<?= $_ENV['HOST'] ?>/polls/create" class="create-poll-button">Crear encuesta</a>
  </div>
  <div class="polls-container">

    <?php foreach ($userPolls as $poll) : ?>

      <div class="poll" data-id="<?= $poll->uniqId ?>">
        <div class="img-container">
          <img src="/pollsImages/<?= $poll->img ?>" alt="Imagen de la encuesta">
        </div>
        <div class="about-poll">
          <h3><?= $poll->title ?></h3>
          <button class="menu-button">^</button>
          <ul class="options-container">
            <a href="#">
              <li class="option">
                <i class="fa-regular fa-eye"></i>
                <p>Ver</p>
              </li>
            </a>
            <a href="<?= $_ENV['HOST'] ?>/polls/edit?poll=<?= $poll->uniqId ?>">
              <li class="option">
                <i class="fa-solid fa-pen"></i>
                <p>Editar</p>
              </li>
            </a>
            <a href="<?= $_ENV['HOST'] ?>/polls/delete?poll=<?= $poll->uniqId ?>">
              <li class="option">
                <i class="fa-solid fa-trash-can"></i>
                <p>Eliminar</p>
              </li>
            </a>
          </ul>
        </div>
      </div>

    <?php endforeach ?>

  </div>
</div>

<?=

$script = '
  <script src="/build/js/menuOptionsMyPolls.js"></script>
';

?>