<?php

//int
//float
//string
//bool
//array
//mixed


//Pour empêcher le casting et montrer les erreurs dans votre IDE, il est possible, et recommandé, d'utiliser le mode strict.
declare(strict_types=1);

function add(int | float $p1, int $p2): int | float {
    return $p1 + $p2;
}

echo add(3.5, 5);

//Vous pouvez utiliser le raccourci ?type Pour préciser qu'un paramètre peut être null:
function sumInt(?int $a, ?int $b): ?int
{
  return $a + $b;
}
echo sumInt(null, 3), "<br>"; // 3
echo sumInt(null, null), "<br>"; //