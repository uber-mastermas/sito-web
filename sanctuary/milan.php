<?php
$titolo = 'Milan';
$descrizione = 'The Sanctuary Milan, Porta Genova: an industrial space reimagined as a living sanctuary. Restaurant, pool area, yoga and pilates, club and private events.';
$pagina = 'milan.php';
$con_hero = true;
require_once 'partials/funzioni.php';
$chiave_sede = 'milano';
$sede = $SEDI[$chiave_sede];
$club_foto = 'img/pagine/milano/milano-club-luci-rosse.webp';
$club_alt = 'The Club under red lights, the crowd facing the stage';

require 'partials/prenotazione-invio.php';

include 'partials/header.php';
?>

  <section class="hero copre" style="--velo: 1.15">
    <?= video_hero('', 'img/pagine/milano/milano-piscina-giardino-palme.webp', 'img/video/milano-verticale.mp4', 'img/video/milano-verticale-attesa.webp', 'The pool and the garden of The Sanctuary Milan') ?>
    <div class="hero-testo">
      <p class="kicker">The Sanctuary · Porta Genova</p>
      <h1>Milan</h1>
      <p class="hero-sotto">An industrial space reimagined as a living sanctuary.</p>
      <div class="azioni">
        <a class="bottone bottone-chiaro" href="#book">Book a table</a>
        <a class="bottone bottone-chiaro-linea" href="#restaurant">Discover</a>
      </div>
    </div>
  </section>

  <nav class="sezioni-nav" aria-label="Sections of the page">
    <ul>
      <li><a href="#restaurant">Restaurant</a></li>
      <li><a href="#pool">Pool Area</a></li>
      <li><a href="#wellness">Yoga &amp; Pilates</a></li>
      <li><a href="#club">Club</a></li>
      <li><a href="#music">Music program</a></li>
      <li><a href="#book">Contact &amp; booking</a></li>
    </ul>
  </nav>

  <section class="intro contenitore" data-appare>
    <p class="kicker">The Sanctuary Milan</p>
    <h2>An <em>industrial space</em> reimagined as a <em>living sanctuary</em>.</h2>
    <p class="testo-grande">The Sanctuary Milan is a stage for creativity, connection and transformation, where every detail invites you to slow down and feel part of something greater.</p>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/milano/milano-sala-industriale-lanterne.webp', 'The industrial hall with lanterns and wooden tables', 1440, 1800, 'Sala industriale con lanterne') ?>
      <?= foto('img/pagine/milano/milano-bancone-pietra-vasi.webp', 'The stone bar counter with shelves of vases', 1440, 1800, 'Bancone in pietra') ?>
      <?= foto('img/pagine/milano/milano-sala-archi-finestre.webp', 'Arched windows and tall ceilings in the hall', 1440, 1800, 'Sala con archi') ?>
      <?= foto('img/pagine/milano/milano-tavolo-luce-finestra.webp', 'A table in the light of a window, among plants', 1440, 1800, 'Tavolo alla finestra') ?>
      <?= foto('img/pagine/milano/milano-salotto-quadro-scuro.webp', 'A quiet corner with a dark painting and a lounge chair', 1440, 1800, 'Salotto') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="restaurant" aria-labelledby="titolo-ristorante">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/milano/milano-astice-piatti-condivisi.webp', 'Lobster and dishes to share, served at the table', 1440, 1440, 'Piatti da condividere') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Restaurant &amp; bar</p>
        <h2 id="titolo-ristorante">Restaurant</h2>
        <p class="sottotitolo">Mediterranean flair, Asian touches and a menu made to be shared.</p>
        <p>Mediterranean roots meet tropical and Asian influences in a cuisine made to be shared: a gastronomic experience where atmosphere is part of the recipe.</p>
        <p>Local products, innovative culinary techniques and the distinctive Sanctuary taste, reflected in every plate and every moment. After dinner, an exotic bar for those who are not looking for realism, but magic.</p>
        <dl class="orari-blocco">
          <?php foreach ($sede['orari'] as $giorni => $ore): ?>
          <div><dt><?= e($giorni) ?></dt><dd><?= e($ore) ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <div class="azioni">
          <a class="bottone" href="?space=restaurant#book">Book a table</a>
          <a class="bottone bottone-linea" href="#book" aria-disabled="true" title="Menu PDF da inserire">View menu</a>
        </div>
      </div>
    </div>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/milano/milano-chef-olio-cucchiaio.webp', 'The chef pouring a green oil from a spoon', 1440, 1800, 'Chef con olio') ?>
      <?= foto('img/pagine/milano/milano-gamberi-rossi.webp', 'Red prawns in a copper pan', 1440, 1800, 'Gamberi rossi') ?>
      <?= foto('img/pagine/milano/milano-tataki-calice-vino.webp', 'Tataki with herbs and a glass of red wine', 1440, 1800, 'Tataki e vino') ?>
      <?= foto('img/pagine/milano/milano-sashimi-tagliere.webp', 'Sashimi on a wooden board with flowers', 1440, 1800, 'Sashimi') ?>
      <?= foto('img/pagine/milano/milano-sushi-foglia.webp', 'Sushi with salmon tartare on a banana leaf', 1440, 1800, 'Sushi') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="pool" aria-labelledby="titolo-piscina">
    <div class="spazio-griglia inversa">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/milano/milano-piscina-lettini-sera.webp', 'Sunbeds along the pool at dusk, among palm trees', 1920, 1920, 'Piscina al tramonto') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Garden &amp; Pool Area · Summer season</p>
        <h2 id="titolo-piscina">A city escape</h2>
        <p class="sottotitolo">Somewhere between a city escape and a summer ritual.</p>
        <p>Hidden within lush gardens, the Pool Area offers a rare escape from the rhythm of the city: sunbeds, shaded lounge spaces and an outdoor bar serving fresh juices, signature cocktails and an all-day à la carte menu.</p>
        <p>Here the day unfolds slowly between the pool, the garden and the sun.</p>
        <div class="azioni"><a class="bottone" href="?space=pool#book">Reserve a sunbed</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/milano/milano-bordo-piscina-cocktail.webp', 'Resting on the edge of the pool with a cocktail', 1440, 1440, 'Bordo piscina') ?>
      <?= foto('img/pagine/milano/milano-ombrellone-divani-piscina.webp', 'Sofas under a parasol by the water', 1440, 1800, 'Divani sotto l\'ombrellone') ?>
      <?= foto('img/pagine/milano/milano-piscina-lunga-nuotatrice.webp', 'The long pool between the trees, a swimmer in the water', 1440, 1800, 'Piscina lunga') ?>
      <?= foto('img/pagine/milano/milano-frutta-cocktail-piscina.webp', 'Fruit and cocktails shared in the pool', 1440, 1800, 'Frutta e cocktail') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="wellness" aria-labelledby="titolo-benessere">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/milano/milano-yoga-candele.webp', 'A yoga pose by candlelight', 1920, 1920, 'Yoga a lume di candela') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Yoga &amp; Pilates · Every week</p>
        <h2 id="titolo-benessere">The Sanctuary wellness</h2>
        <p class="sottotitolo">A world of wellness: classes and rituals to reset, recharge and reconnect.</p>
        <p>From Yoga to Pilates and Zenfit, our weekly classes create a quiet sanctuary for movement, breath and inner alignment.</p>
        <div class="azioni"><a class="bottone" href="?space=wellness#book">Ask for the weekly classes</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/milano/milano-pilates-tappetini.webp', 'A class lying on colourful mats', 1440, 1800, 'Lezione sui tappetini') ?>
      <?= foto('img/pagine/milano/milano-massaggio-trattamento.webp', 'A guided stretching treatment', 1440, 1800, 'Trattamento') ?>
      <?= foto('img/pagine/milano/milano-yoga-bianco-nero.webp', 'A backbend in black and white, by the window', 1440, 1800, 'Yoga in bianco e nero') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

<?php include 'partials/club.php'; ?>

<?php include 'partials/prenotazione-modulo.php'; ?>

<?php include 'partials/footer.php'; ?>
