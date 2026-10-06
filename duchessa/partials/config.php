<?php
/* ==========================================================
   L'Olio della Duchessa — DATI DEL SITO
   Unico punto da modificare per contatti, social e dati legali.
   Un campo lasciato vuoto ('') compare sul sito come
   "da inserire", così si vede subito cosa manca.
   ========================================================== */

$SITO = [
  'nome'          => "L'Olio della Duchessa",
  'motto'         => 'Arte olearia per passione.',
  'luogo'         => 'Girifalco · Calabria · Italia',

  // Contatti
  'email'         => 'info@oliodelladuchessa.com',
  'telefono'      => '',          // es. +39 000 000 0000
  'indirizzo'     => 'Girifalco (CZ) · Calabria',

  // Social: solo Instagram
  'instagram'     => 'https://www.instagram.com/olio_delladuchessa/',

  // Dati legali (footer)
  'ragione'       => 'Azienda Agricola Tolone',
  'piva'          => '',          // Partita IVA

  // Modulo contatti: dove arrivano i messaggi
  'email_modulo'  => 'info@oliodelladuchessa.com',

  // Invio della posta: mittente e server SMTP dell'account info@
  // La PASSWORD NON va qui (il repository è pubblico): va nel file
  // smtp-password.php, una cartella SOPRA la root del sito (vedi LEGGIMI-POSTA.txt).
  'mittente'      => 'info@oliodelladuchessa.com',
  'smtp_host'     => 'mail.oliodelladuchessa.com',
  'smtp_porta'    => 465,            // SSL
  'smtp_utente'   => 'info@oliodelladuchessa.com',
];

// Versione di CSS e JS: aumentarla a ogni modifica di style.css o layout.js
$V = 10;
