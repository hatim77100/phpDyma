<?php
//1-require
// require 'lib.php';
// require 'lib.php';

//2- require_once
require_once 'lib.php'; 
require_once 'lib.php'; 

//3 - include => malgré que y'a une erreur on continue l'exécution de script
include 'test.php';
echo "salut";
//4- include_once permettent de demander à l'interpréteur de vérifier que le fichier n'a pas déjà été importé.

echo $a; // 1