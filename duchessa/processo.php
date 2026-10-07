<?php
$titolo = 'Il Processo';
$descrizione = "Dalla pianta alla bottiglia: raccolta, molitura, estrazione a freddo, decantazione naturale e imbottigliamento de L'Olio della Duchessa.";
$pagina = 'processo.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Il Processo</li>
    </ol>
    <p class="occhiello">Dalla pianta alla bottiglia</p>
    <h1>Il Processo</h1>
    <p class="testo-grande">Un buon olio non nasce nel momento in cui viene imbottigliato.</p>
    <p>Nasce molto prima: nella cura dell'ulivo, nell'attesa della maturazione, nella scelta del giorno della raccolta. E continua in ogni gesto che segue.</p>
  </div>

  <div class="contenitore">
    <ol class="passi">

      <li class="passo" id="raccolta" data-appare>
        <div class="passo-foto doppia">
          <?= foto('img/pagine/processo/mani-olive-cesto.webp', 'Mani che colgono le olive dal ramo sopra il cesto della raccolta', 1920, 1072, 'Il momento della raccolta, manuale o meccanica', ['subito' => true]) ?>
          <?= foto('img/pagine/processo/mani-raccolta-olive-reti.webp', 'Mani che colgono le olive sopra le reti, con le cassette della raccolta', 1200, 1600, 'Primo piano su olive e mani') ?>
        </div>
        <div>
          <span class="passo-numero" aria-hidden="true">01</span>
          <h2>La raccolta</h2>
          <h3>Il momento giusto</h3>
          <p>La raccolta avviene nella prima metà di novembre.</p>
          <p>Le olive si raccolgono quando raggiungono la maturazione giusta per esprimere il carattere della nostra Carolea.</p>
          <p>Manualità e tecnologia si incontrano nel rispetto della pianta.</p>
          <p class="frase">La raccolta dura poco.<br>L'attesa è durata un anno.</p>
        </div>
      </li>

      <li class="passo" id="molitura" data-appare>
        <div class="passo-foto impilata">
          <?= foto('img/pagine/processo/secchio-olive-raccolte.webp', 'Un secchio di olive appena raccolte, pronte per il frantoio', 1920, 1434, 'Olive raccolte') ?>
          <?= foto('img/pagine/processo/lavaggio-olive-frantoio.webp', 'Le olive appena arrivate al frantoio nella vasca di lavaggio', 1920, 1000, 'Arrivo delle olive al frantoio') ?>
        </div>
        <div>
          <span class="passo-numero" aria-hidden="true">02</span>
          <h2>La molitura</h2>
          <h3>Il tempo è prezioso</h3>
          <p>Dopo la raccolta, le olive vengono portate al frantoio.</p>
          <p>La rapidità è fondamentale: cerchiamo di ridurre il più possibile il tempo che separa l'albero dalla molitura.</p>
          <p>Le olive vengono frante con un frangitore a martelli.</p>
          <p>È il passaggio in cui il frutto cambia forma, ma non deve perdere la propria identità.</p>
        </div>
      </li>

      <li class="passo" id="estrazione" data-appare>
        <div class="passo-foto doppia pari-mobile">
          <?= foto('img/pagine/processo/gramola-pasta-di-olive.webp', "La pasta di olive nella gramola, da cui affiora l'olio", 1920, 1920, 'Pasta di olive') ?>
          <?= foto('img/pagine/processo/olio-appena-estratto-frantoio.webp', "L'olio appena estratto a freddo che scende dal separatore del frantoio", 1920, 1434, 'Fase di estrazione a freddo') ?>
        </div>
        <div>
          <span class="passo-numero" aria-hidden="true">03</span>
          <h2>L'estrazione</h2>
          <h3>A freddo</h3>
          <p>L'olio viene estratto a freddo, a temperatura inferiore ai 27&nbsp;°C.</p>
          <p>Una lavorazione attenta, pensata per preservare le caratteristiche dell'olio e il patrimonio aromatico delle olive.</p>
          <p>È qui che dalla pasta di olive comincia a emergere ciò che diventerà L'Olio della Duchessa.</p>
        </div>
      </li>

      <li class="passo" id="decantazione" data-appare>
        <div class="passo-foto">
          <?= foto('img/pagine/processo/silos-decantazione-acciaio.webp', "I silos in acciaio inox dove l'olio decanta prima dell'imbottigliamento", 1920, 1920, 'Silos di decantazione') ?>
        </div>
        <div>
          <span class="passo-numero" aria-hidden="true">04</span>
          <h2>La decantazione</h2>
          <h3>Lasciare che sia la natura a fare il suo lavoro</h3>
          <p>Dopo l'estrazione, l'olio viene lasciato decantare naturalmente nei silos in acciaio.</p>
          <p>Le particelle e i residui presenti nell'olio si depositano progressivamente.</p>
          <p>Vi resta solo il tempo necessario prima dell'imbottigliamento: il silos è colmo, senza aria sopra l'olio, che così non si ossida.</p>
          <p>È un passaggio discreto, quasi invisibile, ma fa parte del nostro modo di lavorare.</p>
        </div>
      </li>

      <li class="passo" id="imbottigliamento" data-appare>
        <div class="passo-foto passo-bottiglia">
          <?= foto('img/pagine/prodotto/bottiglia-olio-duchessa-500ml.webp', "La bottiglia de L'Olio della Duchessa", 322, 1600, 'Bottiglia') ?>
        </div>
        <div>
          <span class="passo-numero" aria-hidden="true">05</span>
          <h2>L'imbottigliamento</h2>
          <h3>Il viaggio continua</h3>
          <p>Solo alla fine l'olio viene imbottigliato.</p>
          <p>È il momento in cui lascia il luogo da cui proviene per raggiungere una nuova casa. La tua.</p>
          <p>Una bottiglia de L'Olio della Duchessa porta con sé il lavoro di un'annata, la sua terra e le olive da cui tutto è cominciato.</p>
          <p class="frase">Dalla Calabria alla tua tavola.</p>
        </div>
      </li>
    </ol>

    <section class="capitolo" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">L'annata</p>
          <h2>Un ciclo che ricomincia</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Ogni bottiglia nasce da un'annata. E ogni annata è diversa.</p>
          <p>Non cerchiamo di cancellare le differenze della natura. Le accogliamo.</p>
          <p>Perché sono proprio queste differenze a rendere autentico il nostro olio.</p>
        </div>
      </div>
    </section>
  </div>

  <section class="fascia" data-appare>
    <div class="contenitore">
      <p class="frase">La terra cambia.<br>Il tempo cambia.<br>E ogni raccolto ha qualcosa di nuovo da raccontare.</p>
      <div class="azioni">
        <a class="bottone" href="prodotto.php">Scopri l'olio</a>
      </div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
