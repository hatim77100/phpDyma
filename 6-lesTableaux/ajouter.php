<?php

echo "<pre>";

$arr = [1];
$arr[] = 2;
print_r($arr);
$arr = [...$arr, 3];
print_r($arr);

array_push($arr, 4, 5);
print_r($arr);

// ajouter des éléments au début du tableau
array_unshift($arr, 48);
print_r($arr);
 
// merger deux tableaux:
$arr2 = ['a', 'b', 'c'];
$arr3 = array_merge($arr, $arr2);

print_r($arr3);


/* Pour créer un tableau d'une longueur donnée, rempli de la même valeur il faut utiliser :

array_fill( int $start_index , int $count , mixed $value ) : array;
 ## Le premier argument est l'index de départ, le deuxième argument 
le nombre d'éléments à insérer et le troisième argument la valeur à insérer.*/

var_dump(array_fill(10, 5, 42));
echo "</pre>";

