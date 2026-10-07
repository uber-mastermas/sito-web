/* ==========================================================
   L'Olio della Duchessa — parti comuni a tutte le pagine
   - menu mobile (☰ / ✕). Il menu è a un solo livello:
     se un giorno servono sottovoci, si riprende il chevron
     dal modello del metodo.
   - comparsa lenta delle sezioni allo scorrimento
     (disattivata se il sistema chiede meno animazioni)
   Header e footer sono inclusi da PHP: qui non si caricano.
   ========================================================== */

(function () {
  var header = document.querySelector(".site-header");
  var toggle = document.querySelector(".menu-toggle");

  if (header && toggle) {
    var etichetta = toggle.querySelector(".solo-lettori");

    function imposta(aperto) {
      header.classList.toggle("menu-aperto", aperto);
      toggle.setAttribute("aria-expanded", String(aperto));
      if (etichetta) etichetta.textContent = aperto ? "Chiudi il menu" : "Apri il menu";
      document.body.classList.toggle("menu-bloccato", aperto);
    }

    toggle.addEventListener("click", function () {
      imposta(!header.classList.contains("menu-aperto"));
    });
    document.querySelectorAll(".nav a").forEach(function (a) {
      a.addEventListener("click", function () { imposta(false); });
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") imposta(false);
    });
    window.matchMedia("(min-width: 1001px)").addEventListener("change", function (mq) {
      if (mq.matches) imposta(false);
    });
  }

  // Banner privacy: "Ho capito e accetto" ricorda la scelta; "Non accetto" porta su Google.
  // La mappa (unico servizio esterno) si carica solo dopo l'accettazione.
  var CHIAVE = "duchessa-privacy-v1";
  function leggi() { try { return localStorage.getItem(CHIAVE); } catch (e) { return null; } }
  function caricaMappe() {
    document.querySelectorAll("iframe[data-src]").forEach(function (f) { f.src = f.getAttribute("data-src"); f.removeAttribute("data-src"); });
  }
  var banner = document.querySelector(".banner-privacy");
  if (leggi() === "ok") {
    caricaMappe();
  } else if (banner) {
    banner.hidden = false;
    document.body.classList.add("con-banner");
    banner.addEventListener("click", function (e) {
      var scelta = e.target.getAttribute && e.target.getAttribute("data-privacy");
      if (scelta === "accetto") {
        try { localStorage.setItem(CHIAVE, "ok"); } catch (err) {}
        banner.hidden = true;
        document.body.classList.remove("con-banner");
        caricaMappe();
      } else if (scelta === "rifiuto") {
        window.location.href = "https://www.google.com/";
      }
    });
  }

  // Pulsante "torna su": compare dopo un po' di scorrimento
  var su = document.querySelector(".torna-su");
  if (su) {
    var mostra = function () { su.classList.toggle("visibile", window.scrollY > 600); };
    window.addEventListener("scroll", mostra, { passive: true });
    mostra();
    su.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: window.matchMedia("(prefers-reduced-motion: reduce)").matches ? "auto" : "smooth" });
    });
  }

  // Comparsa lenta: "entrare lentamente nel mondo dell'olio"
  var lento = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var elementi = document.querySelectorAll("[data-appare]");
  if (!lento && "IntersectionObserver" in window && elementi.length) {
    document.documentElement.classList.add("con-comparsa");
    var oss = new IntersectionObserver(function (voci) {
      voci.forEach(function (v) {
        if (v.isIntersecting) { v.target.classList.add("visibile"); oss.unobserve(v.target); }
      });
    }, { rootMargin: "0px 0px -8% 0px" });
    elementi.forEach(function (el) { oss.observe(el); });
  }
})();
