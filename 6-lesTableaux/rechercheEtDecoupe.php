<?php

echo "<pre>";

// methode array_search(value, array, bool= souvent True(empêche les conversions de type)));  permet de rechercher la clé associée à la valeur recherchée.
//si plusieurs éléments ont la valeur recherchée, seule la clé du premier élément est retournée.
$arr = [1, 2, 3];
$arr1 = ["foo" => "bar", "hello" => "world"];
$res = array_search(3, $arr);
$res1 = array_search("world", $arr1, true);
echo $res;
echo "<br/>";
echo $res1;

echo "<br/>";
echo "<br/>";
echo "<br/>";

/* methode array_column(array, key) :  qui permet d’extraire toutes les valeurs d’un tableau multidimensionnel pour la clé indiquée
sans modifier le tableau d'origine.*/
$arr3 = [
    [
        'name' => 'jean',
        'age' => 12
    ],
    [
        'name' => 'Julie',
        'age' => 13
    ]
];

$res2 = array_column($arr3, 'name');
print_r($res2);

/* methode array_slice(array, index à laquel on veut extraire, nombre d'element à extraire, bool = facultatif au cas-où si on veut preserver les index d'origine)
 => extraire une portion de notre tableau */

$arr3 = [1, 2, 3, 4];
$res3 = array_slice($arr3,1, 2, true);
print_r($res3);

echo "<pre/>";
