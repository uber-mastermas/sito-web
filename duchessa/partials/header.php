<?php
/* HEADER COMUNE — <head>, logo, menu e pulsante ACQUISTA: vale per tutte le pagine.
   Ogni pagina imposta prima: $titolo, $descrizione, $pagina (nome del file) */
require_once __DIR__ . '/funzioni.php';

$voci = [
  'index.php'      => 'Home',
  'territorio.php' => 'Il Territorio',
  'azienda.php'    => "L'Azienda",
  'processo.php'   => 'Il Processo',
  'prodotto.php'   => 'Il Prodotto',
  'contatti.php'   => 'Contatti',
];
$pagina = $pagina ?? basename($_SERVER['PHP_SELF']);
$titolo_completo = ($pagina === 'index.php') ? $SITO['nome'] . ' · Olio Extra Vergine d\'Oliva da Girifalco' : $titolo . ' · ' . $SITO['nome'];
?><!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($titolo_completo) ?></title>
<meta name="description" content="<?= e($descrizione) ?>">
<meta name="theme-color" content="#3f472f">
<link rel="icon" href="img/logo/favicon.png" type="image/png">
<link rel="icon" href="img/logo/logo-duchessa.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="img/logo/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500&display=swap">
<link rel="stylesheet" href="css/style.css?v=<?= $V ?>">
<script src="js/layout.js?v=<?= $V ?>" defer></script>
</head>
<body class="pagina-<?= e(basename($pagina, '.php')) ?>">
<a class="salta" href="#contenuto">Vai al contenuto</a>

<header class="site-header">
  <div class="barra">
    <a class="logo" href="index.php" aria-label="<?= e($SITO['nome']) ?> — Home">
      <img src="img/logo/logo-duchessa.svg" width="263" height="351" alt="">
      <span>L'Olio della<br>Duchessa</span>
    </a>

    <nav id="menu-principale" class="nav" aria-label="Menu principale">
      <ul class="menu">
        <?php foreach ($voci as $file => $nome): ?>
        <li><a href="<?= $file ?>"<?= $file === $pagina ? ' aria-current="page"' : '' ?>><?= e($nome) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <a class="bottone bottone-acquista" href="contatti.php#acquista">Acquista</a>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principale">
      <span class="menu-toggle-icona" aria-hidden="true"></span>
      <span class="solo-lettori">Apri il menu</span>
    </button>
  </div>
</header>

<main id="contenuto">
