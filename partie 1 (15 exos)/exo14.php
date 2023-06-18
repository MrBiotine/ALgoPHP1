<h1>XIV. Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>
Affichage (si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 :
</p>
<h2>Résultat</h2>

<?php
//declaration des variables
$birthDate = "17/01/1985";
$currentDate = "21/05/2018";

//cette fonction fonctionne avec les dates en notations anglaise Year-Month-Day
function afficheAge($birthDate,$currentDate)
{
//On déclare les dates à comparer
$dateNais = new DateTime($birthDate);
$dateJour = new DateTime($currentDate);

//On calcule la différence
$difference = $dateNais->diff($dateJour);

//Affichage du résultat en année, mois et jour grâce à la methode format:
 echo $difference->format('%Y')." ans, ".$difference->format('%m')." mois, ".$difference->format('%d')." jours.\n";

//On retourne la différence en années
//return $difference->format('%Y');
}


//conversion des dates du format "jj/mm/aaaa" au format "yyyy-mm-dd" 
function convertDate($dateFr){
// on passe de "jj/mm/yyyy" à "jj-mm-yyyy"
$date1 = str_ireplace("/","-",$dateFr);

$date=date_create($date1);
return $newDate = date_format($date,"Y-m-d"); //renvoie la date avec le format qu'on veut "yyyy-mm-dd"

}

echo "Date du jour : $currentDate - en format standard : ".convertDate($currentDate)."<br>";
echo "Date de naissance : $birthDate : - en format standard : ".convertDate($birthDate)."<br>";


echo afficheAge(convertDate($birthDate),convertDate($currentDate));





