<?php
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Qatar' => 'Doha',
];

echo $capitales['France'] . "\n"; // France

function inverserCleValeurImmuable($array) {
    $values = [];

    foreach ($array as $key => $value) {
        $values[$value] = $key;
    }

    return $values;
}

var_dump(inverserCleValeurImmuable($capitales));

function inverserCleValeurMuable(&$array) {
    foreach ($array as $key => $value) {
        unset($array[$key]);
        $array[$value] = $key;
    }

    return $array;
}

inverserCleValeurMuable($capitales);
var_dump($capitales);

// Solution rapide
var_dump(array_flip($capitales));
