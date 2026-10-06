/* ==========================================================
   Sito gatti — carica header e footer dai file separati
     partials/header.html
     partials/footer.html
   Per cambiare menu, logo o testi modifica quei due file:
   questo script non va toccato.
   Ogni pagina deve includere, nell'<head>:
     <link rel="stylesheet" href="css/style.css">
     <script src="js/layout.js" defer></script>
   ========================================================== */

(function () {
  function carica(file, posizione) {
    return fetch(file)
      .then(function (r) {
        if (!r.ok) throw new Error(file + " non trovato (" + r.status + ")");
        return r.text();
      })
      .then(function (html) {
        document.body.insertAdjacentHTML(posizione, html);
      })
      .catch(function (err) {
        console.error("layout.js:", err.message);
      });
  }

  Promise.all([
    carica("partials/header.html", "afterbegin"),
    carica("partials/footer.html", "beforeend")
  ]).then(function () {
    // Evidenzia nel menu la pagina corrente (la radice "/" conta come index.html)
    var pagina = location.pathname.split("/").pop() || "index.html";
    document.querySelectorAll(".menu a").forEach(function (a) {
      if (a.getAttribute("href") === pagina) a.setAttribute("aria-current", "page");
    });

    // Anno corrente nel footer
    document.querySelectorAll("[data-anno]").forEach(function (el) {
      el.textContent = new Date().getFullYear();
    });
  });
})();
