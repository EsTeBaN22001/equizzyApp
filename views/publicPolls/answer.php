<section class="section-sm container-sm answers-section">
  <h1>Resultados de la encuesta</h1>
  <h2><?=$pollTitle?></h2>
  <div class="answers-container section-sm">



  </div>
  <div class="rate-poll-container section">
    <div class="rate-info">
      <h2>¿Fué de tu agrado esta encuesta?</h2>
      <p>Déjanos tu calificación</p>
    </div>
    <div class="stars-widget">
      <span class="fas fa-star" data-rateid="1"></span>
      <span class="fas fa-star" data-rateid="2"></span>
      <span class="fas fa-star" data-rateid="3"></span>
      <span class="fas fa-star" data-rateid="4"></span>
      <span class="fas fa-star" data-rateid="5"></span>
    </div>
    <button type="submit" class="rate-button">Enviar calificación</button>
  </div>
</section>

<?php

$script = '
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5.0.12/dark.min.css"> 
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js" integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/build/js/answers/getAnswers.js"></script>
  <script src="/build/js/answers/ratePoll.js"></script>
'

?>