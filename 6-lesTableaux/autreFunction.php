<?php
echo "<pre>";

$arr = ['orange', 'bleu', 'yellow'];

$value = array_rand($arr);
echo $arr[$value] ;

/* Retourner toutes les valeurs uniques d'un tableau:
La fonction array_unique() permet de retourner les valeurs uniques d'un tableau.*/
$tableau = [1, 2, 4, 2, 42, 5, 42, 8];
$sortie = array_unique($tableau);
print_r($sortie);

echo "<pre/>";