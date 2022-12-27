<?php

echo "<pre>";

$a = [1, 2, 3];
$b = [4, 5, 6];

/*La fonction array_diff() permet de retourner les éléments
 dont les valeurs sont présentes uniquement dans le premier tableau. */
 // $c = array_diff($a,$b);
 
 /* La fonction array_intersect() permet de retourner les éléments 
 du premier tableau dont les valeurs sont présentes dans tous les tableaux. */
$c = array_intersect($a,$b);
print_r($c);

echo "<pre/>";
