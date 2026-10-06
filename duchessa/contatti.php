<?php
$titolo = 'Contatti';
$descrizione = "Scrivici per informazioni su L'Olio della Duchessa: annata, disponibilità, formati e acquisto.";
$pagina = 'contatti.php';
require_once 'partials/funzioni.php';

/* ---------- Invio del modulo ----------
   Funziona sul server (SiteGround): usa mail() di PHP.
   L'indirizzo di destinazione si imposta in partials/config.php ('email_modulo'). */
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
    $oggetto = '=?UTF-8?B?' . base64_encode('Richiesta dal sito — ' . $nome) . '?=';
    $corpo = "Nome: {$nome}\nEmail: {$valori['email']}\n\nMessaggio:\n{$valori['messaggio']}\n";
    $mittente = 'noreply@' . preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? 'localhost');
    $intestazioni = "From: {$SITO['nome']} <{$mittente}>\r\n"
                  . "Reply-To: {$valori['email']}\r\n"
                  . "Content-Type: text/plain; charset=UTF-8\r\n";
    if (@mail($SITO['email_modulo'], $oggetto, $corpo, $intestazioni)) {
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
      <li><a href="index.php">Home</a></li>
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
            <span>Acconsento al trattamento dei dati per ricevere una risposta. <span class="da-inserire">link all'informativa privacy da inserire</span></span>
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
          <li><?php if ($SITO['telefono'] !== ''): ?><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a><?php else: ?>Tel. <?= dato('telefono') ?><?php endif; ?></li>
        </ul>
        <div class="recapiti-foto">
          <?= foto('img/pagine/contatti/assaggio.webp', "L'olio versato nei bicchieri da degustazione, all'aperto", 1200, 1600, 'Immagine facoltativa') ?>
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
        <div class="formato"><h3>Bottiglia</h3><p>500 ml</p></div>
        <div class="formato"><h3>Latta</h3><p>5 litri</p></div>
      </div>
      <div class="azioni"><a class="bottone bottone-chiaro" href="#scrivici">Scrivici per acquistare</a></div>
    </div>
  </section>

<?php include 'partials/footer.php'; ?>
