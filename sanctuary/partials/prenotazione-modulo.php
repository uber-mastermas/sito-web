<?php /* CONTATTI, MODULO DI PRENOTAZIONE E MAPPA — comune alle pagine delle sedi.
   Usa $sede, $valori, $esito, $errore (da prenotazione-invio.php). */ ?>
  <section class="sezione contenitore" id="book" aria-labelledby="titolo-prenota">
    <div class="contatti-griglia">
      <div class="recapiti" data-appare>
        <?php $solo_info = count($sede['spazi']) === 1; ?>
        <p class="kicker"><?= $solo_info ? 'Summer 2027 · Information' : 'Booking, info &amp; where to find us' ?></p>
        <h2 id="titolo-prenota"><?= $solo_info ? 'Stay in touch' : 'Contact &amp; booking' ?></h2>
        <ul>
          <li><?= e($sede['indirizzo']) ?></li>
          <li><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', $sede['telefono'])) ?>"><?= e($sede['telefono']) ?></a></li>
          <li><a href="<?= e($sede['instagram']) ?>" rel="noopener" target="_blank">@<?= e(basename(rtrim($sede['instagram'], '/'))) ?></a></li>
        </ul>
        <p class="kicker"><?= $solo_info ? 'Email' : 'Bookings' ?></p>
        <p><a href="mailto:<?= e($sede['email_prenotazioni']) ?>"><?= e($sede['email_prenotazioni']) ?></a></p>
        <?php if ($sede['email_eventi'] !== $sede['email_prenotazioni']): ?>
        <p class="kicker">Private events</p>
        <p><a href="mailto:<?= e($sede['email_eventi']) ?>"><?= e($sede['email_eventi']) ?></a></p>
        <?php endif; ?>
        <?php if ($sede['orari']): ?>
        <dl class="orari-blocco">
          <?php foreach ($sede['orari'] as $giorni => $ore): ?>
          <div><dt><?= e($giorni) ?></dt><dd><?= e($ore) ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <?php endif; ?>
      </div>

      <form class="modulo" method="post" action="<?= e($sede['pagina']) ?>#book" data-appare>
        <?php if ($esito): ?>
        <p class="esito<?= $errore ? ' errore' : '' ?>" role="status"><?= e($esito) ?></p>
        <?php endif; ?>
        <div class="modulo-riga">
          <div class="campo">
            <label for="nome">Name and surname</label>
            <input id="nome" name="nome" type="text" autocomplete="name" required value="<?= e($valori['nome']) ?>">
          </div>
          <?php if ($solo_info): ?>
          <input type="hidden" name="spazio" value="<?= e(array_key_first($sede['spazi'])) ?>">
          <?php else: ?>
          <div class="campo">
            <label for="spazio">Space</label>
            <select id="spazio" name="spazio" required>
              <option value="">Choose</option>
              <?php foreach ($sede['spazi'] as $chiave => $nome): ?>
              <option value="<?= e($chiave) ?>"<?= $valori['spazio'] === $chiave ? ' selected' : '' ?>><?= e($nome) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <?php endif; ?>
        </div>
        <div class="modulo-riga">
          <div class="campo">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required value="<?= e($valori['email']) ?>">
          </div>
          <div class="campo">
            <label for="telefono">Phone</label>
            <input id="telefono" name="telefono" type="tel" autocomplete="tel" value="<?= e($valori['telefono']) ?>">
          </div>
        </div>
        <?php if (!$solo_info): ?>
        <div class="modulo-riga">
          <div class="campo">
            <label for="data">Date</label>
            <input id="data" name="data" type="date" value="<?= e($valori['data']) ?>">
          </div>
          <div class="campo">
            <label for="persone">Guests</label>
            <input id="persone" name="persone" type="number" min="1" max="500" inputmode="numeric" value="<?= e($valori['persone']) ?>">
          </div>
        </div>
        <?php endif; ?>
        <div class="campo">
          <label for="messaggio">Message</label>
          <textarea id="messaggio" name="messaggio"><?= e($valori['messaggio']) ?></textarea>
        </div>
        <div class="trappola" aria-hidden="true">
          <label for="sito">Leave empty</label>
          <input id="sito" name="sito" type="text" tabindex="-1" autocomplete="off">
        </div>
        <label class="consenso">
          <input type="checkbox" name="consenso" required>
          <span>I have read the <a href="privacy.php" target="_blank">privacy notice</a> and agree to the processing of my data to receive a reply.</span>
        </label>
        <div><button class="bottone" type="submit">Send request</button></div>
        <p class="modulo-nota"><?= $solo_info ? 'Our staff will reply to your request.' : 'Your booking is confirmed only when our staff contacts you.' ?></p>
      </form>
    </div>
  </section>

  <section class="mappa" aria-label="Map of The Sanctuary <?= e($sede['nome']) ?>">
    <iframe data-src="https://www.openstreetmap.org/export/embed.html?bbox=<?= e((float)$sede['lon'] - 0.012) ?>%2C<?= e((float)$sede['lat'] - 0.005) ?>%2C<?= e((float)$sede['lon'] + 0.012) ?>%2C<?= e((float)$sede['lat'] + 0.005) ?>&amp;layer=mapnik&amp;marker=<?= e($sede['lat']) ?>%2C<?= e($sede['lon']) ?>"
            title="Map of The Sanctuary <?= e($sede['nome']) ?>" loading="lazy" referrerpolicy="no-referrer"></iframe>
    <button class="mappa-attesa" type="button" data-mostra-banner><span>The map is shown after you accept the privacy notice</span></button>
    <a class="mappa-link" href="https://www.openstreetmap.org/?mlat=<?= e($sede['lat']) ?>&amp;mlon=<?= e($sede['lon']) ?>#map=17/<?= e($sede['lat']) ?>/<?= e($sede['lon']) ?>" target="_blank" rel="noopener">Open the map ↗</a>
  </section>
