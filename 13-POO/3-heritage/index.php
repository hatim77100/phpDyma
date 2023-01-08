<pre>
<?php


class User
{

    public $isAdmin = false;

    function __construct(public $name)
    {

    }
    function greeting() {
        echo "hello user";
    }
}

class Admin extends User {
    public $isAdmin = true;
    function __construct($name)
    {
        parent::__construct($name);
    }
    // la fonction greeting() de la classe enfante est prioritaire sur la fonction greeting() de la classe parent
    function greeting()
    {
        echo "Hello admin";
    }
}

$user = new User('Jean');
$admin = new Admin('Sarah');
var_dump($user);
var_dump($admin);

$admin->greeting();

?>
</pre>