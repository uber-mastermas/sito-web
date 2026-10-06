/* ==========================================================
   Sito gatti — header e footer comuni a tutte le pagine
   Per aggiungere una pagina al menu: aggiungi una riga in MENU.
   Ogni pagina deve includere, nell'<head>:
     <link rel="stylesheet" href="css/style.css">
     <script src="js/layout.js" defer></script>
   ========================================================== */

const SITO = {
  nome: "Il mio gatto",
  logo: "img/gatto-cuore.png",
  anno: new Date().getFullYear()
};

const MENU = [
  { testo: "Home",       link: "index.html" },
  { testo: "La storia",  link: "index.html#storia" },
  { testo: "La scheda",  link: "index.html#scheda" }
];

(function () {
  // Pagina corrente (es. "index.html"); la radice "/" conta come index.html
  const pagina = location.pathname.split("/").pop() || "index.html";

  const voci = MENU.map(function (v) {
    const attiva = v.link === pagina ? ' aria-current="page"' : "";
    return '<li><a href="' + v.link + '"' + attiva + ">" + v.testo + "</a></li>";
  }).join("");

  const header =
    '<header class="site-header">' +
      '<div class="barra">' +
        '<a class="logo" href="index.html">' +
          '<img src="' + SITO.logo + '" width="341" height="373" alt="">' +
          "<span>" + SITO.nome + "</span>" +
        "</a>" +
        '<nav aria-label="Menu principale"><ul class="menu">' + voci + "</ul></nav>" +
      "</div>" +
    "</header>";

  const footer =
    '<footer class="site-footer">' +
      '<div class="barra">' +
        "<span>© " + SITO.anno + " " + SITO.nome + "</span>" +
        '<span class="secondario">Pagina di prova · sito gatti</span>' +
      "</div>" +
    "</footer>";

  document.body.insertAdjacentHTML("afterbegin", header);
  document.body.insertAdjacentHTML("beforeend", footer);
})();
