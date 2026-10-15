<?php /* CLUB E PROGRAMMA MUSICALE — comune alle pagine delle sedi.
   La pagina imposta prima $sede, $chiave_sede, $club_foto e $club_alt. */ ?>
  <section class="fascia scura" id="club" aria-labelledby="titolo-club">
    <div class="contenitore">
      <div class="spazio-griglia inversa">
        <div class="spazio-foto" data-appare><?= foto($club_foto, $club_alt, 1920, 1920, 'Club') ?></div>
        <div class="spazio-testo" data-appare>
          <p class="kicker">Club · Thursday to Sunday</p>
          <h2 id="titolo-club">Internationally renowned artists, who meet in one magical place.</h2>
          <p>The Sanctuary Music is a mission that aims to reveal the confluence of various cultural traditions, stretching the boundaries of the music field. The Sanctuary Sound is evidence of just how music is the most beautiful language in the world.</p>
          <div class="azioni"><a class="bottone" href="?space=club#book">Book a table</a></div>
        </div>
      </div>

      <div class="sezione" data-appare>
        <p class="kicker">Artists hosted</p>
        <ul class="artisti">
          <?php foreach ($ARTISTI as $artista): ?>
          <li><?= e($artista) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="sezione" id="music" data-appare>
        <div class="sezione-testa affiancata">
          <h2>This week in <?= e($sede['nome']) ?></h2>
          <p>Our team of DJs and producers creates unique sonic atmospheres: from the warm nuances of vinyl to the hypnotic rhythms of electronic music, every show is an immersive experience.</p>
        </div>
        <?php $serate = $PROGRAMMA[$chiave_sede] ?? []; if ($serate): ?>
        <ul class="programma">
          <?php foreach ($serate as $serata): $d = strtotime($serata['data']); ?>
          <li>
            <a href="evento.php?e=<?= e($serata['slug']) ?>">
              <time datetime="<?= e($serata['data']) ?>"><span><?= e($serata['giorno']) ?></span> <?= date('d.m', $d) ?></time>
              <strong><?= e($serata['titolo']) ?></strong>
              <span class="programma-artisti"><?= e($serata['artisti']) ?></span>
              <span class="programma-ora"><?= e($serata['ora']) ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
