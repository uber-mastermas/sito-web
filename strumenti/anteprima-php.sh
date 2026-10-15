#!/usr/bin/env bash
# Crea l'anteprima HTML di un progetto PHP, per vederlo su GitHub Pages.
# Uso (dalla cartella sito-web):  bash strumenti/anteprima-php.sh duchessa
# Risultato: cartella <progetto>-anteprima/ con le pagine .html generate dal PHP.
# La versione vera resta in <progetto>/ (è quella da caricare sul server).
set -e
P="$1"; [ -d "$P" ] || { echo "Cartella $P non trovata"; exit 1; }
OUT="$P-anteprima"; PORTA=8799
# dominio vero preso da partials/config.php ('url'): nell'anteprima le immagini dei link condivisi puntano a Pages
DOMINIO=$(grep -oP "'url'\s*=>\s*'\K[^']+" "$P/partials/config.php" | sed 's/\./\\./g')
rm -rf "$OUT"; mkdir -p "$OUT"
(cd "$P" && tar --exclude='*.php' --exclude=partials --exclude=robots.txt --exclude=sitemap.xml --exclude='LEGGIMI-*' --exclude=.htaccess -cf - .) | tar -xf - -C "$OUT"
php -S 127.0.0.1:$PORTA -t "$P" >/dev/null 2>&1 & SP=$!
sleep 1
for f in "$P"/*.php; do
  n=$(basename "$f" .php)
  curl -s "http://127.0.0.1:$PORTA/$n.php" \
    | sed -E 's/href="([a-z0-9-]+)\.php\?e=([a-z0-9-]+)/href="\1-\2.html/g; s/href="([a-z0-9-]+)\.php/href="\1.html/g; s/action="([a-z0-9-]+)\.php/action="\1.html/g' \
    | sed -E "s#$DOMINIO/img/#https://uber-mastermas.github.io/sito-web/$OUT/img/#g" \
    | sed -E 's/<meta name="robots" content="index, follow">/<meta name="robots" content="noindex, nofollow">/' \
    | sed -E 's/<form class="modulo" method="post"/<form class="modulo" method="get" onsubmit="alert(\x27Anteprima: il modulo funziona solo sul sito PHP.\x27);return false"/' \
    > "$OUT/$n.html"
  echo "  $n.html"
done
# Pagine con parametro e= (es. evento.php?e=slug): se il progetto ha partials/anteprima-pagine.php,
# questo stampa una riga per pagina ("evento.php?e=slug") e ognuna diventa evento-slug.html
if [ -f "$P/partials/anteprima-pagine.php" ]; then
  for u in $(php "$P/partials/anteprima-pagine.php"); do
    n=$(echo "$u" | sed -E 's/\.php\?e=/-/')
    curl -s "http://127.0.0.1:$PORTA/$u" \
      | sed -E 's/href="([a-z0-9-]+)\.php\?e=([a-z0-9-]+)/href="\1-\2.html/g; s/href="([a-z0-9-]+)\.php/href="\1.html/g; s/action="([a-z0-9-]+)\.php/action="\1.html/g' \
      | sed -E "s#$DOMINIO/img/#https://uber-mastermas.github.io/sito-web/$OUT/img/#g" \
      | sed -E 's/<meta name="robots" content="[^"]*">/<meta name="robots" content="noindex, nofollow">/' \
      | sed -E 's/<form class="modulo" method="post"/<form class="modulo" method="get" onsubmit="alert(\x27Anteprima: il modulo funziona solo sul sito PHP.\x27);return false"/' \
      > "$OUT/$n.html"
    echo "  $n.html"
  done
fi
kill $SP 2>/dev/null || true
rm -f "$OUT/404.html"   # la 404 dell'anteprima non serve (punta al dominio vero)
echo "Anteprima pronta in $OUT/"
