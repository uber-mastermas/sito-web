#!/usr/bin/env python3
"""Controllo prima del push: tutte le pagine di un progetto a 390, 768 e 1280px.

Uso (dalla cartella sito-web):
    python3 strumenti/controlla.py duchessa  [cartella-screenshot]

- progetto PHP: avvia `php -S`; progetto HTML: `python3 -m http.server`
- per ogni pagina e larghezza: stato HTTP, scorrimento laterale,
  errori JavaScript e di console, immagini rotte
- a 390px apre il menu ☰ e lo chiude con Esc
- salva gli screenshot a pagina intera nella cartella indicata
  (predefinita: /tmp/controllo-<progetto>)
Il server viene spento alla fine (mai pkill: chiude anche la shell).
"""
import glob, os, subprocess, sys, time
from playwright.sync_api import sync_playwright

P = sys.argv[1] if len(sys.argv) > 1 else sys.exit("Uso: controlla.py <progetto> [cartella]")
OUT = sys.argv[2] if len(sys.argv) > 2 else f"/tmp/controllo-{P}"
os.makedirs(OUT, exist_ok=True)
PORTA = 8765

php = glob.glob(f"{P}/*.php")
# la 404 si salta: in locale punta al dominio vero (<base href>)
pagine = sorted(os.path.basename(f) for f in (php or glob.glob(f"{P}/*.html")) if not os.path.basename(f).startswith("404"))
cmd = ["php", "-S", f"127.0.0.1:{PORTA}", "-t", P] if php else ["python3", "-m", "http.server", str(PORTA), "-d", P]
server = subprocess.Popen(cmd, stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)
time.sleep(1)
problemi = 0
try:
    with sync_playwright() as p:
        b = p.chromium.launch()
        for w in (390, 768, 1280):
            for n in pagine:
                pg = b.new_page(viewport={"width": w, "height": 844})
                err = []
                pg.on("pageerror", lambda e: err.append(str(e)))
                pg.on("console", lambda m: err.append(m.text) if m.type == "error" else None)
                r = pg.goto(f"http://127.0.0.1:{PORTA}/{n}")
                pg.wait_for_timeout(600)
                pg.evaluate("document.querySelectorAll('[data-appare]').forEach(e => e.classList.add('visibile'))")
                sw = pg.evaluate("document.documentElement.scrollWidth")
                rotte = pg.evaluate("[...document.images].filter(i => i.complete && i.naturalWidth === 0 && !i.loading).map(i => i.src)")
                ok = r.status == 200 and sw == w and not err and not rotte
                problemi += 0 if ok else 1
                print(f"{w:>5} {n:<22} {r.status} {'OK' if ok else 'PROBLEMA'}"
                      + ("" if sw == w else f" scorre {sw}px") + (f" errori {err}" if err else "") + (f" immagini rotte {rotte}" if rotte else ""))
                pg.screenshot(path=f"{OUT}/{os.path.splitext(n)[0]}-{w}.png", full_page=True)
                pg.close()
        pg = b.new_page(viewport={"width": 390, "height": 844})
        pg.goto(f"http://127.0.0.1:{PORTA}/{pagine[0]}")
        pg.wait_for_timeout(500)
        if pg.locator(".menu-toggle").count():
            pg.click(".menu-toggle"); pg.wait_for_timeout(300)
            pg.screenshot(path=f"{OUT}/menu-aperto-390.png")
            aperto = pg.evaluate("document.querySelector('.site-header').classList.contains('menu-aperto')")
            pg.keyboard.press("Escape"); pg.wait_for_timeout(300)
            print("menu 390px:", "si apre" if aperto else "NON si apre", "/", "Esc chiude" if not pg.evaluate("document.querySelector('.site-header').classList.contains('menu-aperto')") else "Esc NON chiude")
        b.close()
finally:
    server.terminate()
print(f"\n{'Tutto a posto' if not problemi else f'{problemi} problemi'} · screenshot in {OUT}")
