<section class="section-sm container-sm respond-container">
  <h1 class="poll-title"><?= $poll->title ?></h1>
  <p class="description"><?= $poll->description ?></p>

  <div class="questions-container section-sm">
    <?php foreach ($questions as $question => $value) : ?>

      <div class="question">
        <h3 class="question-title"><?= $question ?></h3>

        <form class="form-options-container">
          <?php foreach ($value as $option) : ?>
            <div class="option">
              <input type="radio" name="<?= $question ?>" id="<?= $option ?>">
              <label for="<?= $option ?>"><?= $option ?></label>
            </div>
          <?php endforeach ?>
        </form>
      </div>


    <?php endforeach ?>
    <div class="button-submit-container">
      <button class="button-submit" type="submit">Enviar respuestas</button>
    </div>
  </div>
</section>