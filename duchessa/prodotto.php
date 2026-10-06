<?php
$titolo = 'Il Prodotto';
$descrizione = "Olio extra vergine d'oliva monocultivar Carolea: profilo, dati analitici, abbinamenti, conservazione e formati. Annata 2025.";
$pagina = 'prodotto.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="index.php">Home</a></li>
      <li aria-current="page">Il Prodotto</li>
    </ol>
    <div class="scheda">
      <div class="scheda-bottiglia">
        <?= foto('img/pagine/prodotto/bottiglia-500.webp', "Bottiglia de L'Olio della Duchessa, 500 ml", 322, 1600, 'Bottiglia isolata, luce naturale', ['subito' => true]) ?>
      </div>
      <div>
        <p class="occhiello">Il Prodotto</p>
        <h1>Olio Extra Vergine d'Oliva</h1>
        <p class="sottotitolo">Monocultivar Carolea</p>
        <p class="luogo">Girifalco · Calabria · Italia</p>
        <p class="testo-grande">L'Olio della Duchessa nasce esclusivamente da olive Carolea.</p>
        <p>Una scelta precisa.</p>
        <p>Utilizzare una sola cultivar significa lasciare che sia una varietà, con il suo carattere, a raccontare il territorio.</p>
      </div>
    </div>
  </div>

  <div class="contenitore">

    <section class="capitolo" id="carolea" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">La cultivar</p>
          <h2>La Carolea</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">La Carolea è profondamente legata alla Calabria.</p>
          <p>Nel nostro olio si esprime attraverso un profilo armonioso, con note vegetali che ricordano l'erba fresca, la foglia d'ulivo e la mandorla verde.</p>
          <p>La sua personalità si completa con una piacevole sensazione amara e una nota piccante equilibrata.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="carattere" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Il profilo sensoriale</p>
          <h2>Il suo carattere</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Al primo incontro è delicato.<br>Poi arriva la personalità.</p>
          <p>Note verdi e vegetali, amaro e piccante in equilibrio, con una presenza persistente ma non aggressiva.</p>
          <p class="frase">Un olio elegante, capace di accompagnare il cibo senza coprirlo.</p>
        </div>
      </div>
    </section>

    <div class="coppia" data-appare>
      <?= foto('img/pagine/prodotto/olio-versato.webp', "L'olio che scende, in primo piano", 1200, 1600, 'Olio che scende, versamento in primo piano') ?>
      <?= foto('img/pagine/prodotto/materico.webp', 'Olive e terra, texture naturale', 1400, 1400, 'Dettaglio materico: olive o terra') ?>
    </div>

    <section class="capitolo" id="dati" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Le analisi</p>
          <h2>I dati analitici</h2>
        </div>
        <div class="capitolo-testo">
          <p>Le caratteristiche chimiche dell'olio sono state analizzate presso Lab Chimia S.r.l.</p>
          <dl class="dati">
            <div>
              <dt>Acidità libera</dt>
              <dd>0,12 % <small>· limite per l'extra vergine ≤ 0,80 %</small></dd>
            </div>
            <div>
              <dt>Polifenoli totali</dt>
              <dd>402,9 mg/kg <small>· espressi come tirosolo</small></dd>
            </div>
            <div class="tutta">
              <dt>Controllo multiresiduale</dt>
              <dd>Nessun residuo <small>· oltre 600 principi attivi ricercati</small></dd>
            </div>
          </dl>
          <p class="nota">Lab Chimia S.r.l., rapporti di prova n. 8519-2/26 (acidità) e n. 8519/25 (polifenoli e controllo multiresiduale). I dati analitici si riferiscono alla specifica annata e al campione analizzato.</p>
        </div>
      </div>
    </section>
  </div>

  <div class="foto-larga" data-appare>
    <div class="copre">
      <?= foto('img/pagine/prodotto/tavola.webp', 'Pane, verdure e pesce su una tavola naturale', 1800, 1200, 'A tavola: pane, verdure, pesce, tavola naturale') ?>
    </div>
  </div>

  <div class="contenitore">
    <section class="capitolo" id="tavola" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">In cucina</p>
          <h2>A tavola</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Ci sono piatti che chiedono poco.</p>
          <ul class="rituale">
            <li>Pane.</li><li>Pomodoro.</li><li>Legumi.</li><li>Verdure.</li><li>Pesce.</li>
          </ul>
          <p>E poi un filo d'olio.</p>
          <p>L'Olio della Duchessa nasce per essere assaggiato, non semplicemente utilizzato.</p>
          <p>Su una bruschetta ancora calda può essere il primo sapore. Su una zuppa di legumi diventa profondità. Su un'insalata porta freschezza. Su un carpaccio di pesce accompagna senza nascondere.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="rituale" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">L'assaggio</p>
          <h2>Il rituale più semplice</h2>
        </div>
        <div class="capitolo-testo">
          <ul class="rituale">
            <li>Prendi una fetta di pane.</li>
            <li>Scaldala appena.</li>
            <li>Versa l'olio.</li>
            <li>Aspetta qualche secondo.</li>
            <li>Poi assaggia.</li>
          </ul>
          <p>È forse il modo più semplice per conoscere davvero un olio.</p>
          <p class="frase">Prima ancora del piatto, c'è l'olio.<br>E prima ancora dell'olio, c'è l'oliva.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="conservazione" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Conservazione</p>
          <h2>Conservarlo bene</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Un olio prezioso merita di essere custodito.</p>
          <p>Conservare la bottiglia in un luogo fresco e asciutto, idealmente tra 12 e 18 °C, lontano dalla luce e dalle fonti di calore.</p>
          <p>Una naturale presenza di deposito può verificarsi nel tempo e non rappresenta necessariamente un difetto: può essere conseguenza della naturale decantazione.</p>
          <p>Per apprezzarne al meglio le caratteristiche, consigliamo di consumarlo entro il periodo indicato in etichetta.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="annata" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Annata 2025</p>
          <h2>Un'annata da custodire</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Ogni raccolto è diverso.</p>
          <p>La bottiglia racconta una stagione precisa, una particolare raccolta, quelle olive e quel territorio in quel determinato momento.</p>
          <p class="frase">Annata 2025.<br>Un anno che non tornerà.</p>
          <p style="margin-top:1.2em">Ed è proprio questo, in fondo, il fascino di un olio che nasce dalla terra.</p>
        </div>
      </div>
    </section>

    <section class="capitolo" id="formati" data-appare>
      <div class="capitolo-griglia">
        <div class="capitolo-titolo">
          <p class="occhiello">Formati</p>
          <h2>Portarlo a tavola</h2>
        </div>
        <div class="capitolo-testo">
          <p class="testo-grande">Non è soltanto un condimento. È il gesto finale.</p>
          <p>Quello che arriva quando tutto il resto è pronto. Il filo d'olio sul pane. Sulla verdura. Sul pesce. Sulla zuppa.</p>
          <div class="formati">
            <div class="formato">
              <?= foto('img/pagine/prodotto/bottiglia-500.webp', 'Bottiglia da 500 ml', 322, 1600, 'Bottiglia 500 ml') ?>
              <h3>Bottiglia</h3>
              <p>500 ml</p>
            </div>
            <div class="formato">
              <?= foto('img/pagine/prodotto/latta-5l.webp', 'Latta da 5 litri', 1200, 1400, 'Latta 5 L, fondo trasparente') ?>
              <h3>Latta</h3>
              <p>5 litri</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="fascia" data-appare>
    <div class="contenitore">
      <p class="frase">Il gesto più semplice per portare un pezzo di Calabria a tavola.</p>
      <div class="azioni">
        <a class="bottone" href="contatti.php#acquista">Acquista</a>
        <a class="bottone bottone-linea" href="processo.php">Il Processo</a>
      </div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
