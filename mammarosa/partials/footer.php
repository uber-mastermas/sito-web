<?php /* FOOTER COMUNE — contatti, social e dati legali: i dati si cambiano in partials/config.php */ ?>
</main>

<footer class="site-footer">
  <div class="contenitore">
    <div class="footer-griglia">

      <div class="footer-marchio">
        <a class="logo logo-chiaro" href="./">
          <img src="img/logo/logo-mammarosa-chiaro.svg" width="512" height="351" alt="">
        </a>
        <p class="motto"><?= e($SITO['motto']) ?></p>
        <p><?= e($SITO['luogo']) ?></p>
      </div>

      <div class="footer-colonna">
        <h2>Contatti</h2>
        <ul>
          <li><?= dato('indirizzo') ?></li>
          <li><a href="tel:+39<?= e(preg_replace('/[^0-9]/', '', $SITO['telefono'])) ?>">Tel. <?= e($SITO['telefono']) ?></a></li>
          <li><a href="https://wa.me/<?= e($SITO['whatsapp']) ?>" rel="noopener" target="_blank">WhatsApp <?= e($SITO['cellulare']) ?></a></li>
          <li><a href="mailto:<?= e($SITO['email']) ?>"><?= e($SITO['email']) ?></a></li>
        </ul>
      </div>

      <div class="footer-colonna">
        <h2>Seguici</h2>
        <ul>
          <li><a href="<?= e($SITO['instagram']) ?>" rel="noopener" target="_blank">Instagram</a></li>
          <li><a href="<?= e($SITO['facebook']) ?>" rel="noopener" target="_blank">Facebook</a></li>
        </ul>
      </div>

      <div class="footer-colonna footer-acquista">
        <h2>Prenota direttamente, senza intermediari</h2>
        <a class="bottone bottone-chiaro" href="prenota.php">Prenota</a>
      </div>

    </div>
    <div class="footer-fondo">
      <span>© <?= date('Y') ?> <?= e($SITO['ragione']) ?><?= $SITO['piva'] !== '' ? ' · P.IVA ' . e($SITO['piva']) : '' ?></span>
      <span><a href="privacy.php">Privacy</a> · <a href="cookie.php">Cookie</a> · <a href="note-legali.php">Note legali</a> · Pretoro (CH)</span>
    </div>
  </div>
</footer>

<div class="banner-privacy" role="dialog" aria-live="polite" aria-label="Informativa privacy" hidden>
  <p>Questo sito non usa cookie di profilazione. La mappa nella pagina Contatti è fornita da OpenStreetMap, un servizio esterno. <a href="privacy.php">Leggi l'informativa privacy</a>.</p>
  <div class="banner-privacy-azioni">
    <button class="bottone" type="button" data-privacy="accetto">Ho capito e accetto</button>
    <button class="bottone bottone-linea" type="button" data-privacy="rifiuto">Non accetto</button>
  </div>
</div>

<a class="torna-su" href="#contenuto" aria-label="Torna all'inizio della pagina">
  <svg viewBox="0 0 48 30" width="22" height="14" aria-hidden="true"><polyline points="4,26 24,6 44,26" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</a>
</body>
</html>
