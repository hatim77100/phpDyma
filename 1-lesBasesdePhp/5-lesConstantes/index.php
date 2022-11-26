<?php

// première façon de déclarer une constante:

define('MYCONST', 'Hello World !');
echo MYCONST;

// deuxième façon de déclarer une constante:

const A = 'test';
echo A;

/* La différence entre const et define c'est que 
define il va être créer au moment de l'exécution de script
et const va être créer au moment de déclaration.
*/

