<?php

// +
echo "<pre>";
$a = [1, 2];
$b = [5, 7, 6];

print_r($a +$b);
echo "</pre>";

// == et ===

$c = [1, 2];
$d = [1, 2];

echo $c == $d;

// ... rest et spread

$e = [1];
$f = [2, 3];

echo "<pre>";
print_r([...$e, ...$f]);
echo "</pre>";
