<?php
function inverser($array) {
    $values = [];

    for ($i=count($array)-1; $i>=0; $i--)
    {
        $values[] = $array[$i];
    }

    return $values;
}

$tab = ["A", "B", "C", "D"];
print_r(inverser($tab));
var_dump(inverser($tab));

// Solution rapide
var_dump(array_reverse($tab));
