<?php
/* HEADER COMUNE — <head>, logo, menu con le sedi, pulsante RESERVE e pannello di prenotazione.
   Ogni pagina imposta prima: $titolo, $descrizione, $pagina (nome del file)
   e, se si apre con una foto o un video a tutto schermo, $con_hero = true
   (l'header diventa trasparente sopra l'immagine). */
require_once __DIR__ . '/funzioni.php';

/* Sezioni interne delle pagine delle sedi (ancore). Le sedi senza pagina completa non hanno sottomenu. */
$SEZIONI = [
  'roma'   => ['restaurant' => 'Restaurant', 'pool' => 'Pool Area', 'wellness' => 'Yoga & Massage', 'club' => 'Club & Music', 'venue' => 'Private events', 'book' => 'Contact & booking'],
  'milano' => ['restaurant' => 'Restaurant', 'pool' => 'Pool Area', 'wellness' => 'Yoga & Pilates', 'club' => 'Club & Music', 'book' => 'Contact & booking'],
];

$pagina = $pagina ?? basename($_SERVER['PHP_SELF']);
$con_hero = $con_hero ?? false;
$titolo_completo = ($pagina === 'index.php') ? $SITO['nome'] . ' · Rome, Milan, Porto Cervo, Itria Valley' : $titolo . ' · ' . $SITO['nome_breve'];
$indirizzo = $SITO['url'] . '/' . ($pagina === 'index.php' ? '' : $pagina);   // indirizzo completo della pagina
$immagine  = $SITO['url'] . '/' . $SITO['immagine'];

/* Link di uno spazio nel pannello Reserve: modulo della sede se c'è, altrimenti la pagina della sede */
function link_spazio($sede, $chiave) {
  if (!empty($sede['modulo'])) { return $sede['pagina'] . '?space=' . $chiave . '#book'; }
  return $sede['pagina'] . '#contact';
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php if ($pagina === '404.php'): ?><base href="<?= e($SITO['url']) ?>/"><?php endif; ?>
<title><?= e($titolo_completo) ?></title>
<meta name="description" content="<?= e($descrizione) ?>">
<meta name="robots" content="<?= $pagina === '404.php' ? 'noindex, follow' : 'index, follow' ?>">
<link rel="canonical" href="<?= e($indirizzo) ?>">
<meta name="theme-color" content="#211e1c">

<!-- Anteprima nei link condivisi (WhatsApp, Facebook, LinkedIn, X) -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e($SITO['nome']) ?>">
<meta property="og:locale" content="en_GB">
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
  'slogan' => $SITO['motto'],
  'url' => $SITO['url'] . '/',
  'logo' => $SITO['url'] . '/img/logo/icona-512.png',
  'image' => $immagine,
  'sameAs' => array_values(array_filter([$SITO['instagram']])),
  'subOrganization' => array_map(function ($s) use ($SITO) {
    return ['@type' => 'Restaurant', 'name' => $SITO['nome_breve'] . ' ' . $s['nome'], 'url' => $SITO['url'] . '/' . $s['pagina'], 'telephone' => $s['telefono'], 'address' => $s['indirizzo']];
  }, array_values($SEDI)),
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
<link rel="icon" href="img/logo/simbolo-sanctuary.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="img/logo/apple-touch-icon.png">
<link rel="manifest" href="site.webmanifest">
<link rel="preload" href="fonts/instrument-serif-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/schibsted-grotesk-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="css/style.css?v=<?= $V ?>">
<script src="js/layout.js?v=<?= $V ?>" defer></script>
</head>
<body class="pagina-<?= e(basename($pagina, '.php')) ?><?= $con_hero ? ' con-hero' : '' ?>">
<a class="salta" href="#contenuto">Skip to content</a>

<header class="site-header">
  <div class="barra">
    <a class="logo" href="./" aria-label="<?= e($SITO['nome']) ?> — Home">
      <img class="logo-simbolo" src="img/logo/simbolo-sanctuary.svg" width="206" height="326" alt="">
      <img class="logo-scritta" src="img/logo/logo-sanctuary.svg" width="643" height="133" alt="">
    </a>

    <nav id="menu-principale" class="nav" aria-label="Main menu">
      <ul class="menu">
        <?php foreach ($SEDI as $k => $s): $sub = $SEZIONI[$k] ?? []; ?>
        <li<?= $sub ? ' class="ha-sottomenu"' : '' ?>>
          <a href="<?= e($s['pagina']) ?>"<?= $s['pagina'] === $pagina ? ' aria-current="page"' : '' ?>><?= e($s['nome']) ?><?php if ($s['stato'] !== ''): ?> <small>2027</small><?php endif; ?></a>
          <?php if ($sub): ?>
          <button class="chevron" type="button" aria-expanded="false" aria-label="Show <?= e($s['nome']) ?> sections"></button>
          <ul class="sottomenu">
            <li><a href="<?= e($s['pagina']) ?>">Overview</a></li>
            <?php foreach ($sub as $ancora => $nome): ?>
            <li><a href="<?= e($s['pagina']) ?>#<?= e($ancora) ?>"><?= e($nome) ?></a></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </li>
        <?php endforeach; ?>
        <li><a href="private-events.php"<?= $pagina === 'private-events.php' ? ' aria-current="page"' : '' ?>>Private events</a></li>
        <li><a href="./#membership">Membership</a></li>
      </ul>
      <ul class="menu-esterni">
        <li><a href="<?= e($SITO['urban']) ?>" rel="noopener" target="_blank">Urban Retreat ↗</a></li>
        <li><a href="<?= e($SITO['membership_login']) ?>" rel="noopener" target="_blank">Members login ↗</a></li>
        <li><a href="<?= e($SITO['instagram']) ?>" rel="noopener" target="_blank">Instagram ↗</a></li>
      </ul>
    </nav>

    <button class="bottone bottone-reserve" type="button" aria-haspopup="dialog" aria-controls="pannello-reserve" data-apri-reserve>Reserve</button>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principale">
      <span class="menu-toggle-icona" aria-hidden="true"></span>
      <span class="solo-lettori">Open menu</span>
    </button>
  </div>
</header>

<div class="reserve" id="pannello-reserve" role="dialog" aria-modal="true" aria-labelledby="titolo-reserve" hidden>
  <div class="reserve-fondo" data-chiudi-reserve></div>
  <div class="reserve-pannello">
    <div class="reserve-testa">
      <p class="kicker">Reserve</p>
      <h2 id="titolo-reserve">Choose your sanctuary</h2>
      <button class="reserve-chiudi" type="button" data-chiudi-reserve aria-label="Close"><span aria-hidden="true"></span></button>
    </div>
    <div class="reserve-sedi">
      <?php foreach ($SEDI as $k => $s): ?>
      <section class="reserve-sede">
        <h3><?= e($s['nome']) ?><?php if ($s['stato'] !== ''): ?> <small><?= e($s['stato']) ?></small><?php endif; ?></h3>
        <ul>
          <?php foreach ($s['spazi'] as $chiave => $nome): ?>
          <li><a href="<?= e(link_spazio($s, $chiave)) ?>"><?= e($nome) ?><span aria-hidden="true">→</span></a></li>
          <?php endforeach; ?>
        </ul>
        <p class="reserve-tel"><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $s['telefono'])) ?>"><?= e($s['telefono']) ?></a></p>
      </section>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<main id="contenuto">
