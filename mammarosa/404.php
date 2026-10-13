<?php
http_response_code(404);
$titolo = 'Pagina non trovata';
$descrizione = "La pagina che cerchi non esiste o è stata spostata.";
$pagina = '404.php';
include __DIR__ . '/partials/header.php';
?>

  <div class="contenitore errore-404">
    <div class="errore-griglia">
      <div class="errore-testo">
        <p class="occhiello">Errore 404</p>
        <h1>Qui ci sono solo impronte nella neve</h1>
        <p class="testo-grande">La pagina che cerchi non esiste o è stata spostata. Riprendi il sentiero da qui:</p>
        <div class="azioni">
          <a class="bottone" href="./">Torna alla Home</a>
          <a class="bottone bottone-linea" href="prenota.php">Prenota</a>
        </div>
        <ul class="errore-link">
          <li><a href="albergo.php">L'albergo</a></li>
          <li><a href="ristorante.php">Ristorante</a></li>
          <li><a href="inverno.php">Inverno</a></li>
          <li><a href="estate.php">Estate</a></li>
          <li><a href="listino.php">Listino</a></li>
          <li><a href="contatti.php">Contatti</a></li>
        </ul>
      </div>
      <div class="errore-foto">
        <?= foto('img/pagine/impronte-neve-ombre-alberi.webp', 'Impronte nella neve fresca, all\'ombra degli alberi', 640, 853, 'Impronte nella neve', ['subito' => true]) ?>
      </div>
    </div>
  </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
