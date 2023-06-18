<h1>IV. Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>
<?php
// Déclaration de la chaine de caractère
$sentenceData = "Engage le jeu que je le gagne ";

//transformation de la chaine
//convertie en minuscule
$sentenceToLower = strtolower($sentenceData);

//enleve tous les espaces
$sentenceTrimed = str_replace(" ","",$sentenceToLower);

//inverse la chaine
$sentenceReverse = strrev($sentenceTrimed);

//on pose la condition
if ($sentenceReverse == $sentenceTrimed) {

    echo"la phrase \" $sentenceData \" est un palindrome :)<br>";
}else   {
    echo"la phrase \" $sentenceData \" n'est pas un palindrome !<br>";
}

echo"<br>";
echo"Phrase telle quelle : $sentenceData <br>" ;
echo "la phrase transformée : $sentenceReverse <br>";
