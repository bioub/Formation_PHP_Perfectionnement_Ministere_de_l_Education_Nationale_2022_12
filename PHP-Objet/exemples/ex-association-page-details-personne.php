<?php

require_once __DIR__ . '/../src/Personne.php';
require_once __DIR__ . '/../src/Societe.php';

$personne = new \MinEduc\Address\Personne();
$personne->setPrenom('Steve');
$personne->setNom('Jobs');

$societe = new \MinEduc\Address\Societe();
$societe->setNom('Apple');

$personne->setSociete($societe); // association

// Plus loin dans le code on génère l'affichage
// (si web en HTML)
echo "Detail d'une personne\n";
echo "Prénom : " . $personne->getPrenom() .  "\n";
echo "Nom : " . $personne->getNom() .  "\n";
echo "Société : " . $personne->getSociete()->getNom() .  "\n";














