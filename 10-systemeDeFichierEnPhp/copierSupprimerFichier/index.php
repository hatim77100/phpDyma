

<pre>
<?php
$filename = "./test.txt";


 echo "</br>";


 copy($filename, "copy.txt");

 /*Attention ! Ces fonctions ne placent pas les dossiers / fichiers dans la corbeille, mais les suppriment définitivement*/
//# supprimer un fichier

// unlink($filename);
 
//La fonction rmdir() permet de supprimer un dossier.

 ?>

</pre>