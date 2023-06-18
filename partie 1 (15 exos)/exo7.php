<h1>VII. Exercice 7</h1>
<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
</p>
<ul>
    <li>Poussin : entre 6 et 7 ans</li>
    <li>Pupille : entre 8 et 9 ans</li>
    <li>Minime : entre 10 et 11 ans</li>
    <li>Cadet : à partir de 12 ans</li>
    <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
</ul>
<h2>Résultat</h2>
<?php
// donnée : age d'un enfant
$ageKid = 11.56 ; 
//conditions à respecter : le type de $ageKid doit etre un entier simple (integer) 
// gettype($ageKi) == "integer"
//et $ageKid >= 0

echo "le type de la variable est ".gettype($ageKid)."<br>";

if(gettype($ageKid) == "integer" && $ageKid >= 0){
    if($ageKid > 12){
        $resultat = "Cadet";
    }elseif($ageKid >= 10) {
        $resultat = "Minime" ;
    }elseif($ageKid >=8) {
        $resultat = "Pupille" ;
    }elseif($ageKid >= 6) {
        $resultat = "Poussin" ;
    }else{
        $resultat = "Non Gérée !!";
    }
    echo "L'enfant qui a $ageKid ans appartient à la catégorie \" $resultat \" <br>";
} else {
    echo "Veuillez saisir un âge avec un nombre entier et positif, SVP !<br>";
}
?>