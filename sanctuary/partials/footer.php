<?php /* FOOTER COMUNE — sedi, contatti, link e dati legali: i dati si cambiano in partials/config.php */ ?>
</main>

<footer class="site-footer">
  <div class="contenitore">
    <div class="footer-testa">
      <a class="footer-logo" href="./" aria-label="<?= e($SITO['nome']) ?> — Home">
        <img src="img/logo/simbolo-sanctuary-chiaro.svg" width="206" height="326" alt="">
        <img src="img/logo/logo-sanctuary-chiaro.svg" width="643" height="133" alt="">
      </a>
      <p class="footer-motto">A family of living sanctuaries where nature, design, food, wellness and music come together.</p>
    </div>

    <div class="footer-sedi">
      <?php foreach ($SEDI as $s): ?>
      <section class="footer-sede">
        <h2><a href="<?= e($s['pagina']) ?>"><?= e($s['nome']) ?></a></h2>
        <ul>
          <li><?= e($s['indirizzo']) ?></li>
          <li><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $s['telefono'])) ?>"><?= e($s['telefono']) ?></a></li>
          <li><a href="mailto:<?= e($s['email']) ?>"><?= e($s['email']) ?></a></li>
        </ul>
        <?php if ($s['orari']): ?>
        <dl class="orari">
          <?php foreach ($s['orari'] as $giorni => $ore): ?>
          <dt><?= e($giorni) ?></dt><dd><?= e($ore) ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php else: ?>
        <p class="kicker"><?= e($s['stato']) ?></p>
        <?php endif; ?>
      </section>
      <?php endforeach; ?>
    </div>

    <ul class="footer-link">
      <li><a href="private-events.php">Private events</a></li>
      <li><a href="./#membership">Membership</a></li>
      <li><a href="<?= e($SITO['urban']) ?>" rel="noopener" target="_blank">Urban Retreat ↗</a></li>
      <li><a href="<?= e($SITO['instagram']) ?>" rel="noopener" target="_blank">Instagram ↗</a></li>
    </ul>

    <div class="footer-fondo">
      <span>© <?= date('Y') ?> <?= $SITO['ragione'] !== '' ? e($SITO['ragione']) : e($SITO['nome']) . ' · ' . dato('ragione') ?> · P.IVA <?= dato('piva') ?></span>
      <span><a href="privacy.php">Privacy</a> · <a href="cookie.php">Cookie policy</a> · <a href="note-legali.php">Legal notice</a></span>
    </div>
  </div>
</footer>

<div class="banner-privacy" role="dialog" aria-live="polite" aria-label="Privacy notice" hidden>
  <p>We don't use profiling cookies. With your consent we show the maps, provided by OpenStreetMap, an external service. <a href="cookie.php">Read the Cookie policy</a>.</p>
  <div class="banner-privacy-azioni">
    <button class="bottone" type="button" data-privacy="accetto">Accept</button>
    <button class="bottone bottone-linea" type="button" data-privacy="rifiuto">Decline</button>
  </div>
</div>

<a class="torna-su" href="#contenuto" aria-label="Back to top">
  <svg viewBox="0 0 48 30" width="22" height="14" aria-hidden="true"><polyline points="4,26 24,6 44,26" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</a>
</body>
</html>
