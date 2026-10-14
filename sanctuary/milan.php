<?php
$titolo = 'Milan';
$descrizione = 'The Sanctuary Milan, Porta Genova: an industrial space reimagined as a living sanctuary. Restaurant, pool area, yoga and pilates, club and private events.';
$pagina = 'milan.php';
$con_hero = true;
require_once 'partials/funzioni.php';
$sede = $SEDI['milano'];

/* ---------- Invio del modulo di prenotazione ----------
   Funziona sul server. Le richieste di eventi privati vanno all'indirizzo eventi,
   tutte le altre all'indirizzo prenotazioni (vedi partials/config.php). */
$esito = null; $errore = false;
$valori = ['nome' => '', 'email' => '', 'telefono' => '', 'data' => '', 'persone' => '', 'spazio' => '', 'messaggio' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($valori as $k => $_) { $valori[$k] = trim((string)($_POST[$k] ?? '')); }
  $trappola = trim((string)($_POST['sito'] ?? ''));          // campo nascosto contro lo spam
  $consenso = isset($_POST['consenso']);
  $spazio_ok = isset($sede['spazi'][$valori['spazio']]);

  if ($trappola !== '') {
    $esito = 'Thank you, your request has been sent.';         // lo spam riceve un finto ok
  } elseif ($valori['nome'] === '' || !filter_var($valori['email'], FILTER_VALIDATE_EMAIL) || !$spazio_ok || !$consenso) {
    $esito = 'Please check the form: name, a valid email, the space and your consent are required.';
    $errore = true;
  } else {
    $a = $valori['spazio'] === 'event' ? $sede['email_eventi'] : $sede['email_prenotazioni'];
    $nome = str_replace(["\r", "\n"], ' ', $valori['nome']);
    $oggetto = 'Booking request · ' . $sede['spazi'][$valori['spazio']] . ' · ' . $nome;
    $corpo = "Location: The Sanctuary {$sede['nome']}\n"
           . "Space: {$sede['spazi'][$valori['spazio']]}\n"
           . "Name: {$nome}\nEmail: {$valori['email']}\nPhone: {$valori['telefono']}\n"
           . "Date: {$valori['data']}\nGuests: {$valori['persone']}\n\nMessage:\n{$valori['messaggio']}\n";
    if ($a !== '' && invia_email($a, $oggetto, $corpo, $valori['email'])) {
      $esito = 'Thank you, your request has been sent. Our staff will contact you to confirm.';
      $valori = array_map(function () { return ''; }, $valori);
    } else {
      $esito = 'We could not send your request. Please try again later, or call us.';
      $errore = true;
    }
  }
}
if ($valori['spazio'] === '' && isset($_GET['space'], $sede['spazi'][$_GET['space']])) { $valori['spazio'] = $_GET['space']; }

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

  <section class="fascia scura" id="club" aria-labelledby="titolo-club">
    <div class="contenitore">
      <div class="spazio-griglia inversa">
        <div class="spazio-foto" data-appare><?= foto('img/pagine/milano/milano-club-luci-rosse.webp', 'The Club under red lights, the crowd facing the stage', 1920, 1920, 'Club con luci rosse') ?></div>
        <div class="spazio-testo" data-appare>
          <p class="kicker">Club · Thursday to Sunday</p>
          <h2 id="titolo-club">Internationally renowned artists, who meet in one magical place.</h2>
          <p>The Sanctuary Music is a mission that aims to reveal the confluence of various cultural traditions, stretching the boundaries of the music field. The Sanctuary Sound is evidence of just how music is the most beautiful language in the world.</p>
          <div class="azioni"><a class="bottone" href="?space=club#book">Book a table</a></div>
        </div>
      </div>

      <div class="sezione" data-appare>
        <p class="kicker">Artists hosted</p>
        <ul class="artisti">
          <?php foreach (['Âme', 'Acid Pauli', 'Acid Arab', 'Ben Klock', 'Bonobo', 'Bedouin', 'Blond:ish', 'Black Coffee', 'Brina Knauss', 'Carlita', 'Chet Faker', 'Damian Lazarus', 'Dixon', 'DJ Tennis', 'Fatboy Slim', 'Guy Gerber', 'Jackmaster', 'Jayda G', 'Måneskin', 'Marcel Dettmann', 'Marcelo Burlon', 'Monolink', 'Negramaro', 'Nina Kraviz', 'Polo &amp; Pan', 'Peggy Gou', 'Red Axes', 'RY X', 'Salmo', 'Satori live', 'Seth Troxler', 'Stavroz live', 'Sven Väth', 'Travis Scott', 'Venerus', 'WhoMadeWho'] as $a): ?>
          <li><?= $a ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="sezione" id="music" data-appare>
        <div class="sezione-testa affiancata">
          <h2>This week in Milan</h2>
          <p>Our team of DJs and producers creates unique sonic atmospheres: from the warm nuances of vinyl to the hypnotic rhythms of electronic music, every show is an immersive experience.</p>
        </div>
        <?php if ($PROGRAMMA['milano']): ?>
        <ul class="programma">
          <?php foreach ($PROGRAMMA['milano'] as $serata): ?>
          <li><time><?= e($serata['data']) ?> · <?= e($serata['ora']) ?></time><strong><?= e($serata['titolo']) ?></strong><span><?= e($serata['artisti']) ?></span></li>
          <?php endforeach; ?>
        </ul>
        <?php else: ?>
        <p class="programma-vuoto">The weekly program is announced on Instagram · <a href="<?= e($sede['instagram']) ?>" rel="noopener" target="_blank">@thesanctuarymilan</a></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="sezione contenitore" id="book" aria-labelledby="titolo-prenota">
    <div class="contatti-griglia">
      <div class="recapiti" data-appare>
        <p class="kicker">Booking, info &amp; where to find us</p>
        <h2 id="titolo-prenota">Contact &amp; booking</h2>
        <ul>
          <li><?= e($sede['indirizzo']) ?></li>
          <li><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $sede['telefono'])) ?>"><?= e($sede['telefono']) ?></a></li>
          <li><a href="<?= e($sede['instagram']) ?>" rel="noopener" target="_blank">@thesanctuarymilan</a></li>
        </ul>
        <p class="kicker">Restaurant bookings</p>
        <p><a href="mailto:<?= e($sede['email_prenotazioni']) ?>"><?= e($sede['email_prenotazioni']) ?></a></p>
        <p class="kicker">Private events</p>
        <p><a href="mailto:<?= e($sede['email_eventi']) ?>"><?= e($sede['email_eventi']) ?></a></p>
        <dl class="orari-blocco">
          <?php foreach ($sede['orari'] as $giorni => $ore): ?>
          <div><dt><?= e($giorni) ?></dt><dd><?= e($ore) ?></dd></div>
          <?php endforeach; ?>
        </dl>
      </div>

      <form class="modulo" method="post" action="milan.php#book" data-appare>
        <?php if ($esito): ?>
        <p class="esito<?= $errore ? ' errore' : '' ?>" role="status"><?= e($esito) ?></p>
        <?php endif; ?>
        <div class="modulo-riga">
          <div class="campo">
            <label for="nome">Name and surname</label>
            <input id="nome" name="nome" type="text" autocomplete="name" required value="<?= e($valori['nome']) ?>">
          </div>
          <div class="campo">
            <label for="spazio">Space</label>
            <select id="spazio" name="spazio" required>
              <option value="">Choose</option>
              <?php foreach ($sede['spazi'] as $chiave => $nome): ?>
              <option value="<?= e($chiave) ?>"<?= $valori['spazio'] === $chiave ? ' selected' : '' ?>><?= e($nome) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modulo-riga">
          <div class="campo">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required value="<?= e($valori['email']) ?>">
          </div>
          <div class="campo">
            <label for="telefono">Phone</label>
            <input id="telefono" name="telefono" type="tel" autocomplete="tel" value="<?= e($valori['telefono']) ?>">
          </div>
        </div>
        <div class="modulo-riga">
          <div class="campo">
            <label for="data">Date</label>
            <input id="data" name="data" type="date" value="<?= e($valori['data']) ?>">
          </div>
          <div class="campo">
            <label for="persone">Guests</label>
            <input id="persone" name="persone" type="number" min="1" max="500" inputmode="numeric" value="<?= e($valori['persone']) ?>">
          </div>
        </div>
        <div class="campo">
          <label for="messaggio">Message</label>
          <textarea id="messaggio" name="messaggio"><?= e($valori['messaggio']) ?></textarea>
        </div>
        <div class="trappola" aria-hidden="true">
          <label for="sito">Leave empty</label>
          <input id="sito" name="sito" type="text" tabindex="-1" autocomplete="off">
        </div>
        <label class="consenso">
          <input type="checkbox" name="consenso" required>
          <span>I have read the <a href="privacy.php" target="_blank">privacy notice</a> and agree to the processing of my data to receive a reply.</span>
        </label>
        <div><button class="bottone" type="submit">Send request</button></div>
        <p class="modulo-nota">Your booking is confirmed only when our staff contacts you.</p>
      </form>
    </div>
  </section>

  <section class="mappa" aria-label="Map of The Sanctuary Milan">
    <iframe data-src="https://www.openstreetmap.org/export/embed.html?bbox=<?= e((float)$sede['lon'] - 0.012) ?>%2C<?= e((float)$sede['lat'] - 0.005) ?>%2C<?= e((float)$sede['lon'] + 0.012) ?>%2C<?= e((float)$sede['lat'] + 0.005) ?>&amp;layer=mapnik&amp;marker=<?= e($sede['lat']) ?>%2C<?= e($sede['lon']) ?>"
            title="Map of The Sanctuary Milan, Via Valenza" loading="lazy" referrerpolicy="no-referrer"></iframe>
    <button class="mappa-attesa" type="button" data-mostra-banner><span>The map is shown after you accept the privacy notice</span></button>
    <a class="mappa-link" href="https://www.openstreetmap.org/?mlat=<?= e($sede['lat']) ?>&amp;mlon=<?= e($sede['lon']) ?>#map=17/<?= e($sede['lat']) ?>/<?= e($sede['lon']) ?>" target="_blank" rel="noopener">Open the map ↗</a>
  </section>

<?php include 'partials/footer.php'; ?>
