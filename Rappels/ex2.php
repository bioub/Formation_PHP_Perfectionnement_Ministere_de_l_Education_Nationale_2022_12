<?php
function getMax($array) {
    $max = $array[0];

    for ($i=1; $i<count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return $max;
}

$values = [34, 67, 89, 34];
echo "Max : " . getMax($values) . "\n";

// Solution rapide
echo "Max : " . max($values) . "\n";