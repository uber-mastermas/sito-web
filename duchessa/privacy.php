<?php
$titolo = 'Privacy';
$descrizione = "Informativa sul trattamento dei dati personali raccolti tramite il modulo di contatto de L'Olio della Duchessa.";
$pagina = 'privacy.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Privacy</li>
    </ol>
    <p class="occhiello">Informativa</p>
    <h1>Privacy</h1>
    <p class="testo-grande">Informativa sul trattamento dei dati personali, ai sensi dell'art. 13 del Regolamento UE 2016/679 (GDPR).</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Titolare del trattamento</h2>
        <p><?= e($SITO['ragione']) ?><br>
        <?= dato('indirizzo') ?><br>
        <?php if ($SITO['piva'] !== ''): ?>P.IVA <?= e($SITO['piva']) ?><br><?php endif; ?>
        Email: <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a></p>
      </section>

      <section>
        <h2>Quali dati raccogliamo</h2>
        <p>Quando ci scrivi tramite il modulo di contatto raccogliamo il tuo nome, il tuo indirizzo email e il testo del messaggio. Non raccogliamo altri dati e non ti chiediamo informazioni che non servono a risponderti.</p>
      </section>

      <section>
        <h2>Perché li usiamo</h2>
        <p>Usiamo questi dati solo per rispondere alla tua richiesta: informazioni sull'olio, disponibilità, formati e acquisto.</p>
        <p>La base giuridica è la tua richiesta stessa (art. 6, par. 1, lett. b del GDPR) e il consenso che esprimi inviando il modulo (art. 6, par. 1, lett. a). Non usiamo i tuoi dati per pubblicità o newsletter e non li cediamo a terzi.</p>
      </section>

      <section>
        <h2>Per quanto tempo li conserviamo</h2>
        <p>Conserviamo i messaggi per il tempo necessario a gestire la tua richiesta e un eventuale acquisto, e comunque non oltre 24 mesi dall'ultimo contatto, salvo obblighi di legge (ad esempio fiscali, in caso di vendita).</p>
      </section>

      <section>
        <h2>Chi può vederli</h2>
        <p>I dati sono trattati da noi e dal fornitore che gestisce il sito e la posta elettronica, che agisce come responsabile del trattamento e li usa solo per erogare il servizio.</p>
      </section>

      <section>
        <h2>Servizi esterni presenti nel sito</h2>
        <p>Il sito non usa cookie di profilazione né strumenti di statistica, e i caratteri tipografici sono ospitati sul sito stesso.</p>
        <p>L'unico servizio esterno è la mappa nella pagina Contatti, fornita da <strong>OpenStreetMap</strong> (OpenStreetMap Foundation): per mostrarla, il tuo browser si collega ai suoi server, che possono ricevere il tuo indirizzo IP.</p>
        <p>La mappa si carica solo dopo che hai scelto "Ho capito e accetto" nel banner. La scelta viene ricordata nel tuo browser (memoria locale, non un cookie) e puoi cancellarla in qualsiasi momento dalle impostazioni del browser.</p>
      </section>

      <section>
        <h2>I tuoi diritti</h2>
        <p>Puoi chiederci in qualsiasi momento di accedere ai tuoi dati, correggerli, cancellarli, limitarne l'uso o opporti al trattamento, e revocare il consenso dato. Basta scrivere a <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a>.</p>
        <p>Se ritieni che i tuoi dati siano trattati in modo non corretto, puoi presentare reclamo al Garante per la protezione dei dati personali (<a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">garanteprivacy.it</a>).</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
