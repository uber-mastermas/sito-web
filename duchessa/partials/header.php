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
$titolo_completo = ($pagina === 'index.php') ? $SITO['nome'] . ' · Olio extravergine di Girifalco' : $titolo . ' · ' . $SITO['nome'];
$indirizzo = $SITO['url'] . '/' . ($pagina === 'index.php' ? '' : $pagina);   // indirizzo completo della pagina
$immagine  = $SITO['url'] . '/' . $SITO['immagine'];
?><!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php if ($pagina === '404.php'): ?><base href="<?= e($SITO['url']) ?>/"><?php endif; ?>
<title><?= e($titolo_completo) ?></title>
<meta name="description" content="<?= e($descrizione) ?>">
<meta name="robots" content="<?= $pagina === '404.php' ? 'noindex, follow' : 'index, follow' ?>">
<link rel="canonical" href="<?= e($indirizzo) ?>">
<meta name="theme-color" content="#3f472f">

<!-- Anteprima nei link condivisi (WhatsApp, Facebook, LinkedIn, X) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e($SITO['nome']) ?>">
<meta property="og:locale" content="it_IT">
<meta property="og:title" content="<?= e($titolo_completo) ?>">
<meta property="og:description" content="<?= e($descrizione) ?>">
<meta property="og:url" content="<?= e($indirizzo) ?>">
<meta property="og:image" content="<?= e($immagine) ?>">
<meta property="og:image:secure_url" content="<?= e($immagine) ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= e($SITO['nome']) ?> · <?= e($SITO['motto']) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($titolo_completo) ?>">
<meta name="twitter:description" content="<?= e($descrizione) ?>">
<meta name="twitter:image" content="<?= e($immagine) ?>">
<?php if ($pagina === 'index.php'): ?>
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => $SITO['nome'],
  'legalName' => $SITO['ragione'],
  'slogan' => $SITO['motto'],
  'url' => $SITO['url'] . '/',
  'logo' => $SITO['url'] . '/img/logo/favicon.png',
  'image' => $immagine,
  'email' => $SITO['email'],
  'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Girifalco', 'addressRegion' => 'CZ', 'addressCountry' => 'IT'],
  'sameAs' => array_values(array_filter([$SITO['instagram']])),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>

</script>
<?php elseif ($pagina !== '404.php'): ?>
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $SITO['url'] . '/'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => $titolo, 'item' => $indirizzo],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>

</script>
<?php endif; ?>
<link rel="icon" href="favicon.ico" sizes="32x32">
<link rel="icon" href="img/logo/logo-duchessa.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="img/logo/apple-touch-icon.png">
<link rel="manifest" href="site.webmanifest">
<link rel="preload" href="fonts/cormorant-garamond-latin-500-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/jost-latin-300-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="css/style.css?v=<?= $V ?>">
<script src="js/layout.js?v=<?= $V ?>" defer></script>
</head>
<body class="pagina-<?= e(basename($pagina, '.php')) ?>">
<a class="salta" href="#contenuto">Vai al contenuto</a>

<header class="site-header">
  <div class="barra">
    <a class="logo" href="./" aria-label="<?= e($SITO['nome']) ?> — Home">
      <img src="img/logo/logo-duchessa.svg" width="263" height="351" alt="">
      <span>L'Olio della<br>Duchessa</span>
    </a>

    <nav id="menu-principale" class="nav" aria-label="Menu principale">
      <ul class="menu">
        <?php foreach ($voci as $file => $nome): ?>
        <li><a href="<?= $file === 'index.php' ? './' : $file ?>"<?= $file === $pagina ? ' aria-current="page"' : '' ?>><?= e($nome) ?></a></li>
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
