<?php

require_once __DIR__ . '/../src/CompteBancaire.php';

$cptCourant = new CompteBancaire();
$cptCourant->setType('Courant');
$cptCourant->setProprietaire('Elon Musk');

$cptCourant->crediter(199 * 1000 * 1000 * 1000);
$cptCourant->debiter(44 * 1000 * 1000 * 1000);

echo "Propriétaire : " . $cptCourant->getProprietaire() . "\n";
echo "Type de compte : " . $cptCourant->getType() . "\n";
echo "Solde : " . $cptCourant->getType() . "\n";

// Compléter la classe CompteBancaire tel que :
// créer 3 propriétés $type, $proprietaire, $solde
// initialiser le solde à 0
// créer les getters / setters pour ces 3 propriétés sauf setSolde
// intéragir avec le solde via les méthodes crediter et debiter
// l'exemple devra afficher :
// Propriétaire : Elon Musk
// Type de compte : Courant
// Solde : 155000000000

