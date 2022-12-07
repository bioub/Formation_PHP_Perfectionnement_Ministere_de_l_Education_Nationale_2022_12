<?php

use MinEduc\Address\{Personne, User};

require_once __DIR__ . '/../vendor/autoload.php';

$personne = new Personne();
$user = new User();

$personne->setPrenom('Romain');
//$personne->
$user->setPrenom('Romain');

function giveMeAPerson(Personne $personne) {
    // $personne->
}

giveMeAPerson($personne);
giveMeAPerson($user);
