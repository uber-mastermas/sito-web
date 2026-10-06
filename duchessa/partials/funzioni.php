<?php
/* ==========================================================
   Funzioni comuni
   ========================================================== */

require_once __DIR__ . '/config.php';

/* Testo sicuro per l'HTML */
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, 'UTF-8'); }

/* Dato del sito, oppure "da inserire" se vuoto */
function dato($chiave) {
  global $SITO;
  $v = $SITO[$chiave] ?? '';
  return $v !== '' ? e($v) : '<span class="da-inserire">da inserire</span>';
}

/* Fotografia: se il file esiste mostra l'immagine,
   altrimenti un segnaposto con nome del file e misure da shot list.
   Basta caricare il file con quel nome nella cartella indicata
   e la foto compare da sola, senza toccare il codice.
   $opz: 'classe', 'subito' (true per la prima immagine della pagina) */
function foto($file, $alt, $w, $h, $soggetto = '', $opz = []) {
  $classe = isset($opz['classe']) ? ' ' . $opz['classe'] : '';
  $percorso = __DIR__ . '/../' . $file;
  if (is_file($percorso)) {
    $carica = !empty($opz['subito']) ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"';
    return '<img class="foto' . $classe . '" src="' . e($file) . '" width="' . (int)$w . '" height="' . (int)$h . '" alt="' . e($alt) . '" ' . $carica . '>';
  }
  return '<div class="foto segnaposto' . $classe . '" style="--ar:' . (int)$w . ' / ' . (int)$h . '" role="img" aria-label="' . e($alt) . '">'
       . '<span><strong>' . e($soggetto ?: $alt) . '</strong>'
       . '<code>' . e($file) . '</code>'
       . '<small>' . (int)$w . ' × ' . (int)$h . ' px</small></span></div>';
}
