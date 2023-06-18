<h1>IX. Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br><br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php
//declaration de la l'age et du genre
$age = 45 ;
$genre ="F";

echo "Age : $age <br>";
echo "<br> Genre : $genre <br>";

if ($genre != "F"){
    switch(true){
        case $age > 20: echo "<br>Cet homme est imposable"; break;
        default: echo "<br>Cet homme n'est pas imposable";
    }

}elseif($age >= 18 && $age <= 35){
    echo "<br>Cette femme est imposable";
}else {
    echo "<br>Cette femme n'est pas imposable";
}

