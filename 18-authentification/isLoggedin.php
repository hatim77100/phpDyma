<?php

function isLoggedIn()
{
  $pdo = require_once './database.php';
  $sessionId = $_COOKIE['session'] ?? '';
  if ($sessionId) {
    $sessionUserStatement = $pdo->prepare('SELECT * FROM session JOIN user on user.id=session.userid WHERE session.id=?');
    $sessionUserStatement->execute([$sessionId]);
    $user = $sessionUserStatement->fetch();
  }

  return $user ?? false;
}