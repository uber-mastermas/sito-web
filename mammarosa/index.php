<?php
$titolo = 'Home';
$descrizione = 'Hotel Mamma Rosa, albergo di famiglia sulla Majelletta a Pretoro (CH) dal 1966: settimane bianche vicino agli impianti, estate in montagna e cucina abruzzese fatta in casa.';
$pagina = 'index.php';
include 'partials/header.php';
?>

  <!-- 1 — Hero + ricerca disponibilità -->
  <section class="hero copre">
    <?= foto('img/home/albergo-rosa-tramonto-neve.webp', "L'albergo rosa sulla Majelletta innevata, al tramonto", 1672, 941, "L'albergo con la neve", ['subito' => true]) ?>
    <div class="hero-testo">
      <p class="luogo">Majelletta · Abruzzo</p>
      <h1>Hotel Mamma Rosa</h1>
      <p class="hero-sotto">Dal 1966 sulla Majelletta: neve d'inverno, fresco d'estate <br>e la cucina di casa abruzzese.</p>
    </div>
  </section>

  <div class="contenitore">
    <form class="cerca" action="prenota.php" method="get" aria-label="Verifica la disponibilità">
      <p class="cerca-titolo">Verifica la disponibilità</p>
      <div class="cerca-campi">
        <div class="campo"><label for="arrivo">Arrivo</label><input id="arrivo" name="arrivo" type="date"></div>
        <div class="campo"><label for="partenza">Partenza</label><input id="partenza" name="partenza" type="date"></div>
        <div class="campo"><label for="adulti">Adulti</label>
          <select id="adulti" name="adulti"><option>1</option><option selected>2</option><option>3</option><option>4</option><option>5</option></select>
        </div>
        <div class="campo"><label for="bambini">Bambini</label>
          <select id="bambini" name="bambini"><option selected>0</option><option>1</option><option>2</option><option>3</option></select>
        </div>
        <button class="bottone bottone-rosa" type="submit">Cerca</button>
      </div>
      <p class="cerca-nota">Prenotazione diretta, senza intermediari · Nessuna tassa di soggiorno</p>
    </form>
  </div>

  <!-- 2 — Presentazione -->
  <section class="capitolo">
    <div class="contenitore capitolo-griglia">
      <div class="capitolo-titolo" data-appare>
        <p class="occhiello">Dal 1966</p>
        <h2>Un albergo di famiglia, in quota</h2>
        <div class="capitolo-foto"><?= foto('img/home/cucina-anni-sessanta-famiglia.webp', 'La famiglia e il personale nella cucina dell\'albergo, anni Sessanta', 1440, 1081, 'Foto storica') ?></div>
      </div>
      <div class="capitolo-testo" data-appare>
        <p class="testo-grande">Il nome viene da nonna Rosalinda, che accoglieva chiunque arrivasse con il calore di una madre. Dal 1966, sulla Majelletta, accogliamo così famiglie, coppie e gruppi che cercano la montagna vera: neve, aria buona e una tavola apparecchiata come a casa.</p>
        <p>Oltre 40 camere da una a cinque persone, tutte con bagno privato; il ristorante con due ampie sale, il bar, la sauna affacciata sulle piste e il noleggio sci dentro l'albergo. Gli impianti sono a 100 metri e, nelle giornate limpide, la vista arriva fino al mare.</p>
        <dl class="numeri">
          <div><dt>Dal</dt><dd>1966</dd></div>
          <div><dt>Camere</dt><dd>Oltre 40</dd></div>
          <div><dt>Impianti a</dt><dd>100 m</dd></div>
          <div><dt>Piste fino a</dt><dd>2000 m</dd></div>
        </dl>
      </div>
    </div>
  </section>

  <!-- 3 — Tre porte d'ingresso -->
  <section class="porte">
    <div class="contenitore porte-griglia">
      <a class="porta" href="albergo.php" data-appare>
        <?= foto('img/home/camera-matrimoniale-legno-albergo.webp', 'Camera matrimoniale con arredi in legno di pino', 1920, 1280, 'Camera') ?>
        <span class="porta-testo">
          <span class="occhiello">L'albergo</span>
          <strong>Camere calde, in legno</strong>
          <span>Matrimoniali, triple, quadruple e quintuple, alcune con vista mare.</span>
        </span>
      </a>
      <a class="porta" href="ristorante.php" data-appare>
        <?= foto('img/home/arrosticini-pane-abbrustolito.webp', 'Arrosticini con pane abbrustolito', 1448, 1086, 'Piatto tipico') ?>
        <span class="porta-testo">
          <span class="occhiello">Il ristorante</span>
          <strong>La cucina di casa</strong>
          <span>Ricette di montagna fatte in casa, in due ampie sale.</span>
        </span>
      </a>
      <a class="porta" href="inverno.php" data-appare>
        <?= foto('img/home/albergo-rosa-neve-majelletta.webp', "L'albergo rosa sommerso dalla neve", 1000, 667, 'Neve') ?>
        <span class="porta-testo">
          <span class="occhiello">Sulla neve</span>
          <strong>Impianti a 100 metri</strong>
          <span>Noleggio sci dentro l'albergo e sciovie per tutti i livelli.</span>
        </span>
      </a>
    </div>
  </section>

  <!-- 4 — Le due stagioni -->
  <section class="stagioni">
    <a class="stagione copre" href="inverno.php" style="--velo: 1.1">
      <?= foto('img/home/albergo-rosa-panorama-neve-impianti.webp', "L'albergo rosa sulle piste innevate della Majelletta", 1000, 667, 'Inverno', ['classe' => 'pos-destra']) ?>
      <span class="stagione-testo" data-appare>
        <span class="occhiello">Inverno</span>
        <strong>Settimane bianche e weekend sulla neve</strong>
        <span>Da inizio dicembre al giorno dopo Pasquetta.</span>
      </span>
    </a>
    <a class="stagione copre" href="estate.php" style="--velo: 1.1">
      <?= foto('img/home/gregge-pecore-pastore-sentiero.webp', 'Un gregge e il pastore sui prati della Majelletta in estate', 720, 900, 'Estate') ?>
      <span class="stagione-testo" data-appare>
        <span class="occhiello">Estate</span>
        <strong>Il fresco della montagna abruzzese</strong>
        <span>Da fine giugno a settembre, fra passeggiate e relax.</span>
      </span>
    </a>
  </section>

  <!-- 5 — Il ristorante -->
  <section class="capitolo">
    <div class="contenitore cucina-griglia">
      <div class="cucina-foto" data-appare>
        <?= foto('img/home/cucina-verdure-in-padella.webp', 'In cucina: verdure ripassate in padella', 1280, 1919, 'Cucina') ?>
      </div>
      <div class="cucina-testo" data-appare>
        <p class="occhiello">Il ristorante</p>
        <h2>Si mangia come a casa</h2>
        <p class="testo-grande">Dopo una giornata sulla neve o una passeggiata in quota, la cucina di Mamma Rosa porta in tavola le ricette abruzzesi di sempre, preparate in casa.</p>
        <ul class="piatti">
          <li>Ravioli di ricotta</li>
          <li>Sagne e fagioli</li>
          <li>Pasta alla chitarra</li>
          <li>Gnocchi di patate</li>
          <li>Tagliatelle alla pecorara</li>
          <li>Polenta alla Mamma Rosa</li>
          <li>Tagliolini al tartufo</li>
          <li>Funghi porcini</li>
        </ul>
        <div class="azioni"><a class="bottone bottone-linea" href="ristorante.php">Scopri il ristorante</a></div>
      </div>
    </div>
  </section>

  <!-- 6 — Prenota direttamente -->
  <section class="fascia">
    <div class="contenitore">
      <p class="occhiello centrato-occhiello">Prenota con noi</p>
      <p class="frase">Prenota direttamente: parli con noi, non con un portale.</p>
      <div class="azioni">
        <a class="bottone bottone-rosa" href="prenota.php">Prenota online</a>
        <a class="bottone bottone-linea" href="tel:+390871896143">Chiama 0871 896143</a>
        <a class="bottone bottone-linea" href="https://wa.me/393938838955" rel="noopener" target="_blank">WhatsApp</a>
      </div>
      <p class="fascia-link"><a href="listino.php">Guarda il listino inverno 2026/27</a></p>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
