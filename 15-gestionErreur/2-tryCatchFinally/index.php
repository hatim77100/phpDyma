<pre>
<?php

function test() 
{
    throw new Error('erreur');
    // throw new Exception('Exception');
}

try {
    test();
} catch(Exception $e) {
    var_dump($e);
} catch(Error $e) {
    // echo 'erreur';
} finally {
    echo 'In finnaly'; // les instructions présentes dans finally seront toujours exécutées.
}
//  echo 'salut';

/* Les méthodes disponibles sur les Exception
La classe Exception dispose d'un ensemble d'accesseurs permettant de récupérer des éléments de l'exception :*/
/*getMessage();   // message de l'exception
getCode();  // code de l'exception
getFile();   // nom du fichier source
getLine();    // ligne du fichier source
getTrace();   // un tableau de backtrace()
getPrevious();   // exception précédente (depuis PHP 5.3)
getTraceAsString();  // chaîne formatée de trace*/

?>
</pre>