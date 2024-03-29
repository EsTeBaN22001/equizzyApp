<section class="section-sm container-sm edit-poll-container">
  <div class="poll-header">
    <h1><?=$poll->title?></h1>
    <a class="edit-info-button" href="<?= $_ENV['HOST'] ?>/polls/edit-info?poll=<?= $_GET['poll'] ?>"><i class="fa-regular fa-pen-to-square"></i>Editar información</a>
  </div>
  <div class="actions-container">
    <p>Estado: <button class="visibility-poll-button"></button></p>
    <a class="answers-link" href="<?=$_ENV['HOST']?>/polls/answers?poll=<?=$poll->uniqId?>"><i class="fa-regular fa-eye"></i>Ver resultados de la encuesta</a>
  </div>
  <p class="poll-description"><?=$poll->description?></p>
  <div class="questions-container-header">
    <h2>Preguntas de las encuestas</h2>
    <a href="#" class="create-question-button"><i class="fa-solid fa-plus"></i>Añadir</a>
  </div>
  <div class="questions-container container">

  <?php foreach ($questions as $question): ?>
    <div class="question" data-idquestion="<?=$question->id?>">
      <div class="question-header">
        <div class="question-info">
          <div class="show-more-button">
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <h3 data-namequestion="<?=$question->name?>"><?=$question->name?></h3>
        </div>
        <div class="question-actions">
          <button class="menu-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
          <ul class="options-container">
            <li class="option edit-question" data-idquestion="<?=$question->id?>">
              <i class="fa-solid fa-pen"></i>
              <p>Editar</p>
            </li>
            <li class="option delete-question" data-idquestion="<?=$question->id?>">
              <i class="fa-solid fa-trash-can"></i>
              <p>Eliminar</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="question-content">
        <hr class="separator">
        <ul class="options-list">

          <!-- <li class="option">
            <p class="name-option">Opción de cada pregunta de cada encuesta</p>
            <div class="option-actions">
              <button class="option-button edit-button"><i class="fa-solid fa-pen"></i>Editar</button>
              <button class="option-button delete-button"><i class="fa-solid fa-trash"></i>Borrar</button>
            </div>
          </li> -->

        </ul>
        <a href="#" class="add-option-button">Añadir opción</a>
      </div>
    </div>

  <?php endforeach?>

  </div>
</section>

<?php

$script = '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5.0.12/dark.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="/build/js/polls/changePollVisibility.js"></script>

  <script src="/build/js/crudQuestionPolls/questionManager.js"></script>
  <script src="/build/js/crudQuestionPolls/createQuestion.js"></script>
  <script src="/build/js/crudQuestionPolls/editQuestion.js"></script>
  <script src="/build/js/crudQuestionPolls/deleteQuestion.js"></script>

  <script src="/build/js/crudOptionPolls/createOption.js"></script>
  <script src="/build/js/crudOptionPolls/listOption.js"></script>
  <script src="/build/js/crudOptionPolls/editOption.js"></script>
  <script src="/build/js/crudOptionPolls/deleteOption.js"></script>
'

?>
