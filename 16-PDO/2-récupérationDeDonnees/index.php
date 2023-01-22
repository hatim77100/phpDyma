<pre>
<?php

$dns = "mysql:host=localhost;dbname=test";
$user = "root";
$pwd= "H@maylou77";

try {
    $pdo = new PDO($dns,$user,$pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "connexion db ok ! ";
} catch(PDOException $e) {
    echo "Connexion échouée : ". $e->getMessage();
}

class User 
{

    
  function greeting() 
  {
    echo 'Hello '. $this->firstname . ' ' . $this->lastname;
  }
}

$statement = $pdo->prepare('SELECT * FROM user WHERE iduser = 18');

$statement->execute();

// print_r($statement->fetchAll(PDO::FETCH_ASSOC));

$user = $statement->fetchObject('User');
print_r($user);

$user->greeting();

?>
</pre>