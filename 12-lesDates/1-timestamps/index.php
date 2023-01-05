<pre>
<?php

// time();
$time = time();
echo $time;
echo "<br/>";

// mktime();

$time2 = mktime(1, 1, 1, 1, 1, 21);
echo $time2;
echo "<br/>";

// strtotime();

$time3 = strtotime('21-02-15 15:01:05');
echo $time3;
echo "<br/>";

// date();
date_default_timezone_set('Europe/paris');
echo date('d/m/Y à G:i:s', $time);
echo "<br/>";


?>
</pre>