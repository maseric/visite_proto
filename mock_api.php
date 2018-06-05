<?php
// script PHP pipeau pour envoyer une array de visteurs (chaque visiteur est un objet JSON)
header('Content-type:application/json;charset=utf-8');
echo '[{"id":1,"nom":"valjean","prenom":"jean","dateNaiss":"28/01/2009","nationalite":"1","entreprise":{"raisonSociale":"miserables inc","ville":"toulon","CP":"83000","pays":"1","adresse":"22 rue des putes","PJ":""}},{"id":2,"nom":"dupond moretti","prenom":"eric","dateNaiss":"06/01/2009","nationalite":"1","entreprise":{"raisonSociale":"raccroc inc","ville":"paris","CP":"75016","pays":"1","adresse":"1 rue du pdt coty","PJ":""}}]';
?>