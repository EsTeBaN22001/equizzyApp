<section class="section-sm container-sm edit-poll-container">
  <h1>Encuesta <span class="poll-title"><?= $poll->title ?></span></h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci optio voluptatum accusamus voluptas atque, quisquam earum animi molestias amet rerum tempore dolorem perferendis eos asperiores eligendi est ipsa, reprehenderit corrupti! Necessitatibus a odit ut? Assumenda maiores a labore culpa eaque?</p>
  <div class="questions-container-header">
    <h2>Preguntas de las encuestas</h2>
    <a href="#" class="create-question-button"><i class="fa-solid fa-plus"></i>Añadir</a>
  </div>
  <div class="questions-container container">

    <?php if (count($questions) == 0) : ?>
      <p class="no-question">No hay preguntas aún</p>
    <?php else : ?>
      <?php foreach ($questions as $question) : ?>
        <div class="question">
          <div class="question-header">
            <div class="question-info">
              <div class="show-more-button">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <h3><?= $question->name ?></h3>
            </div>
            <div class="question-actions">
              <button class="menu-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
              <ul class="options-container">
                <li class="option edit-question">
                  <i class="fa-solid fa-pen"></i>
                  <p>Editar</p>
                </li>
                <li class="option delete-question" data-idquestion="<?= $question->id ?>">
                  <i class="fa-solid fa-trash-can"></i>
                  <p>Eliminar</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="question-content">
            <hr class="separator">
            <ul class="options-list">

              <?php for ($n = 0; $n < 5; $n++) : ?>

                <li class="option">
                  <p>Opción de cada pregunta de cada encuesta</p>
                  <div class="option-actions">
                    <button class="option-button edit-button"><i class="fa-solid fa-pen"></i>Editar</button>
                    <button class="option-button delete-button"><i class="fa-solid fa-trash"></i>Borrar</button>
                  </div>
                </li>

              <?php endfor; ?>

            </ul>
            <a href="#" class="add-option-button">Añadir opción</a>
          </div>
        </div>

      <?php endforeach ?>
    <?php endif ?>

  </div>
</section>

<?php

$script = '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5.0.12/dark.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="/build/js/crudQuestionPolls/createQuestion.js"></script>
  <script src="/build/js/crudQuestionPolls/deleteQuestion.js"></script>
  <script src="/build/js/polls/menuOptionsQuestions.js"></script>
'

?>