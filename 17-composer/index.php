<?php

require './vendor/autoload.php';

use myproject\database\models\User;
use Symfony\Component\ErrorHandler\Debug;

Debug::enable();

$user = new User();