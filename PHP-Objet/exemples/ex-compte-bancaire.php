<?php

use MinEduc\Address\Personne;
use MinEduc\Banque\CompteBancaire;
use MinEduc\Banque\CompteBancaireType;

require_once __DIR__ . '/../src/CompteBancaire.php';
require_once __DIR__ . '/../src/CompteBancaireType.php';
require_once __DIR__ . '/../src/Personne.php';

try {
    $cptCourant = new CompteBancaire();
    $cptCourant->setType(CompteBancaireType::COURANT);
    $proprietaire = new Personne();
    $proprietaire->setPrenom('Elon');
    $proprietaire->setNom('Musk');
    $cptCourant->setProprietaire($proprietaire);

    $cptCourant->crediter(199 * 1000 * 1000 * 1000);
    $cptCourant->debiter(44 * 1000 * 1000 * 1000);

    echo "Propriétaire : " . $cptCourant->getProprietaire()->getPrenom() . " " . $cptCourant->getProprietaire()->getNom() . "\n";
    echo "Type de compte : " . $cptCourant->getType() . "\n";
    echo "Solde : " . $cptCourant->getSolde() . "\n";
} catch (\MinEduc\Banque\DecouvertException $err) {
    // TODO envoyer un email au client et au conseiller
} catch (Exception $err) {
    // ce bloc catch intercepte toutes les Exception qui se sont produites
    // dans le bloc try directement ou indirectement (l'erreur peut être lancée dans un autre fonction
    // TODO logger l'erreur dans un fichier
    echo "Erreur " . $err->getMessage() . "\n";
}

// Exercice Association
// Faire évoluer le code de CompteBancaire de sorte que
// proprietaire soit de type Personne (plutôt que string actuellement)
// Faire évoluer cet exemple également avec un objet de type Personne
// $proprietaire = new Personne();
// $proprietaire->setPrenom('Elon');
// $proprietaire->setNom('Musk');
// ....

// Bonus++
// Faire évoluer le code de Personne pour quelle puisse
// avoir plusieurs Société
// Donc Elon Musk : Tesla, Twitter, SpaceX...