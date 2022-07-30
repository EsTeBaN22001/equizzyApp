<section class="box-info-container section container-sm">
  <div class="text-content text-right">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptas dolorum obcaecati corporis adipisci optio rem harum, officia cumque fugit iste laboriosam dolores mollitia ratione doloremque sint non nihil eius ipsam ipsum repudiandae voluptate architecto.</p>
  </div>
  <div class="img-container">
    <img src="build/img/undraw_about.svg" alt="about image">
  </div>
</section>

<section class="box-info-container box-inverted section container-sm">
  <div class="img-container">
    <img src="build/img/undraw_about.svg" alt="about image">
  </div>
  <div class="text-content text-left">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptas dolorum obcaecati corporis adipisci optio rem harum, officia cumque fugit iste laboriosam dolores mollitia ratione doloremque sint non nihil eius ipsam ipsum repudiandae voluptate architecto.</p>
  </div>
</section>

<section class="box-info-container section container-sm">
  <div class="text-content text-right">
    <h2>Title</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptas dolorum obcaecati corporis adipisci optio rem harum, officia cumque fugit iste laboriosam dolores mollitia ratione doloremque sint non nihil eius ipsam ipsum repudiandae voluptate architecto.</p>
  </div>
  <div class="img-container">
    <img src="build/img/undraw_about.svg" alt="about image">
  </div>
</section>

<section class="cards-section section container-sm">
  <h2>Section title</h2>
  <div class="cards-container">
    <div class="card">
      <div class="img-container">
        <i class="fa-solid fa-square-poll-horizontal"></i>
      </div>
      <div class="text-content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dicta, inventore vitae assumenda voluptas obcaecati. Fuga pariatur architecto optio laboriosam.</p>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <i class="fa-solid fa-square-poll-horizontal"></i>
      </div>
      <div class="text-content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dicta, inventore vitae assumenda voluptas obcaecati. Fuga pariatur architecto optio laboriosam.</p>
      </div>
    </div>
    <div class="card">
      <div class="img-container">
        <i class="fa-solid fa-square-poll-horizontal"></i>
      </div>
      <div class="text-content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dicta, inventore vitae assumenda voluptas obcaecati. Fuga pariatur architecto optio laboriosam.</p>
      </div>
    </div>
</section>

<div class="polls-carrousel section container-sm">
  <h2>Encuestas populares</h2>
  <div class="carrousel-container">
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
              </div>
            </div>
          </li>
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