<?php
/* PAGINA DELL'EVENTO — in WordPress sarà il modello dell'articolo singolo (single.php):
   titolo, data, ora, artisti, immagine in evidenza, testo, sede. Qui i dati vengono da $PROGRAMMA. */
require_once 'partials/funzioni.php';

$evento = null; $chiave_sede = '';
$cercato = $_GET['e'] ?? (array_values($PROGRAMMA)[0][0]['slug'] ?? '');   // senza parametro: il primo evento in programma
foreach ($PROGRAMMA as $k => $serate) {
  foreach ($serate as $s) {
    if ($s['slug'] === $cercato) { $evento = $s; $chiave_sede = $k; }
  }
}
if (!$evento) { http_response_code(404); include '404.php'; exit; }

$sede = $SEDI[$chiave_sede];
$d = strtotime($evento['data']);
$titolo = $evento['titolo'] . ' · ' . $sede['nome'];
$descrizione = $evento['titolo'] . ' at The Sanctuary ' . $sede['nome'] . ', ' . date('j F Y', $d) . ', ' . $evento['ora'] . '. ' . $evento['artisti'] . '.';
$pagina = 'evento.php';
$noindex = true;   // eventi di esempio: fuori da Google
include 'partials/header.php';
?>

  <article class="evento">
    <div class="contenitore testata">
      <ol class="briciole">
        <li><a href="./">Home</a></li>
        <li><a href="<?= e($sede['pagina']) ?>"><?= e($sede['nome']) ?></a></li>
        <li><a href="<?= e($sede['pagina']) ?>#music">Music program</a></li>
        <li aria-current="page"><?= e($evento['titolo']) ?></li>
      </ol>
      <p class="kicker"><time datetime="<?= e($evento['data']) ?>"><?= e($evento['giorno']) ?> · <?= date('j F Y', $d) ?></time> · <?= e($evento['ora']) ?></p>
      <h1><?= e($evento['titolo']) ?></h1>
      <p class="testo-grande"><?= e($evento['artisti']) ?></p>
    </div>

    <div class="contenitore evento-griglia">
      <div class="evento-foto"><?= foto($evento['foto'], $evento['titolo'] . ' · The Sanctuary ' . $sede['nome'], 1440, 1800, 'Immagine dell\'evento') ?></div>
      <div class="evento-testo">
        <p class="testo-grande"><?= e($evento['testo']) ?></p>
        <dl class="orari-blocco">
          <div><dt>Date</dt><dd><?= date('d.m.Y', $d) ?></dd></div>
          <div><dt>Time</dt><dd><?= e($evento['ora']) ?></dd></div>
          <div><dt>Line-up</dt><dd><?= e($evento['artisti']) ?></dd></div>
          <div><dt>Where</dt><dd>The Sanctuary <?= e($sede['nome']) ?> · Club</dd></div>
        </dl>
        <div class="azioni">
          <a class="bottone" href="<?= e($sede['pagina']) ?>?space=club#book">Book a table</a>
          <a class="bottone bottone-linea" href="<?= e($sede['pagina']) ?>#music">Full program</a>
        </div>
      </div>
    </div>
  </article>

  <div class="fine-pagina"></div>

<?php include 'partials/footer.php'; ?>
