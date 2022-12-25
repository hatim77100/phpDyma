<?php

// Une référence permet d'accéder au contenu d'une variable en utilisant plusieurs noms.

// L'assignation par référence
// L'utilisation de =& permet d'effectuer une assignation par référence :

$var1 = &$var2; // Pointent sur le même contenu
var_dump($var1, $var2); // NULL pour le moment
$var2 = 42;
echo $var1; // 42

/* Ici, les deux variables pointent sur la même valeur.
  Si vous modifiez la valeur d'une des variables, vous la modifiez donc pour l'autre. */

  