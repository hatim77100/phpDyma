<?php
$a = 5;
$b = 1.5;

echo is_double($a);
echo "<br/>";
echo is_double($b);
echo "<br/>";
echo is_numeric($a);
echo "<br/>";
echo is_numeric($b);
echo "<br/>";

$c = 584646416455.79874;

// par défaut cette methode n'affiche pas les décimales
echo number_format($c);
echo "<br/>";
echo gettype($c);
echo "<br/>";


// Maintenant on va spécifié combient de décimal on veut garder
echo number_format($c, 2);