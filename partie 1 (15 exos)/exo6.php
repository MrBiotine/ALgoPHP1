<h1>VI. Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<h2>Résultat</h2>
<?php
//donées de la facture
$nbArticles = 5;
$prixHT = 9.99;
$tauxTVA = 0.20;
//total TTC de la facture
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
$arrondiTTC = round(($totalTTC2),1);

echo"Prix unitaire de l’article : $prixHT € <br>";
echo"Quantité : $nbArticle <br>";
echo"Taux de TVA : $tauxTVA <br>";
echo "Le montant de la facture à régler est de : $totalTTC2 € <br>";
echo "Le total arrondie à une décimale : $arrondiTTC € <br>";