<?php
/* ROMA, NUOVA VERSIONE (novembre 2026): la Roma di oggi, notturna e giapponese.
   Pagina alternativa a rome.php, che resta intatta. Non è collegata al menu
   e non va nei motori di ricerca finché non si decide quale tenere. */
$titolo = 'Rome';
$descrizione = 'The Sanctuary Rome, steps away from the Colosseum: Mediterranean restaurant, Kai sushi bar and Omakase, pool aperitif, Club Room, private karaoke, billiards, wellness and private events.';
$pagina = 'rome-nuova.php';
$con_hero = true;
$noindex = true;
require_once 'partials/funzioni.php';
$chiave_sede = 'roma';
$sede = $SEDI[$chiave_sede];
$sede['pagina'] = $pagina;   // il modulo invia a questa pagina
$sede['spazi'] = [
  'restaurant' => 'Restaurant',
  'kai'        => 'Kai · Sushi & Omakase',
  'pool'       => 'Pool Area · Aperitif',
  'brunch'     => 'Weekend Brunch',
  'club-room'  => 'Club Room',
  'karaoke'    => 'Karaoke room',
  'wellness'   => 'Yoga & Pilates',
  'event'      => 'Private event',
];

/* Calendario wellness (dal Linktree di Roma, novembre 2026). In WordPress: plugin Eventi. */
$WELLNESS = [
  ['2026-11-07', '09:30', 'Embodied Flow'],
  ['2026-11-07', '11:00', 'Pilates Glow & Flow'],
  ['2026-11-08', '09:30', 'Pilates'],
  ['2026-11-08', '11:00', 'Embodied Vinyasa'],
  ['2026-11-14', '09:30', 'Pilates'],
  ['2026-11-14', '11:00', 'Semplicemente Yoga'],
  ['2026-11-15', '09:30', 'Embodied Flow'],
  ['2026-11-15', '10:30', 'Viaggio Sonoro'],
  ['2026-11-21', '09:30', 'Yoga e Suono'],
  ['2026-11-21', '11:00', 'Pilates Flow & Glow'],
  ['2026-11-22', '09:30', 'Concerto Consapevole & meditation'],
  ['2026-11-22', '11:00', 'Contact Yoga'],
  ['2026-11-28', '09:30', 'Floating Soundbath'],
  ['2026-11-29', '09:30', 'Pilates'],
  ['2026-11-29', '11:00', 'Yin & Yang'],
];

require 'partials/prenotazione-invio.php';

include 'partials/header.php';
$R = 'img/pagine/roma-nuova/';
?>

  <section class="hero hero-centro copre" style="--velo: 1.2">
    <?= video_hero('', $R . 'roma-giardino-folla-notte.webp', '', $R . 'roma-parete-luci-simbolo.webp', 'The garden at night, crowded under the palm trees and the lanterns') ?>
    <div class="hero-testo">
      <p class="kicker">The Sanctuary · Monti</p>
      <?= firma('Rome', 'Between sound and taste.', 'h1', 'firma-hero', true) ?>
      <div class="azioni">
        <a class="bottone bottone-chiaro" href="#book">Book a table</a>
        <a class="bottone bottone-chiaro-linea" href="#restaurant">Discover</a>
      </div>
    </div>
  </section>

  <nav class="sezioni-nav" aria-label="Sections of the page">
    <ul>
      <li><a href="#restaurant">Restaurant</a></li>
      <li><a href="#kai">Kai</a></li>
      <li><a href="#pool">Pool Area</a></li>
      <li><a href="#brunch">Brunch</a></li>
      <li><a href="#club-room">Club Room</a></li>
      <li><a href="#karaoke">Karaoke</a></li>
      <li><a href="#billiards">Billiards</a></li>
      <li><a href="#wellness">Wellness</a></li>
      <li><a href="#venue">Private events</a></li>
      <li><a href="#book">Contact &amp; booking</a></li>
    </ul>
  </nav>

  <section class="intro contenitore" data-appare>
    <p class="kicker">The Sanctuary Rome</p>
    <h2>Between <em>sound</em> and <em>taste</em>, steps away from the Colosseum.</h2>
    <p class="testo-grande">A hidden garden in the Monti district. The evening begins by the pool and moves on to a Mediterranean table, a Japanese counter, a room made for listening and a secret karaoke box: one place, many ways to spend the night.</p>
  </section>

  <!-- RISTORANTE -->
  <section class="spazio contenitore" id="restaurant" aria-labelledby="titolo-ristorante">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto($R . 'roma-tavolo-tondo-lampada.webp', 'A round table lit by a small lamp, in front of a glowing wall', 1280, 1920, 'Tavolo tondo') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Restaurant · Mediterranean cuisine</p>
        <h2 id="titolo-ristorante">Restaurant</h2>
        <p class="sottotitolo">Our kitchen speaks Mediterranean: honest ingredients, the rhythm of the seasons, instinctive and recognisable cooking.</p>
        <p>Whole fish, generous cuts, seasonal vegetables, pasta and the dishes of our own culture, retold in the Sanctuary spirit.</p>
        <p>A menu made for the middle of the table: to share, taste and discover together.</p>
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
      <?= foto($R . 'roma-sala-parete-luci.webp', 'The dining room in front of the wall of round lights', 1920, 1280, 'Sala con parete di luci') ?>
      <?= foto($R . 'roma-chef-impiatta-lampada.webp', 'The chef plating a dish by lamplight, among the plants', 1277, 1920, 'Chef che impiatta') ?>
      <?= foto($R . 'roma-fritti-ciotola.webp', 'A bowl of crisp fried bites and salads on the table', 1280, 1920, 'Fritti') ?>
      <?= foto($R . 'roma-cameriere-giardino-piatti.webp', 'A waiter carrying plates through the garden', 1277, 1920, 'Cameriere in giardino') ?>
      <?= foto($R . 'roma-tavoli-lume-lampade.webp', 'Guests at small tables by lamplight', 1279, 1920, 'Tavoli a lume di lampada') ?>
    </div>
    <div class="contenitore galleria-comandi">
      <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
      <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
    </div>
  </div>

  <!-- KAI -->
  <section class="fascia scura" id="kai" aria-labelledby="titolo-kai">
    <div class="contenitore">
      <div class="spazio-griglia inversa">
        <div class="spazio-foto" data-appare><?= foto($R . 'kai-tavolata-soffitto-luce.webp', 'A long table set with chopsticks under a glowing ceiling', 1280, 1920, 'Tavolata di Kai') ?></div>
        <div class="spazio-testo" data-appare>
          <p class="kicker">Sushi bar &amp; Omakase</p>
          <h2 id="titolo-kai" class="titolo-kai"><img class="logo-kai" src="img/logo/logo-kai.svg" width="1098" height="427" alt="Kai"></h2>
          <p class="sottotitolo">A sushi bar built around a long counter, with a menu all its own.</p>
          <p>Once a month, a handful of seats and an Omakase experience: the chef leads the way, following the catch, the season and the finest cuts.</p>
          <p>The most intimate corner of the Sanctuary, essential and devoted to Japan.</p>
          <div class="azioni"><a class="bottone" href="?space=kai#book">Book at Kai</a></div>
        </div>
      </div>
    </div>
    <div class="galleria sezione" data-galleria data-appare>
      <div class="galleria-binario">
        <?= foto($R . 'kai-sushiman-bancone.webp', 'The sushi chef rolling maki at the counter', 1281, 1920, 'Sushiman al bancone') ?>
        <?= foto($R . 'kai-tavolo-rosso-bacchette.webp', 'Glasses and chopsticks on a table bathed in red light', 1280, 1920, 'Tavolo rosso') ?>
        <?= foto($R . 'roma-insegna-suono-sapore.webp', 'A light box with Japanese characters meaning “between sound and taste”', 1280, 1920, 'Insegna giapponese') ?>
        <?= foto($R . 'kai-insegna-luce.webp', 'The illuminated Kai sign', 1920, 1078, 'Insegna Kai') ?>
      </div>
      <div class="contenitore galleria-comandi">
        <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
        <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
      </div>
    </div>
  </section>

  <!-- PISCINA -->
  <section class="spazio contenitore" id="pool" aria-labelledby="titolo-piscina">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/roma/roma-serra-piscina-tende.webp', 'The pool under the greenhouse, among palm trees and thatched parasols', 1920, 1920, 'Piscina nella serra') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Pool Area · Thursday to Sunday, from 6 pm</p>
        <h2 id="titolo-piscina">Sunset by the pool</h2>
        <p class="sottotitolo">From Thursday to Sunday, from 6 pm, a generous buffet, prepared down to the last detail, opens the evening.</p>
        <p>Come just for an aperitif: a drink, something to taste, friends to meet, and the Sanctuary to discover before dinner and the night.</p>
        <p>A sunset ritual around the pool.</p>
        <div class="azioni"><a class="bottone" href="?space=pool#book">Reserve</a></div>
      </div>
    </div>
  </section>

  <!-- BRUNCH (testo provvisorio: mancano orari e dettagli) -->
  <section class="spazio contenitore" id="brunch" aria-labelledby="titolo-brunch">
    <div class="spazio-griglia inversa">
      <div class="spazio-foto" data-appare><?= foto($R . 'roma-brunch-giardino.webp', 'Brunch in the garden, tables full under the palm trees', 1920, 1078, 'Brunch in giardino') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Saturday &amp; Sunday</p>
        <h2 id="titolo-brunch">Weekend Brunch</h2>
        <p class="sottotitolo">Slow weekend mornings in the garden, among palm trees and sunlight.</p>
        <p>A table to share with friends and family, at the pace of a Sunday.</p>
        <div class="azioni"><a class="bottone" href="?space=brunch#book">Book the brunch</a></div>
      </div>
    </div>
  </section>

  <!-- CLUB ROOM, KARAOKE, BILIARDO -->
  <section class="fascia scura" id="club-room" aria-labelledby="titolo-club-room">
    <div class="contenitore">
      <div class="spazio-griglia">
        <div class="spazio-foto" data-appare><?= foto($R . 'club-room-salotto-casse.webp', 'The Club Room lounge with its wooden speakers and glowing panels', 1280, 1280, 'Club Room') ?></div>
        <div class="spazio-testo" data-appare>
          <p class="kicker">Club Room · Sound by Audio Factory</p>
          <h2 id="titolo-club-room">Club Room</h2>
          <p class="sottotitolo">A space to live the night through music: an intimate, immersive lounge for meeting, listening and letting the sound carry you.</p>
          <p>At its heart, a bespoke high-fidelity sound system designed by Audio Factory, turning every set into a deep, enveloping, almost physical experience.</p>
          <p>Here music is back at the centre, to be truly listened to, together. Emerging and international artists, new connections and nights that carry on in a more intimate dimension.</p>
          <div class="azioni"><a class="bottone" href="?space=club-room#book">Book a table</a></div>
        </div>
      </div>
    </div>

    <div class="galleria sezione" data-galleria data-appare>
      <div class="galleria-binario">
        <?= foto($R . 'club-room-folla.webp', 'The Club Room full of people in front of the glowing panels', 1920, 1280, 'Club Room piena') ?>
        <?= foto($R . 'club-room-dj-console.webp', 'A DJ at the console, guests dancing behind her', 1280, 1920, 'DJ alla console') ?>
        <?= foto($R . 'club-room-dj-mixer-mani.webp', 'Hands on the mixer and the turntables', 1280, 1920, 'Mixer') ?>
        <?= foto($R . 'club-room-casse-parete-luce.webp', 'The empty Club Room with its speakers and light ceiling', 1920, 1282, 'Club Room vuota') ?>
        <?= foto($R . 'club-room-dj-sala.webp', 'A DJ playing for the room', 1278, 1920, 'DJ in sala') ?>
      </div>
      <div class="contenitore galleria-comandi">
        <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
        <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
      </div>
    </div>

    <div class="contenitore">
      <div class="sezione" id="music" data-appare>
        <div class="sezione-testa affiancata">
          <h2>This week in Rome</h2>
          <p>Emerging and international artists in the Club Room, from the warm nuances of vinyl to the hypnotic rhythms of electronic music.</p>
        </div>
        <?php $serate = $PROGRAMMA[$chiave_sede] ?? []; if ($serate): ?>
        <ul class="programma">
          <?php foreach ($serate as $serata): $d = strtotime($serata['data']); ?>
          <li>
            <a href="evento.php?e=<?= e($serata['slug']) ?>">
              <time datetime="<?= e($serata['data']) ?>"><span><?= e($serata['giorno']) ?></span> <?= date('d.m', $d) ?></time>
              <strong><?= e($serata['titolo']) ?></strong>
              <span class="programma-artisti"><?= e($serata['artisti']) ?></span>
              <span class="programma-ora"><?= e($serata['ora']) ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>

      <div class="spazio" id="karaoke" aria-labelledby="titolo-karaoke">
        <div class="spazio-griglia inversa">
          <div class="spazio-foto" data-appare><?= foto($R . 'karaoke-schermo-calice.webp', 'Singing in front of the karaoke screen, a glass raised high', 1281, 1920, 'Karaoke') ?></div>
          <div class="spazio-testo" data-appare>
            <p class="kicker">Private karaoke room</p>
            <h2 id="titolo-karaoke">Karaoke</h2>
            <p class="sottotitolo">A secret room, hidden from the rest of the world. The door closes, the lights dim, the microphone comes on.</p>
            <p>A private space, entirely yours.</p>
            <p>Inspired by the karaoke boxes of Tokyo, it is a small hideaway devoted to music and sharing: a place to feel free, lose track of time and turn a night among friends into a memory to take home.</p>
            <div class="azioni"><a class="bottone" href="?space=karaoke#book">Reserve the room</a></div>
          </div>
        </div>
      </div>

      <div class="due-foto" data-appare>
        <?= foto($R . 'karaoke-amiche-microfono.webp', 'Two friends singing into the same microphone', 1281, 1920, 'Amiche al microfono') ?>
        <?= foto($R . 'biliardo-ragazza-stecca.webp', 'A girl in sunglasses breaking at the billiard table', 1280, 1920, 'Biliardo') ?>
      </div>

      <div class="spazio" id="billiards" aria-labelledby="titolo-biliardo">
        <div class="spazio-griglia">
          <div class="spazio-foto" data-appare><?= foto($R . 'biliardo-tavolo-luce.webp', 'Balls on the green cloth of the billiard table', 1280, 1920, 'Tavolo da biliardo') ?></div>
          <div class="spazio-testo" data-appare>
            <p class="kicker">Billiards room</p>
            <h2 id="titolo-biliardo">Billiards</h2>
            <p class="sottotitolo">A place to be together, have a drink, talk, play and spend the evening without hurry.</p>
            <p>At its centre stands a large billiard table, bringing back the simple conviviality of a living room at home.</p>
            <p>A warm, intimate and familiar room, where you feel at home and a game is just an excuse to stay together a little longer.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WELLNESS (testo provvisorio) -->
  <section class="spazio contenitore" id="wellness" aria-labelledby="titolo-benessere">
    <div class="spazio-griglia">
      <div class="spazio-foto" data-appare><?= foto('img/pagine/roma/roma-meditazione-pergolato.webp', 'A meditation class under the pergola, on woven rugs', 1440, 1800, 'Meditazione sotto il pergolato') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">Yoga, Pilates &amp; Sound · Weekend mornings</p>
        <h2 id="titolo-benessere">Wellness</h2>
        <p class="sottotitolo">At the Sanctuary, the weekend begins with the body and the breath.</p>
        <p>Yoga, pilates, sound baths and mindful concerts, led by our teachers and open to every level.</p>
        <div class="azioni"><a class="bottone" href="?space=wellness#book">Book a class</a></div>
      </div>
    </div>
    <div class="sezione" data-appare>
      <div class="sezione-testa affiancata">
        <h2>Wellness calendar</h2>
        <p>Classes on Saturday and Sunday morning. Places are limited: book your spot.</p>
      </div>
      <ul class="programma programma-chiaro">
        <?php foreach ($WELLNESS as [$data, $ora, $nome]): $d = strtotime($data); ?>
        <li>
          <a href="?space=wellness#book">
            <time datetime="<?= e($data . 'T' . $ora) ?>"><span><?= date('D', $d) ?></span> <?= date('d.m', $d) ?></time>
            <strong><?= e($nome) ?></strong>
            <span class="programma-artisti">The Sanctuary Rome</span>
            <span class="programma-ora"><?= e($ora) ?></span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- EVENTI PRIVATI -->
  <section class="sezione" id="venue" aria-labelledby="titolo-venue">
    <div class="contenitore">
      <div class="sezione-testa affiancata" data-appare>
        <div>
          <p class="kicker">Venue hire &amp; private events</p>
          <h2 id="titolo-venue">Corporate &amp; private events</h2>
        </div>
        <p>Dinners, celebrations, presentations, corporate parties and shoots: each room has its own character and can be reserved exclusively for your guests.</p>
      </div>
    </div>
    <div class="galleria" data-galleria data-appare>
      <div class="galleria-binario">
        <figure class="tema"><?= foto($R . 'roma-tavolata-candele.webp', 'A long table set for a private dinner, lit by candles', 1140, 1140, 'Tavolata') ?><figcaption><h3>Private dinners</h3><p>Long tables, candlelight and a menu designed with our chefs, for evenings to remember.</p></figcaption></figure>
        <figure class="tema"><?= foto($R . 'kai-tavolata-soffitto-luce.webp', 'The Kai room with its long table under the glowing ceiling', 1280, 1920, 'Sala di Kai') ?><figcaption><h3>Kai</h3><p>The Japanese room, under its ceiling of light, for intimate dinners and Omakase evenings.</p></figcaption></figure>
        <figure class="tema"><?= foto($R . 'club-room-casse-parete-luce.webp', 'The Club Room with its speakers', 1920, 1282, 'Club Room') ?><figcaption><h3>Club Room</h3><p>Bespoke sound and an intimate setting, for parties, listening sessions and DJ sets.</p></figcaption></figure>
        <figure class="tema"><?= foto($R . 'karaoke-schermo-calice.webp', 'The private karaoke room', 1281, 1920, 'Karaoke') ?><figcaption><h3>Karaoke room</h3><p>A secret room, all yours, for birthdays and nights among friends.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/home/roma-serra-piscina-ombrelloni.webp', 'The Green House with the pool and thatched parasols', 1440, 1800, 'Green House e piscina') ?><figcaption><h3>Green House &amp; Pool Area</h3><p>The wooden terrace around the pool, for receptions, sunset aperitifs and brand activations.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/pagine/roma/roma-giardino-divani-legno.webp', 'Wooden sofas in the tropical garden', 1440, 1440, 'Giardino') ?><figcaption><h3>Garden</h3><p>Palm trees and wooden sofas, a warm, dreamlike setting for large parties.</p></figcaption></figure>
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

  <!-- MEMBERSHIP -->
  <section class="spazio contenitore" id="membership-roma" aria-labelledby="titolo-membership">
    <div class="spazio-griglia inversa">
      <div class="spazio-foto" data-appare><?= foto($R . 'roma-membership-amici-calici.webp', 'Three friends talking with a glass of wine', 1920, 1078, 'Membership') ?></div>
      <div class="spazio-testo" data-appare>
        <p class="kicker">The Sanctuary Membership</p>
        <h2 id="titolo-membership">Always at home</h2>
        <p class="sottotitolo">One membership, four sanctuaries: Rome, Milan, Porto Cervo and the Itria Valley.</p>
        <div class="azioni"><a class="bottone" href="<?= e($SITO['membership']) ?>" rel="noopener" target="_blank">Apply now ↗</a></div>
      </div>
    </div>
  </section>

<?php include 'partials/prenotazione-modulo.php'; ?>

<?php include 'partials/footer.php'; ?>
