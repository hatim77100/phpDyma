<?php

echo "<pre>";

$arr = [1, 2, 3];
$arr1 = [[1, 2], [3,4]];

foreach ($arr as $a => $value) {
    echo "key : $a \n";
    echo "value : $value \n";
}

// modifier la valeur

foreach ($arr as &$value) {
    $value++;
}

print_r($arr);

foreach ($arr1 as list($a,$b)) {
    echo "$a\n";
    echo "$b\n";
}

// print_r($arr1);

echo "<pre/>";