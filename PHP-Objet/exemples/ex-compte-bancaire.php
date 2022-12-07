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

// Exercice Nouveautés PHP7+ et namespace (PSR4)

// Dans les classes CompteBancaire et Personne :
// - utiliser Typed properties pour typer les propriétés (slide 64)
// - utiliser Scalar type hint pour typer tous les paramètres (slide 37)
// - utiliser return type pour typer tous les types de retour (slide 41)

// Dans le fichier ex-compte-bancaire :
// Utiliser dans ce fichier Group use statement (slide 46)
// Utiliser dans ce fichier l'autoloader de composer
// Dans ce fichier remplacer les grands nombres par Numeric literal separator (slide 67)

// Dans les Exceptions :
// Créer un nouveau namespace (et le dossier correspondant) \MinEduc\Banque\Exception
// et y déposer (et donc renommer son namespace) la classe DecouvertException
// Créer sur le même modèle que DecouvertException, une classe MontantException
// qui sera utilisé lorsque le montant passé à débiter et créditer est négatif
// Uniquement si vous êtes en php 8.1 (à vérifier avec php -v) :
// Remplacer la classe CompteBancaireType par un enum :
// https://www.php.net/manual/fr/language.enumerations.backed.php
// et remplacer l'exception dans setType par le type hinting