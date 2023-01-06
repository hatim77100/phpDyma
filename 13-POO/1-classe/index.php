<pre>
<?php

class User
{
    public string $name = 'Jean';

    public function greeting() 
    {
        var_dump($this);
        return "Bonjour $this->name";
    }
}
$user = new User();
echo $user->name;
echo "<br/>";

$user->name = 'Paul';
echo $user->name;

echo "<br/>";
echo $user->greeting();

echo "<br/>";
// var_dump($user)

?>
</pre>