/* ==========================================================
   Sito gatti — parti comuni a tutte le pagine
   - carica header e footer dai file separati
       partials/header.html
       partials/footer.html
   - gestisce il menu mobile a doppio stadio
       1° stadio: pulsante ☰ apre il pannello
       2° stadio: chevron apre le sottovoci
   Per cambiare menu, logo o testi modifica i due file partials:
   questo script non va toccato.
   Ogni pagina deve includere, nell'<head>:
     <link rel="stylesheet" href="css/style.css?v=N">
     <script src="js/layout.js?v=N" defer></script>
   ========================================================== */

(function () {
  function carica(file, posizione) {
    return fetch(file, { cache: "no-cache" }) // ricontrolla sempre la versione aggiornata
      .then(function (r) {
        if (!r.ok) throw new Error(file + " non trovato (" + r.status + ")");
        return r.text();
      })
      .then(function (html) { document.body.insertAdjacentHTML(posizione, html); })
      .catch(function (err) { console.error("layout.js:", err.message); });
  }

  // Voce di menu della pagina corrente (anche il genitore di un sottomenu)
  function evidenziaPagina() {
    var pagina = location.pathname.split("/").pop() || "index.html";
    document.querySelectorAll(".menu > li > a").forEach(function (a) {
      if (a.getAttribute("href") === pagina) a.setAttribute("aria-current", "page");
    });
  }

  function menuMobile() {
    var header = document.querySelector(".site-header");
    var toggle = document.querySelector(".menu-toggle");
    if (!header || !toggle) return;
    var etichetta = toggle.querySelector(".solo-lettori");

    function imposta(aperto) {
      header.classList.toggle("menu-aperto", aperto);
      toggle.setAttribute("aria-expanded", String(aperto));
      if (etichetta) etichetta.textContent = aperto ? "Chiudi il menu" : "Apri il menu";
      document.body.classList.toggle("menu-bloccato", aperto);
    }

    // 1° stadio: apre e chiude il pannello
    toggle.addEventListener("click", function () {
      imposta(!header.classList.contains("menu-aperto"));
    });

    // 2° stadio: il chevron apre e chiude le sottovoci
    document.querySelectorAll(".chevron").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var li = btn.closest(".ha-sottomenu");
        var aperto = li.classList.toggle("aperto");
        btn.setAttribute("aria-expanded", String(aperto));
      });
    });

    // Chiusura: tocco su un link, tasto Esc, ritorno a desktop
    document.querySelectorAll(".nav a").forEach(function (a) {
      a.addEventListener("click", function () { imposta(false); });
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        imposta(false);
        document.querySelectorAll(".ha-sottomenu.aperto").forEach(function (li) {
          li.classList.remove("aperto");
          li.querySelector(".chevron").setAttribute("aria-expanded", "false");
        });
      }
    });
    window.matchMedia("(min-width: 901px)").addEventListener("change", function (mq) {
      if (mq.matches) imposta(false);
    });
  }

  // Moduli di prova: su GitHub Pages non c'è un server che riceva i dati
  function moduliDemo() {
    document.querySelectorAll("form[data-demo]").forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var esito = form.querySelector(".esito");
        if (esito) {
          esito.hidden = false;
          esito.textContent = "Modulo di prova: il messaggio non è stato inviato. Sul sito definitivo arriverà alla clinica.";
        }
      });
    });
  }

  moduliDemo();

  Promise.all([
    carica("partials/header.html", "afterbegin"),
    carica("partials/footer.html", "beforeend")
  ]).then(function () {
    evidenziaPagina();
    menuMobile();

    // Se l'indirizzo punta a una sezione (es. #recapiti nel footer), ci si sposta dopo il caricamento
    if (location.hash) {
      var dest = document.getElementById(location.hash.slice(1));
      if (dest) dest.scrollIntoView();
    }

    document.querySelectorAll("[data-anno]").forEach(function (el) {
      el.textContent = new Date().getFullYear();
    });
  });
})();
