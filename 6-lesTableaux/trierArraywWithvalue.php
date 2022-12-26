<?php

echo "<pre>";

$a = [22, 1, 33, 235, 12, 45];
$b = ['test', 'Test', 'Aa', 'B', 'b', 'foo', 'Foo'];
$c = ['a' => 'b', 'foo' => 'bar', 'Hello' => 'world', 'Ciao' => 'Hello'];

// tri par valeur et non preservation des keys
// sort($a);
// sort($b);
// sort($c);
// print_r($a);
// print_r($b);
// print_r($c);

// tri par valeur et preservation des keys : c'est très utile dans les tableaux associatifs:
// asort($a);
// asort($b);
// asort($c);
// print_r($a);
// print_r($b);
// print_r($c);

// tri dans le sens inverse et non preservation des keys;
// rsort($a);
// rsort($b);
// rsort($c);
// print_r($a);
// print_r($b);
// print_r($c);

// tri dans le sens inverse en preservant les keys;
// arsort($c);
// print_r($c);

// tri valeur avec user defined function
usort($a, fn($val1, $val2) => $val1 - $val2);
// usort($b,fn($val1, $val2) => strcmp($val1, $val2));
usort($b,fn($val1, $val2) => strcasecmp($val1, $val2)); // strcasecmp =>  est une fonction de comparaison binaire insensible à la casse.
// usort($c,fn($val1, $val2) => strcasecmp($val1, $val2)); // strcasecmp => avec cette méthode on prends pas en considération la casse
uasort($c,fn($val1, $val2) => strcasecmp($val1, $val2)); /*on préserve les clés avec uasort() strcasecmp => avec cette méthode on prends pas en considération la casse*/
// usort($c);
print_r($a);
print_r($b);
print_r($c);


echo "<pre/>";