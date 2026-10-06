<?php
$titolo = "L'Azienda";
$descrizione = "Chi c'è dietro L'Olio della Duchessa: una piccola produzione a Girifalco, seguita direttamente dall'ulivo alla bottiglia.";
$pagina = 'azienda.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="index.php">Home</a></li>
      <li aria-current="page">L'Azienda</li>
    </ol>
    <p class="occhiello">Chi siamo</p>
    <h1>Una storia che comincia dagli ulivi</h1>
    <p class="testo-grande">L'Olio della Duchessa nasce da un legame: quello con una terra, con gli ulivi e con un modo preciso di intendere il lavoro agricolo.</p>
  </div>

  <div class="banner copre">
    <?= foto('img/pagine/azienda/uliveti.webp', "Gli uliveti dell'azienda a Girifalco", 1800, 1365, "Vista d'insieme degli ulivi dell'azienda", ['subito' => true]) ?>
  </div>

  <div class="contenitore">

    <section class="capitolo" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Chi siamo</p>
          <h2>La qualità comincia dalla conoscenza</h2>
        </div>
        <div class="capitolo-testo">
          <p>A Girifalco abbiamo scelto di prenderci cura di una piccola produzione e di seguirne direttamente ogni passaggio.</p>
          <p>Perché crediamo che la qualità cominci dalla conoscenza.</p>
          <p class="frase">Conoscere la pianta.<br>Conoscere la terra.<br>Conoscere il momento giusto.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="idea" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Il progetto</p>
          <h2>La nostra idea</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Non volevamo semplicemente produrre un olio.</p>
          <p>Volevamo dare una forma a qualcosa che già esisteva: un patrimonio fatto di ulivi, stagioni, lavoro e memoria.</p>
          <p>Abbiamo scelto di valorizzarlo attraverso una produzione attenta, in quantità contenute, dove ogni raccolto conserva il carattere dell'annata.</p>
        </div>
      </div>
    </section>

    <div class="coppia inversa" data-appare>
      <?= foto('img/pagine/azienda/terra.webp', 'Il suolo dell\'uliveto, radici e terra', 1400, 1400, 'Dettaglio della terra: suolo, radici') ?>
      <?= foto('img/pagine/azienda/mani.webp', 'Mani al lavoro durante la raccolta', 1200, 1500, 'Raccolta o cura della pianta: mani al lavoro') ?>
    </div>

    <section class="capitolo" id="uliveti" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">I nostri ulivi</p>
          <h2>Gli uliveti</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">I nostri ulivi vivono sulle colline di Girifalco.</p>
          <p>Sono loro il punto di partenza di tutto.</p>
          <p>Durante l'anno li accompagniamo nel loro naturale ciclo vegetativo, aspettando il momento in cui le olive hanno raggiunto il giusto equilibrio per essere raccolte.</p>
          <p>Poi arriva il tempo più importante: la raccolta.</p>
          <p class="frase">Un momento breve, intenso, quasi rituale.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="approccio" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Il nostro approccio</p>
          <h2>Il nostro modo di lavorare</h2>
        </div>
        <div class="capitolo-testo">
          <p>La nostra idea è mantenere un rapporto diretto con la pianta e con il prodotto.</p>
          <p>Le olive vengono raccolte nella prima metà di novembre, con modalità manuali e meccaniche, e portate rapidamente al frantoio.</p>
          <p>Per noi il tempo è una parte della qualità.</p>
          <p>Meno tempo passa tra la raccolta e la molitura, più possiamo preservare le caratteristiche delle olive appena raccolte.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="percorso" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Il nostro percorso</p>
          <h2>Un olio che segue la natura</h2>
        </div>
        <div class="capitolo-testo">
          <p>La nostra idea di agricoltura guarda a un rapporto sempre più rispettoso con la terra.</p>
          <p>Il percorso verso la certificazione biologica nasce proprio da questa visione.</p>
          <p>È un cammino che stiamo intraprendendo con attenzione e consapevolezza.</p>
          <p class="frase">Non un'etichetta da aggiungere.<br>Ma una direzione.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">La dimensione</p>
          <h2>Piccolo, ma seguito da vicino</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">La nostra produzione è contenuta.</p>
          <p>Ed è proprio questo che ci permette di seguire il prodotto con attenzione.</p>
          <p>Dall'ulivo al frantoio.<br>Dal frantoio alla bottiglia.</p>
          <p>Ogni annata porta con sé qualcosa di irripetibile.</p>
        </div>
      </div>
    </section>
  </div>

  <section class="fascia" data-appare>
    <div class="contenitore">
      <p class="frase">La terra non produce mai esattamente la stessa storia due volte.</p>
      <div class="azioni">
        <a class="bottone" href="processo.php">Scopri il processo</a>
      </div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
