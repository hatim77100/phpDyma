<?php
// programmation fonctionnelle c'est le faite d'eviter de modifier l'etat de votre application
echo "<pre>";

$arr = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

// $arr3 = array_map(function($a) {
//     return $a + 1;
// }, $arr);

$arr3 = array_map(function ($a, $b) {
    echo "$a\n";
    echo "$b\n";
}, $arr, $arr2);
print_r($arr3);

// # filter
$arr4 = ['a', 'b', 'c'];
$arr5 = array_filter($arr4, fn ($a) => $a !== 'b');
print_r($arr5);

// #reduce
$panier = [
    [
        'prix' => 50,
        'title' => 'chaussure'
    ],
    [
        'prix' => 70,
        'title' => 'chaussettes'
    ],
    [
        'prix' => 30000,
        'title' => 'ds3'
    ]
];
$count = array_reduce($panier, function($acc, $article) {
    $acc += $article['prix'];
    return $acc;
}, 0);
echo $count;

echo "<pre/>";
