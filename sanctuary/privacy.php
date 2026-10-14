<?php
$titolo = 'Privacy';
$descrizione = 'How The Sanctuary Eco Retreat processes the personal data collected through the booking and contact forms of this website.';
$pagina = 'privacy.php';
include 'partials/header.php';
?>

  <div class="contenitore testata">
    <ol class="briciole">
      <li><a href="./">Home</a></li>
      <li aria-current="page">Privacy</li>
    </ol>
    <p class="kicker">Privacy notice</p>
    <h1>Privacy</h1>
    <p class="testo-grande">Information on the processing of personal data, pursuant to art. 13 of EU Regulation 2016/679 (GDPR).</p>
  </div>

  <div class="contenitore">
    <div class="informativa">

      <section>
        <h2>Data controller</h2>
        <p><?= dato('ragione') ?><br>
        Registered office: <?= dato('sede') ?><br>
        VAT number: <?= dato('piva') ?><br>
        Email: <?= $SITO['email'] !== '' ? '<a href="mailto:' . e($SITO['email']) . '">' . e($SITO['email']) . '</a>' : dato('email') ?></p>
      </section>

      <section>
        <h2>What data we collect</h2>
        <p>When you send a booking or contact request we collect your name, email address and, if you provide them, your phone number, the date, the number of guests and the text of your message. We do not ask for information that is not needed to reply to you.</p>
      </section>

      <section>
        <h2>Why we use it</h2>
        <p>We use these data only to reply to your request and to manage your booking or event.</p>
        <p>The legal basis is your request itself (art. 6(1)(b) GDPR) and the consent you give by sending the form (art. 6(1)(a)). We do not use your data for advertising or newsletters and we do not pass them on to third parties.</p>
      </section>

      <section>
        <h2>How long we keep it</h2>
        <p>We keep your messages for as long as needed to manage your request and your booking, and in any case no longer than 24 months from the last contact, unless the law requires otherwise (for example for tax purposes).</p>
      </section>

      <section>
        <h2>Who can see it</h2>
        <p>The data are processed by our staff at the location you contacted and by the provider that manages the website and email, acting as data processor and only to provide the service.</p>
      </section>

      <section>
        <h2>External services</h2>
        <p>The website does not use profiling cookies or statistics tools, and the fonts are hosted on the site itself.</p>
        <p>The only external service is the map on the location pages, provided by <strong>OpenStreetMap</strong> (OpenStreetMap Foundation): to show it, your browser connects to their servers, which may receive your IP address. The map loads only after you choose "Accept" in the banner.</p>
        <p>The links to Instagram, the membership area and Urban Retreat are simple links: those services come into play only if you choose to open them.</p>
      </section>

      <section>
        <h2>Your rights</h2>
        <p>You can ask us at any time to access, correct or delete your data, restrict or object to their processing, and withdraw your consent, by writing to the location you contacted.</p>
        <p>If you believe your data are processed incorrectly, you can lodge a complaint with the Italian Data Protection Authority (<a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">garanteprivacy.it</a>).</p>
      </section>

      <p class="nota">Last updated: October 2026.</p>
    </div>
  </div>

<?php include 'partials/footer.php'; ?>
