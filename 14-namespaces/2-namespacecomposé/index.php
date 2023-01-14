<pre>
<?php
use Dyma\{User, Admin};
use Dyma\Email;
use function Dyma\{func, func2};
use const Dyma\{TEST, TEST2};

require __DIR__ . '/lib/User.php';
require __DIR__ . '/lib/Email.php';

$user =new Dyma\User();

$user2 = new User();
echo "<br>";
$admin = new Admin();

func();
echo TEST;
echo "<br>";

$email = new Email();

?>
</pre>