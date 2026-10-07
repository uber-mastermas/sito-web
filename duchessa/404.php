<?php
http_response_code(404);
$titolo = 'Pagina non trovata';
$descrizione = "La pagina che cerchi non esiste o è stata spostata.";
$pagina = '404.php';
include __DIR__ . '/partials/header.php';
?>

  <div class="contenitore testata pagina-404">
    <p class="occhiello">Errore 404</p>
    <h1>Pagina non trovata</h1>
    <p class="testo-grande">La pagina che cerchi non esiste o è stata spostata.</p>
    <div class="azioni">
      <a class="bottone" href="./">Torna alla Home</a>
      <a class="bottone bottone-linea" href="prodotto.php">Scopri l'olio</a>
    </div>
  </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
