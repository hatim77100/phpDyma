<pre>
<?php


class User 
{
    
    function __construct(public $name,public $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo 'construct called';
    }
    // la fonction destruct permet de faire des opérations de nettoyage lorsqu'un objet n'est plus utilisé:
    function __destruct()
    {
        echo "destruct called";
    }
}

$user = new User('Jean', 30);
$user2 = new User('Sarah', 25);

var_dump($user);
echo "<br><br>";
$user = null;
var_dump($user2);

echo "<br><br>";
// un case d'utilisation de la fonction destruct qui permet de faire des opérations de nettoyage lorsqu'un objet n'est plus utilisé

class Reader 
{
    function __construct(public $filename)
    {
        $this->handle = fopen($filename, 'r');
        echo 'construct called';
    }

    function read()
    {
        echo fread($this->handle, 10);
    }

    function __destruct()
    {
        fclose($this->handle);
        echo "destruct called";
    }
}

$reader = new Reader(__DIR__.'/text.txt');
$reader->read();
$reader = null;

?>
</pre>