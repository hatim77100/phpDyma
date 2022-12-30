<pre>
<?php
$filename = "./test.txt";

 var_export(file_exists($filename)) ;
 echo "</br>";
 // dir=directory is_dir=> est-ce un dossier
 var_dump(is_dir($filename));
 
 //# lire un fichier
 readfile(($filename));
 $txt = file_get_contents($filename);
 echo $txt;
 
 //# ecrire dans un fichier
 file_put_contents($filename, 'je suis une banane', FILE_APPEND);
 
 ?>

</pre>