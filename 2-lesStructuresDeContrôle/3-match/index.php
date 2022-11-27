<?php

$firstName = "Jean";
$secondName = "karim";
// la comparaison est triple egale
$res = match ($firstName) {
    'Jean' => 'Bonjour Jean',
    'Paul' => 'Bonjour Paul !',
    default => 'Tu es qui ?'
};

echo $res, '<br/>';

// 2ème méthode

echo match ($secondName) {
    'Jean' => 'Bonjour Jean',
    'Paul' => 'Bonjour Paul !',
    default => 'Tu es qui ?'
};

/**************/

function test($name)
{
    echo  '<br/>', 'Bonjour ', $name;
    // return $name;
}

echo match ($secondName) {
    'karim' => test('hatim'),
    'Paul' => 'Bonjour Paul !',
    default => 'Tu es qui ?'
};

/***************** */
$age = 10;

echo match (true) {
    $age = 10 => '<br/> Bienvenue',
    default => '<br/> Rentre chez toi ?'
};