<?php
$titolo = 'Il Territorio';
$descrizione = "Girifalco, sulle colline dell'Istmo di Catanzaro: la terra, il Ducato, la Duchessa e l'origine del nome de L'Olio della Duchessa.";
$pagina = 'territorio.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="index.php">Home</a></li>
      <li aria-current="page">Il Territorio</li>
    </ol>
    <p class="occhiello">Dove nasce</p>
    <h1>Il Territorio</h1>
    <p class="testo-grande">Ci sono luoghi che sembrano custodire qualcosa del loro carattere nella terra, nella luce, nel paesaggio.</p>
  </div>

  <div class="banner copre">
    <?= foto('img/pagine/territorio/uliveti-sentiero-dall-alto.webp', 'Uliveti e campagna visti dall\'alto', 1920, 1440, 'Panoramica di Girifalco dall\'alto o da lontano', ['subito' => true]) ?>
  </div>

  <div class="contenitore">

    <section class="capitolo" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Dove nasce</p>
          <h2>Tra due mari</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">L'Olio della Duchessa nasce a Girifalco, in Calabria, sulle colline dell'Istmo di Catanzaro, alle pendici del Monte Covello.</p>
          <p>È una terra sospesa tra il Mar Tirreno e il Mar Ionio, dove l'olivo appartiene da sempre al paesaggio e alla vita agricola del territorio.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="girifalco" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">460 metri</p>
          <h2>Girifalco</h2>
        </div>
        <div class="capitolo-testo">
          <p>A circa 460 metri di altitudine, Girifalco occupa una posizione particolare nel cuore della Calabria.</p>
          <p>Le colline e i terrazzamenti che circondano il paese raccontano una vocazione agricola antica, fatta di stagioni, coltivazioni e lavoro paziente.</p>
          <p class="frase">Qui l'ulivo non è soltanto parte del paesaggio.<br>È parte della storia.</p>
        </div>
      </div>
    </section>

    <div class="coppia" data-appare>
      <?= foto('img/pagine/territorio/foglie.webp', "Foglie e rami d'ulivo da vicino", 1200, 1600, "Dettaglio: foglie o rami d'ulivo") ?>
      <?= foto('img/pagine/territorio/uliveti-quota.webp', 'Terrazzamenti collinari coltivati a ulivo', 1800, 1200, 'Uliveti in quota, terrazzamenti') ?>
    </div>

    <section class="capitolo" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">La terra</p>
          <h2>Una terra agricola</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Prima ancora di diventare un olio, tutto comincia dalla terra.</p>
          <p>La coltivazione dell'olivo è profondamente legata alla Calabria e la Carolea rappresenta una delle varietà più caratteristiche della regione.</p>
          <p>Tra queste colline, l'agricoltura ha disegnato nel tempo un paesaggio che ancora oggi conserva il suo legame con la terra.</p>
        </div>
      </div>
    </section>
  </div>

  <div class="foto-larga" data-appare>
    <div class="copre">
      <?= foto('img/pagine/territorio/sentiero-uliveto-alba.webp', "Un sentiero tra gli ulivi nella luce dell'alba", 1920, 1456, 'Dettaglio paesaggio, luce del mattino o del tramonto', ['mobile' => 'img/pagine/territorio/sentiero-uliveto-alba-verticale.webp']) ?>
    </div>
  </div>

  <div class="contenitore">
    <section class="capitolo" id="ducato" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">La storia</p>
          <h2>Il Ducato di Girifalco</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Girifalco custodisce anche una storia più antica.</p>
          <p>Il paese fu legato per secoli al Ducato di Girifalco e alla famiglia Caracciolo, importante famiglia nobiliare del Regno di Napoli.</p>
          <p>Ancora oggi questa memoria vive nei luoghi, tra cui il Palazzo Ducale.</p>
        </div>
      </div>
    </section>

    <div class="foto-sola larga" data-appare>
      <?= foto('img/pagine/territorio/palazzo-ducale-girifalco-portale.webp', 'Il portale in pietra del Palazzo Ducale di Girifalco, con la statua sulla facciata', 1920, 1072, 'Palazzo Ducale o centro storico', ['mobile' => 'img/pagine/territorio/palazzo-ducale-girifalco-portale-verticale.webp']) ?>
    </div>

    <section class="capitolo" id="duchessa" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">1812</p>
          <h2>La Duchessa</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">La storia della Duchessa appartiene alla storia di Girifalco.</p>
          <p>L'ultima discendente diretta dei Caracciolo, Anna Maria Caracciolo, morì nel 1812.</p>
          <p>Sono passati più di due secoli, ma alcune storie rimangono nei luoghi, nei nomi e nella memoria.</p>
          <p>Abbiamo scelto di chiamare questo olio L'Olio della Duchessa perché volevamo che anche una bottiglia potesse custodire un frammento di questa storia.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="nome" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Un omaggio</p>
          <h2>Il nome</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">L'Olio della Duchessa è un omaggio a Girifalco.</p>
          <p>Alla sua terra, alla sua storia, a quel legame invisibile che unisce ciò che siamo oggi a ciò che è stato prima di noi.</p>
        </div>
      </div>
    </section>
  </div>

  <section class="fascia" data-appare>
    <div class="contenitore">
      <p class="frase">Una bottiglia può contenere un olio.<br>Ma può anche custodire un ricordo.</p>
      <div class="azioni">
        <a class="bottone" href="processo.php">Scopri il processo</a>
        <a class="bottone bottone-linea" href="azienda.php">L'Azienda</a>
      </div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
