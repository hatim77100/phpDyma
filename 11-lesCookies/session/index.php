<pre>
<?php
session_start([
    'save_path' => __DIR__ . '/sessions',
    'cookie_lifetime' => 500,
]);

print_r($_SESSION);

$_SESSION['name'] = 'jean';

?>
</pre>
<h1><?= $_SESSION['name'] ?></h1>