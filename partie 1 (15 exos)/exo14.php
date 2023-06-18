<h1>XIV. Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>
Affichage (si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 :
</p>
<h2>Résultat</h2>

<?php
//cette fonction fonctionne avec les dates en notations anglaise Year-Month-Day
function CalculerDiffDate($birthDate,$currentDate)
{
//On déclare les dates à comparer
$dateNais = new DateTime($birthDate);
$dateJour = new DateTime($currentDate);

//On calcule la différence
$difference = $dateNais->diff($dateJour);

//On retourne la différence en années
return $difference->format('%Y');
}

$birthDayFr = "17/01/1985";
$currentDateFr = "21/05/2018";

$originalDate = "2020-04-29";

$DateTime = DateTime::createFromFormat('d-m-Y', $birthDayFr);
$newDate = $DateTime->format('Y-m-d');

echo "The old date is $birthday. ";
echo "The new date is $newDate.";

