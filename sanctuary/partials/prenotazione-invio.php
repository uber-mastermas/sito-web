<?php
/* PRENOTAZIONE — logica di invio, comune alle pagine delle sedi.
   La pagina imposta prima $sede (da $SEDI) e include questo file PRIMA dell'header. */
/* ---------- Invio del modulo di prenotazione ----------
   Funziona sul server. Le richieste di eventi privati vanno all'indirizzo eventi,
   tutte le altre all'indirizzo prenotazioni (vedi partials/config.php). */
$esito = null; $errore = false;
$valori = ['nome' => '', 'email' => '', 'telefono' => '', 'data' => '', 'persone' => '', 'spazio' => '', 'messaggio' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($valori as $k => $_) { $valori[$k] = trim((string)($_POST[$k] ?? '')); }
  $trappola = trim((string)($_POST['sito'] ?? ''));          // campo nascosto contro lo spam
  $consenso = isset($_POST['consenso']);
  $spazio_ok = isset($sede['spazi'][$valori['spazio']]);

  if ($trappola !== '') {
    $esito = 'Thank you, your request has been sent.';         // lo spam riceve un finto ok
  } elseif ($valori['nome'] === '' || !filter_var($valori['email'], FILTER_VALIDATE_EMAIL) || !$spazio_ok || !$consenso) {
    $esito = 'Please check the form: name, a valid email, the space and your consent are required.';
    $errore = true;
  } else {
    $a = $valori['spazio'] === 'event' ? $sede['email_eventi'] : $sede['email_prenotazioni'];
    $nome = str_replace(["\r", "\n"], ' ', $valori['nome']);
    $oggetto = 'Booking request · ' . $sede['spazi'][$valori['spazio']] . ' · ' . $nome;
    $corpo = "Location: The Sanctuary {$sede['nome']}\n"
           . "Space: {$sede['spazi'][$valori['spazio']]}\n"
           . "Name: {$nome}\nEmail: {$valori['email']}\nPhone: {$valori['telefono']}\n"
           . "Date: {$valori['data']}\nGuests: {$valori['persone']}\n\nMessage:\n{$valori['messaggio']}\n";
    if ($a !== '' && invia_email($a, $oggetto, $corpo, $valori['email'])) {
      $esito = 'Thank you, your request has been sent. Our staff will contact you to confirm.';
      $valori = array_map(function () { return ''; }, $valori);
    } else {
      $esito = 'We could not send your request. Please try again later, or call us.';
      $errore = true;
    }
  }
}
if ($valori['spazio'] === '' && isset($_GET['space'], $sede['spazi'][$_GET['space']])) { $valori['spazio'] = $_GET['space']; }
