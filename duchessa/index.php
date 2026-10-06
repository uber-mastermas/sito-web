<?php
$titolo = 'Home';
$descrizione = "L'Olio della Duchessa: olio extra vergine d'oliva monocultivar Carolea da Girifalco, in Calabria. Arte olearia per passione.";
$pagina = 'index.php';
include 'partials/header.php';
?>

  <!-- 1 — Hero: il logo protagonista, nient'altro -->
  <section class="hero copre">
    <?= foto('img/home/uliveto-tramonto.webp', 'Uliveto sulle colline di Girifalco nella luce del tramonto', 1920, 1434, 'Paesaggio ulivi / Girifalco, luce calda', ['subito' => true, 'mobile' => 'img/home/sentiero-uliveto-tramonto-verticale.webp']) ?>
    <div class="hero-testo">
      <img class="hero-logo" src="img/logo/logo-duchessa-chiaro.svg" width="263" height="351" alt="">
      <h1>L'Olio della Duchessa</h1>
      <p class="hero-sotto">Olio Extra Vergine d'Oliva<br><em>Monocultivar Carolea</em></p>
      <p class="luogo">Girifalco · Calabria · Italia</p>
    </div>
  </section>

  <!-- 2 — L'identità -->
  <section class="quadro copre" style="margin-top: var(--respiro); --velo: 1.15">
    <?= foto('img/home/mano-coglie-olive-ramo.webp', 'Una mano coglie le olive ancora sulla pianta', 1800, 1200, 'Ulivi, olive o momento della raccolta') ?>
    <div class="quadro-testo" data-appare>
      <h2>Una storia che nasce dalla terra</h2>
      <p class="frase">L'Olio della Duchessa nasce a Girifalco, in Calabria.</p>
      <div class="azioni"><a class="bottone bottone-chiaro" href="azienda.php">Scopri la nostra storia</a></div>
    </div>
  </section>

  <!-- 3 — Il prodotto -->
  <section class="vetrina">
    <div class="contenitore vetrina-griglia">
      <div class="vetrina-bottiglia" data-appare>
        <?= foto('img/pagine/prodotto/bottiglia-olio-duchessa-500ml.webp', "Bottiglia de L'Olio della Duchessa, 500 ml", 322, 1600, 'Bottiglia, estrema semplicità') ?>
      </div>
      <div class="vetrina-testo" data-appare>
        <h2>L'Olio della Duchessa</h2>
        <p class="frase">Monocultivar Carolea</p>
        <div class="azioni"><a class="bottone bottone-linea" href="prodotto.php">Scopri l'olio</a></div>
        <div class="vetrina-materia">
          <?= foto('img/home/olive-raccolte-rete-terra.webp', 'Olive appena raccolte sulla rete, sulla terra', 1600, 1200, 'Dettaglio materico: terra, olive') ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 4 — Chiusura -->
  <section class="quadro copre" style="--velo: 1.2">
    <?= foto('img/home/uliveti-sentiero-dall-alto.webp', 'Uliveti e un sentiero di campagna visti dall\'alto', 1920, 1440, 'Paesaggio o ulivi, immagine suggestiva') ?>
    <div class="quadro-testo" data-appare>
      <h2>L'Olio della Duchessa</h2>
      <p class="frase">Arte olearia per passione.</p>
      <p class="luogo">Girifalco · Calabria · Italia</p>
      <div class="azioni"><a class="bottone bottone-chiaro" href="contatti.php#acquista">Acquista</a></div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
