<?php
$titolo = 'Legal notice';
$descrizione = 'Legal notice of The Sanctuary Eco Retreat: details of the owner of the website, rights on the contents and external links.';
$pagina = 'note-legali.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Legal notice</li>
    </ol>
    <p class="kicker">Legal information</p>
    <h1>Legal notice</h1>
    <p class="testo-grande">Information on the owner of the website, pursuant to art. 7 of Italian Legislative Decree 70/2003 on e-commerce.</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Owner of the website</h2>
        <p><?= dato('ragione') ?><br>
        Registered office: <?= dato('sede') ?><br>
        VAT number: <?= dato('piva') ?><br>
        Companies Register / REA: <?= dato('rea') ?><br>
        PEC: <?= dato('pec') ?></p>
      </section>

      <section>
        <h2>Our locations</h2>
        <ul>
          <?php foreach ($SEDI as $s): ?>
          <li><strong><?= e($s['nome']) ?></strong> · <?= e($s['indirizzo']) ?> · <?= e($s['telefono']) ?></li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section>
        <h2>Contents of the website</h2>
        <p>Texts, photographs, videos, logo and graphics of this website are protected by copyright. They may not be copied, modified or reused without written permission.</p>
        <p>Opening hours, menus, programs and prices may change: they are confirmed each time by our staff.</p>
      </section>

      <section>
        <h2>External links</h2>
        <p>The website contains links to external services, such as Instagram, OpenStreetMap, the membership area and Urban Retreat. We are not responsible for their contents or for the way they process data: their own terms and privacy policies apply.</p>
      </section>

      <section>
        <h2>Privacy and cookies</h2>
        <p>The processing of personal data is described in the <a href="privacy.php">privacy notice</a>; the use of cookies and similar tools in the <a href="cookie.php">cookie policy</a>.</p>
      </section>

      <p class="nota">Last updated: October 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
