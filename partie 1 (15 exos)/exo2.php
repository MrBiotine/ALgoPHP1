<h1>II. Exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<h2>Résultat</h2>
<?php
// Déclaration de la chaine de caractère
$sentenceData = "<< Notre formation DL commence aujourd'hui >>";
// Compter le nombre de mots
$nbMots = str_word_count($sentenceData);
echo "La phrase ".$sentenceData ." contient $nbMots mots<br>";
