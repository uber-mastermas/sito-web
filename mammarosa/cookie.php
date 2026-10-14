<?php
$titolo = 'Cookie policy';
$descrizione = "Come il sito dell'Hotel Mamma Rosa usa i cookie: tecnici per la prenotazione, di statistica solo con il tuo consenso, nessuno di profilazione.";
$pagina = 'cookie.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Cookie policy</li>
    </ol>
    <p class="occhiello">Informativa</p>
    <h1>Cookie policy</h1>
    <p class="testo-grande">Quali cookie usa questo sito, a cosa servono e come puoi cambiare le tue scelte, secondo le Linee guida del Garante per la protezione dei dati personali del 10 giugno 2021.</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>In breve</h2>
        <p>Non usiamo cookie di profilazione né pubblicità. Usiamo i cookie tecnici che servono a far funzionare il sito e la prenotazione, e, solo se ci dai il consenso, cookie di statistica e la mappa di OpenStreetMap.</p>
      </section>

      <section>
        <h2>Che cosa sono i cookie</h2>
        <p>Sono piccoli file che un sito salva nel browser di chi lo visita. Alcuni strumenti, come la memoria locale del browser, funzionano in modo simile e seguono le stesse regole.</p>
      </section>

      <section>
        <h2>Cookie tecnici</h2>
        <p>Servono a far funzionare il sito e non richiedono il consenso.</p>
        <ul>
          <li><strong>La tua scelta sul banner</strong>: il browser la ricorda nella sua memoria locale, con la voce <code>mammarosa-privacy-v1</code>, per non mostrarti il banner a ogni pagina. Non contiene dati personali e resta finché non la cancelli.</li>
          <li><strong>La prenotazione online</strong>: mentre prenoti, un cookie di sessione ricorda le date e le camere scelte. Si cancella quando chiudi il browser.</li>
          <li><strong>Il pagamento</strong>: nella pagina di pagamento, Stripe usa cookie propri per proteggere la transazione dalle frodi, come descritto nella sua <a href="https://stripe.com/it/privacy" target="_blank" rel="noopener">informativa</a>.</li>
        </ul>
      </section>

      <section>
        <h2>Cookie di statistica</h2>
        <p>Solo se scegli "Ho capito e accetto", usiamo <strong>Google Analytics</strong> (Google Ireland Ltd.) per sapere quante persone visitano il sito, quali pagine leggono e da dove arrivano. Ci serve a capire cosa funziona e cosa migliorare.</p>
        <ul>
          <li>Cookie <code>_ga</code> e <code>_ga_*</code>: distinguono le visite, durata fino a 2 anni.</li>
          <li>I dati ci arrivano in forma aggregata e anonima: non sappiamo chi sei.</li>
          <li>Google li conserva al massimo 14 mesi e li può trattare anche negli Stati Uniti, con le garanzie dell'EU-US Data Privacy Framework (<a href="https://policies.google.com/privacy?hl=it" target="_blank" rel="noopener">informativa di Google</a>).</li>
        </ul>
      </section>

      <section>
        <h2>La mappa</h2>
        <p>La mappa nella pagina Contatti è fornita da <strong>OpenStreetMap</strong> (OpenStreetMap Foundation) e si carica solo dopo il tuo consenso. Quando è visibile, il tuo browser si collega ai server di OpenStreetMap, che possono ricevere il tuo indirizzo IP, come descritto nella loro <a href="https://osmfoundation.org/wiki/Privacy_Policy" target="_blank" rel="noopener">informativa</a>.</p>
      </section>

      <section>
        <h2>Le tue scelte</h2>
        <p>Se scegli "Non accetto", il sito funziona lo stesso: non attiviamo le statistiche e non carichiamo la mappa, che puoi sempre aprire con il pulsante "Come arrivare".</p>
        <p>Puoi cambiare idea quando vuoi: con questo pulsante il banner comparirà di nuovo.</p>
        <p><button class="bottone bottone-linea" type="button" data-rivedi-privacy>Rivedi le tue scelte</button></p>
        <p>Puoi anche bloccare o cancellare i cookie dalle impostazioni del tuo browser. Per tutto il resto leggi l'<a href="privacy.php">informativa privacy</a>.</p>
      </section>

      <p class="nota">Ultimo aggiornamento: ottobre 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
