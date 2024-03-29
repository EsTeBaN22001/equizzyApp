<!-- Principal categories -->
<section class="polls-carrousel container section-sm principal-categories">
  <div class="header-container">
    <h2>Categorías principales</h2>
    <a href="<?= $_ENV['HOST'] ?>/categories/list">Ver todas</a>
  </div>
  <div class="carrousel-container">
    <div class="glide glide2">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <?php foreach($principalCategories as $category): ?>

            <li class="glide__slide poll" title="<?= $category->name ?>">
              <div class="slide__content category">
                <div class="about-category">
                  <a href="<?= $_ENV['HOST'] ?>/polls-by-category?category=<?= $category->id ?>"><h3><?= $category->name ?></h3></a>
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
    </div>
  </div>
</section>

<!-- Popular polls -->
<section class="polls-carrousel container section-sm">
  <div class="header-container">
    <h2>Encuestas populares</h2>
  </div>
  <div class="carrousel-container">
    <div class="glide glide1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <?php foreach($popularPolls as $poll): ?>
        
          <li class="glide__slide poll" title="<?= $poll->title ?>">
            <a href="<?= $_ENV['HOST'] ?>/polls/respond?poll=<?= $poll->uniqId ?>">
              <div class="slide__content about-poll-container">
                <img src="/pollsImages/<?= $poll->img ?>">
                <div class="about-poll">
                  <h3><?= $poll->title ?></h3>
                  <a class="category-link" href="<?= $_ENV['HOST'] ?>/polls-by-category?category=<?= $poll->categoryId ?>"><?= $poll->categoryName ?></a>
                </div>
              </div>
            </a>
          </li>

          <?php endforeach ?>
          
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          < </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
      </div>
    </div>
  </div>
</section>

<section class="create-poll container section-sm">
  <div class="text-info">
    <h2>Crear tu propia encuesta</h2>
    <p>Crear una encuesta en este sitio es una forma fácil y efectiva de obtener información valiosa de tu audiencia y conocer sobre diferentes temas</p>
    <a href="<?= $_ENV['HOST'] ?>/polls/create" class="create-poll-button">Crear encuesta</a>
  </div>
  <div class="img-container">
    <img src="/build/img/createPoll.svg" alt="imagen crear encuesta">
  </div>
</section>

<!-- CATEGORÍA 1 - MÚSICA -->
<section class="polls-carrousel container section-sm categories-section">
  <div class="header-container">
    <h2>Música</h2>
    <a href="<?= $_ENV['HOST'] ?>/polls-by-category?category=1">Ver todas</a>
  </div>
  <div class="carrousel-container">
    <div class="glide glide3">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <?php foreach($pollsCategoryOne as $poll): ?>

          <li class="glide__slide poll" title="<?= $poll->title ?>">
            <a href="<?= $_ENV['HOST'] ?>/polls/respond?poll=<?= $poll->uniqId ?>">
              <div class="slide__content about-poll-container">
                <img src="/pollsImages/<?= $poll->img ?>">
                <div class="about-poll">
                  <h3><?= $poll->title ?></h3>
                </div>
              </div>
            </a>
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
      </div>
    </div>
  </div>
</section>

<!-- CATEGORÍA 2 - INTELIGENCIA ARTIFICIAL -->
<section class="polls-carrousel container section-sm categories-section">
  <div class="header-container">
    <h2>Inteligencia artificial</h2>
    <a href="<?= $_ENV['HOST'] ?>/polls-by-category?category=15">Ver todas</a>
  </div>
  <div class="carrousel-container">
    <div class="glide glide4">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <?php foreach($pollsCategoryTwo as $poll): ?>

          <li class="glide__slide poll" title="<?= $poll->title ?>">
            <a href="<?= $_ENV['HOST'] ?>/polls/respond?poll=<?= $poll->uniqId ?>">
              <div class="slide__content about-poll-container">
                <img src="/pollsImages/<?= $poll->img ?>">
                <div class="about-poll">
                  <h3><?= $poll->title ?></h3>
                </div>
              </div>
            </a>
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
      </div>
    </div>
  </div>
</section>

<!-- CATEGORÍA 3 - CRIPTOMONEDAS -->
<section class="polls-carrousel container section-sm categories-section">
  <div class="header-container">
    <h2>Criptomonedas</h2>
    <a href="<?= $_ENV['HOST'] ?>/polls-by-category?category=2">Ver todas</a>
  </div>
  <div class="carrousel-container">
    <div class="glide glide5">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

        <?php foreach($pollsCategoryThree as $poll): ?>

        <li class="glide__slide poll" title="<?= $poll->title ?>">
          <a href="<?= $_ENV['HOST'] ?>/polls/respond?poll=<?= $poll->uniqId ?>">
            <div class="slide__content about-poll-container">
              <img src="/pollsImages/<?= $poll->img ?>">
              <div class="about-poll">
                <h3><?= $poll->title ?></h3>
              </div>
            </div>
          </a>
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
      </div>
    </div>
  </div>
</section>

<?=

$script = '
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5.0.12/dark.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="/build/js/principalPollsCarrousel.js"></script>
  <script src="/build/js/polls/searcher.js"></script>
'

?>

