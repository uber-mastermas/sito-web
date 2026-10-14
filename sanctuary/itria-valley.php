<?php
$titolo = 'Itria Valley';
$descrizione = 'The Sanctuary Itria Valley, Apulia: curated DJ sets and live performances under the starry sea sky. Opening in July 2027.';
$pagina = 'itria-valley.php';
$con_hero = true;
require_once 'partials/funzioni.php';
$chiave_sede = 'itria';
$sede = $SEDI[$chiave_sede];

require 'partials/prenotazione-invio.php';

include 'partials/header.php';
?>

  <section class="hero copre" style="--velo: 1.1">
    <?= video_hero('', 'img/pagine/itria/itria-tenda-tramonto-orizzontale.webp', 'img/video/itria-verticale.mp4', 'img/video/itria-verticale-attesa.webp', 'A wooden tent with a hanging lantern against the sunset sky over the sea') ?>
    <div class="hero-testo">
      <p class="kicker">The Sanctuary · Apulia</p>
      <h1>Itria Valley</h1>
      <p class="hero-sotto">Summer season 2027 · Opening in July</p>
      <div class="azioni">
        <a class="bottone bottone-chiaro" href="#book">Stay in touch</a>
        <a class="bottone bottone-chiaro-linea" href="#summer">Discover</a>
      </div>
    </div>
  </section>

  <nav class="sezioni-nav" aria-label="Sections of the page">
    <ul>
      <li><a href="#summer">Summer 2027</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#book">Contact</a></li>
    </ul>
  </nav>

  <section class="spazio contenitore" id="summer" aria-labelledby="titolo-estate">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/itria/itria-cupola-verticale.webp', 'A dome of woven reeds lit at dusk on the beach', 1280, 1920, 'Cupola di giunchi') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Summer season 2027 · Opening in July</p>
        <h2 id="titolo-estate">Feel the rhythm of the night</h2>
        <p class="sottotitolo">Music under the starry sea sky, once again in summer 2027.</p>
        <p>Feel the rhythm of the night pulse through the heart of The Sanctuary. Our curated DJ sets and live performances will blend sound and soul, inviting you to lose yourself in the music under the starry sea sky once again in Summer 2027.</p>
        <div class="azioni"><a class="bottone" href="#book">Ask for information</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" id="gallery" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/itria/itria-cupola-giunchi-notte.webp', 'The dome of woven reeds lit at night', 1920, 1920, 'Cupola di notte') ?>
      <?= foto('img/home/itria-performer-fuoco.webp', 'A performer with fire torches on the beach at sunset', 1440, 1800, 'Performer con il fuoco') ?>
      <?= foto('img/pagine/itria/itria-trullo-cielo.webp', 'The cone of a trullo against the sky', 730, 1100, 'Trullo') ?>
      <?= foto('img/pagine/itria/itria-piatto-fumo-tramonto.webp', 'A smoking dish served on the beach at sunset', 730, 1100, 'Piatto al tramonto') ?>
      <?= foto('img/pagine/itria/itria-cupola-giunchi-dentro.webp', 'Looking up inside the dome of woven reeds', 730, 1100, 'Dentro la cupola') ?>
      <?= foto('img/home/itria-tenda-lanterna-tramonto.webp', 'A wooden tent with a lantern at sunset', 1440, 1800, 'Tenda al tramonto') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

<?php include 'partials/prenotazione-modulo.php'; ?>

<?php include 'partials/footer.php'; ?>
