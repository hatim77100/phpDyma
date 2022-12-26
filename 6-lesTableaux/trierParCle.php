<?php

echo "<pre>";

// $a = [22, 1, 33, 235, 12, 45];
// $b = ['test', 'Test', 'Aa', 'B', 'b', 'foo', 'Foo'];
$c = ['a' => 'b', 'foo' => 'bar', 'Hello' => 'world', 'Ciao' => 'Hello'];

// # Tri par key
// ksort()
ksort($c);
print_r($c);

// krsort()
krsort($c);
print_r($c);

// uksort()
// uksort($c, 'strcmp');
uksort($c, 'strcasecmp');
print_r($c);

$d = ['img1.png', 'img11.png', 'img2.png'];
$e = ['img1.png', 'Img11.png', 'IMG2.png'];
natsort($d);
natcasesort($e);
print_r($d);
print_r($e);

/* Mélanger les éléments d'un tableau
La fonction shuffle() permet de mélanger les éléments d'un tableau.*/
$tableau = [1, 2, 3];
shuffle($tableau);
print_r($tableau);

echo "<pre/>";
