<?php /* FOOTER COMUNE — contatti, social e dati legali: i dati si cambiano in partials/config.php */ ?>
</main>

<footer class="site-footer">
  <div class="contenitore">
    <div class="footer-griglia">

      <div class="footer-marchio">
        <a class="logo logo-chiaro" href="index.php">
          <img src="img/logo/logo-duchessa-chiaro.svg" width="263" height="351" alt="">
          <span>L'Olio della<br>Duchessa</span>
        </a>
        <p class="motto"><?= e($SITO['motto']) ?></p>
        <p><?= e($SITO['luogo']) ?></p>
      </div>

      <div class="footer-colonna">
        <h2>Contatti</h2>
        <ul>
          <li><?= dato('indirizzo') ?></li>
          <li><?php if ($SITO['email'] !== ''): ?><a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a><?php else: ?>Email: <?= dato('email') ?><?php endif; ?></li>
          <li><?php if ($SITO['telefono'] !== ''): ?><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $SITO['telefono'])) ?>"><?= e($SITO['telefono']) ?></a><?php else: ?>Tel. <?= dato('telefono') ?><?php endif; ?></li>
        </ul>
      </div>

      <div class="footer-colonna">
        <h2>Seguici</h2>
        <ul>
          <li><?php if ($SITO['instagram'] !== ''): ?><a href="<?= e($SITO['instagram']) ?>" rel="noopener" target="_blank">Instagram<br><small class="handle">@olio_delladuchessa</small></a><?php else: ?>Instagram: <?= dato('instagram') ?><?php endif; ?></li>
        </ul>
      </div>

      <div class="footer-colonna footer-acquista">
        <h2>Vuoi portarlo sulla tua tavola?</h2>
        <a class="bottone bottone-chiaro" href="contatti.php#acquista">Acquista</a>
      </div>

    </div>
    <div class="footer-fondo">
      <span>© <?= date('Y') ?> <?= e($SITO['ragione']) ?> · P.IVA <?= dato('piva') ?></span>
      <span>Girifalco (CZ)</span>
    </div>
  </div>
</footer>

<a class="torna-su" href="#contenuto" aria-label="Torna all'inizio della pagina">
  <svg viewBox="0 0 48 30" width="22" height="14" aria-hidden="true"><polyline points="4,26 24,6 44,26" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</a>
</body>
</html>
