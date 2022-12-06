<?php

require_once __DIR__ . '/../src/Personne.php';
require_once __DIR__ . '/../src/Societe.php';

$personne = new Personne();
$personne->setPrenom('Steve');
$personne->setNom('Jobs');

$societe = new Societe();
$societe->setNom('Apple');

$personne->setSociete($societe); // association

// Plus loin dans le code on génère l'affichage
// (si web en HTML)
echo "Detail d'un personne\n";
echo "Prénom : " . $personne->getPrenom() .  "\n";
echo "Nom : " . $personne->getNom() .  "\n";
echo "Société : " . $personne->getSociete()->getNom() .  "\n";














