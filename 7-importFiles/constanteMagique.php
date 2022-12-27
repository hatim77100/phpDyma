<?php

echo __FILE__, "<br>";
echo __DIR__, "<br>";
echo __LINE__, "<br>";
function fonctionDeTest()
{
    echo __FUNCTION__, "<br>";
}
fonctionDeTest();
/* __FILE__ : contient le chemin complet vers le nom du fichier où elle est utilisée.

__DIR__ : contient le chemin complet vers le dossier dans lequel le fichier exécuté se trouve.

__LINE__ : contient le numéro de la ligne dans le fichier exécuté.

__FUNCTION__ : contient le nom de la fonction dans laquelle elle est utilisée. */