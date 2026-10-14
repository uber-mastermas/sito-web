<?php
$titolo = 'Home';
$descrizione = 'The Sanctuary Eco Retreat is a family of living sanctuaries in Rome, Milan, Porto Cervo and the Itria Valley, where nature, design, food, wellness and music come together.';
$pagina = 'index.php';
$con_hero = true;
include 'partials/header.php';
?>

  <section class="hero copre" style="--velo: 1.1">
    <?= video_hero('img/video/famiglia-sanctuary-orizzontale.mp4', 'img/video/famiglia-sanctuary-orizzontale-attesa.webp', 'img/video/famiglia-sanctuary-verticale.mp4', 'img/video/famiglia-sanctuary-verticale-attesa.webp', 'Night at The Sanctuary, among palm trees, lights and music') ?>
    <div class="hero-testo">
      <p class="kicker"><?= e($SITO['luogo']) ?></p>
      <h1>A timeless place to live, know and share.</h1>
      <p class="hero-sotto">A family of living sanctuaries where nature, design, food, wellness and music come together.</p>
      <div class="azioni">
        <button class="bottone bottone-chiaro" type="button" data-apri-reserve>Reserve</button>
        <a class="bottone bottone-chiaro-linea" href="#places">Discover our places</a>
      </div>
    </div>
  </section>

  <section class="manifesto contenitore" data-appare>
    <p class="kicker">The Sanctuary</p>
    <p>Where the energies of the night mix with those of the day, and everyone can do what they like best.</p>
  </section>

  <section class="contenitore" aria-labelledby="titolo-whats-on">
    <div class="sezione-testa affiancata" data-appare>
      <h2 id="titolo-whats-on">What's on</h2>
      <p>Music, wellness and gatherings: what is happening now in our sanctuaries.</p>
    </div>
    <div class="schede">
      <a class="scheda" href="milan.php#club" data-appare>
        <div class="scheda-foto"><?= foto('img/home/giradischi-vinile-luce-calda.webp', 'A vinyl record spinning under warm light', 1440, 1800, 'Vinile sul giradischi') ?></div>
        <span class="kicker">Club · Thursday to Sunday</span>
        <h3>Internationally renowned artists, in one magical place</h3>
        <p>From the warm nuances of vinyl to the hypnotic rhythms of electronic music, every show is an immersive experience.</p>
        <span class="link-freccia">Club &amp; music in Milan</span>
      </a>
      <a class="scheda" href="milan.php#wellness" data-appare>
        <div class="scheda-foto"><?= foto('img/pagine/milano/milano-yoga-candele.webp', 'A yoga pose by candlelight', 1920, 1920, 'Yoga a lume di candela') ?></div>
        <span class="kicker">Wellness · Every week</span>
        <h3>A quiet sanctuary for movement and breath</h3>
        <p>Weekly classes of Yoga, Pilates and Zenfit: rituals to reset, recharge and reconnect.</p>
        <span class="link-freccia">Wellness in Milan</span>
      </a>
      <a class="scheda" href="private-events.php" data-appare>
        <div class="scheda-foto"><?= foto('img/pagine/milano/milano-giardino-notte-piscina.webp', 'The garden and the pool at night, seen through palm leaves', 1920, 1920, 'Giardino e piscina di notte') ?></div>
        <span class="kicker">Private events · Rome &amp; Milan</span>
        <h3>A venue that shapes around your vision</h3>
        <p>Corporate events, brand launches, private parties, fashion shows and shoots, in spaces that can be made exclusive.</p>
        <span class="link-freccia">Venue hire</span>
      </a>
    </div>
  </section>

  <section class="sezione contenitore" aria-labelledby="titolo-filosofia">
    <div class="coppia-testo">
      <div data-appare><?= foto('img/home/vaso-terracotta-luce-calda.webp', 'A terracotta vase in warm, soft light', 1920, 1920, 'Vaso di terracotta') ?></div>
      <div data-appare>
        <p class="kicker">Our philosophy</p>
        <blockquote class="citazione">«We have designed a space with an ethnic, scenographic and functional style to give people the inspiration to try many different experiences.»</blockquote>
        <h2 id="titolo-filosofia">An innovative model that combines music, gathering and wellness.</h2>
        <p>The Sanctuary was conceived as a multicultural village, somewhere between Tulum, Mexico and Thailand. Each location is different from the others, but the aesthetic of the interiors is essential to all of them.</p>
        <p>The concept that defines our places is the beauty of imperfection.</p>
      </div>
    </div>
  </section>

  <section class="sezione" aria-labelledby="titolo-temi">
    <div class="contenitore">
      <div class="sezione-testa affiancata" data-appare>
        <h2 id="titolo-temi">The Sanctuary is a place where ideas, stories and creativity come together.</h2>
        <p>Five ways to live it, in every one of our places.</p>
      </div>
    </div>
    <div class="galleria" data-galleria data-appare>
      <div class="galleria-binario">
        <figure class="tema"><?= foto('img/home/roma-altalena-pergolato.webp', 'A wooden swing under a bamboo pergola in the garden', 1440, 1800, 'Altalena sotto il pergolato') ?><figcaption><h3>Design &amp; Nature</h3><p>A dialogue between design and nature, for a wider, free and experiential use of space.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/pagine/milano/milano-sushi-foglia.webp', 'Sushi with salmon tartare on a banana leaf', 1440, 1800, 'Sushi su foglia') ?><figcaption><h3>Food</h3><p>A harmony of cultures beyond traditional borders: Mediterranean roots with tropical and Asian influences.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/home/roma-club-folla-luci-rosse.webp', 'The crowd dancing under red lights in the Club', 1440, 1440, 'Club con luci rosse') ?><figcaption><h3>Music</h3><p>Live and vinyl sets in the garden, electronic sounds in the Club: a sound that has become our identity.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/home/itria-performer-fuoco.webp', 'A performer with fire torches on the beach at sunset', 1440, 1800, 'Performer con il fuoco') ?><figcaption><h3>Performances</h3><p>Dancers, acrobats, fire magic and aerial shows: different cultures that let us discover their fantastic world.</p></figcaption></figure>
        <figure class="tema"><?= foto('img/home/roma-salotto-giardino-tropicale.webp', 'A lounge with wooden sofas among tropical plants', 1920, 1920, 'Salotto nel giardino tropicale') ?><figcaption><h3>Rituals</h3><p>Yoga and massage, live art and a magical garden called the Healing Area, dedicated to relaxation.</p></figcaption></figure>
      </div>
      <div class="contenitore galleria-comandi">
        <button class="galleria-freccia" type="button" data-dir="-1" aria-label="Previous">←</button>
        <button class="galleria-freccia" type="button" data-dir="1" aria-label="Next">→</button>
      </div>
    </div>
  </section>

  <section class="sezione" id="places" aria-labelledby="titolo-sedi">
    <div class="contenitore">
      <div class="sezione-testa affiancata" data-appare>
        <h2 id="titolo-sedi">Four locations, one vision.</h2>
        <p>Suggestive metropolitan oases and summer retreats, all around the Mediterranean Sea.</p>
      </div>
    </div>
    <div class="sedi">
      <?php foreach ($SEDI as $s): ?>
      <a class="sede copre" href="<?= e($s['pagina']) ?>" data-appare>
        <?= foto($s['foto'], 'The Sanctuary ' . $s['nome'], 1440, 1800, 'Sede di ' . $s['nome']) ?>
        <span class="sede-testo">
          <span class="kicker"><?= e($s['paese']) ?></span>
          <strong><?= e($s['nome']) ?></strong>
          <span><?= e($s['frase']) ?></span>
          <?php if ($s['stato'] !== ''): ?><span class="etichetta"><?= e($s['stato']) ?></span><?php endif; ?>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="fascia scura" aria-labelledby="titolo-eventi">
    <div class="contenitore">
      <div class="coppia-testo">
        <div data-appare><?= foto('img/home/roma-veranda-tavoli.webp', 'The Veranda with wooden tables and woven lamps', 1440, 1440, 'Veranda con tavoli') ?></div>
        <div data-appare>
          <p class="kicker">Venue hire &amp; private events</p>
          <h2 id="titolo-eventi">A world that shapes around your vision.</h2>
          <p>The Sanctuary is more than a venue: it's a living experience where nature, design and creativity come together. From intimate dinners to large-scale productions, our spaces in Rome and Milan transform to host your most unique ideas.</p>
          <ul class="elenco-punti">
            <li><strong>Corporate events</strong><span>Brand launches, presentations and press days</span></li>
            <li><strong>Private parties</strong><span>Celebrations, pre- and after-wedding parties</span></li>
            <li><strong>Fashion &amp; shoots</strong><span>Fashion shows, photo, video and film productions</span></li>
            <li><strong>Workshops &amp; retreats</strong><span>Team building and wellness activities</span></li>
          </ul>
          <div class="azioni"><a class="bottone" href="private-events.php">Send a request</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="sezione contenitore" id="membership" aria-labelledby="titolo-membership">
    <div class="coppia-testo inversa">
      <div data-appare><?= foto('img/home/arco-moresco-giardino.webp', 'A carved Moorish arch opening onto the garden', 1440, 1440, 'Arco moresco sul giardino') ?></div>
      <div data-appare>
        <p class="kicker">The Sanctuary Membership</p>
        <h2 id="titolo-membership">Always at home, in every sanctuary.</h2>
        <p>Whether you're in Rome, Milan, Porto Cervo or the Itria Valley, your membership is your gateway to exclusive experiences, premium services and unparalleled hospitality across all our venues.</p>
        <p class="prezzo">€1,000</p>
        <p class="kicker">One year · pay annually or in two instalments</p>
        <ul class="elenco-punti">
          <li><strong>Priority access</strong><span>A dedicated line at all our venues</span></li>
          <li><strong>Member events</strong><span>Special programming and priority access</span></li>
          <li><strong>Members-only area</strong><span>A private bar and dedicated service</span></li>
          <li><strong>Concierge</strong><span>Personal service via WhatsApp</span></li>
          <li><strong>Wellness</strong><span>Yoga, breathwork and healing sessions</span></li>
          <li><strong>20% off</strong><span>Dining, tables, wellness and event tickets</span></li>
        </ul>
        <div class="azioni">
          <a class="bottone" href="<?= e($SITO['membership']) ?>" rel="noopener" target="_blank">Apply now</a>
          <a class="bottone bottone-linea" href="<?= e($SITO['membership_login']) ?>" rel="noopener" target="_blank">Members login</a>
        </div>
      </div>
    </div>
  </section>

  <div class="fine-pagina"></div>

<?php include 'partials/footer.php'; ?>
