<?php

echo "<pre>";

$arr = [1, 2];
print_r($arr);

// 1-methode: supprimer des elements et l'index avec unset():
echo "<h3> methode unset <h3/>";
unset($arr[1]);
print_r($arr);

// 2- methode pop() elle supprime le dernier element:

echo "<h3> methode pop <h3/>";
$arr1 = [1, 2, 3, 4];
array_pop($arr1);
print_r($arr1);

// 3- methode shift() elle supprime le premier element:
    
    echo "<h3> methode shift <h3/>";
$arr4 = [1, 2, 3];
array_shift($arr4);
print_r($arr4);

// 4- methode splice() => elle supprime plusieurs elements d'un coup
echo "<h3> methode splice <h3/>";
$arr5 = [1, 2, 3, 5, 6];
array_splice($arr5, 1, 2);
print_r($arr5);

// 4- methode list() => elle a récuperer le premier element et elle a stocké dans $a
echo "<h3> methode list <h3/>";
$arr2 = [1, 2, 3, 4, 5];
list($a) = $arr2;
list(,,, $c) = $arr2;
print_r($arr2);
print_r($arr2);
echo "$a\n";
// echo "$b\n";
echo "$c\n";

echo "<pre/>";
