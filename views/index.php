<section class="box-info-container section-lg container-sm">
  <div class="text-content text-right">
    <h2>EquizzyApp</h2>
    <p>¡BIENVENIDO/A a nuestro sitio web sobre encuestas! En nuestro sitio, podrás crear y administrar tus propias encuestas de manera rápida y fácil. Con nuestra herramienta en línea, podrás recopilar datos valiosos de tus clientes, empleados o cualquier grupo de personas que desees encuestar.</p>
  </div>
  <div class="img-container">
    <img src="build/img/undraw_about.svg" alt="about image">
  </div>
</section>

<section class="box-info-container box-inverted section-lg container-sm">
  <div class="img-container">
    <img src="build/img/undraw_createPoll.svg" alt="about image">
  </div>
  <div class="text-content text-left">
    <h2>Creación de encuestas personalizadas</h2>
    <p>Con esta aplicación, puedes crear encuestas a medida para recopilar la opinión de tus clientes, empleados o cualquier otro grupo que desees consultar. Puedes elegir entre una amplia variedad de preguntas y tipos de respuesta, y personalizar el diseño y la apariencia de la encuesta para que se ajuste a tus necesidades.</p>
  </div>
</section>

<section class="box-info-container section-lg container-sm">
  <div class="text-content text-right">
    <h2>Análisis y recopilación de datos</h2>
    <p>Con este sistema, puedes obtener un análisis detallado de los resultados de la encuesta. El sistema te permite generar gráficos que facilitan la información de forma clara y sencilla. Puedes recopilar respuestas de forma automática. Las respuestas se almacenan en una base de datos segura, y puedes acceder a ellas en cualquier momento para ver el progreso de la encuesta y obtener una visión general de los resultados.</p>
  </div>
  <div class="img-container">
    <img src="build/img/undraw_analitics.svg" alt="about image">
  </div>
</section>

<section class="cards-section section-lg container-sm">
  <h2>Beneficios de usar EquizzyApp</h2>
  <div class="cards-container">
    <div class="card">
      <div class="img-container">
        <i class="fa-regular fa-face-smile"></i>
      </div>
      <div class="text-content">
        <h2>Fácil de usar</h2>
        <p>Nuestra plataforma es intuitiva y te guía paso a paso en el proceso de creación de encuestas.</p>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <i class="fa-solid fa-gauge-high"></i>
      </div>
      <div class="text-content">
        <h2>Rápido</h2>
        <p>Puedes publicar tu encuesta en cuestión de minutos y empezar a recoger respuestas de inmediato.</p>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
      </div>
      <div class="text-content">
        <h2>Personalizado</h2>
        <p>Nuestro editor de encuestas te permite añadir tu propio diseño y contenido para que tu encuesta refleje tu marca o proyecto.</p>
      </div>
    </div>
</section>

<div class="polls-carrousel section-lg container-sm">
  <h2>Encuestas populares</h2>
  <div class="carrousel-container">
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <?php foreach($polls as $poll): ?>
            <li class="glide__slide poll">
              <div class="slide__content about-poll-container">
                <img src="/pollsImages/<?= $poll->img ?>">
                <div class="about-poll">
                  <h3><?= $poll->title ?></h3>
                </div>
              </div>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          < </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
      </div>
      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
      </div>
    </div>
  </div>
</div>

<?php

$script = '
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="build/js/indexPollsCarrousel.js"></script>
';

?>