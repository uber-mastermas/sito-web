#!/usr/bin/env bash
# Crea l'anteprima HTML di un progetto PHP, per vederlo su GitHub Pages.
# Uso (dalla cartella sito-web):  bash strumenti/anteprima-php.sh duchessa
# Risultato: cartella <progetto>-anteprima/ con le pagine .html generate dal PHP.
# La versione vera resta in <progetto>/ (è quella da caricare sul server).
set -e
P="$1"; [ -d "$P" ] || { echo "Cartella $P non trovata"; exit 1; }
OUT="$P-anteprima"; PORTA=8799
rm -rf "$OUT"; mkdir -p "$OUT"
(cd "$P" && tar --exclude='*.php' --exclude=partials -cf - .) | tar -xf - -C "$OUT"
(cd "$P" && php -S 127.0.0.1:$PORTA >/dev/null 2>&1) & SP=$!
sleep 1
for f in "$P"/*.php; do
  n=$(basename "$f" .php)
  curl -s "http://127.0.0.1:$PORTA/$n.php" \
    | sed -E 's/href="([a-z0-9-]+)\.php/href="\1.html/g; s/action="([a-z0-9-]+)\.php/action="\1.html/g' \
    | sed -E 's/<form class="modulo" method="post"/<form class="modulo" method="get" onsubmit="alert(\x27Anteprima: il modulo funziona solo sul sito PHP.\x27);return false"/' \
    > "$OUT/$n.html"
  echo "  $n.html"
done
kill $SP
echo "Anteprima pronta in $OUT/"
