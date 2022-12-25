<?php
// methode ancienne pour declarer un tableau

$a = array(1, "test", true);

echo "<pre>";
print_r($a);
echo "</pre>";

// methode récente pour declarer un tableau

$b = [3, "test", true];
echo "<pre>";
print_r($b);
echo "</pre>";

// tableau associatif:
$c = ['test' => 'foo', 'bar' => 'hello'];
echo "<pre>";
print_r($c);
echo "</pre>";