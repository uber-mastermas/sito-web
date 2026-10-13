<?php
$titolo = 'Privacy';
$descrizione = "Informativa sul trattamento dei dati personali raccolti dal sito dell'Hotel Mamma Rosa: richieste di informazioni e disponibilità.";
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
        <?= dato('sede') ?><br>
        <?php if ($SITO['piva'] !== ''): ?>P.IVA e C.F. <?= e($SITO['piva']) ?><br><?php endif; ?>
        Email: <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><br>
        <?php if ($SITO['pec'] !== ''): ?>PEC: <?= e($SITO['pec']) ?><br><?php endif; ?>
        Telefono: <a href="tel:+39<?= e(preg_replace('/[^0-9]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a></p>
      </section>

      <section>
        <h2>Quali dati raccogliamo</h2>
        <p>Quando ci chiedi informazioni o disponibilità tramite il modulo del sito raccogliamo il tuo nome, l'indirizzo email, il numero di telefono se decidi di indicarlo, le date del soggiorno, il numero di adulti e di bambini e il testo del tuo messaggio.</p>
        <p>Non ti chiediamo altro: non servono dati di pagamento né documenti per una semplice richiesta di informazioni.</p>
      </section>

      <section>
        <h2>Perché li usiamo</h2>
        <p>Usiamo questi dati solo per rispondere alla tua richiesta: verificare la disponibilità delle camere, mandarti un preventivo e, se decidi di prenotare, organizzare il tuo soggiorno.</p>
        <p>La base giuridica è la tua richiesta stessa, cioè l'esecuzione di misure precontrattuali (art. 6, par. 1, lett. b del GDPR). Non usiamo i tuoi dati per pubblicità o newsletter e non li cediamo a terzi.</p>
      </section>

      <section>
        <h2>Per quanto tempo li conserviamo</h2>
        <p>Conserviamo le richieste per il tempo necessario a risponderti e a gestire un'eventuale prenotazione, e comunque non oltre 24 mesi dall'ultimo contatto. I dati legati a un soggiorno effettivo sono conservati per il tempo previsto dagli obblighi di legge, ad esempio fiscali.</p>
      </section>

      <section>
        <h2>Chi può vederli</h2>
        <p>I dati sono trattati da noi e dal fornitore che gestisce il sito e la posta elettronica, che agisce come responsabile del trattamento e li usa solo per far funzionare il servizio.</p>
      </section>

      <section>
        <h2>Servizi esterni presenti nel sito</h2>
        <p>Il sito non usa cookie di profilazione né strumenti di statistica, e i caratteri tipografici sono ospitati sul sito stesso.</p>
        <p>La mappa nella pagina Contatti è fornita da <strong>OpenStreetMap</strong> (OpenStreetMap Foundation): per mostrarla, il tuo browser si collega ai suoi server, che possono ricevere il tuo indirizzo IP. La mappa si carica solo dopo che hai scelto "Ho capito e accetto" nel banner. La scelta viene ricordata nel tuo browser (memoria locale, non un cookie) e puoi cancellarla in qualsiasi momento dalle impostazioni del browser.</p>
        <p>I collegamenti a <strong>WhatsApp</strong>, <strong>Instagram</strong> e <strong>Facebook</strong> sono semplici link: nessun dato viene inviato a questi servizi finché non li apri. Se ci scrivi su WhatsApp, il messaggio è trattato anche da WhatsApp (Meta) secondo la sua informativa.</p>
      </section>

      <section>
        <h2>I tuoi diritti</h2>
        <p>Puoi chiederci in qualsiasi momento di accedere ai tuoi dati, correggerli, cancellarli, limitarne l'uso o opporti al trattamento. Basta scrivere a <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a>.</p>
        <p>Se ritieni che i tuoi dati siano trattati in modo non corretto, puoi presentare reclamo al Garante per la protezione dei dati personali (<a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">garanteprivacy.it</a>).</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
