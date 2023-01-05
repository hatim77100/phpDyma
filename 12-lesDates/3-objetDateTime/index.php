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

$datetime = new DateTime('21-02-15 15:01:05');
print_r($datetime);
echo $datetime->format('d/m/Y à G:i:s');
echo "<br/>";

// Afficher la date d'aujourd'hui

$datetime2 = new DateTime('now', new DateTimeZone('Europe/paris'));
echo $datetime2->format('d/m/Y à G:i:s');
echo "<br/>";
$datetime2->setTimezone(new DateTimeZone('UTC'));
echo $datetime2->format('d/m/Y à G:i:s');

?>
</pre>