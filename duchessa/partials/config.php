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
  'email'         => '',          // es. info@oliodelladuchessa.com
  'telefono'      => '',          // es. +39 000 000 0000
  'indirizzo'     => 'Girifalco (CZ) · Calabria',

  // Social: lasciare '' quelli che non servono
  'instagram'     => '',          // URL completo
  'facebook'      => '',          // URL completo

  // Dati legali (footer)
  'ragione'       => 'Azienda Agricola Tolone',
  'piva'          => '',          // Partita IVA

  // Modulo contatti: dove arrivano i messaggi
  'email_modulo'  => '',          // se vuoto il modulo mostra un avviso e non invia
];

// Versione di CSS e JS: aumentarla a ogni modifica di style.css o layout.js
$V = 5;
