<div class="section-sm container-sm polls-by-category-container">
  <h1>Encuestas de la categoría <span><?= $categoryName ?></span></h1>
  
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