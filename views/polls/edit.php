<section class="section-sm container-sm edit-poll-container">
  <h1>Encuesta <span class="poll-title"><?= $poll->title ?></span></h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci optio voluptatum accusamus voluptas atque, quisquam earum animi molestias amet rerum tempore dolorem perferendis eos asperiores eligendi est ipsa, reprehenderit corrupti! Necessitatibus a odit ut? Assumenda maiores a labore culpa eaque?</p>
  <div class="questions-container-header">
    <h2>Preguntas de las encuestas</h2>
    <a href="#" class="create-question-button"><i class="fa-solid fa-plus"></i>Añadir</a>
  </div>
  <div class="questions-container container">

    <?php for ($i = 0; $i < 5; $i++) : ?>

      <div class="question">
        <div class="question-header">
          <div class="question-info">
            <div class="show-more-button">
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <h3>¿Cuál es el instrumento musical de cuerdas que tiene más cuerdas?</h3>
          </div>
          <div class="question-actions">
            <button class="menu-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            <ul class="options-container">
              <a href="#">
                <li class="option">
                  <i class="fa-solid fa-pen"></i>
                  <p>Editar</p>
                </li>
              </a>
              <a href="#">
                <li class="option">
                  <i class="fa-solid fa-trash-can"></i>
                  <p>Eliminar</p>
                </li>
              </a>
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

    <?php endfor ?>

  </div>
</section>

<?php

$script = '
  <script src="/build/js/crudQuestionPolls/createQuestion.js"></script>
  <script src="/build/js/polls/menuOptionsQuestions.js"></script>
'

?>