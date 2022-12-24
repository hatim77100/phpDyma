<?php
$b = 2;

function func()
{
    // dans le bloc de la fonction on a pas acces aux variables global sauf si on précise le keyword (global)
    global $b;
    echo $b;
}

func();

echo "<br/>";

function test()
{
  $a = 0;
  static $b = 0;
  echo $a, '<br>';
  echo $b, '<br>';
  $a++;
  $b++;
}
test(); // 0 0
test(); // 0 1
test(); // 0 2
test(); // 0 3
