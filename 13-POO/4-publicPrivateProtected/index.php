<pre>
<?php

class User
{
    // private $secret = '15456465';
    // private $secret = '15456465';
    protected $secret = '15456465';
    function __construct(public $name)
    {

    }

    function createMdp() {
        echo $this->secret;
    }

}

class  Admin extends User
{
    function test() {
        echo $this->secret;
    }
}

$user = new User('Jean');
$admin = new Admin('Sarah');

echo $user->name; 
echo $user->createMdp(); 
var_dump($user);
var_dump($admin);

$admin->test();

?>
</pre>