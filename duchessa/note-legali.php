<?php
$titolo = 'Note legali';
$descrizione = "Note legali de L'Olio della Duchessa: dati del titolare del sito, Azienda Agricola Tolone di Girifalco (CZ), diritti sui contenuti e collegamenti esterni.";
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
    <p class="testo-grande">Informazioni sul titolare del sito, ai sensi dell'art. 7 del D.Lgs. 70/2003 sul commercio elettronico.</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Titolare del sito</h2>
        <p><?= e($SITO['ragione']) ?><br>
        Sede: <?= dato('sede') ?><br>
        P.IVA: <?= dato('piva') ?><br>
        Registro delle Imprese / REA: <?= dato('rea') ?></p>
        <p>Email: <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><br>
        PEC: <?= dato('pec') ?>
        <?php if ($SITO['telefono'] !== ''): ?><br>Telefono: <a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a><?php endif; ?></p>
      </section>

      <section>
        <h2>Contenuti del sito</h2>
        <p>Testi, fotografie, logo e grafica di questo sito sono protetti dal diritto d'autore. Non possono essere copiati, modificati o riutilizzati senza autorizzazione scritta.</p>
      </section>

      <section>
        <h2>Informazioni sul prodotto</h2>
        <p>Le caratteristiche e i dati analitici dell'olio si riferiscono all'annata e al campione indicati nella pagina del prodotto.</p>
        <p>Disponibilità, formati, prezzi e modalità di acquisto vengono confermati di volta in volta, rispondendo alla tua richiesta.</p>
      </section>

      <section>
        <h2>Collegamenti esterni</h2>
        <p>Il sito contiene collegamenti a servizi esterni, come Instagram e OpenStreetMap. Non siamo responsabili dei loro contenuti né del modo in cui trattano i dati: valgono le loro condizioni e le loro informative.</p>
      </section>

      <section>
        <h2>Privacy e cookie</h2>
        <p>Il trattamento dei dati personali è descritto nell'<a href="privacy.php">informativa privacy</a>; l'uso di cookie e strumenti simili nella <a href="cookie.php">cookie policy</a>.</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
