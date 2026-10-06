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
   $opz: 'classe', 'subito' (true per la prima immagine della pagina),
         'mobile' (versione verticale usata sui telefoni, sotto i 700px) */
function foto($file, $alt, $w, $h, $soggetto = '', $opz = []) {
  $classe = isset($opz['classe']) ? ' ' . $opz['classe'] : '';
  $percorso = __DIR__ . '/../' . $file;
  if (is_file($percorso)) {
    $carica = !empty($opz['subito']) ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"';
    $versione = '?v=' . filemtime($percorso);   // foto sostituita = indirizzo nuovo, niente cache vecchia
    $img = '<img class="foto' . $classe . '" src="' . e($file) . $versione . '" width="' . (int)$w . '" height="' . (int)$h . '" alt="' . e($alt) . '" ' . $carica . '>';
    $mobile = $opz['mobile'] ?? '';
    if ($mobile !== '' && is_file(__DIR__ . '/../' . $mobile)) {
      return '<picture><source media="(max-width: 700px)" srcset="' . e($mobile) . '?v=' . filemtime(__DIR__ . '/../' . $mobile) . '">' . $img . '</picture>';
    }
    return $img;
  }
  return '<div class="foto segnaposto' . $classe . '" style="--ar:' . (int)$w . ' / ' . (int)$h . '" role="img" aria-label="' . e($alt) . '">'
       . '<span><strong>' . e($soggetto ?: $alt) . '</strong>'
       . '<code>' . e($file) . '</code>'
       . '<small>' . (int)$w . ' × ' . (int)$h . ' px</small></span></div>';
}
