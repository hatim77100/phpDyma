<pre>
<?php

$filename = "./test.txt";
$handle = fopen($filename, 'r+'); 

//# ecrire
// fwrite($handle, 'OOPS');

//#lire
// $data = fread($handle, 50); // là on 50 byte
// echo $data;

// pour lire l'intégralité du fichier

do {
    $data = fread($handle, 50);
    echo $data;
} while($data);

fclose($handle); /* La fonction fclose() permet de fermer un fichier après avoir lu ou écrit dans ce dernier.

C'est une bonne pratique de fermer le fichier à la fin d'une opération en mode binaire */

?>
</pre>