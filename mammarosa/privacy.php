<?php
$titolo = 'Privacy';
$descrizione = "Come l'Hotel Mamma Rosa tratta i dati di chi chiede informazioni, prenota online e soggiorna da noi.";
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
    <p class="testo-grande">Noi di Mamma Rosa abbiamo a cuore la tua privacy. Qui ti spieghiamo quali dati raccogliamo, perché e per quanto tempo, come previsto dall'art. 13 del Regolamento UE 2016/679 (GDPR).</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Chi tratta i tuoi dati</h2>
        <p><?= e($SITO['ragione']) ?><br>
        <?= dato('sede') ?><br>
        <?php if ($SITO['piva'] !== ''): ?>P.IVA e C.F. <?= e($SITO['piva']) ?><br><?php endif; ?>
        Email: <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><br>
        <?php if ($SITO['pec'] !== ''): ?>PEC: <?= e($SITO['pec']) ?><br><?php endif; ?>
        Telefono: <a href="tel:+39<?= e(preg_replace('/[^0-9]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a></p>
      </section>

      <section>
        <h2>Quali dati raccogliamo</h2>
        <p><strong>Se ci chiedi informazioni</strong>, con il modulo del sito, per email, al telefono o su WhatsApp: nome, email, telefono, le date del soggiorno, il numero di adulti e di bambini e quello che ci scrivi.</p>
        <p><strong>Se prenoti online</strong>: nome, email, telefono, date, camere scelte, numero ed età degli ospiti, trattamento e richieste particolari. Il pagamento con carta passa da <strong>Stripe</strong>: i dati della carta li inserisci direttamente sul sistema di Stripe e noi non li vediamo.</p>
        <p><strong>Quando arrivi in albergo</strong>: i documenti d'identità degli ospiti, che la legge ci obbliga a registrare e a comunicare alla Questura (portale Alloggiati Web).</p>
        <p><strong>Quando visiti il sito</strong>: se ci dai il consenso, dati statistici anonimi sulle visite, raccolti con Google Analytics. I dettagli sono nella <a href="cookie.php">Cookie policy</a>.</p>
      </section>

      <section>
        <h2>Perché li usiamo</h2>
        <ul>
          <li>Per rispondere alle tue richieste e mandarti un preventivo: è la tua stessa richiesta a permettercelo (art. 6, par. 1, lett. b del GDPR).</li>
          <li>Per gestire la prenotazione e il soggiorno, incassare il pagamento e mandarti le email di conferma: è il contratto fra noi (art. 6, par. 1, lett. b).</li>
          <li>Per rispettare gli obblighi di legge, fiscali e di pubblica sicurezza (art. 6, par. 1, lett. c).</li>
          <li>Per capire, con le statistiche, come viene usato il sito e migliorarlo: solo con il tuo consenso (art. 6, par. 1, lett. a), che puoi ritirare quando vuoi.</li>
        </ul>
        <p>Non usiamo i tuoi dati per pubblicità e non li vendiamo a nessuno. Ti scriviamo solo per la tua richiesta o per il tuo soggiorno.</p>
      </section>

      <section>
        <h2>Per quanto tempo li conserviamo</h2>
        <ul>
          <li>Le richieste di informazioni che non diventano una prenotazione: al massimo 24 mesi dall'ultimo contatto.</li>
          <li>Le prenotazioni e le fatture: 10 anni, come prevede la legge per i documenti fiscali.</li>
          <li>I documenti registrati all'arrivo: per il tempo previsto dalle norme di pubblica sicurezza.</li>
          <li>I dati statistici: al massimo 14 mesi.</li>
        </ul>
      </section>

      <section>
        <h2>Chi può vederli</h2>
        <p>Noi e il nostro personale, per quello che serve al suo lavoro. Poi alcuni fornitori, che trattano i dati per nostro conto e solo per il servizio che ci danno:</p>
        <ul>
          <li>chi gestisce il sito, la prenotazione online e la posta elettronica;</li>
          <li><strong>Stripe</strong>, per i pagamenti con carta;</li>
          <li><strong>Google</strong>, per le statistiche del sito, solo se hai dato il consenso;</li>
          <li>il nostro commercialista, per gli obblighi fiscali.</li>
        </ul>
        <p>Per legge comunichiamo i dati degli ospiti alla Questura. Stripe e Google possono trattare i dati anche negli Stati Uniti, con le garanzie del quadro europeo EU-US Data Privacy Framework.</p>
      </section>

      <section>
        <h2>Servizi esterni presenti nel sito</h2>
        <p>Il sito non usa cookie di profilazione. Con il tuo consenso usa cookie di statistica (Google Analytics), per capire come viene visitato e migliorarlo.</p>
        <p>La mappa nella pagina Contatti è fornita da <strong>OpenStreetMap</strong> e si carica solo se accetti nel banner: per mostrarla, il tuo browser si collega ai suoi server, che possono ricevere il tuo indirizzo IP.</p>
        <p>I collegamenti a <strong>WhatsApp</strong>, <strong>Instagram</strong> e <strong>Facebook</strong> sono semplici link: non inviano dati finché non li apri. Se ci scrivi su WhatsApp, il messaggio passa anche da WhatsApp (Meta), secondo la sua informativa.</p>
      </section>

      <section>
        <h2>I tuoi diritti</h2>
        <p>Puoi chiederci in qualsiasi momento di vedere i tuoi dati, correggerli, cancellarli, limitarne l'uso, riceverli in un formato leggibile o opporti al trattamento. Puoi anche ritirare il consenso alle statistiche dalla <a href="cookie.php">Cookie policy</a>. Basta scrivere a <a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a>.</p>
        <p>Se pensi che i tuoi dati non siano trattati correttamente, puoi presentare reclamo al Garante per la protezione dei dati personali (<a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">garanteprivacy.it</a>).</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
