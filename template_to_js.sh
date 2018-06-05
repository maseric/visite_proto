# 1/ customiser l'apparence pour 1 visiteur dans le fichier template.html 
# 2/ visualiser les modifs sur http://127.0.0.1/visite_proto/visu_template.php
# 3/ quand c'est ok, lancer ce script qui génère un fichier JS inclus dans reunion.html
# 4/ testern reunion.html : la custo est maintenant utilisable pour plusieurs visiteurs !

# en gros ça remplace v1 par i dans le template et englobe le tout dans une fonction JS qui est appelée par le bouton de la page reunion.html
sed -e's/^/"/g' -e's/$/" +/g' -e's/v1/" + i + "/g' -e'1 s/^/function template(i){return /g' -e'$ s/ +$/;}/g' template.html  > template.html.js
unix2dos template.html.js