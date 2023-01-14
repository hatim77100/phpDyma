<pre>
<?php


error_reporting(E_ALL);
ini_set('display_errors', '1');

class MyCustomErrorException extends Exception
{

} 

function test() 
{
    // throw new MyCustomErrorException();
    throw new Exception();
}

try {
    test();
}catch(MyCustomErrorException $e) {
    echo 'other';
}
catch(Exception $e) {
    header('Location: /error.php');
}

?>
</pre>