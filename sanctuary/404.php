<?php
http_response_code(404);
$titolo = 'Page not found';
$descrizione = 'The page you are looking for does not exist or has been moved.';
$pagina = '404.php';
include __DIR__ . '/partials/header.php';
?>

  <div class="contenitore testata provvisoria">
    <p class="kicker">Error 404</p>
    <h1>Page not found</h1>
    <p class="testo-grande">The page you are looking for does not exist or has been moved.</p>
    <div class="azioni">
      <a class="bottone" href="./">Back to Home</a>
      <a class="bottone bottone-linea" href="./#places">Our places</a>
    </div>
  </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
