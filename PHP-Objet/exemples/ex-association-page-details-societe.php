<?php
require_once __DIR__ . '/../src/Personne.php';
require_once __DIR__ . '/../src/Societe.php';

$societe = new Societe();
$societe->setNom('Apple');

$personne = new Personne();
$personne->setPrenom('Steve');
$personne->setNom('Jobs');

$societe->addEmploye($personne);

$personne = new Personne();
$personne->setPrenom('Tim');
$personne->setNom('Cook');

$societe->addEmploye($personne);


// Plus loin dans le code on génère l'affichage
// (si web en HTML)

echo "Detail d'une société\n";
echo "Nom : " . $societe->getNom() .  "\n";
echo "Employés : " .  "\n";

// boucle ...
foreach ($societe->getEmployes() as $employe) {
    echo $employe->getPrenom() . ' ' . $employe->getNom() . "\n";
}