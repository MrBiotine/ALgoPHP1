<h1>V. Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<h2>Résultat</h2>
<?php

//taux de change 1 franc=0,15 244902 euro
$tauxChange=0.15244902; //float

//le montant en franc qu'on veut afficher et convertir en euros 
$valeurFrancs=100;

//arrondir une valeur à 2 décimale 
$valeurEuros= round(($tauxChange*$valeurFrancs),2);

echo afficherConversion($tauxChange,$valeurFrancs);


function afficherConversion(float $taux, float $valeur) : string {
    $resultat = round(($taux*$valeur),2);
    return "<br>Montant en Francs : $valeur <br> $valeur francs = $resultat euros";
}