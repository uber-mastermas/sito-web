<?php
/* ==========================================================
   Hotel Mamma Rosa — DATI DEL SITO
   Unico punto da modificare per contatti, social e dati legali.
   Un campo lasciato vuoto ('') compare sul sito come
   "da inserire", così si vede subito cosa manca.
   ========================================================== */

$SITO = [
  'nome'          => 'Hotel Mamma Rosa',
  'url'           => 'https://mammarosa.it',   // dominio, senza barra finale
  'immagine'      => 'img/logo/condivisione-mamma-rosa.jpg', // anteprima nei link condivisi, 1200×630
  'motto'         => 'Dal 1966 sulla Majelletta.',
  'luogo'         => 'Majelletta · Pretoro · Abruzzo',

  // Contatti
  'email'         => 'mammarosa@mammarosa.it',
  'telefono'      => '0871 896143',
  'cellulare'     => '393 883 8955',          // anche WhatsApp
  'whatsapp'      => '393938838955',          // numero per wa.me, con prefisso internazionale
  'indirizzo'     => 'Via Majelletta 35 · 66010 Pretoro (CH)',   // indirizzo ufficiale confermato il 13/10
  'lat'           => '42.17202195506561',   // posizione esatta dell'albergo (mappa OpenStreetMap e "Come arrivare")
  'lon'           => '14.116816921411244',

  // Social
  'facebook'      => 'https://www.facebook.com/p/Hotel-Mamma-Rosa-100063589719403/',
  'instagram'     => 'https://www.instagram.com/hotel.mammarosa/',

  // Dati legali (footer, Privacy e Note legali)
  'ragione'       => 'Mamma Rosa 2000 S.r.l.',
  'piva'          => '01202760698',
  'sede'          => 'Via Majelletta 35, 66010 Pretoro (CH)',
  'rea'           => '',          // iscrizione al Registro delle Imprese / REA, es. CH-000000
  'pec'           => 'mammarosa2000@pec.it',

  // Modulo contatti: dove arrivano i messaggi
  'email_modulo'  => 'mammarosa@mammarosa.it',

  // Invio della posta: la PASSWORD NON va qui (repository pubblico),
  // ma in smtp-password.php sopra la root del sito (vedi LEGGIMI-POSTA.txt).
  'mittente'      => 'mammarosa@mammarosa.it',
  'smtp_host'     => 'mail.mammarosa.it',
  'smtp_porta'    => 465,            // SSL
  'smtp_utente'   => 'mammarosa@mammarosa.it',
];

// Versione di CSS e JS: aumentarla a ogni modifica di style.css o layout.js
$V = 11;
