<?php

try {
  $pdo = new PDO(
    'mysql:host=localhost;dbname=auth_test',
    'root',
    'H@maylou77',
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
  );
} catch (PDOException $e) {
  echo $e->getMessage();
}

return $pdo;