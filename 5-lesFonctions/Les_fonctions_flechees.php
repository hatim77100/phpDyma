<?php

$p1 = 6;
$p2 = 8;
$p3 = 50;
function calculator($p1, $p2, $operator) {
    return $operator($p1 , $p2);
}

// $addition = function ($p1, $p2) {
//     return $p1 + $p2;
// };

// echo calculator($p1, $p2, function($p1, $p2) {
//     return $p1 + $p2;
// });

// function fléché: on utilise pas le mot clé return. et on'a accés directement aux variables global sans le mot clé use():
$addition = fn ($p1, $p2) =>  $p1 + $p2 +$p3;

 echo calculator($p1, $p2, $addition);




