<?php
$titolo = 'Contatti';
$descrizione = "Scrivici per informazioni su L'Olio della Duchessa, olio extravergine di Girifalco: annata, disponibilità, formati da 500 ml e 5 litri, acquisto.";
$pagina = 'contatti.php';
require_once 'partials/funzioni.php';

/* ---------- Invio del modulo ----------
   Funziona sul server (SiteGround). Mittente: account info@ (vedi partials/config.php).
   Se c'è la password SMTP invia tramite mail.oliodelladuchessa.com, altrimenti usa mail() di PHP. */
$esito = null; $errore = false;
$valori = ['nome' => '', 'email' => '', 'messaggio' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($valori as $k => $_) { $valori[$k] = trim((string)($_POST[$k] ?? '')); }
  $trappola = trim((string)($_POST['sito'] ?? ''));          // campo nascosto contro lo spam
  $consenso = isset($_POST['consenso']);

  if ($trappola !== '') {
    $esito = 'Grazie, il messaggio è stato inviato.';          // lo spam riceve un finto ok
  } elseif ($valori['nome'] === '' || !filter_var($valori['email'], FILTER_VALIDATE_EMAIL) || $valori['messaggio'] === '' || !$consenso) {
    $esito = 'Controlla i campi: nome, un indirizzo email valido, il messaggio e il consenso sono necessari.';
    $errore = true;
  } elseif ($SITO['email_modulo'] === '') {
    $esito = "Modulo non ancora collegato: manca l'indirizzo di destinazione in partials/config.php. Il messaggio non è stato inviato.";
    $errore = true;
  } else {
    $nome = str_replace(["\r", "\n"], ' ', $valori['nome']);
    $oggetto = 'Richiesta dal sito — ' . $nome;
    $corpo = "Nome: {$nome}\nEmail: {$valori['email']}\n\nMessaggio:\n{$valori['messaggio']}\n";
    if (invia_email($SITO['email_modulo'], $oggetto, $corpo, $valori['email'])) {
      $esito = 'Grazie, il messaggio è stato inviato. Ti risponderemo al più presto.';
      $valori = ['nome' => '', 'email' => '', 'messaggio' => ''];
    } else {
      $esito = "Non è stato possibile inviare il messaggio. Riprova più tardi o scrivici direttamente.";
      $errore = true;
    }
  }
}

include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Contatti</li>
    </ol>
    <p class="occhiello">Contatti</p>
    <h1>Entriamo in contatto</h1>
    <p class="testo-grande">Per informazioni sull'olio, disponibilità, formati e acquisto, puoi scriverci.</p>
    <p>Saremo felici di raccontarti l'annata, la produzione e tutto ciò che c'è dietro una bottiglia de L'Olio della Duchessa.</p>
  </div>

  <div class="contenitore">
    <div class="contatti-griglia">
      <section id="scrivici" aria-labelledby="titolo-modulo">
        <p class="occhiello" id="titolo-modulo">Scrivici</p>
        <form class="modulo" method="post" action="contatti.php#scrivici">
          <?php if ($esito): ?>
          <p class="esito<?= $errore ? ' errore' : '' ?>" role="status"><?= e($esito) ?></p>
          <?php endif; ?>
          <div class="campo">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" autocomplete="name" required value="<?= e($valori['nome']) ?>">
          </div>
          <div class="campo">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required value="<?= e($valori['email']) ?>">
          </div>
          <div class="campo">
            <label for="messaggio">Messaggio</label>
            <textarea id="messaggio" name="messaggio" required><?= e($valori['messaggio']) ?></textarea>
          </div>
          <div class="trappola" aria-hidden="true">
            <label for="sito">Lascia vuoto</label>
            <input id="sito" name="sito" type="text" tabindex="-1" autocomplete="off">
          </div>
          <label class="consenso">
            <input type="checkbox" name="consenso" required>
            <span>Acconsento al trattamento dei dati per ricevere una risposta. Leggi l'<a href="privacy.php" target="_blank">informativa privacy</a>.</span>
          </label>
          <div><button class="bottone" type="submit">Invia</button></div>
        </form>
      </section>

      <aside class="recapiti">
        <h2>L'Olio della Duchessa</h2>
        <p class="motto"><?= e($SITO['motto']) ?></p>
        <p>Girifalco<br>Calabria · Italia</p>
        <ul>
          <li><?php if ($SITO['email'] !== ''): ?><a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><?php else: ?>Email: <?= dato('email') ?><?php endif; ?></li>
          <?php if ($SITO['telefono'] !== ''): ?><li><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a></li><?php endif; ?>
        </ul>
        <div class="recapiti-foto">
          <?= foto('img/pagine/contatti/olio-bicchieri-degustazione-aperto.webp', "L'olio versato nei bicchieri da degustazione, all'aperto", 1200, 1600, 'Immagine facoltativa') ?>
        </div>
      </aside>
    </div>
  </div>

  <section class="acquista-blocco" id="acquista">
    <div class="contenitore">
      <p class="occhiello centrato" style="justify-content:center">Acquista</p>
      <h2>Vuoi portarlo sulla tua tavola?</h2>
      <p>Scrivici indicando formato e quantità: ti risponderemo con disponibilità e modalità di acquisto.</p>
      <div class="formati">
        <div class="formato">
          <?= foto('img/pagine/prodotto/bottiglia-olio-duchessa-500ml.webp', 'Bottiglia da 500 ml', 322, 1600, 'Bottiglia 500 ml') ?>
          <h3>Bottiglia</h3><p>500 ml</p>
        </div>
        <div class="formato">
          <?= foto('img/pagine/prodotto/latta-olio-duchessa-5l.webp', 'Latta da 5 litri', 827, 1600, 'Latta 5 L') ?>
          <h3>Latta</h3><p>5 litri</p>
        </div>
      </div>
      <div class="azioni"><a class="bottone bottone-chiaro" href="#scrivici">Scrivici per acquistare</a></div>
    </div>
  </section>

  <section class="mappa" aria-label="Mappa di Girifalco">
    <iframe data-src="https://www.openstreetmap.org/export/embed.html?bbox=15.98000%2C38.64000%2C16.90000%2C39.00000&amp;layer=mapnik&amp;marker=38.82361%2C16.44028"
            title="Mappa di Girifalco, Calabria" loading="lazy" referrerpolicy="no-referrer"></iframe>
    <div class="mappa-etichetta">
      <p class="luogo">Girifalco · tra Tirreno e Ionio</p>
      <a href="https://www.openstreetmap.org/?mlat=38.82361&amp;mlon=16.44028#map=10/38.82361/16.44028" target="_blank" rel="noopener">Apri la mappa</a>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
