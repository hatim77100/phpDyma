<?php


function func($a, $b = 2)
{
    return $a + $b;
}

$c = func(5);
echo $c;

// les paramètres nomé

function greeting($firstName, $lastName)
{
    echo "Bonjour $firstName $lastName";
}

greeting("hatim", "najoua");
echo "<br/>";
// Les paramètres nommés permettent de passer les arguments en fonction du nom des paramètres et non de l'ordre dans lequel ils sont définis.
greeting(lastName: "hatim", firstName: "najoua");
