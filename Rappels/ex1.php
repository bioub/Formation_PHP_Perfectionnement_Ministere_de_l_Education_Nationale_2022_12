<?php

function compareNumbers($nb1, $nb2) {
    if ($nb1 > $nb2) {
        echo "$nb1 est plus grand que $nb2\n";
    } else if ($nb1 < $nb2) {
        echo "$nb1 est plus petit que $nb2\n";
    } else {
        echo "$nb1 est égal à $nb2\n";
    }
}

compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));
compareNumbers(mt_rand(0, 5), mt_rand(0, 5));