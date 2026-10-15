<?php
/* ==========================================================
   The Sanctuary Eco Retreat — DATI DEL SITO
   Unico punto da modificare per contatti, sedi, social e dati legali.
   Un campo lasciato vuoto ('') compare sul sito come
   "da inserire", così si vede subito cosa manca.
   ========================================================== */

$SITO = [
  'nome'          => 'The Sanctuary Eco Retreat',
  'nome_breve'    => 'The Sanctuary',
  'url'           => 'https://thesanctuaryecoretreat.it',   // dominio, senza barra finale
  'immagine'      => 'img/logo/condivisione-sanctuary.jpg', // anteprima nei link condivisi, 1200×630
  'motto'         => 'A timeless place to live, know and share.',
  'luogo'         => 'Rome · Milan · Porto Cervo · Itria Valley',

  // Contatti generali
  'email'         => '',          // indirizzo generale (info@…), da confermare
  'instagram'     => 'https://www.instagram.com/thesanctuaryecoretreat/',

  // Siti collegati (link esterni)
  'membership'    => 'https://membership.thesanctuaryecoretreat.com/register',
  'membership_login' => 'https://membership.thesanctuaryecoretreat.com/login',
  'urban'         => 'https://www.thesanctuaryurban.com/',

  // Dati legali (footer, Privacy e Note legali)
  'ragione'       => '',          // ragione sociale
  'piva'          => '',          // Partita IVA (obbligatoria)
  'sede'          => '',          // sede legale completa
  'rea'           => '',          // Registro delle Imprese / REA
  'pec'           => '',

  // Invio della posta: la PASSWORD NON va qui (repository pubblico),
  // ma in smtp-password.php sopra la root del sito (vedi LEGGIMI-POSTA.txt).
  'mittente'      => '',          // es. noreply@thesanctuaryecoretreat.it
  'smtp_host'     => '',
  'smtp_porta'    => 465,
  'smtp_utente'   => '',
];

/* ---------- LE QUATTRO SEDI ----------
   'pagina' vuota = pagina non ancora pronta (porta alla pagina provvisoria).
   'spazi' = voci del pannello Reserve e del modulo di prenotazione. */
$SEDI = [
  'roma' => [
    'nome'       => 'Rome',
    'nome_locale' => 'Roma',
    'paese'      => 'Italy',
    'pagina'     => 'rome.php',
    'modulo'     => true,       // la pagina ha il modulo di prenotazione (#book)
    'stato'      => '',
    'indirizzo'  => 'Via delle Terme di Traiano, 4a · 00184 Roma',
    'lat'        => '41.8934119',   // DA CONFERMARE: dalla scheda Google "The Sanctuary" del vecchio sito
    'lon'        => '12.4983917',
    'telefono'   => '+39 06 8379 6820',
    'email'      => 'roma@thesanctuaryecoretreat.com',
    'email_prenotazioni' => 'roma@thesanctuaryecoretreat.com',   // DA CONFERMARE: esistono indirizzi dedicati come a Milano?
    'email_eventi'       => 'roma@thesanctuaryecoretreat.com',
    'instagram'  => 'https://www.instagram.com/thesanctuaryecoretreat/',
    'orari'      => ['Tue · Wed · Sun' => '11:00 – 02:00', 'Thu · Fri · Sat' => '11:00 – 04:00'],
    'orari_ristorante' => ['Dinner · Tue – Sun' => '18:00 – 00:00'],
    'foto'       => 'img/home/roma-serra-piscina-ombrelloni.webp',
    'frase'      => 'A hidden garden steps away from the Colosseum.',
    'spazi'      => ['restaurant' => 'Restaurant', 'pool' => 'Pool Area', 'wellness' => 'Yoga & Massage', 'club' => 'Club', 'event' => 'Private event'],
  ],
  'milano' => [
    'nome'       => 'Milan',
    'nome_locale' => 'Milano',
    'paese'      => 'Italy',
    'pagina'     => 'milan.php',
    'modulo'     => true,       // la pagina ha il modulo di prenotazione (#book)
    'stato'      => '',
    // DA CONFERMARE: footer del sito .it = Via Valenza 2, 20144; blocco contatti = Via Valenza 16, 20142
    'indirizzo'  => 'Via Valenza, 16 · 20142 Milano',
    'lat'        => '45.45129338393012',   // posizione esatta indicata da Umberto (14/10)
    'lon'        => '9.169177460185509',
    'telefono'   => '+39 02 5004 1511',
    'email'      => 'milan@thesanctuaryecoretreat.com',
    'email_prenotazioni' => 'booking.milan@thesanctuaryecoretreat.com',
    'email_eventi'       => 'events.milan@thesanctuaryecoretreat.com',
    'instagram'  => 'https://www.instagram.com/thesanctuarymilan/',
    'orari'      => ['Lunch · Tue – Sun' => '12:00 – 15:00', 'Evening · Tue – Sun' => '18:00 – 02:00'],
    'foto'       => 'img/home/milano-piscina-bagnante.webp',
    'frase'      => 'An industrial space reimagined as a living sanctuary.',
    'spazi'      => ['restaurant' => 'Restaurant', 'pool' => 'Pool Area', 'wellness' => 'Yoga & Pilates', 'club' => 'Club', 'event' => 'Private event'],
  ],
  'porto-cervo' => [
    'nome'       => 'Porto Cervo',
    'paese'      => 'Sardinia',
    'pagina'     => 'porto-cervo.php',
    'modulo'     => true,
    'stato'      => 'Opening July 2027',
    'indirizzo'  => 'SP59, Golfo Pevero · 07021 Sassari',
    'lat'        => '41.1057391',   // DA CONFERMARE: dalla scheda Google del vecchio sito
    'lon'        => '9.5313797',
    'telefono'   => '+39 0789 173306',   // DA CONFERMARE: il vecchio sito riporta 0789 1733063
    'email'      => 'portocervo@thesanctuaryecoretreat.com',
    'email_prenotazioni' => 'portocervo@thesanctuaryecoretreat.com',
    'email_eventi'       => 'portocervo@thesanctuaryecoretreat.com',
    'instagram'  => 'https://www.instagram.com/thesanctuaryecoretreat/',
    'orari'      => [],
    'foto'       => 'img/home/porto-cervo-folla-notte-palme.webp',
    'frase'      => "Sardinia's coastline meets the pulse of the night.",
    'spazi'      => ['info' => 'Summer 2027 · Information'],
  ],
  'itria' => [
    'nome'       => 'Itria Valley',
    'paese'      => 'Apulia',
    'pagina'     => 'itria-valley.php',
    'modulo'     => true,
    'stato'      => 'Opening July 2027',
    'indirizzo'  => 'SP 90, Savelletri · 72015 Torre Canne (BR)',
    'lat'        => '40.8480115',   // DA CONFERMARE: dalla scheda Google del sito .it
    'lon'        => '17.4550772',
    'telefono'   => '+39 0831 1530016',
    'email'      => 'itriavalley@thesanctuaryecoretreat.com',
    'email_prenotazioni' => 'itriavalley@thesanctuaryecoretreat.com',
    'email_eventi'       => 'itriavalley@thesanctuaryecoretreat.com',
    'instagram'  => 'https://www.instagram.com/thesanctuaryecoretreat/',
    'orari'      => [],
    'foto'       => 'img/home/itria-tenda-lanterna-tramonto.webp',
    'frase'      => 'Music under the starry sky, by the sea.',
    'spazi'      => ['info' => 'Summer 2027 · Information'],
  ],
];

/* ---------- PROGRAMMA MUSICALE ----------
   Una riga per serata: ['data' => 'THU 05/11', 'ora' => '22:00', 'titolo' => '…', 'artisti' => '…'].
   Se l'elenco è vuoto, la pagina rimanda a Instagram. */
$PROGRAMMA = [
  'roma'   => [],
  'milano' => [],
];

/* ---------- ARTISTI OSPITATI (Club di Roma e Milano) ---------- */
$ARTISTI = ['Âme', 'Acid Pauli', 'Acid Arab', 'Ben Klock', 'Bonobo', 'Bedouin', 'Blond:ish', 'Black Coffee', 'Brina Knauss', 'Carlita', 'Chet Faker', 'Damian Lazarus', 'Dixon', 'DJ Tennis', 'Fatboy Slim', 'Guy Gerber', 'Jackmaster', 'Jayda G', 'Måneskin', 'Marcel Dettmann', 'Marcelo Burlon', 'Monolink', 'Negramaro', 'Nina Kraviz', 'Polo & Pan', 'Peggy Gou', 'Red Axes', 'RY X', 'Salmo', 'Satori live', 'Seth Troxler', 'Stavroz live', 'Sven Väth', 'Travis Scott', 'Venerus', 'WhoMadeWho'];

// Versione di CSS e JS: aumentarla a ogni modifica di style.css o layout.js
$V = 7;
