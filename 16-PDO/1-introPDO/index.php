<pre>
<?php

$dns = "mysql:host=localhost;dbname=test";
$user = "root";
$pwd= "H@maylou77";

try {
    $pdo = new PDO($dns,$user,$pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch(PDOException $e) {
    echo "Connexion échouée : ". $e->getMessage();
}

$statement = $pdo->prepare('INSERT INTO user VALUES(
    DEFAULT,
    ?,
    ?,
    ?,
    ?
)');
    
    $user = [
        'firstname' => 'Jean',
        'lastname' => 'Pierre',
        'email' => 'jeanpierre@gmail.com',
        'password' => '123'
    ];

$statement->execute([
    $user['firstname'],
    $user['lastname'],
    $user['email'],
    $user['password'],
]);

// La méthode query il prepare et execute en même temps:
// $statement2 = $pdo->query('INSERT INTO user VALUES(
//     DEFAULT,
//     "Adam3",
//     "Smith",
//     "adam@gmail.com",
//     "123"
// )')


?>
</pre>