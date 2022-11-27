<?php

$age = 15;
$isAllowed;

if ($age > 10) {
    $isAllowed = true;
} else {
    $isAllowed = false;
}
echo $isAllowed;

// opérateur ternaire 

$isAllowed = $age > 10 ? true : false;

echo '<br/>', $isAllowed;

// Operateur de fusion

$a = null;
$b = 'hello';
$c;

$c = $a ?? $b ?? 'inconu';
echo '<br/>', $c;