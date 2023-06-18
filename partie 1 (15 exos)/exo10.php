<h1>X. Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>
<h2>Résultat</h2>


<?php

//Déclaration des données
$montant = 152;
$montantDonne = 200;
$montantRendu = $montantDonne - $montant;

//on dispose de 4 modèle de monnaie ; 10, 5 , 2 et 1 euros

$ten = 0 ; //nombre de billets de 10 initialise à 0
$five = 0;
$two = 0;
$one = 0;

$reste = $montantRendu - (10*$ten + 5*$five + 2*$two + 1*$one);

while($reste >= 0){
    $reste = $reste -10 ;
    $ten++;
}
$ten--; //nombre de billets de 10

$reste = $montantRendu - (10*$ten + 5*$five + 2*$two + 1*$one);
while($reste >= 0){
    $reste = $reste - 5 ;
    $five++;
}
$five--;  //nombre de billet de 5

$reste = $montantRendu - (10*$ten + 5*$five + 2*$two + 1*$one);
while($reste >= 0){
    $reste = $reste - 2 ;
    $two++;
}
$two--;  //nombre de pièces de 2

$reste = $montantRendu - (10*$ten + 5*$five + 2*$two + 1*$one);
while($reste >= 0){
    $reste = $reste - 1 ;
    $one++;
}
$one--; //nombre de pieces de 1


echo "Montant à payer : $montant € <br>";
echo "Montant versé : $montantDonne € <br>";
echo "Montant rendu : $montantRendu € <br>";


 echo "<br> Billiets de 10 : $ten - billiet de 5 : $five - pièces de  2 : $two - pieces de 1 : $one" ;
