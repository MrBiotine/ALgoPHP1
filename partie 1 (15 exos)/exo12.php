<h1>XII. Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br><br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>
<h2>Résultat</h2>

<?php

//initialisation d'un tableau associatif
$prenoms = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
    
];

$langue = " ";

foreach ($prenoms as $prenom => $langue){
    switch($langue) {
        case "FRA": echo "Salut ! "; break;
        case "ESP": echo "Hola ! "; break;
        case "ENG": echo "Hello ! "; break;
        default: echo "Langue non gérée !<br>";
}
echo "$prenom <br>";
 
}

?>