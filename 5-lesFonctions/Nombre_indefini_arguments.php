<?php

echo max(1, 458, 655, 151);
echo "<br/>";
function my_min()
{
    $a = func_get_args();
    $firstArg = func_get_arg(0);
    echo $firstArg;
    // print_r($a);
    // return min();
}

my_min(1, 2, 5, 0, 9);
echo "<br/>";
// les nouvelles methodes en php: opérateur rest

function mymin(...$rest)
{
    print_r($rest);
}
mymin(1, 2, 3);
