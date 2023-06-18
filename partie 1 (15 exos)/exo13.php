<h1>XIII. Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>
<h2>Résultat</h2>

<?php
//déclaration du tableau de notes de l'élève 
$studentNotes = [10, 12, 8 ,19, 3, 16, 11, 13, 9] ;

function calculerMoyenne(array $notes, int $nbDecimal) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, $nbDecimal);

    return $moyenne;
}

function affTableauLigne ($tableau) {
    $line="";
    foreach($tableau as $note) {
        $line.=$note." " ;
    }
return $line ;
}


echo "Les notes obtenues par l’élève sont :".affTableauLigne($studentNotes) ."<br>";
echo "la moyenne de l'élève est de :".calculerMoyenne ($studentNotes, 2);