<?php

require_once __DIR__ . '/../src/Personne.php';

$s1 = 'Jean';
$s2 = $s1; // passage par copie (on recopie la valeur 'Jean' dans $s2)
//$s2 = &$s1; // passage par référence (on recopie l'adresse de $s1 dans $s2)
$s2 = 'Eric';

echo $s1 . "\n"; // Jean

$o1 = new Personne();
$o1->setPrenom('Eric');
$o2 = $o1; // passage par référence (on recopie l'adresse $o1 dans $o2)
//$o2 = clone $o1; // duplique l'objet derrière la référence $o1 et affecte la nouvelle référence à $o2
$o2->setPrenom('Eric');

echo $o1->getPrenom() . "\n"; // Eric
