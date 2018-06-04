sed -e's/^/"/g' -e's/$/" +/g' -e's/v1/" + i + "/g' -e'1 s/^/function template(i){return /g' -e'$ s/ +$/;}/g' template.html  > template.html.js
unix2dos template.html.js