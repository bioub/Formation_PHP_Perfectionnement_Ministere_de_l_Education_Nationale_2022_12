<?php

require_once __DIR__ . '/../src/CompteBancaire.php';
require_once __DIR__ . '/../src/CompteBancaireType.php';

try {
    $cptCourant = new CompteBancaire();
    $cptCourant->setType(CompteBancaireType::COURANT);
    $cptCourant->setProprietaire('Elon Musk');

    $cptCourant->crediter(199 * 1000 * 1000 * 1000);
    $cptCourant->debiter(44 * 1000 * 1000 * 1000);

    echo "Propriétaire : " . $cptCourant->getProprietaire() . "\n";
    echo "Type de compte : " . $cptCourant->getType() . "\n";
    echo "Solde : " . $cptCourant->getSolde() . "\n";
}
catch (Exception $err) {
    // ce bloc catch intercepte toutes les Exception qui se sont produites
    // dans le bloc try directement ou indirectement (l'erreur peut être lancée dans un autre fonction
    // TODO logger l'erreur dans un fichier
    echo "Erreur " . $err->getMessage() . "\n";
}

// Compléter la classe CompteBancaire tel que :
// créer 3 propriétés $type, $proprietaire, $solde
// initialiser le solde à 0
// créer les getters / setters pour ces 3 propriétés sauf setSolde
// intéragir avec le solde via les méthodes crediter et debiter
// l'exemple devra afficher :
// Propriétaire : Elon Musk
// Type de compte : Courant
// Solde : 155000000000

// Bonus :
// N'autoriser que 3 types de comptes : Courant, PEL, Livret A
// Interdire les soldes négatifs
// Interdire de passer des montants négatifs à crediter et debiter
