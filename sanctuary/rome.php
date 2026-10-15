<?php
$titolo = 'Rome';
$descrizione = 'The Sanctuary Rome: a hidden garden steps away from the Colosseum, in the Monti district. Restaurant, garden and pool area, yoga and massage, club and private events.';
$pagina = 'rome.php';
$con_hero = true;
require_once 'partials/funzioni.php';
$chiave_sede = 'roma';
$sede = $SEDI[$chiave_sede];
$club_foto = 'img/pagine/roma/roma-club-folla-luci.webp';
$club_alt = 'The Club crowded under the lights, hands raised';

require 'partials/prenotazione-invio.php';

include 'partials/header.php';
?>

  <section class="hero hero-centro copre" style="--velo: 1.2">
    <?= video_hero('', 'img/pagine/roma/roma-colosseo-palme.webp', 'img/video/famiglia-sanctuary-verticale.mp4', 'img/video/famiglia-sanctuary-verticale-attesa.webp', 'The Colosseum seen through palm leaves, a few steps from The Sanctuary Rome') ?>
    <div class="hero-testo">
      <p class="kicker">The Sanctuary · Monti</p>
      <?= firma('Rome', 'A hidden garden steps away from the Colosseum.', 'h1', 'firma-hero', true) ?>
      <div class="azioni">
        <a class="bottone bottone-chiaro" href="#book">Book a table</a>
        <a class="bottone bottone-chiaro-linea" href="#restaurant">Discover</a>
      </div>
    </div>
  </section>

  <nav class="sezioni-nav" aria-label="Sections of the page">
    <ul>
      <li><a href="#restaurant">Restaurant</a></li>
      <li><a href="#pool">Garden &amp; Pool</a></li>
      <li><a href="#wellness">Yoga &amp; Massage</a></li>
      <li><a href="#club">Club</a></li>
      <li><a href="#music">Music program</a></li>
      <li><a href="#venue">Private events</a></li>
      <li><a href="#book">Contact &amp; booking</a></li>
    </ul>
  </nav>

  <section class="intro contenitore" data-appare>
    <p class="kicker">The Sanctuary Rome</p>
    <h2>Located in the <em>heart of Rome</em>, just steps away from the Colosseum.</h2>
    <p class="testo-grande">In the historic area of Colle Oppio and the Baths of Titus and Trajan, nestled in the Monti district, famous for its art galleries, wine bars, artisan shops and gourmet restaurants: the go-to destination for a young, trend-savvy crowd.</p>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/roma/roma-sala-legno-lanterne.webp', 'The dining room with wooden chairs and woven lamps', 1440, 1800, 'Sala con lanterne') ?>
      <?= foto('img/pagine/roma/roma-salotto-bambu-giardino.webp', 'A lounge under bamboo and thatch, among tropical plants', 1440, 1800, 'Salotto di bambù') ?>
      <?= foto('img/pagine/roma/roma-arco-moresco-piante.webp', 'A carved Moorish wall among the plants of the garden', 1920, 1920, 'Arco moresco') ?>
      <?= foto('img/pagine/roma/roma-giardino-tavoli-palme.webp', 'Tables in the garden under the palm trees', 1440, 1800, 'Tavoli in giardino') ?>
      <?= foto('img/pagine/roma/roma-porta-antica-cuscini.webp', 'An antique door and cushions in a corner of the garden', 1440, 1800, 'Porta antica') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="restaurant" aria-labelledby="titolo-ristorante">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/roma/roma-ciotole-tavolo-luce.webp', 'Bowls on a table in soft, warm light', 1440, 1440, 'Ciotole sul tavolo') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Restaurant &amp; bar</p>
        <h2 id="titolo-ristorante">Restaurant</h2>
        <p class="sottotitolo">Rooted in Mediterranean tradition and local ingredients, every dish evolves into a sensory journey spanning distant cultures.</p>
        <p>A culinary exploration that harmoniously blends tropical and Asian influences, creating a unique gastronomic ritual.</p>
        <p>Every ingredient is carefully selected, every flavor evokes faraway lands, creating an experience that transcends borders and celebrates the fusion of different cultures in a boundless cuisine.</p>
        <dl class="orari-blocco">
          <?php foreach ($sede['orari_ristorante'] as $giorni => $ore): ?>
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
      <?= foto('img/pagine/roma/roma-chef-impiatta-piastrelle.webp', 'The chef plating a dish on green tiles', 1440, 1800, 'Chef che impiatta') ?>
      <?= foto('img/pagine/roma/roma-piatto-fiori-frutta.webp', 'A plate with flowers and fruit', 1440, 1800, 'Piatto con fiori') ?>
      <?= foto('img/pagine/roma/roma-erbe-pane-tavola.webp', 'Fresh herbs and bread on the table', 1440, 1800, 'Erbe e pane') ?>
      <?= foto('img/pagine/roma/roma-carne-cruda-mani.webp', 'Hands preparing raw meat on a wooden board', 1440, 1800, 'Carne cruda') ?>
      <?= foto('img/pagine/roma/roma-lamponi-ciotola.webp', 'A bowl of raspberries in the sun', 1440, 1800, 'Lamponi') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="pool" aria-labelledby="titolo-piscina">
    <div class="spazio-griglia inversa">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/roma/roma-serra-piscina-tende.webp', 'The pool under the greenhouse, among palm trees and thatched parasols', 1920, 1920, 'Piscina nella serra') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Garden &amp; Pool Area · Summer &amp; winter season</p>
        <h2 id="titolo-piscina">Escape to serenity</h2>
        <p class="sottotitolo">Our haven offers swimming pool sunbeds, healthy lunches and refreshing cocktails.</p>
        <p>Boost productivity with smart working spaces, or unwind with healing massages and yoga.</p>
        <div class="azioni"><a class="bottone" href="?space=pool#book">Reserve a sunbed</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/roma/roma-piscina-lettini-serra.webp', 'Sunbeds along the pool under the greenhouse', 1440, 1800, 'Lettini in piscina') ?>
      <?= foto('img/pagine/roma/roma-amiche-bordo-piscina.webp', 'Friends talking at the edge of the pool', 1440, 1800, 'Amiche a bordo piscina') ?>
      <?= foto('img/pagine/roma/roma-frutta-bordo-piscina.webp', 'Fresh fruit served by the pool', 1440, 1800, 'Frutta a bordo piscina') ?>
      <?= foto('img/pagine/roma/roma-piscina-sott-acqua.webp', 'Floating in the water of the pool', 1440, 1800, 'In acqua') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <section class="spazio contenitore" id="wellness" aria-labelledby="titolo-benessere">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/roma/roma-meditazione-pergolato.webp', 'A meditation class under the pergola, on woven rugs', 1440, 1800, 'Meditazione sotto il pergolato') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Yoga &amp; Massage</p>
        <h2 id="titolo-benessere">Where wellness begins</h2>
        <p class="sottotitolo">Wellness is a fundamental part of our project, with dedicated spaces where mind, body and soul come together in perfect harmony.</p>
        <p>From yoga to massages, from relaxation areas to the spa, every space is a haven of peace and serenity, where every detail nourishes both body and mind, completing the essence of a total experience.</p>
        <div class="azioni"><a class="bottone" href="?space=wellness#book">Book a treatment</a></div>
      </div>
    </div>
  </section>

  <div class="galleria" data-galleria data-appare>
    <div class="galleria-binario">
      <?= foto('img/pagine/roma/roma-massaggio-giardino.webp', 'A massage in the garden, among the plants', 1440, 1800, 'Massaggio in giardino') ?>
      <?= foto('img/pagine/roma/roma-rituale-salvia.webp', 'A ritual with burning sage', 1440, 1800, 'Rituale con la salvia') ?>
      <?= foto('img/pagine/roma/roma-massaggio-schiena.webp', 'A back massage', 1440, 1800, 'Massaggio alla schiena') ?>
      <?= foto('img/pagine/roma/roma-trattamento-viso.webp', 'A face treatment in the shade', 1440, 1800, 'Trattamento viso') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

<?php include 'partials/club.php'; ?>

  <section class="sezione" id="venue" aria-labelledby="titolo-venue">
    <div class="contenitore">
      <div class="sezione-testa affiancata" data-appare>
        <div>
          <p class="kicker">Venue hire &amp; private events</p>
          <h2 id="titolo-venue">The spaces</h2>
        </div>
        <p>Rooms and spaces of different sizes and configurations, for private events, weddings, conferences, team building, corporate parties, birthdays, film and photo shoots. Each space has its own bar, which can be made exclusive for your guests.</p>
      </div>
    </div>
    <div class="galleria" data-galleria data-appare>
      <div class="galleria-binario">
        <figure class="tema"><?= foto('img/home/roma-serra-piscina-ombrelloni.webp', 'The Green House with the pool and thatched parasols', 1440, 1800, 'Green House e piscina') ?><figcaption><h3>Green House &amp; Pool Area</h3><p>A wooden terrace surrounding the pools, an iconic Sanctuary location: perfect for private events, pre- and after-wedding parties, sunset aperitifs and brand activations.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/pagine/roma/roma-giardino-divani-legno.webp', 'Wooden sofas in the tropical garden', 1440, 1440, 'Giardino') ?><figcaption><h3>Garden</h3><p>A tropical garden where majestic palm trees frame wooden sofas with a free-spirited, authentic style: a warm, dreamlike atmosphere.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/pagine/roma/roma-veranda-coperta.webp', 'The covered Veranda with tables and sofas', 1440, 1440, 'Veranda') ?><figcaption><h3>Veranda</h3><p>A covered, welcoming space with flexible furnishings, for meetings, presentations and exclusive receptions, even in bad weather.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/pagine/roma/roma-club-palco.webp', 'The Club room with its stage', 1440, 1440, 'Club') ?><figcaption><h3>Club</h3><p>Unique sound atmospheres created by our DJs and producers, with a sound that has become a recognizable identity.</p></figcaption></figure>
      </div>
      <div class="contenitore galleria-comandi">
        <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
        <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
      </div>
    </div>
    <div class="contenitore">
      <div class="azioni" data-appare>
        <a class="bottone" href="?space=event#book">Send a request</a>
        <a class="bottone bottone-linea" href="private-events.php">All private events</a>
      </div>
    </div>
  </section>

<?php include 'partials/prenotazione-modulo.php'; ?>

<?php include 'partials/footer.php'; ?>
