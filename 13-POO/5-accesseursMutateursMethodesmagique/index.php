<pre>
<?php

class User
{
    private $fullName;
    // methode magic
    function __construct(private $firstName, private $lastName)
    {
        $this->fullName = $firstName.' '.$lastName;
    }
     function __destruct()
     {
        
     }

     function __get($prop)
     {
        return $this->$prop;
     }

     function __set($prop, $value)
     {
        $this->$prop = $value;
        if($prop === "firstName" || $prop === "lastName") {
          $this->fullName = $this->firstName . ' ' . $this->lastName;
        }
     }

    // function getFullName() {
    //     return $this->fullName;
    // }
    
    // function getFirstName() {
    //     return $this->firstName;
    // }

    // function getLastName() {
    //     return $this->lastName;
    // }

    // function setFirstName($value) {
    //     $this->firstName = $value;
    //     $this->fullName = $this->firstName. ' '.$this->lastName;
    // }

}

$user = new User('Jean', 'dupont');

echo $user->fullName;
echo '<br>';
 $user->firstName = 'Paul';
echo $user->fullName;
// echo $user->getFullName();
// echo "<br>";
// echo "<br>";
// $user->setFirstName('paul');
// echo $user->getFullName();

?>
</pre>