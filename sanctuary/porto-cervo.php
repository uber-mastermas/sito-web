<?php
$titolo = 'Porto Cervo';
$descrizione = "The elegance of Sardinia's coastline meets the vibrant pulse of an exclusive club destination: The Sanctuary Porto Cervo, opening in July 2027.";
$pagina = 'porto-cervo.php';
$con_hero = true;
require_once 'partials/funzioni.php';
$chiave_sede = 'porto-cervo';
$sede = $SEDI[$chiave_sede];

require 'partials/prenotazione-invio.php';

include 'partials/header.php';
?>

  <section class="hero copre" style="--velo: 1.15">
    <?= video_hero('img/video/famiglia-sanctuary-orizzontale.mp4', 'img/pagine/porto-cervo/porto-cervo-piscina-notte.webp', 'img/video/porto-cervo-verticale.mp4', 'img/video/porto-cervo-verticale-attesa.webp', 'Night by the pool at The Sanctuary Porto Cervo') ?>
    <div class="hero-testo">
      <p class="kicker">The Sanctuary · Sardinia</p>
      <h1>Porto Cervo</h1>
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
      <div class="spazio-foto" data-appare><?= foto('img/pagine/porto-cervo/porto-cervo-bar-pergolato.webp', 'The bar under the wooden pergola, among the plants', 1440, 1800, 'Bar sotto il pergolato') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Summer season 2027 · Opening in July</p>
        <h2 id="titolo-estate">The ultimate sound experience</h2>
        <p class="sottotitolo">The elegance of Sardinia's coastline meets the vibrant pulse of an exclusive club destination.</p>
        <p>The Sanctuary will present a lineup of world-class DJs and live performers that will ignite the night and make Sardinia dance like never before. Every night, the music will take over.</p>
        <div class="azioni"><a class="bottone" href="#book">Ask for information</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" id="gallery" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/porto-cervo/porto-cervo-folla-palme.webp', 'The crowd dancing under the palm trees at night', 730, 1100, 'Folla sotto le palme') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-sala-bianca-lanterne.webp', 'A white room with arches, lanterns and a long low table', 1440, 1440, 'Sala bianca con lanterne') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-consolle-luci-rosse.webp', 'The DJ booth under red lights, the crowd in front', 730, 1100, 'Consolle con luci rosse') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-piastrelle-archi.webp', 'A wall of coloured tiles shaped as arches', 1440, 1800, 'Piastrelle ad archi') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-amiche-ballano.webp', 'Two friends dancing, in black and white', 730, 1100, 'Amiche che ballano') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-maschera-corna.webp', 'A carved Sardinian mask with long horns', 1440, 1800, 'Maschera sarda') ?>
      <?= foto('img/pagine/porto-cervo/porto-cervo-consolle-fuoco.webp', 'Flames over the DJ booth', 730, 1100, 'Consolle e fuoco') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

<?php include 'partials/prenotazione-modulo.php'; ?>

<?php include 'partials/footer.php'; ?>
