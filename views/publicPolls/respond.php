<section class="section-sm container-sm respond-container">
  <h1 class="poll-title"><?= $poll->title ?></h1>
  <p class="description"><?= $poll->description ?></p>

  <?php if(isset($_GET['alert']) && $_GET['alert'] == 'error'): ?>
    <div class="alert <?= $_GET['alert'] ?>">Debes responder todas las preguntas</div>
  <?php endif ?>

  <div class="questions-container section-sm">
    <form method="POST">
      <?php foreach ($questions as $question => $options) : ?>
        <div class="question">
          <h3 class="question-title"><?= $question ?></h3>

          <div class="options-container">
            <?php foreach ($options as $option) : ?>
              <div class="option">
                <input type="radio" name="<?= $question ?>" value="<?= $option->id ?>" id="<?= $option->id ?>">
                <label for="<?= $option->id ?>"><?= $option->name ?></label>
              </div>
            <?php endforeach ?>
          </div>
        </div>


      <?php endforeach ?>
      <div class="button-submit-container">
        <button class="button-submit" type="submit">Enviar respuestas</button>
      </div>
    </form>
  </div>
</section>