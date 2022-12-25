<?php

$b = [3, "test", true];

echo "<pre>";
var_dump($b);
echo $b[1];
echo "</pre>";

$c = ["cas" => "test1"];
$d = ["cas" => "test1", 3];

echo "<pre>";
echo $c["cas"];
var_dump($d[0]);
echo "</pre>";
