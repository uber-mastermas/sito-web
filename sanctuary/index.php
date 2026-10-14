<?php
$titolo = 'Home';
$descrizione = 'The Sanctuary Eco Retreat is a family of living sanctuaries in Rome, Milan, Porto Cervo and the Itria Valley, where nature, design, food, wellness and music come together.';
$pagina = 'index.php';
$con_hero = true;
include 'partials/header.php';
/* Home semplice (scelta del 14/10): video, manifesto, le quattro sedi, due porte (eventi e membership).
   I contenuti stanno nelle pagine delle sedi. */
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
    <p class="manifesto-nota">A multicultural village between Tulum and Thailand, built on the beauty of imperfection.</p>
  </section>

  <section id="places" aria-labelledby="titolo-sedi">
    <h2 id="titolo-sedi" class="solo-lettori">Our places</h2>
    <div class="sedi">
      <?php foreach ($SEDI as $s): ?>
      <a class="sede copre" href="<?= e($s['pagina']) ?>" data-appare>
        <?= foto($s['foto'], 'The Sanctuary ' . $s['nome'], 1440, 1800, 'Sede di ' . $s['nome']) ?>
        <span class="sede-testo">
          <span class="kicker"><?= e($s['paese']) ?></span>
          <strong><?= e($s['nome']) ?></strong>
          <span><?= e($s['frase']) ?></span>
          <span class="etichetta"><?= $s['stato'] !== '' ? e($s['stato']) : 'Discover' ?></span>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="porte contenitore" aria-label="Private events and membership">
    <a class="porta copre" href="private-events.php" data-appare>
      <?= foto('img/home/roma-veranda-tavoli.webp', 'The Veranda with wooden tables and woven lamps', 1440, 1440, 'Veranda') ?>
      <span class="porta-testo">
        <span class="kicker">Venue hire &amp; private events</span>
        <strong>A world that shapes around your vision.</strong>
        <span class="etichetta">Send a request</span>
      </span>
    </a>
    <a class="porta copre" id="membership" href="<?= e($SITO['membership']) ?>" rel="noopener" target="_blank" data-appare>
      <?= foto('img/home/arco-moresco-giardino.webp', 'A carved Moorish arch opening onto the garden', 1440, 1440, 'Arco moresco') ?>
      <span class="porta-testo">
        <span class="kicker">The Sanctuary Membership</span>
        <strong>Always at home, in every sanctuary.</strong>
        <span class="etichetta">Apply now ↗</span>
      </span>
    </a>
  </section>

  <div class="fine-pagina"></div>

<?php include 'partials/footer.php'; ?>
