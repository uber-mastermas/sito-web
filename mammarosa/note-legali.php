<?php
$titolo = 'Note legali';
$descrizione = "Note legali dell'Hotel Mamma Rosa: dati della società Mamma Rosa 2000 S.r.l., diritti su testi e foto, prenotazioni e collegamenti esterni.";
$pagina = 'note-legali.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Note legali</li>
    </ol>
    <p class="occhiello">Informazioni legali</p>
    <h1>Note legali</h1>
    <p class="testo-grande">Chi siamo, per la legge: i dati della società che gestisce l'albergo e questo sito, come previsto dall'art. 7 del D.Lgs. 70/2003 sul commercio elettronico.</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Titolare del sito</h2>
        <p><?= e($SITO['ragione']) ?><br>
        Sede: <?= dato('sede') ?><br>
        P.IVA e C.F.: <?= dato('piva') ?><br>
        REA: <?= dato('rea') ?></p>
        <p>Email: <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><br>
        PEC: <?= dato('pec') ?><br>
        Telefono: <a href="tel:+39<?= e(preg_replace('/[^0-9]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a></p>
      </section>

      <section>
        <h2>Testi e fotografie</h2>
        <p>Testi, fotografie, logo e grafica di questo sito appartengono a <?= e($SITO['ragione']) ?> o sono usati con il permesso dei loro autori. Non possono essere copiati o riutilizzati senza la nostra autorizzazione scritta.</p>
      </section>

      <section>
        <h2>Prezzi e prenotazioni</h2>
        <p>Le tariffe sono a persona e comprendono l'IVA; non c'è tassa di soggiorno. Il prezzo che vale è quello indicato al momento della prenotazione.</p>
        <p>Le regole per prenotare, cambiare data o annullare sono nelle Condizioni di prenotazione, che trovi nella pagina Prenota.</p>
      </section>

      <section>
        <h2>Collegamenti esterni</h2>
        <p>Il sito contiene collegamenti a servizi esterni, come WhatsApp, Instagram, Facebook, Google e OpenStreetMap. Non siamo responsabili dei loro contenuti né del modo in cui trattano i dati: valgono le loro condizioni e le loro informative.</p>
      </section>

      <section>
        <h2>Privacy e cookie</h2>
        <p>Come trattiamo i tuoi dati è spiegato nell'<a href="privacy.php">informativa privacy</a>; l'uso dei cookie nella <a href="cookie.php">Cookie policy</a>.</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
