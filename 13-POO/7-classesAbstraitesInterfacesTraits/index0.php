<pre>
<?php

abstract class Greeting
{
    function setFirstName($value)
    {
        $this->firstName = $value;
    }
    function getFirstName()
    {
        return $this->firstName;
    }
    function setLasttName($value)
    {
        $this->lastName = $value;
    }
    function getLastName()
    {
        return $this->lasttName;
    }

    abstract function greeting();
}

class User extends Greeting
{
    function greeting()
    {
        echo "Je suis un user";
    }
}

class Admin extends Greeting
{
    function greeting()
    {
        echo "je suis un admin";
    }
}

$u = new User();
$u->setFirstName('Jean');
$u->greeting()

?>
</pre>