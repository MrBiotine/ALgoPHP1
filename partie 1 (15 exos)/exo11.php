<h1>XI. Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.<br><br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>
<h2>Résultats</h2>

<?php

//Initialisation du tableau
$marques = ["Peugeot ", "Renault", "BMW ", "Mercedes"];
$nbMarques = count($marques);

echo "<p> le tableau comporte $nbMarques marques listées ci-dessous :</p>";
echo "<ul>";
//lire le tableau avec foreach

foreach($marques as $marque) {
    echo "<li> $marque </li>";
}
echo "</ul>";