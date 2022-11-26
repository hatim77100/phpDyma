<?php

// dans ces cas de figure on a une conversion implicite
$a = 1 + 2.0;
$b = "5";
$b += 1;
$b+= 0.5;

echo $a;
var_dump($a);
var_dump($b);

// casting
$c = (int)"5";
$d = (int)false;
$e = (string)true;

var_dump($c);
echo "<br/>";
var_dump($d);
echo "<br/>";
var_dump($e);
