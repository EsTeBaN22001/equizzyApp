<section class="polls-carrousel container section-sm">
  <div class="header-container">
    <h2>Encuestas populares</h2>
  </div>
  <div class="carrousel-container">
    <div class="glide glide1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
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
</section>

<section class="polls-carrousel container section-sm">
  <div class="header-container">
    <h2>Categorías principales</h2>
    <a href="<?= $_ENV['HOST'] ?>/polls">Ver todas</a>
  </div>
  <div class="carrousel-container">
    <div class="glide glide2">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-poll-container">
              <img src="build/img/hero.webp">
              <div class="about-poll">
                <h3>Poll title</h3>
                <p><b>Categoría: </b>El pepe</p>
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
</section>

<?=

$script = '
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="/build/js/principalPollsCarrousel.js"></script>
'

?>