<?php
/* ==========================================================
   Funzioni comuni
   ========================================================== */

require_once __DIR__ . '/config.php';

/* Testo sicuro per l'HTML */
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, 'UTF-8'); }

/* Dato del sito, oppure "da inserire" se vuoto */
function dato($chiave) {
  global $SITO;
  $v = $SITO[$chiave] ?? '';
  return $v !== '' ? e($v) : '<span class="da-inserire">da inserire</span>';
}

/* Fotografia: se il file esiste mostra l'immagine,
   altrimenti un segnaposto con nome del file e misure da shot list.
   Basta caricare il file con quel nome nella cartella indicata
   e la foto compare da sola, senza toccare il codice.
   $opz: 'classe', 'subito' (true per la prima immagine della pagina),
         'mobile' (versione verticale usata sui telefoni, sotto i 700px) */
function foto($file, $alt, $w, $h, $soggetto = '', $opz = []) {
  $classe = isset($opz['classe']) ? ' ' . $opz['classe'] : '';
  $percorso = __DIR__ . '/../' . $file;
  if (is_file($percorso)) {
    $carica = !empty($opz['subito']) ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"';
    $versione = '?v=' . filemtime($percorso);   // foto sostituita = indirizzo nuovo, niente cache vecchia
    $img = '<img class="foto' . $classe . '" src="' . e($file) . $versione . '" width="' . (int)$w . '" height="' . (int)$h . '" alt="' . e($alt) . '" ' . $carica . '>';
    $mobile = $opz['mobile'] ?? '';
    if ($mobile !== '' && is_file(__DIR__ . '/../' . $mobile)) {
      return '<picture><source media="(max-width: 700px)" srcset="' . e($mobile) . '?v=' . filemtime(__DIR__ . '/../' . $mobile) . '">' . $img . '</picture>';
    }
    return $img;
  }
  return '<div class="foto segnaposto' . $classe . '" style="--ar:' . (int)$w . ' / ' . (int)$h . '" role="img" aria-label="' . e($alt) . '">'
       . '<span><strong>' . e($soggetto ?: $alt) . '</strong>'
       . '<code>' . e($file) . '</code>'
       . '<small>' . (int)$w . ' × ' . (int)$h . ' px</small></span></div>';
}

/* ---------- Invio email ----------
   Mittente: $SITO['mittente']. Se trova la password SMTP (file smtp-password.php
   fuori dalla root del sito, oppure in partials/) invia autenticandosi su
   $SITO['smtp_host']; altrimenti usa mail() di PHP con lo stesso mittente.
   Restituisce true se il messaggio è stato accettato dal server. */
function invia_email($a, $oggetto, $corpo, $rispondi_a = '') {
  global $SITO;
  $da = $SITO['mittente'];
  $oggetto_enc = '=?UTF-8?B?' . base64_encode($oggetto) . '?=';
  $nome_enc = '=?UTF-8?B?' . base64_encode($SITO['nome']) . '?=';
  $rispondi_a = filter_var($rispondi_a, FILTER_VALIDATE_EMAIL) ? $rispondi_a : '';

  $password = null;
  foreach ([__DIR__ . '/../../smtp-password.php', __DIR__ . '/smtp-password.php'] as $f) {
    if (is_file($f)) { $password = include $f; break; }
  }

  if (!is_string($password) || $password === '') {
    $h = "From: {$nome_enc} <{$da}>\r\n"
       . ($rispondi_a ? "Reply-To: {$rispondi_a}\r\n" : '')
       . "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n";
    return @mail($a, $oggetto_enc, $corpo, $h, '-f' . $da);
  }

  $porta = (int)$SITO['smtp_porta'];
  $host  = ($porta === 465 ? 'ssl://' : '') . $SITO['smtp_host'];
  $s = @stream_socket_client($host . ':' . $porta, $en, $es, 15);
  if (!$s) { error_log("SMTP: connessione fallita ($es)"); return false; }
  stream_set_timeout($s, 15);
  $leggi = function () use ($s) { $r = ''; while (($l = fgets($s, 515)) !== false) { $r .= $l; if (isset($l[3]) && $l[3] === ' ') break; } return $r; };
  $cmd = function ($c, $atteso) use ($s, $leggi) {
    if ($c !== null) fwrite($s, $c . "\r\n");
    $r = $leggi();
    if ((int)substr($r, 0, 3) !== $atteso) { error_log('SMTP: ' . trim($r)); return false; }
    return true;
  };
  $dominio = preg_replace('/^.*@/', '', $da);
  $ok = $cmd(null, 220) && $cmd("EHLO {$dominio}", 250);
  if ($ok && $porta === 587) {
    $ok = $cmd('STARTTLS', 220) && stream_socket_enable_crypto($s, true, STREAM_CRYPTO_METHOD_TLS_CLIENT) && $cmd("EHLO {$dominio}", 250);
  }
  $ok = $ok && $cmd('AUTH LOGIN', 334) && $cmd(base64_encode($SITO['smtp_utente']), 334) && $cmd(base64_encode($password), 235)
           && $cmd("MAIL FROM:<{$da}>", 250) && $cmd("RCPT TO:<{$a}>", 250) && $cmd('DATA', 354);
  if ($ok) {
    $msg = "Date: " . date('r') . "\r\n"
         . "From: {$nome_enc} <{$da}>\r\nTo: <{$a}>\r\n"
         . ($rispondi_a ? "Reply-To: {$rispondi_a}\r\n" : '')
         . "Subject: {$oggetto_enc}\r\n"
         . "Message-ID: <" . bin2hex(random_bytes(8)) . "@{$dominio}>\r\n"
         . "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n"
         . preg_replace('/^\./m', '..', str_replace(["\r\n", "\n"], "\r\n", $corpo)) . "\r\n.";
    $ok = $cmd($msg, 250);
  }
  @fwrite($s, "QUIT\r\n"); fclose($s);
  return $ok;
}
