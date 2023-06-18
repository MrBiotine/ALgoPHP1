<h1>XV. Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br><br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p><br>

<h2>Résultats</h2>

<?php

Class Personne {
    private $_name ;           //les attributs de la classe personne
    private $_surname ;
    private $_birthdate ;
    private $_age ;
/* on définie ("constuit") la méthode "magique" qui permet d'initilaiser les attributs de chaque instance que nous allons créer avec " new Personne($name,$surname,$birthdate) " */

    public function __construct($name,$surname,$birthdate){
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_birthdate = $birthdate; 
              
    }

/* On définit des methodes (un "getter") pour pouvoir accéder aux attributs d'une instance */

    public function getName(){
        return $this->_name;
    }

    public function getSurname(){
        return $this->_surname;
    }

    public function getBirthDate(){
        return $this->_birthdate;
    } 

//Et une methode pour calculer l'age à partir de la date de naissance ;

    public function CalculerAge()
    {
    //On déclare les dates à comparer
    $dateNais = new DateTime($this->_birthdate);
    $dateJour = new DateTime();
    
    //On calcule la différence
    $difference = $dateNais->diff($dateJour);
    
    //On retourne la différence en années
    return $difference->format('%Y');
    }
}

//Création de 2 instances de la classe Personne :
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

/*

function CalculerAge($date)
{
//On déclare les dates à comparer
$dateNais = new DateTime($date);
$dateJour = new DateTime();

//On calcule la différence
$difference = $dateNais->diff($dateJour);

//On retourne la différence en années
return $difference->format('%Y');
}

*/

// Affichage du Prénom Nom et l'age actuel de chaque instance Personne :

echo $p1->getSurname()." ".$p1->getName()." a ".$p1->CalculerAge()." ans. <br><br>" ;
echo $p2->getSurname()." ".$p2->getName()." a ".$p2->CalculerAge()." ans .<br><br>" ;
