<h1>III. Exercice 3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
<h2>Résultat</h2>
<?php
// Déclaration de la chaine de caractère
$sentenceData = "<< Notre formation DL commence aujourd'hui >>";

//on remplace "aujourd'hui" par "demain" dans le texte contenu dans $sentenceData
$newSentenceData = str_replace("aujourd'hui", "demain", $sentenceData); 

echo "La phrase :<br>".$sentenceData ."<br>devient : <br>".$newSentenceData ;


