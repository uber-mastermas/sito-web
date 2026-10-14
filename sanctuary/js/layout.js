/* ==========================================================
   The Sanctuary — parti comuni a tutte le pagine
   - menu mobile a doppio stadio: ☰ apre il pannello, il chevron apre le sezioni della sede
   - header trasparente sopra la foto/video d'apertura, pieno dopo lo scorrimento
   - pannello Reserve (sede → spazio)
   - video d'apertura: sceglie la versione orizzontale o verticale
   - banner privacy, mappe dopo il consenso, torna su, comparsa lenta
   - modulo di prenotazione: preseleziona lo spazio da ?space=
   Header e footer sono inclusi da PHP: qui non si caricano.
   ========================================================== */

(function () {
  var body = document.body;
  var lento = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var header = document.querySelector(".site-header");
  var toggle = document.querySelector(".menu-toggle");

  /* ---------- Menu mobile ---------- */
  function chiudiSottomenu() {
    document.querySelectorAll(".ha-sottomenu.aperto").forEach(function (li) {
      li.classList.remove("aperto");
      li.querySelector(".chevron").setAttribute("aria-expanded", "false");
    });
  }
  function impostaMenu(aperto) {
    if (!header || !toggle) return;
    header.classList.toggle("menu-aperto", aperto);
    toggle.setAttribute("aria-expanded", String(aperto));
    var et = toggle.querySelector(".solo-lettori");
    if (et) et.textContent = aperto ? "Close menu" : "Open menu";
    body.classList.toggle("menu-bloccato", aperto);
    if (!aperto) chiudiSottomenu();
    aggiornaHeader();
  }
  if (header && toggle) {
    toggle.addEventListener("click", function () { impostaMenu(!header.classList.contains("menu-aperto")); });
    document.querySelectorAll(".chevron").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var li = btn.closest(".ha-sottomenu");
        var aperto = !li.classList.contains("aperto");
        chiudiSottomenu();
        li.classList.toggle("aperto", aperto);
        btn.setAttribute("aria-expanded", String(aperto));
      });
    });
    document.querySelectorAll(".nav a").forEach(function (a) {
      a.addEventListener("click", function () { impostaMenu(false); });
    });
    window.matchMedia("(min-width: 1101px)").addEventListener("change", function (mq) {
      if (mq.matches) impostaMenu(false);
    });
  }

  /* ---------- Header sopra la foto d'apertura ---------- */
  function aggiornaHeader() {
    if (!header) return;
    var pieno = !body.classList.contains("con-hero") || window.scrollY > 40 || header.classList.contains("menu-aperto");
    header.classList.toggle("pieno", pieno);
  }
  window.addEventListener("scroll", aggiornaHeader, { passive: true });
  aggiornaHeader();

  /* ---------- Pannello Reserve ---------- */
  var reserve = document.getElementById("pannello-reserve");
  var ultimoFocus = null;
  function impostaReserve(aperto) {
    if (!reserve) return;
    if (aperto) {
      impostaMenu(false);
      ultimoFocus = document.activeElement;
      reserve.hidden = false;
      body.classList.add("reserve-aperto");
      var primo = reserve.querySelector("a, button");
      if (primo) primo.focus();
    } else {
      reserve.hidden = true;
      body.classList.remove("reserve-aperto");
      if (ultimoFocus) ultimoFocus.focus();
    }
  }
  document.querySelectorAll("[data-apri-reserve]").forEach(function (b) {
    b.addEventListener("click", function (e) { e.preventDefault(); impostaReserve(true); });
  });
  if (reserve) {
    reserve.querySelectorAll("[data-chiudi-reserve]").forEach(function (b) {
      b.addEventListener("click", function () { impostaReserve(false); });
    });
    reserve.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () { reserve.hidden = true; body.classList.remove("reserve-aperto"); });
    });
  }
  document.addEventListener("keydown", function (e) {
    if (e.key !== "Escape") return;
    if (reserve && !reserve.hidden) { impostaReserve(false); return; }
    impostaMenu(false);
  });

  /* ---------- Video d'apertura ---------- */
  document.querySelectorAll(".hero-video").forEach(function (v) {
    if (lento) return;
    var mq = window.matchMedia("(max-width: 700px)");
    function scegli() {
      var src = mq.matches ? (v.getAttribute("data-mobile") || "") : (v.getAttribute("data-desktop") || "");
      if (!src) { v.removeAttribute("src"); v.load(); v.classList.remove("pronto"); return; }
      if (v.getAttribute("src") === src) return;
      v.src = src;
      v.addEventListener("playing", function () { v.classList.add("pronto"); }, { once: true });
      var p = v.play();
      if (p && p.catch) p.catch(function () {});
    }
    scegli();
    mq.addEventListener("change", scegli);
  });

  /* ---------- Banner privacy ----------
     "Accept" attiva le mappe; "Decline" chiude il banner e il sito resta navigabile
     senza servizi esterni. La scelta si ricorda nella memoria del browser. */
  var CHIAVE = "sanctuary-privacy-v1";
  function leggi() { try { return localStorage.getItem(CHIAVE); } catch (e) { return null; } }
  function scrivi(v) { try { if (v) { localStorage.setItem(CHIAVE, v); } else { localStorage.removeItem(CHIAVE); } } catch (e) {} }
  function caricaMappe() {
    document.querySelectorAll("iframe[data-src]").forEach(function (f) { f.src = f.getAttribute("data-src"); f.removeAttribute("data-src"); });
  }
  var banner = document.querySelector(".banner-privacy");
  var scelta0 = leggi();
  if (scelta0 === "ok") {
    caricaMappe();
  } else if (scelta0 !== "no" && banner) {
    banner.hidden = false;
    body.classList.add("con-banner");
    banner.addEventListener("click", function (e) {
      var scelta = e.target.getAttribute && e.target.getAttribute("data-privacy");
      if (scelta !== "accetto" && scelta !== "rifiuto") return;
      scrivi(scelta === "accetto" ? "ok" : "no");
      banner.hidden = true;
      body.classList.remove("con-banner");
      if (scelta === "accetto") caricaMappe();
    });
  }
  document.querySelectorAll("[data-rivedi-privacy]").forEach(function (b) {
    b.addEventListener("click", function () { scrivi(null); window.location.reload(); });
  });
  // La mappa in attesa del consenso: un clic sul riquadro riapre il banner
  document.querySelectorAll("[data-mostra-banner]").forEach(function (b) {
    b.addEventListener("click", function () {
      if (!banner) return;
      banner.hidden = false; body.classList.add("con-banner");
      var bt = banner.querySelector("button"); if (bt) bt.focus();
    });
  });

  /* ---------- Torna su ---------- */
  var su = document.querySelector(".torna-su");
  if (su) {
    var mostra = function () { su.classList.toggle("visibile", window.scrollY > 600); };
    window.addEventListener("scroll", mostra, { passive: true });
    mostra();
    su.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: lento ? "auto" : "smooth" });
    });
  }

  /* ---------- Comparsa lenta ---------- */
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

  /* ---------- Gallerie a scorrimento: frecce su desktop ---------- */
  document.querySelectorAll("[data-galleria]").forEach(function (g) {
    var binario = g.querySelector(".galleria-binario");
    var frecce = g.querySelectorAll(".galleria-freccia");
    if (!binario || frecce.length < 2) return;
    function aggiorna() {
      var max = binario.scrollWidth - binario.clientWidth;
      frecce[0].disabled = binario.scrollLeft <= 4;
      frecce[1].disabled = binario.scrollLeft >= max - 4;
    }
    frecce.forEach(function (f) {
      f.addEventListener("click", function () {
        binario.scrollBy({ left: binario.clientWidth * 0.8 * Number(f.getAttribute("data-dir")), behavior: lento ? "auto" : "smooth" });
      });
    });
    binario.addEventListener("scroll", function () { window.requestAnimationFrame(aggiorna); }, { passive: true });
    window.addEventListener("resize", aggiorna);
    aggiorna();
  });

  /* ---------- Modulo: spazio scelto dal pannello Reserve (?space=restaurant) ---------- */
  var spazio = new URLSearchParams(window.location.search).get("space");
  var sel = document.querySelector("select[name=spazio]");
  if (spazio && sel && sel.querySelector('option[value="' + spazio.replace(/[^a-z-]/g, "") + '"]')) {
    sel.value = spazio;
  }
})();
