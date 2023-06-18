<h1>Exercice 8</h1>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :<br>
    1 x 8 = 8<br>
    2 x 8 = 16<br>
    3 x 8 = 24<br>
    .....  <br>
    Remarque : proposer 2 solutions avec 2 types de boucles.
    
</p>
<h2>Résultat</h2>

<?php
//Avec une boucle for

// Déclaration de la table et de sa taille (nombre de ligne)
$numTable=7 ;
$tailleTable =20 ;

//Constrution de la fonction afficheTable(n). n = nombre de la table ; l =  nombre de lignes
// elle retourne une chaine de caractère qu'on veut afficher

function afficheTable($n, $l) {
    $table ="";
    for($i = 1;$i <= $l;$i++){
        $lineTable = "$i x $n = ".$i*$n ."<br>" ;
        $table.=$lineTable ;
    }
    return $table;
}

 echo "Voici la table de $tailleTable du nombre $numTable : <br>".afficheTable($numTable,$tailleTable) ;



?>

