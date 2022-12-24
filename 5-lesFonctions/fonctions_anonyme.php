<?php

// une fonction anonyme est une fonction qui n'a pas de nom:

$mycallback = function ($a, $b){
    echo $a * $b;
};

function func($callback) {
    $callback(5, 2);
}

func($mycallback);

// Héritage de variables globales:

$greetWord = "Bonjour";

$direBonjour = function ($name) use ($greetWord) {
  echo "$greetWord $name <br>";
};

$direBonjour("Paul"); // Bonjour Paul
$direBonjour("Jean"); // Bonjour Jean
