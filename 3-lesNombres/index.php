<?php

$a = 5;
echo gettype($a);
echo "<br/>";
echo PHP_INT_MAX;
echo "<br/>";
echo PHP_INT_MIN;
echo "<br/>";
echo PHP_INT_SIZE;
echo "<br/>";

$b = 0.3;
echo gettype($b);
echo "<br/>";
echo PHP_FLOAT_MAX;
echo "<br/>";
echo PHP_FLOAT_MIN;
echo "<br/>";
// dans cet exemple on aura false car dans les doubles 0.1 + 0.2 = 0.30000000004
echo 0.1 + 0.2 === 0.3;
echo "<br/>";
