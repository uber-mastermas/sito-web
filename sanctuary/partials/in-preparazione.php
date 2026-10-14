<?php /* Pagina provvisoria della prova: verrà sostituita dal contenuto vero.
         Se la pagina imposta $sede, mostra i recapiti della sede. */ ?>
  <div class="contenitore testata">
    <ol class="briciole"><li><a href="./">Home</a></li><li aria-current="page"><?= e($titolo) ?></li></ol>
    <p class="kicker"><?= isset($sede) && $sede['stato'] !== '' ? e($sede['stato']) : 'Page in preparation' ?></p>
    <h1><?= e($titolo) ?></h1>
    <p class="testo-grande"><?= isset($sede) ? e($sede['frase']) . ' ' : '' ?>This page is being prepared. For information and bookings, call or write to us.</p>
  </div>
  <div class="contenitore provvisoria">
    <?php if (isset($sede)): ?>
    <ul class="elenco-punti">
      <li><strong>Address</strong><span><?= e($sede['indirizzo']) ?></span></li>
      <li><strong>Phone</strong><span><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $sede['telefono'])) ?>"><?= e($sede['telefono']) ?></a></span></li>
      <li id="contact"><strong>Email</strong><span><a href="mailto:<?= e($sede['email']) ?>"><?= e($sede['email']) ?></a></span></li>
      <?php foreach ($sede['orari'] as $giorni => $ore): ?>
      <li><strong><?= e($giorni) ?></strong><span><?= e($ore) ?></span></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <div class="azioni"><a class="bottone" href="./">Back to Home</a></div>
  </div>
