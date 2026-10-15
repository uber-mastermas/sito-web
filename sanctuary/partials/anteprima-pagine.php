<?php
/* Solo per l'anteprima su GitHub Pages (strumenti/anteprima-php.sh):
   elenca le pagine con parametro da generare come file .html a sé. Sul server non serve. */
require __DIR__ . '/config.php';
foreach ($PROGRAMMA as $serate) {
  foreach ($serate as $s) { echo 'evento.php?e=' . $s['slug'] . "\n"; }
}
