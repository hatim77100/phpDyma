<?php
//string
$a = 'hello';
//integer
$b = 1;
//float = double
$c = 2.5;
//boolean
$d = true;
// array
$e = [1, 2, 3];
//object
$f = new DateTime();
//Null
$g = NULL;

echo is_string($a);
echo "<br/>";
echo is_string($b);

echo "<br/>";
echo gettype($a);
echo "<br/>";
echo gettype($b);
echo '<br/>';
echo gettype($c);
echo '<br/>';
echo gettype($d);
echo '<br/>';
echo gettype($e);
echo '<br/>';
echo gettype($f);
echo '<br/>';
echo gettype($g);
echo '<br/>';


