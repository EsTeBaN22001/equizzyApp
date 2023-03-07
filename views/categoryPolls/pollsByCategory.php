<div class="section-sm container-sm polls-by-category-container">
  <h1>Encuestas de la categoría <span><?= $categoryName ?></span></h1>
  
  <?php if(count($polls) == 0): ?>
    <p class="no-poll-message">No hay encuestas de esta categoría. Puedes <a href="<?= $_ENV['HOST'] ?>/polls/create">crear una</a>.</p>
  <?php endif ?>

  <div class="polls-container section-sm">


    <?php foreach($polls as $poll): ?>
      <div class="poll">
        <a class="poll-link" href="<?= $_ENV['HOST'] ?>/polls/respond?poll=<?= $poll->uniqId ?>">
          <div class="img-container">
            <img src="/pollsImages/<?=$poll->img?>" alt="Imagen de la encuesta <?=$poll->title?>">
          </div>
          <div class="about-poll">
            <h3><?=$poll->title?></h3>
          </div>
        </a>
      </div>
    <?php endforeach ?>

  </div>
</div>