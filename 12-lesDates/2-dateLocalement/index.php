<?php

$time = time();
$formateur = new IntlDateFormatter('fr_fr', IntlDateFormatter::LONG, IntlDateFormatter::LONG);
$formateurArabe = new IntlDateFormatter('ar_ma', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

echo $formateur->format($time);
echo "<br/>";
echo $formateurArabe->format($time);
// echo date('l d F', $time);